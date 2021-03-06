<?
//Set no caching
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
  <title>
    Riviera
  </title>
  
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  
  <!----------scrollbar---------------->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
  
  
  
  
  <link rel="stylesheet" type="text/css" media="all" href="css/keyframes.css" />
  <!--------------------------Menucsssssssssss----------------->
  <link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/menucss.css">
  
  
   <!--------------------------Menucsssssssssss----------------->
  
  
  
  
  <!--SCROLL--------------------->
  <link rel="stylesheet" href="css/normalize.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/demo.css" type="text/css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/apple-touch-icon-precomposed.png">
  
  
  <script type="text/javascript" src="js/_dependent/greensock/TweenMax.min.js">
  </script>
  <script type="text/javascript" src="js/_dependent/greensock/plugins/ScrollToPlugin.min.js">
  </script>
  <script type="text/javascript" src="js/_dependent/jquery.min.js">
  </script>
  <script type="text/javascript" src="js/_examples/modernizr.custom.min.js">
  </script>
  <script type="text/javascript" src="js/_mobile/iscroll-probe.js">
  </script>
  <script type="text/javascript" src="js/jquery.scrollmagic.min.js">
  </script>
  <script type="text/javascript" src="js/_examples/demo.js">
  </script>
  <script type="text/javascript">
    var controller;
    if (Modernizr.touch) {
      var myScroll;
      $(document).ready(function () {
        // wrap for iscroll
        $("#content-wrapper")
          .addClass("scrollContainer")
          .wrapInner('<div class="scrollContent"></div>');
        
        // add iScroll
        myScroll = new IScroll('#content-wrapper', {
          scrollX: false, scrollY: true, scrollbars: true, useTransform: false, useTransition: false, probeType: 3, click: true}
                              );
        
        // update container on scroll
        myScroll.on("scroll", function () {
          controller.update();
        }
                   );
        
        // overwrite scroll position calculation to use child's offset instead of parents scrollTop();
        controller.scrollPos(function () {
          return -myScroll.y;
        });
        
        // refresh height, so all is included.
        setTimeout(function () {
          myScroll.refresh();
        }, 0);
        
        // manual set hight (so height 100% is available within scroll container)
        $(document).on("orientationchange", function () {
          $("section")
            .css("min-height", $(window).height())
            .parent(".scrollmagic-pin-spacer").css("min-height", $(window).height());
        });
        $(document).trigger("orientationchange"); // trigger to init
      });
      // init the controller
      controller = new ScrollMagic({
        container: "#content-wrapper",
        globalSceneOptions: {
          triggerHook: "onLeave"
        }
      });
    } else {
      // init the controller
      controller = new ScrollMagic({
        globalSceneOptions: {
          triggerHook: "onLeave"
        }
      });
    }
    
  </script>
  
  
  <!--scroll End------------>
  
  <!-------hover--->
  
  <link rel="stylesheet" type="text/css" href="css/hover.css" />
  
  
  
  <!-----suncss---------->
  
  <link rel="stylesheet" href="css/sunstyle.css" media="screen" type="text/css" />
  
  <!-----end suncss---------->
  
  <!-----roler coaster---------->
  
  
  <link rel="stylesheet" href="css/citynormalize.css">
  
  <link rel="stylesheet" href="css/citystyle.css" media="screen" type="text/css" />
  
  
  
  <!-----end roler coaster---------->
  
  <!-----space css---------->
  
  
  <style type="text/css">
    
	.crater{
        position:absolute;
        top:80px;
        left:1100px;
        width:150px;
        height:150px;
      }
      .jupiter{
        position:absolute;
        top:510px;
        left:100px;
      }
      .earth{
        position:absolute;
        top:250px;
        left:500px;
        z-index:20;
      }
      .alien{
        position:absolute;
        top:380px;
        left:25px;
        width:70px;
        height:70px;
      }
      .asteroid{
        position:absolute;
        top:350px;
        left:20px;
        width:90px;
        height:80px;
      }
      .astronaut{
        position:absolute;
        top:60px;
        left:1280px;
        width:60px;
        height:80px;
      }
      .ring{
        position:absolute;
        top:550px;
        left:1100px;
        width:100px;
        height:100px;
      }
      .shuttle{
        position:absolute;
        top:500px;
        left:500px;
        width:100px;
        height:80px;
        z-index:20;
      }
      .rock1{
        position:absolute;
        top:50px;
        left:100px;
        width:100px;
        height:100px;
      }
      .rocket{
        position:absolute;
        top:450px;
        left:750px;
        width:60px;
        height:60px;
      }
      .rock2{
        position:absolute;
        top:55px;
        left:250px;
        width:40px;
        height:40px;
      }
    
      .crater{
        -webkit-animation:rotate 60s infinite;
      }
      .astronaut{
        -webkit-animation:oscillate 3s infinite alternate;
      }
      .asteroid{
        -webkit-animation:meteor 5s infinite;
      }
      .shuttle{
        -webkit-animation:revolve 60s infinite;
      }
      .rock1{
        -webkit-animation:rotate 60s infinite;
      }
      .rocket{
        -webkit-animation:flyrocket 60s infinite;
      }
      .rock2{
        -webkit-animation:rockfloat 30s infinite;
      }
            .alien{
        -webkit-animation:oscillates 15s infinite alternate;
      }
      .ring{
        -webkit-animation:rotate 40s infinite;
      }
      .jupiter{
        -webkit-animation:rotate 60s infinite;
      }
      
      @-webkit-keyframes revolve{
        from{
          -webkit-transform:rotate(0deg);
          transform-origin:100px -160px;
        }
        to{
          -webkit-transform:rotate(360deg);
          transform-origin:100px -160px;
        }
      }
      
      @-webkit-keyframes rotate{
        from{
          -webkit-transform:rotate(0deg);
        }
        to{
          -webkit-transform:rotate(360deg);
        }
      }
      
      @-webkit-keyframes oscillate{
        from{
          top:60px;
          left:1300px;
        }
        to{
          top:100px;
          left:1300px;
        }
      }
      
      @-webkit-keyframes meteor{
        from{
          top:350px;
          left:50px;
        }
        to{
          top:-1000px;
          left:1000px;
        }
      }
      
      @-webkit-keyframes flyrocket{
        from{
          top:650px;
          left:250px;
        }
        to{
          top:200px;
          left:1000px;
        }
      }
      @-webkit-keyframes rockfloat{
        from{
          -webkit-transform:rotate(0deg);
        }
        to{
          -webkit-transform:rotate(-360deg);
        }
      }
      @-webkit-keyframes rockmove{
        from{
          top:0px;
          left:900px;
        }
        to{
          top:900px;
          left:900px;
        }
      }
      @-webkit-keyframes oscillates{
        from{
          top:450px;
          left:25px;
        }
        to{
          top:450px;
          left:125px;
        }
      }
  </style>
  
  
  
  <link rel="stylesheet" href="css/experiment.css" />
  
  
  
  <!-----End space css---------->
  
  
  <!----------------------Drummer----------------------->
  <script type="text/javascript" src="js/controller.js">
  </script>
  
  <link rel="stylesheet" type="text/css" href="css/drummerstyle.css">
  
  <!-------------Singer---------------------->
  <link rel="stylesheet" type="text/css" href="css/singerstyle.css">
  <script type="text/javascript" src="js/controller2.js"></script>
  
  
   <!-------------guitar---------------------->
  
<script type="text/javascript" src="js/controller3.js"></script>

<link rel="stylesheet" type="text/css" href="css/guitarstyle.css">


 <!------------piano---------------------->
  
<script type="text/javascript" src="js/controller4.js"></script>

<link rel="stylesheet" type="text/css" href="css/pianostyle.css">


   <!------------Map CSS---------------------->
   	<link href="css/mapsed.css" rel="stylesheet">
		
    <link href="css/mapexamples.css" rel="stylesheet">
   
   
    <!------------End Map CSS---------------------->
