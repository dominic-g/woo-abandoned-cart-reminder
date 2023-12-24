<?php
// Enqueue scripts for the dashboard page
add_action('admin_enqueue_scripts', 'recover_deserted_carts_enqueue_scripts');

function recover_deserted_carts_enqueue_scripts($hook_suffix) {

    if (
        $hook_suffix === 'toplevel_page_recover-deserted-carts-dashboard'
        || $hook_suffix === 'toplevel_page_recover-deserted-carts-settings'
        || $hook_suffix === 'toplevel_page_recover-deserted-carts-email'
        ){
        // Check if the current page is the dashboard page
        $dashboard_path_css = 'assets/css/modern.css';
        wp_enqueue_style('modern-css', WACR_PLUGIN_URL . $dashboard_path_css, array(), filemtime(WACR_PLUGIN_DIR . $dashboard_path_css));
    }
    /*if ($hook_suffix === 'toplevel_page_recover-deserted-carts-dashboard') {
        // wp_enqueue_script('apex-charts', 'https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.45.1/apexcharts.min.js', array('jquery'), '1.0', true);

        wp_enqueue_script('jsvectormap', 'https://cdnjs.cloudflare.com/ajax/libs/jsvectormap/1.4.3/js/jsvectormap.min.js', array('jquery'), '1.0', true);
        wp_enqueue_script('chart', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js', array('jquery'), '1.0', true);
        wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', array(), '1.0');
        
        $dashboard_path = 'assets/js/dashboard.js';
        wp_enqueue_script('apex-charts-custom', WACR_PLUGIN_URL . $dashboard_path, array('jsvectormap','chart'), filemtime(WACR_PLUGIN_DIR . $dashboard_path), true);


        $dashboard_path_css = 'assets/css/dashboard.css';
        wp_enqueue_style('apex-charts-css', WACR_PLUGIN_URL . $dashboard_path_css, array('bootstrap-css'), filemtime(WACR_PLUGIN_DIR . $dashboard_path_css));
    }
    else if($hook_suffix === 'toplevel_page_recover-deserted-carts-settings'){
        wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', array(), '1.0');
        
        $settings_path_css = 'assets/css/settings.css';
        wp_enqueue_style('settings-css', WACR_PLUGIN_URL . $settings_path_css, array('bootstrap-css'), filemtime(WACR_PLUGIN_DIR . $settings_path_css));
    
    }
    else if($hook_suffix === 'toplevel_page_recover-deserted-carts-email'){
        wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', array(), '1.0');
        
        $email_path_css = 'assets/css/email.css';
        wp_enqueue_style('email-css', WACR_PLUGIN_URL . $email_path_css, array('bootstrap-css'), filemtime(WACR_PLUGIN_DIR . $email_path_css));
    
    }*/
}