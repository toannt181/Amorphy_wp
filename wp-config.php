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
define('DB_NAME', 'amorphy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SbQqdfj*cG5k<<elt]po11Cl,N:Ly>^zZ3Oo;m)AuX*wVQI_S6<*jk_,;)kqD)uI');
define('SECURE_AUTH_KEY',  'p`~w>~b?f:?A[?KG9G(t#~(bF&:~92rdLeV9&`kj&YR8)PXgJ yUy1gkk)1&p} ;');
define('LOGGED_IN_KEY',    '^*3y_hy`H)-T^Oq&)KWY_nX:ow.LdULLFn,@]O&E=c*BWDqXF4+k}T>SqlSSP]jj');
define('NONCE_KEY',        '.gqTL}*_/66%7pwyMWX&R$5Cx-Z~@wc{Q?Fu0rEgh8FGM}hcxSr![UQcL%:p_)7:');
define('AUTH_SALT',        '&h.T<62ww6.8_D{?.(i?S+f%hWPP2UG2BDnB8os{1k4Ng}H]cVK~A>isUL~!FQ<:');
define('SECURE_AUTH_SALT', './-u@$$Ll1>=K+K+oC>A@5%,V-rvHoRf~&P1A>dKW${1SMF?Y^0h9~DJ>OQ9&DO]');
define('LOGGED_IN_SALT',   'YTM(npIj&24zD_%Mq;$vkU|fs6a[pbPWB9~:0c<H[:?~W!e ]cwr&wyFZa$,R{.@');
define('NONCE_SALT',       'U@WT.:y5HZB)Gm!2aql=F.oi$UZHR6=[4Pjl+0!a5`c%c`^tqMuuDCD7xQ/WtSP^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
