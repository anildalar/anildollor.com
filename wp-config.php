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
define( 'DB_NAME', 'anildollor_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{=hE^}evun3qTh|+._QX3C23s~t@zh<cMx-Ew=d@4f[8[%3I7GXc%n5iPNJT|L;}' );
define( 'SECURE_AUTH_KEY',  '/r)vMD_U?Z:9GIXX<q16&b,PX)2]NbEYL[9Y0VoCyb?K%m!F~%#<_*.5MfAc(tih' );
define( 'LOGGED_IN_KEY',    'kgO55z5j&2kMzT1@+l~V`^]2@itPOJkVhP]@1e0>%.1m f<<u|1QF{i*/MQGg>WT' );
define( 'NONCE_KEY',        'J&a7oHGMlR(fp^f`F*So~%(Vh4Q%e@{p$)/Uv!TBT&G*@|!qAlH5Qf?~+xs6RxV4' );
define( 'AUTH_SALT',        ',d4)lTr&?S3gw.B?)/26}cS4RA+tS{&bFq MGy~ xXfoTYWZ5xu>_w].wDYLpDGj' );
define( 'SECURE_AUTH_SALT', 'Gle` daIBn`6rwTc%}xVxn1?,q:8RL`M+z3 MjRm}vc]?G>74P(&p/IsVmw#.782' );
define( 'LOGGED_IN_SALT',   'B1}A9](u#LO{>X<lFA>DzJ=zkj?`y!`KGs7h1!uk>ayUVZ({4/GRE%f93YDexi$G' );
define( 'NONCE_SALT',       'i{OO,Blf/O~z?%{2wd1~L1ZaDWT_G]>wj-3~j*7h{V6B{]B[c:$@ie08UG6fL/Mw' );

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
