<?php
function get_articles(){
    $Link = mysqli_connect('localhost','dbuser','123','like');
    $Articles=array();
    $Query= 'SELECT * FROM Article';
    $Result=  mysqli_query($Link,$Query);
    while($Row=mysqli_fetch_assoc($Result)){
       // echo $Row['ArticleTitle'],'<br>';
        $articles[]=array(
            'ArticleId'=>$Row['ArticleId'],
            'ArticleTitle'=>$Row['ArticleTitle'],
            'ArticleLike'=>$Row['ArticleLike']
        );
   }
   return $articles;
}

?>