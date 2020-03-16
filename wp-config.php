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
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         'CBj2*6x+8<BFlqLwn5fjq[H5@|lw$yrh93dZZ<&;^7hUZpw)Fcc<{uCa4D|:IM7$' );
define( 'SECURE_AUTH_KEY',  'Lc9BJQG7o~S|wx`Z.Vot _6fg]=Zz+ct]kJ5OuV^+C&MK&?WK{E_YDSP~_!N(R#R' );
define( 'LOGGED_IN_KEY',    '&l[3R~Kg8`LW<-}]HJsp|&&?i9B-TXbaqV|h#D*x1,RV(pZFckl7JSNAIP*<Ad6z' );
define( 'NONCE_KEY',        'u_<E Bha$&7~{ ?HdJH&T2]ADFgTT1&/jo/] ;sM4q8 fb&fwS]pVR;|oB(o#H$@' );
define( 'AUTH_SALT',        'To-;0s{Bw,Hl1H#h/]%.vxWbjc3!Dh/`aE2(Z*DRW^jr;:TsDtJ07qsERg.4)4(%' );
define( 'SECURE_AUTH_SALT', 'f@[QhO 4/C?@>S#dq6=2@hBT*+2.]-1YBOb!F*xZ=k!m;;0_/Pr`7x>s#c{R%,Ay' );
define( 'LOGGED_IN_SALT',   '/G?q6jHmcquIm5leWm:*lHK!~_~#85i:5R87H+H`7O$:WY`R]p Cv=+xV#PEn-d(' );
define( 'NONCE_SALT',       'wn|N_Mjmw=^G+KLkygunL(B~)W6`dh/(s.}+~QMiRv,X{5N4)^y=!n67LgfXGaiK' );

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
