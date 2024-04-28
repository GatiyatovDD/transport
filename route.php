<h1>Доступные маршруты:</h1>
<?php
$result = $conn->query("SELECT * FROM `route` WHERE 1 GROUP BY route.ID");

while ($row = $result->fetch()) {
//style="max-width: 18rem;"
    echo'
        
        <div class="card border-dark mb-3" >
            <div class="card-header"> ' . $row['Наименование'] . '</div>
            <div class="card-body text-dark">
                <div class="row g-0">
                    <div class="col-md-1">  
                        <img src="'.$row['изображение'].'" alt="Task picture" height="360px">  
                    </div>
                    <div class="col-md-12">
                    <a class="nav-link" href="/index.php?page=t" >
                        <h5 class="card-title">' . 'ID маршрута - ' . $row['ID'] . '</h5>
                        <p class="card-text">' . 'Тариф за 1 кг - ' .$row['Тариф_за_1_кг'] . ' ' .'рублей' .'</>
                        <p class="card-text">' . 'Расстояние - ' .$row['Расстояние'] . ' ' .'км' .'<p>
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