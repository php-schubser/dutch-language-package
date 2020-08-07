<?php
/* --------------------------------------------------------------
   $Id: modules.php 2567 2011-12-29 10:44:32Z dokuman $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(modules.php,v 1.8 2002/04/09); www.oscommerce.com
   (c) 2003 nextcommerce (modules.php,v 1.5 2003/08/14); www.nextcommerce.org
   (c) 2006 XT-Commerce (modules.php 899 2005-04-29)

   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('HEADING_TITLE_MODULES_PAYMENT', 'Betaal Modules');
define('HEADING_TITLE_MODULES_SHIPPING', 'Verzend Modules');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'Order Total Module');

define('TABLE_HEADING_MODULES', 'Module');
define('TABLE_HEADING_SORT_ORDER', 'Sorteervolgorde');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_MODULE_DIRECTORY', 'Module Directory:');
define('TEXT_MODULE_FILE_MISSING', '<b>Taalbestand "%s" ontbreekt, module "%s" wordt niet weergegeven!</b>');
define('TABLE_HEADING_FILENAME','Module naam (voor intern gebruik)');

// BOF - Tomcraft - 2009-10-03 - Paypal Express Modul
define('TEXT_INFO_DELETE_PAYPAL', 'Als u deze module nu deinstalleerd, worden de Paypal transactie gegevens verwijderd!<br /> Wilt u deze gegevens behouden, druk nu op afbreken om de module alleen maar te deactiveren (module activeren = False).');
// EOF - Tomcraft - 2009-10-03 - Paypal Express Modul
define('TABLE_HEADING_MODULES_INSTALLED', 'Modules ge&iuml;nstalleerd');
define('TABLE_HEADING_MODULES_PREFERRED', 'Populaire modules');
define('TABLE_HEADING_MODULES_NOT_INSTALLED', 'Modules niet ge&iuml;nstalleerd');
define('TEXT_MODULE_UPDATE_NEEDED', 'De volgende modules zijn bijgewerkt en moeten de database bijwerken. Sla hiervoor de instellingen op en installeer deze modules opnieuw.');
?>