<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--_____________NODE PAGE SORTIE_______________ -->
    <?php if (!$page): ?>
      <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
      <pre> <?php //print_r($node); ?> </pre>
  
<div id="galerie-node"><?php print $boxes;  ?> </div>
    <div class="content">
      <?php //print $content; ?>
 <?php //affichage corps du texte
     print $node->content['body']['#value'] ?>
        
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

  </div> <!-- /node-inner -->
</div> <!-- /node-->