<?php									// 2 tables : NEWS et COMMENTAIRES
function dbconnect()
{
    static $connect = null;
    if ($connect === null) {
        $connect = mysqli_connect('localhost', 'root', '', 'BDNews', '3307');
    }
    return $connect;
}

function get_news($id)
{

    $news_req = mysqli_query(dbconnect(), "SELECT * FROM news WHERE id='$id'");
    return mysqli_fetch_array($news_req);
}

function get_comments($news_id)
{
    $comment_req = mysqli_query(dbconnect(), "SELECT * FROM commentaires WHERE news_id='$news_id'");
    $result = array();
    while ($comment = mysqli_fetch_array($comment_req)) {
        $result[] = $comment;
    }
    return $result;
}

function insert_comment($comment)
{

    $req = "INSERT INTO commentaires (news_id, auteur, texte, date) VALUES ('".$comment['news_id']."','".$comment['auteur']."','".$comment['texte']."', NOW() )";
            
    mysqli_query(dbconnect(), $req);
}
