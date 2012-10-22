<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base,
 * en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
           <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pole_content"><?php print $title; ?></h1>
    
    <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

          <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>
      <br clear="all"/>
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         */?>
        <div id="col_G1" class="pagePole_content_col_G1">
       
             <?php
              $theme_path = drupal_get_path('theme', 'cyrano_cg');
              include ($theme_path.'/includes/inc_pole_liste_MSAC.php');
              ?>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
         <div id="col_G2" class="pagePole_content_col_G2">

          <?php
              $theme_path = drupal_get_path('theme', 'cyrano_cg');
              include ($theme_path.'/includes/inc_pole_liste_MRSP.php');
              ?>

        

        </div>

        <!--______________COLONNE 3________________ -->
         <div id="col_G3" class="pagePole_content_col_G3">
           <?php
              $theme_path = drupal_get_path('theme', 'cyrano_cg');
              include ($theme_path.'/includes/inc_pole_liste_FC.php');
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