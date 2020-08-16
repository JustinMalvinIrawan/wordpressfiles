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
define( 'DB_NAME', 'db23he3tdkhbz2' );

/** MySQL database username */
define( 'DB_USER', 'utdkhbz23n382' );

/** MySQL database password */
define( 'DB_PASSWORD', 'muj6rmhxp4cr' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'R6Ct2MGN6P25L6[[jK9[ Ww.SqCO)Fa(#T3GE@{,<G{/B w,AI&Z`1-q&{Fm e=D' );
define( 'SECURE_AUTH_KEY',   'nwa^CQEmah550 LY,jQU t^+7alHKe#C*HF<|xnA|veL0PO&WA:Mm[ZRh3vbZ 6q' );
define( 'LOGGED_IN_KEY',     '&O^y%qql;dR3?:lHLq*hCltZsuI`Q8+]bXTdg3Sj;/}j_K}u6mMqZ<ty8v5M2p~3' );
define( 'NONCE_KEY',         'L#4,W Ur?I3y[wc$S.^Rsim0k1?y_W`1khm-.XI`a(i46hw_z9WaBGN<Yg.-2aBh' );
define( 'AUTH_SALT',         '^`BDlXPn_j?FC&.7;uI-_OC@FZ-Nodul;c(+tM=miy|QC3r#O|]peaX8]oUm3RDX' );
define( 'SECURE_AUTH_SALT',  ':GY2sr hayaUxNcYXcE4>|b]nHOvVP(eD910j_93]?P@%^L-/-TIyYgv2iN^0:gp' );
define( 'LOGGED_IN_SALT',    '/WMT2lBI/a-(IK>=N~@juST9|jsv`uFT5A;_p74ljluYxOr51CufN0}H<+,.;{z8' );
define( 'NONCE_SALT',        '>OG?aE7C&mWt|?cgekad(Bn,qvT9+L;GW_JF*3@EUqiH&1 Dr?BRU.bNPYS{h6Le' );
define( 'WP_CACHE_KEY_SALT', '?${{4Q:0YKhUYTf(A$P|]1;cnsiaCz{&T13%w![=TZXR*B1RdR_@E1K+/dBS))XT' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fzi_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
