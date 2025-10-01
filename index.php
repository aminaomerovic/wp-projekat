<?php get_header(); ?>
<div class="container" style="padding:24px 0">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article style="margin-bottom:32px">
      <h2><a href="<?php the_permalink(); ?>" style="text-decoration:none;color:inherit"><?php the_title(); ?></a></h2>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; else: ?>
    <p>Nema sadržaja.</p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
