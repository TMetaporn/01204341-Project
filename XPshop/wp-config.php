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
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'wpduser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'adpCg3HX0ebq8WMS' );

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
define( 'AUTH_KEY',         ';ZjWM-H*DFyb~S.Rxf-c$tH+qIaXq1M#LOQQGA}Cx.nkAx$#49Z?AFx(zK$D<wUb' );
define( 'SECURE_AUTH_KEY',  'e,snf+I&yIS5.&.pI4!3,k4ci>]PW]iofgJt-g]VS69WZ5H-i@M=UtXb+l5Ah|V ' );
define( 'LOGGED_IN_KEY',    '$SOGRw]J,E:[L?JYpN1r@=G((>J4kfH=oq9zFCLDEV4Kn?@Meivbf)wt.3>x%u7T' );
define( 'NONCE_KEY',        '|=lFN<em:p;!|Sb@O1=[|A<o=NY$iBCk)Pe-Zs0(v{wwi3P}`-@k{?;b81F,MnAK' );
define( 'AUTH_SALT',        '{?F]dpBI4=bA-s{W]41UKv1teBF>-n;.L}vKmi<_f6d)3W6(2c]wkA]0zi]*:277' );
define( 'SECURE_AUTH_SALT', '20-T_B=hH2^8k8gzW/x5uK8[&=8<+7I)I:8i.5;JWChwaC=J>xD!ohxx#q,LeP8:' );
define( 'LOGGED_IN_SALT',   'GYQ+3^1^52hqNTZ$KitvD1oCS]fYu@9+qp.mt Ocs#~pQ(EF=rp,__kVy5|8kt{q' );
define( 'NONCE_SALT',       'lizPByr?cu%-Q-Z6a(07~I;MX.#-PK0&7?0hrp?ZaI(c*>9<::m>1k~gJPnN>AqB' );

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
