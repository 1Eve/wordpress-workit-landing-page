<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'workit-landing' );

/** Database username */
define( 'DB_USER', 'workitadmin' );

/** Database password */
define( 'DB_PASSWORD', 'workitadmin' );

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
define( 'AUTH_KEY',         'hHR<j?h?kvH:m&?1[yj7e%T.hTMaZOOn3.2fDlv/I*j-|Wn~FPbt9x$sk_qW]W_5' );
define( 'SECURE_AUTH_KEY',  '1]=I?dRzeZo|s6f3[TbgI8 -qzvh-+*XmsyhQK76^x/Be]?v^.YN?:=uuGKeLF~*' );
define( 'LOGGED_IN_KEY',    '=wU>2(%xkA*#.VrOPM~9tS_W@),.&Q~l4rR%do3uW5FNLR=AWNO2)_4~/=.Mc {+' );
define( 'NONCE_KEY',        '*!,6_SI{qa1[lQ9?*.kz,Vc?gO*:$e%C>x<@jyb.*3jht2Kegq+VoPlM|HQu]Q&0' );
define( 'AUTH_SALT',        'zEXYq?Qoh5_h66lWC7V,cyY;HS?E(E$q!&oS0-A*d9S5qODB)~[DoKCs$3Rw(X0x' );
define( 'SECURE_AUTH_SALT', 'e{de0gJ!8ULK}@#0Wm^{5t2v%L>ql$(mlgz;N82VTZXn@XW:Dm0&2i1S]+jM)3CW' );
define( 'LOGGED_IN_SALT',   'v.=hTYpXLWC=|g-&Es}7%zu`(p+k.^B?sSYJe*2luszW%&_,g&=HfIcS8I|5t0dD' );
define( 'NONCE_SALT',       '2FfNxd5f]U4jAJBx*IMt1wlmf`VNTpl^_u)rRW{?T]FJZrkp1,Fj7jV44Df&}hY=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wk_';

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
