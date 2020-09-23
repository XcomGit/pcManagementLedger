<?php

namespace App\Model;

use Cake\ORM\TableRegistry;

/**
 * 一覧画面ロジッククラス
 */
class ListLogic
{
    /**
     * 一覧を取得します
     * @return PcManagementLedger[] エンティティ配列
     */
    public function getList()
    {
        $pcManagementLedger = TableRegistry::get('PcManagementLedger');
        return $pcManagementLedger->find()->all();
    }
}