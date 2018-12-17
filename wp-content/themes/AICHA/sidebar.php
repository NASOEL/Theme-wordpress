

 
 <div class="sidebar-module sidebar-module-inset">
     <div class="col-sm-2 col-sm-offset-1 blog-sidebar">
 <h4>À Propos</h4>
 <p><?php the_author_meta( 'description'); ?> </p>
 <h4>Archives</h4>
 <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Autem, fuga expedita hic totam dolorem eum alias eius quos
       exercitationem accusantium dolores cupiditate similique repellat
        corporis! Ut, quae? Assumenda, nisi minima!</p>
 <ol class="list-unstyled">
 <?php wp_get_archives( 'type=monthly' ); ?>
 </ol>
 </div>
 </div>
