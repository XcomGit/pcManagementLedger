<?php

namespace App\Controller;

use Cake\Core\Configure;
use App\Model\UpdateLogic;
use App\Model\HistoryLogic;

class UpdateController extends AppController
{
    /**
     * @var UpdateLogic 更新ロジッククラス
     * @var HistoryLogic 変更履歴ロジッククラス
     */
    private $UpdateLogic;
    private $HistoryLogic;

    public function initialize()
    {
        parent::initialize();
        $this->UpdateLogic = new UpdateLogic();
        $this->HistoryLogic = new HistoryLogic();

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
        // 変更前情報取得
        if ($this->request->session()->check('session.old_data')) {
            $this->request->session()->delete('session.old_data');
        }

        $oldData = $this->UpdateLogic->getData($this->request->params['pcNum']);
        $this->set('data', $oldData);
        $this->request->session()->write('session.old_data', $oldData);
    }

    public function confirm()
    {
        // 確認
        if(isset($_POST['delete'])) {
            $oldData = $this->request->session()->consume('session.old_data');
            $data = $this->request->data;
            if($this->UpdateLogic->deleteData($oldData)){
                $this->HistoryLogic->setDeleteHistory($data,$oldData);
                return $this->redirect(['controller' => 'List', 'action' => 'index']);
            }else{
                return $this->redirect(['action' => 'index']);
            }

        }else{
            if ($this->request->session()->check('session.data')) {
                $this->request->session()->delete('session.data');
            }

            if($this->request->is('post')){
                $data = $this->request->data;
                $data['pc_num'] = $this->request->session()->read('session.old_data')['pc_num'];
                $this->set('data', $data);
                $this->request->session()->write('session.data', $data);
            }else{
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    public function complete()
    {
        // 完了
        if ($this->request->session()->check('session.data')) {
            $data = $this->request->session()->consume('session.data');
            $oldData = $this->request->session()->consume('session.old_data');
            if($this->UpdateLogic->setData($data)){
                $this->HistoryLogic->setUpdateHistory($data, $oldData);
                return $this->redirect(['controller' => 'List', 'action' => 'index']);
            }
        }else{
            return $this->redirect(['action' => 'index']);
        }
    }

    // public function delete()
    // {
    //     // 削除
    //     if ($this->request->session()->check('session.data')) {
    //         $this->request->session()->delete('session.data');
    //     }

    //     $oldData = $this->request->session()->consume('session.old_data');
    //     $data = $this->request->data;
    //     if($this->UpdateLogic->deleteData($oldData)){
    //         $this->HistoryLogic->setDeleteHistory($data,$oldData);
    //         return $this->redirect(['controller' => 'List', 'action' => 'index']);
    //     }else{
    //         return $this->redirect(['action' => 'index']);
    //     }
    // }
}