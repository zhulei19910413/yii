<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>


<h1><?=Html::encode($view_str)?></h1>


<h1><?=HtmlPurifier::process($view_str)?></h1>
