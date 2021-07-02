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
define( 'DB_NAME', 'bingle' );

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
define( 'AUTH_KEY',         '?4:[.IUAm`VZ&h/+.E^1puZ9&6b?o_HN(]]Hd{KVcjb@}.=4`VPHGm(a/p.@BqMk' );
define( 'SECURE_AUTH_KEY',  '5F<7^Kfr;jn~pK3Qm9 l&HviLjvDi!F2(hX;fgw,d$^_RvdZcbM$f&x@&Jpnqu5o' );
define( 'LOGGED_IN_KEY',    'NE{E:Mb@jz&SG[Hr|1,H:D5RNF{KPClJ5zAC%5]JaaY_Q?PY?~VnQ?n?*Y0[!9gg' );
define( 'NONCE_KEY',        '?N;XlML3ZOJ;ukfh|o*fIA9}wM[[KF(]9CHY?85+%L)XYi$CiD[?7eZXZ_L*=;=i' );
define( 'AUTH_SALT',        'e ~W[F/u.=$J~>&=2ln`?YBz0_{FR{?+Y cf7bz6yh]sL@P4!.zKrP2X`/K`#<:a' );
define( 'SECURE_AUTH_SALT', '/;?/i3K!GmF`bf1Qvh(2R0t#U0DM=wOq1Rf(-7o(J-Bo1FHUnB66>5&[!WqUszc%' );
define( 'LOGGED_IN_SALT',   '*ZfB_,1s<9_Nfp4Fyiyv5*oIs.SbDd%9{k!K:v}z9nx0{3Zhj([OA>A+jfbHI~7`' );
define( 'NONCE_SALT',       'hF`Xb%u,wntLsi1rN1F^K=IpNGif:t$+j3[BB@,K3*~d3W5A:6yQ._m?{^mbI_Jg' );

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
