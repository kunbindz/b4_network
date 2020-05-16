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
define( 'DB_NAME', 'b4_project' );

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
define( 'AUTH_KEY',         '-~_f`?Y?cN10O92jQaI|:x:Xf`!(MD![eXg;XJ3U7CrVc88N?C,)$z@RbZh#%h<z' );
define( 'SECURE_AUTH_KEY',  'WdiVyj]bm~sxiZ;_}[xvlP6FC%Vg_klAOY>5/_4;>n=,vo!7 BiG@W|2u:F gfBF' );
define( 'LOGGED_IN_KEY',    'i13Hp}T#A(2.^%21D|p%_CTM3p==31G%=eFrg](zE#jN%9#/2C|NugknDk ]1n6:' );
define( 'NONCE_KEY',        '`6-NFpUWLpltFA)VeeklMe+wt>PA[Eoob:Dxq_zUzdyD%1YL%v[k3*9Lsa1L=lQ!' );
define( 'AUTH_SALT',        '6)X]YK5?y2R3HGAzWk+UP ZCTKVwc(QaU Q4ya/@3{;Om!vg+sJG0hq-qL]P}DW:' );
define( 'SECURE_AUTH_SALT', '0pnb4oe`HNL/]>C~HB~B03Ka4PYD@#6g|kk5)3Z=k%.dh=$Z;.8.PMP9netl[Seh' );
define( 'LOGGED_IN_SALT',   'TA(bv=I*- Y6?aS2 Dq+[{0e9LWlM+we Z864aq**{?fH[7?q@k`Q:iEPXBdYM[ ' );
define( 'NONCE_SALT',       'QUsTs+o!9L}c4}:g(x~6z;5?<X;0F7kCe+iEh-h+-*;RhCFrHQWpL#&*CU&H<G--' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
