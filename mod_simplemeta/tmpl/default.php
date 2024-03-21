<?php
/*------------------------------------------------------------------------
# Simple Meta - A simple module to include meta data in any page.
# ------------------------------------------------------------------------
# author    Christopher Mavros - Mavrosxristoforos.com
# copyright Copyright (C) 2008 Mavrosxristoforos.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website: https://mavrosxristoforos.com
# Technical Support:  Forum - https://mavrosxristoforos.com/contact
-------------------------------------------------------------------------*/
\defined( '_JEXEC' ) or die( 'Restricted access' );

use \Joomla\CMS\Factory;

if (trim($params->get('meta_tags', '')) != '') {
  $document = Factory::getDocument();
  $document->addCustomTag(trim($params->get('meta_tags', '')));
}

?>