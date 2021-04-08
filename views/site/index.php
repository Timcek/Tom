<?php

/* @var $this yii\web\View */

use yii\db\Query;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Projekt 1</h1>
        <?php 
        $query = new Query();
        $query
            ->select(["tom_project.id","SUM(tom_report.percent_done)/COUNT(tom_project.id) as procentage"])
            ->from("((tomi.tom_task inner join tom_project on tom_project.id=tom_task.project_id) Inner Join tom_report on tom_report.task_id=tom_task.id)")
            ->groupBy("tom_project.id");
        $vrstice = $query->all();
        $a= $vrstice[0]["id"];
        echo '<div class="progress">
                <div class="progress-bar" role="progressbar" style="width: '?><?= intval($vrstice[0]["procentage"]).'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>';

        echo '<h1 style="padding-top:40px">Projekt 2</h1>
        <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: '?><?= intval($vrstice[1]["procentage"]).'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>';
        echo '<h1 style="padding-top:40px">Projekt 3</h1>
            <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: '?><?= intval($vrstice[2]["procentage"]).'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>'
        ?>
    </div>
</div>
