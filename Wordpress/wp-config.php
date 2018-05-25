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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rZbCn}2&OL9kCJ>KTb *{ofQqHCHOC y>0FPkie6I-b[$SuSJ<V!)|8yoPP,1@Fr');
define('SECURE_AUTH_KEY',  '/S)V,(,6}-!*j;}=s>VTM`)#7v>yOPH0SpynWJ*$?J57,A/oy$}uG=$24`hupm?N');
define('LOGGED_IN_KEY',    'j`$WT8Xy@vwR/z.(PoJH-W_<ccD%s1ZOS%}]NX U@Tq!eF&8 Zw/!_^ab,}:yJP|');
define('NONCE_KEY',        'I=M*H!C=-a|F -,Ss ^.*{@Jhj)5mS0`2f*9(BiJh|ZCLG !y|UBVpj%m}l>P(0+');
define('AUTH_SALT',        'K>d~7Xvt}1egbaG(cg~w{p6CPpCB$Ul$?|1yO=uEd:Zw}rW$D0g6I3*KVT_G_8$f');
define('SECURE_AUTH_SALT', 'Lo(0~B)8*AICtqxSox(uEH%PSxoCKq5^Z<=Q^sr#= *;0n;#e~4/eb<71fr!OE~1');
define('LOGGED_IN_SALT',   '5zvS!Fvm|_|acb&&6?J51T](Wv);T0!Va/1DSeFLaTdEx35FWkXOkI&rI>W9%.Zw');
define('NONCE_SALT',       ',EYy{~E4lH9}6#~;JV!<t>F&HzJ1=}YNcEy7JM]T,IN(Qv!og^cF|E/k8DApEx{s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
