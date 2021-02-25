<?php
require 'vendor/autoload.php';

use App\SQLiteConnection as SQLiteConnection;
use App\SQLiteCreateTable as SQLiteCreateTable;
use App\SQLiteUpdate;
use App\SQLiteQuery;

$sqlite = new SQLiteCreateTable((new SQLiteConnection())->connect());

// get the table list
$tables = $sqlite->getTableList();

$pdo = (new SQLiteConnection())->connect();
$sqlite = new SQLiteQuery($pdo);

$projects = $sqlite->getProjectObjectList();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="sqlitetutorial.net">
    <title>PHP SQLite CREATE TABLE Demo</title>
    <link href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>PHP SQLite CREATE TABLE Demo</h1>
    </div>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Tables</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($tables as $table) : ?>
            <tr>
                <td><?php echo $table ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Projects</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($projects as $project) : ?>
            <tr>
                <td><?php echo $project->project_name ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Tasks</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($projects as $project) :
            $tasks = $sqlite->getTaskByProject($project->project_id);

            # use var_dump() for debugging

            foreach ($tasks as $task) :
                ?>
                <tr>
                    <td><?php echo $task['task_name']; ?></td>
                </tr>

            <?php endforeach; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>