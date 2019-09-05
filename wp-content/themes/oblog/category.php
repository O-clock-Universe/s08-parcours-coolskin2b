<?php

get_header();

?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->

<article class="card">
    <div class="card-body">
        <h2 class="card-title"><a href="<?php the_permalink() ?> title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <p class="card-text"><?php the_excerpt()?></p>
        <p class="infos">
            Posté par <a href="<?php get_the_author_link()?>" class="card-link"><?php the_author() ?></a> le <time><?php the_date() ?></time> dans 
            <a href="<?php echo get_category_link(the_category_ID(false)); ?>"
            
                class="card-link">#<?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>
                

        </p>
    </div>
</article>
<?php endwhile; endif; ?>
<!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->



<!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
<nav aria-label="Page navigation example" class="sans-bonus">
    <ul class="pagination justify-content-between">
        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-arrow-left"></i> Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">Next <i class="fas fa-arrow-right"></i></a></li>
    </ul>
</nav>

</main>

<aside class="col-lg-3">
    <!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
    <div class="avec-bonus input-group mb-3">
        <input type="text" class="form-control" placeholder="Rechercher un article..."
            aria-label="Rechercher un article..." aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Allez</button>
        </div>
    </div>

    <!-- Catégories: https://getbootstrap.com/docs/4.1/components/card/#list-groups-->
    <div class="card">

    
    <h3 class="card-header">Catégories</h3>
    <?php
            // cf : https://developer.wordpress.org/reference/functions/wp_nav_menu/
            // "theme_location" emplacement de menu défini dans functions.php
            wp_nav_menu([
              'theme_location' => 'nav right',
              'container' => false,
              'menu_class' => 'list-group list-group-flush',
              'add_li_class'  => 'list-group-item'
          ]);
      ?>
</div>

    <!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
    <div class="card">
        <h3 class="card-header">Auteurs</h3>
        <ul class="list-group list-group-flush">
        
        <?php
$args2 = array(

    role’ => ‘authors’,
    
    ‘orderby’ => ‘display_name’,
    
    ‘order’ => ‘ASC’
    
    );
    $authors = get_users($arg2);
    foreach ($authors as $author) {
        echo '<li class="list-group-item"><a href="?author=' .$author->ID. '">' .$author->display_name. '</a></li>';
    }
  ?>
  

</aside>
<?php
get_footer();
