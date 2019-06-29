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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'release_v1.0' );

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
define( 'AUTH_KEY',         '%l{T51+:H:*?!1TT@.`.?Xof!q#$(jr,T>[xkSWWMWA(~tRKDdE$0[0>v$[oLA`0' );
define( 'SECURE_AUTH_KEY',  '{jK!R!3sp>fF#Wk6gDKg@bY?5#x-L|$8C@{mJ2[S`#*<3K`%pu}O9b#q@#1m|u{@' );
define( 'LOGGED_IN_KEY',    'H^Q76X8:-?)M-G_},QO^9L8Kq_ehEck=VU24KCzRp`[WpEN~_)lYyv#6Ak(0PxYO' );
define( 'NONCE_KEY',        'QI?;O=M4~j iR5Ak70{nAMv1vY_OA6q+yVBtKS)yqx2[p3cVacPaypOv)MvPwfVS' );
define( 'AUTH_SALT',        'UuH)Knx{Qu8a),j_^*ftJi9gWmpw=g=l[pnqm<&Vu~8Sc{iMzov-%VD2o?/bTi&Q' );
define( 'SECURE_AUTH_SALT', '<669^!e3p!+HahOn#9yV7 ZKi$cEd8ZdXW.~+`aA>J5d64I89aWZFm4$A3*gKC3X' );
define( 'LOGGED_IN_SALT',   '|x2@H@;@!I^PYi8_h0w]9/s,LM;OW!s#(.w.`|Y`Hu.Kob>G*s|[sww^K+O.g9Uu' );
define( 'NONCE_SALT',       'js::fHJ=8DS2sF5/E&Ch4iPm~u)a*(F0-]vWyh<KRZL0T(%)0oO~2)^[ZC$#t31#' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
