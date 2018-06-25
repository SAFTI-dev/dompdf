<?php
// Please refer to dompdf_config.inc.php for details on each configuration option.

define("DOMPDF_ENABLE_AUTOLOAD", false);
define("DOMPDF_ENABLE_CUSTOM_AUTOLOAD", true);
define("DOMPDF_AUTOLOAD_PREPEND", false);
define("DOMPDF_TEMP_DIR", sys_get_temp_dir());
define("DOMPDF_FONT_DIR", DOMPDF_DIR."/lib/fonts/");
define("DOMPDF_FONT_CACHE", DOMPDF_FONT_DIR);
define("DOMPDF_UNICODE_ENABLED", true);
define("DOMPDF_PDF_BACKEND", "CPDF");
define("DOMPDF_DEFAULT_MEDIA_TYPE", "screen");
define("DOMPDF_DEFAULT_PAPER_SIZE", "letter");
define("DOMPDF_DEFAULT_FONT", "serif");
define("DOMPDF_DPI", 96);
define("DOMPDF_ENABLE_CSS_FLOAT", true);
define("DOMPDF_ENABLE_JAVASCRIPT", true);
//define("DEBUGPNG", true);
//define("DEBUGKEEPTEMP", true);
//define("DEBUGCSS", true);
//define("DEBUG_LAYOUT", true);
//define("DEBUG_LAYOUT_LINES", false);
//define("DEBUG_LAYOUT_BLOCKS", false);
//define("DEBUG_LAYOUT_INLINE", false);
define("DOMPDF_FONT_HEIGHT_RATIO", 1.1);
//define("DEBUG_LAYOUT_PADDINGBOX", false);
define("DOMPDF_LOG_OUTPUT_FILE", DOMPDF_FONT_DIR."log.htm");
define("DOMPDF_ENABLE_HTML5PARSER", false);
define("DOMPDF_ENABLE_FONTSUBSETTING", false);
// Authentication for the dompdf/www
define("DOMPDF_ADMIN_USERNAME", "user");
define("DOMPDF_ADMIN_PASSWORD", "password");
/**
 * Attention!
 * The following settings may increase the risk of system exploit.
 * Do not change these settings without understanding the consequences.
 * Additional documentation is available on the dompdf wiki at:
 * https://github.com/dompdf/dompdf/wiki
 */
define("DOMPDF_CHROOT", realpath(DOMPDF_DIR));
define("DOMPDF_ENABLE_PHP", false);
define("DOMPDF_ENABLE_REMOTE", true);
/**
 * Load autoloader
 */
if (DOMPDF_ENABLE_CUSTOM_AUTOLOAD) {
  require_once(DOMPDF_INC_DIR . "/autoload.inc.php");
  require_once(DOMPDF_DIR . "/../../phenx/php-font-lib/classes/Font.php");
}