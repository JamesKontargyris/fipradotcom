// Dirs
var baseDir = 'wp-content/themes/fipradotcom/';
var sassDir = baseDir + 'sass/';
var imgDir = baseDir + 'img/';
var jsDir = baseDir + 'js/';
var minjsDir = baseDir + 'minjs/';

// Gulp
const gulp = require('gulp');

// Sass/CSS stuff
const sass = require('gulp-sass');
const prefix = require('gulp-autoprefixer');

// Images
const imagemin = require('gulp-imagemin');

// JS
const uglify = require('gulp-uglify');

//Others
const rename = require('gulp-rename');
const browsersync = require('browser-sync').create();

// BrowserSync
function browserSync(done) {
    browsersync.init({
        proxy: "fipradotcom.site",
        notify: false,
        open: false,
        port: 3000
    });
    done();
}

// BrowserSync Reload
function browserSyncReload(done) {
    browsersync.reload();
    done();
}


// Compile Sass
function styles() {
    return gulp
        .src([sassDir + 'style.scss'])
        .pipe(sass({
            outputStyle: 'nested'
        }))
        // .pipe(prefix(
        //     "last 1 version", "> 1%", "ie 8", "ie 7"
        // ))
        .pipe(gulp.dest(baseDir));
}

// Optimize Images
function images() {
    return gulp
        .src(imgDir)
        .pipe(newer(imgDir + 'optimised/'))
        .pipe(
            imagemin([
                imagemin.gifsicle({interlaced: true}),
                imagemin.jpegtran({progressive: true}),
                imagemin.optipng({optimizationLevel: 5}),
                imagemin.svgo({
                    plugins: [
                        {
                            removeViewBox: false,
                            collapseGroups: true
                        }
                    ]
                })
            ])
        )
        // Puts optimised images in their own directory
        .pipe(gulp.dest(imgDir + 'optimised/'));
}

// uglify all JS
function scripts() {
    return gulp
        .src(jsDir + '**/*.js')
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        // Adds min to filename
        .pipe(gulp.dest(minjsDir));
}

// Watch files
function watchFiles(done) {
    // Uses polling to get around issues with changes made to files locally that are not reflected on the virtual machine
    // (https://github.com/floatdrop/gulp-watch/issues/213)
    gulp.watch(sassDir + '**/*.scss', {usePolling: true, ignoreInitial: false}, gulp.series(styles, browserSyncReload));
    gulp.watch(baseDir + '**/*.php', {usePolling: true, ignoreInitial: false}, gulp.series(browserSyncReload));
    done();
}


// call these using gulp js, gulp img etc.
exports.css = gulp.series(styles);
exports.js = gulp.series(scripts);
exports.img = gulp.series(images);
exports.watch = gulp.series(watchFiles, browserSync);
exports.build = gulp.series(scripts, images, styles);
exports.scripts = gulp.series(scripts);

// call this using gulp default or just gulp
exports.default = gulp.series(watchFiles, browserSync);