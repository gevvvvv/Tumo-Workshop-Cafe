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
define('DB_NAME', 'ws_cafe');

/** MySQL database username */
define('DB_USER', 'ws_cafe');

/** MySQL database password */
define('DB_PASSWORD', 'cafe');

/** MySQL hostname */
define('DB_HOST', '10.88.32.205');

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
define('AUTH_KEY',         '>jS,&0nAT)3;WUV6)Vkt<;KY->G&!YXbnuz,@1aF+?kuNM$JIKV/l.>b_5U$NLU|');
define('SECURE_AUTH_KEY',  '@EB+#*?5HNab9{1V~Qr3_<C?BPHjPV^akZzv-q; x{azan MpuzMYJjV+[rp+5@g');
define('LOGGED_IN_KEY',    'SK-J=yj4@[(Vuk?po:*0>J(D]mvu5ez>BKby~9`;lL!3/zUq1<rE0BisCHT{S(vR');
define('NONCE_KEY',        'v!QT7,c%=1qcs]|`R`fpE;qJ5Z1(uXB7`pF4P*(1KlhI?GLUW!rkWlVeY9-}Ci h');
define('AUTH_SALT',        's^IU6nH4(a&P!d)tu=y5&2en9&gM4@ddDIF1sOF:43B5-0_86uuFzEK-?MzZGsE%');
define('SECURE_AUTH_SALT', '}%]y7.J{Ov]KZFipbjPf^o2FTqgoeT+m#N!)EIB&sU8)l-!pX=8EvrDW-|K_|;Yo');
define('LOGGED_IN_SALT',   'e}=c(9+X:VaT5|knBK{;:+Bj(W5LA]Z<)p_w5t:[(vw9:gV,42@++=XU$G|$^L=L');
define('NONCE_SALT',       'X| BN2sauZ:WOoBc;:s)f88S;181KlhIK+-_$hm]K$3^XS:my+.bGcN?$a?wSU9 ');

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
