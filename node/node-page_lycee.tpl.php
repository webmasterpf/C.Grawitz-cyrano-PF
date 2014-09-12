<!--______________NODE TPL POUR TdC PAGE LYCEE CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="col_G1" class="pageLycee_content_col_G1">

     <?php if ($title): /*insertion du titre de la page et style differencié si besoin*/?>
     <h1 class="titre_pl"><?php print $title; ?></h1>

    <?php endif; ?>

        
      <br clear="all"/>
       <!-- Deco page-->
    <?php  print $node->field_image_deco_lycee[0]['view'] /*Image deco page lycee*/ ?>

        <?php
              $theme_path = drupal_get_path('theme', 'cyrano_cg');
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="col_G2" class="pageLycee_content_col_G2">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
    <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>


      <?php if ($node->field_video_lycee[0]['view']): ?>
        <div id="video-plycee">
            <?php  print $node->field_video_lycee[0]['view'];?>
        </div>
           <?php endif;?>

      <?php
              $theme_path = drupal_get_path('theme', 'cyrano_cg');
              include ($theme_path.'/includes/inc_region_col_G2.php');
              ?>

</div>
<!--______________COLONNE GAUCHE 3________________ -->

<div id="col_G3" class="pageLycee_content_col_G3">
     <?php print $picture; ?>



    <div class="content">


        <?php if ($node->field_fichier_joint_lycee[0]['view'] 
                OR $node->field_lien_page_lycee[0]['view']): ?>
        <div id="fichier-joint-plycee">
            <h3>Utile</h3>
           <?php  print $node->field_fichier_joint_lycee[0]['view'];?>
             <?php  print $node->field_lien_page_lycee[0]['view'];?>

        </div>
           <?php endif;?>
   
        <br clear="all"/>
          <?php
              $theme_path = drupal_get_path('theme', 'cyrano_cg');
              include ($theme_path.'/includes/inc_vue_grawitz_actus.php');
              ?>
         <br clear="all"/>
        <?php
              $theme_path = drupal_get_path('theme', 'cyrano_cg');
              include ($theme_path.'/includes/inc_region_col_G3.php');
              ?>
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?>
      <div class="links"> <?php //print $links; ?></div>
    <?php endif; ?>

</div>


  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->