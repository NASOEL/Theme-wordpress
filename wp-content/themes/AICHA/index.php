<!--  recuperation du header-->
<?php get_header();?>

<div class="row">
  <div class="container-fluid">
    <div class="col-sm-8 blog-main">
      <!--la zone de  contenu-->
      <?if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'content', get_post_format() );
      endwhile; endif;
      ?>
</div>
      <?php  get_template_part( "content", get_post_format());?>
     </div> <!-- <!– /.blog-main –> -->
   <!-- recuperation du sidebar -->
      <?php get_sidebar();?>
</div> <!--   /.row –> -->
<!-- recuperation du footer -->
<?php get_footer();?>
