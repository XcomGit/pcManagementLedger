<?php
    $this->assign('title', 'PC管理台帳 -変更履歴-');
?>
<link href="css/common.css" rel="stylesheet">
<link href="css/filter.css" rel="stylesheet">
<div class="container">
        <div class="page-header">
            <h1>PC管理台帳 <small>変更履歴</small></h1>
        </div>
        <div>
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation"><a href="/list">PC管理台帳</a></li>
                <li role="presentation" class="active"><a href="#">変更履歴</a></li>
            </ul>
        </div>
        <div class="margin_top_bottom">
        </div>
        <div>
            <table class="table table-striped table-condensed table-bordered" id="list">
                <thead>
                    <tr class="success">
                        <th>No</th>
                        <th cmanFilterBtn>更新日付</th>
                        <th cmanFilterBtn>更新者</th>
                        <th>更新内容</th>
                    </tr>
                </thead>
                <tbody>
                <?php $count = 1; ?>
                <?php foreach ($history as $data): ?>
                    <tr>
                        <td><?= $count ?></td>
                        <td nowrap><?= isset($data->update_date) ? $data->update_date->i18nFormat('yyyy/MM/dd HH:mm:ss') : '' ?></td>
                        <td nowrap><?= $data->update_by ?></td>
                        <td nowrap><?= $data->update_contents ?></td>
                    </tr>
                    <?php $count++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/filter.js"></script>
</div>