<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
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
     

#map-canvas {
       
        height: 400px;
position: relative;
overflow: hidden;
transform: translateZ(0px);
background-color: rgb(229, 227, 223);
z-index: 9999;
top: 10px;
left: 100px;
width: 700px;

      }
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


  

  
  </head>
  
  <body>

   <div id="landing" style="position:relative">
  <div id="rivmenu">
<div class"container">
	<ul class="nav">
		
                
		<li>
			<a>Events</a>
			<ul>
				<li><a href="http://ping.vitriviera.com/events/Moves-Like-Jagger.html" target="_blank">Moves Like Jagger (Dance)</a></li>
				<li><a href="http://ping.vitriviera.com/events/rock-on.html" target="_blank">Rock On (Music)</a></li>
				<li><a href="http://ping.vitriviera.com/events/hall-of-fame.html" target="_blank">Hall of Fame </a></li>
				<li>
					<a >Words worth</a>
					<ul>
						<li><a href="http://ping.vitriviera.com/events/wordsworth-english.html" target="_blank">English</a></li>
						<li><a href="http://ping.vitriviera.com/events/wordshindi.html" target="_blank">Hindi</a></li>
						
						<li><a href="events/wordstelugu.html" target="_blank">Telugu</a></li>
                        <li><a href="http://ping.vitriviera.com/events/wordstamil.html" target="_blank">Tamil</a></li>
                        <li><a href="http://ping.vitriviera.com/events/wordskannada.html" target="_blank">Kannada</a></li>
					</ul>
				</li>
				<li><a href="http://ping.vitriviera.com/events/drama.html" target="_blank">The World is a Stage(Dramatics)</a></li>
                <li><a href="http://ping.vitriviera.com/events/gaming.html" target="_blank">Cyber Engage</a></li>
                <li><a href="http://ping.vitriviera.com/events/funarena.html" target="_blank">Fun Area</a></li>
                <li><a href="http://ping.vitriviera.com/events/mixedbag.html" target="_blank">Mixed bag</a></li>
                <li><a href="http://ping.vitriviera.com/events/inquizitive.html" target="_blank">Inquizitive</a></li>
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
				<li><a href="#city" class="current">Team</a></li>
				<li><a href="#space" class="current">About</a></li>
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
      <img src="images/sports/sportsbg.gif" />
      
        
        <div id="score">
       <a href="" class="button grow"> <img src="images/sports/score.gif" /></a>
       </div>
        <div id="sportsbanda"><img src="images/CARACTERS/sports.png">
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
    
    
    
    
    
    <div id="proshowbanda" style="width:130px; position:absolute; top:320px; left:970px;">
    <a href="proshow.html" class="button grow"><img src="images/CARACTERS/rockstar.png" /></a>
    </div>
    <div id="crowd">
    <div id="crowd1">
    <img src="images/proshow/crowd1.svg" class="arrow" />
    </div>
    
    
    </div>
    
    
    
    
    
    
    
    
    
    
     </div>
  
  
  
  
  
  
  
  
  <div id="city">
    
    
    
    <div id="imgcity" style="position:relative;margin-top:100px;width:1366px;z-index:800;">
      <img src="images/city/final full landscape.gif" />
      <div id="sky">
      <img src="images/city/bg wave.png" />
        
      </div>
      <div id="teamcarac1">
        
        <img src="images/CARACTERS/1.svg">
       
      </div>
       <div id="teamcarac2">
        
        <img src="images/CARACTERS/character 3.svg">
       
      </div>
       <div id="teamcarac3">
        
        <img src="images/CARACTERS/character 4.svg" />
       
      </div>
      
      <div id="dialog1" style="position:absolute; top:280px; left:540px">
        
        <a href="#" class="button grow"><img src="images/city/box-flat-theme-message-iconleft.png" /></a>
       
      </div>
       <div id="dialog1" style="position:absolute; top:210px; left:800px">
        
       <a href="" class="button grow"> <img src="images/city/center diaglog.png" /></a>
       
      </div>
      <div id="dialog1" style="position:absolute; top:280px; left:1050px">
        
       <a href="" class="button grow"> <img src="images/city/box-flat-theme-message-iconright.png" /></a>
       
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
  
  
  
  
  
  
  
  
  <div id="space" style="position:relative;">
    
    
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
Riviera is VIT University’s ISO certified Annual International Sports and Cultural Carnival. This festival is an endeavour to provide a platform to all individuals to showcase their skills and develop their potential via arts, sports, music, dance, drama, debate or fashion. The four day extravaganza sees participation of students from diverse backgrounds, nationalities and cultures.
 </div>

