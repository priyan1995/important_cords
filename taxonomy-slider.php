<!-- team section -->
<section class="pd-team-section" id="team_sec" style="display: none;">

    <h2 class="pd-yellow-underline">Meet The Team</h2>
    <div class="container">
        <ul class="nav nav-tabs" id="TeamTab" role="tablist">

            <?php
            $terms = get_terms(array(
                'taxonomy' => 'team_category',
                'hide_empty' => false,
                'orderby' => 'taxonomy'
            ));

            foreach ($terms as $term) {
                $slug = $term->slug;
                $termId = $term->term_id;
                $team_type = $term->name;
                $team_category_image = get_field('image_category_team', $term);
                $team_category_slug = $term->slug;


            ?>
                <li class="nav-item">
                    <a class="nav-link <?php if ($team_category_slug == 'board_of_directors') {
                                            echo 'active show';
                                        } ?>" id="<?php echo $team_category_slug; ?>-tab" data-toggle="tab" href="#<?php echo $team_category_slug; ?>" role="tab" aria-controls="<?php echo $team_category_slug; ?>" aria-selected="true">

                        <div class="pd-tab-image">
                            <img src="<?php echo $team_category_image; ?>" class="w-100">
                            <p><?php echo $team_type; ?></p>
                            <?php //var_dump($term);
                            ?>
                        </div>

                    </a>
                </li>

            <?php } ?>

        </ul>

    </div>
    <div class="tab-content" id="teamTabContent">
        <div class="container">

            <div class="tab-pane fade show active " id="board_of_directors" role="tabpanel" aria-labelledby="board_of_directors-tab">

                <h3 class="pd-main-tab-title">Board of <span>Directors</span> </h3>
                <div class="row float">

                    <?php
                    $bod_team = new WP_Query("taxonomy=team_category&term=board_of_directors");
                    if ($bod_team->have_posts()) : while ($bod_team->have_posts()) : $bod_team->the_post();

                    ?>


                            <div class="pd-card-3">
                                <div class="pd-team-card">
                                    <div class="pd-t-img">
                                        <img src="<?php the_field('image_team'); ?>">
                                    </div>
                                    <div class="pd-cont-team-box">
                                        <h3><?php the_title(); ?></h3>
                                        <h5><?php the_field('position'); ?></h5>
                                        <p><?php the_field('description'); ?></p>

                                        <span><?php the_field('quote_team'); ?></span>
                                    </div>
                                    <div class="pd-social-media">

                                        <?php
                                        $fb_url = get_field('facebook_url');
                                        if ($fb_url) { ?>
                                            <a href="<?php echo $fb_url; ?>" target="_blank"> <i class="fab fa-facebook-f"></i></a>
                                        <?php } ?>

                                        <?php
                                        $twitter_url = get_field('twitter_url');
                                        if ($twitter_url) { ?>
                                            <a href="<?php echo $twitter_url; ?>" target="_blank"> <i class="fab fa-twitter"></i></a>
                                        <?php } ?>

                                        <?php
                                        $instagram_url = get_field('instagram_url');
                                        if ($instagram_url) { ?>
                                            <a href="<?php echo $instagram_url; ?>" target="_blank"> <i class="fab fa-instagram"></i></a>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>



                    <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>

                </div>
            </div>
            <div class="tab-pane fade" id="management_team" role="tabpanel" aria-labelledby="management_team-tab">
                <h3 class="pd-main-tab-title"><span>Management</span> Team</h3>
                <div class="row float">

                    <?php
                    $mgt_team = new WP_Query("taxonomy=team_category&term=management_team");
                    if ($mgt_team->have_posts()) : while ($mgt_team->have_posts()) : $mgt_team->the_post();
                    ?>
                            <div class="pd-card-3">
                                <div class="pd-team-card">
                                    <div class="pd-t-img">
                                        <img src="<?php the_field('image_team'); ?>">
                                    </div>
                                    <div class="pd-cont-team-box">
                                        <h3><?php the_title(); ?></h3>
                                        <h5><?php the_field('position'); ?></h5>
                                        <p><?php the_field('description'); ?></p>

                                        <span><?php the_field('quote_team'); ?></span>
                                    </div>
                                    <div class="pd-social-media">

                                        <?php
                                        $fb_url = get_field('facebook_url');
                                        if ($fb_url) { ?>
                                            <a href="<?php echo $fb_url; ?>" target="_blank"> <i class="fab fa-facebook-f"></i></a>
                                        <?php } ?>

                                        <?php
                                        $twitter_url = get_field('twitter_url');
                                        if ($twitter_url) { ?>
                                            <a href="<?php echo $twitter_url; ?>" target="_blank"> <i class="fab fa-twitter"></i></a>
                                        <?php } ?>

                                        <?php
                                        $instagram_url = get_field('instagram_url');
                                        if ($instagram_url) { ?>
                                            <a href="<?php echo $instagram_url; ?>" target="_blank"> <i class="fab fa-instagram"></i></a>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>

                    <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="customer_success_team" role="tabpanel" aria-labelledby="customer_success_team-tab">
                <h3 class="pd-main-tab-title"><span>Customer Success</span> Team</h3>
                <div class="row float">

                    <?php
                    $cust_success_team = new WP_Query("taxonomy=team_category&term=customer_success_team");
                    if ($cust_success_team->have_posts()) : while ($cust_success_team->have_posts()) : $cust_success_team->the_post();
                    ?>
                            <div class="pd-card-3">
                                <div class="pd-team-card">
                                    <div class="pd-t-img">
                                        <img src="<?php the_field('image_team'); ?>">
                                    </div>
                                    <div class="pd-cont-team-box">
                                        <h3><?php the_title(); ?></h3>
                                        <h5><?php the_field('position'); ?></h5>
                                        <p><?php the_field('description'); ?></p>

                                        <span><?php the_field('quote_team'); ?></span>
                                    </div>
                                    <div class="pd-social-media">

                                        <?php
                                        $fb_url = get_field('facebook_url');
                                        if ($fb_url) { ?>
                                            <a href="<?php echo $fb_url; ?>" target="_blank"> <i class="fab fa-facebook-f"></i></a>
                                        <?php } ?>

                                        <?php
                                        $twitter_url = get_field('twitter_url');
                                        if ($twitter_url) { ?>
                                            <a href="<?php echo $twitter_url; ?>" target="_blank"> <i class="fab fa-twitter"></i></a>
                                        <?php } ?>

                                        <?php
                                        $instagram_url = get_field('instagram_url');
                                        if ($instagram_url) { ?>
                                            <a href="<?php echo $instagram_url; ?>" target="_blank"> <i class="fab fa-instagram"></i></a>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>

                    <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="development_team" role="tabpanel" aria-labelledby="development_team-tab">
                <h3 class="pd-main-tab-title"><span>Development</span> Team</h3>
                <div class="row float">

                    <?php
                    $development_team = new WP_Query("taxonomy=team_category&term=development_team");
                    if ($development_team->have_posts()) : while ($development_team->have_posts()) : $development_team->the_post();
                    ?>
                            <div class="pd-card-3">
                                <div class="pd-team-card">
                                    <div class="pd-t-img">
                                        <img src="<?php the_field('image_team'); ?>">
                                    </div>
                                    <div class="pd-cont-team-box">
                                        <h3><?php the_title(); ?></h3>
                                        <h5><?php the_field('position'); ?></h5>
                                        <p><?php the_field('description'); ?></p>

                                        <span><?php the_field('quote_team'); ?></span>
                                    </div>
                                    <div class="pd-social-media">

                                        <?php
                                        $fb_url = get_field('facebook_url');
                                        if ($fb_url) { ?>
                                            <a href="<?php echo $fb_url; ?>" target="_blank"> <i class="fab fa-facebook-f"></i></a>
                                        <?php } ?>

                                        <?php
                                        $twitter_url = get_field('twitter_url');
                                        if ($twitter_url) { ?>
                                            <a href="<?php echo $twitter_url; ?>" target="_blank"> <i class="fab fa-twitter"></i></a>
                                        <?php } ?>

                                        <?php
                                        $instagram_url = get_field('instagram_url');
                                        if ($instagram_url) { ?>
                                            <a href="<?php echo $instagram_url; ?>" target="_blank"> <i class="fab fa-instagram"></i></a>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>

                    <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>