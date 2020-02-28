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
define( 'DB_NAME', 'php' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mind@123' );

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
define( 'AUTH_KEY',         ':vWDQRSdKc%uGew{tb5O(ebjPlGgD]ZKS=Tv9bCj._5Ff}d0e2<f@)4s29.;O9_H' );
define( 'SECURE_AUTH_KEY',  'gA)_]<<LwXLlY8Eh5Q.v:/>rU=V$B+[G]DR|j}W_bJmUFsQ.g88&Q%@`re+ud.. ' );
define( 'LOGGED_IN_KEY',    '<Pr*v*#+|_v3>9,3Zq|zLiP~aK!(qfuUSPIN[PWPFkG<d8@8OJguf5Uue[(TosHG' );
define( 'NONCE_KEY',        '>,^y^`jjzXr!d}HZ&q|xdWLiaZ-jSv6{Ern[(-Dl/D$-w}{TvHoAaz/5^nC%Z:I0' );
define( 'AUTH_SALT',        'N2F;K3^6k<Od/ls]gNl<YvwTUyWd_f[*T?oVrSc%|Se,1i*@jG0!qn`}V|whdU[W' );
define( 'SECURE_AUTH_SALT', 'I`>>}<m?NH*J41oNtw1h,YG2OawOk%t; ;?Q>7dED*VHjB*e2_9THJ$6Q:v*BVQO' );
define( 'LOGGED_IN_SALT',   '`A2@,)s-&!keqwy{[!?0mF4Wna8MmIwYa1::<!0px@GrtO5,x+]SAJugC$|z7zL:' );
define( 'NONCE_SALT',       'Xh!uHXD.wTK@AX1<rX~=ER&Y+@b;0K=6L]^={O}RzjQWm+&X*v_)J??#fjRGt{.@' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
