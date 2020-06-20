<?php

/**
 * @category    Inchoo
 * @package     Inchoo_AdminTheme
 * @author      Branko Ajzele <ajzele@gmail.com>
 * @copyright   Copyright (c) Inchoo (http://inchoo.net/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mageek_OpenmageTheme_Model_Observer
{

    public function selectedTheme()
    {

        $theme = Mage::helper('mageek_openmagetheme')->getThemeName();

        if (!empty($theme)) {
            Mage::getDesign()->setArea('adminhtml')->setTheme($theme);
        }

    }

}
