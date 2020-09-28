<?php

namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * HISTORY Table
 */
class HistoryTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('HISTORY');
        $this->primaryKey('id');
    }
}