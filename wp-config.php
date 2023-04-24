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
define( 'DB_NAME', 'db4' );

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
define( 'AUTH_KEY',         'Knu:PXq1YCkaVJGWyNec9|A&&{x=E.(eM_>WUTd[_xg6]hp):##0q!sD),c.>IN8' );
define( 'SECURE_AUTH_KEY',  'gd%J}sVeKb;S6Qu1E n_mAH$Gs4a;J9-gP-DW!9algr!/N:p<A?@KWh@]WIGA+1m' );
define( 'LOGGED_IN_KEY',    'wva,<+~@CDDW]4O?fi),%eBau|C_Q8GX=y,|M/C 9aC3d}dzeL~LY>?O((5JcF5,' );
define( 'NONCE_KEY',        'GVRN+fNlA]hh31&R7FP~nT{]m]G/Pr59g>,2,q]Hj3f5UUVsWOn<%b2q#1ay-;(@' );
define( 'AUTH_SALT',        'gj^#X1xVyAstNuQcq*1jsAF55}neHh6~}9Bw2-TAt|X=A/ELs3|baSp(m~)j_-!u' );
define( 'SECURE_AUTH_SALT', '%VBCpyk4O>G9kpDc%zjA~[el1U1z@ru]&%v{-h-Li[-:mT=I+~FI|4^lTN?hf];]' );
define( 'LOGGED_IN_SALT',   'y[apdr6Nmw$$&$e4RMyNzy,hLw{;X*?xVJI1q,HwRx8R*X%-_csmGCfX$4Uu55z/' );
define( 'NONCE_SALT',       '4fZU_}vA]d57(l}i2cF*>}@qoO5S@#W1GG8c<I%nr8Mz^T/yQEt,kyI<=B4!wG6f' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