<a href="#">
<input id="aboutbutton" type="submit" value="Know More!" /></a>
<div id="aboutvit">

 <h3>About &nbsp; VIT</h3>
 
VIT University was established with the aim of providing quality higher education on par with international standards. It persistently seeks and adopts innovative methods to improve the quality of higher education on a consistent basis.
 </div>
<a href="#">
<input id="aboutbutton1" type="submit" value="Know More!" /></a>
 <div id="mapcntct">
   <div id="map-canvas"></div>
 <div id="contact">
  <form role="form" action="#mapcntct" method="POST">
 
  <div class="form-group">
     
     <input type="text" class="form-control" name="yname" id="yname" placeholder="Enter Your Name" name="name" >
 </div>
   <div class="form-group">
   
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" name="email" >
   </div>
   <div class="form-group">
     
     <input type="text" class="form-control" name="school" id="school" placeholder="Enter Your School/college name"  name="company">
   </div>
     <div class="form-group">
                           
        <textarea class="form-control" name="message" id="message" rows="3" placeholder="Message"  ></textarea><br>
            </div>   
            
             <center>
              <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
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
  <!--img src="images/footer/c1.png" /-->
  </div>
  <div id="riveralogo">
  <img src="images/logo.png" />
  </div>
  <div id="iso">
  <img src="images/footer/isologo.png" />
  </div>
  
 <div id="socialicons">
  <a href="https://www.facebook.com/rivieraVITUniversity?ref=br_tf" target="_blank"><img src="icons/03.png" style="position:absolute;top:300px;left:550px;width:40px;height:40px;"></a>
  <a href="https://plus.google.com/101951515565071800209" target="_blank"><img src="icons/04.png" style="position:absolute;top:300px;left:600px;width:40px;height:40px;"></a>
  <a href="https://twitter.com/VITriviera" target="_blank"><img src="icons/01.png" style="position:absolute;top:300px;left:650px;width:40px;height:40px;"></a>
<a href="https://www.linkedin.com/company/vellore-institute-of-technology?trk=prof-following-company-logo" target="_blank"><img src="icons/05.png" style="position:absolute;top:300px;left:700px;width:40px;height:40px;"></a>
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
<br />
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
<p id="c-head"> Designers</p>
    <p id="c-text" style="color:white;">
<a href="https://www.facebook.com/sarthak8?fref=ts" target="_blank" style="color:white;">Sarthak Saxena</a><br>
<a href="https://www.facebook.com/t2013hackanurag" target="_blank" style="color:white;">Anurag Tiwari</a><br>
<a href="https://www.facebook.com/amit.rai1095?fref=ts" target="_blank" style="color:white;">Amit Rai</a><br>
<a href="https://www.facebook.com/meshamvil?fref=ts" target="_blank" style="color:white;">Shamvil Raza</a><br>
 
 <a href="https://www.facebook.com/sauraj.babu?fref=ts" target="_blank" style="color:white;">Sauraj Babu</a>
<br />


  </p>
  </div>
  
  </div>
  
  
  <div id="text">
  <p style="color:white; font-family:'Comic Sans MS', cursive;position: absolute;left: 550px;top: 12px;">Copyrights @ VIT Riviera'15 </p>
  </div>
  </div>

