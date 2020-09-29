<?php
    $this->assign('title', 'PC管理台帳');
?>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/common.css" rel="stylesheet">

<div class="container">
    <div class="page-header">
        <h1>PC管理台帳</h1>
    </div>
    <div>
        <ul class="nav nav-tabs nav-justified">
            <li role="presentation"><a href="/list">PC管理台帳</a></li>
            <li role="presentation"><a href="/history">変更履歴</a></li>
        </ul>
    </div>
    <div class="margin_top_bottom"></div>
    
    <?= $this->Form->create(null, ['url' => ['action' => 'complete'], 'class' => 'form-horizontal']) ?>
        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">PC番号</label>
            <p class="col-sm-10"><?= $data['pc_num'] ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">社員番号</label>
            <p class="col-sm-10"><?= $data['staff_id'] ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">管理用ステータス</label>
            <p class="col-sm-10"><?= $pcStatus[$data['pc_status']] ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">部署</label>
            <p class="col-sm-10"><?= isset($dept[$data['dept']]) ? $dept[$data['dept']] : '' ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">グループ</label>
            <p class="col-sm-10"><?= isset($staffGroup[$data['staff_group']]) ? $staffGroup[$data['staff_group']] : '' ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">社員区分</label>
            <p class="col-sm-10"><?= isset($staffPost[$data['staff_post']]) ? $staffPost[$data['staff_post']] : '' ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">社員部署</label>
            <p class="col-sm-10"><?= isset($staffDept[$data['staff_dept']]) ? $staffDept[$data['staff_dept']] : '' ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">社員名</label>
            <p class="col-sm-10"><?= $data['staff_name'] ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">退職日</label>
            <p class="col-sm-10"><?= $data['retire_day'] ? date('Y/m/d', strtotime( $data['retire_day'])) : '' ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">利用用途区分</label>
            <p class="col-sm-10"><?= isset($useStatus[$data['use_status']]) ? $useStatus[$data['use_status']] : '' ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">利用詳細</label>
            <p class="col-sm-10"><?= $data['usage_detail'] ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">種別</label>
            <p class="col-sm-10"><?= isset($pcType[$data['pc_type']]) ? $pcType[$data['pc_type']] : '' ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">OS</label>
            <p class="col-sm-10"><?= $os[$data['os']] ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">ESET</label>
            <p class="col-sm-10"><?= $eset[$data['eset']] ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">場所</label>
            <p class="col-sm-10"><?= $area[$data['area']] ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">モニター台数</label>
            <p class="col-sm-10"><?= $data['monitor_num'] ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">機種</label>
            <p class="col-sm-10"><?= $data['pc_model'] ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">購入時期</label>
            <p class="col-sm-10"><?= $data['buy_date'] ? date('Y/m/d', strtotime( $data['buy_date'])) : '' ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">修正日</label>
            <p class="col-sm-10"><?= $data['modify_date'] ? date('Y/m/d', strtotime( $data['modify_date'])) : '' ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">確認者</label>
            <p class="col-sm-10"><?= $data['checker'] ?></p>
        </div>

        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">備考</label>
            <p class="col-sm-10"><?= $data['remark'] ?></p>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <?= $this->Form->button('戻る', ['type' => 'button', 'class' => 'btn btn-default', 'onclick' => 'history.back()']); ?>
                <?= $this->Form->button('登録', ['type' => 'submit', 'class' => 'btn btn-info']); ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</div>