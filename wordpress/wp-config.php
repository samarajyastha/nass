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
define( 'DB_NAME', 'nass' );

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
define( 'AUTH_KEY',         'p=r:]PR|?+}gzvm]U0m+IAOtp6G)]C^K[{<DnG@J):cO5}/bp(-K;%uDh57)-}P[' );
define( 'SECURE_AUTH_KEY',  'v-MQUlu& UqHTYx]UCwZemWtn.6wFvR!B.?.;$R`[ [=SCl!dwgNYs?To6w=`RJ^' );
define( 'LOGGED_IN_KEY',    '>UcRoWE<L;Rqo18jZ}{PR*}&Azf.+-4-FTK)/x$67s|+{t>-ZSf,S8s>0jqv2Y)H' );
define( 'NONCE_KEY',        '9V]@D?3Yo8+;1j3,/#V*OfXm6uL`-!%;~fm[AZUdlf:-.1<PND&e)EC4 [B#QtXl' );
define( 'AUTH_SALT',        '1Hx id,,SQ>HpiX/_,NK^6Wbw4n?f3auylmwJA|v}$?Luh[ns0i6viw&Ug8pR]<w' );
define( 'SECURE_AUTH_SALT', '$8=R#btC`$F{5n3Bwo2%MuJQ^C@(?Ni?4d{`!Jq-_pyQn<)j.q~H+&SXYD[95<Dg' );
define( 'LOGGED_IN_SALT',   '``o}@qVHhtC{:cndY.3nW(`OgwAbv;eM7.X:GZ.GCw~Ph[nJ?|nRBW7XHk.9 -q{' );
define( 'NONCE_SALT',       '-akzlAL`eRyJe s;b |~(sFdf=*QFp/-E(K-M^=u8E1r?8l(sz*ti^c|Ol l_e-}' );

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
