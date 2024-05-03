<h1>Рейсы:</h1>
<?php
$result = $conn->query("SELECT * FROM `cruise` WHERE 1 GROUP BY cruise.ID");

while ($row = $result->fetch()) {
//style="max-width: 18rem;"
    echo'
        
        <div class="card border-dark mb-3" >
            <div class="card-header"> ' . 'ID рейса - ' . $row['ID'] .'</div>
            <div class="card-body text-dark">
                <div class="row g-0"> 
                    <div class="col-md-10">
                    <a class="nav-link" href="/index.php?page=n" >                  
                        <p class="card-text">' . 'ID маршрута - ' .$row['ID_Маршрута']  .'</>
                        <p class="card-text">' . 'ID Транспорта - ' .$row['ID_Транспорта']  .'</>
                        <p class="card-text">' . 'Дата и время отправления - ' .$row['Дата_и_время_отправления']  .'</>
                        <p class="card-text">' . 'Дата и время прибытия - ' .$row['Дата_и_время_прибытия']  .'</>
                        </a>          
                    </div>
                    <div class="col-md-2">
                        <a href="deletecruise.php?ID='.$row['ID'].'" class="btn btn-danger">Удалить</a>
                    </div>                    
                </div>             
            </div>           
        </div>
 
    ';
}
?>