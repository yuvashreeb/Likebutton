<?php
function get_articles(){
    $Articles=array();
    $Query= 'SELECT * FROM Article';
    $Result=  mysqli_query($Link, $Query);
    $Results=  mysqli_fetch_assoc($Result);
    //$Row=mysqli_fetch_assoc($Query);
    print_r($Results);
//    while($Row<=  mysqli_num_rows($Query)){
//        echo $Row['ArticleTitle'],'<br>';
//    }
}

?>