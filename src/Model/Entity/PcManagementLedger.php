<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Core\Configure;

/**
 * PC_MANAGEMENT_LEDGER Entity
 */
class PcManagementLedger extends Entity
{
    /**
     * 管理用ステータスの日本語名を取得します
     * 
     * @return string 管理用ステータスの日本語
     */
    public function getPcStatusJp(): string
    {
        $pcStatus = Configure::read('pcStatus');
        return isset($pcStatus[$this->pc_status]) ? $pcStatus[$this->pc_status] : '';
    }
}