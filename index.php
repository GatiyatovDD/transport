<?php
require "dbconnect.php";

if ($conn->connect_error) {
    die("Ошибка: невозможно подключиться: " . $conn->connect_error);
}

echo 'Подключились к базе.<br>';

$result = $conn->query("SELECT * FROM cargo") ;
echo "<h2>Таблица cargo</h2>";
echo 'ID'. ' '. 'ID_Рейса'. ' '. 'Вес'. ' '. 'Отправитель'."<br>";
while ($row = $result->fetch()) {
    echo $row['ID']. ' '. $row['ID_Рейса']. ' '. $row['Вес']. ' '. $row['Отправитель']."<br>";

}