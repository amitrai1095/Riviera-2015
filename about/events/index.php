<?php
$nameerr=$typeerr=$typepfevent=$properr=$prop=$club=$cooderr1=$regerr1= $studcontacterr1=$studemailerr1=$cooderr2=$regerr2= $studcontacterr2=$studemailerr2=$facnameerr=$faccontacterr=$facemailerr=$eventdescerr= $ruleserr=$judgeerr=$externalerr=$internalerr= $durationerr=$prize1err=$prize2err=$prize3err= $amounterr=$cluberr=$regfeeserr="";
include("connection.php");
if (!empty($_POST))
{
  
    $flag=0;
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST['nameofevent']))
        $nameerr="Enter Name of event";
        else
        { $nameofevent=$_POST['nameofevent'];
        $flag++;//1
        }
        if(empty($_POST['typeofevent']))
        $typeerr="Select one type of event";
        else
        { $typeofevent=$_POST['typeofevent'];
        $flag++;//2
        }
        if(empty($_POST['proposed']))
        $properr="Organised by Whom??";
        else
        {  
        if($_POST['proposed']==1)
        {$prop="Individual";
        $flag++;//3
        $facname="";
        $faccontact="";
        $facemail="";
        $club="";
        }
        else if($_POST['proposed']==2)
         {
             if(empty($_POST['nameofclub']))
                 $cluberr="Kindly enter name of club/chapter";
             else
             {
                 $prop="By Club/Chapter";
                 $club=$_POST['nameofclub'];
                 $flag++;//3
                
             }
         }
        }
        if(empty($_POST['studcood1']))
        $cooderr1="Enter Name of event coordinator";
        else
        { $studcood1=$_POST['studcood1'];
        $flag++;//4
        }
        if(empty($_POST['regno1']))
        $regerr1="Enter Regno of event coordinator";
        else
        { $regno1=$_POST['regno1'];
        $flag++;//5
        }
        if(empty($_POST['studnum1']))
        $studcontacterr1="Enter Number of event co-od 1";
        else
        { $studcontact1=$_POST['studnum1'];
        $flag++;//6
        }
        if(empty($_POST['studemail1']))
        $studemailerr1="Enter email of event co-od 1";
        else
        { $studemail1=$_POST['studemail1'];
        $flag++;//7
        }
        if(empty($_POST['studcood2']))
        $cooderr2="Enter Name of event coordinator";
        else
        { $studcood2=$_POST['studcood2'];
        $flag++;//8
        }
        
        if(empty($_POST['regno2']))
        $regerr2="Enter Regno of event coordinator 2";
        else
        { $regno2=$_POST['regno2'];
        $flag++;//9
        }
        if(empty($_POST['studnum2']))
        $studcontacterr2="Enter Number of event co-od 1";
        else
        {$studcontact2=$_POST['studnum2'];
        $flag++;//10
        }
        if(empty($_POST['studemail2']))
        $studemailerr2="Enter email of event co-od 1";
        else
        { $studemail2=$_POST['studemail2'];
        $flag++;//11
        }
        if(empty($_POST['facname']))
        {$facnameerr="Enter name of faculty cood";
        $facname="";
         $faccontact="";
         $facemail="";
        }
        else
        { 
        $facname=$_POST['facname'];
        $flag++;//12
        }
        if(empty($_POST['faccontact']))
        $faccontacterr="Enter name of faculty cood";
        else
        { 
        $faccontact=$_POST['faccontact'];
        $flag++;//13
        }
        if(empty($_POST['facemail']))
        $facemailerr="Enter name of faculty cood";
        else
        { 
        $facemail=$_POST['facemail'];
        $flag++;//14
        }
        
        if($_POST['occurence']=='2')
		{
        $occurence="Yes";
		$fest=$_POST['fest'];
		if($fest=='2')
		{
		$gravitaswhen=$_POST['gravitaswhen'];
		$gravitasnop=$_POST['gravitasnop'];
        $gravitasres=$_POST['gravitasres'];
        $rivierawhen="";
        $rivieranop="";
            $rivierres="";
            $flag++;//15
		}
		elseif($fest=='1')
		{
        $gravitaswhen="";
        $gravitasnop="";
            $gravitasres="";
		$rivierawhen=$_POST['rivierawhen'];
		$rivieranop=$_POST['rivieranop'];
            $rivierares=$_POST['rivierares'];
            $flag++;//15
		}
		else if($fest=='3')
        {
		$gravitaswhen=$_POST['bothgravitaswhen'];
		$gravitasnop=$_POST['bothgravitasnop'];
		$rivierawhen=$_POST['bothrivierawhen'];
		$rivieranop=$_POST['bothrivieranop'];
            $gravitasres=$_POST['gravitasres'];
             $rivierares=$_POST['rivierares'];
            $flag++;//15
		}
		}
        else
        {
            $occurence="No";
            $gravitaswhen="";
		  $gravitasnop="";
             $gravitasres="";
		  $rivierawhen="";
		  $rivieranop="";
              $rivierres="";
            
            $flag++;//15
        }
		if(empty($_POST['eventdesc']))
        $eventdescerr="Enter event description";
        else
        { $eventdesc=$_POST['eventdesc'];
        $flag++;//16
        }
        if(empty($_POST['rules']))
        $ruleserr="Enter Rules for the event";
        else
        { $rules=$_POST['rules'];
        $flag++;//17
        }
        if(empty($_POST['judge']))
        $judgeerr="Enter judging criteria for the event";
        else
        { $judge=$_POST['judge'];
        $flag++;//18
        }
		if(empty($_POST['external']))
        $externalerr="Enter the external number";
        else
        { $external=$_POST['external'];
        $flag++;//19
        }
		if(empty($_POST['internal']))
        $internalerr="Enter the internal number";
        else
        { $internal=$_POST['internal'];
        $flag++;//20
        }
		if(empty($_POST['duration']))
        $durationerr="Enter the duration of event";
        else
        {$duration=$_POST['duration'];
        $flag++;//21
        }
		if(empty($_POST['regfees']))
        $regfeeserr="Enter the Registration Fees";
        else
        { $regfees=$_POST['regfees'];
        $flag++;//22
        }
 $prize1=$_POST['prize1'];
         $prize2=$_POST['prize2'];
         $prize3=$_POST['prize3'];
        	$sponsor=$_POST['sponsor'];
		if($sponsor=='1')
		{
		if(empty($_POST['amount']))
        $amounterr="Enter the sponsor amount or else select no ";
        else
        { $amount=$_POST['amount'];
        $flag++;//23
        $sponsor="Yes";
        }
		}
		else{
		$amount="";
        $sponsor="NO";
		}
        $link=$_POST['link'];
