<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong>
            <?= Yii::t('PowersModule.base', 'Powers') ?>
        </strong>
    </div>
    <div class="list-group submit-body">
    	<?php foreach($powers as $userPower): ?>
    	<?php $power = $userPower->getPower(); ?>
	    	<div class="list-group-item">
	    		<?= isset($power->powerTranslations[0]) ? print_r($power->powerTranslations[0]->title) : print_r($power->title) ?> - <?php print_r($userPower->value) ?> <?= Yii::t('PowersModule.base', 'points') ?>
	    	</div>
    	<?php endforeach; ?>
        <?php 
            if (empty($powers)){
                echo "<div class='list-group-item'>";
                echo Yii::t('PowersModule.base', 'This user must answer psychometric questionnaire first.');
                echo "</div>";
            }
        ?>
    </div>
</div>