<!-----------Qoutes------------------>
<style type="text/css">
.qoute{position:absolute;top:520px;left:400px;font-family:'Vivaldi';font-size:40px;color:#cf2437;}
</style>
  <!------------End Qoutes------------------->
  </head>
  
  <body>



   <div id="landing" style="position:relative;height:100%;">
<h1 class="qoute">"Cheers to the Culture that speaks for itself!"</h1>
  <div id="rivmenu">
<div class"container">
	<ul class="nav">
		
                
		<li>
			<a>Events</a>
			<ul>
				<li><a href="ping.vitriviera.com/events/Moves-Like-Jagger.html" target="_blank">Moves Like Jagger (Dance)</a></li>
				<li><a href="events/rock-on.html" target="_blank">Rock On (Music)</a></li>
				<li><a href="events/hall-of-fame.html" target="_blank">Hall of Fame </a></li>
				<li>
					<a >Words worth</a>
					<ul>
						<li><a href="events/wordsworth-english.html" target="_blank">English</a></li>
						<li><a href="events/wordshindi.html" target="_blank">Hindi</a></li>
						
						<li><a href="events/wordstelugu.html" target="_blank">Telugu</a></li>
                        <li><a href="events/wordstamil.html" target="_blank">Tamil</a></li>
                        <li><a href="events/wordskannada.html" target="_blank">Kannada</a></li>
					</ul>
				</li>
				<li><a href="events/drama.html" target="_blank">The World is a Stage(Dramatics)</a></li>
                <li><a href="events/gaming.html" target="_blank">Cyber Engage</a></li>
                <li><a href="events/funarena.html" target="_blank">Fun Arena</a></li>
                <li><a href="events/mixedbag.html" target="_blank">Mixed bag</a></li>
                <li><a href="events/inquizitive.html" target="_blank">Inquizitive</a></li>
			</ul>
		</li>
        
        <li><a href="#proshow" class="current">proshows</a></li>
        <li><a href="#factory" class="current">sports</a></li>
                 <li><a href="#"><div id="sar" style="width:160px;">
                 
                 </div>
                     </a></li>		
                <li><a href="registration.html" target="_blank">Register</a></li>
                 
		<li><a href="sponsors/sponsor.html" target="_blank">Sponsors</a></li>
                <li><a>Others</a>
                <ul>
				<li><a href="team/team/index.html" target="_blank">Team</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#" >Merchandise </a></li>
                </ul>
                </li>
               
                
	</ul>
</div>
</div>
  
  
  </div>
  
   <div id="logo" style="">
  
  <a  href="#landing" class="current button grow" ><img src="images/logo.png" / height="46px"></a>

</div>

<div id="vitlogo">
<img src="images/vit/white vit logo.png" />
</div>
  
  
    <div id="tajmahal">
   
      <div id="back">
        <img src="background.png" id="background" />
        <div id="clouds">
          
          <section id="tajclouds">
            <div id="scroll">
            </div>
            <div id="scroll2">
            </div>
            <div id="scroll3">
            </div>
            <div id="scroll4">
            </div>
            <div id="scroll5">
            </div>
            <div id="scroll6">
            </div>
            
            <script type="text/javascript">
              var sceneOptions = {
                duration: 2500, offset: -100}
                  ;
              var elements = $("#tajclouds div");
              
              // fade
              new ScrollScene(sceneOptions)
                .addTo(controller)
                .triggerHook("onCenter")
                .triggerElement(elements[0])
                .setTween(TweenMax.to(elements[0], 1, {
                  left: "-120%", marginLeft: 2000, ease: Back.easeOut}
                                     ));
              
              
              // move
              new ScrollScene(sceneOptions)
                .addTo(controller)
                .triggerHook("onCenter")
                .triggerElement(elements[1])
                .setTween(TweenMax.from(elements[1], 1, {
                  left: "-70%", marginLeft: 1050, ease: Back.easeOut}
                                       ));
              
              // spin
              new ScrollScene(sceneOptions)
                .addTo(controller)
                .triggerHook("onCenter")
                .triggerElement(elements[2])
                .setTween(TweenMax.from(elements[2], 1, {
                  left: "0%", marginLeft: 1200, ease: Back.easeOut}
                                       ));
              
              
              // scale
              new ScrollScene(sceneOptions)
                .addTo(controller)
                .triggerHook("onCenter")
                .triggerElement(elements[3])
                .setTween(TweenMax.from(elements[3], 1, {
                  left: "100%", marginLeft: 1300, ease: Back.easeOut}
                                       ));
              
              new ScrollScene(sceneOptions)
                .addTo(controller)
                .triggerHook("onCenter")
                .triggerElement(elements[4])
                .setTween(TweenMax.from(elements[4], 1, {
                  left: "100%", marginLeft: 700, ease: Back.easeOut}
                                       ));
              
              new ScrollScene(sceneOptions)
                .addTo(controller)
                .triggerHook("onCenter")
                .triggerElement(elements[5])
                .setTween(TweenMax.to(elements[5], 1, {
                  left: "-100%", marginLeft: 2000, ease: Back.easeOut}
                                     ));
              
              
              
              
			</script>
                
                
                
                
              </section>
              
              <div id="plane">
                <marquee direction="right">
                  <img src="images/plane.svg"  width="200" height="200"/>
                </marquee>
              </div>
              
              
          </div>
          <div id="pics">
            <div id="show">
              
              <div class="img1 slide">
                  <img src="images/indiagate.png" alt="England" />
              </div>
              <div class="img2 slide">
                <img src="images/qutubminar.png" alt="image2" />
              </div>
              <div class="img3 slide">
                <img src="images/taj4.png" alt="image3" />
              </div>
              <div class="img4 slide">
                <img src="images/taj5.png" alt="England" />
              </div>
              <div class="img5 slide">
                <img src="images/taj6.png" alt="image2" />
              </div>
              
              
            </div>
          </div>
          <div id="tech-slideshow">
            <div id="tech-slideshow-1">
              
            </div>
            
          </div>
          
          <!--AUTO SCROLL-->
          
          <section id="automove">
            
            
            
            
            
            
            <div id="auto1">
              <a  class="button pulse-shrink">
                <img src="autor.png">
              </a>
             </div>
             
             
             <script type="text/javascript">
               var sceneOptions = {
                 duration: 3000, offset: -100}
                   ;
               var elements = $("#automove div");
               
               // fade
               new ScrollScene(sceneOptions)
                 .addTo(controller)
                 .triggerHook("onCenter")
                 .triggerElement(elements[0])
                 .setTween(TweenMax.to(elements[0], 1, {
                   left: "10%", marginLeft: 1500}
                                      ));
               
               
               
               
               // move
               new ScrollScene(sceneOptions)
                 .addTo(controller)
                 .triggerHook("onCenter")
                 .triggerElement(elements[1])
                 .setTween(TweenMax.to(elements[1], 1, {
                   left: "0%", marginLeft: 50, ease: Back.easeOut}
                                      ));
               
               
             </script>
          </section>
          
          
          
          
          
          
          
          <!--END AUTO SCROLL-->
          
      </div>
      
  </div>
  
  </div>
  
  <div id="factory">
    <img src="images/factback.png" width="1366px"  />
    <!--FACTORY CLOUDS-->
	
    
    
    <div id="factclouds">
      <section id="tweens">
        
        <div id="fcloud1">
        </div>
        <div id="fcloud2">
        </div>
        <div id="fcloud3">
        </div>
        <div id="fcloud4">
        </div>
        
        <script type="text/javascript">
          var sceneOptions = {
            duration: 2500, offset: -100}
              ;
          var elements = $("#tweens div");
          
          // fade
          new ScrollScene(sceneOptions)
            .addTo(controller)
            .triggerHook("onCenter")
            .triggerElement(elements[0])
            .setTween(TweenMax.from(elements[0], 1, {
              left: "50%", marginLeft: 100, ease: Back.easeOut}
                                   ));
          
          
          // move
          new ScrollScene(sceneOptions)
            .addTo(controller)
            .triggerHook("onCenter")
            .triggerElement(elements[1])
            .setTween(TweenMax.from(elements[1], 1, {
              left: "-70%", marginLeft: 1050, ease: Back.easeOut}
                                   ));
          
          // spin
          new ScrollScene(sceneOptions)
            .addTo(controller)
            .triggerHook("onCenter")
            .triggerElement(elements[2])
            .setTween(TweenMax.from(elements[2], 1, {
              left: "0%", marginLeft: 1200, ease: Back.easeOut}
                                   ));
          
          
          // scale
          new ScrollScene(sceneOptions)
            .addTo(controller)
            .triggerHook("onCenter")
            .triggerElement(elements[3])
            .setTween(TweenMax.from(elements[3], 1, {
              left: "100%", marginLeft: 900, ease: Back.easeOut}
                                   ));
          
          
          
          
        </script>
      </section>
      
    </div>
    
    
    
    
    
    
    
    
    <!--END FACTORY CLOUDS-->
   <div id="nature">
      <img src="images/sports/sportsbg.png" />
      
        <div id="score">
        <img src="images/sports/score.png" />
        </div>
       <!------------Players----------------->
      <div id="players">
        <section id="plmv">
        <div id="p1" onmouseover="playerdetails1()" onmouseout="hide()">
        <img src="images/sports/playerred.png" />
        </div>
         <div id="p2" onmouseover="playerdetails2()" onmouseout="hide()">
        <img src="images/sports/payerred single.png" />
        </div>
          <div id="p3" onmouseover="playerdetails3()" onmouseout="hide()">
        <img src="images/sports/payerred single.png" />
        </div>
        <div id="p4" onmouseover="playerdetails4()" onmouseout="hide()">
        <img src="images/sports/playeryelow.png" />
        </div>
        <div id="p5" onmouseover="playerdetails5()" onmouseout="hide()">
        <img src="images/sports/payeryelow single.png" />
        </div>
        <div id="p6" onmouseover="playerdetails6()" onmouseout="hide()">
       <img src="images/sports/payeryelow single.png" />
        </div>
         <div id="p7" onmouseover="playerdetails7()" onmouseout="hide()">
        <img src="images/sports/playerred.png" />
        </div>
        <div id="p8" onmouseover="playerdetails8()" onmouseout="hide()">
        <img src="images/sports/payeryelow single.png" />
        </div>
      
        
         <script type="text/javascript">
          var sceneOptions = {
            duration: 2500, offset: -100}
              ;
          var elements = $("#plmv div");
          
        new ScrollScene(sceneOptions)
                .addTo(controller)
                .triggerHook("onCenter")
                .triggerElement(elements[0])
                .setTween(TweenMax.to(elements[0], 1, {
                  left: "10%", marginLeft: 300, ease: Back.easeOut}
                                     ));
									
		 new ScrollScene(sceneOptions)
                .addTo(controller)
                .triggerHook("onCenter")
                .triggerElement(elements[1])
                .setTween(TweenMax.to(elements[1], 1, {
                  left: "20%", marginLeft: 120, ease: Back.easeOut}
                                     ));
		new ScrollScene(sceneOptions)
                .addTo(controller)
                .triggerHook("onCenter")
                .triggerElement(elements[2])
                .setTween(TweenMax.to(elements[2], 1, {
                  left: "20%", marginLeft: 380, ease: Back.easeOut}
                                     ));
          
		  new ScrollScene(sceneOptions)
                .addTo(controller)
                .triggerHook("onCenter")
                .triggerElement(elements[3])
                .setTween(TweenMax.to(elements[3], 1, {
                  left: "-1%", marginLeft: 880, ease: Back.easeOut}
                                     ));
		  new ScrollScene(sceneOptions)
                .addTo(controller)
                .triggerHook("onCenter")
                .triggerElement(elements[4])
                .setTween(TweenMax.to(elements[4], 1, {
                  left: "-4%", marginLeft: 400, ease: Back.easeOut}
                                     ));
            new ScrollScene(sceneOptions)
                .addTo(controller)
                .triggerHook("onCenter")
                .triggerElement(elements[5])
                .setTween(TweenMax.to(elements[5], 1, {
                  left: "-4%", marginLeft: 450, ease: Back.easeOut}
                                     ));
			new ScrollScene(sceneOptions)
                .addTo(controller)
                .triggerHook("onCenter")
                .triggerElement(elements[6])
                .setTween(TweenMax.to(elements[6], 1, {
                  left: "-4%", marginLeft: 850, ease: Back.easeOut}
                                     ));
          
         
          
          
          
        </script>
</section>        
        
     </div>    
        <style>
        #players #p1
		{
			position:absolute;
			
			top:650px;
			left:250px;
		}
		#players #p2
		{
			position:absolute;
			
			top:680px;
			left:350px;
		}
		#players #p3
		{
			position:absolute;
			
			top:720px;
			left:400px;
		}
		 #players #p4
		{
			position:absolute;
		
			top:650px;
			left:430px;
		}
			#players #p5
		{
			position:absolute;
			
			top:680px;
			left:550px;
		}
		#players #p6
		{
			position:absolute;
		
			top:780px;
			left:590px;
		}
		 #players #p7
		{
			position:absolute;
		
			top:650px;
			left:750px;
		}
		#players #p8
		{
			position:absolute;
			
			top:740px;
			left:900px;
		}
		 #players #p4
		{
			position:absolute;
			
			top:650px;
			left:1000px;
		}
		
        
        </style>
        
        
        
        
        
        
       
       <!------------End  Players----------------->
        <!-----------player card---------------->
       <div id="playercard">
       <img src="" id="plimage" />
       </div>
       <style>
       #playercard{
		   position:absolute;
		   width:148px;
		   height:230px;
		   border:solid;
		   border-color:#F8B133;
		   top:360px;
		   left:600px;
		   visibility:hidden;
		   }
       
       </style>
       <script>
       function playerdetails1()
	   {
		   var p1=document.getElementById("p1");
		   
		   var playercard=document.getElementById("playercard");
		   var score=document.getElementById("score");
		   var image=document.getElementById("plimage");
		   playercard.style.visibility="visible";
		   score.style.visibility="hidden";
		   
		   image.src="images/sports/andres.png";
	   }
	   
	   function playerdetails2()
	   {
		   var p1=document.getElementById("p2");
		   
		   var playercard=document.getElementById("playercard");
		   var score=document.getElementById("score");
		   var image=document.getElementById("plimage");
		   playercard.style.visibility="visible";
		   score.style.visibility="hidden";
		   
		   image.src="images/sports/cristiano.png";
	   }
	   function playerdetails3()
	   {
		   var p1=document.getElementById("p3");
		   
		   var playercard=document.getElementById("playercard");
		   var score=document.getElementById("score");
		   var image=document.getElementById("plimage");
		   playercard.style.visibility="visible";
		   score.style.visibility="hidden";
		   
		   image.src="images/sports/cunt.png";
	   }
	   function playerdetails3()
	   {
		   var p1=document.getElementById("p3");
		   
		   var playercard=document.getElementById("playercard");
		   var score=document.getElementById("score");
		   var image=document.getElementById("plimage");
		   playercard.style.visibility="visible";
		   score.style.visibility="hidden";
		   
		   image.src="images/sports/javier.png";
	   }
	   function playerdetails4()
	   {
		   var p1=document.getElementById("p4");
		   
		   var playercard=document.getElementById("playercard");
		   var score=document.getElementById("score");
		   var image=document.getElementById("plimage");
		   playercard.style.visibility="visible";
		   score.style.visibility="hidden";
		   
		   image.src="images/sports/lionel.png";
	   }
	   function playerdetails5()
	   {
		   var p1=document.getElementById("p5");
		   
		   var playercard=document.getElementById("playercard");
		   var score=document.getElementById("score");
		   var image=document.getElementById("plimage");
		   playercard.style.visibility="visible";
		   score.style.visibility="hidden";
		   
		   image.src="images/sports/neymar.png";
	   }
	   function playerdetails6()
	   {
		   var p1=document.getElementById("p6");
		   
		   var playercard=document.getElementById("playercard");
		   var score=document.getElementById("score");
		   var image=document.getElementById("plimage");
		   playercard.style.visibility="visible";
		   score.style.visibility="hidden";
		   
		   image.src="images/sports/radamel.png";
	   }
	   function playerdetails7()
	   {
		   var p1=document.getElementById("p7");
		   
		   var playercard=document.getElementById("playercard");
		   var score=document.getElementById("score");
		   var image=document.getElementById("plimage");
		   playercard.style.visibility="visible";
		   score.style.visibility="hidden";
		   
		   image.src="images/sports/cunt.png";
	   }
	   function playerdetails8()
	   {
		   var p1=document.getElementById("p8");
		   
		   var playercard=document.getElementById("playercard");
		   var score=document.getElementById("score");
		   var image=document.getElementById("plimage");
		   playercard.style.visibility="visible";
		   score.style.visibility="hidden";
		   
		   image.src="images/sports/andres.png";
	   }
	   
	   
	   function hide()
	   {
		  var playercard=document.getElementById("playercard");
		   playercard.style.visibility="hidden"; 
		   var score=document.getElementById("score");

		   score.style.visibility="visible";
	   }
       
       </script>
       
        <!-----------end player card---------------->
        
        
    </div>
   
    
    
  </div>
  
  <!----------sports bottom----------------->
    <div id="sportsbottom">
    <div id="cont">
      <div id="b">
     <a class="button grow"> <img src="images/sports/con1.gif" /></a>
      </div>
       <div id="b">
         <a class="button grow"> <img src="images/sports/con2.gif" /></a>
      </div>
       <div id="b">
         <a class="button grow"> <img src="images/sports/con3.gif" /></a>
      </div>
       <div id="b">
         <a class="button grow"> <img src="images/sports/con4.gif" /></a>
      </div>
      <div id="b">
         <a class="button grow"> <img src="images/sports/123.gif" /></a>
      </div>
     </div>
    </div>
    <style>
    #sportsbottom
	{
		position:absolute;
		top:2200px;
		left:0px;
		height:200px;
		width:1366px;
		
		z-index:9999;
	}
	#sportsbottom #cont
	{
		position:absolute;
		left:280px;
		height:230px;
		
	}
	
	#sportsbottom #b
	{
	
		float:left;
	}
	 #b img
	{
		width:140px;
	}
    </style>
  
  
  <!----------End sports bottom----------------->

  
  
  <div id="proshow">
    <img src="images/proshow/stage.svg" />
    
    <div id="mountains">
      <img src="images/proshow/background-mountains.svg" />
    </div>
    <div id="trees">
      <img src="images/proshow/background-trees.svg" />
    </div>
    <div id="drum" >
      <div style="width:50px; margin-left:-1150px; margin-top:-400px" class="arrow">
        <img src="images/proshow/stage-arrow.svg" / id="arrow">
      </div>
      <style>
        .arrow{
		  position:absolute;
		  -webkit-animation:oscillate 1s infinite alternate;
		  z-index:500;
          
          
		  
		  
        }
      </style>
      <div id="drummer"  onclick="drum();">
        
        <div id="drummer1">
          <img src="images/proshow/drummer.png" />
        </div>
        
        
        <div id="drummer2" style="visibility:hidden">
        
      
          <div id="an-anim" style="position:absolute; top:0px; left:-100px;">
            <ol>
              
              <li id="an-scene-0" >
                <div class="an-stage" style="background-color:transparent">
                  <div id="an-obj-1" >
                    <div>
                      <img  height="266" width="192"  src="images/drums-body (1).svg">
                    </div>
                  </div>
                  <div id="an-obj-2">
                    <div>
                      <img  height="266" width="192"  src="images/drums-hihat.svg">
                    </div>
                  </div>
                  <div id="an-obj-3">
                    <div>
                      <img  height="266" width="192"  src="images/drums-kick.svg">
                    </div>
                  </div>
                  <div id="an-obj-4">
                    <div>
                      <img  height="266" width="192"  src="images/drums-arm--left.svg">
                    </div>
                  </div>
                  <div id="an-obj-5">
                    <div>
                      <img  height="266" width="192"  src="images/drums-arm--right.svg">
                    </div>
                  </div>
                  <div id="an-obj-6">
                    <div>
                      <img  height="266" width="192"  src="images/drums-head.svg">
                    </div>
                  </div>
                </div>
              </li>
              
            </ol>
            
          </div>
          
      
          
          
          
        </div>
        <!----------------------singer--------------------->
        <div id="singer2" style="visibility:hidden">
        
            <div id="ban-anim" style="position:absolute; top:-230px; left:-135px;"><ol>

