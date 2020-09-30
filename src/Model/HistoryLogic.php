<?php

namespace App\Model;

use Cake\Core\Configure;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

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

    /**
     * 変更履歴に新規PC番号を登録します
     */
    public function setInsertHistory($data)
    {
        $historyTable = TableRegistry::get('History');
        $history = $historyTable->newEntity();

        $history->update_date = Time::now('Asia/Tokyo');
        $history->update_by = $data['checker'];

        $format = 'PC番号：「%s」を追加';
        $history->update_contents = sprintf($format, $data['pc_num']);

        $historyTable->save($history);
    }

    /**
     * 変更履歴に更新内容を登録します
     */
    public function setUpdateHistory($data, $oldData)
    {
        $format = 'PC番号：「%s」の内容を以下に変更<br>';
        $format2 = '%s:「%s」から「%s」<br>';

        $historyTable = TableRegistry::get('History');
        $history = $historyTable->newEntity();

        $history->update_date = Time::now('Asia/Tokyo');
        $history->update_by = $data['updater'];
        $history->update_contents = sprintf($format, $data['pc_num']);

        $pcStatus = Configure::read('pcStatus');
        $dept = Configure::read('dept');
        $staffGroup = Configure::read('staffGroup');
        $staffPost = Configure::read('staffPost');
        $staffDept = Configure::read('staffDept');
        $useStatus = Configure::read('useStatus');
        $pcType = Configure::read('pcType');
        $os = Configure::read('os');
        $eset = Configure::read('eset');
        $area = Configure::read('area');
        $columnName = Configure::read('columnName');

        $formValMap = [
            'pc_status' => 'pcStatus',
            'dept' => 'dept',
            'staff_group' => 'staffGroup',
            'staff_post' => 'staffPost',
            'staff_dept' => 'staffDept',
            'use_status' => 'useStatus',
            'pc_type' => 'pcType',
            'os' => 'os',
            'eset' => 'eset',
            'area' => 'area'
        ];

        $update = false;
        $i = 0;
        foreach($data as $key => $val){
            if ($data[$key] != $oldData[$key] && isset($formValMap[$key])) {
                $history->update_contents = $history->update_contents . sprintf($format2, $columnName[$i],  ${$formValMap[$key]}[$oldData[$key]], ${$formValMap[$key]}[$data[$key]]);
                $update = true;
            }else if (strcmp($key, 'retire_day') === 0 || strcmp($key, 'buy_date') === 0 || strcmp($key, 'modify_date') === 0) {
                if(date('Y/m/d', strtotime($data[$key])) != date('Y/m/d', strtotime($oldData[$key]))){
                    $history->update_contents = $history->update_contents . sprintf($format2, $columnName[$i], date('Y/m/d', strtotime( $oldData[$key])), date('Y/m/d', strtotime( $data[$key])));
                    $update = true;
                }
            } else if ($data[$key] != $oldData[$key] && strcmp($key, 'updater') !== 0) {
                $history->update_contents = $history->update_contents . sprintf($format2, $columnName[$i], $oldData[$key], $data[$key]);
                $update = true;
            }
            $i++;
        }

        if($update){
            $historyTable->save($history);
        }
    }

    /**
     * 変更履歴に削除PC番号を登録します
     */
    public function setDeleteHistory($data,$oldData)
    {
        $historyTable = TableRegistry::get('History');
        $history = $historyTable->newEntity();

        $history->update_date = Time::now('Asia/Tokyo');
        $history->update_by = $data['updater'];

        $format = 'PC番号：「%s」を削除';
        $history->update_contents = sprintf($format, $oldData['pc_num']);

        $historyTable->save($history);
    }
}