if($flag>=19)
{
$sql = "INSERT INTO eventsform values('Sno','$nameofevent', '$typeofevent','$prop','$club','$studcood1','$regno1','$studcontact1','$studemail1','$studcood2','$regno2','$studcontact2','$studemail2','$facname','$faccontact','$facemail','$occurence','$gravitaswhen','$gravitasnop','$gravitasres','$rivierawhen','$rivieranop','$rivierares','$eventdesc','$judge','$rules','$external','$internal','$duration','$regfees','$prize1','$prize2','$prize3','$sponsor','$amount','$link','0')";
$res=mysql_query($sql,$con);


  
   if($res==0)
                   {
                   echo mysql_error(), "<br>";  

                       echo  "Sorry enter again";
                   }
    else
    { header("Location:submit.html");
    }
}
else{
echo "enter the details";
}
        
}
    mysql_close($con);
}
?>
<html>
<head>
    <script src="//code.jquery.com/jquery-1.8.3.min.js"></script>
    <link type="text/css" href="rivieraform.css" rel="stylesheet">
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700'
 rel='stylesheet' type='text/css'>
    <style>
    .error
        {
            color:red;
        }
        #img
        {
          position: relative; /* or absolute */
 
  left: 25%;
        }
    </style>
</head>
    <body background="back1.jpg">
        <img width="320px" height="200px" src="riv.png" id="img">
       <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post" enctype="multipart/form-data" onsubmit="validate();return false">
         <header>
            <h3 style="color:#fc0707" align="center">Last Date of submission is over</h3>
              <!-- <h2>Events Registration Form</h2>
    <div><b>Kindly check the form before submitting</b></div>
   </header>
            <div>
            <div>
    <label   id="title1" for="Field1">Name of the Event</label><span class="astric">*</span>
    <div>
      <input id="Field1" name="nameofevent" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>
     <span class="error"><?php echo $nameerr;?></span>
