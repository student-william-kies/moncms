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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'william-kies_wordpress_2');

/** MySQL database username */
define('DB_USER',       'wordpress_4');

/** MySQL database password */
define('DB_PASSWORD',       'PD#K837qhg');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',       'SOu^foIr@C5&azNAqERI3A57p1pyr6W2P7Fs4xE*Njp!Eau1GXBH&M4idhPqM)05');
define('SECURE_AUTH_KEY',       ')CAuqwG@MTYyLqKrJ2em9cNSwo(CoJeFdw^GY!94Eb1MdfPtgv@B9ACuvVVZa7ap');
define('LOGGED_IN_KEY',       'ecl5&)CyQc(US0^K*@MHJ95#QZZQRY8OrRcN9Z%01Y7Im8wl8MxncWH77LIMAK#V');
define('NONCE_KEY',       'Qx8DsTNtK*#!G^dt02Kba6jOS3wEk0s*dHOPZ!LT1icbRB*Zqzcj1umAbWRJj%Wx');
define('AUTH_SALT',       'b&Gm^YY^@OA5GjaC54OcALWwc^90PA)F^m2onyWN7UXLxfDyGOE5IGa%@C#smDv9');
define('SECURE_AUTH_SALT',       'V#apSH#@5FhIbcdXpyE9RSxBte*hge^upKhKP1cQF5iByK!I5u**U3cRLhxI(@AF');
define('LOGGED_IN_SALT',       '#qXGQi4z3^3*d3Yztf3UINmf6f9J2W62M*#6ntR5Wos0K&zIlJEvNDmoo#dkz&Ev');
define('NONCE_SALT',       't%cq1*udyGzgduh7AVicPNRYWvJDe56T3ilN^aO#P*Ok!Ja!3NqsiYYAL0)Rk81x');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
