<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada individual</title>
</head>
<body>
<h1>Entrada indivdual</h1>
    <?php
        while(have_posts()){
            the_post();
            ?>
            <h2><a href="<?=the_permalink()?>"><?=the_title()?></a></h2>
            <p><?=the_content()?></p>
        <?php
        }
    ?>

</body>
</html>