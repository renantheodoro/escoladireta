<div class="card z-depth-1">
  <a href="<?php the_permalink() ?>" class="image">
    <?php the_post_thumbnail("i300x300"); ?>
  </a>

  <h3>
    <a href="<?php the_permalink() ?>">
      <?php the_title(); ?>
    </a>
  </h3>

  <?php // the_category( ', ' ); ?>

  <?php the_excerpt(); ?>

  <div class="card-action area-date">
    <!-- <div class="post-categories"> -->
      <?php the_category(); ?>
    <!-- </div> -->

   <a href="<?php the_permalink(); ?>" class="leia">LEIA MAIS</a>
 </div>
</div>
