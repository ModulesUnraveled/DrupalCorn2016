<?php

/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = 'O7SVst-KnDOTxUZMbtuVQjNC4FZENVhRGhmPEXBL4fskGC_pEVm1BtzbXXmwiDh1VAA-76elAg';

/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = FALSE;

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

$settings['install_profile'] = 'standard';

$config_directories['sync'] = 'sites/default/files/config_rddJ-7AEvD0463uy8xVfRP_6xDjRh0B3TGmIkjUWOWIEkBtILFqIMJJE1CrHT_GxGpeUfKCoJg/sync';

/**
 * Load local development override configuration, if available.
 *
 * Keep this code block at the end of this file to take full effect.
 */
if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}
