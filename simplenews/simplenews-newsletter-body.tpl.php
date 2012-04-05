<?php

/**
 * @file
 * Default theme implementation to format the simplenews newsletter body.
 *
 * Copy this file in your theme directory to create a custom themed body.
 * Rename it to simplenews-newsletter-body--<tid>.tpl.php to override it for a
 * newsletter using the newsletter term's id.
 *
 * Available variables:
 * - $node: Newsletter node object
 * - $body: Newsletter body (formatted as plain text or HTML)
 * - $title: Node title
 * - $language: Language object
 *
 * @see template_preprocess_simplenews_newsletter_body()
 */
?>
<!-- TEMPLATE CUSTOM NEWSLETTER BODY -->
<table id="table-nl">
    <thead>
    <tr>
        <td>
	<a href="<?php print $front_page; ?>" title="Accueil du site" rel="home" id="logo">
            <img src="http://www.lycee-charlotte-grawitz.com/sites/all/themes/Cyrano_CG/logo.png" alt="Logo LPP C.Grawitz"/></a>
                </td>
                <td colspan="2"><h2><?php print $title; ?></h2></td>
             </tr>
          </thead>    
    <tbody>
              <tr>
                <td class="colonne-1-nl"><!-- liste actus -->
                    <div id="bloc_grawitz_actus">
    <?php  print $node->field_nl_lastnews[0]['view']  ?></div>
                </td>
                <td class="colonne-2-nl"><!-- Corps -->
            <?php   print $node->content['body']['#value'];/*contenu du node newsletter*/ ?>
                </td>
                <td class="colonne-3-nl"><!-- illustration -->
        <?php  print $node->field_nl_illustration[0]['view']  ?>
                </td>
              </tr>
                  </tbody>
</table><!-- /table NL -->