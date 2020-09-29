<?php

namespace App\Controller;

use Cake\Core\Configure;
use App\Model\RegistLogic;

class RegistController extends AppController
{
    /**
     * @var RegistLogic 登録ロジッククラス
     */
    private $RegistLogic;

    public function initialize()
    {
        parent::initialize();
        $this->RegistLogic = new RegistLogic();

        $pcStatus = Configure::read('pcStatus');
        $this->set('pcStatus', $pcStatus);

        $dept = Configure::read('dept');
        $this->set('dept', $dept);

        $staffGroup = Configure::read('staffGroup');
        $this->set('staffGroup', $staffGroup);

        $staffPost = Configure::read('staffPost');
        $this->set('staffPost', $staffPost);

        $staffDept = Configure::read('staffDept');
        $this->set('staffDept', $staffDept);

        $useStatus = Configure::read('useStatus');
        $this->set('useStatus', $useStatus);

        $pcType = Configure::read('pcType');
        $this->set('pcType', $pcType);

        $os = Configure::read('os');
        $this->set('os', $os);

        $eset = Configure::read('eset');
        $this->set('eset', $eset);

        $area = Configure::read('area');
        $this->set('area', $area);
    }

    public function index()
    {
        // 登録画面表示
    }

    public function confirm()
    {
        // 確認
        if ($this->request->session()->check('session.data')) {
            $this->request->session()->delete('session.data');
        }

        if($this->request->is('post')){
            $data = $this->request->data;
            $this->set('data', $data);
            $this->request->session()->write('session.data', $data);
        }else{
            return $this->redirect(['action' => 'index']);
        }
    }

    public function complete()
    {
        // 完了
        if ($this->request->session()->check('session.data')) {
            $data = $this->request->session()->consume('session.data');
            if($this->RegistLogic->setData($data)){
                return $this->redirect(['controller' => 'List', 'action' => 'index']);
            }
        }else{
            return $this->redirect(['action' => 'index']);
        }
    }
}