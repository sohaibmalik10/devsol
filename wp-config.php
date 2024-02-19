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
define( 'AUTH_KEY',         '6H5ms8crIUQA|I+x?OTRkjGhR<NlJr7c_,c9}2@@a80oy29f9Q}MGE _W-WqR$l4' );
define( 'SECURE_AUTH_KEY',  'Y-SWNQ7!t.Tj[&ZYCb?=a3M|nM90n:G4(kdz?eGd`:5uk2R6j(Xz/Zwz_JIzp%1T' );
define( 'LOGGED_IN_KEY',    'MJQhLqsr2 kQ9nbi^`f#wG:j*[;8en_3J0^|>otuJ6G@^h_,cZpNSBZaphT(OB!X' );
define( 'NONCE_KEY',        'ZhtcGjuOA:~.^l?N6n,&dHJMm,b3Wq+pa,tm:O/D-rG1yG&2vO1[V^;qe{Vg}q]Z' );
define( 'AUTH_SALT',        'ta,pvt1qtr{y%wH.ZXU5O,8O!Pn_A|9#~Tn@^u1F: G]tMv?l/-[Ki0gBvK/uw?U' );
define( 'SECURE_AUTH_SALT', 'M{d^0nWPf^O7B#;9?Y*I_O/`;$MI-AxJMe&TR5,1famm&f2C9kE:>xjv4RRlVcqP' );
define( 'LOGGED_IN_SALT',   'o5UG6e}y6Fr+6xf&!_B#>Vpuch:!u;/vU;s64@h58G/?k{]Le{Anp%0Y,L=#jO`F' );
define( 'NONCE_SALT',       '6|Y=f2KcVdBoa]`|]cpXn@CN9iaIW<Z)zjj(8R4z,!K}6%:*2iIS2~uaA17j(PxC' );

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
