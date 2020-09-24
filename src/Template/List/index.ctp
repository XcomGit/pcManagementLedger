<?php
    $this->assign('title', 'PC管理台帳');
?>
<link href="css/common.css" rel="stylesheet">
<link href="css/filter.css" rel="stylesheet">

<div class="container">
    <div class="page-header">
        <h1>PC管理台帳</h1>
    </div>
    <div>
        <ul class="nav nav-tabs nav-justified">
            <li role="presentation" class="active"><a href="#">PC管理台帳</a></li>
            <li role="presentation"><a href="/history">変更履歴</a></li>
        </ul>
    </div>
    <div class="margin_top_bottom">
        <a href="/regist" class="btn btn-info">新規登録</a>
    </div>
</div>
<div class="container-fluid">
    <table class="table table-striped table-condensed table-bordered" id="list">
        <thead>
            <tr class="success">
                <th>No</th>
                <th nowrap cmanFilterBtn>PC番号</th>
                <th nowrap cmanFilterBtn>社員番号</th>
                <th nowrap cmanFilterBtn>管理用<br>ステータス</th>
                <th nowrap cmanFilterBtn>部署</th>
                <th nowrap cmanFilterBtn>グループ</th>
                <th nowrap cmanFilterBtn>社員区分</th>
                <th nowrap cmanFilterBtn>社員部署</th>
                <th nowrap cmanFilterBtn>社員名</th>
                <th nowrap cmanFilterBtn>退職日</th>
                <th nowrap cmanFilterBtn>利用用途区分</th>
                <th nowrap cmanFilterBtn>利用詳細</th>
                <th nowrap cmanFilterBtn>種別</th>
                <th nowrap cmanFilterBtn>OS</th>
                <th nowrap cmanFilterBtn>ESET</th>
                <th nowrap cmanFilterBtn>場所</th>
                <th nowrap cmanFilterBtn>モニター<br>台数</th>
                <th nowrap cmanFilterBtn>機種</th>
                <th nowrap cmanFilterBtn>購入時期</th>
                <th nowrap cmanFilterBtn>修正日</th>
                <th nowrap cmanFilterBtn>確認者</th>
                <th nowrap cmanFilterBtn>備考</th>
                <th>編集</th>
            </tr>
        </thead>
        <tbody>
        <?php $count = 1; ?>
        <?php foreach ($list as $data): ?>
            <tr>
                <td><?= $count ?></td>
                <td nowrap><a href="/update/<?= $data->pc_num ?>"><?= $data->pc_num ?></a></td>
                <td nowrap><?= $data->staff_id ?></td>
                <td nowrap><?= $data->getPcStatusJp() ?></td>
                <td nowrap><?= $data->getdeptJp() ?></td>
                <td nowrap><?= $data->getStaffGroupJp() ?></td>
                <td nowrap><?= $data->getStaffPostJp() ?></td>
                <td nowrap><?= $data->getStaffDeptJp() ?></td>
                <td nowrap><?= $data->staff_name ?></td>
                <td nowrap><?= isset($data->retire_day) ? date('Y/m/d', strtotime($data->retire_day)) : '' ?></td>
                <td nowrap><?= $data->getUseStatusJp() ?></td>
                <td nowrap><?= $data->usage_detail ?></td>
                <td nowrap><?= $data->getPcTypeJp() ?></td>
                <td nowrap><?= $data->getOsJp() ?></td>
                <td nowrap><?= $data->getEsetJp() ?></td>
                <td nowrap><?= $data->getAreaJp() ?></td>
                <td nowrap><?= $data->monitor_num ?></td>
                <td nowrap><?= $data->pc_model ?></td>
                <td nowrap><?= isset($data->buy_date) ? date('Y/m/d', strtotime($data->buy_date)) : '' ?></td>
                <td nowrap><?= isset($data->modify_date) ? date('Y/m/d', strtotime($data->modify_date)) : '' ?></td>
                <td nowrap><?= $data->checker ?></td>
                <td><?= $data->remark ?></td>
                <td id="middle"><a href="/update/<?= $data->pc_num ?>" class="btn btn-success">編集</a></td>
            </tr>
            <?php $count++; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/filter.js"></script>