<html>
    <head>
        <title>Les news</title>
    </head>
    <body>
    <h1>Les news</h1>
    <div id="news">
    <h2><?php echo $news['titre'] ?> post&eacute;e le <?php echo $news['date'] ?></h2>
    <p><?php echo $news['texte_nouvelle'] ?> </p>
    <p><?php $nbre_comment = count($comments); ?> </p>
    <h3><?php echo $nbre_comment ?> commentaires relatifs  	&agrave; cette nouvelle</h3>
        <?php foreach ($comments AS $comment) {?>
            <h3><?php echo $comment['auteur'] ?> a &eacute;crit le <?php echo $comment['date'] ?></h3>
            <p><?php echo $comment['texte'] ?></p>
        <?php } ?>
    <form method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" name="ajoutcomment">
        <input type="hidden" name="news_id" value="<?php echo $news['id']?>">
        <input type="text" name="auteur" value="Votre nom"><br />
        <textarea name="texte" rows="5" cols="10">Saisissez votre commentaire</textarea><br />
        <input type="submit" name="submit" value="Envoyer">
    </form>
    </div>
    </body>
</html>
