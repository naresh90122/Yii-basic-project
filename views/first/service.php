<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Service';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the  <?php echo $this->title; ?> page.
        <?php echo $name;
        // echo "<pre>";
        // print_r($personal_info);
        // echo "</pre>";
        foreach($personal_info as $key => $info) {
            echo "<br>". ucfirst($key). ' = ' .$info. " ";
        }
        ?>
    </p>

    <code><?= __FILE__ ?></code>
</div>
