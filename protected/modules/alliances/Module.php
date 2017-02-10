<?php

namespace humhub\modules\alliances;

use Yii;
use humhub\models\Setting;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{
    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to(['/alliances/config']);
    }

    /**
     * @inheritdoc
     */
    public function enable()
    {
        parent::enable();
    }

    /**
     * @inheritdoc
     */
    public function disable()
    {
        parent::disable();
    }

}

?>
