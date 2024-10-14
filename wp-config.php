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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:/Users/maksym/Library/Application Support/Local/run/JuUvd1M3Y/mysql/mysqld.sock' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'h^*2djVmTV9LoGPA4NrpL1a_s1kfx_C/WxHrOK}I,[9}m<bECHG<={8%OltwckK!' );
define( 'SECURE_AUTH_KEY',   '}*LbduxNT_~17(rB8y%Di.?K`O;L(s#y>6O]SVeDlaXI^y37,L1rHw!,IJ^ND)[g' );
define( 'LOGGED_IN_KEY',     '@X`[2bWIUU~nf^D3Vby.qI9JH[}8k3AknpSJQw5d-nB99)D!tq&In/dYUev|D[rf' );
define( 'NONCE_KEY',         'd=Gl9S:}ErvP!noz+nQuhFyH|.O_u;{-`C)R3l>[V;NhkQ9[#p}x)5[}|j;(;wP0' );
define( 'AUTH_SALT',         'd#1EY:R}Yn;dx_89pm*,dV<k n%GEVl>Q$Cc4jcb]qF=4=&/ fB{(j>$2$$gh?S.' );
define( 'SECURE_AUTH_SALT',  'v2sZCD)C@% ]xbA@)bJU{x^0^D]1vUVK,j9>(wK4X=IOSBj|ELgB?:~4Hp/X2$6b' );
define( 'LOGGED_IN_SALT',    '8Y;yS7~)H:X#7-.6qz.7w=dPW+cnc}&^y]vR,MGLvulT(.$wzSQI Tt2ZSy)h=P^' );
define( 'NONCE_SALT',        '-}B8)-x`f_DxW}t03h81|.s@mnE$^~?)C5^nX6dsf|jvdMx9fE*qsrhWXNmr{.rM' );
define( 'WP_CACHE_KEY_SALT', '+TGxUh#AM&mijy;y|E6R]qv0]#[+M#z|@5T-D@ll?Z?t_{#*ewR4bp38Y~xmxj=-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bfslyp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
define( 'DUPLICATOR_AUTH_KEY', 'T-uFiDZaMo-=W/*,w?,$6GdV}P(Zu!j}ZE.qj}mOB%%BSvn#HbJ?Ia~yI1M*S!p&' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
