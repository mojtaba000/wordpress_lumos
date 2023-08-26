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
define( 'DB_NAME', 'wordpress_lumos' );

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
define( 'AUTH_KEY',         'R(AlwVj>{%n7?_VW7m1A[H.Q3[f,9,fpugylG E<IxKOEzA19B{S[>H]v<Q9z}=|' );
define( 'SECURE_AUTH_KEY',  '{Hlr7V!9&fV7[1ti6Xq2o7=y-8@Iydm^Vafh$7]R@GI(s=@8Ntzc*La?SVa1&<Tg' );
define( 'LOGGED_IN_KEY',    ' ^0#J2FZT$f21Hi?>#ZSk)l&o`r7bR&$T?ymV~xUdTqN-r9eR#e)oK*9e!5ijzyA' );
define( 'NONCE_KEY',        '-zpR$1R-,Yw4m,s)dhngG6#DTSyH}hH-,_C4Yf=?RI&=MivENWJz+,<:P,]XP}tJ' );
define( 'AUTH_SALT',        '8,CO_(d%sdu/ =7);5Q`r|H0/)ZZAP1f1z*lW%6D5g=B l|6|@?1Ui<!rNUhjcWI' );
define( 'SECURE_AUTH_SALT', '{4rJAdwmsJXZ4[}mL||<YoNso({r{J)Wgg[?7s(X@tduz8b~-61gu7s!H}&2>{wM' );
define( 'LOGGED_IN_SALT',   'g`!zdx,m}$Paai>_}`iC&WT}@LYGgDIUTx.=eu#DKly=O9bIL#(uQ8c!^et9zu]|' );
define( 'NONCE_SALT',       'rj:gY{U|-n7%EV);maC#P&yDi_xoBet+E/8TG^w*aGgGx I~?Es$ T3jNAB#rs`u' );

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
