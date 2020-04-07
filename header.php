<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel = "stylesheet" href = "<?php echo get_bloginfo('template_directory'); ?>/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/15e2fd0502.js" crossorigin="anonymous"></script> 

    <!--<title>Knowledge Base</title>NOW INCLUDED IN FUNCTIONS.php-->

    <?php wp_head();?>
</head>
<body class = "bg-light">


    <nav class = "p-1 navbar navbar-dark navbar-expand-lg navbar-default" role = "navigation">
        <div class = "container">
            
            <a class = "navbar-brand" href = "<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class = "menu navbar-nav nav text-center pt-4 pb-4">
                    <?php 
                    wp_nav_menu(

                        array(

                            'theme_location' => 'top-menu',
                            'menu_class' => 'top-nav'
                        )
                    );
                    ?>
                    <!--<li class = "nav-item"><a class = "nav-link" href = "#"><span class="sr-only">(current)</span></a></li>
                    <li class = "nav-item"><a class = "nav-link" href = "#"></a></li>
                    <li class = "nav-item"><a class = "nav-link" href = "#"></a></li>-->
                </ul>
            </div>
        </div>
    </nav>