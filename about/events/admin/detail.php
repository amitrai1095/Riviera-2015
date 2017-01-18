<?php

$id = $_GET['eid'];

include ("connection.php");

session_start();



?>


<head><link rel="stylesheet" href="css/broker.css" type="text/css" media="all" /></head>
<div id="wrapper">

	
	 <?php include("menu.php"); ?>

     

<div id="content">



<h1>Event Details</h1>
<button><a href="action.php?id=<?php echo $id;?>">Action</a></button>
<table>

<?php 


$rr = mysql_query("select * from  eventsform where Sno=$id");
while($drr = mysql_fetch_array($rr)){


if($drr > 0){
$rtt=$drr['club'];
	$sii = mysql_query("select * from  chapters where sno= '$rtt'");

	  $dsii = mysql_fetch_array($sii);

?><tr>
<td>

<tr>

 <tr>
  <td width="800"> <b>Name of the event </b><?php echo $drr['nameofevent'];  ?></td>
  </tr>
  
 <td width="800"><b>Type of event</b>  <?php echo $drr['typeofevent']; ?></td>
 </tr>
 <tr>
  <td width="800"> <b> Proposed By </b><?php echo $drr['proposedevent'];  ?></td>
  </tr>
  <tr>
  <td width="800"><b> Club</b> <?php echo $dsii['chaptername'];  ?></td>
  </tr>
  <tr>
  <td width="800"><b> Student Coordinator</b> <?php echo $drr['studcood1'];  ?></td>
  </tr>
  <tr>
  <td width="800"><b> Reg no</b> <?php echo $drr['studreg1'];  ?></td>
  </tr>
  <tr>
  
  <td width="800"><b> Student Contact number</b> <?php echo $drr['studcontact1'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Student mail</b> <?php echo $drr['studemail1'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Student Coordinator 2</b> <?php echo $drr['studcood2'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Regno</b> <?php echo $drr['studreg2'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Student Contact</b> <?php echo $drr['studemail2'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Faculty Name</b> <?php echo $drr['facname'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Faculty contact</b> <?php echo $drr['faccontact'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Faculty mail</b> <?php echo $drr['facemail'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Description</b> <?php echo $drr['eventdesc'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Judge</b> <?php echo $drr['judge'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> rules</b> <?php echo $drr['rules'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Internal Participation</b> <?php echo $drr['internal'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> External Participation</b> <?php echo $drr['external'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Duration</b> <?php echo $drr['duration'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Reg fees</b> <?php echo $drr['regfees'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Prize 1</b> <?php echo $drr['prize1'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Price 2</b> <?php echo $drr['prize2'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Price 3</b> <?php echo $drr['prize3'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Sponsor</b> <?php echo $drr['sponsor'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Amount</b> <?php echo $drr['amount'];  ?></td>

  </tr>
  <tr>
  
  <td width="800"><b> Link</b><a href="<?php echo $drr['link'];  ?>" target="_blank"> <?php echo $drr['link'];  ?></a></td>

  </tr>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  <?php }}?>

</tr>






</div>
                            