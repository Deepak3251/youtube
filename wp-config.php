<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'youtube' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.HCUYx{NY.$H_Kf-mDyD2SHuWD~MxYuS~ja%()=1x]x_1|6sbsA6[3~I-s863vpP' );
define( 'SECURE_AUTH_KEY',  'uCULP.$K4B|yb)j#~reB_BIR0*,R9=NFOwQS;FZ^Q Ni(J5WD%V1I0a^$NcCxw8p' );
define( 'LOGGED_IN_KEY',    'wHAJ9_%+%6i|Ql4f^_Fj*f876ZwE$1H29h1|},@:L,F|7H_(Xy(xrO~aGTs^wxkE' );
define( 'NONCE_KEY',        'cw(cR2!IS@<`LX: 3eG#OQ-Oe4pW9:3]wCEp:w39y#j~l-;]$Qpa]HXBZB?&sEqp' );
define( 'AUTH_SALT',        'lI5zmmu6D.pu|5_J}k4MQf>b5l|DSNg8`XO^)RJ24G9/Mj]o!)t#j~ikZ`1safC]' );
define( 'SECURE_AUTH_SALT', '>F-c&]wujan)]T_LHml<HkV_z4mdnnwr:Y7IpM|z+lrkh=d=FyR{VGuYP:]K1$hy' );
define( 'LOGGED_IN_SALT',   'XX<uQckp=y<>j(U<Y+-H`x!8SQ;[[-9jKprKDoGK:9mZ*mzSsjSqN0rEi1R/`bzE' );
define( 'NONCE_SALT',       'IT9q3vBW,*,(/gNIU?a3>m1bd)[,Wrpa#u4qQ2}n*{r8D2-/z}D$}._3{3+ R[>i' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
