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
define( 'DB_NAME', 'law_service_provider' );

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
define( 'AUTH_KEY',         '%oan)diNiQ.x!1^UL_9RNCT5x,onyO^0JS/1DZR66>{&p<G7LB@<CS+az?fBYF7+' );
define( 'SECURE_AUTH_KEY',  'zZPwS|0t>GzMW5!mI*rm_5}sw[8`DwmBuekye[GyZYjT|VKIlml@<cwLO[a<4%ck' );
define( 'LOGGED_IN_KEY',    'k`f<!M+^Sa5llw0DT[:_wJ:u22Kn/&LB|7;m.o-gB9rI9ga?8$V}&rE~wg=0Q?dl' );
define( 'NONCE_KEY',        '>.D%t0`?rjm|oFBUf0Bs<|FEpb<+;t}VI1y2kABz{?U)7dyxl CTy[KaOsYz2e(j' );
define( 'AUTH_SALT',        '5Mo:/?u1|!}/hZ6P/Tdn%]dhid+I7sm9B>kJ/QteOIn!;*LHUdj8~sgVa[SAb|9T' );
define( 'SECURE_AUTH_SALT', '?z{=GNk}^*xn5)70<6D}vo^nVq/jO#aWdQV^;Oon)sB*JfwyMT[Uaqt-?_C;r)H3' );
define( 'LOGGED_IN_SALT',   '{2F7i kGBsF-Aw)M?Ph|mz w,F,,~o[7;#jtn^;~+-[<=A6%%Yz?@C|MVDoEUmXK' );
define( 'NONCE_SALT',       'zCI@BsIoA3McXJZwK1{) ?k#1kM-q&tZu^@QNcSG,^x#4 eqyd>hV RO&Phg[NDZ' );

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