<li id="ban-scene-0" >
<div class="ban-stage">
    <div id="an-obj-a1"><div><img  height="266" width="115"  src="images/singer/rap-arm--left.svg"></div></div>
    <div id="an-obj-a2"><div><img  height="266" width="115"  src="images/singer/rap-head.svg"></div></div>
    <div id="an-obj-a3"><div><img  height="266" width="115"  src="images/singer/rap-foot.svg"></div></div>
    <div id="an-obj-a4"><div><img  height="266" width="115"  src="images/singer/rap-body.svg"></div>
        <div id="an-obj-a5"><div><img  height="266" width="115"  src="images/singer/rap-arm--right.svg"></div></div>
    </div>
</div>
</li>

</ol></div>

</div>
        
        <!----------------------singer------------------------>
        
         <!----------------------guitar--------------------->
         <div id="guitarist" style="visibility:hidden">
         <div id="can-anim"  style="position:absolute; top:-165px; left:-280px;"><ol>

<li id="can-scene-0" >
<div class="can-stage">
    <div id="an-obj-b1"><div><img  height="266" width="199"  src="images/guitar/guitar-body.svg"></div></div>
    <div id="an-obj-b2"><div><img  height="266" width="199"  src="images/guitar/guitar-arm--right.svg"></div></div>
    <div id="an-obj-b3"><div><img  height="266" width="199"  src="images/guitar/guitar-foot.svg"></div></div>
    <div id="an-obj-b4"><div><img  height="266" width="199"  src="images/guitar/guitar-head.svg"></div></div>
    <div id="an-obj-b5"><div><img  height="266" width="199"  src="images/guitar/guitar-hand.svg"></div></div>
</div>
</li>

</ol></div>
       </div>
         
         
         
         
          <!----------------------end guiter--------------------->
          
          <!----------------------paino--------------------->
          <div id="pianist" style=" visibility:hidden">
          
          <div id="p63jrPmpm-an-anim" style="position:absolute; top:-165px; left:70px;"><ol>

<li id="p63jrPmpm-an-scene-0" >
<div class="p63jrPmpm-an-stage">
    <div id="p63jrPmpm-an-obj-1"><div><img  height="266" width="146"  src="images/piano/synth-body.svg"></div></div>
    <div id="p63jrPmpm-an-obj-2"><div><img  height="266" width="146"  src="images/piano/synth-foot.svg"></div></div>
    <div id="p63jrPmpm-an-obj-3"><div><img  height="266" width="146"  src="images/piano/synth-arm--left.svg"></div></div>
    <div id="p63jrPmpm-an-obj-4"><div><img  height="266" width="146"  src="images/piano/synth-arm--right.svg"></div></div>
    <div id="p63jrPmpm-an-obj-5"><div><img  height="266" width="146"  src="images/piano/synth-head.svg"></div></div>
    <div id="p63jrPmpm-an-obj-6"><div><img  height="266" width="146"  src="images/piano/synth-keyboard.svg"></div></div>
</div>
</li>

</ol></div>

</div>
          <!----------------------piano--------------------->
          
          
        
        
      </div>
      
      
     
      
      
      
      
      
      
      
    </div>
    <script>
      function drum()
	  {
        var drummer1=document.getElementById("drummer1");
        drummer1.style.visibility="hidden";
        var drummer2=document.getElementById("drummer2");
        drummer2.style.visibility="visible";
        var arrow=document.getElementById("arrow");
        arrow.style.visibility="hidden";
		var drumsound= document.getElementById('drumsound');
        drumsound.src="audio/drummer.mp3";
		
	  }
	  
    </script>
    
    
     <div id="singer"  onclick="sing()">
     
      <div id="singer1"><img src="images/proshow/singer.png" /></div>
      
    
      
      
      </div>
      <!----------------Singer script--------------------->
     <script>
      function sing()
	  {
		  var singer1=document.getElementById("singer1");
		  singer1.style.visibility="hidden";
		  var singer2=document.getElementById("singer2");
		  singer2.style.visibility="visible";
		  var singersound= document.getElementById('singersound');
        singersound.src="audio/singer.mp3";
	  }
    </script>
    
      <!----------------Guitar script--------------------->
    <div id="guitar" onclick="playguitar()" style=" z-index:999">
    <div id="guitar1"> <img src="images/proshow/guitar1.png" /></div>
    </div>
    <script>
    function playguitar()
	{
		var guitar1=document.getElementById("guitar1");
		guitar1.style.visibility="hidden";
		var guitarist=document.getElementById("guitarist");
		guitarist.style.visibility="visible";
		var guitarsound= document.getElementById('guitarsound');
        guitarsound.src="audio/guitar2.mp3";
	}
    </script>
    
    
    
    
    
    
    <div id="piano" onclick="gutr()" style="z-index:999">
    <div id="pianoimage"><img src="images/proshow/piano.png" height="220px" /></div>
    </div>
    
    <script>
    function gutr()
	{
		var p1=document.getElementById("pianoimage");
		p1.style.visibility="hidden";
		var p2=document.getElementById("pianist");
		p2.style.visibility="visible";
		var pianosound= document.getElementById('pianosound');
        pianosound.src="audio/piano.mp3";
		
	}
    </script>
    
    
    
    
    
    
    <div id="crowd">
    <div id="crowd1">
    <img src="images/proshow/crowd1.svg" class="arrow" />
    </div>
    
    
    </div>
    
    
    
    
    
    
    
    
    
    
     </div>
  
  
  
  
  
  
  
  
  <div id="city">
    
    
    
    <div id="imgcity" style="position:relative;margin-top:-380px;width:1366px;z-index:800;">
      <img src="images/city/final full landscape.gif" />
      <div id="sky">
        <img src="images/city/background.png" />
        
      </div>
      
      
      <div id="rolercoaster">
        
        
        <div class="svg-container" style="margin-top:15px; overflow:hidden">
          
          <div class="svg-container__content">
            
            
            
            
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2702 1819" enable-background="new 0 0 2702 1819" xml:space="preserve">
              <defs>
                <g id="cabin1">
                  <polygon fill="#413A5D" points="2.959,32.001 5.229,39.273 68.499,39.24 74.809,31.965 	"/>
                  <circle fill="#413A5D" cx="9.278" cy="40.577" r="4.941"/>
                  <circle fill="#413A5D" cx="64.727" cy="40.55" r="4.941"/>
                  <polygon fill="#EC6739" points="76.183,34.254 73.249,35.604 2.302,35.639 0.011,33.42 0,9.701 59.085,9.673 68.144,14.197 
76.175,18.92 	"/>
                  <rect x="2.009" y="0.214" fill="#EC6739" width="4.528" height="22.438"/>
                  <rect x="32.36" y="-0.067" fill="#EC6739" width="4.527" height="22.438"/>
                  
                  <rect x="0.027" y="21.498" transform="matrix(-1 5.127509e-04 -5.127509e-04 -1 76.2347 47.1426)" fill="#F7FBFB" width="76.168" height="4.166"/>
                </g>
                <g id="cabin2">
                  <polygon fill="#413A5D" points="1.401,31.965 7.71,39.24 70.98,39.273 73.251,32.001 	"/>
                  <circle fill="#413A5D" cx="66.931" cy="40.577" r="4.941"/>
                  <circle fill="#413A5D" cx="11.483" cy="40.55" r="4.941"/>
                  <polygon fill="#EC6739" points="0.034,18.92 8.066,14.197 17.124,9.673 76.21,9.701 76.199,33.42 73.907,35.639 2.96,35.604 
0.026,34.254 	"/>
                  <rect x="69.673" y="0.214" fill="#EC6739" width="4.529" height="22.438"/>
                  <rect x="39.321" y="-0.067" fill="#EC6739" width="4.529" height="22.438"/>
                  <rect x="0.014" y="21.498" fill="#F7FBFB" width="76.168" height="4.166"/>
                </g>
              </defs>
              
              
              
              <pattern  x="0" y="1819" width="107.793" height="107.793" patternUnits="userSpaceOnUse" id="pattern4" viewBox="0 -107.793 107.793 107.793" overflow="visible">
                
                <!-- 
<rect width="20" height="20" x="0" y="0" fill="red" />
-->
                <polygon fill="none" points="0,0 107.793,0 107.793,-107.793 0,-107.793 		"/>
                <polygon fill="none" points="0,0 107.793,0 107.793,-107.793 0,-107.793 			"/>
                <path fill="#00A0B1" d="M107.793,0v-107.793H0V0H107.793z M5.886-10.632v-86.53L49.15-53.898L5.886-10.632z M53.969-49.08
L97.472-5.576H10.463L53.969-49.08z M10.773-101.908h86.386L53.967-58.715L10.773-101.908z M101.907-97.018v86.24L58.786-53.896
L101.907-97.018z"/>
                <path fill="#00A0B1" d="M0-5.576v-14.867c11.291,0,20.443,9.152,20.443,20.443H5.576C5.576-3.08,3.08-5.576,0-5.576z"/>
                <path fill="#008F9E" d="M0,0v-5.576C3.08-5.576,5.576-3.08,5.576,0H0z"/>
                <path fill="#00A0B1" d="M102.217,0H87.35c0-11.291,9.152-20.443,20.443-20.443v14.867C104.713-5.576,102.217-3.08,102.217,0z"/>
                <path fill="#008F9E" d="M107.793,0h-5.576c0-3.08,2.496-5.576,5.576-5.576V0z"/>
                <path fill="#00A0B1" d="M5.575-107.793h14.868C20.443-96.502,11.291-87.35,0-87.35v-14.867
C3.08-102.217,5.575-104.713,5.575-107.793z"/>
                <path fill="#008F9E" d="M0-107.793h5.575c0,3.08-2.495,5.576-5.575,5.576V-107.793z"/>
                <path fill="#00A0B1" d="M107.793-102.218v14.868c-11.291,0-20.443-9.152-20.443-20.443h14.867
C102.217-104.713,104.713-102.218,107.793-102.218z"/>
                <path fill="#008F9E" d="M107.793-107.793v5.575c-3.08,0-5.576-2.495-5.576-5.575H107.793z"/>
                
              </pattern>
              
              <pattern  x="0.5" y="1819" width="107.793" height="107.793" patternUnits="userSpaceOnUse" id="New_Pattern_5" viewBox="0 -107.793 107.793 107.793" overflow="visible">
                <g>
                  <polygon fill="none" points="0,0 107.793,0 107.793,-107.793 0,-107.793 		"/>
                  <g>
                    <polygon fill="none" points="0,0 107.793,0 107.793,-107.793 0,-107.793 			"/>
                    <path fill="#EECA43" d="M0,0v-107.793h107.793V0H0z M49.15-53.898L5.886-97.162v86.53L49.15-53.898z M10.463-5.576h87.009
L53.969-49.08L10.463-5.576z M53.967-58.715l43.192-43.193H10.773L53.967-58.715z M58.786-53.896l43.121,43.119v-86.24
L58.786-53.896z"/>
                    <path fill="#EECA43" d="M0-5.576v-14.867c11.291,0,20.443,9.152,20.443,20.443H5.576C5.576-3.08,3.08-5.576,0-5.576z"/>
                    <path fill="#D5B43C" d="M0,0v-5.576C3.08-5.576,5.576-3.08,5.576,0H0z"/>
                    <path fill="#EECA43" d="M102.217,0H87.35c0-11.291,9.152-20.443,20.443-20.443v14.867C104.713-5.576,102.217-3.08,102.217,0z"/>
                    <path fill="#EECA43" d="M5.575-107.793h14.868C20.443-96.502,11.291-87.35,0-87.35v-14.867
C3.08-102.217,5.575-104.713,5.575-107.793z"/>
                    <path fill="#D5B43C" d="M0-107.793h5.575c0,3.08-2.495,5.576-5.575,5.576V-107.793z"/>
                    <path fill="#EECA43" d="M107.793-102.218v14.868c-11.291,0-20.443-9.152-20.443-20.443h14.867
C102.217-104.713,104.713-102.218,107.793-102.218z"/>
                    <path fill="#D5B43C" d="M107.793,0h-5.576c0-3.08,2.496-5.576,5.576-5.576V0z"/>
                    <path fill="#D5B43C" d="M107.793-107.793v5.576c-3.08,0-5.576-2.496-5.576-5.576H107.793z"/>
                  </g>
                </g>
              </pattern>
              
              
              
              
              
              
              <g transform="translate(0, -100)" id="js-yellow-train-cabin1">
                <use xlink:href="#cabin1">
                </use>
              </g>
              <g transform="translate(0, -100)" id="js-yellow-train-cabin2">
                <use xlink:href="#cabin1">
                </use>
              </g>
              <g transform="translate(0, -100)" id="js-yellow-train-cabin3">
                <use xlink:href="#cabin1">
                </use>
              </g>
              <g transform="translate(0, -100)" id="js-yellow-train-cabin4">
                <use xlink:href="#cabin1">
                </use>
              </g>
              <g transform="translate(0, -100)" id="js-yellow-train-cabin5">
                <use xlink:href="#cabin1">
                </use>
              </g>
              
              <path id="js-yellow-path"  fill="none" stroke="#D5B43C" stroke-width="20" stroke-miterlimit="10" d="M-411.832,1956.669L1.34,1365.229
