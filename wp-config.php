<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'pr6yf~:0cW*aR9LKG$vDg-PT4`tcS`b}dGf>xF@8pV5_I_;O[MXd3/ *oNx>QIzv');
define('SECURE_AUTH_KEY',  'Hke>b1NxzvWH}n3H_}~0ISq.]QY2!N4MaL*a^zy*0Qlj5s^KfL&O%;5vG5=%dg Z');
define('LOGGED_IN_KEY',    'GRo&OMpQ][_FY<D5GuWufh FPwVsg@?d*~H&SNyWtn^7`0{4ok9DnYW[7[RKt$h.');
define('NONCE_KEY',        'CsBL+k=4{c[kBK ^RDn)x71k()R0kf@|,_dK6:pp6))I?e^]W-0[!X/2[|,)0^A@');
define('AUTH_SALT',        'D~AWTR&:#]Jj2BVoZQT}iVjq l!6~eU<4M~wo3GqC#5 :6Xs6qu~K}e[r];ICw~a');
define('SECURE_AUTH_SALT', '<hq9ncoqov19)V^!GXCCAszu#r]N)&eg3nK;PODMbgD`CR?_zai3rnM[H`)5_UrR');
define('LOGGED_IN_SALT',   'Hk1101zW.Q24*L12}?T2Z/Ko2e@]o&zD]KE4%ftk8<7$Krk[.0:(o,:x~3&c?t=[');
define('NONCE_SALT',       'fxZtw~,}0sO- n*wS_AAS)}{@}H-5JyvcYA:L7*UEP.NFu*JY+;@&haL1Jju]; h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
