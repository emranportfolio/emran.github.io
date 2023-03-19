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
define( 'DB_NAME', 'mywpsite' );

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
define( 'AUTH_KEY',         'R5}%|U][.Ih1lHS^(76}&LytT ocW*y5X*,%piYFUV.j_=fe1~AV^xy!}aLB30n1' );
define( 'SECURE_AUTH_KEY',  '?_LCGp|P0ptWY56v_ec,cD}o45+ N8&)X|)Q@ @U-g)8NH4!eek_TXam,1xC$OQ~' );
define( 'LOGGED_IN_KEY',    '5Klh63^fR:fId~lE~pan0[y3F`zQomQ_JgJr7s&>,Zq#mj iaXkICD08L/4D7IOF' );
define( 'NONCE_KEY',        'HmKqd|?ox1-r5x=:/wS7rQK5D@mUd>R;}e*m&wHZc5AzX.6V`30+C=HUr7~ZLGh+' );
define( 'AUTH_SALT',        'k}]$nZ.=%O)J)5FQ{fS]%JTVm|cy(G9r>cqQL-7(XW/]r0I`QY}q!Kp*UGjlMaF}' );
define( 'SECURE_AUTH_SALT', 'KM}i(SQ]XsuK{Gl$_vJpI([(F;M{FfRy9-nYe,^{I+CoYzr_xi;%/~V2 eZt8yAC' );
define( 'LOGGED_IN_SALT',   'nEAY-;Us 1p40^0uNiM9bB2Mk(--SJIRT*yFIJv^Sh8aUS0fO]#_T$yk /]fWP^)' );
define( 'NONCE_SALT',       '#Zu#`C>y vGbHF#T=QWZ//2,Lmk,So6ehT}jv/uBq(5O~D+G/8eLm$*&2~^#6;<)' );

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
