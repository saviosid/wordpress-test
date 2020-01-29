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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webdev-blog' );

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
define( 'AUTH_KEY',         '&_K*eO1CGRB.%`lv0?$);c{XtACah,f]dCxv8t+s]#oT9,Fey*;a<~BkXk9oZ>^b' );
define( 'SECURE_AUTH_KEY',  '$2B)3y@u8dmY[x^7-_3()$R61`<@1 z?dj}U@ABM&z_V5}?07 @zMc54r/&o.~e#' );
define( 'LOGGED_IN_KEY',    'jl3])X*L[!fpaZ6dEwxcD82xP>* }a2YuT<lbllqH(E!K7G|@wNr+^rD#V$dVqB^' );
define( 'NONCE_KEY',        '@Ev^.o^wdjse0}<eg?*teNi4b^,<)_8:U,[i$MH[3(bqX6$52vdpq+<Z}4q}jTlu' );
define( 'AUTH_SALT',        ' r)!>;9FnMjV({rx>7*IeXCvIE) o9@B@rnb^#3eJw4Y|?Z1s}0X)v67B*Wu|RYb' );
define( 'SECURE_AUTH_SALT', '^Q{V6)doURMMlN~+y1]jB(Vc.Y~$ftIIf?,EYqSKc+J_^,r*FFiKjP{XKUut?_ZT' );
define( 'LOGGED_IN_SALT',   'iURnS~iF-AB.)kI6$6}kty6S<u9W`HaU[Xd(DDtoTkOd[q|]:z(%5}76`tU~# ti' );
define( 'NONCE_SALT',       'rwe_hT7N]v}~QeH|+q4it5x~Rc#k,D@oKU_!{rwAh.w+_A1`Ua:*?h4((A67ehK@' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
@ini_set('upload_max_size' , '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
