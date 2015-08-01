<?php
if ( ! function_exists( 'magnificient_sidebar_widgets' ) ) :

    function magnificient_sidebar_widgets() {

        /* ------------------------------------------------------------------------- *
         *  Sidebar-1 (Primary Sidebar)
        /* ------------------------------------------------------------------------- */
            register_sidebar(array('name'=> 'Sidebar 1',
                'id' => 'sidebar-1',
                'description' => __( 'Displays the primary sidebar. If only any layout with a single sidebar is chosen, this sidebar is shown.  This sidebar is the one which is always on the left side if any layout with a dual sidebar is choosen.', 'magnificient' ),
                'before_widget' => '<article id="%1$s" class="panel widget %2$s">',
                'after_widget' => '</article>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            ));
        
        /* ------------------------------------------------------------------------- *
         *  Sidebar-2 (Secondary Sidebar)
        /* ------------------------------------------------------------------------- */
            register_sidebar(array('name'=> 'Sidebar 2',
                'id' => 'sidebar-2',
                'description' => __( 'Displays the secondary sidebar. If only any layout with a dual sidebar is chosen, this sidebar is shown in addition to the primary sidebar (Sidebar-1). This sidebar is the one which is always on the right side.', 'magnificient' ),
                'before_widget' => '<article id="%1$s" class="panel widget %2$s">',
                'after_widget' => '</article>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            ));
        
        /* ------------------------------------------------------------------------- *
         *  Footer-1 Sidebar
        /* ------------------------------------------------------------------------- */
            register_sidebar(array('name'=> 'Footer 1',
                'id' => 'footer-1',
                'description' => __( 'This is the footer which is always on the extreme left side of the footer. This is the first footer from the left if all the footer sidebars are activated.', 'magnificient' ),
                'before_widget' => '<article id="%1$s" class="panel widget %2$s">',
                'after_widget' => '</article>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            ));
        
        /* ------------------------------------------------------------------------- *
         *  Footer-2 Sidebar
        /* ------------------------------------------------------------------------- */
            register_sidebar(array('name'=> 'Footer 2',
                'id' => 'footer-2',
                'description' => __( 'This is the second footer from the left if all the footer sidebars are activated. If the Footer-1 and Footer-2 sidebars are activated, this footer-sidebar is shown on the right.', 'magnificient' ),
                'before_widget' => '<article id="%1$s" class="panel widget %2$s">',
                'after_widget' => '</article>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            ));
        
        /* ------------------------------------------------------------------------- *
         *  Footer-3 Sidebar
        /* ------------------------------------------------------------------------- */
            register_sidebar(array('name'=> 'Footer 3',
                'id' => 'footer-3',
                'description' => __( 'This is the third footer from the left if all the footer sidebars are activated. If the Footer-1, Footer-2 and Footer-3 sidebars are activated, this footer-sidebar is shown on the right.', 'magnificient' ),
                'before_widget' => '<article id="%1$s" class="panel widget %2$s">',
                'after_widget' => '</article>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            ));
                
        /* ------------------------------------------------------------------------- *
         *  Footer-4 Sidebar
        /* ------------------------------------------------------------------------- */
            register_sidebar(array('name'=> 'Footer 4',
                'id' => 'footer-4',
                'description' => __(  'This is the fourth footer from the left if all the footer sidebars are activated. This footer is always on the right side of the footer.', 'magnificient' ),
                'before_widget' => '<article id="%1$s" class="panel widget %2$s">',
                'after_widget' => '</article>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            ));
        
    }

add_action( 'widgets_init', 'magnificient_sidebar_widgets' );

endif;
?>