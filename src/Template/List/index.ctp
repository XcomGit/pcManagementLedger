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
        <a href="regist.html" class="btn btn-info">新規登録</a>
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
            </tr>
            <?php $count++; ?>
        <?php endforeach; ?>
            <tr>
                <td>1</td>
                <td nowrap><a href="./update.html">ICM-PC033</a></td>
                <td nowrap>11111</td>
                <td nowrap>利用中</td>
                <td nowrap>管理部</td>
                <td nowrap>ロジスティクスG</td>
                <td nowrap>その他利用</td>
                <td nowrap>管理部</td>
                <td nowrap>テストテスト</td>
                <td nowrap></td>
                <td nowrap>個別利用</td>
                <td>勤怠用</td>
                <td nowrap>ノート</td>
                <td nowrap>Win10</td>
                <td nowrap>〇</td>
                <td nowrap>本社26F</td>
                <td nowrap>1</td>
                <td nowrap>HP ProBook 4740s</td>
                <td nowrap>2013/12/24</td>
                <td nowrap>2020/06/22</td>
                <td nowrap>XX</td>
                <td>勤怠用ノートPC</td>
                <td id="middle"><a href="./update.html" class="btn btn-success">編集</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td nowrap><a href="./update.html">ICM-PC057</a></td>
                <td nowrap>22222</td>
                <td nowrap>利用中</td>
                <td nowrap>業務部</td>
                <td nowrap>テクニカルG</td>
                <td nowrap>その他利用</td>
                <td nowrap>業務部</td>
                <td nowrap>テストテスト</td>
                <td nowrap></td>
                <td nowrap>個別利用</td>
                <td>カスタマーTeams用</td>
                <td nowrap>ノート</td>
                <td nowrap>Win10</td>
                <td nowrap>×</td>
                <td nowrap>本社26F</td>
                <td nowrap>1</td>
                <td nowrap>HP ProBook 4740s</td>
                <td nowrap>2013/12/24</td>
                <td nowrap>2020/06/22</td>
                <td nowrap>XX</td>
                <td>
                    USBモバイルパートナーの検証のために利用している。
                    USBモバイルパートナーは、USBの抜き差しが発生するため、USBポートを空けておく運用にす
                </td>
                <td id="middle"><a href="./update.html" class="btn btn-success">編集</a></td>
            </tr>
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/filter.js"></script>