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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'N^h@](>4=hB`a8&QkO[>Kbv4d}GUC*!%=H=o,cb?TQL(NExA!;MdFJ05uQ8ML$=D' );
define( 'SECURE_AUTH_KEY',   '=0={6%6E[_q3vfTyhOM|0g6O,lcwY6IQy7q|38_[*^}Aw}^}({jOgsDA~Dp#~vS1' );
define( 'LOGGED_IN_KEY',     'J5i{IKVl1,#G_U|[Lkvdv@irRI{1R05j{<0lR/hgVHzzTO>dMnP%]hF[9}2q<M_F' );
define( 'NONCE_KEY',         'xw7~C3:=9>O(oFjMYI 5BTG;qlvt0WW%axT!dkM|f`hsxY{Ul@/jeWP_esW7S&Bn' );
define( 'AUTH_SALT',         '$Gd_(c` nzT9.dleVaEp}_^dPR%=R!w8p1VY*S^ Z[TibBs/Y .)4Jw]{bLO}#xd' );
define( 'SECURE_AUTH_SALT',  'Ah<LzBi|rBdTskV#.R4BX`~#0v8MDZOa _!#$839BWRLo2?uIxeJ?tIbFoQNmYeK' );
define( 'LOGGED_IN_SALT',    ';bg Us|~Qr3OWG.E>M8o21V8f/8H-Ox[U}b/z)pr`E!0)Ct-bG3_~8;~bx:*{0+%' );
define( 'NONCE_SALT',        ']jTSVrV-.iH~E;o3gx9X@m)Ld[Fk1rNprUQ-X%vWlj4%dm4!Mt;ZKQYWTZ5r|Wv=' );
define( 'WP_CACHE_KEY_SALT', '?NqG[-F`aO3AZ]d=^H2qTIqr2C;a>}_{|.j)X]j{)%zFCTr4&&W/nypF`1}hJ@X7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
