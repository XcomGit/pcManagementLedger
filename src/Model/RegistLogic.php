<?php

namespace App\Model;

use Cake\ORM\TableRegistry;

/**
 * 登録画面ロジッククラス
 */
class RegistLogic
{
    /**
     * データを登録
     * @return boolean
     */
    public function setData($pcManagementLeder)
    {
        $pcManagementLederTable = TableRegistry::get('PcManagementLedger');
        $data = $pcManagementLederTable->newEntity($pcManagementLeder);

        return $pcManagementLederTable->save($data);
    }
}