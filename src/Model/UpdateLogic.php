<?php

namespace App\Model;

use Cake\ORM\TableRegistry;

/**
 * 更新画面ロジッククラス
 */
class UpdateLogic
{
    /**
     * 特定データを取得
     * @return PcManagementLedger[]
     */
    public function getData($id)
    {
        $pcManagementLederTable = TableRegistry::get('PcManagementLedger');

        return $pcManagementLederTable->get($id);
    }

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

    /**
     * データの削除
     * @return boolean
     */
    public function deleteData($data)
    {
        $pcManagementLederTable = TableRegistry::get('PcManagementLedger');

        return $pcManagementLederTable->delete($data);
    }
}