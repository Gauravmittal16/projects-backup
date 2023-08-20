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
define( 'DB_NAME', 'unboxing' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '8755' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'iAc({~z/?^O$u$? p!JKJy#PnRP#^vmgK%L[>$vY10o@t~%TdI?NfPf.L!1#X*wH' );
define( 'SECURE_AUTH_KEY',  'iV! ^)#8K#7r-MJgRaOe+}b3c!,@>?)6*5j?/I! 01Ru6wU]``;2tP+s{aQI$HKG' );
define( 'LOGGED_IN_KEY',    'Nf6Oixzy6K$f9*l[#&zF?NzQ(ERcgqQF/E,8qR6/Dkg4P0)J7>$=F4+bpRR[d a4' );
define( 'NONCE_KEY',        ' R4@,GQeq)b%)2PI);/&(`A(5=ey`%j_HW*0F$m[0aL_P/xPcKrz>@4MD*@&lcBX' );
define( 'AUTH_SALT',        'SXLmtJL[MSFmE9w?-.<]#+<BfIue4E)Lg_b bh,<;PL4S%6j_vY^2LLXaMp*UZM5' );
define( 'SECURE_AUTH_SALT', 'iN`%#I*d=dyQmKT|1pN|]d51LH}@S#ZDrf=*g|FxkdD&Yu9E)Q;OsrW7UCF*;Xji' );
define( 'LOGGED_IN_SALT',   '.lX1QzcZYQvtW?8NT!IDAKsT4%x|`uqNN% Sxi}|4d#*dhd(+H=TexKz2;>$Ojf3' );
define( 'NONCE_SALT',       'T$2A{D>*B[WmSCM/yO.`aUDA;@ta7iw?A /zbJ/#eLpv~[df!2u1c:`^^G]#b}3h' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ub_';

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
