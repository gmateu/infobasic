
<footer>
    <div class="row">
        <div class="col-6">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        </div>
        <div class="col-3">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'infobasic_links_menu',
            ) );
        ?>
        </div>
        <div class="col-3">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'infobasic_negoci_menu',
            ) );
        ?>
        </div>
    </div>
</footer>

<?php wp_footer();?>
</body>

</head>