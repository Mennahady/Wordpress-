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
define( 'DB_NAME', 'newdb' );

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
define( 'AUTH_KEY',         'j`I|hJ-%afQ=E>HccFDUf{DjNOFsDRu)I(bZE7=/PcFTo%pslC2H+YxaMp^L]s}r' );
define( 'SECURE_AUTH_KEY',  'Mw3=7!xYC:`ELMxDYu}aj1Z<D}}7KMyZb#PNS5>joo$]P!!;irY* n&DI=Kl^qU&' );
define( 'LOGGED_IN_KEY',    'k+zC=qx&i1}^fYFv64HomH Pe=rtSiRIL+plabJz[$yB4K<p|<~bbz_Ct+f=jw {' );
define( 'NONCE_KEY',        '1SHPG)2)Ea:`DZe.M@]:/ }E}62I+.P].p4$Br]2%d-RWi]}kh9R!7Y%`E;tl=(:' );
define( 'AUTH_SALT',        'ClJh3w6-s@<1~LXs>TLWBfZ1c56y7-b#d6,|sTb9YeUNCU~6ymq45Mi1foC(YP<q' );
define( 'SECURE_AUTH_SALT', 'qG&=qjp0~P]XEdFfT<bE+w{U,K5uzNZHdz91Iimbw+m]~Ttq@jVzO 754|p$mndz' );
define( 'LOGGED_IN_SALT',   'L7v&H)rTT%KnU)2csS%gGP755(/#0QmJXvbox%)@$c/TZ*y^Cv/QT7VC(eIL~?p<' );
define( 'NONCE_SALT',       '0@TT2G-r0#V?otJoQ+Y|4=REDbW1}pyvKOHq<JO:u1hn/WNxyV6 Jb@/7j1A~siq' );

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
