<?php

/**
 * Define la funcionalidad de internacionalización
 *
 * Carga y define los archivos de internacionalización de este plugin para que esté listo para su traducción.
 *
 * @link       https://beziercode.com.co
 * @since      1.0.0
 *
 * @package    BC THEME
 * @subpackage BC THEME/includes
 */

/**
 * Ésta clase define todo lo necesario durante la activación del plugin
 *
 * @since      1.0.0
 * @package    BC THEME
 * @subpackage BC THEME/includes
 * @author     Gilbert Rodríguez <email@example.com>
 */
class BCT_i18n {
    
    /**
	 * Carga el dominio de texto (textdomain) del plugin para la traducción.
	 *
     * @since    1.0.0
     * @access public static
	 */    
    public function load_theme_textdomain() {
        
        $textdomain = "bct-opt";
        
        load_theme_textdomain(
            $textdomain,
            false,
            BCT_DIR_PATH . 'lang'
        );
        
        $locale = apply_filters( 'theme_locale', is_admin() ? get_user_locale() : get_locale(), $textdomain );
        
        load_textdomain( $textdomain, get_theme_file_path( "lang/$textdomain-$locale.mo" ) );
        
    }

    public function load_plugin_textdomain(){

    }
    
}