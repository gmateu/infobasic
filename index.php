<?php
    get_header();
?>
<h1>Bienvenidos a mi web</h1>
    <?php
        while(have_posts()){
            the_post();
            ?>
            <h2><a href="<?=the_permalink()?>"><?=the_title()?></a></h2>
            <p><?=the_excerpt()?></p>
        <?php
        }
    ?>

</body>
</html>