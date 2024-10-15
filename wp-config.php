<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kidsworld' );

/** Database username */
define( 'DB_USER', 'kidsworld' );

/** Database password */
define( 'DB_PASSWORD', 'kwiss@123' );

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
define( 'AUTH_KEY',         'j0gt}=.?A$[l`kW{Ap-Y3@[s?Iic)t(dG~jd|X?]ZPFY`v_rc0ePZl!rT;93I{E$' );
define( 'SECURE_AUTH_KEY',  'fBC5;vx+rX6}>uUE52ajYRKrc=M]FbFr%Oytu{Q@O }vc#k_sa)wVKTM7/xT61V@' );
define( 'LOGGED_IN_KEY',    ',g9q,f%(C9;(dQg}.R%A~5ksB:zx0TlHgW.RP3O0;S}2mzv 7lhX.uPNmg;|vW0g' );
define( 'NONCE_KEY',        '-=J=OoW.gFz[t;`LXk?L@%YX 5#)ZWvU$o:lK,^lYPdu-(yF<aM#RoaXR/9@l!2)' );
define( 'AUTH_SALT',        'l1%f3/IB|l{NMK|?N=%,HsS&`Wf%o=C5#xR%U2# xmpLtYkc~6l3& &W:Py$mQux' );
define( 'SECURE_AUTH_SALT', '%>S&CCLBKA:Fu<@VEE&a!yV/#E>Y&3$L+:,=<DA[&ODI _*.lKEWC3cS87[NT=,D' );
define( 'LOGGED_IN_SALT',   'e6cqn@HBU(`#Ttp,-YxZ<s(,X~/nYE[5[(%6DVTMQN.sh{}~Vq(KpjKZ05V!l:r<' );
define( 'NONCE_SALT',       'Qa_Z#0%(_(#Oz/x(kjFZH6{^&ndy_Q4D%Q0=8!^^:ekNDP9xf%V7}q)C7(q@23CW' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
