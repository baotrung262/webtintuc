<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webtintuc' );

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
define( 'AUTH_KEY',         '5lkRw]CobjY`u(!>,.@8IW}Mv,^WE0Ut.~~>x1ae*{}&;m(3T<=ta>>*VhlwfaL}' );
define( 'SECURE_AUTH_KEY',  'D{2rdo{h{q]x*>r8,@suy1Va,&7/=ISa)9z]4>8cw&JWD;`L/^mI <HI`rd u*oh' );
define( 'LOGGED_IN_KEY',    'k[LZ:jo )R*EjI&s?J$a[z=^,uFpKUbo.0 T1i`yL}@=XQp>|}yRh&89sd-Y5MXz' );
define( 'NONCE_KEY',        'ZhokFU(=?ggpbd.MK2`IL-*]{X*QhJr8L-s$I}3vo47U1KVTAYDi02.uM7Ti<1`^' );
define( 'AUTH_SALT',        '7c&yD:ASMI?9gFzaoZ_oMjq#9-01n,Ux]THT91|Pc;^]+#x=t1=`l,e9.P&njD_[' );
define( 'SECURE_AUTH_SALT', 'xCWS O_V47Kgk*#Vu_5+lk@l<^ob5D}b-]Z2~vxgOq:p{{;R@j}f7`-:9XFA6H.D' );
define( 'LOGGED_IN_SALT',   'W<wLu`#x!28%]+ws_EARjlMg*t^2[`S~X@p|ep[fA[jO$@[`AoAb(EWywM#)Qyc+' );
define( 'NONCE_SALT',       '(-]rj8qGQ}!0]Sd*Y;aaO?(dzl !vgzMB$>_GGsf#;KJ{JMt0#q}~O; WkwOUFX8' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
