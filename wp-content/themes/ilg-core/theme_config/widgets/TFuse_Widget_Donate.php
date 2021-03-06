<?php
class TFuse_Widget_Donate extends WP_Widget {

	function TFuse_Widget_Donate() {
            $widget_ops = array('classname' => 'widget_donate', 'description' => __( "A Donate form for your site","tfuse") );
            $this->WP_Widget('donate', __('TFuse Donate','tfuse'), $widget_ops);
	}

	function widget($args, $instance) { 
            extract($args);
            $title = apply_filters('widget_title', empty( $instance['title'] ) ? __( 'Search','tfuse' ) : $instance['title'], $instance, $this->id_base);
            ?>
            <div class="widget widget-make-donation">
                    <h1 class="widget-title"><?php echo $title;?></h1>
                    <span class="total-donate"><sup>$</sup><?php echo $instance['total']; ?></span>
                    <div class="divider"></div>
                    <h3><?php _e('MAKE A DONATION','tfuse');?></h3>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <label></label>
                            <input type="hidden" name="cmd" value="_donations">
                            <input type="hidden" name="business" value="<?php echo $instance['email']; ?>">
                            <input type="hidden" name="lc" value="US">
                            <input type="hidden" name="item_name" value="">
                            <input type="hidden" name="no_note" value="0">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
                            <input type="text" id="amount" name="amount"  placeholder="20">
                            <button type="submit" class="btn btn-yellow btn-giveby-card" alt="PayPal - The safer, easier way to pay online!"><span><?php _e('Give by','tfuse');?> <i class="icon-credit-card"></i></span></button>
                            <button type="submit" class="btn btn-yellow btn-giveby-paypal" alt="PayPal - The safer, easier way to pay online!"><span><?php _e('Give by','tfuse');?> <i class="tficon-paypal"></i></span></button>
                    </form>
                    <div class="text">
                       <?php echo $instance['desc']; ?>
                    </div>
            </div>

                    <?php
        }

	function update( $new_instance, $old_instance ) {
            $instance = $old_instance;
            $new_instance = wp_parse_args((array) $new_instance, array( 'title' => '', 'total' => '','desc' => '','email' => ''));
            $instance['title'] = $new_instance['title'];
            $instance['total'] = $new_instance['total'];
            $instance['email'] = $new_instance['email'];
            $instance['desc'] = $new_instance['desc'];
            return $instance;
	}

	function form( $instance ) {
            $instance = wp_parse_args( (array) $instance, array( 'title' => '','total' => '','desc' => '','email' => '') );
            $title = $instance['title'];
            $total = $instance['total'];
            $email = $instance['email'];
            $desc = $instance['desc'];
?>

            <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','tfuse'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
            <p><label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email:','tfuse'); ?> <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo esc_attr($email); ?>" /></label></p>
            <p><label for="<?php echo $this->get_field_id('total'); ?>"><?php _e('Total Donate:','tfuse'); ?> <input class="widefat" id="<?php echo $this->get_field_id('total'); ?>" name="<?php echo $this->get_field_name('total'); ?>" type="text" value="<?php echo esc_attr($total); ?>" /></label></p>
            
            <label for="<?php echo $this->get_field_id('desc'); ?>"><?php _e('Short Description:','tfuse'); ?></label>
            <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('desc'); ?>" name="<?php echo $this->get_field_name('desc'); ?>"><?php echo $desc; ?></textarea>
<?php
	}
}

register_widget('TFuse_Widget_Donate');
