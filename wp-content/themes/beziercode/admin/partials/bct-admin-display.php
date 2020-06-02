<div id="bct-main" class="row">
    <div class="col s12">
        <!--        Header-->
        <div class="row p-relative mb0">

            <!-- Botón guardar cambios -->
            <button type="button" id="bct-guardar" class="btn-bct bct-bg-verde">
                <?php _e('Guardar', 'bct-opt') ?>
                <i class="material-icons">save</i>
            </button>
            <div class="col s12">

                <?php
                $bct_img_calles = BCT_DIR_URI . 'admin/img/calles.jpg';
                $bg_gradient = "
                    background: rgba(255,0,255,1), url($bct_img_calles);
                    background: -moz-linear-gradient(left, rgba(255,0,255,1) 0%, rgba(0,170,255,1) 100%), url($bct_img_calles);
                    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,0,255,1)), color-stop(100%, rgba(0,170,255,1))), url($bct_img_calles);
                    background: -webkit-linear-gradient(left, rgba(255,0,255,1) 0%, rgba(0,170,255,1) 100%), url($bct_img_calles);
                    background: -o-linear-gradient(left, rgba(255,0,255,1) 0%, rgba(0,170,255,1) 100%), url($bct_img_calles);
                    background: -ms-linear-gradient(left, rgba(255,0,255,1) 0%, rgba(0,170,255,1) 100%), url($bct_img_calles);
                    background: linear-gradient(to right, rgba(255,0,255,1) 0%, rgba(0,170,255,1) 100%), url($bct_img_calles);
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff00ff', endColorstr='#00aaff', GradientType=1 );
                ";
                ?>

                <div class="bct-header" style="<?= $bg_gradient; ?>">
                    <div class="bct-port">
                        <img src="<?= BCT_DIR_URI; ?>admin/img/isotipo-beziercode.svg" alt="">
                    </div>
                    <div class="bct-header-title">
                        <h4> <i class="material-icons">settings</i> <span>Global</span> </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        <!-- Items selección config - Column Izquierda -->
            <div class="col s3">
                <ul class="bct-menu">
                    <li>
                        <a href="#bct-global" data-menuActivado="global" class="activo">
                            <i class="material-icons">settings</i> <span><?php _e('Global', 'bct-opt') ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="#bct-header" data-menuActivado="header" class="">
                            <i class="material-icons">settings</i> <span><?php _e('Header', 'bct-opt') ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>