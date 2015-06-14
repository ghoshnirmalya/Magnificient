                    <div class="logo-container">                                
                        <?php if ( get_theme_mod( 'foundationbuddy_logo' ) ) : ?>
                            <a class="navmenu-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                                <img src='<?php echo esc_url( get_theme_mod( 'foundationbuddy_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                            </a>
                        <?php else : ?>
                            <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                        <?php endif; ?>
                    </div>