<?php

/**
 * La funcionalidad específica de administración del plugin.
 *
 * @link       https://beziercode.com.co
 * @since      1.0.0
 *
 * @package    Beziercode_blank
 * @subpackage Beziercode_blank/admin
 */

/**
 * Define el nombre del plugin, la versión y dos métodos para
 * Encolar la hoja de estilos específica de administración y JavaScript.
 * 
 * @since      1.0.0
 * @package    BC THEME
 * @subpackage BC THEME/admin
 * @author     Gilbert Rodríguez <email@example.com>
 * 
 * @property string $theme_name
 * @property string $version
 */
class BCT_Admin {
    
    /**
	 * El identificador único de éste plugin
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $theme_name  El nombre o identificador único de éste plugin
	 */
    private $theme_name;
    
    /**
	 * Versión actual del plugin
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version  La versión actual del plugin
	 */
    private $version;
    
    /**
	 * Objeto registrador de menús
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      object    $build_menupage  Instancia del objeto BCT_Build_Menupage
	 */
    private $build_menupage;
    
    /**
	 * Objeto BCT_Normalize
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      object    $normalize Instancia del objeto BCT_Normalize
	 */
    private $normalize;
    
    /**
	 * Objeto BCT_Helpers
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      object    $helpers Instancia del objeto BCT_Helpers
	 */
    private $helpers;
    
    /**
     * @param string $theme_name nombre o identificador único de éste plugin.
     * @param string $version La versión actual del plugin.
     */
    public function __construct( $theme_name, $version ) {
        
        $this->theme_name = $theme_name;
        $this->version = $version;
        $this->build_menupage = new BCT_Build_Menupage();
        $this->normalize = new BCT_Normalize;
        
    }
    
    /**
	 * Registra los archivos de hojas de estilos del área de administración
	 *
	 * @since    1.0.0
     * @access   public
     *
     * @param    string   $hook    Devuelve el texto del slug del menú con el texto toplevel_page
	 */
    public function enqueue_styles( $hook ) {
        
        /**
         * Una instancia de esta clase debe pasar a la función run()
         * definido en BCT_Cargador como todos los ganchos se definen
         * en esa clase particular.
         *
         * El BCT_Cargador creará la relación
         * entre los ganchos definidos y las funciones definidas en este
         * clase.
		 */
        
        /**
         * bct-admin.css
         * Archivo de hojas de estilos principales
         * de la administración
         */
		wp_enqueue_style( 'bct_wordpress_icons_css', BCT_DIR_URI . 'admin/css/bct-wordpress.css', array(), $this->version, 'all' );
        
        /**
         * Condicional para controlar la carga de los archivos
         * solamente en la página del plugin
         */
        if( $hook != 'toplevel_page_bct-opt' ) {
            return;
        }
        /**
         * Framework Materializecss
         * https://materializecss.com/getting-started.html
         * Material Icons Google
         * https://material.io/icons
         */
        wp_enqueue_style( 'bct_material_icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), $this->version, 'all' );
        wp_enqueue_style( 'bct_materialize_admin_css', BCT_DIR_URI.'helpers/materialize/css/materialize.min.css', array(), '1.0.0-rc.1', 'all' );

        /**
         * bct-admin.css
         * Archivo de hojas de estilos principales
         * de la administración
         */
        wp_enqueue_style( $this->theme_name, BCT_DIR_URI . 'admin/css/bct-admin.css', array(), $this->version, 'all' );

    }
    
    /**
	 * Registra los archivos Javascript del área de administración
	 *
	 * @since    1.0.0
     * @access   public
     *
     * @param    string   $hook    Devuelve el texto del slug del menú con el texto toplevel_page
	 */
    public function enqueue_scripts( $hook ) {
        
        /**
         * Una instancia de esta clase debe pasar a la función run()
         * definido en BCT_Cargador como todos los ganchos se definen
         * en esa clase particular.
         *
         * El BCT_Cargador creará la relación
         * entre los ganchos definidos y las funciones definidas en este
         * clase.
		 */
        
        /**
         * Condicional para controlar la carga de los archivos
         * solamente en la página del plugin
         */
        if( $hook != 'toplevel_page_bct-opt' ) {
            return;
        }
        
        wp_enqueue_media();
        
        /**
         * bct-admin.js
         * Archivo Javascript principal
         * de la administración
         */

        /**
         * Framework Materializecss
         * https://materializecss.com/getting-started.html
         * Material Icons Google
         */
        wp_enqueue_script('bct_materialize_admin_js', BCT_DIR_URI . 'helpers/materialize/js/materialize.min.js', ['jquery'], '1.0.0-rc.1', true);

        /**
         * Font Awesome 5.0.6
         */
        wp_enqueue_style( 'bct_fontawesome_css', BCT_DIR_URI.'helpers/fontawesome/css/fontawesome-all.min.css', array(), '5.0.6', 'all' );

        /**
         * bct-admin.js
         * Archivo JavaScript principal
         * de la administración
         */
        wp_enqueue_script( $this->theme_name, BCT_DIR_URI . 'admin/js/bct-admin.js', [ 'jquery' ], $this->version, true );
        
        /**
         * Lozalizando el archivo Javascript
         * principal del área de administración
         * para pasarle el objeto "bcpg" con los parámetros:
         * 
         * @param bcpg.url        Url del archivo admin-ajax.php
         * @param bcpg.seguridad  Nonce de seguridad para el envío seguro de datos
         */
        wp_localize_script(
            $this->theme_name,
            'bctAdmin',
            [
                'url'       => admin_url( 'admin-ajax.php' ),
                'seguridad' => wp_create_nonce( 'bct_seg' )
            ]
        );
        
    }
    
    /**
	 * Registra los menús del plugin en el
     * área de administración
	 *
	 * @since    1.0.0
     * @access   public
	 */
    public function add_menu() {
        
        $this->build_menupage->add_menu_page(
            __( 'BCT Opciones', 'bct-opt' ),
            __( 'BCT Opciones', 'bct-opt' ),
            'manage_options',
            'bct-opt',
            [ $this, 'controlador_display_menu' ],
            'dashicons-bct',
            22
        );
        
        $this->build_menupage->run();
        
    }
    
    /**
	 * Controla las visualizaciones del menú
     * en el área de administración
	 *
	 * @since    1.0.0
     * @access   public
	 */
    public function controlador_display_menu() {
        
        require_once BCT_DIR_PATH . 'admin/partials/bct-admin-display.php';
        
    }
    
}




















