<?php

    use humhub\modules\user\widgets\AccountMenu;
    use humhub\modules\admin\widgets\AdminMenu;
    use humhub\modules\user\widgets\ProfileSidebar;
    use app\modules\coin\models\Coin;
    use humhub\widgets\BaseMenu;
    use humhub\widgets\TopMenu;

    return [
        'id' => 'prize',
        'class' => 'humhub\modules\prize\Module',
        'namespace' => 'humhub\modules\prize',
        'events' => [
            ['class' => \humhub\modules\admin\widgets\AdminMenu::className(), 'event' => AdminMenu::EVENT_INIT, 'callback' => ['humhub\modules\prize\Events', 'onAdminMenuInit']],
            // ['class' => \humhub\modules\user\widgets\ProfileSidebar::className(), 'event' => ProfileSidebar::EVENT_INIT, 'callback' => ['\humhub\modules\coin\Events', 'onProfileSidebarInit']],
        ],
        'urlManagerRules' => [
            'coin' => 'coin/coin'
        ]
    ];

?>