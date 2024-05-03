<h1>Доступные маршруты:</h1>
<?php
$result = $conn->query("SELECT * FROM `route` WHERE 1 GROUP BY route.ID");

while ($row = $result->fetch()) {
//style="max-width: 18rem;"
    echo'
        
        <div class="card border-dark mb-3" >
            <div class="card-header"> ' . $row['Name'] . '</div>
            <div class="card-body text-dark">
                <div class="row g-0">
                    <div class="col-md-1">  
                        <img src="'.$row['изображение'].'" alt="Task picture" height="360px">  
                    </div>
                    <div class="col-md-12">
                    <a class="nav-link" href="/index.php?page=v" >
                        <h5 class="card-title">' . 'ID маршрута - ' . $row['ID'] . '</h5>
                        <p class="card-text">' . 'Тариф за 1 кг - ' .$row['Тариф_за_1_кг'] . ' ' .'рублей' .'</>
                        <p class="card-text">' . 'Расстояние - ' .$row['Расстояние'] . ' ' .'км' .'<p>
                    </a>
                    </div> 
                    <div class="col-md-1">
                        <a href="deleteroute.php?ID='.$row['ID'].'" class="btn btn-danger">Удалить</a>
                    </div> 
                </div>
            </div>
            
        </div>
 
    ';

}

?>
<h2>Добавить маршрут</h2>
<form action="insertroute.php" method="post" enctype="multipart/form-data">
    <p><label>
            Наименование: <input type="text" name="name">
        </label>
    <p><label>
            Тариф за 1 кг: <input type="text" name="tarif">
        </label>
    <p><label>
            Расстояние: <input type="text" name="distance">
        </label>
    <p><label>
            Ссылка на изображение-карту маршрута: <input type="text" name="picture">
        </label>
    <p><input type="submit" value="Добавить">
</form>
