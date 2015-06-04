<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':|l~O6u70c@gU_CC[UU0UXB#/6yPv-+z7SVX*j)oHN5tBzUezqIjktU!`,`c^Li~');
define('SECURE_AUTH_KEY',  'q(B{)BLY;emy.:|xjt_Qm79 YE+w%q%o2|zuu$NPWww_2H1%o03#L:H@b}ttl?M_');
define('LOGGED_IN_KEY',    '!h|V@z<g-U5D|^K`[{k3N VoKHg`y|0{^~TXAnl)SU7Q2K>J9RfY`Mk;c rIbG]X');
define('NONCE_KEY',        '1VON:a7I|vOzF,mCIKX4h%;7(xJic|/k}O)hLH=sD.N$4QI+}TWhU4Y /:jX;5Z<');
define('AUTH_SALT',        'M#Shj7HRXcuVSUz8**|nzp@tz|E4^Ooj0y7=Po/=DR|c-f8T=u5-RkeO1/6AFsO}');
define('SECURE_AUTH_SALT', 'n/!}FCf|Y}+Jes| sl#%GcQ@b%JK+!JVXNeez6{kp@{,P7(^{N}- KlnhS ?t)gI');
define('LOGGED_IN_SALT',   '|i-%}2hp5-=R|3& yl1%00k5BNzHCQ|;/ot<K[-Ux[n-gQFBe[La9Ga3YpMFXscS');
define('NONCE_SALT',       'Lpx]A+L;y^-,|-Y,+!;${qEQ<;X0dQcv@#.k O|ID_LxFu|Xi~B(m{H _nHK/^^i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
