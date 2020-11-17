<?php
require_once('header.php');

if(have_posts()) : 
    while(have_posts()): the_post();
        //Insere a imagem do post.
        the_post_thumbnail();

        //Insere o titulo.
        the_title();

        //Insere o conteúdo.
        the_content();

    endwhile;
endif;

require_once('footer.php');
?>