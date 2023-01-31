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
define( 'DB_NAME', 'gutenberg' );

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
define( 'AUTH_KEY',         'kJ-lQu0Go42xMu;}%h`OgGeuJ-MNqFo*b!AJ6XoG3G(7bY>dDBIfuaseeHn5{;Ud' );
define( 'SECURE_AUTH_KEY',  '[4o`eiLl@1MHS4^l|]$gXIUp)fmy5WY h=4Dx]<a1VBs(K+m[rgw-6x8.N~f5XsG' );
define( 'LOGGED_IN_KEY',    'M620+wz#e<LUa#9!6yGfV/UIrD9BweyCb38fLPQ+V6aG=ag0dO=[cR9&+}1&FE08' );
define( 'NONCE_KEY',        '|>hx<U}:?e3 9g,p#aivauk[i2myV}uL`u,*<8M9W3Sd]>E![ZK2vRf8Gm$Q>BA9' );
define( 'AUTH_SALT',        'g:3TnQT%|W)<@d#6hK/a<>4lj(fP1qD*D#TP$)+S=(j8g?IIuoc;Bc}FBt&5&RF9' );
define( 'SECURE_AUTH_SALT', '}mKL{=ysz i$O(PD/</}?pN0JU> #_3RVHf|ieboiG*XTQ.1aV.rsb]ceGL7,]{%' );
define( 'LOGGED_IN_SALT',   'x|qZ&DJ|*_MR5UC15y:s@K?^?ny}G:fW]NBm*13I<-r%m;;`)wdaS0!=j,(VXW0X' );
define( 'NONCE_SALT',       '*(<U.ONdX0%5e`&6eF=x6WLK=>8%rfpIT]A& 4i`]e,:^fn!QQ[Tb7vf`n[]qR&}' );

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
