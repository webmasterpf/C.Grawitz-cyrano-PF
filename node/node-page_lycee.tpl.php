<!--______________NODE TPL POUR TdC PAGE LYCEE CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="pageLycee_col_G1">
     <?php if ($title): /*insertion du titre de la page et style differencié si besoin*/?>
     <h1 class="titre_pl"><?php print $title; ?></h1>

    <?php endif; ?>
      <br clear="all"/>
       <!-- Deco page-->
    <?php  print $node->field_image_deco_lycee[0]['view'] /*Image deco page lycee*/ ?>
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="pageLycee_col_G2">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
    <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>

</div>
<!--______________COLONNE GAUCHE 3________________ -->

<div id="pageLycee_col_G3">
     <?php print $picture; ?>



    <div class="content">



        <div id="bloc_docs_utiles_plycee">
               <?php  print views_embed_view('Fichiers_doc_joints','page_1',$view_args);/*Liste des fichiers joints*/ ?>
        </div>
        <br clear="all"/>
           <?php if ($node->field_vue_actus_lycee[0]['view']): ?>
        <div id="bloc-actu-lycee">
           <?php  print $node->field_vue_actus_lycee[0]['view'] /*Vue actus du lycée*/ ?>
        </div>
           <?php endif;?>
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