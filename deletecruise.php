<?php

require "dbconnect.php";


try {
    $sql = 'DELETE FROM cruise WHERE cruise.ID=:ID';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':ID', $_GET['ID']);
    $stmt->execute();
    $_SESSION['msg'] = "Рейс успешно удалён";
    // return generated id
    // $id = $pdo->lastInsertId('id');
} catch (PDOexception $error) {
    $_SESSION['msg'] = "Ошибка удаления Рейса: " . $error->getMessage();
}
// перенаправление на главную страницу приложения
header('Location: http://transport/index.php?page=n');
exit( );