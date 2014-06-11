<body>
    <div class="container-fluid">
        <div class="row">
            <div class="span10">
                <div class="row-fluid">
                    <div class="span12">
                        <?php
                        foreach ($task as $row):
                            ?>
                            <h3>
                                <?php
                                echo $row->task_name;
                                echo " ";
                                if(is_null($row->end_date)){
                                    echo anchor("tasks/closeTask/" . $row->id, "Закрыть задачу", "class='btn btn-mini btn-info'");
                                }else{
                                    echo anchor("tasks/reopenTask/" . $row->id, "Открыть задачу", "class='btn btn-mini btn-info'");
                                }
                                ?>
                            </h3>
                            <h6>Добавил(а): Ермашевский Денис</h6>
                            <?php if($row->reminder_date !== NULL){?>
                            <span class="label label-info">Напомнить: <?php echo date('d.m.Y H:i:s',strtotime($row->reminder_date)); ?></span>
                            <?php
                            }else{
                                
                            }
                            ?>
                            <table class="table table-striped table-bordered table-condensed" summary="" id="contactList"  style="border-collapse:collapse;");
                                   >
                                <tbody>
                                    <tr>
                                        <th scope="row">Статус</th>
                                        <td>
                                            <?php
                                            echo $row->status;
                                            ?>
                                        </td>
                                        <th scope="row">Создана</th>
                                        <td>
                                            <?php
                                            echo date('d.m.Y H:i:s',strtotime($row->create_date));
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Приоритет</th>
                                        <td>
                                            <?php
                                            echo $row->priority;
                                            ?>
                                        </td>
                                        <th scope="row">Выполнена</th>
                                        <td>
                                            <?php
                                            if(!empty($row->end_date)):
                                                echo date('d.m.Y H:i:s',strtotime($row->end_date));
                                            endif;
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Назначена</th>
                                        <td>
                                            <?php
                                            $crmUser = new Tasks();
                                            if($row->assigned!==''):
                                            echo $crmUser ->getUserById($row->assigned);
                                            endif;
                                            ?>
                                        </td>
                                        <th scope="row">Категория</th>
                                        <td>
                                            <?php
                                            echo $row->category;
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr/>
                            <h4>Описание</h4>

                            <?php
                            echo $row->task_description;
                            ?>
                            <hr/>
                            <?php
                            echo anchor("tasks/deleteTask/" . $row->id, "Удалить", "class='btn btn-mini btn-danger pull-right'");
                            echo anchor("tasks/editTask/" . $row->id, "Редактировать", "class='btn btn-mini btn-success pull-right'");
                            ?>
                            <h4>Прикрепленные файлы</h4>
                            <ul>
                                <li>CRM структура_21.05.2014_3.png (19,476 КБ)  <a href="#"><i class="icon-trash"></i></a> Антон Рудов, 21-05-2014 10:54</li>
                                <li>contact_form.png (351,234 КБ)  <a href="#"><i class="icon-trash"></i></a> Денис Ермашевский, 22-05-2014 17:01</li>
                                <li>Screenshot - 03.06.2014 - 13_38_02.png (366,938 КБ)  <a href="#"><i class="icon-trash"></i></a> Денис Ермашевский, 03-06-2014 13:39</li>
                            </ul>
                            <?php
                        endforeach;
                        ?>
                        <br/>
                    </div><!--/span-->
                </div><!--/row-->
            </div><!--/row-->

