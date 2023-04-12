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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', '7822bbbeijaliXX8oranges' );

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
define( 'AUTH_KEY',         '(FOnphIHC%F:ast|7H~];HBWko*9jx1FcU>:u!=$f}^=Uu;0(hG4u1rlVuF?+tv3' );
define( 'SECURE_AUTH_KEY',  '(X_EN]7k3Jm/v82H9~P4Hr*N+k5:cJhA&4UQ[ap=R-VXW |xOt6!U}:tQoZ%J#s{' );
define( 'LOGGED_IN_KEY',    'C6:<jk/l[poTH|-|0R4w%O-;<I(~+vw9sgtT*@oR;I<F!IQz[` D_iNY */H_(%9' );
define( 'NONCE_KEY',        'RR7t;Kj(K;rC]P:,a@njs}|89{W{OGV1DD]]b85Mige=sXO+s;6[kO(6 [e@kp(e' );
define( 'AUTH_SALT',        '>^*m6b]4xHWbL(1*=+bV8^VA=`B_HkY!,WVx^1M5B; }XCK7YBio{(g`=bS9R`RJ' );
define( 'SECURE_AUTH_SALT', '2`]n-}PFO!~M`bdz?VFV<kqI7r<dj@xX/;|sjT(b_~e.6k0Jp IaGE2i@*V0P)lC' );
define( 'LOGGED_IN_SALT',   'PY(@qUUM[->p{$PLg <SQ@X#paT(>lXIh9jIo4jDT{NYtd(F}bp?rUD.y;0^3[&>' );
define( 'NONCE_SALT',       'qOp`dTWCYh}d7oWSo>;q49rI%t,`XaZ6;i#Mx[3Km~AGBYu]ik;:p<wFR<:3S`vf' );

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
