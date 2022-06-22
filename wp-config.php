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
define( 'DB_NAME', 'wp-db' );

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
define( 'AUTH_KEY',         'RM|yAHXaKo)b8BrxF*0k~GJS0uB6dG4_6DX=(C!~Wd{xaE(MoA_81?cJ}[j2{4@Y' );
define( 'SECURE_AUTH_KEY',  '^T2K{H05e24Hf%GFt4|B!X;+9Cw!`Ey]v_rC;,Xc!Rf5G9,;wbUyIq(}[u8j:G[?' );
define( 'LOGGED_IN_KEY',    'zU(`w+lN:~u:KUg0d_1v_&<7rKf~BqQHM}lBccBH47G]gZsViiwt>Bm}Lsn]iU14' );
define( 'NONCE_KEY',        'I8f+dGYP/B_Ao<*)#G/DRi<f=NlxY~*%+9@dQG.*j.I$$)%(8Nh6sG89`[-&u.yf' );
define( 'AUTH_SALT',        'Y{f:4|(%FtxTce~R8Faf{TIBtA,KC}Z=su71m(d<>Z2SaxD[`Ya.=)NHt*S5*nqr' );
define( 'SECURE_AUTH_SALT', 'cqHOo-@6VeeM@KayE9AkkCyo7GV?,_wYBXZ8VP9 h!uyL/p/UTX:A$:phYO@QTaN' );
define( 'LOGGED_IN_SALT',   'j1q/%IaDL7F_N}<;hx`bw!y<l_Mf8n)kT%l.UtRTw+ZB-R@bTCt RX7JgGz{5@TF' );
define( 'NONCE_SALT',       'B1]tl6B:UK#, w^.>~ryGS^~/9 |=E2j?>A+Dqo2ch3^z`qX7CAmeg)B|HEF5Kq=' );

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
