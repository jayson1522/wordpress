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
define('DB_NAME', 'affiliate');

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
define('AUTH_KEY',         'hQ0{z!{9?6_[[s)W#n,RO%YU<4#2lMH(=1|Ug6h(z72b#E,6+$fffRY@/pNY$y<!');
define('SECURE_AUTH_KEY',  '4At*#>CzQz*pFrz*uBSLu*5<}da=mdb+w=Tg9v*w0k*?-73/L]d4Mc%d|aOzAqfX');
define('LOGGED_IN_KEY',    '*Ck3%V]K1O..28Lg}u++}p;sQEOI[ZI@wc{&vQO$=+*4;n`i@ZgPQ]my^#Y}Uo:g');
define('NONCE_KEY',        'vz4JR;XWglHRy<fVBpbNh1<ZEFOustZ^XFc7+ 7rf$LjUU?.g$9^^9Eo5_gV.q O');
define('AUTH_SALT',        'BjJCF8jNQV|gW,y)9Oig51:8l9!E,ShgK3:WZ::C)YVO{#gSAN(.aNz8KIJA15cf');
define('SECURE_AUTH_SALT', '[bN.,4sD_}$[ Q{)#B+`bgc#{2lmwdg$XCyi <Sx?>0kuAc^{3b(Xdbhb}=?u|6R');
define('LOGGED_IN_SALT',   'bUWz:Ff6 <lCKe#O`W58Zx7q )H46Ns{o_]qjX$$U4A12B2gt8C9T P[noY{uh;C');
define('NONCE_SALT',       'E.v(lY.@/R.8[82PIV>&6eO48?&yP.c)/vu9.[F?/dsV%K^HBgv]Y(nE?s*F>OV*');

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
