<h1>Заказы (грузы):</h1>
<?php
$result = $conn->query("SELECT * FROM `cargo` WHERE 1 GROUP BY cargo.ID");

while ($row = $result->fetch()) {
//style="max-width: 18rem;"
    echo'
        
        <div class="card border-dark mb-3" >
            <div class="card-header"> ' . 'ID груза - ' . $row['ID'] .'</div>
            <div class="card-body text-dark">
                <div class="row g-0"> 
                    <div class="col-md-10">
                    <a class="nav-link" href="/index.php?page=b" >                  
                        <p class="card-text">' . 'ID рейса - ' .$row['ID_Рейса']  .'</>
                        <p class="card-text">' . 'Вес - ' .$row['Вес'] . ' ' .'кг' .'</>
                        <p class="card-text">' . 'Отправитель - ' .$row['Отправитель']  .'</>
                        </a>          
                    </div>
                    <div class="col-md-1">
                        <a href="deletecargo.php?ID='.$row['ID'].'" class="btn btn-danger">Удалить</a>
                    </div>                    
                </div>             
            </div>           
        </div>
 
    ';
//    echo '<tr>';
//    echo '<td>' .  $row['id']. '</td><td>' . $row['name'] . '</td>';
//    echo '<td><a href=deletecategory.php?id='.$row['id'].'>Удалить</a></td>';
//    echo '</tr>';
}
?>

<h2>Добавить груз</h2>
<form action="insertcargo.php" method="post" enctype="multipart/form-data">
    <p><label>
            ID Заказа (груза): <input type="text" name="ID">
        </label>
    <p><label>
            ID Рейса: <input type="text" name="ID_cruise">
        </label>
    <p><label>
            Вес: <input type="text" name="Weight">
        </label>
    <p><label>
            Отправитель: <input type="text" name="Sender">
        </label>
    <p><input type="submit" value="Добавить">
</form>
