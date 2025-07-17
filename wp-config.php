<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vsoft-dev' );

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
define( 'AUTH_KEY',         'cW[}Tgi)(4<x2A[z@0ImNtQbH^Z>*=*6TRQx$Y<KDW<]v>H:XEk?|OY?-#(n(nhr' );
define( 'SECURE_AUTH_KEY',  'XW!ToB@Ku!ZY7H[XnJ1{p@mO}?#2:i_tueTqTu#I^Jb!*UR%y5c%oAcH/eNPEr20' );
define( 'LOGGED_IN_KEY',    'ym3HzEXde`7MV|uK~-#P6:2;dy }C([0{i`@f<)K>PZ=:=%0!})/DtR:B`v*8eN7' );
define( 'NONCE_KEY',        'w){^:pGr{D>iPB0vuDfQN>~GDS}LU_)f^>Ez]m>cOe;WF-?YJ%BF-`I$<M* ##$H' );
define( 'AUTH_SALT',        '.[Z[SI`Ai-[-*>S=+MSSW]TsPq)Wg!UU1tF:z^FL}DS-@4C~T7.$q E5J!~n1[bS' );
define( 'SECURE_AUTH_SALT', 'eQ>Ov?94x5[i-a yx3_9Cm|;oM=:#mw{6%`od-6Rct[m}F%s0q)~vU~E&=*MWoD^' );
define( 'LOGGED_IN_SALT',   ',c+2Xv;MN2/)+WU_IgeIvL%LwsB9q0#oI,N#kMhvm;#E[QRCG&HKrbFRXI.cdeC/' );
define( 'NONCE_SALT',       ']~2[72#ZDB~>Y+ q5$CT.BDG2W[E|NLL3[U99c *!d5W+.L3H[i4gcx0m_ a)bOY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
