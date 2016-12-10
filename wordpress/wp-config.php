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
define('DB_NAME', 'wordpresss');

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
define('AUTH_KEY',         '^TBNbB1iY){W3XRuEIRXSzVsGO(Z1`vh%1.kcnRPR8q{Z&e/PuWZg&l_e_V/U(O&');
define('SECURE_AUTH_KEY',  'uH$]9!kVg|*{I/Tk}>3A&8C?9;0?&3MNm_eT{2mq{ot5}|n#M`3enx( }kM7nOUd');
define('LOGGED_IN_KEY',    '-`h6TdO`:?6]( 2B+WCn^[d5Vd|.G8h$fBvQE71V@id@+fVbt5AV&FC,)_#.KyH=');
define('NONCE_KEY',        ' DFX,xI++O+{G)ia(3H3VVTy%RMQe$PYjVk(,+H0H%<Y;~b^UT)CdibFf8@f,t{E');
define('AUTH_SALT',        'h^g6-MMYQFZ?HzB6 1P9LMl-4)OQ~#2.ax|2;,(?_Rr2<}GaI)=r,$a)?%;|k,sf');
define('SECURE_AUTH_SALT', 'efDY?Mqm{?Y.1cPr@Y<U)5nXZcy-ufj$=07^dlut/a.2WiwpPK4Zd1|#]Gn0#*`y');
define('LOGGED_IN_SALT',   'LR]{;8O u#+})P)YD)F<8Bq*gVs[Q#l~mOb/<&}4|?=h&,>;s9[8cJSdt?ISDQnW');
define('NONCE_SALT',       'Y@7?x^Q+@9I3VsCtO!rhkLk?y[Kv ?yex^eh#Y7!L6CiDv!<c)G!=}#aB{/5-qyM');

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
