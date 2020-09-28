<?php

namespace App\Model;

use Cake\ORM\TableRegistry;

/**
 * 変更履歴画面ロジッククラス
 */
class HistoryLogic
{
    /**
     * 変更履歴を取得します
     * @return History[] エンティティ配列
     */
    public function getHistory()
    {
        $history = TableRegistry::get('History');
        return $history->find()->order(['update_date' => 'DESC'])->all();
    }
}