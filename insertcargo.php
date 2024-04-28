<?php
require "dbconnect.php";
if (strlen($_POST['ID_Рейса']) == 4){
    try {
        $sql = 'INSERT INTO cargo(ID, ID_Рейса, Вес, Отправитель) VALUES(ID, ID_Рейса, Вес, Отправитель )';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('ID',$_POST['ID']);
        $stmt->bindValue('ID_Рейса',$_POST['ID_Рейса']);
        $stmt->bindValue('Вес', $_POST['Вес']);
        $stmt->bindValue('Отправитель', $_POST['Отправитель'],$type = PDO::PARAM_STR);
        $stmt->execute();
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
