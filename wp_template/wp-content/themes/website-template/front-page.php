<?php get_header(); ?>
<!-- Destaques -->
<div class="row pb-5 ml-5 mr-5">

  <?php 
  
  $query = new WP_Query( array( 
    'category_name'   => 'destaques',
    'posts_per_page'  => 2
  ) );

  if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); 
  
  ?>

    <div class="col-md mt-4">
      <a href="<?php the_permalink(); ?> ">
        <div class="card bg-main-post text-light post">
          <img src="<?php the_thumbnail(); ?>">
          <div class="card-body">
            <h5 class="<?php the_title_attribute(); ?>">
              <?php the_tittle(); ?>
            </h5>
            <p class="card-text">
              <?php the_content(); ?>
            </p>
          </div>
        </div>
      </a>
    </div>
    
  <?php endwhile; ?>

  <?php else : get_404_template(); endif; ?>

  </div>
 
</div>

<div class="row ml-5 mb-5">

  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    
    <div class="col-md mt-4 mr-0 pr-0">

      <a href="<?php the_permalink();; ?>">
        <img src="<?php the_thumbnail(); ?>">
        <div class="card bg-main-post text-light" style="width: 14rem; height:10rem;">
          <h5 class="<?php the_title_attribute(); ?>">
            <?php the_tittle(); ?>
          </h5>
          <p class="card-text">
            <?php the_content(); ?>
          </p>
        </div>
      </a>
    
    </div>

  <?php endwhile; ?>
  
  <?php else : get_404_template(); endif; ?>
  
</div>

<!-- Novidades -->
<?php $query = new WP_Query( array( 'category_name' => 'novidades' ) ); ?>

<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

  <div class="row">

    <div class="col-md-2" style="height: 4px;"></div>

    <div class="col-md-8 mb-0 mt-0 pb-0 pt-0" style="height: 13rem;">

      <div id="novidades" class="card">
        <div class="card-body">

          <div class="row ml-1 mr-1 mb-1 mt-1">

            <div class="col-3 bg-secondary"></div>

            <div class="col-9">

              <h5 class="<?php the_title_attribute(); ?>">
              <?php the_tittle(); ?>
              </h5>
              <p class="card-text">
                <?php the_content(); ?>
              </p>

            </div>

          </div>

        </div>
      </div>

    </div>

    <div class="col-md-2"></div>

  </div>

<?php endwhile; ?>
  
<?php else : get_404_template(); endif; ?>
<?php get_footer(); ?>