<?php
/* Ce template permet la création d'un layout multicolonne pour le spages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________ contenu_ape NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         * <div id="colonne-1" class="CHOIX_DU_LAYOUT">
         */?>

            <div id="col_G1" class="cape_content_col_G1">
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>

                  <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_vdl_infos_utiles.php');
              ?>


             <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); //listage des variables du $content  ?> </pre>-->
        <div id="col_G2" class="cape_content_col_G2">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                
                  <?php if ($node->field_illustration_vdl[0]['view']): ?>
            <div id="illustration-vdl">
                    <?php  print $node->field_illustration_vdl[0]['view']  ?>
            </div>
            <?php endif;?>


                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>

                   <?php if ($node->field_video_vdl[0]['view']): ?>
            <div id="video-vdl">
                    <?php  print $node->field_video_vdl[0]['view']  ?>
            </div>
            <?php endif;?>

                   <?php if ($node->field_choix_galerie_vdl[0]['view']): ?>
            <div id="galerie-vdl">
                    <?php  print $node->field_choix_galerie_vdl[0]['view']  ?>
            </div>
            <?php endif;?>

             <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G2.php');
              ?>

            </div>

        </div>

        <!--______________COLONNE 3________________ -->
        <div id="col_G3" class="cape_content_col_G3">


             <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_vue_autre_event.php');
              ?>

             <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G3.php');
              ?>

        </div>

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->