<ul class="social-icons">

<?php
if( get_theme_mod( 'shopstar-social-email', customizer_library_get_default( 'shopstar-social-email' ) ) != '' ) :
    echo '<li><a href="' . esc_attr( 'mailto:' . antispambot( get_theme_mod( 'shopstar-social-email' ), 1 ) ) . '" target="_blank" rel="noopener" title="' . __( 'Send us an email', 'shopstar' ) . '" class="email"><i class="otb-fa otb-fa-envelope-o"></i></a></li>';
endif;

if( get_theme_mod( 'shopstar-social-skype', customizer_library_get_default( 'shopstar-social-skype' ) ) != '' ) :
    echo '<li><a href="skype:' . esc_attr( get_theme_mod( 'shopstar-social-skype' ) ) . '?userinfo" rel="noopener" title="' . __( 'Contact us on Skype', 'shopstar' ) . '" class="skype"><i class="otb-fa otb-fa-skype"></i></a></li>';
endif;

if( get_theme_mod( 'shopstar-social-tumblr', customizer_library_get_default( 'shopstar-social-tumblr' ) ) != '' ) :
    echo '<li><a href="' . esc_url( get_theme_mod( 'shopstar-social-tumblr' ) ) . '" target="_blank" rel="noopener" title="' . __( 'Find us on Tumblr', 'shopstar' ) . '" class="tumblr"><i class="otb-fa otb-fa-tumblr"></i></a></li>';
endif;

if( get_theme_mod( 'shopstar-social-flickr', customizer_library_get_default( 'shopstar-social-flickr' ) ) != '' ) :
    echo '<li><a href="' . esc_url( get_theme_mod( 'shopstar-social-flickr' ) ) . '" target="_blank" rel="noopener" title="' . __( 'Find us on Flickr', 'shopstar' ) . '" class="flickr"><i class="otb-fa otb-fa-flickr"></i></a></li>';
endif;
?>

</ul>
