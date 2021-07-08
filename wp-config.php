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
define( 'DB_NAME', 'stage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'flexi140' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'YF{Qi5Q}vqni,P(-;l+*uM&t=]2^bJK>z2C7:tjC nFGMx_6[K ~>#?WR#SPE>,d');
define('SECURE_AUTH_KEY',  '-U-axA#/BFsWlF,ZH-9=*`qTKlM:/L1VANa9Y,Z2sBh%p{&-*eNn^c!SU*VY]8p5');
define('LOGGED_IN_KEY',    'p)smp~PN&3Nn@Oz+|}4CCnrk=i9BM`L?f`E GD|+CH].`ttG+-Lp,ZF|<KOP9$Yt');
define('NONCE_KEY',        '&!m-EV[iE.2e>JJN;vI=~Fn0PZ?7IAV3:Mz<}S?7Na&XSf|j8MA[|/)KRF9nG7JO');
define('AUTH_SALT',        'd?mK|=6]G23?%Q#Ew+1]hzgDE1] wzT]_.|7`*a1[DzA_?b>6=DhTt7aVGodE_cj');
define('SECURE_AUTH_SALT', 'T7$Vh.O@n ^p4{+<OA*<PSo:3!Q0,(Ya%euo)c;pt#s& E$4Up:j_a2];cN.|cCh');
define('LOGGED_IN_SALT',   '?rXkORW<n(WTL{=OaZe8I6cDA;V1>wdNeL xEgo]$Cnr[muX<9Tb}YcVdbT~&@U0');
define('NONCE_SALT',       't:I=2Kq[Z&|Dk7+d]^#5[RE:-93Ehphd:!e,+2qk[<O=]Y5<@TM |_fgGtUZcJ7r');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
