<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'tEFHtbbTlS1mf3' );

/** Database username */
define( 'DB_USER', 'tEFHtbbTlS1mf3' );

/** Database password */
define( 'DB_PASSWORD', 'Bbi4X7gSxFWEzg' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          'N#KU!]~]DQsY?AC4hzCoy]Su2Dx_ioGWl%&c%PWhJ-L<){Wy_Yoc~ (hv1u1teEX' );
define( 'SECURE_AUTH_KEY',   'dFSON)IQN-7WEXa(W}.x3W(U4V~AHl]b*@)z$q0eXN/b;(z](bNKU&8|ggdVNUS4' );
define( 'LOGGED_IN_KEY',     '(f,/dK[Z/>Kaw7qI%|tzXURb&>dl^OtadBO+E`Ge]:1*5,6 PSEQ/dgrV?^,[Z~g' );
define( 'NONCE_KEY',         '0g1TatNExa6`1`Et]$#Pp.95+&=0)!w`oSat+cfi@bJB!je&mYGO*qLpzq:ox{U:' );
define( 'AUTH_SALT',         '`|>V2Pi^iLO EcmY|_e/&ODcqVXr/y9A#j:<RgaAhgK3n7, n$+Z~vb?f~gnl7P]' );
define( 'SECURE_AUTH_SALT',  'm}Z7s]Oc:,fC2{_4][_e0VQ#+pS~~SwdZ&>b{YLx@=~L;5jQlLy6z9Qfn}KR14t>' );
define( 'LOGGED_IN_SALT',    ')b:1>zKVFl<{<=pW-5de=FIP@B7C7r+-fJyLreOak?VP?/?Cbd`Cll1?3,Rh4br~' );
define( 'NONCE_SALT',        '325~%;uU;]5R=MQR$fZu(vAAL|Vcr>ze03{ppm6l7HOw=zNjajCsfwIgoh{=>gtY' );
define( 'WP_CACHE_KEY_SALT', '30@d+Z=jg2OfPVEPsXc6bm#sDP6R164m|TqO*VC1Z67470D~R, Q%HGk{nX3hBaO' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
