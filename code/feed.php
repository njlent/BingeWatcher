<!DOCTYPE html>
<?php $page = 'feed'; ?>
<html lang="en">
    <head>
        <title>App</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=0.5, user-scalable = no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        
        <link rel="apple-touch-icon" sizes="57x57" href="images/icon/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/icon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/icon/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="512x512" href="images/icon/apple-touch-icon-512x512.png">
        <script type="text/javascript">
        (function(document,navigator,standalone) {
            // prevents links from apps from oppening in mobile safari
            // this javascript must be the first script in your <head>
            if ((standalone in navigator) && navigator[standalone]) {
                var curnode, location=document.location, stop=/^(a|html)$/i;
                document.addEventListener('click', function(e) {
                    curnode=e.target;
                    while (!(stop).test(curnode.nodeName)) {
                        curnode=curnode.parentNode;
                    }
                    // Condidions to do this only on links to your own app
                    // if you want all links, use if('href' in curnode) instead.
                    if('href' in curnode && ( curnode.href.indexOf('http') || ~curnode.href.indexOf(location.host) ) ) {
                        e.preventDefault();
                        location.href = curnode.href;
                    }
                },false);
            }
        })(document,window.navigator,'standalone');
    </script>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/latofonts.css" data-skrollr-stylesheet />
		<link rel="stylesheet" type="text/css" href="css/style.css" data-skrollr-stylesheet />
		
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	</head>
	<body>
        
        <!-- header_start -->
            <?php include ("include/menu.php"); ?>
        <!-- header_end -->
        
        <!-- content_start -->
        <div class="content">
            
            <!-- spacer for menu -->
            <div class="contentspacer"></div>
            
            <!-- global announcement -->
            <div class="announcement contentbg"><a class="link" href="#announcements">
                <img class="annicon" src="images/icon_ann.png" />
                        
                        <div class="anntext">Global Announcement!
                            </div>
                            
                        <div class="anndesc">Server Maintenance: in 3 days (20.05.16)
                            </div>
                </a></div>
                
            <!-- request approved -->
            <div class="announcement contentbg"><a class="link" href="#request">
                <img class="annicon" src="images/icon_approved.png" />
                        
                        <div class="anntext">Request Approved!
                            </div>
                            
                        <div class="anndesc">Mad Max - Fury Road ist nun in einer besseren Qualität verfügbar!
                            </div>
                </a></div>
                
            <!-- request denied -->
            <div class="announcement contentbg"><a class="link" href="#request">
                <img class="annicon" src="images/icon_denied.png" />
                        
                        <div class="anntext">Request Denied!
                            </div>
                            
                        <div class="anndesc">X-Men Apocalypse kommt erst am 19.05.16 in die Kinos!
                            </div>
                </a></div>
                
            <!-- Series -->
            <div class="series contentbg"><a class="link" href="#series">
                <img class="sericon" src="images/series/mrrobot_small.png" />
                        
                        <div class="seriname">Mr. Robot <font class="blue">OT</font>
                            </div>
                            
                        <div class="seridesc">New Series!
                            </div>
                </a>
                
                <!--eposiodes-->
                        <div class="seriepisodes">
                            
                            <a href="#episode" class="seriepisode"><font class="grey">S1E10</font> Zer0_Day
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E09</font> m1rr0r1ng
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E08</font> wh1ter0se
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E07</font> s0urce
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E06</font> br4ve-trave1er
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E05</font> 3xpl0its
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E04</font> da3m0ns
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E03</font> d3bug
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E02</font> ones-and-zer0es
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E01</font> Hellofriend
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            
                            </div>
                
                </div>
                
                
            <!-- Series -->
            <div class="series contentbg"><a class="link" href="#series">
                <img class="sericon" src="images/series/got_small.png" />
                        
                        <div class="seriname">Game of Trones <font class="blue"></font>
                            </div>
                            
                        <div class="seridesc">New Season!
                            </div>
                </a>
                
                <!--eposiodes-->
                        <div class="seriepisodes">
                            
                            <a href="#episode" class="seriepisode"><font class="grey">S6E03</font> Oathbreaker
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/uhd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S6E02</font> Home
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/uhd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S6E01</font> The Red Woman
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/uhd.png"/>
                            </a>
                           
                            
                            </div>
                
                </div>
                
            <!-- Series -->
            <div class="series contentbg"><a class="link" href="#series">
                <img class="sericon" src="images/series/mrrobot_small.png" />
                        
                        <div class="seriname">Mr. Robot <font class="blue"></font>
                            </div>
                            
                        <div class="seridesc">New Series!
                            </div>
                </a>
                
                <!--eposiodes-->
                        <div class="seriepisodes">
                            
                            <a href="#episode" class="seriepisode"><font class="grey">S1E10</font> Zer0_Day
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E09</font> m1rr0r1ng
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E08</font> wh1ter0se
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E07</font> s0urce
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E06</font> br4ve-trave1er
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E05</font> 3xpl0its
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E04</font> da3m0ns
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E03</font> d3bug
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E02</font> ones-and-zer0es
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            <a href="#episode" class="seriepisode"><font class="grey">S1E01</font> Hellofriend
                            <img src="images/badges/new.png"/>
                            <img src="images/badges/hd.png"/>
                            </a>
                            
                            </div>
                
                </div>
                
           <!-- layout -->
           <img style="width:100%;" src="images/background_feed.png">
          
                
                
                
        </div>
        <!-- content_end -->
        
	</body>
</html>	