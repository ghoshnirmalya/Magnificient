<?php
/* ------------------------------------------------------------------------- *
 * The template for displaying advertisements in the footer. If the number of
 * advertisements in the footer is set to 4 from the 'Theme Options', then
 * only this page is called. This page is called from 'footer.php'.
 /* ------------------------------------------------------------------------- */
?>
<?php
/* ------------------------------------------------------------------------- *
 * Setting up default variables
 /* ------------------------------------------------------------------------- */
    $magnificient_footer_advertisement_one_link = '';
    $magnificient_footer_advertisement_two_link = '';
    $magnificient_footer_advertisement_three_link = '';
    $magnificient_footer_advertisement_four_link = '';
?>

<div class="large-3 columns footer-ads-container">
        <?php
            if ( get_theme_mod( 'magnificient_footer_advertisement_one' ) ) {
                if ( get_theme_mod( 'magnificient_footer_advertisement_one_link' ) ) {
                    $magnificient_footer_advertisement_one_link = get_theme_mod( 'magnificient_footer_advertisement_one_link' );
                }
                    $magnificient_footer_advertisement_one = '<a href="'. $magnificient_footer_advertisement_one_link . '"><img src="'.esc_url( get_theme_mod( 'magnificient_footer_advertisement_one' ) ).'"></a>';
                    echo $magnificient_footer_advertisement_one;
            }
        ?>
</div>

<div class="large-3 columns footer-ads-container">
        <?php
            if ( get_theme_mod( 'magnificient_footer_advertisement_two' ) ) {
                if ( get_theme_mod( 'magnificient_footer_advertisement_two_link' ) ) {
                    $magnificient_footer_advertisement_two_link = get_theme_mod( 'magnificient_footer_advertisement_two_link' );
                }
                    $magnificient_footer_advertisement_two = '<a href="'. $magnificient_footer_advertisement_two_link . '"><img src="'.esc_url( get_theme_mod( 'magnificient_footer_advertisement_two' ) ).'"></a>';
                    echo $magnificient_footer_advertisement_two;
            }
        ?>
</div>

<div class="large-3 columns footer-ads-container">
        <?php
            if ( get_theme_mod( 'magnificient_footer_advertisement_three' ) ) {
                if ( get_theme_mod( 'magnificient_footer_advertisement_three_link' ) ) {
                    $magnificient_footer_advertisement_three_link = get_theme_mod( 'magnificient_footer_advertisement_three_link' );
                }
                    $magnificient_footer_advertisement_three = '<a href="'. $magnificient_footer_advertisement_three_link . '"><img src="'.esc_url( get_theme_mod( 'magnificient_footer_advertisement_three' ) ).'"></a>';
                    echo $magnificient_footer_advertisement_three;
            }
        ?>
</div>

<div class="large-3 columns footer-ads-container">
        <?php
            if ( get_theme_mod( 'magnificient_footer_advertisement_four' ) ) {
                if ( get_theme_mod( 'magnificient_footer_advertisement_four_link' ) ) {
                    $magnificient_footer_advertisement_four_link = get_theme_mod( 'magnificient_footer_advertisement_four_link' );
                }
                    $magnificient_footer_advertisement_four = '<a href="'. $magnificient_footer_advertisement_four_link . '"><img src="'.esc_url( get_theme_mod( 'magnificient_footer_advertisement_four' ) ).'"></a>';
                    echo $magnificient_footer_advertisement_four;
            }
        ?>
</div>