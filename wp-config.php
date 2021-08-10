<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'WPCACHEHOME', 'C:\xampp\htdocs\athenaknowledgehub\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lZ8]B}<As*~Yi 4)`3BXKh%d.5O!oJ#4<N~mmdz6AKNze>EEr~;Q37R0Eo]ZHTH~' );
define( 'SECURE_AUTH_KEY',  '*Yp/HlDbb=uk.-B:KvbYo?SAav#_@0HQ(TeoO}y}F|@lH|z#wntQ/}Kw$t;?,H&c' );
define( 'LOGGED_IN_KEY',    '#)2O_Gy.8Zt<B*Lw2I9is)Ps2}I(;E+^4|;KKSV76${k]Jf[xY.uO#WD`<{w@0PX' );
define( 'NONCE_KEY',        'r1!64{c`9G8$i]6p&xrl:nnF, A>[BB/ewVcu^%#<.J#j+G5FtKO7^?f{y72FV+G' );
define( 'AUTH_SALT',        'jq-mlP+|T}96$[v%sFi!cbXdm9uoL[l*s9&mk;:nS-%$Qte8PJwh]&9#D_:=ta7D' );
define( 'SECURE_AUTH_SALT', 'F/IYeIL9H6%Pm|b}E?)41|5!^I@4@nH?d^t8oGzc4`%+::$tW_Sn~;@k3FmNxc||' );
define( 'LOGGED_IN_SALT',   '`9$M;6-rpx4Insw=lFy!qgZ-iSArgx|,zMBo1VVA9a7^RSQ~Hh7>26iDZzgE)iRm' );
define( 'NONCE_SALT',       '!cYr];VPd@MNnHj2g]JlXdC7Z%`G%1V>QS9`v7R`L~Vr;c]-aBGz%1(I*(4P>p5?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_ALLOW_MULTISITE', true );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
