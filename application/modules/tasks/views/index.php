<body>
    <div class="container-fluid">
        <div class="row">
            <div class="span10">
                <h3 style="color:#08c;">Задачи</h3>
                <?php
                echo anchor("tasks/addTask/", "<i class='icon-tasks'> </i>Создать задачу", "class='btn btn-small btn-info pull-left'");
                echo "<span>".anchor("tasks/filterTask/", "<i class='icon-filter'> </i>Фильтр задач", "class='btn btn-small btn-info pull-left'")."</span>";
                ?>
<!--
                <div class="span4">
                    <div class="btn-toolbar pull-left">
                    <ul class="nav nav-pills">
                        
                    </ul>
                </div>
                </div>-->
                <table class="table table-striped table-bordered table-condensed" id='allContactsTable'>
                    <thead>
                    <th>#</th>
                    <th>Категория</th>
                    <th>Статус</th>
                    <th>Приоритет</th>
                    <th>Тема</th>
                    <th>Назначена</th>
                    <th>Создана</th>
                    <th>Действия</th>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        $crmUser = new Tasks();
                        foreach ($table as $rows) {
                            echo '<tr>'
                            . '<td>' . $count++ . '</td>'
                            . '<td>' . $rows->category . '</td>'
                            . '<td>' . $rows->status . '</td>'
                            . '<td>' . $rows->priority . '</td>'
                            . '<td>';
                        if($rows->task_name!==""){
                                echo anchor("tasks/viewTask/" . $rows->id, $rows->task_name);
                        }else{
                                echo anchor("tasks/viewTask/" . $rows->id,  substr($rows->task_description, 0, 80).'...');
                        }
                                    echo '</td>';
                            echo '<td>' . $crmUser ->getUserById($rows->assigned). '</td>'
                            . '<td>' . date('d.m.Y H:i:s',strtotime($rows->create_date)) . '</td>'
                            . '<td>' . anchor("tasks/deleteTask/" . $rows->id, "Удалить", "class='btn btn-mini btn-danger pull-left'").'</td>'
                            . '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div><!--/span-->
