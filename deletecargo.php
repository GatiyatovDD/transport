<?php

require "dbconnect.php";


try {
    $sql = 'DELETE FROM cargo WHERE cargo.ID=:ID';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':ID', $_GET['ID']);
    $stmt->execute();
    $_SESSION['msg'] = "Заказ (груз) успешно удалён";
    // return generated id
    // $id = $pdo->lastInsertId('id');
} catch (PDOexception $error) {
    $_SESSION['msg'] = "Ошибка удаления заказа (груза): " . $error->getMessage();
}
// перенаправление на главную страницу приложения
header('Location: http://transport/index.php?page=b');
exit( );