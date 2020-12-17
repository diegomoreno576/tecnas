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
define("FS_METHOD", "direct");
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Tecnas' );

/** MySQL database username */
define( 'DB_USER', 'diego' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'YC)(15Cz>X-@dGsb|eiG?^G>R1H>F~A_3z ;,}mb@mnvlnoNd:/>;)[LC;5f,i=X' );
define( 'SECURE_AUTH_KEY',  'qOz]dPf(jhw#O94L=ehs;9XA6GHJ8j8aw#j]hF-+:oc8@2s~]wcJXqR`F@3})j$y' );
define( 'LOGGED_IN_KEY',    '$C[FQ/t_QJD#CI]ySKyE/z1Mi|?*OgjL0pnKoe&9-yvw!]=@.gqA7P{-qDRgC;q{' );
define( 'NONCE_KEY',        'Wmqc<WBsJ#?a_%DDmk~~8>QQ3:^?OJ2xPAjNFLi Liwv>RN58IAu&9Y 1;ZknK#%' );
define( 'AUTH_SALT',        'Z6QLklkM`m(@h>JwMZn@}HU_IL98*PTB<&6nxBF!!|=Euz(VII=OCnqq`Jeb0x?]' );
define( 'SECURE_AUTH_SALT', '49_L4U$EfKY*in=#G=7: ?u[3|vNf!VG?o*Yp8$v6R)p5i{=*0*VY(Q>AmL%l988' );
define( 'LOGGED_IN_SALT',   'TT@($zI(!Dlz.cvVoU5NDp/ej7mn@vHTJjs9{HV$@=z HaCB6U]s9fZ:V:o`e`A/' );
define( 'NONCE_SALT',       '=aD/i0`4v4Ie,>.:+0+[[W/d4SHF,O5{=h4SOz;pAYwrUN~h05qq %ndPs5RVSR<' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
