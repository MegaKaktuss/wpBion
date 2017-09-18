<?php
  $locations = get_nav_menu_locations();
?>


<footer>
  <div class="FooterContent">
       <?php
          $query = new WP_Query(array(
              'post_type' => 'footer'
          ));

          while ($query->have_posts()) :
              $query->the_post();
        ?>
      <h2 class="FooterTitle"><?php the_title()?></h2>
      <?php
            endwhile;
            wp_reset_postdata();
        ?>
        <?php
                $menuId = $locations['company_menu'];
                $menu = wp_get_nav_menu_object($menuId);
            ?>
       <nav class="CompanyNavigation">     
      <h3 class='MenuTitle'><?php echo $menu->name; ?></h3>
      
        <?php wp_nav_menu(array(
              'theme_location' => 'company_menu',
              'container' => 'ul',
              'menu_class' => 'CompanyMenu',
              )); 
          ?>
		
          <?php
                $menuId = $locations['more_menu'];
                $menu = wp_get_nav_menu_object($menuId);
            ?>
        </nav>
        <nav class="MoreNavigation">
      <h3 class='MenuTitle'><?php echo $menu->name; ?></h3>
        <?php wp_nav_menu(array(
              'theme_location' => 'more_menu',
              'container' => 'ul',
              'menu_class' => 'MoreMenu',
              )); 
          ?>

          <?php
                $menuId = $locations['follow_menu'];
                $menu = wp_get_nav_menu_object($menuId);
            ?>
        </nav>
        <nav class="FollowNavigation">
      <h3 class='MenuTitle'><?php echo $menu->name; ?></h3>
        <?php wp_nav_menu(array(
              'theme_location' => 'follow_menu',
              'container' => 'ul',
              'menu_class' => 'FollowMenu',
              )); 
          ?>

      <?php
          $query = new WP_Query(array(
              'post_type' => 'footer'
          ));

          while ($query->have_posts()) :
              $query->the_post();
        ?>
        </nav>
        <div class="FooterCopyright"><?php echo get_field('copyright')?></div>
      <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </div>
</footer>

<?php wp_footer(); ?>