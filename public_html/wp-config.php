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
define( 'DB_NAME', 'u830948926_NBNu9' );

/** Database username */
define( 'DB_USER', 'u830948926_wqN4L' );

/** Database password */
define( 'DB_PASSWORD', 'qbBwwhC6bs' );

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
define( 'AUTH_KEY',          'K}jFtKYowz9$hxI9Z(&S=cRSo4=oDaRzUv5bba+hH_|`M<_8+!Pval6uMc,tSs`s' );
define( 'SECURE_AUTH_KEY',   'j[<k@CVE]`|ZHxI#?9zyX ]g;GB47~T:UqkWB|;v&87|IZCTCeBkObUzsn)2fD~g' );
define( 'LOGGED_IN_KEY',     '@c{~:aoB!*}0tzf|@?--,Vh):;aEk=..v)}.!&<m,g&En;}w;&lXDz|<:t25BC- ' );
define( 'NONCE_KEY',         '1lV_>rNTDpO`x+gRs:P>-RH}Jmm#56wHbY$=fgND,lzgcO,&16<c{2MI]&*XSjH-' );
define( 'AUTH_SALT',         ',GQ,Wrm.6-(ucgT4r +?&t/=CVNBV*7fbhurL%ql#m^b`Y}>B@(MAmmaw-Ao[[ep' );
define( 'SECURE_AUTH_SALT',  'i,F6X:!jI<^9SG%,)6KG^E@Vf!kU)Tw~Y(k1,T)Tl[[HpRv75ap0/lh1;u]QbKjB' );
define( 'LOGGED_IN_SALT',    '=mbom_w&>r:#0@dMY8,s{&W]tO:nNOUqg8ZQ=6WFf cg|>=x@+H^}g_WJg?eoh+.' );
define( 'NONCE_SALT',        'oV%2zILfkr=eP)REkf{aTwpAUTt~Kq%+@ssT|bV]g}LH5Aa+DJ#zX/5e/^)^.DgO' );
define( 'WP_CACHE_KEY_SALT', '|u9.wO7BfcsA;*la+rH[@y/F+ygp*KmKIkRkq:JJOqIAm,Sn!@{<n2>.R6Ca0jlq' );


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
