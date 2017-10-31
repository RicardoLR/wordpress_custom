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
define('DB_NAME', 'wp_avanzado');

/** MySQL database username */
define('DB_USER', '1234');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'BU6D:&/e@V9iaYwWDdG|Lt$6wP*Ebn~SAp{CrY.wi<gyk2G-PZ n*3<V2cNN_O`s');
define('SECURE_AUTH_KEY',  'wh4>Wt)a|=6.uDt.5+LJT8fL7sfGR[tcM>2<#,nVvUeil0Ah?wtz>y#&j,/AjCz/');
define('LOGGED_IN_KEY',    'Y(^2tn.Lx(EI+s=-&yhuEsDLiJzV9d|<T*Qfh^Z>]te6`jwm9FR~X5^7^)*K`svW');
define('NONCE_KEY',        'YXIJ2**ygDZ/oMDNn#gWi@BB&^nf})p8*K:%8v[EkwV-*_kbRFj}!qTf8+G_W<8@');
define('AUTH_SALT',        'qGZyDt~bj.[}13>zVH U[VPH3D+<D0$y.ricaSc7Q_,,Ran:2~#`4r#n!-p@wo{0');
define('SECURE_AUTH_SALT', 'x0k^4H?!3{J.ezs@m+^i8%b3%4[I8u-}@&6rz`6,40+v}WLro;0OrNh5nzHX2)qO');
define('LOGGED_IN_SALT',   'msng*?#PZg&l1)CS)}CdS?q0$&f$Envn`HJ:!&80$L{&kv)NYOiB1)wjb`/f}F{-');
define('NONCE_SALT',       '&7lS1 d-/YUaBaO@$(`J#=Y?fDHJI$<y(gx~|z;YrFo)gu-*5yz8-N@%9)EJQipj');

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
