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
define( 'DB_NAME', '5dn3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3f3XV<k=h2j.Rn-Gq2{7`73^X7fqr|h4(JkYQT-o)/J9)Vu$;ZLEKO0P1&:8:4;o' );
define( 'SECURE_AUTH_KEY',  '#ieR2%N~a0;bK~1JoaV!bkx) GOyVt/q@tAS oqp(E%M8P)G+J2xwB%+v_?<eMCG' );
define( 'LOGGED_IN_KEY',    'bTJ<uoJKXs-v=@=C&RLVj4q4EwQkww0R}{3.jVMNcF6Xqm^+cK!6nn@hbRT~]MMi' );
define( 'NONCE_KEY',        ':~LA vc<K9+NdaunSd]I2@>Lg%2|ERPf|H#x&~`GVMN4y|Yru.V5s^4pMN|Sd(DR' );
define( 'AUTH_SALT',        '~7T_a`@Ky:lq-OqDdYcEP8DkUVK_GPvaU6_qK07[9;}cX&16FE/41[y}U7Sp~/oW' );
define( 'SECURE_AUTH_SALT', '8K@hBKJ7ai(2)P ~?l25vUh#Sm42riCw[eJKuA2;E^q5]vCZza-;/KVJri{9V2jR' );
define( 'LOGGED_IN_SALT',   'lsXo0q+!q<q0IpsXsb_s5byZnVfkXyY%KD(pRNGD+zY@Dr4b&$+~C6IT:Qc:#@gJ' );
define( 'NONCE_SALT',       ',dm]l BEWAq_-1^,S?SsLZi&pkK;{NNbtXKD^#]Ojhl_0{&<_A4]C)g3z[83BB;d' );

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
