<?php
//-----------------------------------------------------------------------------------------------
//My Program-O Version: 2.4.5
//Program-O  chatbot admin area
//Written by Elizabeth Perreau and Dave Morton
//DATE: MAY 17TH 2014
//for more information and support please visit www.program-o.com
//-----------------------------------------------------------------------------------------------
// main.php
    $noRightNav    = $template->getSection('NoRightNav');
    $logo          = $template->getSection('Logo');
    $topNav        = $template->getSection('TopNav');
    $leftNav       = $template->getSection('LeftNav');
    $main          = $template->getSection('Main');
    $rightNav      = '';
    $footer        = trim($template->getSection('Footer'));
    #$lowerScripts  = '';
    #$pageTitleInfo = '';
    $divDecoration = $template->getSection('DivDecoration');
    $navHeader     = $template->getSection('NavHeader');
    $mainTitle     = 'Program O Support';
    $rightNavLinks = '';
    $FooterInfo    = getFooter();
    $titleSpan     = $template->getSection('TitleSpan');
    $errMsgStyle   = (!empty($msg)) ? "ShowError" : "HideError";
    $errMsgStyle   = $template->getSection($errMsgStyle);
    $mediaType     = ' media="screen"';
    $upperScripts  = '';
    $noLeftNav     = '';
    $noTopNav      = '';
    $pageTitle     = 'My-Program O - Support Page';
    $headerTitle   = 'Actions:';
    $forumURL = FORUM_URL;
    $mainContent   = <<<endMain
        <div id="rssContainer">
         <div id="rssTitle">
           For specific support questions, please use the <a href="$forumURL">Program O Forums</a> and post your question.<br />
           Below are the most recent forum posts:
         </div>
         <div id="rssOutput">
           [rssOutput]
         </div>
        </div>
endMain;
  $mainContent = str_replace('[rssOutput]', getRSS('support'), $mainContent);

?>