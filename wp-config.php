<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_nhom_i' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{Wi|:bfRO}G44% OZ}E76J<(7G8F QYgIIKYw@?$NAQtRs-S;tiP?q-Vsa -pRo(' );
define( 'SECURE_AUTH_KEY',  '[f/J.-Ss>JK4Fj6<d&;S_+@>t2cD4oqt6k{]z~r-<7im, xz!r)cH%c/w9?{{dp`' );
define( 'LOGGED_IN_KEY',    '{&S_?xm6/%Bk7]<C8Eo*Ys;+X14ag,_=DjhAftM$}(9DKLJz&OIUY)+94nw%umL_' );
define( 'NONCE_KEY',        '%hZP&u NrWv!Pq|G=7Mq4rrS1#FgB>$,LG_ckGe^2,;(QT6%1=aQ)#ClTf}1VnP(' );
define( 'AUTH_SALT',        'B(:T{utrma2y21`YD!ZVO!DCPY<7=PY+Jec(,@d-&4ioCr802y3}b)6G_OuZJ!vg' );
define( 'SECURE_AUTH_SALT', 'mN<FXt|K(j@<a)l)ZLQ? J2W9QY! ;_1U2(cJtP3r{0Hi6(;@o1Ax{Yt/9MzdQX-' );
define( 'LOGGED_IN_SALT',   'Ja8b2U+f03&Qp`x6=5TVtpvGtrD1eWlgI<mH<t<*g(R}|~;ZQ=C7`jjWOF?@/<HI' );
define( 'NONCE_SALT',       'AZ1$}py)NnOJxg6d_~0i_$3>(+^wobsY+C0-!(<f,.1xS23cow(FIcGuJ-oy-yVl' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
