// Dirs
var baseDir = 'wp-content/themes/fipradotcom/';
var sassDir = baseDir + 'sass/';
var imgDir = baseDir + 'img/';

// Gulp
var gulp = require('gulp');

// Sass/CSS stuff
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var minifycss = require('gulp-minify-css');

// Images
//var svgmin = require('gulp-svgmin');
var imagemin = require('gulp-imagemin');

//Others
var plumber = require('gulp-plumber');

// compile all your Sass
gulp.task('sass', function (){
    gulp.src([sassDir + 'style.scss'])
        .pipe(plumber())
        .pipe(sass({
            outputStyle: 'expanded'
        }))
        .pipe(prefix(
            "last 1 version", "> 1%", "ie 8", "ie 7"
        ))
        //.pipe(minifycss())
        .pipe(gulp.dest(baseDir));
});

// Images
//gulp.task('svgmin', function() {
//    gulp.src('./dev/img/svg/*.svg')
//        .pipe(svgmin())
//        .pipe(gulp.dest('./dev/img/svg'))
//        .pipe(gulp.dest('./prod/img/svg'));
//});

gulp.task('imagemin', function () {
    gulp.src(imgDir + '**/*')
        .pipe(plumber())
        .pipe(imagemin())
        .pipe(gulp.dest(baseDir + 'img-min'));
});

gulp.task('default', function(){

    gulp.run('sass');
    //gulp.run('imagemin');

    // watch me getting Sassy
    gulp.watch(sassDir + "**/*.scss", function(event){
        gulp.run('sass');
    });
    // images
    gulp.watch(imgDir + "/**/*", function(event){
        //gulp.run('imagemin');
        //gulp.run('svgmin');
    });
});