C52.049,1290,116.049,1224,198.049,1180c1-1,2-2,3-3c43-22,85-41,133-52c1,0,3-2,4-2c103-25,203-28,306-18c3,0,7,0,10,0
c14,1,28,4,43,5c34,4,65,10,99,16c36,7,69,15,104,23c54,14,102,29,157,40c94,20,188.226,36.538,277-1
c100.259-42.394,195.922-194.537,225-228c36.255-41.722,50.168-59.233,96-108c51.057-54.327,45.881-48.845,104-99
c48.287-41.67,179.685-136.595,251-165c40.359-16.075,87.797-41.835,210-54c147.411-14.674,333,46,476.273,130.016L4467.5,1749.561"
              />
              
              <g>
                <pattern  id="pattern2" xlink:href="#New_Pattern_5" patternTransform="matrix(1 0 0 -1 861.8438 -17374.4141)">
                </pattern>
                <path fill="url(#pattern2)" d="M1546.277,970.104c-147.051,176.068-176.574,309.627-579.211,198.142
c-371.088-102.747-751.143-126.896-967.15,193.342v318.528l2700.887-12.974V669.144
C2299.832,429.749,1950.7,485.882,1546.277,970.104z"/>
              </g>
              <g>
                <pattern  id="pattern3" xlink:href="#New_Pattern_Swatch_3" patternTransform="matrix(1 0 0 -1 861.8438 -17374.4141)">
                </pattern>
                <path fill="url(#pattern3)" d="M2702.188,668.326c-400.391-238.439-749.184-181.886-1153.143,301.779
c-147.051,176.068-176.574,309.627-579.211,198.142c-372.543-103.15-754.13-127.101-969.691,197.106v41.23
c215.561-324.207,597.148-300.26,969.691-197.109c402.637,111.486,432.16-22.071,579.211-198.141
c403.959-483.665,752.752-540.218,1153.143-301.779V668.326z"/>
              </g>
              <g>
                <g>
                  <g>
                    <g>
                      <path fill="#FFFFFF" d="M2688.895,659.52c-1.129,1.946-3.616,2.621-5.56,1.509c-1.94-1.113-2.613-3.601-1.499-5.555
s3.604-2.629,5.559-1.508C2689.352,655.086,2690.021,657.573,2688.895,659.52z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2671.249,649.406c-1.099,1.963-3.583,2.687-5.549,1.616s-2.681-3.535-1.597-5.507
c1.084-1.971,3.567-2.694,5.549-1.616C2671.633,644.977,2672.348,647.443,2671.249,649.406z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2653.387,639.682c-1.066,1.98-3.524,2.719-5.49,1.647c-1.966-1.07-2.707-3.549-1.653-5.537
c1.052-1.988,3.511-2.726,5.489-1.648C2653.713,635.222,2654.454,637.701,2653.387,639.682z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2635.405,630.182c-1.034,1.998-3.484,2.784-5.472,1.756c-1.987-1.026-2.773-3.485-1.756-5.491

