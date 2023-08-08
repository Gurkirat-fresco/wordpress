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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         'DhnW!@!BnrQ{p6,kB kXUDF;s#I/RjI{lYq+wA*kBZyn?~~ypbw}5x;w;R}z=&u>' );
define( 'SECURE_AUTH_KEY',  'q:O?VJbX&).H)x=kB3&pEO_A.+[=Ymx+QJ=V7Wk<B_y5gGnSgn]rO^W=P5|kPnRg' );
define( 'LOGGED_IN_KEY',    '>_GZ(qW;lKu|sQ.FvNFVE#D#p_1Fu}B=.v3h*@0jW!1=wP9W]O-qsl[Fct)K^0#&' );
define( 'NONCE_KEY',        'XxG=kMm51uP-qxD[1KXOm455Hcr>~hH$8`G<ii(ibv::)^mn4$_-9l!Ba., }QS`' );
define( 'AUTH_SALT',        '4X_).Je[=q!=2UB[R$`.Yu2O%s]p}mpmI06g&M~nRTu3EIy@m`nxeLW02geRDx-4' );
define( 'SECURE_AUTH_SALT', 'eA8.Ii&[kONc*4vEeilC% ~e`hU-U/_$>g4o+kmw`W5d.ya|JDu8)&aiQuB8;3P{' );
define( 'LOGGED_IN_SALT',   '.@OP4$>0V@h4<{[<LO?Z-}+% AFzh)@I`FY#qNh-W>D~t0B<(.>W:oa#{syQgcye' );
define( 'NONCE_SALT',       'w9o%IOVso)x_eK(#o=2Vm{f7IRq0K.TLwkI?FT.lhDmxy@/f >A5v{m`}x=4ebr:' );

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
