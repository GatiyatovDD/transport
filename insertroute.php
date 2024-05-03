<?php
require "dbconnect.php";
//var_dump($_POST);
//die();
if ($_POST['tarif'] > 0){
    try {
        $sql = 'INSERT INTO route(Name, Тариф_за_1_кг, Расстояние, изображение) VALUES(:Name, :tarif, :distance, :picture)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':Name',$_POST['name']);
        $stmt->bindValue(':tarif', $_POST['tarif']);
        $stmt->bindValue(':distance', $_POST['distance']);
        $stmt->bindValue(':picture', $_POST['picture'] );    // ,PDO::PARAM_STR
        $stmt->execute();
        $_SESSION['msg'] = "Маршрута успешно добавлен";


    } catch (PDOexception $error) {
        $_SESSION['msg'] = "Ошибка добавления маршрута: " . $error->getMessage();
    }
}
else $_SESSION['msg'] = "Ошибка добавления маршрута: Тариф за 1 кг не может быть нулевым";

// перенаправление на страницу категорий
header('Location: http://transport/index.php?page=v');
exit( );