c1.019-2.006,3.469-2.792,5.472-1.756C2635.653,625.726,2636.439,628.185,2635.405,630.182z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2617.264,620.993c-1,2.015-3.438,2.85-5.445,1.864c-2.009-0.985-2.84-3.426-1.856-5.448
c0.981-2.024,3.42-2.858,5.444-1.864C2617.431,616.538,2618.263,618.979,2617.264,620.993z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2598.966,612.116c-0.962,2.033-3.388,2.918-5.416,1.977c-2.028-0.939-2.907-3.357-1.964-5.399
s3.369-2.928,5.416-1.979C2599.049,607.665,2599.929,610.083,2598.966,612.116z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2580.512,603.567c-0.924,2.051-3.334,2.988-5.383,2.096c-2.05-0.894-2.979-3.287-2.074-5.346
c0.904-2.061,3.314-2.998,5.385-2.097C2580.509,599.123,2581.436,601.516,2580.512,603.567z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2561.869,595.441c-0.887,2.075-3.254,3.007-5.315,2.143c-2.069-0.844-3.048-3.212-2.187-5.29
s3.256-3.07,5.346-2.218C2561.795,590.949,2562.748,593.378,2561.869,595.441z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2543.068,587.686c-0.84,2.088-3.197,3.096-5.268,2.25c-2.062-0.863-3.106-3.166-2.285-5.271
c0.812-2.085,3.203-3.172,5.285-2.301C2542.893,583.216,2543.907,585.599,2543.068,587.686z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2524.107,580.333c-0.793,2.104-3.129,3.168-5.22,2.375c-2.088-0.793-3.157-3.149-2.387-5.262
c0.771-2.113,3.106-3.177,5.219-2.375C2523.832,575.872,2524.9,578.229,2524.107,580.333z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2504.99,573.401c-0.745,2.123-3.059,3.243-5.166,2.505c-2.107-0.739-3.232-3.065-2.512-5.196
c0.722-2.131,3.033-3.252,5.166-2.505C2504.609,568.952,2505.734,571.278,2504.99,573.401z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2485.718,566.911c-0.694,2.14-2.98,3.321-5.107,2.639c-2.126-0.682-3.309-2.976-2.64-5.124
c0.67-2.146,2.957-3.329,5.107-2.639C2485.229,562.477,2486.411,564.771,2485.718,566.911z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2466.296,560.88c-0.642,2.156-2.897,3.399-5.042,2.776s-3.385-2.882-2.77-5.046
c0.613-2.164,2.871-3.407,5.041-2.776C2465.696,556.465,2466.938,558.724,2466.296,560.88z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2446.727,555.349c-0.584,2.173-2.81,3.478-4.971,2.914c-2.158-0.562-3.459-2.784-2.9-4.964
c0.558-2.179,2.781-3.483,4.97-2.914C2446.012,550.954,2447.312,553.177,2446.727,555.349z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2427.02,550.331c-0.526,2.188-2.717,3.555-4.893,3.056c-2.175-0.499-3.535-2.682-3.037-4.875
c0.498-2.192,2.688-3.562,4.893-3.056C2426.186,545.961,2427.546,548.144,2427.02,550.331z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2407.184,545.85c-0.467,2.201-2.618,3.635-4.808,3.201c-2.188-0.433-3.608-2.572-3.174-4.779
c0.435-2.206,2.587-3.64,4.806-3.2C2406.227,541.509,2407.648,543.649,2407.184,545.85z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2387.227,541.926c-0.4,2.213-2.512,3.711-4.713,3.348c-2.198-0.365-3.684-2.459-3.312-4.679
c0.372-2.219,2.481-3.717,4.713-3.347S2387.629,539.712,2387.227,541.926z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2367.164,538.598c-0.336,2.218-2.4,3.785-4.611,3.488c-2.211-0.295-3.756-2.342-3.451-4.571
c0.305-2.229,2.369-3.792,4.611-3.491C2365.955,534.326,2367.501,536.367,2367.164,538.598z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2347.006,535.896c-0.267,2.218-2.279,3.815-4.5,3.605c-2.218-0.224-3.824-2.22-3.59-4.457
c0.236-2.237,2.252-3.866,4.504-3.637C2345.673,531.623,2347.275,533.646,2347.006,535.896z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2326.775,533.816c-0.199,2.244-2.156,3.849-4.384,3.723c-2.225-0.151-3.894-2.093-3.729-4.336
c0.166-2.244,2.131-3.938,4.389-3.783C2325.312,529.549,2326.975,531.579,2326.775,533.816z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2306.49,532.373c-0.129,2.267-2.032,3.896-4.262,3.837c-2.228-0.077-3.957-1.961-3.864-4.208
c0.094-2.248,2.003-4.006,4.265-3.927C2304.893,528.136,2306.617,530.146,2306.49,532.373z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2286.17,531.579c-0.056,2.261-1.905,3.981-4.134,3.958c-2.229-0.002-4.021-1.827-4-4.076
c0.021-2.25,1.872-4.071,4.135-4.068C2284.436,527.418,2286.225,529.342,2286.17,531.579z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2265.834,531.448c0.02,2.252-1.773,4.063-4.002,4.075c-2.229,0.073-4.077-1.689-4.131-3.938
c-0.055-2.249,1.736-4.132,3.999-4.206C2263.964,527.368,2265.814,529.202,2265.834,531.448z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2245.505,531.986c0.093,2.248-1.638,4.128-3.865,4.202c-2.225,0.122-4.13-1.558-4.259-3.81
c-0.129-2.24,1.598-4.203,3.857-4.327C2243.502,527.977,2245.412,529.738,2245.505,531.986z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2225.205,533.196c0.168,2.243-1.498,4.183-3.723,4.332c-2.223,0.156-4.182-1.426-4.385-3.682
c-0.202-2.225,1.455-4.276,3.713-4.437C2223.069,529.258,2225.037,530.953,2225.205,533.196z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2204.958,535.085c0.243,2.236-1.358,4.232-3.575,4.458c-2.221,0.196-4.229-1.304-4.509-3.555
c-0.274-2.214,1.31-4.336,3.565-4.536C2202.691,531.223,2204.715,532.849,2204.958,535.085z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2184.784,537.645c0.316,2.228-1.218,4.277-3.425,4.58c-2.213,0.278-4.276-1.209-4.627-3.425
c-0.354-2.228,1.17-4.347,3.416-4.63C2182.393,533.862,2184.468,535.418,2184.784,537.645z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2164.706,540.868c0.39,2.215-1.075,4.316-3.272,4.694c-2.196,0.371-4.319-1.102-4.739-3.291
c-0.429-2.229,1.034-4.343,3.268-4.719C2162.191,537.167,2164.316,538.652,2164.706,540.868z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2144.744,544.744c0.462,2.202-0.935,4.353-3.116,4.805c-2.183,0.452-4.354-0.961-4.851-3.155
c-0.494-2.193,0.899-4.345,3.116-4.804C2142.111,541.13,2144.282,542.543,2144.744,544.744z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2124.92,549.271c0.532,2.186-0.793,4.384-2.96,4.909c-2.166,0.526-4.381-0.812-4.946-2.989
c-0.563-2.178,0.76-4.375,2.959-4.909C2122.173,545.747,2124.387,547.085,2124.92,549.271z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2105.247,554.418c0.601,2.168-0.653,4.41-2.802,5.009c-2.147,0.6-4.402-0.666-5.034-2.825
c-0.633-2.158,0.621-4.4,2.801-5.009C2102.393,550.985,2104.646,552.25,2105.247,554.418z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2085.743,560.171c0.667,2.148-0.518,4.433-2.646,5.103c-2.127,0.669-4.418-0.522-5.115-2.66
c-0.697-2.14,0.485-4.422,2.645-5.102C2082.785,556.833,2085.076,558.023,2085.743,560.171z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2066.422,566.512c0.731,2.127-0.383,4.449-2.488,5.187c-2.104,0.736-4.429-0.381-5.188-2.498
c-0.762-2.117,0.353-4.439,2.487-5.188C2063.366,563.265,2065.689,564.385,2066.422,566.512z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2047.297,573.424c0.793,2.105-0.251,4.463-2.332,5.269c-2.081,0.804-4.436-0.241-5.256-2.335
c-0.822-2.095,0.223-4.452,2.331-5.268C2044.15,570.274,2046.504,571.319,2047.297,573.424z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2028.371,580.866c0.854,2.082-0.122,4.474-2.178,5.344s-4.435-0.104-5.314-2.174
c-0.879-2.07,0.096-4.462,2.178-5.343C2025.139,577.812,2027.52,578.785,2028.371,580.866z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M2009.657,588.826c0.909,2.058,0.002,4.479-2.026,5.413c-2.027,0.932-4.432,0.028-5.365-2.018
c-0.937-2.045-0.028-4.469,2.024-5.412C2006.345,585.866,2008.747,586.769,2009.657,588.826z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1991.176,597.315c0.959,2.022,0.098,4.432-1.895,5.439c-2.001,0.99-4.424,0.156-5.412-1.865
c-0.988-2.021-0.146-4.472,1.878-5.474C1987.764,594.396,1990.207,595.273,1991.176,597.315z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1972.934,606.305c1.017,2.011,0.213,4.433-1.783,5.435c-1.972,1.048-4.412,0.28-5.45-1.715
c-1.039-1.995-0.263-4.473,1.73-5.532C1969.45,603.479,1971.919,604.3,1972.934,606.305z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1954.924,615.752c1.064,1.982,0.327,4.438-1.645,5.486c-1.971,1.05-4.454,0.297-5.536-1.664
c-1.093-1.979-0.351-4.43,1.643-5.491C1951.381,613.023,1953.859,613.77,1954.924,615.752z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1937.135,625.605c1.11,1.956,0.437,4.438-1.506,5.541c-1.941,1.104-4.436,0.424-5.564-1.521
c-1.133-1.944-0.457-4.425,1.506-5.541S1936.025,623.649,1937.135,625.605z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1919.568,635.85c1.154,1.932,0.539,4.435-1.373,5.591c-1.911,1.155-4.414,0.538-5.588-1.381
c-1.175-1.919-0.561-4.421,1.371-5.59C1915.912,633.302,1918.414,633.919,1919.568,635.85z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1902.223,646.467c1.196,1.905,0.641,4.427-1.242,5.632c-1.883,1.206-4.393,0.648-5.606-1.245
c-1.215-1.894-0.658-4.414,1.242-5.632C1898.518,644.005,1901.027,644.562,1902.223,646.467z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1885.1,657.438c1.234,1.881,0.734,4.421-1.117,5.674s-4.367,0.755-5.62-1.114
c-1.253-1.868-0.753-4.408,1.114-5.672C1881.346,655.06,1883.863,655.558,1885.1,657.438z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1868.256,668.837c1.271,1.855,0.803,4.375-1.05,5.628c-1.864,1.236-4.361,0.829-5.657-1.022
c-1.281-1.834-0.861-4.426,1.02-5.673C1864.438,666.504,1866.982,666.982,1868.256,668.837z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1851.617,680.53c1.307,1.831,0.891,4.368-0.93,5.667s-4.369,0.878-5.692-0.941
c-1.323-1.818-0.907-4.355,0.929-5.667C1847.761,678.278,1850.311,678.7,1851.617,680.53z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1835.179,692.503c1.341,1.806,0.978,4.358-0.812,5.701c-1.79,1.342-4.341,0.975-5.695-0.82
s-0.991-4.348,0.813-5.701C1831.288,690.33,1833.838,690.697,1835.179,692.503z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1818.938,704.745c1.373,1.782,1.059,4.348-0.701,5.729c-1.76,1.382-4.312,1.065-5.696-0.706
c-1.386-1.771-1.071-4.337,0.702-5.729C1815.018,702.646,1817.566,702.962,1818.938,704.745z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1802.941,717.303c1.404,1.764,1.104,4.3-0.646,5.694c-1.729,1.419-4.278,1.153-5.692-0.596
c-1.416-1.749-1.148-4.326,0.594-5.757C1798.961,715.24,1801.542,715.546,1802.941,717.303z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1787.171,730.144c1.431,1.737,1.187,4.297-0.545,5.717c-1.729,1.42-4.301,1.172-5.743-0.556
c-1.441-1.727-1.197-4.286,0.545-5.716C1783.171,728.159,1785.742,728.407,1787.171,730.144z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1771.566,743.185c1.455,1.716,1.257,4.287-0.442,5.744s-4.267,1.256-5.733-0.448
c-1.468-1.705-1.271-4.276,0.441-5.743C1767.543,741.269,1770.109,741.47,1771.566,743.185z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1756.127,756.422c1.48,1.693,1.326,4.275-0.344,5.768c-1.67,1.49-4.233,1.335-5.725-0.349
c-1.492-1.684-1.339-4.266,0.342-5.766C1752.082,754.574,1754.646,754.729,1756.127,756.422z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1740.956,769.968c1.504,1.673,1.369,4.237-0.302,5.729c-1.67,1.491-4.252,1.353-5.768-0.312
c-1.515-1.663-1.38-4.228,0.301-5.728C1736.869,768.156,1739.451,768.295,1740.956,769.968z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1725.939,783.683c1.525,1.652,1.433,4.227-0.211,5.749c-1.642,1.522-4.218,1.427-5.754-0.217
c-1.537-1.643-1.442-4.217,0.209-5.749C1721.836,781.933,1724.413,782.03,1725.939,783.683z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1711.076,797.562c1.548,1.634,1.493,4.216-0.12,5.77c-1.614,1.553-4.185,1.497-5.741-0.127
s-1.503-4.207,0.12-5.77C1706.958,795.874,1709.527,795.931,1711.076,797.562z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1696.423,811.667c1.567,1.613,1.529,4.181-0.085,5.734c-1.62,1.545-4.191,1.521-5.762-0.078
c-1.583-1.61-1.561-4.193,0.068-5.748C1692.27,810.012,1694.855,810.053,1696.423,811.667z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1681.939,825.943c1.586,1.595,1.586,4.171,0,5.753c-1.586,1.583-4.164,1.58-5.759-0.006
c-1.595-1.587-1.596-4.163-0.001-5.753C1677.773,824.346,1680.354,824.348,1681.939,825.943z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1667.575,840.34c1.604,1.577,1.642,4.16,0.083,5.771c-1.559,1.608-4.129,1.643-5.741,0.075
c-1.612-1.568-1.649-4.152-0.083-5.77C1663.4,838.798,1665.971,838.764,1667.575,840.34z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1653.429,854.952c1.621,1.559,1.673,4.128,0.113,5.738c-1.56,1.608-4.144,1.657-5.772,0.105
c-1.629-1.551-1.68-4.12-0.112-5.738C1649.225,853.44,1651.809,853.393,1653.429,854.952z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1639.421,869.696c1.638,1.542,1.722,4.118,0.188,5.752c-1.532,1.635-4.107,1.716-5.754,0.182
c-1.645-1.535-1.729-4.11-0.188-5.752C1635.207,868.235,1637.783,868.153,1639.421,869.696z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1625.527,884.548c1.653,1.526,1.778,4.115,0.281,5.782c-1.498,1.667-4.059,1.789-5.718,0.27
c-1.659-1.519-1.785-4.106-0.28-5.781C1621.314,883.144,1623.875,883.021,1625.527,884.548z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1611.938,899.678c1.666,1.512,1.804,4.087,0.306,5.755s-4.068,1.801-5.741,0.298
c-1.673-1.505-1.811-4.081-0.306-5.756C1607.7,898.3,1610.271,898.167,1611.938,899.678z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1598.346,914.808c1.682,1.496,1.828,4.062,0.33,5.729c-1.498,1.668-4.079,1.812-5.766,0.324
c-1.688-1.488-1.834-4.054-0.33-5.729S1596.666,913.312,1598.346,914.808z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1584.755,929.938c1.683,1.471,1.874,4.053,0.429,5.766c-1.447,1.71-4,1.902-5.701,0.43
c-1.699-1.472-1.897-4.06-0.442-5.776C1580.491,928.634,1583.049,928.446,1584.755,929.938z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1571.595,945.442c1.708,1.464,1.917,4.036,0.47,5.747c-1.448,1.71-4.014,1.916-5.729,0.46
s-1.925-4.029-0.469-5.747C1567.322,944.185,1569.887,943.979,1571.595,945.442z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1558.448,960.96c1.722,1.447,1.942,4.007,0.493,5.717c-1.447,1.71-4.023,1.931-5.752,0.49
c-1.729-1.44-1.95-3.999-0.496-5.717C1554.15,959.732,1556.727,959.513,1558.448,960.96z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1545.302,976.479c1.751,1.44,1.938,3.949,0.554,5.712c-1.401,1.747-3.951,2.012-5.695,0.591
s-2.014-3.997-0.604-5.754C1540.947,975.254,1543.579,975.059,1545.302,976.479z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1532.521,992.297c1.752,1.409,2.035,3.968,0.635,5.715c-1.402,1.747-3.967,2.028-5.729,0.629
c-1.761-1.398-2.045-3.959-0.635-5.715C1528.204,991.168,1530.768,990.887,1532.521,992.297z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1519.836,1008.193c1.77,1.39,2.085,3.951,0.707,5.723c-1.379,1.77-3.932,2.082-5.704,0.696
c-1.771-1.387-2.088-3.947-0.707-5.724C1515.514,1007.115,1518.066,1006.803,1519.836,1008.193z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1507.343,1024.241c1.776,1.38,2.099,3.935,0.722,5.705c-1.379,1.77-3.938,2.09-5.719,0.714
c-1.779-1.376-2.102-3.931-0.721-5.704C1503.007,1023.181,1505.566,1022.86,1507.343,1024.241z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1494.872,1040.307c1.778,1.379,2.104,3.937,0.728,5.713c-1.375,1.778-3.931,2.102-5.707,0.722
c-1.775-1.381-2.102-3.938-0.729-5.714C1490.539,1039.252,1493.094,1038.929,1494.872,1040.307z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1482.424,1056.39c1.78,1.387,2.087,3.938,0.682,5.702c-1.4,1.765-3.97,2.065-5.735,0.672
c-1.767-1.393-2.068-3.942-0.675-5.695C1478.089,1055.316,1480.654,1055.012,1482.424,1056.39z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1469.777,1072.317c1.756,1.404,2.043,3.976,0.641,5.738c-1.402,1.766-3.955,2.046-5.702,0.63
c-1.747-1.418-2.032-3.986-0.641-5.739C1465.469,1071.193,1468.021,1070.911,1469.777,1072.317z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1456.994,1088.134c1.73,1.437,1.969,4.011,0.529,5.75c-1.426,1.751-4.041,1.941-5.747,0.491
c-1.722-1.463-1.908-3.989-0.496-5.723C1452.704,1086.931,1455.262,1086.698,1456.994,1088.134z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1443.825,1103.631c1.692,1.482,1.833,4.049,0.315,5.732c-1.517,1.683-4.097,1.822-5.763,0.312
c-1.666-1.513-1.807-4.079-0.315-5.731C1439.553,1102.288,1442.133,1102.148,1443.825,1103.631z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1430.084,1118.622c1.633,1.548,1.686,4.132,0.117,5.774c-1.567,1.641-4.137,1.688-5.736,0.107
s-1.652-4.166-0.117-5.772C1425.883,1117.124,1428.451,1117.075,1430.084,1118.622z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1415.754,1133.05c1.551,1.621,1.521,4.255-0.188,5.766c-1.687,1.53-4.277,1.421-5.788-0.246
s-1.404-4.226,0.235-5.713C1411.674,1131.39,1414.193,1131.42,1415.754,1133.05z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1400.607,1146.615c1.455,1.716,1.213,4.291-0.541,5.75c-1.754,1.46-4.312,1.216-5.711-0.546
s-1.156-4.335,0.541-5.75C1396.598,1144.655,1399.154,1144.899,1400.607,1146.615z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1384.643,1159.203c1.312,1.79,0.972,4.46-0.951,5.704c-1.896,1.282-4.457,0.812-5.72-1.052
c-1.262-1.862-0.804-4.371,1.022-5.604C1380.848,1157.057,1383.295,1157.363,1384.643,1159.203z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1367.737,1170.494c1.181,1.914,0.546,4.419-1.419,5.595c-1.965,1.175-4.456,0.54-5.562-1.419
c-1.105-1.958-0.471-4.463,1.419-5.594C1364.064,1167.944,1366.557,1168.579,1367.737,1170.494z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1349.989,1180.409c1.008,1.983,0.225,4.544-1.855,5.505c-2.087,0.947-4.54,0.057-5.477-1.988
c-0.938-2.045-0.072-4.438,1.933-5.346C1346.588,1177.658,1348.96,1178.381,1349.989,1180.409z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1331.461,1188.767c0.844,2.085-0.206,4.438-2.347,5.255c-2.14,0.815-4.493-0.238-5.255-2.354
c-0.76-2.117,0.291-4.47,2.347-5.254C1328.264,1185.627,1330.616,1186.682,1331.461,1188.767z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1312.288,1195.521c0.671,2.146-0.556,4.441-2.739,5.125c-1.091,0.332-2.195,0.231-3.115-0.296
c-0.921-0.526-1.634-1.396-1.933-2.48c-0.299-1.085-0.129-2.177,0.378-3.064c0.508-0.888,1.328-1.653,2.385-1.977
C1309.367,1192.169,1311.616,1193.375,1312.288,1195.521z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1292.667,1200.849c0.25,1.098,0.034,2.201-0.526,3.103c-0.563,0.887-1.482,1.513-2.6,1.736
c-2.241,0.438-4.409-0.995-4.842-3.202c-0.434-2.208,0.974-4.341,3.142-4.765c1.085-0.218,2.17,0.055,3.042,0.608
C1291.75,1198.87,1292.417,1199.752,1292.667,1200.849z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1272.691,1204.626c0.354,2.222-1.189,4.279-3.447,4.596c-2.257,0.315-4.321-1.235-4.61-3.468
c-0.288-2.23,1.255-4.288,3.446-4.595C1270.271,1200.852,1272.336,1202.404,1272.691,1204.626z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1252.514,1207.133c0.219,2.238-1.442,4.213-3.709,4.41c-2.268,0.196-4.235-1.463-4.396-3.707
c-0.159-2.244,1.502-4.219,3.71-4.41C1250.328,1203.234,1252.295,1204.895,1252.514,1207.133z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1232.229,1208.503c0.098,2.248-1.664,4.144-3.935,4.232c-2.271,0.09-4.149-1.66-4.194-3.909
s1.715-4.146,3.935-4.232C1230.253,1204.507,1232.13,1206.256,1232.229,1208.503z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1211.898,1208.875c-0.006,2.249-1.853,4.069-4.121,4.064c-2.27,0.002-4.066-1.832-4.014-4.104
c0.053-2.227,1.897-4.04,4.12-4.041C1210.107,1204.799,1211.904,1206.625,1211.898,1208.875z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1191.571,1208.329c-0.097,2.247-2.011,3.992-4.274,3.896c-2.264-0.095-3.99-1.99-3.854-4.235
c0.136-2.245,2.05-3.99,4.273-3.898C1189.941,1204.186,1191.668,1206.081,1191.571,1208.329z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1171.277,1207.064c-0.176,2.242-2.148,3.912-4.404,3.729s-3.915-2.146-3.704-4.386
c0.21-2.239,2.183-3.909,4.404-3.729C1169.794,1202.858,1171.453,1204.822,1171.277,1207.064z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1151.034,1205.135c-0.246,2.235-2.267,3.838-4.515,3.579c-2.246-0.259-3.844-2.276-3.567-4.51
c0.276-2.232,2.297-3.835,4.514-3.58C1149.684,1200.879,1151.28,1202.898,1151.034,1205.135z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1130.854,1202.619c-0.307,2.229-2.369,3.771-4.604,3.449c-2.234-0.323-3.779-2.39-3.447-4.614
c0.333-2.226,2.395-3.77,4.604-3.448C1129.618,1198.325,1131.161,1200.391,1130.854,1202.619z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1110.746,1199.585c-0.359,2.221-2.454,3.709-4.678,3.324c-2.226-0.386-3.719-2.493-3.338-4.71
s2.476-3.705,4.678-3.324C1109.609,1195.256,1111.105,1197.365,1110.746,1199.585z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1090.706,1196.119c-0.404,2.204-2.542,3.714-4.758,3.289c-2.211-0.444-3.66-2.596-3.234-4.805
c0.425-2.209,2.548-3.642,4.741-3.2C1089.65,1191.824,1091.112,1193.896,1090.706,1196.119z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1070.75,1192.201c-0.447,2.205-2.604,3.631-4.814,3.187c-2.211-0.443-3.627-2.588-3.16-4.788
c0.466-2.2,2.621-3.627,4.812-3.188C1069.781,1187.854,1071.197,1189.996,1070.75,1192.201z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1050.855,1187.983c-0.484,2.195-2.66,3.574-4.86,3.079c-2.199-0.495-3.576-2.676-3.075-4.868
s2.677-3.571,4.86-3.079C1049.963,1183.607,1051.34,1185.787,1050.855,1187.983z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1031.021,1183.482c-0.519,2.188-2.713,3.525-4.9,2.986c-2.188-0.539-3.53-2.746-2.998-4.933
c0.533-2.187,2.727-3.522,4.9-2.987C1030.199,1179.086,1031.541,1181.294,1031.021,1183.482z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M1011.275,1178.617c-0.547,2.182-2.766,3.514-4.953,2.974c-2.191-0.524-3.495-2.774-2.938-4.952
c0.56-2.181,2.769-3.464,4.944-2.941C1010.504,1174.232,1011.823,1176.436,1011.275,1178.617z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M991.591,1173.506c-0.563,2.178-2.783,3.475-4.957,2.897c-2.173-0.577-3.475-2.81-2.905-4.985
c0.568-2.176,2.787-3.474,4.955-2.896C990.854,1169.097,992.155,1171.328,991.591,1173.506z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M971.936,1168.285c-0.573,2.175-2.801,3.47-4.975,2.893c-2.173-0.577-3.466-2.807-2.888-4.98
s2.805-3.469,4.974-2.894C971.215,1163.88,972.509,1166.11,971.936,1168.285z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M952.279,1163.064c-0.583,2.174-2.82,3.459-4.99,2.898c-2.169-0.562-3.459-2.783-2.881-4.957
c0.579-2.174,2.813-3.477,4.992-2.91C951.581,1158.658,952.861,1160.893,952.279,1163.064z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M932.598,1157.938c-0.568,2.178-2.789,3.483-4.959,2.92c-2.169-0.563-3.475-2.786-2.914-4.966
c0.562-2.179,2.781-3.484,4.959-2.919C931.862,1153.538,933.167,1155.762,932.598,1157.938z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M912.914,1152.822c-0.551,2.181-2.756,3.49-4.926,2.928c-2.169-0.564-3.489-2.791-2.947-4.974
c0.542-2.185,2.748-3.494,4.926-2.929C912.146,1148.414,913.465,1150.641,912.914,1152.822z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M893.217,1147.763c-0.531,2.187-2.734,3.546-4.918,3.04s-3.53-2.689-3.007-4.878
c0.522-2.188,2.725-3.549,4.917-3.04C892.403,1143.393,893.75,1145.576,893.217,1147.763z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M873.405,1143.168c-0.513,2.189-2.698,3.556-4.882,3.049c-2.184-0.506-3.547-2.693-3.043-4.886
c0.502-2.193,2.688-3.558,4.881-3.049C872.554,1138.79,873.917,1140.979,873.405,1143.168z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M853.593,1138.574c-0.491,2.194-2.662,3.563-4.845,3.058c-2.183-0.507-3.562-2.697-3.08-4.895
c0.482-2.198,2.652-3.565,4.845-3.059C852.706,1134.188,854.085,1136.38,853.593,1138.574z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M833.727,1134.23c-0.472,2.198-2.633,3.617-4.828,3.168c-2.194-0.449-3.602-2.6-3.142-4.802
c0.459-2.202,2.621-3.62,4.827-3.168S834.197,1132.03,833.727,1134.23z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M813.802,1130.148c-0.448,2.203-2.59,3.627-4.786,3.177c-2.194-0.45-3.621-2.604-3.184-4.811
c0.438-2.207,2.579-3.629,4.785-3.177C812.824,1125.79,814.25,1127.943,813.802,1130.148z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M793.878,1126.066c-0.427,2.222-2.543,3.604-4.749,3.214c-2.204-0.403-3.655-2.522-3.242-4.733
s2.544-3.675,4.76-3.27C792.865,1121.671,794.301,1123.87,793.878,1126.066z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M773.883,1122.352c-0.398,2.215-2.51,3.683-4.714,3.278s-3.676-2.526-3.288-4.742
c0.389-2.216,2.498-3.683,4.713-3.277C772.811,1118.016,774.283,1120.138,773.883,1122.352z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M753.847,1118.871c-0.374,2.218-2.467,3.716-4.677,3.347c-2.209-0.369-3.708-2.469-3.347-4.688
c0.36-2.221,2.455-3.719,4.676-3.348C752.721,1114.553,754.22,1116.652,753.847,1118.871z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M733.771,1115.613c-0.346,2.224-2.422,3.754-4.636,3.42c-2.214-0.333-3.739-2.407-3.407-4.632
c0.332-2.226,2.407-3.756,4.636-3.42C732.592,1111.317,734.118,1113.391,733.771,1115.613z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M713.66,1112.59c-0.317,2.228-2.373,3.792-4.594,3.496c-2.219-0.295-3.772-2.342-3.471-4.57
c0.303-2.229,2.359-3.795,4.592-3.496C712.423,1108.316,713.979,1110.362,713.66,1112.59z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M693.501,1109.903c-0.287,2.23-2.318,3.8-4.538,3.504c-2.219-0.302-3.805-2.285-3.533-4.528
c0.271-2.223,2.312-3.855,4.543-3.554C692.208,1105.623,693.787,1107.672,693.501,1109.903z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M673.308,1107.483c-0.254,2.234-2.264,3.84-4.487,3.583c-2.225-0.256-3.833-2.275-3.594-4.514
c0.238-2.237,2.248-3.841,4.486-3.583C671.953,1103.229,673.562,1105.249,673.308,1107.483z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M653.084,1105.345c-0.221,2.238-2.206,3.88-4.434,3.665c-2.229-0.214-3.868-2.203-3.664-4.442
c0.205-2.24,2.189-3.882,4.434-3.665C651.665,1101.117,653.305,1103.105,653.084,1105.345z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M632.832,1103.497c-0.186,2.242-2.145,3.922-4.376,3.753c-2.229-0.17-3.903-2.125-3.735-4.368
s2.127-3.923,4.376-3.753C631.344,1099.3,633.018,1101.256,632.832,1103.497z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M612.552,1101.958c-0.147,2.236-2.08,3.963-4.313,3.839c-2.233-0.121-3.939-2.041-3.81-4.286
c0.13-2.246,2.062-3.967,4.313-3.844C610.996,1097.792,612.701,1099.705,612.552,1101.958z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M592.245,1100.846c-0.109,2.246-2.009,3.969-4.243,3.848c-2.232-0.125-3.974-1.969-3.883-4.229
c0.09-2.234,1.994-4.036,4.246-3.91C590.617,1096.678,592.354,1098.599,592.245,1100.846z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M571.923,1100.069c-0.067,2.249-1.937,4.013-4.172,3.938c-2.235-0.072-4.008-1.954-3.959-4.203
s1.917-4.013,4.172-3.938C570.219,1095.939,571.992,1097.821,571.923,1100.069z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M551.591,1099.659c-0.024,2.249-1.858,4.056-4.095,4.035c-2.235-0.021-4.044-1.861-4.04-4.11
c0.005-2.25,1.838-4.057,4.095-4.035C549.808,1095.569,551.617,1097.41,551.591,1099.659z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M531.254,1099.629c0.021,2.249-1.777,4.102-4.012,4.135s-4.08-1.762-4.122-4.011
s1.755-4.101,4.012-4.135C529.39,1095.584,531.235,1097.38,531.254,1099.629z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M510.921,1099.995c0.066,2.248-1.69,4.146-3.923,4.237s-4.116-1.655-4.206-3.902
c-0.089-2.248,1.667-4.146,3.923-4.238S510.854,1097.746,510.921,1099.995z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M490.602,1100.832c0.115,2.257-1.604,4.111-3.83,4.286c-2.229,0.151-4.149-1.544-4.291-3.789
c-0.141-2.245,1.574-4.188,3.827-4.344C488.561,1096.811,490.485,1098.596,490.602,1100.832z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M470.307,1102.16c0.168,2.243-1.503,4.185-3.731,4.337c-2.23,0.126-4.185-1.454-4.378-3.714
c-0.191-2.223,1.471-4.277,3.726-4.406C468.176,1098.224,470.139,1099.917,470.307,1102.16z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M450.05,1103.956c0.222,2.238-1.401,4.228-3.624,4.441s-4.226-1.425-4.474-3.66s1.375-4.225,3.624-4.441
S449.828,1101.717,450.05,1103.956z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M429.843,1106.237c0.278,2.231-1.292,4.269-3.507,4.549c-2.214,0.28-4.258-1.299-4.562-3.527
c-0.306-2.228,1.265-4.265,3.507-4.549C427.521,1102.426,429.564,1104.005,429.843,1106.237z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M409.7,1109.023c0.337,2.225-1.177,4.311-3.382,4.659c-2.204,0.35-4.288-1.167-4.653-3.387
s1.149-4.306,3.381-4.659C407.279,1105.283,409.363,1106.8,409.7,1109.023z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M389.635,1112.332c0.397,2.215-1.057,4.35-3.248,4.771c-2.19,0.42-4.313-1.029-4.742-3.238
c-0.428-2.208,1.027-4.344,3.248-4.771C387.114,1108.669,389.237,1110.118,389.635,1112.332z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M369.667,1116.194c0.461,2.202-0.929,4.387-3.104,4.88c-2.175,0.494-4.337-0.885-4.829-3.08
c-0.492-2.195,0.898-4.38,3.104-4.88C367.044,1112.613,369.207,1113.993,369.667,1116.194z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M349.833,1120.692c0.529,2.196-0.82,4.324-2.969,4.922c-2.156,0.568-4.356-0.736-4.914-2.915
c-0.558-2.181,0.764-4.414,2.951-4.99C347.083,1117.104,349.31,1118.516,349.833,1120.692z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M330.152,1125.812c0.594,2.168-0.673,4.389-2.829,4.957c-2.152,0.58-4.375-0.599-5.006-2.773
c-0.622-2.146,0.613-4.479,2.798-5.066C327.303,1122.352,329.558,1123.643,330.152,1125.812z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M310.639,1131.538c0.663,2.149-0.529,4.416-2.662,5.062c-2.132,0.648-4.428-0.566-5.121-2.697
c-0.699-2.147,0.495-4.408,2.66-5.066C307.683,1128.179,309.977,1129.389,310.639,1131.538z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M291.32,1137.883c0.733,2.126-0.379,4.438-2.486,5.165c-2.107,0.728-4.437-0.396-5.205-2.513
c-0.768-2.114,0.346-4.427,2.486-5.165C288.256,1134.631,290.586,1135.756,291.32,1137.883z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M272.222,1144.862c0.806,2.101-0.225,4.458-2.301,5.265c-2.076,0.809-4.44-0.229-5.281-2.314
c-0.84-2.088,0.19-4.444,2.301-5.266S271.416,1142.763,272.222,1144.862z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M253.371,1152.484c0.878,2.069-0.065,4.471-2.108,5.358c-2.042,0.891-4.438-0.056-5.351-2.11
c-0.913-2.058,0.031-4.456,2.107-5.36C250.096,1149.468,252.492,1150.413,253.371,1152.484z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M234.793,1160.754c0.952,2.038,0.098,4.479-1.906,5.45c-2.003,0.972-4.428,0.12-5.415-1.901
c-0.986-2.021-0.133-4.461,1.905-5.449C231.417,1157.864,233.841,1158.715,234.793,1160.754z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M216.518,1169.676c1.025,2.002,0.267,4.48-1.694,5.536c-1.96,1.056-4.41,0.302-5.47-1.682
c-1.06-1.984-0.302-4.463,1.694-5.536S215.492,1167.674,216.518,1169.676z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M198.607,1179.312c1.1,1.964,0.386,4.384-1.512,5.55c-1.914,1.138-4.384,0.484-5.517-1.458
s-0.472-4.456,1.476-5.614C194.986,1176.604,197.509,1177.35,198.607,1179.312z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M181.089,1189.639c1.171,1.92,0.568,4.399-1.346,5.537c-1.895,1.168-4.359,0.653-5.571-1.258
c-1.198-1.889-0.66-4.47,1.269-5.659C177.389,1187.101,179.917,1187.718,181.089,1189.639z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M163.96,1200.597c1.242,1.876,0.738,4.385-1.125,5.604c-1.86,1.223-4.415,0.692-5.674-1.137
c-1.291-1.876-0.777-4.369,1.117-5.614C160.173,1198.207,162.718,1198.722,163.96,1200.597z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M147.246,1212.176c1.312,1.827,0.908,4.36-0.901,5.658c-1.809,1.298-4.365,0.888-5.709-0.916
c-1.344-1.804-0.94-4.337,0.9-5.658C143.377,1209.939,145.934,1210.349,147.246,1212.176z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M130.974,1224.367c1.379,1.776,1.079,4.333-0.671,5.71c-1.75,1.376-4.312,1.071-5.723-0.681
c-1.411-1.753-1.11-4.309,0.67-5.71C127.031,1222.287,129.594,1222.591,130.974,1224.367z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M115.145,1237.131c1.445,1.725,1.248,4.3-0.439,5.753s-4.25,1.254-5.725-0.443
c-1.475-1.699-1.278-4.275,0.439-5.753C111.136,1235.208,113.7,1235.407,115.145,1237.131z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M99.778,1250.451c1.507,1.67,1.413,4.261-0.209,5.786c-1.622,1.524-4.183,1.43-5.718-0.215
c-1.536-1.645-1.441-4.234,0.209-5.785C95.71,1248.686,98.271,1248.781,99.778,1250.451z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M84.958,1264.38c1.586,1.634,1.475,4.113-0.054,5.734c-1.556,1.594-4.109,1.599-5.703,0.011
c-1.594-1.588-1.602-4.188-0.019-5.809C80.738,1262.669,83.411,1262.785,84.958,1264.38z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M70.674,1278.854c1.623,1.559,1.676,4.112,0.119,5.705c-1.58,1.571-4.1,1.696-5.749,0.165
c-1.647-1.528-1.78-4.157-0.174-5.756C66.453,1277.348,69.051,1277.297,70.674,1278.854z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M56.903,1293.814c1.676,1.5,1.829,4.062,0.343,5.723c-1.486,1.659-4.07,1.811-5.77,0.338
c-1.7-1.474-1.853-4.035-0.342-5.722C52.645,1292.466,55.228,1292.314,56.903,1293.814z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M43.604,1309.195c1.726,1.442,1.978,4.01,0.564,5.731c-1.414,1.724-3.977,1.973-5.725,0.557
s-2-3.982-0.564-5.731C39.315,1308.002,41.878,1307.752,43.604,1309.195z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M30.782,1324.979c1.772,1.387,2.121,3.952,0.779,5.733c-1.341,1.78-3.882,2.122-5.675,0.765
c-1.793-1.359-2.142-3.927-0.779-5.732C26.469,1323.938,29.01,1323.594,30.782,1324.979z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M18.542,1341.221c1.826,1.339,2.173,3.828,0.88,5.652c-1.276,1.841-3.792,2.271-5.619,0.959
c-1.828-1.312-2.268-3.876-0.985-5.728C14.123,1340.265,16.739,1339.899,18.542,1341.221z"/>
                    </g>
                    <g>
                      <path fill="#FFFFFF" d="M6.851,1357.86c1.835,1.301,2.288,3.848,1.012,5.688c-1.276,1.841-3.804,2.288-5.646,0.997
