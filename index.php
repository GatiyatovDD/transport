<?php
date_default_timezone_set('Asia/Yekaterinburg');
require "dbconnect.php";
require "auth.php";
require "menu.php";
echo '<main class="container" style="margin-top: 100px">';
switch ($_GET['page']){
    case 'c':
        if (isset($_SESSION['login'])) {
            require "transport.php";
        }
        else{
            $msg = 'Войдите в систему для просмотра транспорта';
        }
        break;
    case 'v':
        if (isset($_SESSION['login'])) {
            require "route.php";
        }
        else{
            $msg = 'Войдите в систему для просмотра доступных маршрутов';
        }
        break;
    case 'b':
        if (isset($_SESSION['login'])) {
            require "cargo.php";
        }
        else{
            $msg = 'Войдите в систему для просмотра и добавления Заказов (грузов)';
        }
        break;
    case 't':
        if (isset($_SESSION['login'])){
            require "tasks.php";
            require "taskform.php";
        }
        else{
            $msg = 'Войдите в систему для просмотра и создания задач';
        }
        break;
}
echo '</main>';

if(($_SESSION['msg']!='') or isset($msg)) {
    require "message.php";
    $_SESSION['msg']= '';
}

require "footer.php";
?>