<?php
include_once( __DIR__. '/logo.php' );
include_once( __DIR__. '/script.php' );
include_once( __DIR__. '/pages/dashboard.php' );
include_once( __DIR__. '/pages/email.php' );
include_once( __DIR__. '/pages/settings.php' );
add_action('admin_menu', 'recover_deserted_carts_menu');

function recover_deserted_carts_menu() {
    add_menu_page(
        'Recover Carts',
        'Recover Carts',
        'manage_options',
        'recover-deserted-carts-dashboard',
        'recover_deserted_carts_dashboard',
        PLUGIN_LOGO
    );

    add_submenu_page(
        'recover-deserted-carts-dashboard',
        'Emails',
        'Emails',
        'manage_options',
        'recover-deserted-carts-emails',
        'recover_deserted_carts_emails'
    );

    add_submenu_page(
        'recover-deserted-carts-dashboard',
        'Settings',
        'Settings',
        'manage_options',
        'recover-deserted-carts-settings',
        'recover_deserted_carts_settings'
    );
}
// Dashboard Page
function recover_deserted_carts_dashboard_() {
    // Dashboard code here
?>
    <div class="main">
        <div class="row sparkboxes mt-4 mb-4">
            <div class="col-md-4">
            <div class="box box1">
                <div id="spark1"></div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="box box2">
                <div id="spark2"></div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="box box3">
                <div id="spark3"></div>
            </div>
            </div>
        </div>

        <div class="row mt-5 mb-4">
            <div class="col-md-6">
            <div class="box">
                <div id="bar"></div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="box">
                <div id="donut"></div>
            </div>
            </div>
        </div>

        <div class="row mt-4 mb-4">
            <div class="col-md-6">
            <div class="box">
                <div id="area"></div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="box">
                <div id="line"></div>
            </div>
            </div>
        </div>
    </div>
<?php
}
