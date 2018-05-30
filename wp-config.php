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
define( 'DB_NAME', 'stories' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '179706244' );

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
define( 'AUTH_KEY',         '<1XJ-#BUuG+mgT@ir^F!IQEeYm|{.v{o52qbAN@my!YwY%%L%{rHC!+}4.4-N,W;' );
define( 'SECURE_AUTH_KEY',  'K5l~_t-UiqcHh,T7UV|N~ZE*[S{dips)aWT[h3g`P8f4qtEkO; CSjWCE#(&Xij(' );
define( 'LOGGED_IN_KEY',    '%3g6>U|U!/5gmy_V@tj;!9Hh+n*.XxBi^O44_&hm6j-`xc]B_4y uB/nqmL0>&:~' );
define( 'NONCE_KEY',        'f1>t@U@$y23!o5=&((EC$Akk)oUzv.g/@<ao][)}/1M|!N&Oeu.DihwzfmM(BYN0' );
define( 'AUTH_SALT',        ')K|Wle%~`>hC{z<p6eC#MdL8lZ_T/>zCa2U#YW@ePKUx`Dfu+F<W,n^icKK&<;$k' );
define( 'SECURE_AUTH_SALT', '%D 3&ZPiSra|=yq5[;A8|)lCcxw(!x`RZ(XC{dhL[*cFx9tK3]pl_uCXldTkTQhx' );
define( 'LOGGED_IN_SALT',   'EJ42Zk1>v<sykkg_~K!p$/|<KuJ%578TTjhO?:Xa#kKAa?kDS x@j[a.1IIAFAVZ' );
define( 'NONCE_SALT',       'JGULDM2*uA?piy0ixLC|O3tinGSGiy+@3D!?4B>$]^(x1J/khoOD7zW[hyy_fS7w' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
