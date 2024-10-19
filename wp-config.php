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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'proyecto_ods' );

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
define( 'AUTH_KEY',         'a^@W-$!D{kx]GB{:+t8V;z |.l6BwW&_ZS^i;(^PwaoPm}2KY??SqphdG^37Sc$d' );
define( 'SECURE_AUTH_KEY',  '|v{<,a>0; F~jZTRqGq|`<elbVx|,y:kKv,eif;a*-K{(NtYk[ul0_l7AW0qvVaa' );
define( 'LOGGED_IN_KEY',    '=K,3+pV0@qJx-C Z<1^M!TEPMEYP6*u*U<Z<l&Uz}0A$Fp#&3/b,Ui)|et o%x:K' );
define( 'NONCE_KEY',        'fosh46U_g~@ND+Rn?*j%0[8,UY-R-697zs,(&;ai/_>U}f3z|E5+k:`j=n?o5-h%' );
define( 'AUTH_SALT',        '>0oMqQG`lEg@AigNH qZQh!SZ3,ub,Gs2,8lvMrn#!z])nyuMSznngsA_b>+#lUi' );
define( 'SECURE_AUTH_SALT', 'u7U;&>+~9q*.d-Czeg[qUI>e*:UTh:N.r@Q^qnKX9WQls0DR8F:{KX:%Y^4+lLa`' );
define( 'LOGGED_IN_SALT',   'HO_8m};wswO%6J:H6W(RN23+;m4/q12p{a $K&U(>ry6E!Omjr] Ai&V|PfEik_P' );
define( 'NONCE_SALT',       'UE?AE8F-l#:)xU[KKmR{N@fVk*v iRma*Ow|-62yeZ)/c]3.LPhdz48wEU>&Yt,Q' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
