<?php
$estiloPagina = 'sobre_nos.css';

require_once('header.php');

if(have_posts()) {
    ?>
    <main class="main-sobre-nos">
        <?php
        //Enquanto há conteúdo ele imprime. Conhecido como "o loop do WordPress".
        while(have_posts()){ 
            //Pega o post.
            the_post();

            //Insere a imagem do post.
            //Inserimos o tamanho e as classes como args.
            the_post_thumbnail('post-thumbnail', array('class' => 'imagem-sobre-nos'));
            echo '<div class="conteudo container-alura">';
            //Insere o titulo.
            the_title('<h2>', '</h2>');

            //Insere o conteúdo.
            the_content();

            echo '</div>';
        };
        ?>
    </main>
    <?php
}

require_once('footer.php');