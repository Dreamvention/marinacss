<?php 

$page = 'home';
if(isset($_GET['page'])){
    $page = $_GET['page'];
}

if(file_exists('examples/' . $page . '.php')){
    include('examples/' . $page . '.php'); 
}else{
    include('examples/404.php'); 
}



?>