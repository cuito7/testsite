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
define( 'DB_NAME', 'first_test_site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '|VLNv &hSD)=^]4:k4_M##lLFt0%6A2vL>Fgj^Ect1h}G,t]h@GUnU}5wr3`H5@A' );
define( 'SECURE_AUTH_KEY',  'Q[0`xcCHZ??#~L7sgz4A>wN[;^IHJcO+$eg8lT:ak]i>A>1U!A#Do--S3D@;g[XM' );
define( 'LOGGED_IN_KEY',    'K$hx8&_Lua2,Cm*vwPk_(1?^p*1E@!spoy !=Nn!Y%%L._yO_vN;qXf[,%&H%8kS' );
define( 'NONCE_KEY',        'B4uqb}jn~ZGJIM8d8c>S<iBjt,}nS8tU1nzU&j!6),q}f$uGy~{mX/Ze|R#?_<?,' );
define( 'AUTH_SALT',        ')j/)RbL{]!q-J9$&EM=P(<JmuYDk5o,LpX/8.T?kY!mxSv8!fPe{44?KJ3,^vHis' );
define( 'SECURE_AUTH_SALT', 'tUxd|:0fZaJaR+ClX1D&Mke$&UF{o6XTuu$G!KnKNY[[hT#M#ytT!tb*G<EOLs.#' );
define( 'LOGGED_IN_SALT',   'fv5f4U;+;_;xy5tc*)dLd,Hx[0{QoGUc`^Y>Bg2.o.CwQ7HZf<zDlUyLzv`=z+c~' );
define( 'NONCE_SALT',       '.om[&3-=Bty:!1<%(%G`[uCbu(M5M;X[hBEtt: #iE;t/SO7Y#7_Z0R2j@@0 p&(' );

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

/** Updating WP Memory limit for Uncode */
define( 'WP_MEMORY_LIMIT', '96M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