c-1.842-1.291-2.295-3.838-1.012-5.688C2.488,1357.006,5.016,1356.561,6.851,1357.86z"/>
                    </g>
                  </g>
                </g>
              </g>
              <g>
                <pattern  id="SVGID_4_" xlink:href="#pattern4" patternTransform="matrix(1 0 0 -1 861.8438 -17374.4141)">
                </pattern>
                <path fill="url(#SVGID_4_)" d="M2701.522,1818.984l0.654-463.638c-69.97-132.632-229.685-293.622-504.211-293.622
c-418.013,0-456.843,219.668-756.267,219.668c-298.481-8.003-612.265-439.339-979.502-439.339
c-140.164,0-342.062,36.149-462.282,219.87v757"/>
              </g>
              <g>
                <pattern  id="pattern5" xlink:href="#New_Pattern_8" patternTransform="matrix(1 0 0 -1 861.8438 -17374.4141)">
                </pattern>
                <path fill="url(#pattern5)" d="M2193.611,1061.6c-418.012,0-456.84,219.668-756.264,219.668
c-298.482-8.002-612.266-439.338-979.502-439.338c-138.559,0-337.442,35.329-458.118,213.617v38
C120.403,915.259,319.288,879.93,457.845,879.93c367.238,0,681.021,431.336,979.503,439.338
c299.424,0,338.252-219.668,756.264-219.668c274.527,0,434.242,160.99,504.213,293.623v-38
C2627.854,1222.59,2468.14,1061.6,2193.611,1061.6z"/>
              </g>
              
              <g transform="translate(0, -100)" id="js-blue-train-cabin1">
                <use xlink:href="#cabin1">
                </use>
              </g>
              <g transform="translate(0, -100)" id="js-blue-train-cabin2">
                <use xlink:href="#cabin1">
                </use>
              </g>
              <g transform="translate(0, -100)" id="js-blue-train-cabin3">
                <use xlink:href="#cabin1">
                </use>
              </g>
              <g transform="translate(0, -100)" id="js-blue-train-cabin4">
                <use xlink:href="#cabin1">
                </use>
              </g>
              <g transform="translate(0, -100)" id="js-blue-train-cabin5">
                <use xlink:href="#cabin1">
                </use>
              </g>
              
              <path id="js-blue-path" fill="none" stroke="#008F9E" stroke-width="20" stroke-miterlimit="10" d="M3688.611,3298l-986.622-1938.619
