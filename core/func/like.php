<?php 
function article_exists($article_id){
    $Link=  mysqli_connect('localhost', 'dbuser', '123', 'like');
    $article_id=(int)$article_id;
    return (mysqli_fetch_assoc(mysqli_query($Link,"SELECT COUNT(ArticleId) FROM Article WHERE ArticleId=$article_id"))==0) ? false : true;
    
}
function previously_liked($article_id){
    
}
function like_count($article_id){
     $Link=  mysqli_connect('localhost', 'dbuser', '123', 'like');
    $article_id=(int)$article_id;
    return (int)mysqli_fetch_assoc((mysqli_query($Link,"SELECT ArticleLike FROM Article WHERE ArticleId=$article_id")),0,'ArticleLike');
}
function add_like($article_id){
    
}
?>