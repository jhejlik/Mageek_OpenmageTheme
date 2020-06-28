<?php

/**
 * @category    Mageek
 * @package     Mageek_OpenmageTheme
 * @author      Jindra Hejlík <jindra@hejlik.cz>
 * @copyright   Copyright (c) Mageek (http://hejlik.cz/)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

class Mageek_OpenmageTheme_Model_Observer
{

    public function selectedTheme()
    {

        $theme = Mage::helper('mageek_openmagetheme')->setAdminTheme();

        if (!empty($theme)) {
            Mage::getDesign()->setArea('adminhtml')->setTheme($theme);
        }

    }

}