c-10.886-20.635-23.173-40.529-36.646-59.574c-14.835-20.972-31.121-40.918-48.696-59.65
c-18.963-20.213-39.437-39.014-61.223-56.147c-23.338-18.354-48.183-34.79-74.222-49.061
c-28.022-15.356-57.414-28.191-87.695-38.394c-33.051-11.135-67.135-19.123-101.643-24.144
c-38.457-5.595-77.212-7.183-116.035-6.446c-36.716,0.695-73.418,3.188-109.822,8.057c-30.979,4.146-61.731,10.027-91.978,17.927
c-26.409,6.896-52.406,15.338-77.838,25.25c-22.928,8.938-45.373,19.065-67.399,30.032c-20.508,10.211-40.646,21.14-60.666,32.271
c-19.202,10.674-38.306,21.527-57.638,31.965c-19.12,10.322-38.479,20.226-58.312,29.115c-20.402,9.146-41.301,17.196-62.688,23.725
c-23.146,7.064-46.821,12.333-70.771,15.789c-27.45,3.961-55.368,5.797-83.104,5.278c-31.83-0.596-63.534-6.073-93.687-16.298
c-29.197-9.9-56.865-24.207-81.867-42.24c-24.813-17.896-46.978-39.435-65.606-63.701c-18.813-24.506-34-51.772-44.903-80.682
c-11.253-29.835-17.902-61.355-19.757-93.185c-1.885-32.381,1.125-65.041,9.046-96.5c7.612-30.227,19.743-59.287,35.871-85.961
c15.855-26.225,35.545-50.113,58.264-70.682c22.733-20.584,48.48-37.821,76.211-50.923c28.33-13.387,58.68-22.413,89.719-26.685
c32.012-4.405,64.725-3.814,96.552,1.774c30.737,5.397,60.612,15.496,88.332,29.829c27.218,14.072,52.313,32.188,74.293,53.53
c22.009,21.372,40.872,45.958,55.812,72.752c15.232,27.321,26.353,56.902,32.886,87.493c6.796,31.816,8.643,64.68,5.562,97.063
c-3.003,31.571-10.764,62.662-23.009,91.92c-11.903,28.438-28.007,55.097-47.623,78.881c-19.465,23.603-42.364,44.353-67.793,61.363
c-25.682,17.181-53.913,30.514-83.521,39.362c-29.903,8.938-62.039,14.062-93.307,12.789c-25.019-1.019-49.859-4.986-74.134-11.06
c-25.587-6.401-50.562-15.112-74.894-25.257c-25.902-10.799-51.106-23.228-75.778-36.586
c-26.103-14.135-51.624-29.323-76.794-45.051c-26.276-16.418-52.176-33.435-77.937-50.648
c-26.472-17.689-52.797-35.598-79.207-53.381c-26.71-17.986-53.506-35.85-80.604-53.246c-27.009-17.34-54.319-34.221-82.13-50.246
c-27.388-15.781-55.267-30.738-83.785-44.38c-27.885-13.337-56.392-25.418-85.567-35.647c-28.56-10.012-57.768-18.24-87.478-24.048
c-29.489-5.764-59.462-9.12-89.516-9.583c-25.559-0.394-51.197,0.713-76.653,2.99c-27.483,2.458-54.84,6.454-81.829,12.212
c-28.697,6.123-56.983,14.246-84.431,24.636c-28.766,10.891-56.599,24.281-82.865,40.301c-27.729,16.912-53.662,36.746-77.13,59.205
c-22.807,21.823-43.242,46.078-61.069,72.123L-560.5,1831.9"/>
              <path fill="none" stroke="#EECA43" stroke-miterlimit="10" d="M102.739,1298"/>
              
              <g>
                
              </g>
              
            </svg>
          </div>
        </div>
        
        
      </div>
      
      
      
      
      
      
    </div>
    
    
    
    <div id="sun">
      
      <div class="container-sun">
        <svg class="svg-sun" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin meet">
          <circle cx="50" cy="50" r="25" id="sun">
          </circle>
        </svg>
      </div>
    </div>
    
    
    
    
    
    
    
    
    
  </div>
  
  
  
  
  
  
  
  
  <div id="space" style="position:relative">
    
    
    <div style="width:1366px;height:1200px;
background-image:url(images/space/background.png);">
  <img src="images/space/crater.png" class="crater">
  <img src="images/space/jupiter.png" class="jupiter">
  <img src="images/space/earth.png" class="earth">
  <img src="images/space/alien.png" class="alien">
  <img src="images/space/asteroid.png" class="asteroid">
  <img src="images/space/astronaut.png" class="astronaut">
  <img src="images/space/ring.png" class="ring">
  <img src="images/space/shuttle.png" class="shuttle">
  <img src="images/space/rock1.png" class="rock1">
  <img src="images/space/rocket.png" class="rocket">
  <img src="images/space/rock2.png" class="rock2">
  
   <div id="aboutus">
 <h3>What is Riviera</h3>
Riviera is VIT University’s ISO certified Annual International Sports and Cultural Carnival. This festival is an endeavour to provide a platform to all individuals to showcase their skills and develop their potential via arts, sports, music, dance, drama, debate or fashion. The four day extravaganza sees participation of students from diverse backgrounds, nationalities and cultures.<br /><br />
<a href="http://about.vitriviera.com" target="_blank"><button style="background-color:white;color:blue;width:150px;height:40px;border-radius:10px;">Know More</button></a>
 </div>
 <div id="aboutvit">
 <h3>About &nbsp; VIT</h3>
 
VIT University was established with the aim of providing quality higher education on par with international standards. It persistently seeks and adopts innovative methods to improve the quality of higher education on a consistent basis.<br /><br />
<a href="https://vit.ac.in" target="_blank"><button style="background-color:white;color:blue;width:150px;height:40px;border-radius:10px;">Know More</button></a>
 </div>
 <div id="mapcntct">
 <div id="custom-places" class="small-map"></div>
 <div id="contact">
 <form role="form" action="php/form.submit.php" method="POST">
 
  <div class="form-group">
     
     <input type="text" class="form-control" name="audi_name" id="audi_name" placeholder="Enter Your Name" name="name" >
 </div>
   <div class="form-group">
   
    <input type="email" class="form-control" name="audi_name" id="audi_name" placeholder="Enter Your Email" name="email" >
   </div>
   <div class="form-group">
     
     <input type="text" class="form-control" name="audi_name" id="audi_name" placeholder="Enter Your School/college name"  name="company">
   </div>
     <div class="form-group">
                           
        <textarea class="form-control" name="audi_address" rows="3" placeholder="Message" name="message" ></textarea><br>
            </div>   
            
             <center>
              <button type="submit" class="btn btn-primary" >Submit</button>
                          <button type="reset" class="btn btn-danger">Reset</button>
             </center>
    
 </form>
 
 
 </div>
 
 </div>
 
 
 
	</div>
    
    <div class="experiment" style="height:340px">
      <div class="wrapper">
        
        <div id="experiment">
          <div id="background">
          </div>
          
        </div>
        
      </div>
    </div>
    
  </div>
  
  <div id="footer">
  <img src="images/footer/footer.png" width="1366px" />
  
  <div id="carac">
  <img src="images/footer/c1.png" />
  </div>
  <div id="riveralogo">
  <img src="images/logo.png" />
  </div>
  <div id="iso">
  <img src="images/footer/isologo.png" />
  </div>
   <div id="plugin">
  <a href="https://www.facebook.com/rivieraVITUniversity?ref=br_tf"><div id="plu" style="width:33px; height:33px; margin:3px; float:left">
  <img src="images/footer/fb.png" /></div></a>
   <div id="plu" style="width:33px; height:33px; margin:3px; float:left">
  <a href="https://twitter.com/VIT_univ"> <img src="images/footer/twitter.png" /></a>
   </div>
   <a href="https://plus.google.com/101951515565071800209"> <div id="plu" style="width:33px; height:33px; margin:3px; float:left">
    <img src="images/footer/gplus.png" />
    </div></a>
  
  </div>
  
  <div id="footcontent">
  <div id="c">
  <p id="c-head"> Registration</p>
  <p id="c-text" style="">
Akshat Rajvanshi<br />
(+91)81487 48747
<br />
registration.riviera@vit.ac.in
  
  </p>
  </div>
  <div id="c">
   <p id="c-head"> Hospitality</p>
   <p id="c-text" style="">
Amrit Kumar Pandey<br />
(+91)96318 47503
01<br />
<p id="c-head">Events and Culturals</p>
   <p id="c-text" style="">
Akshay Choudhary<br />
(+91) 72001 84665
<br />

  </p>
  </div>
  <div id="c">
   <p id="c-head"> Sales</p>
    <p id="c-text" style="">
 Vicki Anand<br />
+(91)96007 52502
<br />
   <p id="c-head"> Sports</p>
    <p id="c-text" style="">
Ishan Dhar<br />
(+91) 96260 71410
<br />

  </p>
  </div>
  <div id="c">
      <p id="c-head">Sponsorship</p>
    <p id="c-text" style="">
Sajed Ahmed<br />
(+91) 95661 26401
<br />



  </p>
  </div>
  
  </div>
  
  
  <div id="text">
  <p style="color:white; font-family:'Sans-Serif', cursive; position:absolute;top:15px;left:550px;">Copyrights @ VIT Riviera'15 </p>
  </div>
  </div>
</body>

</html>

<style>

