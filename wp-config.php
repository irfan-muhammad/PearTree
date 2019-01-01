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
define('DB_NAME', 'peartreewealth');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password empty
 */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'o-1a~%vN^&^`@n>/tQbcdV$zZ`%};d|W1E0*y+AYI5g57>uxnqWhH]Id&>kE,yL#');
define('SECURE_AUTH_KEY',  'p<7(D+j;uW+fZ8m8Sk/5.d8}08n{j}A*lV1IjIuS<8TS`!78[j7dN;0 d 05i])4');
define('LOGGED_IN_KEY',    'm)xv)KtA2p-siF9b_-@),Ks[VycN3OqXdU!%zY<VV@d-[((Mo5q1#g4^ZWjm VYX');
define('NONCE_KEY',        'iX$8Nz^p9Gl.3sxOtTMk]LOp-`A)wg&nRB:Cd;$~BdVon-n%f~-m%8yFe^YD6x)!');
define('AUTH_SALT',        'qchd4G*rrhbPeW^5|}@@A=-%gq~xf>Jd@dNM/$)H-[Lw~E00gR53N|Cb!3)QC~B^');
define('SECURE_AUTH_SALT', '/QEHf<yW Ugg-O5iGYw{7S)^I[5r]@N7pqW,#|dc:.tYOEDY|s1r^R`bgh0^fbDt');
define('LOGGED_IN_SALT',   '2@4pSNGZ}iY>#PVC/)[^9F|f]/rr0vQ4W;Xpq33Jaw!HIn#`+u2fI4T]G2bGQE]x');
define('NONCE_SALT',       'n8>&Y?o~Hg0~^u0IY?+s-]GrJ(89O6^w[#}*!kq8mmgH$c,^M<rf)Vx~g?qPJ?=b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ptw_';

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
