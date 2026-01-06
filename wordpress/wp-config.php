<?php
define( 'WP_CACHE', true );

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '&V6&wD!w/qvb(m/` -S,jH=LgFKx4k6L,PyAAJLQ5iMs$Yb/9rcuSE7E5Ox)~j=s' );
define( 'SECURE_AUTH_KEY',  'i>(3t$A-7-:XB~L_.rm%e<p$D4s1[*_=FYsZ)(qv/j#|6Q7of&oh.01`Llw(XS*t' );
define( 'LOGGED_IN_KEY',    '?K<:+IT?Z4BDu}C*5.mluz#KS2R(>(]%y%b[y5jR-3Cgg*g`ueqB2LYwqE@yw1Yo' );
define( 'NONCE_KEY',        'w+ na83-4G%wBz%O>2EDCW7b|#b,lfn2EK_Ynqh}&>&7+|OHd^pT;[_{`YR}K4)d' );
define( 'AUTH_SALT',        '|a#)*;T>4[acO_2+0{Y$G~bKr`z|!+W[@~qQN7B{f`GZPh95yE),DPe2uFd^Kjmd' );
define( 'SECURE_AUTH_SALT', 'TGR{?GQ!:x2bo=SNy;]W`4,!w5Yf/keA?hDU<By^Q-Zd8_F>9EZbF_M3GpL$)i*5' );
define( 'LOGGED_IN_SALT',   ':.@#0w[b-x8q0Pn}9`,_?]gj,@r`/*@hQ4QEU<&cP?2rK(!0Epg6ojr.{a+PZ.vU' );
define( 'NONCE_SALT',       'MtG@CsM`mF%7HX|cZ-$dsQ#R&@z~.&_s{0OUj8nJG@N5#$s|b2K>2zia1p09+K[x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
