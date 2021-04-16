<?php

/**
 * @category    Mageek
 * @package     Mageek_OpenmageTheme
 * @author      Jindra Hejlík <jindra@hejlik.cz>
 * @copyright   Copyright (c) Mageek (http://hejlik.cz/)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

class Mageek_OpenmageTheme_Helper_Data extends Mage_Core_Helper_Data
{

    public function setAdminTheme()
    {

        if (Mage::getStoreConfigFlag('admin/mageek_openmagetheme/mageektheme_enable')) {
            $theme = "mageek";
        } else {
            $theme = "openmage";
        }

        return $theme;
    }

}
