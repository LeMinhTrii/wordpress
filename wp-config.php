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
define( 'DB_NAME', 'wordpress_v631' );

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
define( 'AUTH_KEY',         'nSAAgc[2]!C=J}yJ!C&U(TEjj@,Lx{@hyfC[wHXA8rb)I@DMjn?@$==O 9 6/c-t' );
define( 'SECURE_AUTH_KEY',  '~bZ`%Zy{r<8<>APM%KL.3{$e=g=iyOg42kt)+M`ISW#x}/sp$G5t@.JSmf}MZYr+' );
define( 'LOGGED_IN_KEY',    'gd?M%Uf6dDj<x~=~e-UIG%j%5#{`S/&LH Nc103#7CMdj;S]zu@-K}Z$,I-/nG@]' );
define( 'NONCE_KEY',        '=U6,M4+5=P(?o%3&z*qnYYt @Z#o*IsWtNz`;?[R^-(<Da+/{.ao)f85d?&*TZjE' );
define( 'AUTH_SALT',        'Qy}hd[NY.6|li[Xj }B&A!p?:bgBPU1I_LzNp<;k0/K8bS2S&2DzHj&wj7|GX$/B' );
define( 'SECURE_AUTH_SALT', 'pO{#7}v4aPz}:&&>q%Lz[%dgB0]da>?[A_y{9#Qdty(![r[X01j$MyK#l:9c7v>y' );
define( 'LOGGED_IN_SALT',   '&)}mrv^;]Rc&xzOFUd>T^4f=[~]AoA%Ad@tXKeH!rNVt>lRD ?GK3BMw+.~*?pw ' );
define( 'NONCE_SALT',       '^(;!xVaP5tkt~ e~)2Mu?tTM/Ny<St(.v|:uM8FH9;^%(y/MfhM7K@Oc1EHC8#,R' );

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
