<?php header("Content-type: text/html; charset=utf-8"); // UTF 8 ?>
<!DOCTYPE html>
<html>
   <head>
   		<title>Font Testing Page — Latin Version</title>
   		<link href="output.css" rel="stylesheet">
   		<!-- <link href="css/print-v9.css" rel="stylesheet" media="print"> -->
   		<script src="js/jquery-1.7.2.min.js"></script>
   		<script>localStorage.clear();</script>
   		<script src="js/fontdrag.js"></script>
   		<script src="js/otfeatures-v9.1.js"></script>
   		<script src="js/contentEditable.js"></script>
   		<script src="includes/latin/constants-latin.js"></script>
   		<script src="js/init.js"></script>
   		<script>
   		   $(document).ready(function(){
   		   	prepareAndShowFontLayout();
   		   });
   		</script>
   </head>
   <body spellcheck="false">
      <?php include("includes/top.php"); ?>
      <section id="custom">
         <div class="tabs">
            <!-- Navigation (Ideally, this should be outside the "custom" section, so the navigation's font does not change.) -->
            <ul class="tabNavigation">
            	<li><a href="#headlines">Headlines</a></li>
            	<li><a href="#text">Text</a></li>
            	<li><a href="#adhesion">adhesion</a></li>
            	<li><a href="#hamburgefonstiv">hamburgefonstiv</a></li>
            	<li><a href="#lowercases">a-z</a></li>
            	<li><a href="#caps">Words</a></li>
            	<li><a href="#allcaps">Caps</a></li>
            	<li><a href="#layout">Layout</a></li>
            	<li><a href="#lettering">Lettering</a></li>
            	<li><a href="#kern">Kern</a></li>
            	<li><a href="#hinting">Hinting</a></li>
            	<li><a href="#latin">Latin</a></li>
            	<li><a href="#world">World Scripts</a></li>
            </ul>
            <!-- Headlines (Content injected via constants.js) -->
            <div id="headlines">
            	<div style="white-space: nowrap; overflow: hidden; width: 960px;"></div>
            </div>
            <!-- Text (Content injected via Javascript) -->
            <div id="text" style="width: 960px;">
            	<div class="textsettingCol1"></div>
            	<div class="textsettingCol2"></div>
            </div>
            <!-- adhesion (Content injected via constants.js) -->
            <div id="adhesion">
            	<div style="white-space: nowrap; overflow: hidden; width: 960px;"></div>
           		<p>&nbsp;</p>
            	<p>&nbsp;</p>
            	<div style="width: 960px;">
                	<div class="textsettingCol1"></div>
                	<div class="textsettingCol2"></div>
            	</div>
            </div>
            <!-- hamburgefonstiv (Content injected via constants.js) -->
            <div id="hamburgefonstiv">
               <div style="white-space: nowrap; overflow: hidden; width: 960px;" ></div>
               <p>&nbsp;</p>
               <p>&nbsp;</p>
               <div style="width: 960px;">
                	<div class="textsettingCol1"></div>
                	<div class="textsettingCol2"></div>
               </div>
            </div>
            <!-- Lowercases a-z (Content injected via constants.js) -->
            <div id="lowercases">
               <div style="white-space: nowrap; overflow: hidden; width: 960px;"></div>
               <p>&nbsp;</p>
               <p>&nbsp;</p>
               <div style="width: 960px;">
                  <div class="textsettingCol1"></div>
                  <div class="textsettingCol2"></div>
               </div>
            </div>
            <!-- Caps (Content injected via constants.js) -->
            <div id="caps">
               <div style="width: 960px;"></div>
            </div>
            <!-- All Caps (Content injected via constants.js) -->
            <div id="allcaps">
               <div style="width: 960px;"></div>
            </div>
            <!-- Layout -->
            <div id="layout">
               <?php include("includes/latin/layout.php"); ?>						
            </div>
            <!-- Lettering Sheet -->
            <div id="lettering">
               <?php include("includes/latin/lettering.php"); ?>			
            </div>
            <!-- Kerning -->
            <div id="kern">
               <?php include("includes/latin/kerning.php"); ?>			
            </div>
            <!-- Hinting (Content injected via constants.js) -->
            <div id="hinting">
               <div style="width: 960px;" contenteditable="true">
                  <p class="sizelabel"><?php echo $_SERVER['HTTP_USER_AGENT'] ?></p>
                  <p>&nbsp;</p>
                  <p class="sizelabel">48px</p>
                  <p class="hints-lower" style="font-size: 48px;"></p>
                  <p class="hints-caps" style="font-size: 48px;"></p>
                  <p class="hints-numbers" style="font-size: 48px;"></p>
                  <p>&nbsp;</p>
                  <p class="sizelabel">28px</p>
                  <p class="hints-lower" style="font-size: 28px;"></p>
                  <p style="font-size: 28px;">
                     <span class="hints-caps"></span> 
                     <span class="hints-numbers"></span>
                  </p>
                  <p>&nbsp;</p>
                  <?php for ($i = 24; $i >= 9; $i--) { ?>
                  <p class="sizelabel"><?php echo $i; ?>px</p>
                  <p class="hints-lower" style="font-size: <?php echo $i; ?>px;"></p>
                  <p style="font-size: <?php echo $i; ?>px;">
                     <span class="hints-caps"></span> 
                     <span class="hints-numbers"></span>
                  </p>
                  <p>&nbsp;</p>
                  <?php } ?>
               </div>
            </div>
            <!-- Latin -->
            <div id="latin">
               <?php include("includes/latin/diatrics.php"); ?>
            </div>
            <!-- Non-Latin -->
            <div id="world">
               <?php include("includes/latin/world-scripts.php"); ?>
            </div>
         </div>
         <!-- end tabs -->
      </section>
      <!-- Footer -->
      <?php include("includes/footer.php"); ?>
   </body>
</html>