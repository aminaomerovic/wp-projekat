<?php get_header(); ?>

<!-- Hero sekcija -->
<section class="hero" style="background-image:url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero.jpg' ); ?>')">
  <div class="container">
    <div class="inner">
      <h1>Organizujte događaje brzo i lako</h1>
      <p>Povezujemo organizatore i volontere za veći uticaj u zajednici.</p>
      <a class="btn" href="<?php echo esc_url( home_url('/kontakt') ); ?>">Rezerviši termin</a>
    </div>
  </div>
</section>

<!-- Sadržaj same stranice koju si postavila kao Homepage -->
<div class="container" style="padding:28px 0">
  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      the_content(); // Ovde će se prikazati sadržaj iz WordPress editora (O nama).
    }
  }
  ?>
</div>

<?php get_footer(); ?>
