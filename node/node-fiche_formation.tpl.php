<!--______________NODE TPL POUR TdC FICHE FORMATION CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="col_G1" class="ficheform_content_col_G1">

     <?php if ($title): /*insertion du titre de la page et style differencié si besoin*/?>
     <h1 class="titre_ficheform"><?php print $title; ?></h1>

    <?php endif; ?>

    <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_ficheform_infos_utiles.php');
              ?>
     
  <br clear="all"/>
       <div class="taxo_ficheform">Cat&eacute;gorie : <?php print $my_taxo_ficheform; ?></div>
       
     <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
     
    

       
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="col_G2" class="ficheform_content_col_G2">
    
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

      <!-- Deco page-->
      <div id="deco-ficheform">
    <?php  print $node->field_deco_ficheform[0]['view'] /*Image deco*/ ?>
      </div>
      
      <div id="philo-ficheform">
          <h2>
       <?php  print $node->field_philo_ficheform[0]['view'] /*Philo formation*/ ?>
          </h2>    </div>

       <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G2.php');
              ?>

</div>
<!--______________COLONNE GAUCHE 3________________ -->

<div id="col_G3" class="ficheform_content_col_G3">
     <?php print $picture; ?>



    <div class="content">

        <div id="content-ficheform-gauche">
 <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>
        </div>

        <div id="content-ficheform-droite">
         <?php  print $node->field_ficheform_2[0]['view'] /*Image deco page lycee*/ ?>
        </div>
    
         <br clear="all"/>
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

</div>
 <br clear="all"/>

  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->