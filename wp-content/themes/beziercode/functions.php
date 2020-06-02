<?php

global $wpdb;

$bct_dir_path = ( substr( get_template_directory(),     -1 ) === '/' ) ? get_template_directory()     : get_template_directory()     . '/';
$bct_dir_uri  = ( substr( get_template_directory_uri(), -1 ) === '/' ) ? get_template_directory_uri() : get_template_directory_uri() . '/';

define( 'BCT_DIR_PATH', $bct_dir_path );
define( 'BCT_DIR_URI',  $bct_dir_uri  );

require_once BCT_DIR_PATH . 'includes/class-bct-master.php';

function run_bct_master() {
    
    $bcpg_master = new BCT_Master;
    $bcpg_master->run();
    
}

run_bct_master();





























