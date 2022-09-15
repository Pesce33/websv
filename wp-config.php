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
define( 'DB_NAME', 'id19568144_wp_13c3ab980cb0b492102dbe17454bbf7f' );

/** MySQL database username */
define( 'DB_USER', 'id19568144_wp_13c3ab980cb0b492102dbe17454bbf7f' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c74867149169561e555e533426cd2d690104dab6' );

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
define( 'AUTH_KEY',          '&v*<]%tQ[|#_wsk6LUh~w?Fc%0r/kQ VX3KV-&U}#f[cT(6n8-rb<6:~/yTAr^+j' );
define( 'SECURE_AUTH_KEY',   'Hr}-Y;)p1|l&NcoNlwjeQ!;|d%95c{RZm4nCg)7L=tP_,y;{Q^RQ=5$g>j!2_ymC' );
define( 'LOGGED_IN_KEY',     'eTj7_237(04&{*GfA9`X h%WF7(sgnKRx72zn~DAR*FU^DGK(lJ}.:AZ-YXG,#x-' );
define( 'NONCE_KEY',         ' !zd1E890cfk*C){L[3YWYI;A}NU.K7@XGBk/k!I8U$M!+P;+p;mS5|gY[1SeI=&' );
define( 'AUTH_SALT',         '<hg-w~K?{<82b;Qc0M{or>scqca`sh~g|>^woAG,05RauLic5w/QQ-McctOdKcno' );
define( 'SECURE_AUTH_SALT',  '(|j@u+YB*0-iy$h_9z*`+J)gB}in7|~U``95q9q{81oh%*ez]ko$S=DBE]Jl|+Q4' );
define( 'LOGGED_IN_SALT',    ')H71*~;;%i%?1}Hu*m4UrZWffOgUU?dOkQu>)WYcFw-~ea-B8GAOwo,TCWn!>bqy' );
define( 'NONCE_SALT',        '!)<,N5qu}1ae7Q<[L!s5eHN!N%z&o2EpW] :M5GC@+{;RZS/LXYbdhP?#-(9P*+T' );
define( 'WP_CACHE_KEY_SALT', 'xN@GmJpO%r_1jRN?IsVI0d>QLqBMRhkD>-AQ/e6SjSlju)q&TmrI@#LWj<x75/#e' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
