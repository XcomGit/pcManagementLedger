<?php

namespace App\Controller;

use App\Model\HistoryLogic;

class HistoryController extends AppController
{
    /**
     * @var HistoryLogic 変更履歴ロジッククラス
     */
    private $historyLogic;

    public function initialize()
    {
        parent::initialize();
        $this->historyLogic = new HistoryLogic();
    }

    /**
     * 初期画面アクション
     */
    public function index()
    {
        // 変更履歴取得
        $history = $this->historyLogic->getHistory();
        $this->set('history', $history);
    }
}