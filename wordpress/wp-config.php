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
define('DB_NAME', 'wp2sym');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'IcUFKcrH;nAN?.$<XiQp[v>kXqSYok5VLxiG0qwu:j<qT<|s5%i>XjNAQmr2U9};');
define('SECURE_AUTH_KEY',  'LdAODzT7hj%nk[1~:X{T:BATnIIhqO);/:b*)_#8,?A/YNu+{ZK=G[>P%G_M7SKr');
define('LOGGED_IN_KEY',    'jaNMVFUM@-@ pPy(2J{9)2PIFSSNaELF*p^75~$7r;:gtAhK>NXN#|4~#.{WONqB');
define('NONCE_KEY',        '82tiw.k3.nz`yZLdSVG/N[}/h>?*8^J15J*u;Yw1d%+bl,&&JXHvI(b2OQ.4|fIy');
define('AUTH_SALT',        '>F/5 o;y)%2rw^FyAg}O5~SkG<BN/uw8clKAQjH#B;ItREhW}^uCV.kKc=vl#oVM');
define('SECURE_AUTH_SALT', '1c-gDr53Wc*F{;6|([4h{r(OR~%tNG~|m!_!|:0LPQa>W$3#SPXRy13yvjA?+}vR');
define('LOGGED_IN_SALT',   'cv<@2$bjm9R*r~Mb&-6oBw:ytSR,dPs?)?C.RvE2jIr3(*QzQ,*ST(Fh[u[v)T=&');
define('NONCE_SALT',       'NU:tg!.o.F3R+@akDtsw#TDhMJ/hTwt>09c2R=zd`VC#^{M1H/S^Nd3 3hNX$b+;');

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

