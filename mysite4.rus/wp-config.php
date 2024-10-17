<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'examtov' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'di< 5`r+xCr$o%s;5d1L)sQx*/v8+7v_%%.< Og[2aW^G(Gk7PPm[~fRdp}=_6C.' );
define( 'SECURE_AUTH_KEY',  'o/&zz@r,}n%h9_AA>5$:tzYSj|$65oJgyM+g<)`&P1zH8j#x9?d<}s|&&1u}HIB-' );
define( 'LOGGED_IN_KEY',    '&8NA;~Bg>LSX^[Ld,WsP/Z[*9GGgsQ[yPxBbjhfj$?FqqRTI_[[ H,q7hU1`oL#{' );
define( 'NONCE_KEY',        'a`zT{g~&h^NwEhA.cwIC]?qM eJC|i EzM))RO?txdby(=;(E&i6&DJpA=L0Uu_>' );
define( 'AUTH_SALT',        'q[`GPjyQ?GG:d(dOLMJP,gM$o>4w7sENe|M~1vT8},8h$-cAKBYRWzN[G_S5X->I' );
define( 'SECURE_AUTH_SALT', '@TpLu..lzg[bqwJ,sI&`{q20-;d16WiI#p236|]8.oLTmH pYt+~@IO8dRxdrAJ1' );
define( 'LOGGED_IN_SALT',   'u|9VHYOw{m4jGZ#iV;!*- 1~BO#GT,-7EHfhItoZXC^?op.}P,>L x#-*h0gw%Q{' );
define( 'NONCE_SALT',       'B{r1Tc9,q</G4{&j(,^R%>s+R;yJt[$cal{6LE;4%9e;<eiGTXDg8?_+&oDjqNaA' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