</div>
    <div>
    <label   id="title1" for="Field1">Type of Event</label><span class="astric">*</span>
    <div>
    <select id="Field106" name="typeofevent" class="field select medium" tabindex="11"> 
       <option value="0">Select</option>
    <option value="Formals">Formals</option>
      <option value="Informals">Informals</option>
      <option value="Workshop">Workshop</option>
    </select>
     <span class="error"><?php echo $typeerr;?></span>
    </div>
    <label   id="title1" for="Field1">Proposed By</label><span class="astric">*</span>
    <div>
      <select id="visit" name="proposed" class="field select medium" tabindex="11">
        <option value="0">Select</option>
        <option value="1">Individual</option>
        <option value="2">Club/Chapter</option>
      </select>
       <span class="error"><?php echo $properr;?></span>
    </div>
        </div>
<div>
 <select  id="saras" name="nameofclub"  class="field text fn" >
<option value="0">Select</option>
	  <?php
		  $resultcompany = mysql_query("select * FROM chapters",$con); 
echo $resultcompany, "<br>"; //Use $query or $query2 depending on what one you called!
echo mysql_error(), "<br>";  
		   while($rowcompany = mysql_fetch_array($resultcompany)){
		   
		 ?>
		 <option value="<?php echo $rowcompany['sno']; ?>"><?php echo $rowcompany['chaptername']; ?></option>
		 <?php
		  }
		   ?>
		
	</select>
<?php echo $cluberr;?></div>
<script>
   $("#saras").hide();
$('#visit').live('change', function () {  
    $('#saras').toggle((this.value) == 2)});
    </script>
            <div>
    <h3>Details of Student Coordinator 1<span class="astric">*</span></h3>
       <div>
    <label   id="title1" for="Field1">Name of coordinator</label>
    <div>
      <input id="Field1" name="studcood1" type="text" class="field text fn" value="" size="8" tabindex="1">
       <span class="error"><?php echo $cooderr1;?></span>
    </div>
  </div>
        <div>
    <label   id="title1" for="Field1">Registration Number</label>
    <div>
      <input id="Field1" name="regno1" type="text" class="field text fn" value="" size="8" tabindex="1">
       <span class="error"><?php echo $regerr1;?></span>
       </div>
  </div>
       <div>
    <label   id="title1" for="Field1">Contact Number(Enter 10 digit)</label>
    <div>
      <input id="Field1" name="studnum1" type="text" class="field text fn" value="" size="8" tabindex="1">
    <span class="error"><?php echo $studcontacterr1;?></span>
     </div>
  </div>
        <div>
    <label   id="title1" for="Field1">Email ID</label>
    <div>
      <input id="Field1" name="studemail1" type="email" class="field text fn" value="" size="8" tabindex="1">
     <span class="error"><?php echo $studemailerr1;?></span>
     </div>
  </div>
        </div>
         <div>
    <h3>Details of Student Coordinator 2<span class="astric">*</span></h3>
       <div>
    <label   id="title1" for="Field1">Name of coordinator</label>
    <div>
      <input id="Field1" name="studcood2" type="text" class="field text fn" value="" size="8" tabindex="1">
     <span class="error"><?php echo $cooderr2;?></span>
     </div>
  </div>
        <div>
    <label   id="title1" for="Field1">Registration Number</label>
    <div>
      <input id="Field1" name="regno2" type="text" class="field text fn" value="" size="8" tabindex="1">
     <span class="error"><?php echo $regerr2;?></span>
     </div>
  </div>
       <div>
    <label   id="title1" for="Field1">Contact Number(Enter 10 digit)</label>
    <div>
      <input id="Field1" name="studnum2" type="text" class="field text fn" value="" size="8" tabindex="1">
     <span class="error"><?php echo $studcontacterr2;?></span>
     </div>
  </div>
        <div>
    <label   id="title1" for="Field1">Email ID</label>
    <div>
      <input id="Field1" name="studemail2" type="email" class="field text fn" value="" size="8" tabindex="1">
     <span class="error"><?php echo $studemailerr2;?></span>
     </div>
  </div>
        </div>            
   <div class="harshita">
    <h3>Details of Faculty Coordinator(Optional for individual)</h3>
    <div>
    <label   id="title1" for="facname">Name of faculty</label>
    <div>
      <input id="Field1" class="harshita" name="facname" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>
  </div>
       <div>
    <label   id="title1" for="faccontact">Contact Number(Enter 10 digit)</label>
    <div>
      <input id="Field1" class ="harshita" name="faccontact" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>
  </div>
        <div>
    <label   id="title1" for="Field1">Email ID</label>
    <div>
      <input id="Field1" class="harshita" name="facemail" type="email" class="field text fn" value="" size="8" tabindex="1">
    </div>
  </div>
        </div> 
        <script>
   $(".harshita").hide();
