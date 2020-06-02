<?php

class  BCT_Deactivator {
    public static function deactivate(){
        delete_option('bct_config');
    }
}