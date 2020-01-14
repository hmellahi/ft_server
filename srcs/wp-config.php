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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'hamza' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'r0-bqnBCY<L67LO}m>E,v1ZZBAP)Ne*i1Bw|^wkrH.ThDI@q-TIvFTq8s #MDHvd' );
define( 'SECURE_AUTH_KEY',  'u{&]PI9P`&0mcFN~e>VMB<!Ej28VJU7?~x#=h!h>u]->BCUy-9AUEzk}kgCx+<7O' );
define( 'LOGGED_IN_KEY',    'gZuP.kmt`P:EpPS<RZWXwSK)Y HBvq#|kBszfP]uk+?$CBZOR3R32#Wq.>/4xH!^' );
define( 'NONCE_KEY',        '4_IRJ}.<u:4h9N[Uk8<+2a(dYxVDM2%9L3FS`c*c[q1+#@fCeAS}`Npvp&mB@@gZ' );
define( 'AUTH_SALT',        '_6kxFmsxu2i^^~X]C98,-CqpFUvG<4|Su[rGmo$xwW]Kt$NL!JOz5#mrW!;B&,nF' );
define( 'SECURE_AUTH_SALT', 'u7&M!.%Ktihc?/E^m]Z=4zGUVsk=(g[0~EG{7Ero2O:Kf*M9c vJeEI YywGx@!9' );
define( 'LOGGED_IN_SALT',   'f;|O(X%%=?Q|4c>@[_xw9nKU3j(F#zezw%pEyxawmboG88n2cm?}~Y}JsYQu=%rT' );
define( 'NONCE_SALT',       'n6}gov;IH>[$[?ULNd>W(9RW_@UnAn^xPFbkJhu6<.}zf[reFbE<W=iTEY3w!lee' );

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