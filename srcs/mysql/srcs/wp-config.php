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
define( 'DB_NAME', 'mhufflep_db' );

/** MySQL database username */
define( 'DB_USER', 'mhufflep' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mhufflep' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ': W)Q.F@Kw|),Y*+K< Lm_Zo{c.4TJAqe+ik):OP]!4,!q&wn PSf3$=(|@y-%bM');
define('SECURE_AUTH_KEY',  '[&oj2!FC7m~s3@F~! Zx4XR3F!5, vPlf+*1S9?=WI9{ sf=FIer+P]uPDf[kH;|');
define('LOGGED_IN_KEY',    ':]bFkLH`inl]5l6!9x!?wG``M&qqAkEr.O1_[R3=YpKD0kduvvAqWH9KO9hs-Nd_');
define('NONCE_KEY',        'Q<dE^0mw/--V4D<m `;79RqFC@SrG!E$D$jG[DpK({4a3v>u&2Z9QSJ[.](k$lI7');
define('AUTH_SALT',        '=_Kec(Urw9afNDf75GS%3@M_x4fx_axL8jHt}mzpA(Sic8aYH6>4!G wqT0]a6mR');
define('SECURE_AUTH_SALT', 'TBsN|60<UCq{wlM8yDF!q|,=NPtZFs--bShwd>@*lQsii&2bz|k#,Wn^;w1h<+ZB');
define('LOGGED_IN_SALT',   '8JK^q|h5hVey-MG Djs<D1p5]_Z99]+dq&765lm8ldtu8bvPz+O RA}s6EHkf(gP');
define('NONCE_SALT',       '^eV!hUjw6hU*-- q>05-p[~58Z`lGS2[avfJQlkSBg$xe6g*SgJW5vm1i_i1C+.?');

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
define( 'WP_DEBUG', false );
define( 'WP_DEFAULT_THEME', 'twentytwenty' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';