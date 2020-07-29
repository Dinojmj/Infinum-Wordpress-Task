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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'infinum_wordpress_task' );

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
define( 'AUTH_KEY',         '>MaDeipc?`}Sz1M%8mbiRE#.CiW,z>QJ<|Kz[oKvl)Ah81v*d]GyUS<!Z,B5|PHP' );
define( 'SECURE_AUTH_KEY',  'tc{~5ViUcjVUBepLU&iXI{[afK+k,%hjzP%*TD27 CF.YsickcbT!ZUzF?Y;&k;x' );
define( 'LOGGED_IN_KEY',    ';<Cm$Veh*/woOMb!)@Y7*4p0/B#.X2X}4`}5Ghih}.|%>,2}{xNbODTQHQQtx_ZT' );
define( 'NONCE_KEY',        'rJe,pliss1^Gl,OL|F}Qla~(&BjN||^j^B>_$R[g@22<BDR^;}dZyw&R3IeQ>PwC' );
define( 'AUTH_SALT',        'uH,jc.nW4acJj0{D`3_XkRh|ODMe#(0eG9Q_lq&M,ApuJAaNr~_MS_.dP+/>(rT*' );
define( 'SECURE_AUTH_SALT', ';M{,,zf6UpMVdwY)r?{l.BY60m#3{O4C^E+!xz90@,|fNE5#EuMUa,<~.pkT5FA,' );
define( 'LOGGED_IN_SALT',   ':}:&Z1#|%Z#[LuV]^oC!y(2xA3M@(9hjA/:K|Hpyb*y([[UU&{5kuilM@7F1gB0F' );
define( 'NONCE_SALT',       'BVs-hKv8:c,r,)I:*E%X/i&LDf*rti!>>_Mi|W e q18 */SKMj_.ZJlBA?6m>>B' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iwpt_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