<script type='text/rocketscript'>
Date.now||(Date.now=function(){return(new Date).getTime()}),function(){"use strict";for(var t=["webkit","moz"],e=0;e<t.length&&!window.requestAnimationFrame;++e){var i=t[e];window.requestAnimationFrame=window[i+"RequestAnimationFrame"],window.cancelAnimationFrame=window[i+"CancelAnimationFrame"]||window[i+"CancelRequestAnimationFrame"]}if(/iP(ad|hone|od).*OS 6/.test(window.navigator.userAgent)||!window.requestAnimationFrame||!window.cancelAnimationFrame){var s=0;window.requestAnimationFrame=function(t){var e=Date.now(),i=Math.max(s+16,e);return setTimeout(function(){t(s=i)},i-e)},window.cancelAnimationFrame=clearTimeout}}(),function(t){t.snowfall=function(e,i){function s(s,n,a,h,r){this.id=r,this.x=s,this.y=n,this.size=a,this.speed=h,this.step=0,this.stepSize=o(1,10)/100,i.collection&&(this.target=w[o(0,w.length-1)]);var l=null;i.image?(l=t(document.createElement("img")),l[0].src=i.image):(l=t(document.createElement("div")),l.css({background:i.flakeColor})),l.attr({"class":"snowfall-flakes",id:"flake-"+this.id}).css({width:this.size,height:this.size,position:i.flakePosition,top:this.y,left:this.x,fontSize:0,zIndex:i.flakeIndex}),t(e).get(0).tagName===t(document).get(0).tagName?(t("body").append(l),e=t("body")):t(e).append(l),this.element=document.getElementById("flake-"+this.id),this.update=function(){if(this.y+=this.speed,this.y>d-(this.size+6)&&this.reset(),this.element.style.top=this.y+"px",this.element.style.left=this.x+"px",this.step+=this.stepSize,this.x+=S===!1?Math.cos(this.step):S+Math.cos(this.step),i.collection&&this.x>this.target.x&&this.x<this.target.width+this.target.x&&this.y>this.target.y&&this.y<this.target.height+this.target.y){var t=this.target.element.getContext("2d"),e=this.x-this.target.x,s=this.y-this.target.y,n=this.target.colData;if(void 0!==n[parseInt(e)][parseInt(s+this.speed+this.size)]||s+this.speed+this.size>this.target.height)if(s+this.speed+this.size>this.target.height){for(;s+this.speed+this.size>this.target.height&&this.speed>0;)this.speed*=.5;t.fillStyle="#fff",void 0==n[parseInt(e)][parseInt(s+this.speed+this.size)]?(n[parseInt(e)][parseInt(s+this.speed+this.size)]=1,t.fillRect(e,s+this.speed+this.size,this.size,this.size)):(n[parseInt(e)][parseInt(s+this.speed)]=1,t.fillRect(e,s+this.speed,this.size,this.size)),this.reset()}else this.speed=1,this.stepSize=0,parseInt(e)+1<this.target.width&&void 0==n[parseInt(e)+1][parseInt(s)+1]?this.x++:parseInt(e)-1>0&&void 0==n[parseInt(e)-1][parseInt(s)+1]?this.x--:(t.fillStyle="#fff",t.fillRect(e,s,this.size,this.size),n[parseInt(e)][parseInt(s)]=1,this.reset())}(this.x+this.size>c-f||this.x<f)&&this.reset()},this.reset=function(){this.y=0,this.x=o(f,c-f),this.stepSize=o(1,10)/100,this.size=o(100*i.minSize,100*i.maxSize)/100,this.element.style.width=this.size+"px",this.element.style.height=this.size+"px",this.speed=o(i.minSpeed,i.maxSpeed)}}function n(){for(l=0;l<h.length;l+=1)h[l].update();p=requestAnimationFrame(function(){n()})}var a={flakeCount:35,flakeColor:"#ffffff",flakePosition:"absolute",flakeIndex:999999,minSize:1,maxSize:2,minSpeed:1,maxSpeed:5,round:!1,shadow:!1,collection:!1,collectionHeight:40,deviceorientation:!1},i=t.extend(a,i),o=function(t,e){return Math.round(t+Math.random()*(e-t))};t(e).data("snowfall",this);var h=[],r=0,l=0,d=t(e).height(),c=t(e).width(),f=0,p=0;if(i.collection!==!1){var m=document.createElement("canvas");if(m.getContext&&m.getContext("2d"))for(var w=[],g=t(i.collection),u=i.collectionHeight,l=0;l<g.length;l++){var x=g[l].getBoundingClientRect(),z=t("<canvas/>",{"class":"snowfall-canvas"}),v=[];if(x.top-u>0){t("body").append(z),z.css({position:i.flakePosition,left:x.left+"px",top:x.top-u+"px"}).prop({width:x.width,height:u});for(var y=0;y<x.width;y++)v[y]=[];w.push({element:z.get(0),x:x.left,y:x.top-u,width:x.width,height:u,colData:v})}}else i.collection=!1}for(t(e).get(0).tagName===t(document).get(0).tagName&&(f=25),t(window).bind("resize",function(){d=t(e)[0].clientHeight,c=t(e)[0].offsetWidth}),l=0;l<i.flakeCount;l+=1)r=h.length,h.push(new s(o(f,c-f),o(0,d),o(100*i.minSize,100*i.maxSize)/100,o(i.minSpeed,i.maxSpeed),r));i.round&&t(".snowfall-flakes").css({"-moz-border-radius":i.maxSize,"-webkit-border-radius":i.maxSize,"border-radius":i.maxSize}),i.shadow&&t(".snowfall-flakes").css({"-moz-box-shadow":"1px 1px 1px #555","-webkit-box-shadow":"1px 1px 1px #555","box-shadow":"1px 1px 1px #555"});var S=!1;i.deviceorientation&&t(window).bind("deviceorientation",function(t){S=.1*t.originalEvent.gamma}),n(),this.clear=function(){t(e).children(".snowfall-flakes").remove(),t(".snowfall-canvas").remove(),h=[],cancelAnimationFrame(p)}},t.fn.snowfall=function(e){return"object"==typeof e||void 0==e?this.each(function(){new t.snowfall(this,e)}):"string"==typeof e?this.each(function(){var e=t(this).data("snowfall");e&&e.clear()}):void 0}}(jQuery);
</script>
<script type='text/rocketscript'>
/* <![CDATA[ */
var settings = {"wfs_letitsnow_activate":"enabled","wfs_letitsnow_scope":"site","wfs_letitsnow_flakeCount":"350","wfs_letitsnow_minSize":"1","wfs_letitsnow_maxSize":"5","wfs_letitsnow_minSpeed":"1","wfs_letitsnow_maxSpeed":"5","wfs_letitsnow_shadow":"false"};
/* ]]> */
</script>
<script type='text/rocketscript' >


