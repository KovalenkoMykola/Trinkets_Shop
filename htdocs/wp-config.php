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
define( 'DB_NAME', 'trinkets-shop' );

/** Database username */
define( 'DB_USER', 'Trinkets_Admin' );

/** Database password */
define( 'DB_PASSWORD', 'TGsmt37ujd8KMex6' );

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
define( 'AUTH_KEY',         'HQs/`QQ< _<Qxvi*78y_Oi:C`Exll696=FeBv9E&i3(B|}W4F.* *o+PiPB}e$mS' );
define( 'SECURE_AUTH_KEY',  'HdzC$(vRnfU~/!Q{MbB#=Z44$_1Njcx*9Zh.dY]ev,UWP:RsYuLI|+Q074!m(p;3' );
define( 'LOGGED_IN_KEY',    'yE&j?rBt]}/oY)+KwCdcLUJnZ8eX72&9-D~YM_[tf_H1 I0U+Kvo&:Q[NE<ubb7n' );
define( 'NONCE_KEY',        'k;oi[?^kuX67*6gtpnI|DBh=1`/Cv%chswzvX?$i_ D`sk.mSdy[s<M}BEhZwcq_' );
define( 'AUTH_SALT',        '$wWU!)-CBd%ozKM!?~NaHh[^tJ.VC?cp7*@L7tu*I~>M$@zNAgNZ}:I6gTD@qU*v' );
define( 'SECURE_AUTH_SALT', '&8UotT5lK S*dc1*2uF`i/iM@U[hCqx7qm+Lx#C#JW9OxXO))rKRl{.o0Hm)8W}c' );
define( 'LOGGED_IN_SALT',   'Q)Xt%g*Ryb<qxk7q_KQ3tZ#SsJwOI<p:emmY<e|*F57uG a6^%G!<TO5*_2-4lqu' );
define( 'NONCE_SALT',       's}8{2n7z=yP`n*FA)iYW2LR/.saz$V9(,8X@v+Ns.i,8EC[wG ~)1~[sl{Tg_uYa' );

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
