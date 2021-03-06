<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

namespace Tygh\StoreImport\Ult;
use Tygh\StoreImport\General;
use Tygh\Registry;

class F414T415
{
    protected $store_data = array();
    protected $main_sql_filename = 'ult_F414T415.sql';

    public function __construct($store_data)
    {
        $store_data['product_edition'] = 'ULTIMATE';
        $this->store_data = $store_data;
    }

    public function import($db_already_cloned)
    {
        General::setProgressTitle(__CLASS__);
        if (!$db_already_cloned) {
            if (!General::cloneImportedDB($this->store_data)) {
                return false;
            }
        } else {
            General::setEmptyProgressBar(__('importing_data'));
            General::setEmptyProgressBar(__('importing_data'));
        }

        $main_sql = Registry::get('config.dir.addons') . 'store_import/database/' . $this->main_sql_filename;
        General::backupSettings();  
        if (is_file($main_sql)) {
            //Process main sql
            if (!db_import_sql_file($main_sql)) {
                return false;
            }
        }
        $payflow_enabled = db_get_field("SELECT processor_params FROM ?:payments WHERE processor_id = (SELECT processor_id FROM ?:payment_processors WHERE processor_script = 'payflow_pro.php')");
        if (!empty($payflow_enabled)) {
            $payflow_params = unserialize($payflow_enabled);
            unset($payflow_params['country']);
            $payflow_params['currency'] = 840;
            db_query("UPDATE ?:payments SET processor_params = ?s WHERE processor_id = (SELECT processor_id FROM ?:payment_processors WHERE processor_script = 'payflow_pro.php')", serialize($payflow_params));
        }

 //       General::restoreSettings();

        General::setEmptyProgressBar();
        General::setEmptyProgressBar();
        General::setEmptyProgressBar();
        General::setEmptyProgressBar();
        return true;
    }
}