$('#visit').live('change', function () {  
    $('.harshita').toggle((this.value) == 2)});
    </script>
            <div>
                <h3>Details of Event<span class="astric">*</span></h3>
<label   id="title1" for="Field1">Previous Occurrence of Events</label><span class="astric">*</span>
          </div>
            <div>
              <select id="choice" name="occurence" class="field select medium" tabindex="11">
                <option value="0">Select</option>
                <option value="1">No</option>
                <option value="2">Yes</option>
              </select>
            </div>
            
<div><br>
    <select id="choice1" name="fest" class="field select medium" tabindex="11"> 
      <option value="0">Select</option>
      <option value="1">Riviera</option>
      <option value="2">GraVITas</option>
      <option value="3">Both</option>
    </select>
    </div>
<div>
    <label class="festgravitas" id="title1" for="Field1">In Gravitas</label>
</div>
<div>
    <label class="festgravitas" id="title1" for="Field1">Year</label>
    <div>
      <input id="Field1" name="gravitaswhen" type="text" class="festgravitas" value="" size="8" tabindex="1">
    </div>
  </div>
<div>
    <label class="festgravitas" id="title1" for="Field1">Number of Participants</label>
    <div>
      <input id="Field1" name="gravitasnop" type="text" class="festgravitas" value="" size="8" tabindex="1">
    </div>
  </div>
                <div>
    <label class="festgravitas" id="title1" for="Field1">Response of Event(rate it out of 5)</label>
    <div>
      <input id="Field1" name="gravitasres" type="text" class="festgravitas" value="" size="8" tabindex="1">
    </div>
  </div>
<div>
    <label class="festriviera" id="title1" for="Field1">In Riviera</label>
</div>
<div>
    <label class="festriviera" id="title1" for="Field1">Year</label>
    <div>
      <input id="Field1" name="rivierawhen" type="text" class="festriviera" value="" size="8" tabindex="1">
    </div>
  </div>
<div>
    <label class="festriviera" id="title1" for="Field1">Number of Participants</label>
    <div>
      <input id="Field1" name="rivieranop" type="text" class="festriviera" value="" size="8" tabindex="1">
    </div>
  </div>
    <div>
    <label class="festriviera" id="title1" for="Field1">Response of Event(rate it out of 5)</label>
    <div>
      <input id="Field1" name="rivierares" type="text" class="festriviera" value="" size="8" tabindex="1">
    </div>
  </div>
    <div>
    <label class="bothfestgravitas" id="title1" for="Field1">In Gravitas</label>
</div>
<div>
    <label class="bothfestgravitas" id="title1" for="Field1">Year</label>
    <div>
      <input id="Field1" name="bothgravitaswhen" type="text" class="bothfestgravitas" value="" size="8" tabindex="1">
    </div>
  </div>
<div>
    <label class="bothfestgravitas" id="title1" for="Field1">Number of Participants</label>
    <div>
      <input id="Field1" name="bothgravitasnop" type="text" class="bothfestgravitas" value="" size="8" tabindex="1">
    </div>
  </div>
                <div>
    <label class="bothfestgravitas" id="title1" for="Field1">Response of Event(rate it out of 5)</label>
    <div>
      <input id="Field1" name="bothgravitasres" type="text" class="bothfestgravitas" value="" size="8" tabindex="1">
    </div>
  </div>
    <div>
    <label class="bothfestriviera" id="title1" for="Field1">In Riviera</label>
</div>
<div>
    <label class="bothfestriviera" id="title1" for="Field1">Year</label>
    <div>
      <input id="Field1" name="bothrivierawhen" type="text" class="bothfestriviera" value="" size="8" tabindex="1">
    </div>
  </div>
<div>
    <label class="bothfestriviera" id="title1" for="Field1">Number of Participants</label>
    <div>
      <input id="Field1" name="bothrivieranop" type="text" class="bothfestriviera" value="" size="8" tabindex="1">
    </div>
  </div>
        <div>
    <label class="bothfestriviera" id="title1" for="Field1">Response of Event(rate it out of 5)</label>
    <div>
      <input id="Field1" name="bothrivierares" type="text" class="bothfestriviera" value="" size="8" tabindex="1">
    </div>
  </div>        
            
    <script>
        $("#choice1").hide();
