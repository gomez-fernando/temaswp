<?php

class  BCT_Activator {
    public static function activate(){
        $bct = get_option('bct_config');

        if(! $bct) {
            $bct = [

                "menuActivado"  => "global",

                "global"        => [
                    "cuerpo"        => "fullancho",
                    "logoUrl"       => "",
                    "textLogo"      => "",
                    "faviconUrl"    => "",
                    "apiGMaps"      => "",
                ],

                "header"        => [
                    "estilo"        => "defecto"
                ],

                "menu"          => [
                    "opciones"      => [ "show-border" => "show-border" ]
                ],

                "footer"        => [
                    "copyright"     => sprintf(
                        __( "Todos los derechos reservados. BezierCode Developers. @%d", "bct-opt" ),
                        date('Y')
                    ),
                    "posicion"  => "izquierda"
                ],

                "sidebars"      => [
                    "ancho"         => "20"
                ],

                "colores"       => [
                    "h1"            => "rgba(0,0,0,0.87)",
                    "h2"            => "rgba(0,0,0,0.87)",
                    "h3"            => "rgba(0,0,0,0.87)",
                    "h4"            => "rgba(0,0,0,0.87)",
                    "h5"            => "rgba(0,0,0,0.87)",
                    "h6"            => "rgba(0,0,0,0.87)",
                    "menu"          => [
                        "ativoColorEnlace"      => "rgba(0,0,0,0.87)",
                        "bg"                    => "rgba(0,0,0,0.87)",
                        "bgActivoColorEnlace"   => "rgba(0,0,0,0.87)",
                        "bgHoverColorEnlace"    => "rgba(0,0,0,0.87)",
                        "colorEnlace"           => "rgba(0,0,0,0.87)",
                        "hoverColorEnlace"      => "rgba(0,0,0,0.87)",
                    ],
                    "contenido"     => [
                        "bgBoton"               => "rgba(0,0,0,0.87)",
                        "bgHoverBoton"          => "rgba(0,0,0,0.87)",
                        "colorEnlace"           => "rgba(0,0,0,0.87)",
                        "colorHoverTextoBoton"  => "rgba(0,0,0,0.87)",
                        "colorTextoBoton"       => "rgba(0,0,0,0.87)",
                        "hoverColorEnlace"      => "rgba(0,0,0,0.87)"
                    ],
                    'footer'        => [
                        "bg"                    => "rgba(0,0,0,0.87)",
                        "copyrightBg"           => "rgba(0,0,0,0.87)"
                    ]
                ],

                "fuentes"       => [
                    "menu"          => [
                        "family"                => "Lato",
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                        "fontType"              => "googlefonts",
                        "variants"              => "100,100i,300,400,700,700i"
                    ],
                    "contenido"     => [
                        "family"                => "Roboto",
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                        "fontType"              => "googlefonts",
                        "variants"              => "300,400i,700"
                    ],
                    "cabeceras-p"   => [
                        "family"                => "Roboto",
                        "fontType"              => "googlefonts",
                        "variants"              => "300,300i,500,500i,700,900i"
                    ],
                    "cabeceras-s"   => [
                        "family"                => "Lato",
                        "fontType"              => "googlefonts",
                        "variants"              => "100i,300,400,700,700i,900,900i"
                    ],
                    "h1"            => [
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h2"            => [
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h3"            => [
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h4"            => [
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h5"            => [
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],
                    "h6"            => [
                        "tamano"                => "14",
                        "weightStyle"           => "400",
                        "lineHeight"            => "14",
                        "letterSpacing"         => "14",
                    ],

                ],

                "social"        => [
                    "behance"       => "",
                    "facebook"      => "",
                    "googleplus"    => "",
                    "instagram"     => "",
                    "linkedin"      => "",
                    "twitter"       => "",
                    "vimeo"         => "",
                    "youtube"       => ""
                ],

                "cssjs"         => [
                    "css"           => "",
                    "js"            => ""
                ]

            ];

            add_option('bct_config', $bct);
        }
    }
}
