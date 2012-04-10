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
?><head>
	<!--general stylesheet-->
		<link rel="stylesheet" type="text/css" href="http://www.lycee-charlotte-grawitz.com/sites/all/themes/Cyrano_CG/css/mail.css" media="screen" />
	</head>
<!-- TEMPLATE CUSTOM NEWSLETTER BODY -->

<table background="http://www.lycee-charlotte-grawitz.com/sites/all/themes/Cyrano_CG/images/bg_content_etoile.gif"
id="table-nl-bordure">
  <tbody><tr><td>
<table border="0" cellpadding="0" cellspacing="0" id="table-nl">
      
<tbody>
    <tr border="0">
       
      <td width="230"><h2><?php print $title; ?></h2></td>
<td width="340">
	               <div align="center"><a href="<?php print $front_page; ?>" title="Accueil du site" rel="home" id="logo">
      <img src="http://www.lycee-charlotte-grawitz.com/sites/all/themes/Cyrano_CG/logo.png" alt="Logo LPP C.Grawitz" width="335" height="55"/></a> </div></td>
                <td width="150" bordercolor="#FF3399">&nbsp;</td>
    </tr>
    <tr border="0">
<td width="220" bordercolor="#FF3399" class="colonne-1-nl"><!-- liste actus -->
                    <div id="bloc_grawitz_actus" style="background:#CCCCCC;margin:5px;">
    <?php  print $node->field_nl_lastnews[0]['view']  ?></div>
      </td>
                <td width="340" valign="middle" bordercolor="#FF3399" bgcolor="#ebebeb"class="colonne-2-nl" style="vertical-align: middle; border-bottom-color: #d6d6d6; border-bottom-width: 1px; border-bottom-style: solid;"><!-- Corps -->
            <?php   print $node->content['body']['#value'];/*contenu du node newsletter*/ ?>                </td>
                <td width="210" bordercolor="#FF3399" class="colonne-3-nl"><!-- illustration -->
    <span style="border:3px solid #F29400;display:block;padding:2px;width:inherit">   <?php  print $node->field_nl_illustration[0]['view']  ?>         </span>       </td>
              </tr>
<!-- TEMPLATE CUSTOM NEWSLETTER FOOTER -->
<tr border="0"style="text-align:center">
<td colspan="3">
<div id="txt-footer">
    <?php print $site_slogan; ?>
    Lyc&eacute;e Priv&eacute; Professionnel Charlotte Grawitz - 13013 MARSEILLE<br/>
    <a href="<?php print $front_page; ?>" title="Accueil du site" rel="home" id="logo">
            Aller sur le site</a> - <a href="<?php print $front_page; ?>/node/<?php print $node->nid ?>" target="_blank">Voir la newsletter sur le site</a><br/>
    <?php if ($format == 'html'): ?>
  <p class="newsletter-footer"><a href="[simplenews-unsubscribe-url]"><?php print $unsubscribe_text ?></a></p>
<?php else: ?>
-- <?php print $unsubscribe_text ?>: [simplenews-unsubscribe-url]
<?php endif ?>
<?php if ($key == 'test'): ?>
- - - <?php print $test_message ?> - - -
<?php endif ?>
</div>
</td></tr><!-- /table Footer NL-->
  </tbody>
</table><!-- /table NL -->
</td></tr></tbody></table><!-- /table bordure -->