jQuery(document).ready(function(){var activeshadow=(settings.wfs_letitsnow_shadow==='true');jQuery(document).snowfall({flakeCount:parseInt(settings.wfs_letitsnow_flakeCount),minSize:parseInt(settings.wfs_letitsnow_minSize),maxSize:parseInt(settings.wfs_letitsnow_maxSize),minSpeed:parseInt(settings.wfs_letitsnow_minSpeed),maxSpeed:parseInt(settings.wfs_letitsnow_maxSpeed),shadow:activeshadow,round:true});});
</script>

</body>

</html>

<style>

#aboutbutton{
z-index:9999;
position:relative;
left:240px;
top:450px;
cursor:pointer; /*forces the cursor to change to a hand when the button is hovered*/
padding:5px 25px; /*add some padding to the inside of the button*/
background:#35b128; /*the colour of the button*/
border:1px solid #33842a; /*required or the default border for the browser will appear*/
/*give the button curved corners, alter the size as required*/
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
/*give the button a drop shadow*/
-webkit-box-shadow: 0 0 4px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 4px rgba(0,0,0, .75);
box-shadow: 0 0 4px rgba(0,0,0, .75);
/*style the text*/
color:#f3f3f3;
font-size:1.1em;
}

input#aboutbutton:hover, input#aboutbutton:focus{
background-color :#399630;

