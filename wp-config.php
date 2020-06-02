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
define( 'DB_NAME', 'temaswp' );

/** MySQL database username */
define( 'DB_USER', 'fernando' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fernando' );

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
define( 'AUTH_KEY',         '*wE81236bD%~qkCaat[{of`pJX/LM9Mg.^4S?qN56oc!>KJ^@2?ed`Hpwk+LJ|~|' );
define( 'SECURE_AUTH_KEY',  '40#qb^US&aieI};BQofz8GRIs,osAi-}clyBwcz@/w8!r}a&l$es|H`hfr{w&{+!' );
define( 'LOGGED_IN_KEY',    '6(Q &TRoR p5bT}iLZ}jc4QH^Ochz1yf+ucg5^3!4oT+`jDfb`N`i4R;(KVIwk|%' );
define( 'NONCE_KEY',        'lTOMET*yQZqVLZ/M73*yRZ o@Q7A` Ay)xOvbB$|,;TUK]q15+|,^<$Xan>cye}%' );
define( 'AUTH_SALT',        'CK/{wys_Y{6<RxR.H}Tq2f2hzuJmvN$fYfmjI,aPp7: !K^7*4[#KjEuRO-Os!q#' );
define( 'SECURE_AUTH_SALT', '6T317`:hft,U%c5MgSZU0#z^x[a*ZH>D.^7XU6{zJzl)xrM4%nG<0p6J_QuN7DoL' );
define( 'LOGGED_IN_SALT',   'lH)a3jH_uhxd2@Fl_wEOBmuQYLf0[n5]<OI#iJ73}7xV`T$av=de~7Fr7Li;V5|[' );
define( 'NONCE_SALT',       'Oh-2VA/<!Nv!I8XxK#]:|i9.xswTP`oJW$z>m_8=&|zIfR6bPJaCp?r>)GR_d,#V' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
