<?php

/**
 * @category    Mageek
 * @package     Mageek_OpenmageTheme
 * @author      Jindra Hejlík <jindra@hejlik.cz>
 * @copyright   Copyright (c) Mageek (http://mageek.cz/)
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
