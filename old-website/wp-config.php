<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u810785239_PMlaF' );

/** Database username */
define( 'DB_USER', 'u810785239_5VTVO' );

/** Database password */
define( 'DB_PASSWORD', 'u2C3Ypf8Zb' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '@s8z+vA[2qgL}%YAg9U2Ia)Z1EsekB$lg=hc!% 1Rh%fc<325t^P>V>ahA%J=ggj' );
define( 'SECURE_AUTH_KEY',   '+sGJ]_^gt*pR_?ja|)W@x,]YcHS}&p32)l~0}3>I-=YLmgs*~l<o7e<w<+n:&X`K' );
define( 'LOGGED_IN_KEY',     'ZcK|6tjMl$YQ.*0^`lC^V{AHciYWy8rR_#4u<}=w*BXs%2iBf.{,Mv>Ot,sB><iq' );
define( 'NONCE_KEY',         '[hVHp>#;#Lc9 )K=0^udYJ9_H]LKU-0P|Y`p^o49O`jG.a?P>+o;[7f{T JvXhFw' );
define( 'AUTH_SALT',         'L{fclLHY`y;1l;,gy|jC.S+N+XN)*<JKiSh|}Pw_0 /[V4TPmty7_K@alX9.4hLh' );
define( 'SECURE_AUTH_SALT',  'EUE`sbZs~t[_tIcnavH+r*X0?~28.}]D.%rSl[Z5ZcUqHIs8S!C`*c$2$W%5}l*R' );
define( 'LOGGED_IN_SALT',    '!^O6=JyH5i9 {r#*x`Am%^:1+lZKNmEyz`^]H~E!9:,Jkp`Gz1`t!av3lv|A0&}V' );
define( 'NONCE_SALT',        'Gdk%YJv(1NPQ-?aAV]R)J>E.%h)QlmJETO,e !#-9[s`Gn`M(?IyXz+z2f4xv#qT' );
define( 'WP_CACHE_KEY_SALT', '(*GWdXWo{v}M!a&h^a&#*4/DJ@SFwi?:*}H>V}y}&n,fp~O~esztn6v|Qtw:^rAc' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
