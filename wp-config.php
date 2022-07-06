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
define( 'DB_NAME', 'orion' );

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
define( 'AUTH_KEY',         '_bsI}6 /%:Gu$MyogL|V^ /j{BTe,BRiR9y1CoohF6:;jnwS]T6FJyMF}L=q/I&v' );
define( 'SECURE_AUTH_KEY',  'MmXiLjz)3ADj/V+syKRQtFe`EC#5UXn>6E4FkRQ@bFuvH:2y]XmL=th=M3z=ek^p' );
define( 'LOGGED_IN_KEY',    'qk3=C_R^4mme+0u%H>])#{0) E|N{hFsPHz/%cFWyVQhWhA7P`:PyDW0c00$rY/.' );
define( 'NONCE_KEY',        'UW*xD5Pdr_eJ5ywjj`6[6xJ..M*;C2<Gf)[W}^nj$8~Yv1W;@$O#$Cg%$WY{0ZxY' );
define( 'AUTH_SALT',        'CTGAk!e9YJ/P}iGLno_9:xQ8N#Q+1sr?eu51}i6oJ{1r^u7u{HKXl8h#p65f[n%c' );
define( 'SECURE_AUTH_SALT', 'Ye[!t]([n![o0C*~%D@>{;YZkk)j9q&y, LG:C)dGVp.y<[K [X>F3T PC!bc<X}' );
define( 'LOGGED_IN_SALT',   'gDiMH![7zra{<up& zd_F`X6A}.?Yj_1u>!#5.UO!6&_3myvR5q+E2jV3tWjgN$z' );
define( 'NONCE_SALT',       '8$Y{}qBU4EW%pqiY,g+#1C@wk<0td0rB6|>+dqdo:/9^yhW6bbm3s.7K +)={FVl' );

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
