<?php get_header(); ?>

<div class="wrap">

  <?php
  // Placeholder recipes grouped by region
  $regions = [
    'Sichuan' => [
      [
        'name'  => 'Mapo Tofu',
        'spice' => 'Very Spicy',
        'img'   => 'https://via.placeholder.com/300?text=Mapo+Tofu'
      ],
      [
        'name'  => 'Kung Pao Chicken',
        'spice' => 'Spicy',
        'img'   => 'https://via.placeholder.com/300?text=Kung+Pao+Chicken'
      ],
      [
        'name'  => 'Dan Dan Noodles',
        'spice' => 'Hot',
        'img'   => 'https://via.placeholder.com/300?text=Dan+Dan+Noodles'
      ],
    ],
    'Cantonese' => [
      [
        'name'  => 'Cantonese Roast Duck',
        'spice' => 'Mild',
        'img'   => 'https://via.placeholder.com/300?text=Roast+Duck'
      ],
      [
        'name'  => 'Sweet & Sour Pork',
        'spice' => 'Medium',
        'img'   => 'https://via.placeholder.com/300?text=Sweet+%26+Sour+Pork'
      ],
      [
        'name'  => 'Steamed Fish',
        'spice' => 'Mild',
        'img'   => 'https://via.placeholder.com/300?text=Steamed+Fish'
      ],
    ],
  ];
  ?>

  <?php foreach ( $regions as $region_name => $recipes ) : ?>
    <section class="category-section">
      <h2><?php echo esc_html( $region_name ); ?></h2>
      <div class="scroll-row">
        <?php foreach ( $recipes as $r ) : ?>
          <a class="card" href="#">
            <img src="<?php echo esc_url( $r['img'] ); ?>" alt="<?php echo esc_attr( $r['name'] ); ?>">
            <div class="card__info">
              <h3><?php echo esc_html( $r['name'] ); ?></h3>
              <small><?php echo esc_html( $r['spice'] ); ?></small>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endforeach; ?>

</div>

<?php get_footer(); ?>