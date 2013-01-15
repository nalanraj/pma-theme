<?php
/**
 * @file
 * Theme implementation to display a single Drupal page.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

    <head>
        <title><?php print $head_title; ?></title>
        <?php print $head; ?>
        <?php print $styles; ?>
        <?php print $scripts; ?>
    </head>

    <body >
        <div class="container-12">
        <?php /******HEADER*******/?>
            <div class="grid-12">
                <div id="header">
                    <?php if ($logo) : ?><a href="<?php print $front_page ?>" class="logo-alter" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php endif; ?>
                    <?php if ($site_name) : ?>
                        <h1 class='site-name site-name-alter'><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print $site_name; ?><br /></a></h1>
                    <?php endif; ?>
                    <?php if ($site_slogan) : ?>
                        <h3 class='site-slogan-alter'><?php print $site_slogan; ?></h3>
                    <?php endif; ?>
                    <?php if ($header) : ?>
                    <div id="header-wrapper">
                        <?php print $header; ?>
                    </div>
                    <?php endif; ?>
                </div>
            <div class="clear-block"></div>
                <div class="spacer"></div>
            </div>

        <?php /******PRIMARY LINKS*******/?>
            <div class="grid-12">
                <div id="site-menu">
                    <?php if (isset($primary_links)) : ?>
                        <?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="clear-block"></div> 
        <div class="spacer"></div>

            <?php /******SIDEBAR - LEFT*******/?>
            <div class="grid-3">
                <div id="sidebar-left">
                    <?php if ($left) : ?>
                        <?php print $left; ?>
                    <?php endif; ?>
                </div>
            </div>

        <?php /******CONTENT*******/?>
            <div class="grid-9">
                <div id="main-content">
                    <?php
                        if ($title): ?>
                            <h1 class="title" id="page-title"><?php print $title;?> </h1>
                            
                    <?php 
                         endif;
                        if ($tabs != ''):
                          print  $tabs;
                        endif;
                        if ($messages != ''):
                          print  $messages;
                        endif;
                        print $help;
                        if ($breadcrumb != ''):
                          print $breadcrumb;
                        endif;
                        print "<br />";
                        print $content;
                        print $feed_icons;
                  ?>
                </div>
            </div>
            <div class="clear-block"></div> 
        <div class="spacer"></div>
    </div>

    <?php /***** CONTENT BOTTOM ******/ ?>
    <div id="content-bottom">
        <div class="container-12">
            <div class="grid-4">
                <div id="content-bottom-left">
                    <?php if ($content_bottom_left) : ?>
                        <?php print $content_bottom_left; ?>
                    <?php endif; ?>
                </div>
             </div>

            <div class="grid-4">
                <div id="content-bottom-center">
                    <?php if ($content_bottom_center) : ?>
                        <?php print $content_bottom_center; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="grid-4">
                <div id="content-bottom-right">
                    <?php if ($content_bottom_right) : ?>
                        <?php print $content_bottom_right; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="clear-block"></div> 
        </div>
    </div>

        <?php /******FOOTER******/?>
                <div id="footer">
                    <?php if ($footer) : ?>
                    <div id="footer-wrapper">
                        <?php print $footer; ?>
                    </div>
                    <?php endif; ?>
                    <?php
                        print t("Neelambal theme designed by");
                    ?>
                    <a href="http://www.nalan.me">NaLaN</a>
                </div>
        <?php print $closure; ?>
    </body>

</html>
