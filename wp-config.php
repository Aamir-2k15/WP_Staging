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
define( 'DB_NAME', 'wp-staging' );

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
define( 'AUTH_KEY',         '9?hw^*|KRe+_+%EZMUKYO9Z:u7v&v|;{4N2> vh#7pGKuY(D@KK@%Q%-/[)ulv~B' );
define( 'SECURE_AUTH_KEY',  '|,+N)>WQ.~W6L;>4-q9Va-k4iAQpiY#om09)jICZd-+G*DD$CoN+}&gsH0J8 _~D' );
define( 'LOGGED_IN_KEY',    'uDLY,}!v|2e$_CD!`t)V7aDNd {,ie[tWv`+W?u_O++q>H8M5#tWdg%_<F#y%BR8' );
define( 'NONCE_KEY',        'Q{n52R-7:Cv5lya:B6JM_w=wI1FCx({E|%tqM.s<Q9l}v}k~/!&Yi5ic>,4X!WDP' );
define( 'AUTH_SALT',        'l`JwWbk;/49?%ie*sSk-<H>0tvKeco_O/YkVJ#QL87Nt(n.F.0Z*yo:3rbPGC$+?' );
define( 'SECURE_AUTH_SALT', 'Ut(&a#0ycjN/:a(&l!Fo]Nqq~7K9sx*Nvj:3FbnWrM?;K@OVn*f_IZKA?5h2sKl5' );
define( 'LOGGED_IN_SALT',   '<o<PS~KTq%]S1KRmd3fzN$*1OA)i/Ur{r[$041W(ykS0^Elj*Ny;.?08#v<%aQbp' );
define( 'NONCE_SALT',       '/**R^Ys0Lf(e~:h$hlTMJl]k2ZNWtH%^C>aJbn9@azk*,-GygwI(<]f%^`ckxy_Y' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
