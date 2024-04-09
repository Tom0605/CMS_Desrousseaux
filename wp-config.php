<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wordpressDevoir' );

/** Database username */
define( 'DB_USER', 'avril' );

/** Database password */
define( 'DB_PASSWORD', 'prout' );

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
define( 'AUTH_KEY',         'U+9JstDzq@HMj]DJ, GWhs=/#s$xiEt7vXuw|+64msp{tx@x[eZ>)0{~e09:%-Q8' );
define( 'SECURE_AUTH_KEY',  'ePg`Bm(bJ!#;nI|&X.Unw^xH|5?U&=J5NdscOZvaK,j-|w`plu[A@W.)/Dp7IxXb' );
define( 'LOGGED_IN_KEY',    '1xWI+@8~jho#oyhlQ4t5 c8mc0(s)AU8y?AtR(Mv=DddNV 12x&3W88w76AM*aCm' );
define( 'NONCE_KEY',        'l.S97rX[`zP+CAWS+|xernFra:3yhIB#N7C8R{mT{DTW? .9]DfnUP]V3ZijB7[:' );
define( 'AUTH_SALT',        'O|Kl7}IlP&Z/[_Vf&Bb1zT-26EcE#5n6xw[GM%[d?,)_ey9:)BWVi<Ja|>M,3lc9' );
define( 'SECURE_AUTH_SALT', ')((ip2>2uf;I~k[8sl7#At4Hk9P.T>2FlF:)R|,9nGkT-=6<Phyj]6LSlz|@7h`@' );
define( 'LOGGED_IN_SALT',   ';tEa+%]RSwgR7ekgJzm+Bd[L&6nUK0Nl~)eE,i}g^zj&WCK}E?AigEz(+17qd5~C' );
define( 'NONCE_SALT',       '@d|^$t+WJ/lf$mCbJaa1zyQ)p]sD5L7rt<xp=m<w&IlmS-O~I)?7WH;gBUi<(=5M' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
