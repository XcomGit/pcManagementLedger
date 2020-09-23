<?php

namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * PC_MANAGEMENT_LEDGER Table
 */
class PcManagementLedgerTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('PC_MANAGEMENT_LEDGER');
        $this->primaryKey('pc_num');
    }
}