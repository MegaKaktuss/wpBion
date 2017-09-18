<?php
/*Input PHP code heare*/
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="Header">
		<section>
			<a class="HeaderLogo" href="#">
                <img class="HeaderLogo-img" src="<?php echo get_field('logo')?>" alt="Bion-logo">
            </a>
            
            <nav class='HeaderNav'>

            <?php wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'container' => 'ul',
                'container_class' => 'NavMenu',
                'menu_class' => 'NavMenu'
                )); ?>
            </nav>

            <a href="#" class="HeaderPriceBtn">Reguest price-list</a>

            <a href="#" class="nav-link"><span class="nav-line"></span></a>
            <nav class="menu-xl">
                <div class="navigation-close">
                    &times
                </div>
                <?php wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'container' => 'ul',
                )); ?>
            </nav>
		</section>

        <section style="background:url(<?php echo get_field('bg_image')?>)">
            <?php
                $query = new WP_Query(array(
                    'post_type' => 'intro'
                ));
        
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
            <article class="HeaderIntro" style="background-color:<?php echo get_field('background_color')?>;">
                
                <h1 class='HeaderIntro-title'><?php the_title(); ?></h3>
                <div class="HeaderIntro-info">
                    <?php the_content(); ?>
                </div>
            </article>
        
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
        </section>
	</header>

            






