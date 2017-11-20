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
define( 'DB_NAME', 'git_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define('AUTH_KEY',         '4O,v1laTQ]+d/,N=gHmd 1(&Lb(F8erbgQ;h>+0xXKii5U)Uj#1{?X`UMY&.0wj^');
define('SECURE_AUTH_KEY',  'Fa$lKLma=BJstT#rRG$@NaE=6J8<:H[4;{|1_{cZ@p#gRhC.vB1e+]U;,.,Ksgq/');
define('LOGGED_IN_KEY',    'N@K=JvlQL+&Cr}JhmzKoW/|>Xwc(i|8Fyq(|#0BRt[L!7]U:zx|F`}& TZNs+%co');
define('NONCE_KEY',        'pu.*pK9f6,|C{9+Go^TLlxTsbrCOkf2k|S~K]+|[bQTEjR4e%|Olw_ .P++l^+_%');
define('AUTH_SALT',        '+/6ec-Y3GJEl)vP +ea#k!zVwPxR_9?*.]WJ#Vqyd)D%PF}fjZt`-# .(N7ivIi+');
define('SECURE_AUTH_SALT', 'Z|LJ{dUzj{|`+tsSc{!OS&aUVg2!Vk#zN;xay&M<UnbkF9&OLmkX-s>`O{$u5ps8');
define('LOGGED_IN_SALT',   'rb|;-*7|,^?qzq-[w5&f.3dcRal2?BW)Vgx+P@H[-I634p?PQ.#@kK|ie5sD(4tT');
define('NONCE_SALT',       '[C,X5}crK3^^b|Rxd:Ol^)Fn$[g6K:0RtM+Nb+p{ruDz_S{t,4,r/ez((-x/o+J}');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
