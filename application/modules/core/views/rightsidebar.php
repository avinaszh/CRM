<div class="span2">
    <div><p><img src="http://1.gravatar.com/avatar/4e2ccf9c3fb5c4a3722cf58abedfce81?s=160" class="img-polaroid"></p>
        <table class="table table-striped table-bordered table-condensed">
            <tbody>
                <tr>
                    <td><i class="icon-user"></i></td>
                    <td>
                        <?php
                        echo $user->last_name . ' ' . $user->first_name
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><i class="icon-phone"></i></td>
                    <td>
                        <input type="hidden" id="hidden_phone_number" name="hidden_phone_number" value="<?php echo $user->phone; ?>" />
                        <?php
                        echo $user->phone;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><i class="icon-envelope"></i></td>
                    <td>
                        <?php
                        echo $user->email;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><i class=" icon-asterisk"></i></td>
                    <td><span class="label label-important" id="server_status">Соединение разорвано</span></td>
                </tr>
            </tbody></table>
    </div>

    <div class="sidebar-nav">
        <div class="messages" id="messages"></div>
    </div><!--/.well -->

    <div class="sidebar-nav">
        <ul class="nav nav-list" >
            <?php
            $viewCall = new Core();
            $viewCall->viewCallEvent($user->phone);
            ?>
        </ul>