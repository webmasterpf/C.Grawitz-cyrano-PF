<!-- HEAD -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

  <head>
    <title><?php print $head_title; ?></title>
    <!-- stats-SEO -->
    <meta name="google-site-verification" content="msBEDS9QaIIEpzPS6_Wi-HOzKWr1Kw0dageOmF-4rbs" />
    <META name="y_key" content="11677ed5e2db4f15" />
    <meta name="msvalidate.01" content="E2114447554473259DE0996EF11B87E0" />
    <?php print $head; ?>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <script src="<?php print $base_path . path_to_theme() ?>/js/typos.js" type="text/javascript" charset="utf-8"></script>
<!-- CU3ER content JavaScript part starts here   -->
<script type="text/javascript" src="<?php print $base_path  ?>sites/all/3rdparty/cu3er/js/swfobject.js"></script>
<script type="text/javascript" src="<?php print $base_path  ?>sites/all/3rdparty/cu3er/js/CU3ER.js"></script>
<script type="text/javascript">
  // add your FlashVars
  var vars = { xml_location : '<?php print $base_path  ?>sites/all/3rdparty/cu3er/CU3ER-config.xml' };
  // add Flash embedding parameters, etc. wmode, bgcolor...
  var params = { bgcolor : '#ffffff' };
  // Flash object attributes id and name
  var attributes = { id:'CU3ER', name:'CU3ER' };
  // dynamic embed of Flash, set the location of expressInstall if needed
	swfobject.embedSWF('<?php print $base_path  ?>sites/all/3rdparty/cu3er/CU3ER.swf', "CU3ER", 880, 660, "10.0.0", "js/expressinstall.swf", vars, params, attributes );
  // initialize CU3ER class containing Javascript controls and events for CU3ER
  var CU3ER_object = new CU3ER("CU3ER");
</script>
<!-- CU3ER content JavaScript part ends here   -->
  </head>


<!-- HEADER -->
<body class="<?php print $body_classes; ?>">

	<div id="general">

    <!-- ______________________ HEADER _______________________ -->
	 <div id="header">

		<div id="header-inner">

        <div id="headHaut">

          <div id="logoHead">
	           <?php if (!empty($logo)): ?>
		           <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
	          <?php endif; ?>
	       </div>

         <div id="menuImg">
              <?php if (!empty($navStatic)): ?>
		           <?php print $navStatic; ?>
	          <?php endif; ?>
          </div>

          </div><!-- /headHaut -->
		 <div id="headBas">

	<?php if (!empty($site_slogan)): ?>
            <div id="site-slogan">
	<?php print $site_slogan; ?>
            </div><!-- /site-slogan -->
            <?php endif; ?>


            <div id="headSearch">
		  <?php if (!empty($search_box)): ?>
		  <?php print $search_box ?>
		  <?php endif; ?>
		  </div><!-- /recherche -->


          <div id="menuHead">
	        <?php if (!empty($menuDyn)): ?>
			   <?php print $menuDyn; ?>
            <?php endif; ?>

          </div><!-- /menuHead -->


		</div><!-- /headBas -->






	  </div> <!-- /header-inner -->
   </div> <!-- /header -->

<!-- ______________________ LAYOUT HOMEPAGE C.GRAWITZ AVEC DIAPO 3D_______________________ -->
 <!-- ______________________ CONTENU _______________________ -->

	<?php //<div id="mainPage"> ?>
	<div id="contentPage">


          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

            <!-- ______________________ PARTIE GAUCHE _______________________ -->

	<div id="Diapo3D">

        <?php if ($RegionDiapo3D): ?>
     <div id="Diapo3DReg"><?php print $RegionDiapo3D; ?></div>
        <?php endif; ?>

     

   </div><!-- /Diapo 3D -->

   




	<br clear="all"/>
	<!-- ______________________ CONTENU BAS _______________________ -->
    <?php if ($content_bottom_home): ?>
    <div id="content-bottom-home">
      <?php print $content_bottom_home; ?>
        <?php //print $feed_icons; ?>
         <?php endif; ?>


    </div><!-- /#content-bottom -->



	 </div> <!-- /mainPage -->
    <?php
global $theme_path;
include ($theme_path.'/includes/inc_footer.php');
?>