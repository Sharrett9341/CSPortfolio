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
define( 'DB_NAME', 'chris-sharrett' );

/** MySQL database username */
define( 'DB_USER', 'sharrett' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Funkybunch1$' );

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
define( 'AUTH_KEY',         'WQZ>#ZP/S>gXJd.d,%Zo-2fav^LL;NLM0$i^ZmT9WK{qQOK_3dzw|IILT[r;hHbc' );
define( 'SECURE_AUTH_KEY',  'get`k({BsV(&o<?VNpw?Qbq$YrBHCtu-@6AU}{UaN=<4+T0A5HrEM^W[,N^j`z`7' );
define( 'LOGGED_IN_KEY',    'Y~YM#V99bhM1W;:{Jf3Kf&3rW^BJqWNAp34;#8QbOxF`4Uxo,l24e&4e?pyIveY2' );
define( 'NONCE_KEY',        '()P&uHU1qW}Z#=p%od`@6CGyF(-NRUz6Rg.k]~<~J eyq+U3oQTZ{#sKc]~o;# b' );
define( 'AUTH_SALT',        'evL(EQMqZ.anN~*~A%l:Oga.r-r)f^&1k9=hq8/_QW^1$Zk=.<Ifpr8|@#  9~.v' );
define( 'SECURE_AUTH_SALT', '}p]t4-Y||6geH6O}P<LtI_/;u/S4Y/bQ_QrJ*7+WkR.IgW~XS(Qa2([|yzoIZu}E' );
define( 'LOGGED_IN_SALT',   'djo-6:{@59pjQ=(q|;5eg[v#AMj$Y!#:-;F[v]oD53{aHg1$s-}5<+wk(w3w]j]K' );
define( 'NONCE_SALT',       'M#;@jY]5nv>->vU,j88ryc` l?rWX2dyN:TeB~+?G;LIlBB,b*E}zFlFA-6,Iw?S' );

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
