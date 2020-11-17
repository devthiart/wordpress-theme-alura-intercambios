<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Pega o nome do site dinamicamente pelo painel adm-->
    <title><?php bloginfo('name'); ?></title>
    <!--Insere arquivos do cabeçalho do WP.-->
    <?php wp_head(); ?>
    <!--Pega o caminho da minha pasta themes dinamicamente.-->
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/normalize.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/header.css' ?>">
    <!--Incluindo estilos dinamicamente conforme a página.-->
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/' . $estiloPagina ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/footer.css' ?>">
</head>

<!--Adiciona classes do WP no nosso body-->
<body <?php body_class(); ?> >
<header class="site-header">
    <div class="container-alura">
        <?php
        //Insere o logo
        the_custom_logo();
        ?>
        <nav>
            <?php
            //Coloca o menu
            wp_nav_menu(
                array(
                    'menu' => 'menu-navegacao',
                    'menu_id' => 'menu-principal'
                )
            );
            ?>
        </nav>
    </div>
</header>


