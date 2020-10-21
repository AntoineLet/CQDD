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
define( 'DB_NAME', 'BddCQDD' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '4T|JcWsW_`+HtO1}^6:;v)l A`)e1cai0<Pdm:VXldtx0iGV:#LV*?j;Xz}:[,tg' );
define( 'SECURE_AUTH_KEY',  '_LKfU0E#!d(F,C%^95=[1mD=Cv*Kp5J-(QOM6v_XHEpJ01#S z;/eqDbjP}1*Wt6' );
define( 'LOGGED_IN_KEY',    '6F_;Kb*>2mtX{x6T 1dwrr=Pn9qw1ji&P-D4m73RK^}QMx=-N`o^n0%w%]YfbG</' );
define( 'NONCE_KEY',        '%v5k[Tn<&KLBn?Alv&n;H3lB<RO^2K+xV@NyHlYJkle4>`*?}XZ,G%!LMI?iL&<t' );
define( 'AUTH_SALT',        'V9^v?lY}0u4vz>!2wTyH$1Nj1h+iy}SwJ(:<[frWXM 3yaOO(J^hP(+n;$2hmb.;' );
define( 'SECURE_AUTH_SALT', '@!AmUjo{,5MhK*Wy=VA8ap42h;K]&M[{/ 3E=;SsKGR]_tE#|iiXkITrEP?r%3SK' );
define( 'LOGGED_IN_SALT',   'ECDo+Z6qeA2-lkpf|BU{]O$z%<<cPl2:r`yJ0DVHJtdVIQ*E1rJSuhRwl{8VA;DG' );
define( 'NONCE_SALT',       '++gXrxDHbSY.AwN%2/7UM^ttFUhg_D9tD1C$u&3~B>q`Pl4:g`)6]w3. A{n)EUf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pr_';

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
