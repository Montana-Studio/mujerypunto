<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mujerypunto');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'I`c4tX qBtx6<tGs(I- A3$[`-f9wT.JU/z|Y/;L4-CF (7I?:6cT)NK<{NBQ9~A');
define('SECURE_AUTH_KEY',  '0CuY3 Fp`L%s~+S^O!smRJwB|E)~((<C#MZ:DajP[}mgL*L78tDBF6E8vg_Tbrlw');
define('LOGGED_IN_KEY',    ',?;6W?h;)_8o*qY&IwQ>B,)QYhGXkIl]@B$DaztPaFFsMi>I5)52+4?.bfvM:F+g');
define('NONCE_KEY',        'DJ?v/L}<EDL3m4 {)Wf!#CAw!5-})geLHh_SrJEWPSe^8:A]d4`xK6<}rH+O_NR1');
define('AUTH_SALT',        'Bg@F<beCqj4o~:bO/~o-eA|qt0fZR=Ql2?GVZ-ql}<H[}-siV|wRTB@G3>N6OTdT');
define('SECURE_AUTH_SALT', '%k6-M~{We5uzf?Rx`d/OK5b;+z{K.L%4U`jq9a)y! 1?5of]b9j])pj{nIHv+PZ]');
define('LOGGED_IN_SALT',   '^F3UO#|i+_7h9UWn8eh$27,`?m?qQd%~P(Z(fK1;<ZjX@/^Zx]_9]|nx;7^5Gl`9');
define('NONCE_SALT',       'dHA.QoeJI+49FD+zgbXZ$>?9u;K@8 `rX{wkqRAj/27x|z*:qrRb 9.-Q=4+s-+_');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