-webkit-box-shadow: 0 0 1px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 1px rgba(0,0,0, .75);
box-shadow: 0 0 1px rgba(0,0,0, .75);
}

#aboutbutton1{
z-index:9999;
position:relative;
left:820px;
top:400px;
cursor:pointer;
padding:5px 25px; /*add some padding to the inside of the button*/
background:#35b128; /*the colour of the button*/
border:1px solid #33842a; /*required or the default border for the browser will appear*/
/*give the button curved corners, alter the size as required*/
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
/*give the button a drop shadow*/
-webkit-box-shadow: 0 0 4px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 4px rgba(0,0,0, .75);
box-shadow: 0 0 4px rgba(0,0,0, .75);
/*style the text*/
color:#f3f3f3;
font-size:1.1em;
}

input#aboutbutton1:hover, input#aboutbutton1:focus{
background-color :#399630; 

-webkit-box-shadow: 0 0 1px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 1px rgba(0,0,0, .75);
box-shadow: 0 0 1px rgba(0,0,0, .75);
}

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
	 
	  background-image:url(images/backgroung.gif);
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
    background-image: url(final.png);
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
  #sportsbanda
		{
			position:absolute;  width:100px;
			  top:370px;
	  left:920px;
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
    top:447.5px;
    z-index:800;
	
    
  }
  #teamcarac1
  {
	   width:630px;
	  height:300px;
	   position:absolute;
    top:360px;
	
	left:450px;
	  
  }
   #teamcarac2
  {
	   width:630px;
	  height:300px;
	   position:absolute;
    top:360px;
	
	left:580px;
	  
  }
   #teamcarac3
  {
	   width:630px;
	  height:300px;
	   position:absolute;
    top:360px;
	
	left:750px;
	  
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
	  left:900px;
	 
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



<!----map script------------------>

<!-- Dependencies -->
				<script src="js/jquery-1.10.2.js"></script>
		<script src="js/bootstrap.js"></script>



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
  <!---------------MAP------------------>
 <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
    function initialize() {
  var myLatlng = new google.maps.LatLng(12.96833,79.158845);
  var mapOptions = {
    zoom: 15,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
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
       

<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['yname'];
$visitor_email = $_POST['email'];
$school = $_POST['school'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email)||empty($school)||empty($message)) 
{
echo "Please fill out all the fields!";

    exit;
}

if(IsInjected($visitor_email))
{
echo "<div class='ra' style='color:rgba(255,0,0,1);position:absolute;top:4950px;left:940px;font-size: 30px;padding-bottom: 20px;z-index:9999'>";    
   
 echo "Bad email value!";
echo"</div>";
    exit;
}

$email_from = 'convener.riviera@vit.ac.in';//<== update the email address
$email_subject = "Riviera Cotact Form";
$email_body = "User Name:             $name.\n".
"Message:                $message.\n".
"School/College:       $school.\n".
"Email:                    $visitor_email.\n".
$to = "anurag.tiwari2013@vit.ac.in";


$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
$headers .= "BCC: tiwari.anurag126@gmail.com\r\n"; 
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
echo "<div class='ra' style='color:rgba(255,255,255,1);position:absolute;top:4950px;left:900px;font-size: 20px;padding-bottom: 20px;z-index:9999'>";
echo"Thank You! \n We will get back to you shortly.";
echo"</div>";

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 