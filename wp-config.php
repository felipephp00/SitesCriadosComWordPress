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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'helpd450_wp735' );

/** Database username */
define( 'DB_USER', 'helpd450_wp735' );

/** Database password */
define( 'DB_PASSWORD', 'p[C-5l4S2F' );

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
define( 'AUTH_KEY',         'lvjdm7qk8chgbfrrwbimcungkyvv5pwzyl2265cyrezkq7bvqfowlmru7zon4iph' );
define( 'SECURE_AUTH_KEY',  'xt6sozkwwy787tdqoswu3njogjuwnostsdvxieswvyugzbnsvffoywa8owxfm3qt' );
define( 'LOGGED_IN_KEY',    'jpju3j66hq8oxqmkwhml8fjflptc63w5g8pllukrytdrcsv1hpficnphudnrk0xy' );
define( 'NONCE_KEY',        'r4lhnpxxvovf9xyxtqec7nvg5hjzhm4jdlbhuiaoea9slpz5bxkbscjo7nk8ekxt' );
define( 'AUTH_SALT',        '3pbq4a5ryhxfxisdbxmv5rwegecxfjwzz2yri7p4jc7zwrkx9stybhukyoggjiv8' );
define( 'SECURE_AUTH_SALT', 'g2io9fpkqaooufryo6elfpd6a1ibrvsqch2naj2alcwublyjvskrp9kenkul10hv' );
define( 'LOGGED_IN_SALT',   '8wu2cfyzsrehppv4clfwpz6czjq4uoz8kzun0zlqg6b9iz5hf39pofpdownoqfjj' );
define( 'NONCE_SALT',       'siq30vekf9om3sdekfdu4lhaasyqqitjlexxnbbuhcjvunq9kinvsfxokwrzyita' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3r_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
