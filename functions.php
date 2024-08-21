<?php
    /** Define */
    define( 'THEME_URL', get_stylesheet_directory() );
    define( 'CORE', THEME_URL . '/core' );
    /** Hook */

    // initialize custom settings for the website
    function initTheme() {
        // change the editor to old version
        add_filter('use_block_editor_for_post', '__return_false');
        add_filter('gutenberg_use_widgets_block_editor', '__return_false');
        add_filter('use_widgets_block_editor', '__return_false');
    }

    /** Functions */

    function remove_menus() {
        remove_menu_page( 'edit.php' );// 投稿.
		
		if ( current_user_can( 'editor' ) ) {// 投稿者の場合
			remove_menu_page( 'edit.php?post_type=page' ); // 固定.
			remove_menu_page( 'edit-comments.php' ); // コメント.
			remove_menu_page( 'tools.php' ); // ツール.
		}
    }

    function remove_admin_bar_menus( $wp_admin_bar ) {

			$wp_admin_bar->remove_menu( 'comments' ); // コメント.
			$wp_admin_bar->remove_menu( 'new-content' ); // 新規投稿.
	
	}

    function create_post_type() {
        register_post_type(
            'news',
            array(
                'label' => 'News',
                'labels' => array(
                    'all_items' => 'News一覧',
                    'add_new' => '新規追加',
                    'add_new_item' => 'News追加',
                    'edit_item' => 'News編集',
                    'new_item' => 'News追加',
                    'view_item' => 'Newsビュー',
                    'search_items' => 'News検索',
                    'not_found' => '見つかりません',
                    'not_found_in_trash' => 'ゴミ箱に見つかりません',
                ),
                'public' => true,
                'has_archive' => true,
                'menu_position' => 2,
                'supports' => [ 'title', 'thumbnail', 'editor' ],
            )
        );	
    }
    
    function create_taxonomy() {
        $labels = array(
            'name' => _x( 'カテゴリー', 'taxonomy general name' ),
            'singular_name' => _x( 'カテゴリー', 'taxonomy singular name' ),
            'search_items' =>  __( 'カテゴリー検索' ),
            'popular_items' => __( '人気のカテゴリ' ),
            'all_items' => __( 'カテゴリー一覧' ),
            'parent_item' => null,
            'parent_item_colon' => null,
            'edit_item' => __( 'カテゴリー編集' ), 
            'update_item' => __( 'カテゴリーの更新' ),
            'add_new_item' => __( 'カテゴリー新規追加' ),
            'menu_name' => __( 'カテゴリー' ),
        );
        
        // register_taxonomy('services', 'services' ,array(
        //     'labels'                     => $labels,
        //     'hierarchical'               => true,
        //     'rewrite'                    => array('slug' => 'services', 'with_front' => true),
        //     'public'                     => true,
        //     'show_ui'                    => true,
        //     'show_admin_column'          => true,
        //     'show_in_nav_menus'          => true,
        //     'show_tagcloud'              => true,
        // ));
    }
    
    function pagination_tdc($post_type, $wp_query, $paged, $cat = "", $filter = "") {
        if( $wp_query->max_num_pages <= 1 ) return;

        $paged = $paged;
        $max = intval( $wp_query->max_num_pages );
       
        if ( $paged >= 1 ) $links[] = $paged;

        if ( $paged >= 3 ) {
               $links[] = $paged - 1;
               $links[] = $paged - 2;
        }
       
        if ( ( $paged + 2 ) <= $max ) {
               $links[] = $paged + 2;
               $links[] = $paged + 1;
        }

        $html = '';
        $html .= '<div class="c-pagination" data-cat="'.$cat.'" role="navigation">' . "\n";
        
        if ( ! in_array( 1, $links ) ) {
            $class = 1 == $paged ? ' class="item current"' : '';
            if(!$class) {
                $html .= '<a class="item" href="'.build_url($post_type, $cat, 1, $filter).'" >1</a>';
            } else {
                $html .= '<a '.$class.'>1</a>';
            }
            if ( ! in_array( 2, $links ) )
                $html .= '<a>…</a>';
        }
        sort( $links );

        foreach ( (array) $links as $link ) {
            $class = $paged == $link ? ' class="item current"' : '';
            if(!$class) {
                $html .= '<a class="item" href="'.build_url($post_type, $cat, $link, $filter).'">'.$link .'</a>' . "\n";
            } else {
                $html .= '<a '.$class.'>'. $link .'</a>';
            }
        }

        if (!in_array( $max, $links ) ) {
            if ( ! in_array( $max - 1, $links ) ) $html .= '<a class="item">…</a>' . "\n";
            // $class = $paged == $max ? ' class="item"' : '';
            $html .= '<a class="item" href="'.build_url($post_type, $cat, $max, $filter).'">'.$max.'</a>';
        }

        $html .= '</div>' . "\n";
        return $html;
    }
    
    function build_url($post_type, $cat, $paged, $filter){
        if ($cat) {
            $url = home_url('/'.$post_type.'/page/'.$paged).'/?cate='.$cat;
        } elseif ($filter) {
            $url = home_url('/'.$post_type.'/page/'.$paged).'/?'.$filter;
        } else {
            $url = home_url('/'.$post_type.'/page/'.$paged);
        }
        return $url;
    }

    //
    function add_page_to_admin_menu() {
        // add_menu_page( 'Services', 'Services', 'manage_categories', 'post.php?post=14&action=edit', '','dashicons-admin-post', 2);
    }
    add_action( 'admin_menu', 'add_page_to_admin_menu' );

    add_action('init', 'initTheme');
    add_theme_support('post-thumbnails', array('post', 'news'));
    add_action( 'admin_menu', 'remove_menus' );
	add_action( 'admin_bar_menu', 'remove_admin_bar_menus', 999 );
    add_action('init', 'create_post_type');
    add_action( 'init', 'create_taxonomy', 0 );

    add_action('init', function() {
        // remove_post_type_support('news', 'editor');
        remove_post_type_support('page', 'editor');
    }, 99);

    add_filter('wpcf7_autop_or_not', '__return_false');
    add_filter('wpcf7_form_elements', function( $content ) {
        $dom = new DOMDocument();
        $dom->preserveWhiteSpace = false;
        $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
      
        $xpath = new DomXPath($dom);
        $spans = $xpath->query("//span[contains(@class, 'wpcf7-form-control-wrap')]" );
      
        foreach ( $spans as $span ) :
          $children = $span->firstChild;
          $span->parentNode->replaceChild( $children, $span );
        endforeach;
      
        return $dom->saveHTML();
      });


    // init bogo's language
    function bogo_use_flags_false() {
        return false;
    }
    add_filter( 'bogo_use_flags','bogo_use_flags_false');

    // Changed the notation of Bogo's language switcher
    // add_filter('bogo_language_switcher_links', function ($links) {
    //     for ($i = 0; $i < count($links); $i++) {
    //         if ('ja' === $links[$i]['locale']) { 
    //             $links[$i]['title'] = 'JP';
    //             $links[$i]['native_name'] = 'JP';
    //         }
    //         if ('en_US' === $links[$i]['locale']) {
    //             $links[$i]['title'] = 'EN';
    //             $links[$i]['native_name'] = 'EN';
    //         }
    //     }
    //     return $links;
    // });

    // Added Bogo multilingual post type
    function my_bogo_localizable_post_types( $localizable ) {
        // Add post type names to the array.
        $localizable[] = 'news';
        return $localizable;
    }
    add_filter( 'bogo_localizable_post_types', 'my_bogo_localizable_post_types' );

    // Location Bogo multilingual post type
    function your_plugins_loaded() {
        load_plugin_textdomain('yourpluginsdomain', false, basename( dirname( __FILE__ ) ) . '/languages' );
    }
    add_action( 'plugins_loaded', 'your_plugins_loaded' );


    // 
    function my_language_switcher($args = '') {
        $args = wp_parse_args($args, array(
            'echo' => false,
        ));
    
        // 並び替えるための言語コード順序　左から表示させたい順
        $order = ['ja', 'en_US'];
        $links = bogo_language_switcher_links($args);
        
        // 並び替え
        usort($links, function($a, $b) use ($order) {
            return array_search($a['locale'], $order) - array_search($b['locale'], $order);
        });
    
        $output = '<ul class="c-lang_list">';
    
        foreach ($links as $link) {
            $class = 'c-lang_items';
            if (get_locale() === $link['locale']) {
                $class .= ' current';
            }
    
            // 言語表示名をカスタマイズ
            if ($link['locale'] == "en_US") {
                $label = 'EN';
            } elseif ($link['locale'] == "ja") {
                $label = 'JP';
            } else {
                $label = $link['title']; // そのほかの場合はデフォルトの文字
            }

            $output .= '<li class="line">/</li>';
    
            if (!empty($link['href'])) {
                $atts = array(
                    'rel' => 'alternate',
                    'hreflang' => $link['lang'],
                    'href' => esc_url($link['href']),
                    'title' => esc_attr($label),
                    'class' => 'c-lang_link', // aタグにクラス名を付け加える
                );
                $link_attributes = bogo_format_atts($atts);
                $output .= sprintf('<li class="%s"><a %s>%s</a></li>', esc_attr($class), $link_attributes, esc_html($label));
            } else {
                $output .= sprintf('<li class="%s">%s</li>', esc_attr($class), esc_html($label));
            }
        }
    
        $output .= '</ul>';
    
        $output = apply_filters('my_language_switcher', $output, $args);
    
        if ($args['echo']) {
            echo $output;
        } else {
            return $output;
        }
    }
    
    // ショートコードを変更
    remove_shortcode('bogo', 'bogo_language_switcher'); // 元のショートコード削除
    add_shortcode('bogo', 'my_language_switcher'); // 新しい関数をショートコードに登録

    //
    // load post with ajax
    function blog_scripts() {
        // Register the script
        wp_register_script( 'custom-script', get_stylesheet_directory_uri(). '/assets/js/custom.js', array('jquery'), false, true );
     
        // Localize the script with new data
        $script_data_array = array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'noposts' => __('No older posts found', 'twentyfifteen'),
        );
        wp_localize_script( 'custom-script', 'ajax_posts', $script_data_array );
     
        // Enqueued script with localized data.
        wp_enqueue_script( 'custom-script' );
    }
    add_action( 'wp_enqueue_scripts', 'blog_scripts' );
    //
    function more_post_ajax(){
        $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 20;
        $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
        header("Content-Type: text/html");
    
        $args = array(
            'suppress_filters' => true,
            'post_type' => 'news',
            'posts_per_page' => $ppp,
            'paged'    => $page,
        );
    
        $loop = new WP_Query($args);
        $DayOfWeekNumber = date("w");
        $day = "mon";
        switch($DayOfWeekNumber)
        {
            case 0 : $day="sun"; break;
            case 1 : $day="mon"; break;
            case 2 : $day="tue"; break;
            case 3 : $day="wed"; break;
            case 4 : $day="thu"; break;
            case 5 : $day="fri"; break;
            case 6 : $day="sat"; break;
        }
        $out = '';
    
        if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
            $out .= 
            '<a href="'.get_the_permalink().'" class="c-news_items">
                <p>'. get_the_date('Y.m.d') . ' ' . $day.'</p>
                <h3>'.get_the_title().'</h3>  
            </a>';
        endwhile;
        endif;
        wp_reset_postdata();
        die($out);
    }
    
    add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
    add_action('wp_ajax_more_post_ajax', 'more_post_ajax');