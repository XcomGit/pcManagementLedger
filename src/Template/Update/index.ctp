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

    <?= $this->Form->create(null, ['url' => ['action' => 'confirm'], 'class' => 'form-horizontal']) ?>
        <div class="row">
            <label class="col-sm-2" style="text-align: right;" for="">PC番号</label>
            <p class="col-sm-10"><?= $data['pc_num'] ?></p>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">社員番号</label>
            <div class="col-sm-3">
                <?=
                    $this->Form->text('staff_id',
                        ['class' => 'form-control', 'placeholder' => 'xxxxxx', 'value' => $data['staff_id']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">管理用ステータス</label>
            <div class="col-sm-2">
                <?=
                    $this->Form->select('pc_status',
                        $pcStatus,
                        ['class' => 'form-control', 'value' => $data['pc_status']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">部署</label>
            <div class="col-sm-2">
                <?=
                    $this->Form->select('dept',
                        $dept,
                        ['empty' => '―', 'class' => 'form-control', 'value' => $data['dept']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">グループ</label>
            <div class="col-sm-2">
                <?=
                    $this->Form->select('staff_group',
                        $staffGroup,
                        ['empty' => '―', 'class' => 'form-control', 'value' => $data['staff_group']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">社員区分</label>
            <div class="col-sm-2">
                <?=
                    $this->Form->select('staff_post',
                        $staffPost,
                        ['empty' => '―', 'class' => 'form-control', 'value' => $data['staff_post']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">社員部署</label>
            <div class="col-sm-2">
                <?=
                    $this->Form->select('staff_dept',
                        $staffDept,
                        ['empty' => '―', 'class' => 'form-control', 'value' => $data['staff_dept']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">社員名</label>
            <div class="col-sm-3">
                <?=
                    $this->Form->text('staff_name',
                        ['class' => 'form-control', 'value' => $data['staff_name']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">退職日</label>
            <div class="col-sm-2">
                <input type="date" name="retire_day" class="form-control" value=<?= $data['retire_day'] ? date('Y-m-d', strtotime( $data['retire_day'])) : '' ?>>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">利用用途区分</label>
            <div class="col-sm-2">
                <?=
                    $this->Form->select('use_status',
                        $useStatus,
                        ['class' => 'form-control', 'value' => $data['use_status']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">利用詳細</label>
            <div class="col-sm-10">
                <?=
                    $this->Form->text('usage_detail',
                        ['class' => 'form-control', 'value' => $data['usage_detail']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">種別</label>
            <div class="col-sm-2">
                <?=
                    $this->Form->select('pc_type',
                        $pcType,
                        ['class' => 'form-control', 'value' => $data['pc_type']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">OS</label>
            <div class="col-sm-2">
                <?=
                    $this->Form->select('os',
                        $os,
                        ['class' => 'form-control', 'value' => $data['os']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">ESET</label>
            <div class="col-sm-2">
                <?=
                    $this->Form->select('eset',
                        $eset,
                        ['class' => 'form-control', 'value' => $data['eset']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">場所</label>
            <div class="col-sm-2">
                <?=
                    $this->Form->select('area',
                        $area,
                        ['class' => 'form-control', 'value' => $data['area']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">モニター台数</label>
            <div class="col-sm-2">
                <?=
                    $this->Form->select('monitor_num',
                        [0, 1, 2],
                        ['class' => 'form-control', 'value' => $data['monitor_num']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">機種</label>
            <div class="col-sm-5">
                <?=
                    $this->Form->text('pc_model',
                        ['class' => 'form-control', 'value' => $data['pc_model']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">購入時期</label>
            <div class="col-sm-2">
                <input type="date" name="buy_date" class="form-control" value=<?= $data['buy_date'] ? date('Y-m-d', strtotime( $data['buy_date'])) : '' ?>>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">修正日</label>
            <div class="col-sm-2">
                <input type="date" name="modify_date" class="form-control" value=<?= $data['modify_date'] ? date('Y-m-d', strtotime( $data['modify_date'])) : '' ?>>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">確認者</label>
            <div class="col-sm-3">
                <?=
                    $this->Form->text('checker',
                        ['class' => 'form-control', 'value' => $data['checker']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">備考</label>
            <div class="col-sm-10">
                <?=
                    $this->Form->textarea('remark',
                        ['rows' => '3', 'class' => 'form-control', 'value' => $data['remark']]
                    );
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for=""><span style="color:red;">*</span>更新者</label>
            <div class="col-sm-3">
                <?= $this->Form->text('updater', ['class' => 'form-control', 'required']) ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <?= $this->Form->button('削除', ['type' => 'submit', 'name' => 'delete', 'class' => 'btn btn-danger']); ?>
                <?= $this->Form->button('確認', ['type' => 'submit', 'class' => 'btn btn-info']); ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</div>