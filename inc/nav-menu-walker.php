<?php
class Nav_menu_walker extends Walker_Nav_Menu {
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        // print_r($item);
        // print_r($args);
        // echo '$output------>' . $output;

        if (empty($output)) {
            $output .= '<li class="spa"></li>';
        }
        $class_names = $value = '';
 
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
 
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        // print_r($item);
        if (!$item->menu_item_parent) {
            if (strlen($item->title) <= 8) {
                $class_names = ' class="short '. esc_attr( $class_names ) . '"';
            } else {
                $class_names = ' class="long '. esc_attr( $class_names ) . '"';
            }
        } else {
            // print_r($item);
            // if (!$item->post_parent) {
            //     if (strlen($item->title) <= 8) {
            //         $class_names = ' class="short '. esc_attr( $class_names ) . '"';
            //     } else {
            //         $class_names = ' class="long '. esc_attr( $class_names ) . '"';
            //     }
            // } else {
            //     $class_names = ' class="'. esc_attr( $class_names ) . '"';
            // }
            $class_names = ' class="'. esc_attr( $class_names ) . '"';
        }

        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
 
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';
 
        if($depth != 0) {
            $description = $append = $prepend = "";
        }
 
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
        $item_output .= $description.$args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
 
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    // function start_lvl( &$output, $depth = 0, $args = array() ) {
    //     // print_r($args);
    // //   $indent = str_repeat("\t", $depth);
    // //   $output .= "\n$indent<ul class=\"child-menu\">\n";
    // }

    // public function end_lvl( &$output, $depth = 0, $args = array() ) {
    //     $n = '\n';      // 原始碼跳行
    //     $indent = '\t'; // 原始碼跳空格
    
    //     $output .= "$indent</ul>{$n}";
    // }
}

?>