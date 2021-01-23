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
define( 'DB_NAME', 'suyash_wp' );

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
define( 'AUTH_KEY',         '1Vs&(o&tJ_WoE3[ddX2Ckk6iRUOc^w,#QCNQOt&]Uu5=-H}fQq_cuaK>A{E^|!Y]' );
define( 'SECURE_AUTH_KEY',  'IY=A_&B^W&R+[630`tFl n:hQj[Xm9M5/1o*k<Gq~HcEh9wRZ<VR}.w>@xg66?##' );
define( 'LOGGED_IN_KEY',    'Lb)bV7l~{+!_Y5zi9<I%[!0:m[mlIChtv;DZigk`|~1i#?d08cvsr;4p+7#boJof' );
define( 'NONCE_KEY',        'V*[[C_E<5s#SY];MvB.&QWCIlIpCyVQ#m1L}%9#?{Q]#7:Fm#SvtA0xYPD|^j9`[' );
define( 'AUTH_SALT',        '$6F<IZ|sakPlW%B4}-=-i=187F_-1}kHl8L_WJ-+=6[Rg*|IkuvFxSn<yi:r-oC<' );
define( 'SECURE_AUTH_SALT', 'B6 M+b??-#t;|BEGbx]mK{c6=g.L6:O/`G8,77l&<Oj&Sm-6_USp^I6nN.Mas%1K' );
define( 'LOGGED_IN_SALT',   'JDlFp@Q!7Y[-*e1zAW3DB@*}Ss8|g<n/>*gU=ZA`+Xz$P`RKrOn4j3nD%L/QVUBr' );
define( 'NONCE_SALT',       '/JE`CuGTGAD:|;3ZzD m.)kA^=[},C&d7|{q7QvR~%IOoW3M{PMUXci)LX;p!?Pv' );

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
