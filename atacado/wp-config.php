<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'flachalimentos' );

/** MySQL database username */
define( 'DB_USER', 'flachalimentos' );

/** MySQL database password */
define( 'DB_PASSWORD', 'z3g7x9g3' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.flachalimentosnaturais.com.br' );

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
define( 'AUTH_KEY',          'WVD9fvbC+?bLto2R or#z&Wf>Tu$TFag/Jk@$@zj+R1@q6o3;N%|F`Q{!yF{.4_k' );
define( 'SECURE_AUTH_KEY',   '1z<kQ~ZZ/uP@5+A}vk1l9Rv(ptNby8%a*(:~Mzid^Pr/pf%47DMs;ZwB1:QYWQvh' );
define( 'LOGGED_IN_KEY',     '>[xC bJ6$N ChS[wCe=Uc#r17hK<=HHZ^JDC#T;Ak KYqrDh=yE4Qg6u$(Vv}Q*E' );
define( 'NONCE_KEY',         ';w3pI 3i]ieFM~z]&b1(;IU17Fg?`p9}.J46hDda^S|3o@Zkx(9>GBj;oCh79Tz,' );
define( 'AUTH_SALT',         ',3g9S[,]RjK?pX$#gSkWfWMiU|,6f9sceh=>S0N>EmQ/.I;F723:M}w(k6i=IM<9' );
define( 'SECURE_AUTH_SALT',  '-3js=EEtMKp4PNA3tE(P8#v@BC^oBmYc*.3iGz *%?K-YDY0!]{[Bn2fOc`&>5c|' );
define( 'LOGGED_IN_SALT',    's^)axM+xd$)GV5&SUjhD>L|D0Tx$y4M|wSNRuTIT_)@2G=dI(:&s5]f25:m/%F73' );
define( 'NONCE_SALT',        'RAgJuR@|~O:}bU.hQHX6u|!x>9q?{0dA<3zi|LU|*{t;D![U{FVObs8mz+>d>Y?p' );
define( 'WP_CACHE_KEY_SALT', '*<a(Xf6m~%G[#usUP$9H2_C]]i/=>A% aI0_C$mJ, ;bfD^c0@J_-!wZd?:{`DLz' );

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
