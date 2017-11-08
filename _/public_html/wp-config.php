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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id3513170_wp_6c46076e0982ef564faa997c9f5e8108' );

/** MySQL database username */
define( 'DB_USER', 'id3513170_wp_6c46076e0982ef564faa997c9f5e8108' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ca2226f0ca32abde6b86ccf71196d09aa0c90aee' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5{uE$,RUrki7fO.h8<S401MM^ZZn%M=D*z*WAKEjkr+w?oXr2fao2|@!yynz.?_k' );
define( 'SECURE_AUTH_KEY',  'mhVy+bIwDr]Fyrcj%J0Xf2A--Eal?[I1UCK0a(oyqfLrt+HY&lZ)w@_5PulU I67' );
define( 'LOGGED_IN_KEY',    'Na%Op$]gW`_rhD%ujpF)0Q}+pn:/M;*T>3JdSTQ s_^DF-JlP258f)EIj6NBFLB8' );
define( 'NONCE_KEY',        'YG.^$!j.oci*8fP{3aXnip!M8*Wj-1L(g%Zt@od UN1QrfBmgk-@6vX ;,?,EAX?' );
define( 'AUTH_SALT',        'r&AKZOuo+k Y]PCMWj)+@|rCl?*,!ATt w{T8pNQ=#Uwp:@0doAI; |**dxtz#0;' );
define( 'SECURE_AUTH_SALT', 'WmCtvyQlG@}APL8.fIq#pc65vmp!(mg~w/`h50`_%y^f/7,GLAF}8l7vWrM|rG5K' );
define( 'LOGGED_IN_SALT',   '}GW|E:e9g~MZ9%nH-27RH.!i6K)LfdK[U(=lkJU]Bc_sdoO1iZ:4dOYBcqaz94sh' );
define( 'NONCE_SALT',       'uG3mthU&5jkc^6!#@Ey}.xH&;@j!?F& 5HlT%+qTp_@%C{,b4,Oo`Pp3e$J>1=7n' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
