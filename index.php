<?php


include_once('set.php');


if (isset($_GET['page'])) {
    $vPage = $_GET['page'];
    if (empty($vPage)) {
        include_once('content/index.php');
        }
        else if ($vPage == 'mano'){
        include_once('content/mano/index.php');
        }
}else {


include_once('content/index.php');



 }//end else


?>



