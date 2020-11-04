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
define( 'DB_NAME', 'igoedigi_fast' );

/** MySQL database username */
define( 'DB_USER', 'igoedigi_thomas' );

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
define( 'AUTH_KEY',         'z-3h}OOjO<m+*SEq,=J6_kb:oy/U1IijLznz=[LLcZ>hA 9qVGb 8[0F VH}0P~>' );
define( 'SECURE_AUTH_KEY',  'zjf8pSj`wTNW66P-+VUpOx8Q/g%77g+Cq>jtaGcb{duNO3isVp-#dJ1$GmTyZX`V' );
define( 'LOGGED_IN_KEY',    'zl2nu@9v`] !lzZsC7B!q1Uo;h,lN@#LQ&(H@V [L&91f%toVz@EG-HMTGP(E2CK' );
define( 'NONCE_KEY',        '.Nd_jJSw,K-k1CFEj9DcSwYh?![-Hv!zPmR]kHva;V&wy<~x2>lov+0by,eluI&~' );
define( 'AUTH_SALT',        'mj+;+_>iv:9PWoz<7{GsgVYcyB[&tY#:]vprB;l~U8m:f=V@@Ni5hrjT17K:=`cr' );
define( 'SECURE_AUTH_SALT', 'L/Y&<pd9GGvdoJ{Yd!.2(Pr]5AaK3b.K0o48!F1@Wy8GIk0EvxsrAycxg}L g2bw' );
define( 'LOGGED_IN_SALT',   '5f9O `+cobi>M^gu16!]s&6RKg@1>Iw+2}C;vr%L}9}fSR>0(<?OLb<JM%noX:CQ' );
define( 'NONCE_SALT',       'PJfKfFH7L[dN;UT:;9qX%^PC@B8.FXH$@w!lHrW]//shJijJSSh/!Oqr6,dwC;RL' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
