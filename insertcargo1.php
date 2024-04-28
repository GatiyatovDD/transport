<?php
require "dbconnect.php";
if (strlen($_POST['ID_Рейса']) == 4){
    try {
        $ID = mysqli_real_escape_string($conn, $_POST["ID"]);
        $ID_Рейса = mysqli_real_escape_string($conn, $_POST["ID_Рейса"]);
        $Вес = mysqli_real_escape_string($conn, $_POST["Вес"]);
        $Отправитель = mysqli_real_escape_string($conn, $_POST["Отправитель"]);
        $sql = 'INSERT INTO cargo(ID, ID_Рейса, Вес, Отправитель) VALUES(&ID, &ID_Рейса, &Вес, &Отправитель )';
        $_SESSION['msg'] = "Заказ (груз) успешно добавлен";
        // return generated id
        // $id = $pdo->lastInsertId('id');

    } catch (PDOexception $error) {
        $_SESSION['msg'] = "Ошибка добавления Заказа (груза): " . $error->getMessage();
    }
}
else $_SESSION['msg'] = "Ошибка добавления Заказа (груза): ID Рейса должен содержать 4 символа";

// перенаправление на страницу категорий
header('Location: http://transport/index.php?page=b');
exit( );
