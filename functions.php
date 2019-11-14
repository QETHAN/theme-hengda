<?php 
    // 自定义函数
    function hengda_register_nav() {
        register_nav_menus(array(
            'nav-1' => '顶部导航，用于网页的顶部',
            'nav-2' => '底部导航，用于网页的底部'
        ));
        include get_theme_file_path() . '/inc/nav-menu-walker.php';
    }
    add_action( 'after_setup_theme', 'hengda_register_nav' );

    // 判断是父分类还是子分类
    function hengda_get_category_parent($parent) {
        global $cat;
        $parent=get_category($cat);
        if($parent->parent) {
            return true;
        } else {
            return false;
        }
    }

    // 获取分类下子分类  
    function hengda_getchild($id) {  
        $result = explode('/',get_category_children($id));  
        $childs = array();  
        foreach($result as $i) {
            if(!empty($i))$childs[] = get_category($i); 
        }  
        return $childs;  
    }

    // 获取文章内容
    function hengda_get_post_content_by_id($post_id = ''){
        $post_content = $post_id == '' ? get_the_content() : get_post($post_id)->post_content;
        return wpautop($post_content);
    }

    /**
     * 注册边栏
     */
    // 自定义的一个函数
    function hengda_register_sidebar() {
        // 注册一个边栏
        register_sidebar( array(
                    'name'          => '底部导航1',
                    'id'            => 'sidebar-1',
                    'description'   => '第1个边栏',
                    'before_widget' => '',
                    'after_widget'  => '',
                    'before_title'  => '<h2 class="widget-title">',
                    'after_title'   => '</h2>',
        ) );
    
        // 注册另一个边栏
        register_sidebar( array(
                    'name'          => '底部导航2',
                    'id'            => 'sidebar-2',
                    'description'   => '第2个边栏',
                    'before_widget' => '',
                    'after_widget'  => '',
                    'before_title'  => '<h2 class="widget-title">',
                    'after_title'   => '</h2>',
        ) );

        // 注册另一个边栏
        register_sidebar( array(
            'name'          => '底部导航3',
            'id'            => 'sidebar-3',
            'description'   => '第3个边栏',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );

        // 注册另一个边栏
        register_sidebar( array(
            'name'          => '底部导航4',
            'id'            => 'sidebar-4',
            'description'   => '第4个边栏',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
    // 将自定义函数挂载到widgets_init中
    add_action('widgets_init', 'hengda_register_sidebar');

    /**
     * 开启特色图像功能
     */
    function hengda_support_thumbnail() {
        // 声明使用特色图像功能
        add_theme_support('post-thumbnails');

        set_post_thumbnail_size( 106, 78, true );
    }
    add_action('after_setup_theme', 'hengda_support_thumbnail');
?>