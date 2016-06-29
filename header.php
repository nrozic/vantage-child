<?php 

include( get_template_directory() . '/header.php' );

if( ! is_home() && ! is_front_page() && ! empty( $GLOBALS['redux_vantage']['fab-url'] ) ) : ?>
    
    <div class="vantage_child_fab">
        <a class="vantage_child_link" href="<?php $GLOBALS['redux_vantage']['fab-url'] ?>" title="Contact Us">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </a>
    </div>

<?php endif; ?>
