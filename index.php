<?php
include 'core/init.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Articles</title>
        <link rel='stylesheet' href='css/style.css'/>
        <script type="text/javascript" src="js/jquery-2.2.2.min.js"></script>
        <script type="text/javascript" src="js/like.js"></script>
    </head>
    <body>
        <?php
//        if(article_exists(1)===true){
//            echo 'Exists';
//        }
        
        echo like_count(2);
        $articles=get_articles();
        if(count($articles)==0){
            echo 'Sorry,there are no articles.';
        }else{
            echo '<ul>';
            foreach ($articles as $article){
                echo '<li><p>',$article['ArticleTitle'],'</p><p><a class="like" href="#" onclick="like_add('.$article['ArticleId'].')">Like</a> <span id="article_',$article['ArticleId'],'_likes">',$article['ArticleLike'], '</span> like this</p></li>';
            }
            echo '</ul>';
        }
        
        
        ?>
    </body>
</html>