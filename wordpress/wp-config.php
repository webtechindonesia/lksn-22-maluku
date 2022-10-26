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
define( 'DB_NAME', 'db-dump' );

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
define( 'AUTH_KEY',         'vI@TeIbdxenkLTm|/9{?,)sf6HKT|Cg<.IS!uVx1&:{v%}lYPKp@Myc6@#x .i4`' );
define( 'SECURE_AUTH_KEY',  'FAm(e2>U?:}4cyr%(6bg1C4|`Fg^=G@Sq,1w4cH*{z<D,Va%.Lkw{}:|+~+1p&2M' );
define( 'LOGGED_IN_KEY',    '*,SM*?2Hmwh1 QNJYuV^t#}gje12B$LN`,^H~d}C^iTVN3Fmpt[lRuE:<C3~v6MA' );
define( 'NONCE_KEY',        'L7p4@Ap!?|UR}e4ug0VTnUoKQ^%QH}/I%Ly_YUPe>k8N_(fN<+C#Vmb1@3|.n-Bl' );
define( 'AUTH_SALT',        'ChXv_B47)b?zdYwhhq]4NgtAjgY~CA405b^[$LNL.4(ABgC?l81_a5rdZ%3487P/' );
define( 'SECURE_AUTH_SALT', 'PsBih[9SuN0^HE`xwJH?AfcQ]!IPTFuRuN1s/b^`?b%btj;$@WnAD<mf?&0D|E[T' );
define( 'LOGGED_IN_SALT',   '1O|]wlT/|9gQnah^CczU~lwMz?,2w2S45_&i7IY?@^PoEGqkb{TUP0#^/`n%tC-l' );
define( 'NONCE_SALT',       'aeYo[e[&P,<gRzr#h1M)M/Gt?H_wE(VbtW),Ou2Zmq2xq>6_&%YMs)v#c-?lw!jz' );

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
