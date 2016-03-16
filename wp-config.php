<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    include(dirname(__FILE__) . '/local-config.php');
    define('WP_LOCAL_DEV', true);
}
else {
    define('ENV', 'production');
    // Don't show deprecations; useful under PHP 5.5
    error_reporting(E_ALL ^ E_DEPRECATED);

    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define('DB_NAME', 'fipradotcom');

    /** MySQL database username */
    define('DB_USER', 'forge');

    /** MySQL database password */
    define('DB_PASSWORD', 'm3sdsXvvqSbuA5lluN4n');

    /** MySQL hostname */
    define('DB_HOST', 'localhost');

    /** Database Charset to use in creating database tables. */
    define('DB_CHARSET', 'utf8');

    /** The Database Collate type. Don't change this if in doubt. */
    define('DB_COLLATE', '');

    /**#@+
     * Authentication Unique Keys and Salts.
     *
     * Change these to different unique phrases!
     * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
     * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
     *
     * @since 2.6.0
     */
    define('AUTH_KEY',         '_h/4:KOwlr-woiJ:aoUc-T%%OJ(L(}w7Tn^@P+,tHrM!=#O~=Vu cf}qZ>sftwG@');
    define('SECURE_AUTH_KEY',  '8nsS3QtqqBY}o0v>OI[/0=FM$$~8 _W0Xg^>ErvFlP/tx$_5x[9]W%owcy~z19?|');
    define('LOGGED_IN_KEY',    'b kM&u/:bo|q&^U2t;)~xuN@WBAsEI>G0On)NR@cl0c4a+{.I-g>OBF+~-a(pI8t');
    define('NONCE_KEY',        'MajtMWvG^!<I5#--aKB]*qoZH{:[-z+U$-Nt=fQRUKoof.:GKf=J!M9+^Nq`0<3Z');
    define('AUTH_SALT',        'zd!FCfju1d]&D7Y&P?m~Iv&>/YA9aKVv(Qiu@-Qxq?FR%C/D<pxx=i{W&jzCE[+c');
    define('SECURE_AUTH_SALT', 'Pl][!PO[|a6^VQ[&IAT?bfPvbl4]&^5wf`d^Yip|HMoo*X>v#,`0Zjky3h%~ENnp');
    define('LOGGED_IN_SALT',   '+B:i_^!lE &3Lfb}QfCkRb[=$%W5#UiU|e7u1!5=VeF.dL~uC%D!c,*43~@QGjD_');
    define('NONCE_SALT',       '7]W-]>h6m+3C@92OWc+ MH@&2!!1H}nlX!3J|g,razx!x8+uN:[3-R+?9|u(cEfp');

    /**#@-*/

    /**
     * For developers: WordPress debugging mode.
     *
     * Change this to true to enable the display of notices during development.
     * It is strongly recommended that plugin and theme developers use WP_DEBUG
     * in their development environments.
     */
    define('WP_DEBUG', false);
}

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/vagrant/code/fipra/fipradotcom/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
$table_prefix  = 'wp_';

define( 'WPCF7_AUTOP', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
