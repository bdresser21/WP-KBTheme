
<?php

function get_search_query( $escaped = true ) {
    /**
     * Filters the contents of the search query variable.
     *
     * @since 2.3.0
     *
     * @param mixed $search Contents of the search query variable.
     */
    $query = apply_filters( 'get_search_query', get_query_var( 's' ) );
 
    if ( $escaped ) {
        $query = esc_attr( $query );
    }
    return $query;
}

; ?>