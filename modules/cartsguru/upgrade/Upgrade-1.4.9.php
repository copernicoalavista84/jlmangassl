<?php
/**
 * Carts Guru
 *
 * @author    LINKT IT
 * @copyright Copyright (c) LINKT IT 2016
 * @license   Commercial license
 */

if (!defined('_PS_VERSION_')) {
    exit();
}

// Upgrade module to 1.4.9
function upgrade_module_1_4_9($module)
{
    // Register the new version in API
    $module->registerPluginAfterUpdate();
    return true;
}
