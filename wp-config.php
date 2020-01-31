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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alusv_wp1' );

/** MySQL database username */
define( 'DB_USER', 'alusv_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xMx2h0vKz756' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'CZK0nK+]H7D;}IZtK#+rV&JeG=Ok&TFn5D:R(1SM,GC%N+f+To6$Qyeup9^7J#@:' );
define( 'SECURE_AUTH_KEY',   'p]3C.- pN=0ph>jHGp):tr?K:>T_~Cb>rl;K}+E[/hhk[;1PwJe(#`lC>j|bkJ-`' );
define( 'LOGGED_IN_KEY',     '6^pfpIDG]q^6ys20M8zM~.-$`y! )O$_]7I7}&@g^PQFKcGiKz=8*3x<wE7HRKE$' );
define( 'NONCE_KEY',         'i4_L*vwgkfXm|FB2f1}Y%/}oP s_~-.7tS`_n#~9ih_7u{?=[bxc`,/(]R=25m9;' );
define( 'AUTH_SALT',         'Tj4+[H|gB[m)qt!4hD6}`X8!!M~yP*PNMJ^b)bCDLwET0YKm~_#P+)[/,*q[+5Oi' );
define( 'SECURE_AUTH_SALT',  'o_G*fZx~Qx T!Qd9O$dyj5<(RV`^]570MhZ]x!:vdIhFWs6s],H0:Xj+|hV].nD7' );
define( 'LOGGED_IN_SALT',    'V3I|r)S+TY/H#}E.>2U~/y]h/cU^dy]Oo9{FYol42=+k<S]5v0<CzFjq{Vl1ektW' );
define( 'NONCE_SALT',        '3%wO*Xp@D]J,^=CHv3^C+sLQv[GbPMH#/zH[<l41nDhx]y%s7Wh$/UDQm)V1]#R+' );
define( 'WP_CACHE_KEY_SALT', '-gL_jxvNlN%~} 8U(hkJrc$57#d%K1$kf5#)%o?0}N!7shE0x(pPtv?wz:FFw=b=' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'travel_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
