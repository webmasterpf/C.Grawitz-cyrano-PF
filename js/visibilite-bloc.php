<?php
  $match = FALSE;

  // block is visible on the content types entered here
  $types = array('page_association' => 1, 'page_erreur' => 1, 'actu_association_revue_presse'=>1);
  $url = request_uri();

  if ((arg(0) == 'node') && is_numeric(arg(1))) {
    $node = node_load(arg(1));
    $match = isset($types[$node->type]);
  }

    // visible sur page contact
   if (strpos($url, "site/contact")) {
    $match = TRUE;
  }

  return $match;
?>