#logo
{
	position:absolute;
	 z-index:99999;
	  top:6px; 
	  left:588px;
	  position:fixed;
	  
}
#vitlogo
{
	position:absolute;
	 z-index:99999;
	  top:517px; 
	  left:1040px;
	  
	   
	   width:250px;
	   position:fixed;
	   
}
#vitlogo img
{
	width:100%;

}

  body {
    max-width: 1366px;
 
    overflow-x:hidden;
	
  }
  
  #landing{
	  width:1366px;
	  height:670px;
	 
	  background-image:url(images/backgroung.png);
  }
  #landing img{
	  width:1366px;
	  height:670px;
  }
  .nav{top:15px;}
  #rivmenu{
	  position:fixed;
	  z-index:99999;
	  left:170px;
  }
  
  
  
  
  
  
  
  
  

  #tajmahal {
    width: 1366px;
    height: 720px;
    margin-top: -4px;
    margin-left: -4px;
    
	position:relative;
	overflow:hidden;
  }
  #tajmahal #back {
    width: 100%;
    height: 720px;
    top: -2px;
    left: -2px;
  }
  #back #background {
    width: 100%;
    height: 100%;
  }
  #tajmahal #clouds {
    height: 200px;
    width: 1366px;
   
    position: absolute;
    top: 0px;
    left: 0px;
  }
  #tajmahal #pics {
    height: 250px;
    width: 400px;
    
    position: absolute;
    top: 180px;
    left: 20px;
    z-index: 900;
  }
  #pics img {
    width: 100%;
    height: 100%;
  }
  #tajmahal #tech-slideshow {
     height: 400px;
    width: 1366px;
    
    position: absolute;
    top: 310px;
    left: 0px;
    overflow: hidden;
  }
  #tajmahal #tech-slideshow > div {
    height: 350px;
    width: 10000px;
    
    position: absolute;
    top: 0px;
    left: 0px;
    z-index: 999;
    background-image: url(road.png);
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    -moz-transition: opacity 0.5s ease-out;
    -o-transition: opacity 0.5s ease-out;
    -webkit-transition: opacity 0.5s ease-out;
    -ms-transition: opacity 0.5s ease-out;
    -webkit-animation: moveSlideshow 60s linear infinite;
    -moz-animation: moveSlideshow 60s linear infinite;
  }
  #auto1 {
    height: 150px;
    width: 150px;
  
    position: absolute;
    top: 485px;
    left: 250px;
    z-index: 1200;
    
  }
 
  @-webkit-keyframes moveSlideshow {
    0% {
      left: 0;
    }
    100% {
      left: -1684px;
    }
  }
  @-moz-keyframes moveSlideshow {
    0% {
      left: 0;
    }
    100% {
      left: -1684px;
    }
  }
  #scroll {
    width: 330px;
    height: 130px;
   
    background-image: url(cloud.png);
    top: 10px;
    left: 50px;
    position: relative;
    z-index: 50;
  }
  #scroll2 {
    width: 330px;
    height: 130px;
   
    background-image: url(cloud.png);
    
    top: -50px;
    left: 220px;
    position: relative;
    z-index: 500;
  }
  #scroll3 {
    width: 230px;
    height: 100px;
  
    background-image: url(cloud%20small.png);
    top: -250px;
    left: 750px;
    position: relative;
  }
  #scroll4 {
    width: 400px;
    height: 255px;
  
    background-image: url(cloud%20fade.png);
    top: -350px;
    left: 1050px;
    position: relative;
    z-index: 220;
  }
  #scroll5 {
    width: 300px;
    height: 105px;
   
    background-image: url(cloud.png);
    top: -600px;
    left: 450px;
    position: relative;
    z-index: 50;
  }
  #scroll6 {
    width: 330px;
    height: 130px;
 
    background-image: url(cloud.png);
    
    top: -680px;
    left: 550px;
    position: relative;
    z-index: 620;
  }
  #clouds #plane {
    position: relative;
    top: -610px;
    left: 0px;
    z-index: 100;
   
    background-repeat: repeat;
  }
   #factory {
   
    margin-left: -10px;
    position: relative;
    margin-top: -90px;
    z-index: 1020;
	overflow:hidden;
	width:1366px;
	height:1000px
    
  }
  #factory #factclouds {
    position: absolute;
    top: 0;
    left: 0;
    height: 300px;
    width: 1366px;
   
  }
  #fcloud1 {
    width: 275px;
    height: 161px;
   
    position: absolute;
    top: 40px;
    left: 60px;
    background-image:url(images/fcloud.png);
  }
  #fcloud2 {
    width: 275px;
    height: 161px;
    
    position: absolute;
    top: 90px;
    left: 300px;
    background-image:url(images/fcloud.png);
  }
  #fcloud3 {
    width: 275px;
    height: 161px;
    
    position: absolute;
    top: 100px;
    left: 800px;
    background-image:url(images/fcloud.png);
  }
  #fcloud4 {
    width: 275px;
    height: 161px;

    position: absolute;
    top: 120px;
    left: 1000px;
    background-image:url(images/fbgcloud.png);
  }
  #actfactory {
    width: 400px;
    height: 307px;
    
    position: absolute;
    top: 300px;
    z-index: 70;
  }
  #actfactory img {
    width: 100%;
    height: 100%;
  }
  #froad {
    width: 945px;
    height: 180px;
   
    position: absolute;
    top: 520px;
    z-index: 60;
  }
  #froad img {
    width: 100%;
    height: 100%;
  }
   #nature {
    width: 1366px;
    height: 1000px;
    position: absolute;
    left: 0px;
    top: 0px;
   
    z-index: 2000;
  }
   #score
  {
	  width:500px;
	  height:200px;
	  position:absolute;
	 
	  top:370px;
	  left:420px;
  }
  #nature img {
    width: 100%;
    height: 100%;
  }
  #bottom {
    
    top:600px;
    position:absolute;
    z-index: 800;

    width:1366px;
  }
  #bottom img {
    width: 100%;
    height: 100%;
  }
  
  
  
  
  <!--city style---------->
  
  #imgcity{

    position:relative;
    margin-top:-100px;
    width:1366px;
    
    
  }
  #imgcity img{
    width: 100%;
    height: 100%;
  }
  
  #sky{
    width:1366px;
    position:absolute;
    top:350px;
    z-index:-4;
    
  }
  #sun{
    height:300px;
    width:300px;
    position:absolute;
    top:3020px;
    left:1000px;
    z-index:1500;
  }
  
  #rolercoaster
  {
    position:absolute;
    top:870px;
    left:840px;
    width:500px;
    height:330px;
    
  }
  
  
  
  
  
  <!--------space css----->
  #space{
    width:1366px;
    background-image:url(images/space/background.png);
	overflow:hidden;
  }
  
  #proshow
  {
    top:100px;
    width:1366px;
    height:766px;
    position:relative;
   
    z-index:900;
  }
  #proshow img
  {
    width:100%;
    height:100%;
  }
  #mountains{
    width:1366px;

    position:absolute;
    top:0px;
    left:0px;
    z-index:-2;
  }
  #mountains img
  {
    width:100%;
    
  }
  #trees{
    width:1366px;
    position:absolute;
    top:0px;
    left:0px;
    z-index:-1;
  }
  #drum
  {
    width:330px;
    height:230px;
    position:absolute;
    top:280px;
    left:530px;
  }
  #drummer img{
    margin-left:50px;
    
    height:215px;
    width:192px;
  }
  #singer
  {
	  width:250px;
	  height:220px;
	  position:absolute;
	  top:50px;
	  left:570px;
  }
  #singer img{width:280px;}
  
  #guitar1
  {
	  width:160px;
	  height:220px;
	  position:absolute;
	  top:110px;
	  left:440px;
	  
  }
  #guitar1 img
  {
	  width:166px;
  }
  #piano
  {
	  width:166px;
	  height:220px;
	  position:absolute;
	  top:115px;
	  left:808px;
	  
  }
  #piano img
  {
	  height:220px;
	  width:140px
  }

  
  
  #crowd1{
	  height:280px;
	  width:1366px;
	  position:absolute;
	  top:410px;
	  left:-1366px;
  }
   
   
   #footer{
	  height:300px;
	  width:1366px;
	  
	  z-index:99;
	  margin-top:-400px;
	  position:absolute;
  }
  #footer #plugin
   {
	   width:120px;
	   height:45px;
	   text-align:center;
	   top:20px;
	   left:950px;
	  
	   background-color:white;
	   border-radius:10px;
	   position:absolute;
   }
  
  #footer #carac{
	  position:absolute;
	  top:117px;
	  left:1000px;
	 
  }
  #footer #riveralogo
  {
	   position:absolute;
	  top:280px;
	  left:40px;
	 
  }
   #footer #iso
  {
	   position:absolute;
	  top:280px;
	  left:1150px;
	 
  }
   #footer #text
   {
	   width:1366px;
	   text-align:center;
	   top:370px;
	   position:absolute;
   }
   #footcontent
   {
	   position:absolute;
	   width:900px;
	   height:250px;
	
	   top:70px;
	   left:140px;
   }
    #footcontent #c
   {
	   width:200px;
	   height:220px;
	
	   float:left;
	   margin:9px;
	   text-align:center;
	   color:white;
	   
   }
   #c #c-head
   {
	   font-family:'Open Sans', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
	    color:#ffe84f;
		 font-size: 18px;
   }
   #c #c-text
   {
	   font-size:13px;
	    color:#FFF;
	    font-family: 'Open Sans', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
   }
   
   
     
  #aboutus
  {
	  position:absolute; width:350px; height:300px; top:180px; left:140px;
	   font-size:17px;
    font-family: 'Pacifico';
	 color:white;
  font-style: normal;
  text-align:center;
  z-index:500;
  opacity:0.7;

  }
    #aboutus h3
	{
		  font-family: 'Pacifico';
	 color:white;
  font-style: normal;
  text-align:center;
	}
  #aboutvit
  {
	  position:absolute; width:300px; height:300px; top:180px; left:840px;
	 
  font-size:17px;
    font-family: 'Pacifico';
	 color:white;
  font-style: normal;
  text-align:center;
  opacity:0.7;
  

  }
  #aboutvit h3
	{
		  font-family: 'Pacifico';
	 color:white;
  font-style: normal;
  text-align:center;
	}
	#mapcntct
	{ position:absolute; width:1366px; height:400px; top:700px;

	
	z-index:780;
		
	}
	#mapcntct #custom-places
	{
		width:700px;
		
		left:100px;
		opacity:0.86;
		position:absolute
	}
	#mapcntct #contact
	{
		
		position:absolute;
		left:900px;
		top:50px;
		width:350px;
		height:300px;
		opacity:0.8;
		
	}
  
  
  
</style>

<!---------------roaler coaster script-------------------->


<!-- 
<script src='http://codepen.io/assets/libs/fullpage/jquery.js'>
</script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/6859/tween.min_1.js'>
</script>

-->

<script src="js/city.js">
</script>

<!---------------Endddddd roaler coaster script-------------------->

<!----map script------------------>

<!-- Dependencies -->
		<script src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>
		<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/bootstrap.js"></script>

		<!-- Mapsed JavaScript -->
		<script src="js/mapsed.js"></script>
		
		<!-- Examples JavaScript -->
		<script src="js/custom1-places-example.js"></script>



<!----------scrollbar script--------------->

<script>window.jQuery || document.write('<script src="js/minified/jquery-1.11.0.min.js"><\/script>')</script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
		(function($){
			$(window).load(function(){
				
				$("#content-3").mCustomScrollbar({
					scrollButtons:{enable:true},
					theme:"light-thick",
					scrollbarPosition:"outside"
				});
				
				$("#content-4").mCustomScrollbar({
					theme:"rounded-dots",
					scrollInertia:400
				});
				
				$("#content-5").mCustomScrollbar({
					axis:"x",
					theme:"dark-thin",
					autoExpandScrollbar:true,
					advanced:{autoExpandHorizontalScroll:true}
				});
				
				$("#content-6").mCustomScrollbar({
					axis:"x",
					theme:"light-3",
					advanced:{autoExpandHorizontalScroll:true}
				});
				
				$("#content-7").mCustomScrollbar({
					scrollButtons:{enable:true},
					theme:"3d-thick"
				});
				
				$("#content-8").mCustomScrollbar({
					axis:"yx",
					scrollButtons:{enable:true},
					theme:"3d",
					scrollbarPosition:"outside"
				});
				
				$("#content-9").mCustomScrollbar({
					scrollButtons:{enable:true,scrollType:"stepped"},
					keyboard:{scrollType:"stepped"},
					mouseWheel:{scrollAmount:188},
					theme:"rounded-dark",
					autoExpandScrollbar:true,
					snapAmount:188,
					snapOffset:65
				});
				
			});
		})(jQuery);
	</script>

<script>
		(function($){
			$(window).load(function(){
				
				$.mCustomScrollbar.defaults.theme="light-2"; //set "light-2" as the default theme
				
				$(".demo-y").mCustomScrollbar();
				
				$(".demo-x").mCustomScrollbar({
					axis:"x",
					advanced:{autoExpandHorizontalScroll:true}
				});
				
				$(".demo-yx").mCustomScrollbar({
					axis:"yx"
				});
				
				$(".scrollTo a").click(function(e){
					e.preventDefault();
					var $this=$(this),
						rel=$this.attr("rel"),
						el=rel==="content-y" ? ".demo-y" : rel==="content-x" ? ".demo-x" : ".demo-yx",
						data=$this.data("scroll-to"),
						href=$this.attr("href").split(/#(.+)/)[1],
						to=data ? $(el).find(".mCSB_container").find(data) : el===".demo-yx" ? eval("("+href+")") : href,
						output=$("#info > p code"),
						outputTXTdata=el===".demo-yx" ? data : "'"+data+"'",
						outputTXThref=el===".demo-yx" ? href : "'"+href+"'",
						outputTXT=data ? "$('"+el+"').find('.mCSB_container').find("+outputTXTdata+")" : outputTXThref;
					$(el).mCustomScrollbar("scrollTo",to);
					output.text("$('"+el+"').mCustomScrollbar('scrollTo',"+outputTXT+");");
				});
				
			});
		})(jQuery);
	</script>
  <script>

  </script>
  

<!--------------audioooooooooooooooooo------->
  <audio id="drumsound" autoplay autobuffer>
        <source src=""  type="audio/mpeg">
        </audio>
        <audio id="singersound" autoplay autobuffer>
        <source src=""  type="audio/mpeg">
        </audio>
        <audio id="guitarsound" autoplay autobuffer>
        <source src=""  type="audio/mpeg">
        </audio>
        <audio id="pianosound" autoplay autobuffer>
        <source src=""  type="audio/mpeg">
        </audio>
       