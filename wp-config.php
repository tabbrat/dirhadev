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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'cV:zg9,_3[UJ.p$6@L@<m>}qYe.^`M<TBV:b2g8SE4JxK.&we.7F|nGze~&9O.X>' );
define( 'SECURE_AUTH_KEY',   'c{r4u9bG&0yfLjRk)2qF_hNYeK-0y5mM/*)8}+]l|+]tNjh/4)y=]u+bq8d8YHk.' );
define( 'LOGGED_IN_KEY',     '*fx@8*/-j;u>gwq<34590hO7q52WOq}o@=VW{8:YQ27;n-ocrVjf9ySswtCq$/-m' );
define( 'NONCE_KEY',         '7w FtT]<NJSNQTKh8cxbSB#&5mfX;= sL 9JnsMpz| 08I?wH%.-g9$-MXL_2h0{' );
define( 'AUTH_SALT',         'x097J&PNS1!Z-q M1=$AX8EzrLk~rPoOg2/na8[!l`m@hW3[bx^#[epK^1N;e93]' );
define( 'SECURE_AUTH_SALT',  'M>wk)X>XP9nK~lg%k ,E/yxwl+h%)hhs$azCmU}D}.Y#9[)q)`_I,xp<u4Ml]n_E' );
define( 'LOGGED_IN_SALT',    '>Hp4E;:>jjqRl>/w8n@yT0LXASRoTXV^Bf$m/&qBS/)zn%(})vuy7R;T?wWM4VMl' );
define( 'NONCE_SALT',        '}(vw@n cLUuKnqd?ZpDX9jSiDLZezkymXKsM(PVn1&p3on/edoR$,L<Mz2AL?Odn' );
define( 'WP_CACHE_KEY_SALT', 'U$|8H^3]9RU}&Br{uNQ=gw,m ubX)~,!Z{08c%zW~hXUZ:.5B9T~+h taljwwza-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
