<h1>Транспорт:</h1>
<?php
$result = $conn->query("SELECT * FROM `transport` WHERE 1 GROUP BY transport.ID");

while ($row = $result->fetch()) {
//style="max-width: 18rem;"
    echo'
        
        <div class="card border-dark mb-3" >
            <div class="card-header"> ' . $row['Наименования'] . '</div>
            <div class="card-body text-dark">
                <div class="row g-0">
                    <div class="col-md-1">  
                        <img src="'.$row['изображение'].'" alt="Task picture" height="75px">
                        
                    </div>
                    <div class="col-md-7">
                    <a class="nav-link" href="/index.php?page=c" >
                        <h5 class="card-title">' . 'ID транспорта - ' . $row['ID'] . '</h5>
                        <p class="card-text">' . 'Грузоподъёмность - ' .$row['Грузоподъёмность'] . ' ' .'кг' .'</p>
                    </a>
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
