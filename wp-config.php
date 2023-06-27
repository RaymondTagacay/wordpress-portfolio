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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:4306' );

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
define( 'AUTH_KEY',         'CRdS{+.@Gzre?jG3EFU+?^nxxvfP.sh2f~$0YeVSbQ,,pk wYcmED*/5@bA0>{SN' );
define( 'SECURE_AUTH_KEY',  'W1:wRP%wKnSMG53o)2{hB^Nh%nQ#j7.ss6S,N=UB#6;C6qt6gYs8vh#xhg3f%:g;' );
define( 'LOGGED_IN_KEY',    ';!*}:Q<Lv*WP)_5g>!/ayW5QZG@Gt_]4Rb7r6kE%Rymg.Dex5o^:dp>GB,]2G2Pc' );
define( 'NONCE_KEY',        ',sKI6&M6;]5Q^ZSZ-Q?>xMN!c86G2;=Ma&J@AEYf%u!l?5RN3Y1X|dh:wQ?*:zks' );
define( 'AUTH_SALT',        ' [-0D/Bn@ik+NPf/`$8>@{B:JnF}>Rqx Ik)#-}I[)O61}oWNC#pmF02 [aODkbu' );
define( 'SECURE_AUTH_SALT', 'E`P=I+!}<h<Rz3?  wcIMP4jI}x W76rXAH(n;j-r^]?(b+i#5wk[jSDj?TaB?:t' );
define( 'LOGGED_IN_SALT',   '[Hx[Up|LHH.9^SvsLi[reYrGIjtM^Fht5,I:y,3,SMqA9_E79G@0>N|B^.NwEo$n' );
define( 'NONCE_SALT',       '0bR0W;#V7^eU{,<Ff*buz+M<7!,e[?xYI+KieA?0+womsE1GWY#Cqi2~&6)hVh]w' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
