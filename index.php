<?php
defined('_JEXEC') or die;

/**
 * Template for Joomla! CMS, created with Artisteer.
 * See readme.txt for more details on how to use the template.
 */

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';

// Create alias for $this object reference:
$document = $this;

// Shortcut for template base url:
$templateUrl = $document->baseurl . '/templates/' . $document->template;

Artx::load("Artx_Page");

// Initialize $view:
$view = $this->artx = new ArtxPage($this);

// Decorate component with Artisteer style:
$view->componentWrapper();

JHtml::_('behavior.framework', true);

?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />

    <!-- Created by Artisteer v4.1.0.59861 -->
    
    
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all">


    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <?php $view->includeInlineScripts() ?>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
</head>
<body>

<div id="art-main">
<header class="art-header"><?php echo $view->position('position-30', 'art-nostyle'); ?>


    <div class="art-shapes">

            </div>




                        
                    
</header>
<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<nav class="art-nav">
    
<?php if ($view->containsModules('position-28')) : ?>
<div class="art-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
<?php endif; ?>
<?php if ($view->containsModules('position-29')) : ?>
<div class="art-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
<?php endif; ?>
<?php echo $view->position('position-1'); ?>
 
    </nav>
<?php endif; ?>
<div class="art-sheet clearfix">
            <?php echo $view->position('position-15', 'art-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'art-block'); ?>
<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">
<?php
  echo $view->position('position-19', 'art-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'art-article');
  echo $view->position('position-12', 'art-nostyle');
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' art-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'art-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'art-article');
  echo $view->position('position-25', 'art-nostyle');
?>




                        </div>
                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'art-block'); ?>
<?php echo $view->position('position-26', 'art-nostyle'); ?>


    </div>
<footer class="art-footer">
  <div class="art-footer-inner">
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-1" style="width: 100%">
<?php if ($view->containsModules('position-31')) : ?>
    <?php echo $view->position('position-31', 'art-nostyle'); ?>
<?php else: ?>
        FOOTER
    <?php endif; ?>
</div>
    </div>
</div>
</div>

    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="#" target="_blank">The3ballSoft </a>Todos los derechos reservados.</span>
    </p>
  </div>
</footer>

</div>

        <script type="text/javascript">
            $(function() {
        /**
        * for each menu element, on mouseenter, 
        * we enlarge the image, and show both sdt_active span and 
        * sdt_wrap span. If the element has a sub menu (sdt_box),
        * then we slide it - if the element is the last one in the menu
        * we slide it to the left, otherwise to the right
        */
                $('#sdt_menu > li').bind('mouseenter',function(){
          var $elem = $(this);
          $elem.find('img')
             .stop(true)
             .animate({
              'width':'170px',
              'height':'170px',
              'left':'0px'
             },400,'easeOutBack')
             .andSelf()
             .find('.sdt_wrap')
               .stop(true)
             .animate({'top':'140px'},500,'easeOutBack')
             .andSelf()
             .find('.sdt_active')
               .stop(true)
             .animate({'height':'170px'},300,function(){
            var $sub_menu = $elem.find('.sdt_box');
            if($sub_menu.length){
              var left = '170px';
              if($elem.parent().children().length == $elem.index()+1)
                left = '-170px';
              $sub_menu.show().animate({'left':left},200);
            } 
          });
        }).bind('mouseleave',function(){
          var $elem = $(this);
          var $sub_menu = $elem.find('.sdt_box');
          if($sub_menu.length)
            $sub_menu.hide().css('left','0px');
          
          $elem.find('.sdt_active')
             .stop(true)
             .animate({'height':'0px'},300)
             .andSelf().find('img')
             .stop(true)
             .animate({
              'width':'0px',
              'height':'0px',
              'left':'85px'},400)
             .andSelf()
             .find('.sdt_wrap')
             .stop(true)
             .animate({'top':'25px'},500);
        });
            });
        </script>


<?php echo $view->position('debug'); ?>
</body>
</html>