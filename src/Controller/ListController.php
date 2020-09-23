<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use App\Model\ListLogic;

/**
 * 一覧画面コントローラー
 */
class ListController extends AppController
{
    /**
     * @var ListLogic 一覧ロジッククラス
     */
    private $listLogic;

    public function initialize()
    {
        parent::initialize();
        $this->listLogic = new ListLogic();
    }

    /**
     * 初期表示アクション
     */
    public function index()
    {
        // 一覧取得
        $list = $this->listLogic->getList();
        $this->set('list', $list);
    }
}