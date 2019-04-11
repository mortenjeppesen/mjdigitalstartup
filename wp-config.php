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
define( 'DB_NAME', 'ds19' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'MNPyJGk8!Y,o,tWg1/?}EDli?ctIohxs3;yq(r2A@pW)K_?d_Vfag$c|-5YyFL~E' );
define( 'SECURE_AUTH_KEY',  '$N_;^)|Fe6PgSi(nH_3LDtPi%c`2,uRtT:Bsn;`|}NcaW0bG .M+$/h/WEY#sQ?Z' );
define( 'LOGGED_IN_KEY',    '7clP@Ii>2}ymw3o`z%S<YCmFglH,Rx*?[V^e@`%]`G>WCc96Z5N]D8iC(W;.A~|k' );
define( 'NONCE_KEY',        'bvCkMT:z!4XT2bKpMwp6$--~29.EYp|ApG_A^5xb2mRN 4uH1N5]XV!JB3xF(#}s' );
define( 'AUTH_SALT',        'tKrNK4XnAd B)*,^tym>d@)HD#RwQ..PA/TDAOjva%%d?xa}_v`,?]T 6_8G]X*w' );
define( 'SECURE_AUTH_SALT', '!P)*D4`xrD=D|Y~hf,2PLM!*311wyI`c8wEJM;C(Zv83?;T,6@9ynm~|8[!;eiDN' );
define( 'LOGGED_IN_SALT',   'x._z>H9>E{Ej!qWU/yd2Di9V~n}RW#a$P96=)`;`Ra_]&Y/F5_/n5:%dJ2}(j7i#' );
define( 'NONCE_SALT',       ';HUeG(PT6wussw0hX`r_VIT/0 bH>u1tz_Vi|&K%]u2f) 3D;OKeg_{v+>7gttt<' );

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
