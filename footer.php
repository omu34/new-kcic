<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new-kcic
 */

?>

<footer id="colophon" class="site-footer" style="background-color: #F8F0ED;">
    <div class="site-info text-center">
        <b><a href="<?php echo esc_url(__('https://wordpress.org/', 'New-KCIC')); ?>">
                <?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf(esc_html__('Proudly powered by %s', 'New-KCIC'), 'GrowthLab');
                ?>
            </a>
            <span class="sep"> | </span>
            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf(esc_html__('Theme: %1$s by %2$s.', 'New-KCIC'), 'New-KCIC', '<a href="">@Bernard</a>');
            ?></b>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const textContainer = document.querySelector('.typewriter-text');
    const textToType = 'A unified customer engagement platform';

    function typeWriter(text, i, fnCallback) {
        if (i < text.length) {
            textContainer.innerHTML += text.charAt(i);
            setTimeout(function() {
                typeWriter(text, i + 1, fnCallback);
            }, 100);
        } else if (typeof fnCallback === 'function') {
            setTimeout(fnCallback, 700);
        }
    }

    function startTypingAnimation() {
        typeWriter(textToType, 0, function() {
            // You can add additional actions after the typing animation finishes
        });
    }

    startTypingAnimation();
});
</script>

</body>

</html>