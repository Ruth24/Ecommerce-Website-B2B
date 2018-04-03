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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CR?Ma!go*)7&l+6.RB_X(>8wi+]Zms!oHTJP SXEd-@w2UD=^6m377T0>v`?c<Zi' );
define( 'SECURE_AUTH_KEY',  'yVeR=#%o@6U!5}06,(de1@bRv+lgpcjln{U(O@K7[{ytsz>H#T=j.TTna4[[p)M?' );
define( 'LOGGED_IN_KEY',    ';9+qg|UHO&52G~w|_+T#tC?IEyVxk.@Lu=mu0[}jwm<qCRb$OIF`2Td(q3_^Ws)_' );
define( 'NONCE_KEY',        '_ 4uTR6cQNu7ejwc1>|$H(_hC{Y&q?2ng!MDI!nLl9Lnu||O:!]tr2}>&U:7C9*z' );
define( 'AUTH_SALT',        'CV%;{f,L/?qs|}+krA%<.8^E{0RdwU=h*KKSJ6]AFUB3[tJ*+9A>U ?RDKOJ>$eh' );
define( 'SECURE_AUTH_SALT', 'Wy5Xi1%v@AnAJp(|M0Y}&O%K|KabGkw7)T?K2;1>AjT&dPjXWJeLjD%H@lx2BR;k' );
define( 'LOGGED_IN_SALT',   ';ps^q_6_)a[ufS6v^8R}`Wr/PyZ=C=`FVU>o-ZWF[O%[^z#H?)PY^AC<^p-w9pT+' );
define( 'NONCE_SALT',       '+zjI?A[@ATJ|kdb5u$0iB#:4i;~bx(&<cp>ZMQBYl;dFFswA:W(j1P<>4}cYb@j$' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(localhost)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
    define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}

define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define( 'UBP_SITEURL', 'https://kowalensestestkowausa.wordpress.com' );
