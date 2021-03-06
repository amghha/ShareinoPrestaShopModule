<?php
/**
 * 2015-2016 Shareino
 *
 * NOTICE OF LICENSE
 *
 * This source file is for module that make sync Product With shareino server
 * https://github.com/SaeedDarvish/ShareinoPrestaShopModule
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Shareino to newer
 * versions in the future. If you wish to customize Shareino for your
 * needs please refer to https://github.com/SaeedDarvish/ShareinoPrestaShopModule for more information.
 *
 * @author    Saeed Darvish <sd.saeed.darvish@gmail.com>
 * @copyright 2015-2016 Shareino Co
 * Tejarat Ejtemaie Eram
 */
if (!defined('_PS_VERSION_'))
    exit;
function upgrade_module_1_2_9()
{
    $query = 'DROP TABLE IF EXISTS  `' . _DB_PREFIX_ . 'shareino_organized`;';
    $tab = new TabCore(TabCore::getIdFromClassName("AdminManageCats"));
    if ($tab->name != null)
        return $tab->delete() && Db::getInstance()->execute($query);
    return true;
}