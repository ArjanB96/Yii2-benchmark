<?php

use yii\helpers\Html;

$this->title = 'Framework Data';

?>

<h1><?= Html::encode($this->title) ?></h1>

<table class="table">
    <tr>
        <th>Module ID</th>
        <th>Title</th>
        <th>Subtitle</th>
        <th>Description</th>
        <th>Button Title</th>
        <th>Button Link</th>
    </tr>
    <?php foreach ($frameworkData as $data): ?>
        <tr>
            <td><?= Html::encode($data->moduleId) ?></td>
            <td><?= Html::encode($data->title) ?></td>
            <td><?= Html::encode($data->subtitle) ?></td>
            <td><?= Html::encode($data->description) ?></td>
            <td><?= Html::encode($data->buttonTitle) ?></td>
            <td><?= Html::encode($data->buttonLink) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
