<?php 
/* Template Name: Home */ 
get_header();
?>

<section class="HomeStats">
	<?php
	    $query = new WP_Query(array(
	        'order' => 'ASC',
	        'orderby' => 'date',
	        'post_type' => 'stats'
	    ));

	    while ($query->have_posts()) :
	        $query->the_post();
	?>

	<div class="HomeStats-item">
		<div class="StatsItem-content">
			<h2><?php echo get_field('quantity')?></h2>
			<div class="StatsItemContent-text">
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
			</div>
		</div>
	</div>

	<?php
        endwhile;
        wp_reset_postdata();
    ?>
	
	<div class="HomeStats-item">
		<div class="StatsItem-content">
			<a class="StatsContent-button" href="#">more about bion</a>
		</div>
	</div>
</section>
	<?php
        $query = new WP_Query(array(
            'post_type' => 'advantages'
        ));

        while ($query->have_posts()) :
            $query->the_post();
    ?>		
<section class="HomeAdvantages" style="background: url('<?php echo get_field('advantages_bg')?>') center center repeat-y; background-size:cover;">

	<?php
        endwhile;
        wp_reset_postdata();
    ?>

	<h1 class="HomeAdvantages-title">advantages</h1>

	<?php wp_nav_menu(array(
        'theme_location' => 'advantages_menu',
        'container' => 'ul',
        'menu_class' => 'HomeAdvantages-content'
    )); ?>
            
	<a class="HomeAdvantages-button" href="#">viev stock-list</a>
</section>

<?php
    $query = new WP_Query(array(
        'post_type' => 'backgrounds'
    ));

    while ($query->have_posts()) :
        $query->the_post();
?>
<section class="HomeDiscounts" style="background:url(<?php echo get_field('bg_discounts')?>)">
	<?php
        endwhile;
        wp_reset_postdata();
    ?>
	<h1 class="HomeDiscounts-title">Discounts</h1>
	<p class="HomeDiscounts-info">All BION’s wholesale customers are entitled to special prices and discounts<br> (depending on quantity) as well as privileged shipping cost, namely</p>

	
	<div class="HomeDiscounts-statistics">

	<?php
	    $query = new WP_Query(array(
	        'post_type' => 'discounts'
	    ));

	    while ($query->have_posts()) :
	        $query->the_post();
    ?>
		<div class="DiscountsStatistics-item">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</div>
	
	<?php
        endwhile;
        wp_reset_postdata();
    ?>
    </div>
    <?php
	    $query = new WP_Query(array(
	        'post_type' => 'discounts_link'
	    ));

	    while ($query->have_posts()) :
	        $query->the_post();
    ?>
	<a href="<?php echo get_field('discounts_link_url')?>" class="HomeDiscount-button"><?php the_title(); ?></a>
	<?php
        endwhile;
        wp_reset_postdata();
    ?>
</section>

	<?php
        $query = new WP_Query(array(
            'post_type' => 'backgrounds'
        ));

        while ($query->have_posts()) :
            $query->the_post();
    ?>		
<section class="HomeNews" style="background:url(<?php echo get_field('bg_news')?>)">

	<?php
        endwhile;
        wp_reset_postdata();
    ?>
	<div class="HomeNews-title">
		<h1>news</h1>
		<a class="ViewAll-news" href="#">view all</a>
	</div>
	<div class="HomeNews-content">
		<?php 
			$query = new WP_Query(array(
		    'post_type' => 'post'
			));

			while ($query->have_posts()) :
			    $query->the_post();
		?>

		<div class="NewsContent-item">
			<div class="NewsContentItem-date"><?php echo get_the_date('d') ?> <span><?php echo get_the_date('M') ?></span> </div>
			<div class="NewsContentItem-caption"><?php the_title() ?></div>
		</div>

	<?php	
		endwhile;
	?>
	</div>

</section>

<?php
    $query = new WP_Query(array(
        'post_type' => 'backgrounds'
    ));

    while ($query->have_posts()) :
        $query->the_post();
?>		

<section class="HomeContact" style="background:url(<?php echo get_field('bg_contacts')?>)">

<?php
    endwhile;
    wp_reset_postdata();
?>

	<h1 class="HomeContact-title">in case of any questions drop us a line</h1>

	<?php echo do_shortcode('[contact-form-7 id="4" title="Questions Form"]' );
	?>
</section>

<?php
get_footer();