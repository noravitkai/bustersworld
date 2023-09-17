<footer class="custom-footer">
    <div class="footer-content">
        <div class="contact-info">
            <h3>Contact Us</h3>
            <p><a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a></p>
            <p><a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a></p>
            <p><a href="<?php the_field('organization_website'); ?>"><?php the_field('organization_website'); ?></a></p>
        </div>
        <div class="social-media">
            <h3>Follow Us</h3>
            <a href="<?php the_field('some_1_link'); ?>"><?php the_field('some_1_text'); ?></a>
            <a href="<?php the_field('some_2_link'); ?>"><?php the_field('some_2_text'); ?></a>
        </div>
        <div class="location-info">
            <h3>Location</h3>
            <p><?php the_field('location_place'); ?></p>
            <p><?php the_field('location_street'); ?></p>
            <p><?php the_field('location_city'); ?></p>
        </div>
    </div>
    <hr class="footer-line">
    <div class="copyright">
        <p>&copy; <?php echo date('Y'); ?> <?php the_field('association'); ?>. All rights reserved.</p>
    </div>
</footer>
