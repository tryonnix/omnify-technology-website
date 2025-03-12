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
define( 'DB_NAME', 'Omnify' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^3GHTuq3(2*1Q&mvP<i[6>P,qiPF/Ik2Thu,m2Gz))h/?Y9qcq+:dP1=K=N]~v;R' );
define( 'SECURE_AUTH_KEY',  'G eyXlB:KG;G`A;=qN(t(GAE0jfOO*H)P*g_~DZ8tLae)xOmM76kwyUM8owF*dSr' );
define( 'LOGGED_IN_KEY',    'IQ _%K%F95Segh70<D9;_5]T0[@J^Z{/d;=~AB!LQrru&L_r=kbUws&MW_5)uWov' );
define( 'NONCE_KEY',        'bwVH9i!7/Zi4_8itNXOX%7EzM6T1f>,KpTm{40fv65z29~n~5*[1`i?E]}x)y;88' );
define( 'AUTH_SALT',        'YW ;Ezl6)}zPRUi4#}D<2:7Y|L8LF=MQ)YK][RuiZ$q[t(w(~dh6@lf>P+<`*EfI' );
define( 'SECURE_AUTH_SALT', '~V%S5%V^CdGWRA@[R+d}XLUz^an4<M+j<RrwL0$J&4.kc<PII>Ga#v&&k.Z>:,%c' );
define( 'LOGGED_IN_SALT',   '+:zQ+:F-x3%$h2~Vb<*$_K++&l-$lGxLh+H:|,XuK hyq5dF7jwlk[U^rj8G=ZR=' );
define( 'NONCE_SALT',       'aXN5Q#$S5DqHE9142)zNQ1oc,UA2@y1ZD-)|&c_KH%La3oq 7}#;!D@.Otm8Qi+|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
