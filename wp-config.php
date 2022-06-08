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
define( 'DB_NAME', 'ISTA' );

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
define( 'AUTH_KEY',         'axWa:UY>q@a|x>}2^e ^YEBOA=YY=4/UL/}sZieK>R7zp5}ghGz/{4}BEhe(HuG#' );
define( 'SECURE_AUTH_KEY',  'Yn5$--e,}nFYw@RDrT#?@sIHaw/n=P.wwi7*MbXxG]./C|-u6:pm2zL0S=T/S;^E' );
define( 'LOGGED_IN_KEY',    '/5(*g9ywZNW;h]jqHCdak0})@ka.W] V1iY^F*wP-9+fhIujrJ^XUdicWvh-bNs3' );
define( 'NONCE_KEY',        'C9WsoA706qc}R:KE%^4TKr}SY%f)!mIr yo}fNwHr4g{[~m>_#@4yf6Hm~4kzh5d' );
define( 'AUTH_SALT',        '?/gzC%[aL(jXfW^3P!]S[t{,!34ll Ybmb<OnlLy3_LK5dJ&jgPZ)M@EN`vAw{Ou' );
define( 'SECURE_AUTH_SALT', 'ze$#3ESm+e=~Nd(.-~Lq/-KGpt*NPAF#t0W.ys]l52HGfpt:Q(D6l!b,4(XdO9rO' );
define( 'LOGGED_IN_SALT',   '%G|BC7m]!X@L<L17vAp42Ux:>a)Sr^*EL{_LRo,Z}FF!0OUjgNU 76DSqj,_K;}x' );
define( 'NONCE_SALT',       'pwHE5t(NQq&PZdW FNsNO.@[zLZny:6/b48~TILA#[0Oj =?`|}@;bH3ILgqXGzZ' );

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
