<?php 
require_once 'init.php';
require_once './function/escapeOutput.php';
if (isset ($_SESSION['query'])){
    $query = $_SESSION['query'];
}else{
        $query = "SELECT * FROM products";
}

$results=mysqli_query($connection,$query)  or exit ("Error in query: $query. ".mysqli_query($connection,$query));

while($row=mysqli_fetch_array($results)){

  		include 'itemsForm.php';
}


?>