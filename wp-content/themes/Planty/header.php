<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"> 
    <?php wp_head() ?> <!--c’est par cette fonction que WordPress, le thème et les extensions vont pouvoir venir déclarer le chargement des scripts et des styles.-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>       
        <div id="logo-container">
            <a href="<?php echo home_url( '/' ); ?>">  
            <img class="logo" src="<?php echo get_stylesheet_directory_uri() ?>/image/logoplanty.png" alt="logo"> <!--get_stylesheet_directory_uri get_template_directory_uri() adresse absolue-->
        </div>  

        <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>        
    </header>

    