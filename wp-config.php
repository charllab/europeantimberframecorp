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
 * @link    https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Project root path
$root = dirname(__DIR__);

// Composer autoloader
require_once $root.'/../vendor/autoload.php';

// dotenv
$dotenv = new Dotenv\Dotenv($root.'/../');
$dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_SERVER'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', getenv('SITE_URL'));
define('WP_SITEURL', getenv('SITE_URL').'/wordpress');

define('DISALLOW_FILE_EDIT', true);

define('WP_AUTO_UPDATE_CORE', true);

define('DISABLE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1oXCC| hov!t~miNARfQE}mJrv{9awj]Pjwd3IuCwb5FX^u<de,!Ox14-<hUnG$`');
define('SECURE_AUTH_KEY',  '|zn1lU7>4O6rqQ4(MCprcQ#e~XO~&4tg{EbN?idHPk4>vtAX+$@vL8dbg&]zaYnz');
define('LOGGED_IN_KEY',    '#^jIMp]w1L.W`$N<gA/&X5@(Yr 0|-wq?y+c)l-NcyV$9eo1.}VML*`xRx)9c,D4');
define('NONCE_KEY',        'Rn)r_/;g!+S0G9-%e/v9-SrJ3-.-DF)+ao,C[kv!%pulBmNk+ybx7%y58OEF&5V0');
define('AUTH_SALT',        '8Bv3|hSqMC2VOzrhVPLb>J=^L@/|x--cLSsYG&d3}`C+9eGO-af-x4+3b?vO1^rs');
define('SECURE_AUTH_SALT', 'DukQ0p(1uA~SbZ*uz 5<k$OYbi6@l%w{U%[TCjP1vO@;L &;g]xC.u03~e9aE!A(');
define('LOGGED_IN_SALT',   'vWZB`n5{`6c=PW#ma^EN3*;i1z0_@s!vP{YB^q#{/z!xPrKLmA %]VpV:5o{d&)C');
define('NONCE_SALT',       '%~K]e0fUlRd/.:? >A<BMlvXm{fA:Rb;b4!72DL}spP4C3e#+Y%6(-^$f<tJI]EQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_TABLE_PREFIX');

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
define('WP_DEBUG', filter_var(getenv('DEV_MODE'), FILTER_VALIDATE_BOOLEAN));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH.'wp-settings.php');
