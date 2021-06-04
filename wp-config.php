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
define( 'DB_NAME', 'platzigift' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
// define( 'AUTH_KEY',         'put your unique phrase here' );
// define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
// define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
// define( 'NONCE_KEY',        'put your unique phrase here' );
// define( 'AUTH_SALT',        'put your unique phrase here' );
// define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
// define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
// define( 'NONCE_SALT',       'put your unique phrase here' );

//mrLPIA&9Mmm*03s^vL

define('AUTH_KEY',         ';Jjzjyp-_b-.kDO+>L.aGsxOsxkSnYq/UewQAA-bsARRf44.bj5$L^Z~W2yDq2R`');
define('SECURE_AUTH_KEY',  'J?Z:Voi=5fogN@i.Of0s[RO=EJI$.+IQEEio9N%dYQr%`~Vm66xPdq:^j_w<[z*p');
define('LOGGED_IN_KEY',    'h[Z)%]=6 8ex^{*5^`UOj%/)7C%L.Y?]p .n/T32DP+I4<?qalu7t#@4mJmlc6&M');
define('NONCE_KEY',        '+ U5U5;tYv8hH48R)+eu`o*l(XY=#m<-41f@_yH2IyI 6DwJl&>elE08LLB#xx;8');
define('AUTH_SALT',        '6,R=t&FHK969u]Fsl)D$)cw7Br|:>7Rg*c+Ie(+Cw5dwq b@aEf|:cUBJZqTkgns');
define('SECURE_AUTH_SALT', 'jtw;W%b=D/s8cb:[E/W-hfJ,*i:/-`[inz6qi41eN+^=9-u^-Dl3h#2/wrNoQJyo');
define('LOGGED_IN_SALT',   '+/1,4)E?isgF+B!&[-v5fxrM-wQH?gB+V.vsyoXk!,c]t[D/l$AE~+XU#s|4j>`.');
define('NONCE_SALT',       '^- ;/6B2Sz&B(tZ,(3=0_O292T7UGb:4A4N*>?V>`S o8wi2h++GMh{2`M2VfGel');

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