$(".festgravitas").hide();
$(".festriviera").hide();
$(".bothfestgravitas").hide();
$(".bothfestriviera").hide();
$('#choice').live('change', function () {
    $('#choice1').toggle((this.value) == 2); // for select button 1
});
$('#choice1').live('change', function () {
   //for class fest to appear
    $(".festgravitas").toggle((this.value) == 2)
    $(".festriviera").toggle((this.value) == 1)
    $('.bothfestgravitas').toggle((this.value) == 3);
    $('.bothfestriviera').toggle((this.value) == 3);
});
        </script>  
      <div>
    <label   id="title4" for="Field4">Event Description</label><span class="astric">*</span>
      </div>
      <span class="error"><?php echo $eventdescerr;?></span>
  <div>
      <textarea id="Field4" name="eventdesc" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
    </div>
  <br><br>
      <div>
    <label   id="title4" for="Field4">Rules and Regulations</label><span class="astric">*</span>
      </div>
  <div>
      <textarea id="Field4" name="rules" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
    </div>
    <span class="error"><?php echo $ruleserr;?></span>
      <div>
    <label   id="title4" for="Field4">Judging Criteria</label><span class="astric">*</span>
      </div>
                <br><br>
  <div>
      <textarea id="Field4" name="judge" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
    </div>
<span class="error"><?php echo $judgeerr;?></span>
        
  <div>
    <label   id="title1" for="Field1">Expected Number of Participants</label><span class="astric">*</span>
  </div>
	 <div>
    <label   id="title1" for="Field1">External</label>
         <div>
        <input id="Field1" name="external" type="text" class="field text fn" value="" size="8" tabindex="1">
  <span class="error"><?php echo $externalerr;?></span></div>
         </div>
         <div>
    <label   id="title1" for="Field1">Internal</label>
             <div>
        <input id="Field1" name="internal" type="text" class="field text fn" value="" size="8" tabindex="1">
  <span class="error"><?php echo $internalerr;?></span></div>
          </div>
<div>
    <label   id="title1" for="Field1">Duration of the Event(Number of days)</label><span class="astric">*</span>
         <div>
        <input id="Field1" name="duration" type="text" class="field text fn" value="" size="8" tabindex="1">
 <span class="error"><?php echo $durationerr;?></span></div>
         </div>
<div>
    <label   id="title1" for="Field1">Registration Fees</label><span class="astric">*</span>
         <div>
        <input id="Field1" name="regfees" type="text" class="field text fn" value="" size="8" tabindex="1">
  <span class="error"><?php echo $regfeeserr;?></span></div>
         </div>
<div id="prize">
    <label   id="title1" for="Field1">Total Prize Money (Amount)</label>
         <div>
              <label   id="title1" for="Field1">First Prize</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input id="Field1" name="prize1" type="text" class="field text fn" value="" size="8" tabindex="1">
     </div>
    <span class="error"><?php echo $prize1err;?></span>
    <br>
    <div>
              <label   id="title1" for="Field1">Second Prize</label>&nbsp;&nbsp;&nbsp;&nbsp;
             <input id="Field1" name="prize2" type="text" class="field text fn" value="" size="8" tabindex="1">
     </div>
    <span class="error"><?php echo $prize2err;?></span>
    <br>
    <div>
              <label   id="title1" for="Field1">Third Prize</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input id="Field1" name="prize3" type="text" class="field text fn" value="" size="8" tabindex="1">
     </div>
    <span class="error"><?php echo $prize3err;?></span>
    <br>
         </div>
                <script>
   $("#prize").hide();
$('#Field106').live('change', function () {  
    $('#prize').toggle((this.value) !== "Workshop")});
    </script>
<div>
    <label   id="title1" for="Field1">Sponsorship Available?</label><span class="astric">*</span>
         <div>
<div>
      		<input id="Field5_0" name="sponsor" type="radio" value="1" tabindex="5" checked="checked">
      		<label class="choice2" for="Field5_0">Yes(Amount - in words)</label>
    <input id="Field1" name="amount" type="text" class="field text fn" value="" size="8" tabindex="1">
      	</div>
             <input type="radio" name="sponsor" value="2" >NO<br>
             <?php echo $amounterr;?>
<div>
    <label   id="title1" for="Field1">Link for the image(host it on <a href="http://imgur.com/" target="_blank">Imgur.com</a>)</label>
    <div>
      <input id="Field1" name="link" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>
    <span> You can go to this website & upload images of your event and paste the link above</span>
  </div><br><br>
<div>
		<div>
  		<input id="saveForm" name="saveForm" type="submit" value="Submit">
    </div>
	</div>
  </form>
 -->
             <?php include("footer.php"); ?>
        </body>
</html>
            
                            
                            
                            
                            
                            
                            
                            