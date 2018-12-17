<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Exemple de thème WordPress</title>
<link href="<?php bloginfo('template_directory');?>/css/main.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<?php wp_head(); ?>
</head>
<body>
<!-- le bakground-image -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3"style="color: white;" >KELOUMACK</h1>
  </div>
</div>
<!-- la barre de menu -->
    <div class="header">
      <div class="container">
        <nav id="navigation-principale" role="navigation">
          <?php wp_nav_menu( array( ‘theme_location’ => ‘menu-principal’ ) ); ?>
        </nav>
      </div>
    </div>

  <div class="heads">
    <div class="container-fluid">
        <div class="blog-header">
            <h1 class="blog-title">
              <a href="<?php echo get_bloginfo( 'wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a>
            </h1>
            <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
<p> je suis aicha </p>
        </div>
    </div> <!--  container  -->
    </div>
