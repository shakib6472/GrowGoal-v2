<?php




echo '<div class="inner">';
    if ( has_post_thumbnail() && get_the_post_thumbnail_url() ) :
        echo '<div class="thumbnail">';
            echo '<a href="' . esc_url( get_the_permalink() ) . '">';
                echo $this->render_image( get_post_thumbnail_id( get_the_id() ), $settings ); 
            echo '</a>';

            // if ( $start_time && $label_on_off != 'yes' ) :
            //     echo '<div class="event-time">';
            //         echo '<span><i class="flaticon-time"></i>' . esc_html( $time_start . ' - ' . $time_end ) . '</span>';
            //     echo '</div>';
            // endif;
            if ( $start_time ) :
                echo '<span class="edubin-event-date">';
                    echo '<span>'.esc_html( tribe_get_start_time ( $event_id,  'd') ).'</span>';
                    echo '<span>'.esc_html( tribe_get_start_time ( $event_id,  'M') ).'</span>';
                echo '</span>';
        
            endif;
            if ( $label_on_off == 'yes' ) :
                echo '<div class="event-label">';
                    echo '<span>' . esc_html( $label_text ) . '</span>';
                echo '</div>';
            endif;


        echo '</div>';
    endif;

    echo '<div class="content">';
        // echo '<div class="event-date">';
        //     printf( '%s', $event->is_free() ? __( 'Free', 'edubin' ) : wpems_format_price( $event->get_price() ) );
        // echo '</div>';
        if ( $event_vanue ) :
            
            echo '<div class="edubin-event-meta">';
                echo '<span class="event-location"><i class="flaticon-location"></i>'. esc_html( $event_vanue ).'</span>';
            echo '</div>';

        endif;

        the_title( '<h4 class="event-title"><a href="' . esc_url( get_the_permalink() ) . '" class="post-link">', '</a></h4>' );

        // if ( $settings['enable_excerpt'] === 'yes' ) : 
        //     echo wpautop( wp_trim_words( wp_kses_post( get_the_excerpt() ), esc_html( $settings['excerpt_length'] ), esc_html( $settings['excerpt_end'] ) ) );
        // endif;

        

    echo '</div>';
echo '</div>';