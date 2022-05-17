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
define( 'DB_NAME', '_wordpress' );

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
define( 'AUTH_KEY',         'm)VbJmf:ntP`|N-;9U+:{6YLwmfU:fRN]b^dtB(+8tc;=H$6re_?i&qZ<Ri?Q{3|' );
define( 'SECURE_AUTH_KEY',  'U#k#D)h>P0T82D<jiOB/:|#coFB[S%5ng$(>)yTXF|uIJO5_7Z@|%xAVqg1Ur8>|' );
define( 'LOGGED_IN_KEY',    '#!ncI~B`L#P5O_!Z0AwO9<6Eam?;3@w1~CY1UN/ZMH~KYzfnp?1:eE^5o~]!V2i#' );
define( 'NONCE_KEY',        '][p_pc},v[-^pe4z%r5L.Q)a~,c@>Av.eJ$GjSDviQ9OP[^*^d%TV7`<qTeUX:]7' );
define( 'AUTH_SALT',        '5oP[vPiv&jv@C,+p@I-sNELq~@XOXUj}C)sv}O|h7pAw(~ojO>rQ slcJR:H>XS#' );
define( 'SECURE_AUTH_SALT', 'O1x<;g7q(#tE&8hzLm2j{(rzyZCnNyxpaBO%eo2RC^m@,%PT @UPpf5S6Dsj>Ric' );
define( 'LOGGED_IN_SALT',   'buYY!<S*)!L2JkDZd0Ne`wkO&aChM @;2nX+64w;GM1/@2T%w4Hjplk~yq9|q2ar' );
define( 'NONCE_SALT',       'Odrr@z,IsnLCF(*8K_VZ Wy:Hb/-{:5*Y}|X1kVv[a~z-A1&I9mTpR}U8fwfkoQ>' );

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
