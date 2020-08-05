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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'alI1ar>=l!dW5&Kcti&Ht#!h^whb0qUO u_kQTlDefV&aVRLbga.%J,gZ .z2ic6' );
define( 'SECURE_AUTH_KEY',  '#Vs:c,vN~OqCmK6i6o&M2(hT?F)LX}k.J!vfjE_wO:3C$0Y_m!TfpyV-ATs5lT l' );
define( 'LOGGED_IN_KEY',    'KEBu<ngx(VO1p?(4;&>PTzuhBfh1Wr!nqdI{DQ*C:l?ILb`Jhyhs6IBedI:mH%Wm' );
define( 'NONCE_KEY',        '<F~{5Pob5r^#aF;0/@jFqgm/#)cD,B2z<>=,`VB%_*<b&}a]DtA|:c^?+e6IYX2f' );
define( 'AUTH_SALT',        'mck5z&%f3M2gABP2Y9d0pi+zVb]4/eC4|yc`z7VU6-cqQj$z2.&WWxv(n/N*(i{u' );
define( 'SECURE_AUTH_SALT', 'u,*#c.yR&Tfn~BgkMU2P$WJSu/@O`}IfV]E %mFN)1$9 ZJ<z9~k~Fi9MY^>]eqK' );
define( 'LOGGED_IN_SALT',   'WO7+VMHSuLJu^?Us=?(t5VxW4C=`-z6@5^4) (bEy8GN-QktFu#bk6<0=nR(g&(/' );
define( 'NONCE_SALT',       '4NP^oR]97lmAXqSq2!LW<qKokgvShhRUy:Z=Y2n2o6=9Z+5V}q_TN* L#zd7:pj3' );

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
