<?php
// PC管理台帳設定ファイル

return [
    'pcStatus' => [
        0 => '利用中',
        1 => '割当済',
        2 => '回収待',
        3 => '在庫',
        4 => '廃棄予定',
    ],
    'dept' => [
        0 => '管理部',
        1 => '業務部',
        2 => '空港統括部',
        3 => 'マーケティング部',
        4 => '営業部',
        5 => 'システム部',
        6 => 'クリニック統括部',
        7 => '社長室',
    ],
    'staffGroup' => [
        0 => '財務経理G',
        1 => '総務G',
        2 => 'ロジスティクスG',
        3 => 'カスタマーG',
        4 => 'コールG 東京',
        5 => 'コールG 名古屋',
        6 => 'コールG 大阪',
        7 => '国際G',
        8 => 'テクニカルG',
        9 => '受付G',
        10 => '新千歳空港',
        11 => '中部空港',
        12 => '中部空港T1_2号店',
        13 => '中部空港T2号店',
        14 => '羽田空港',
        15 => '成田空港',
        16 => '関西空港',
        17 => '福岡空港',
        18 => 'マーケティングG',
        19 => '営業部(東京)',
        20 => '営業部(大阪)',
        21 => '営業部(福岡)',
        22 => '営業部(名古屋)',
        23 => '営業部(札幌支店)',
        24 => '人材開発G',
        25 => '新卒一時払い出し',
        26 => 'システム部',
        27 => '取締役',
        28 => '監査役',
        29 => 'クリニック統括部',
        30 => '空港統括部',
        31 => '代表取締役社長',
        32 => '業務部',
    ],
    'staffPost' => [
        0 => '正規社員',
        1 => '派遣社員',
        2 => '非常勤',
        3 => 'アルバイト',
        4 => 'その他利用',
    ],
    'staffDept' => [
        0 => '社長室',
        1 => '空港統括部',
        2 => '業務部',
        3 => '管理部',
        4 => '営業部',
        5 => 'マーケティング部',
        6 => 'システム部',
        7 => 'クリニック統括部',
    ],
    'useStatus' => [
        0 => '個別利用',
        1 => '共同利用(空港除く)',
        2 => '空港共同利用',
    ],
    'pcType' => [
        0 => 'デスクトップ',
        1 => 'ノート',
    ],
    'os' => [
        0 => 'Win7',
        1 => 'Win10',
        2 => 'Win10(U)',
    ],
    'eset' => [
        0 => '〇',
        1 => '×',
    ],
    'area' => [
        0 => '本社26F',
        1 => 'ロジ11F',
        2 => 'ロジB1F',
        3 => '倉庫',
        4 => '支店',
        5 => '羽田空港店',
        6 => '関西空港T1',
        7 => '関西空港T1_4F',
        8 => '関西空港店',
        9 => '関西空港店 T2 出発',
        10 => '新千歳空港店',
        11 => '成田空港店',
        12 => '中部空港T1_2号店',
        13 => '中部空港T2店',
        14 => '中部空港店',
        15 => '福岡空港店',
        16 => '渋谷院',
        17 => '銀座院',
    ],
    'columnName' => [
        '社員番号',
        '管理用ステータス',
        '部署',
        'グループ',
        '社員区分',
        '社員部署', '社員名',
        '退職日',
        '利用用途区分',
        '利用詳細',
        '種別',
        'OS',
        'ESET',
        '場所',
        'モニター台数',
        '機種',
        '購入時期',
        '修正日',
        '確認者',
        '備考'
    ]
];