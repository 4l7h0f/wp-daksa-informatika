<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'af_daksa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'p3ndr1v3' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'O?!g,RiTx|V<( }U=[oEOb=NQJ`.L#7|N&T0$$,1`),{lZb~EcL6ct zeB@-9F?C' );
define( 'SECURE_AUTH_KEY',  '(Tx1ohey`[<8wWC.*/G}HE}P,T@!utBrg(`t.Xo%4mBwf+QmJA,V&*v#[C%E&pS{' );
define( 'LOGGED_IN_KEY',    ',8y|ZLTUm]X^0Y!n+%cTJ2vJLc4mb(7G~PA]%]Y9,(6ex3*t4aT(STGQ/*lm9sAH' );
define( 'NONCE_KEY',        'HN7u5r=%#%Y[U|&kK:{}jaZui|waqAw&0P/BN0>HuKil>bkM>E$H*G71?~3WK>*{' );
define( 'AUTH_SALT',        '.KSaO-&dJiu^_%0:e`$Rt`Mr,{BUwG4Pl+Pig|I<G_HWkbM;1<u+_rL:?`GE DmE' );
define( 'SECURE_AUTH_SALT', 'c~HMT~,XZhMRVRH^+mNpDgu!J.x9Md{V9aD-xi1Po`8Dq]P)$hm=m0TMYfczv&gu' );
define( 'LOGGED_IN_SALT',   'w?)9v#Rd?kiD$*;AA>[,!#&qh#:07b*Ep jrCyDbw?y5s.ua8U%rO_ 2<i$x0uD2' );
define( 'NONCE_SALT',       'I$5HEdrTsP(bS+9_W,#q`dd&X(cfYlOjs2 )8wx+>@Xa7X^V1BWD.i=X#/X*nbtF' );

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
