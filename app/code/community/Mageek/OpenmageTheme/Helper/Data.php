<?php

/**
 * @category    Inchoo
 * @package     Inchoo_AdminTheme
 * @author      Branko Ajzele <ajzele@gmail.com>
 * @copyright   Copyright (c) Inchoo (http://inchoo.net/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mageek_OpenmageTheme_Helper_Data extends Mage_Core_Helper_Data
{

    const CONFIG_XML_PATH_THEME = 'admin/mageek_openmagetheme/theme_name';

    public function getThemeName()
    {
        $theme = (string)Mage::getStoreConfig(self::CONFIG_XML_PATH_THEME);
        $theme = trim($theme);

        return $theme;
    }

}
