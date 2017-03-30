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
define('DB_NAME', 'blog-name');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'apyj2tYb~MusL<TF4[cv4$om{+Ps[r.B;K3*,y:Jxwl?eKL@L=s}cq|}H`V<-IU5');
define('SECURE_AUTH_KEY',  '`$X#j #&r5;Aa*;8[e1/N+i{wb>&+Vo6pG;ZU%&bzTBbop|?No|~~^Z_x_W_]/Tn');
define('LOGGED_IN_KEY',    '8&I$7$766qsmF[Zx]]x=G|[HiJP`u5*>N_IkqYf,z?{PX#dcIK]QKBu;]c^wQ,C2');
define('NONCE_KEY',        '?E@yPbpB:r_vCehKjlu!xz,(8jN$#Y}_Ph.r9NCP?IGiQDNZGXR[o9Btq|6_q}Xp');
define('AUTH_SALT',        'Hbamjj=#FI*o54a`5`lz=Bt#ImAnS[^S(KzwW%;MQ+Nr{;LCJnY{K]6uNkp_ltlF');
define('SECURE_AUTH_SALT', 'FHE@qrb@Oz06:l/P4$`#kTnb++84DaTW#*>|SlOsJ^K.@o>B4g*|?IviEePq_P7j');
define('LOGGED_IN_SALT',   'nJ!D-:Uz>-$TS.9T%hD<ql?H23pqwoYp/8hC*A??S>L7wOKnvul >O_;-i%R%$jS');
define('NONCE_SALT',       '!Ri>O(bl4)K!5)wz%|Wwt5r1F01[|ttVV0Ya>Bbe:?EnB 5x:ka7tmMnYNINk<*~');

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
