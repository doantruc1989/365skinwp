<div class="col-inner">
                <?php do_action('woocommerce_before_shop_loop_item'); ?>
                <div class="product-small box <?php echo flatsome_product_box_class(); ?>">
                    <div class="box-image">
                        <div class="<?php echo flatsome_product_box_image_class(); ?>">
                            <a href="<?php echo get_the_permalink(); ?>">
                                <?php
                                do_action('flatsome_woocommerce_shop_loop_images');
                                ?>
                            </a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                            <?php do_action('flatsome_product_box_tools_top'); ?>
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                            <?php do_action('flatsome_product_box_tools_bottom'); ?>
                        </div>
                        <div class="image-tools <?php echo flatsome_product_box_actions_class(); ?>">
                            <?php do_action('flatsome_product_box_actions'); ?>
                        </div>
                    
                    </div>
                    <div class="box-text <?php echo flatsome_product_box_text_class(); ?>">
                        <?php
                        do_action('woocommerce_before_shop_loop_item_title');
                        echo '<div class="title-wrapper h-16">';
                        do_action('woocommerce_shop_loop_item_title');
                        echo '</div>';
                        echo '<div class="price-wrapper mt-1">';
                        do_action('woocommerce_after_shop_loop_item_title');
                        echo '</div>';
                        do_action('flatsome_product_box_after');
                        ?>
                    </div>
                </div>
                <?php do_action('woocommerce_after_shop_loop_item'); ?>
            </div>