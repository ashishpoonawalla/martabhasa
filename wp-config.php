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

define( 'DB_NAME', "martabhasa" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'qE7kV1yd%}yl=)QQxpva`KGih1K$Xnfx{3YX,Wg#(cK&9uK#5%9hB (!F0<7zpG=' );

define( 'SECURE_AUTH_KEY',  '{+lr}.5mhDtc tZ@7sLPJhMd?MFRAd69#gp0{~X#^.]cb3@81YpL?wq0I;g4F0F?' );

define( 'LOGGED_IN_KEY',    'mqe2G[H<zetAu{f{w^(4c`)MKEhWSl<RS10:28C )CLG6X$,A0Aq-.sl3ah h!CB' );

define( 'NONCE_KEY',        'J%e!#VEKssLjkxSo=O;zA2vGkY`mN3uaJ Z;P1[dsf?|6ntlr@s*9N?D!9%Ek&-Y' );

define( 'AUTH_SALT',        'o-)O%<ASzLjtk+FopP)E>o/[0PQpC5j1ek/5eAA:Pb^+Y1_Q@L+s@(ytj@l$!e69' );

define( 'SECURE_AUTH_SALT', '6wB/,#A?f~yb__bFRKSa$lyZY2=J%fShhLja5%{8mw[wtu{f#f]/t(iP,!*S+k:/' );

define( 'LOGGED_IN_SALT',   'K=7u8TiFW6iMW6w.-Z}pUDVlw[-6g`gj^-f1`%xGUfYN/K77&qG~]mzkYR9).j9O' );

define( 'NONCE_SALT',       '<*HjG)<|OI#dA}WsRi^Q9F~Vl!;7:/Mw9ZwH/BW~L0Bjr$(8QdPz7,ylsEe2:p5>' );


/**#@-*/


/**

 * WordPress Database Table prefix.

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

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

