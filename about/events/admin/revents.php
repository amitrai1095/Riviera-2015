<?php

include ("connection.php");
  session_start();
$rec_limit = 20;

 if($_SESSION['aa'] !='test'){
header("location:index.php");
}

$sql = "SELECT count(Sno) FROM eventsform where status=3";
$retval = mysql_query( $sql, $con );

$row = mysql_fetch_array($retval, MYSQL_NUM );
$rec_count = $row[0];

?>
<html>

<title>Events Portal </title>
    <head>
	<link rel="stylesheet" href="css/broker.css" type="text/css" media="all" />
    </head>
    <body>
	<?php 
include ("menu.php");

?>
<h4>Total Events <?php echo $rec_count; ?></h4>

        <table border="1px">
            <tr>
                <th>Name of Event</th>
                <th>Type of Event</th>
                <th>Event By</th>
                <th>Club/Chapter Name</th>
                <th>Name of Student Cood 1</th>
                <th>His Registration Number</th></th>
                
                      <th>Name of Student Cood 2</th>
               <th>His Registration Number</th></th>
                
<th>Status</th>
<th>Comment
 </th>  
 <th>Seen By</th>         
			</tr>
			
			
			      <?php

$sql = "SELECT count(Sno) FROM eventsform ";
$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$row = mysql_fetch_array($retval, MYSQL_NUM );
$rec_count = $row[0];

if( isset($_GET{'page'} ) )
{
   $page = $_GET{'page'} + 1;
   $offset = $rec_limit * $page ;
}

else

{

   $page = 0;

   $offset = 0;

}

$left_rec = $rec_count - ($page * $rec_limit);

$sql = "SELECT * ".

       "FROM eventsform where status=3"." ORDER by Sno DESC ".

       "LIMIT $offset, $rec_limit";



$retval = mysql_query( $sql, $con );

if(! $retval )

{

  die('Could not get data: ' . mysql_error());

}
	while($row = mysql_fetch_array($retval,MYSQL_ASSOC)){

$rtt=$row['club'];
$eid=$row['Sno'];
	$sii = mysql_query("select * from  chapters where sno= '$rtt'");

	  $dsii = mysql_fetch_array($sii);

	  $dd=mysql_query("select * from comments where eventid='$eid'order by id DESC");
	  $ddi = mysql_fetch_array($dd);
$uuid= $ddi['uid'];
	  $ddu=mysql_query("select * from user where sno='$uuid'");
	  $ddiu = mysql_fetch_array($ddu);

	  ?>

			
			
            <?php
?>
 <tr>

    <td><a href="detail.php?eid=<?php echo $row['Sno']; ?>"><?php echo $row['nameofevent']?> </a></td>
    <td><?php echo $row['typeofevent']?></td>
    <td><?php echo $row['proposedevent']?></td>
    <td><?php echo $dsii['chaptername'] ?></td>
    <td><?php echo $row['studcood1']?></td>
     <td><?php echo $row['studreg1']?></td>


      <td><?php echo $row['studcood2']?></td>
     <td><?php echo $row['studreg2']?></td>

<td><?php if($row['status']==0) {
?><b><?php echo "UNREAD"; ?></b><?php
}
elseif($row['status']==1)
{
?><font color="19af15"><b><?php echo "Approved"; ?></font></b> <?php
}
elseif($row['status']==2) 
{
?><font color="af151d"><b><?php echo "Onhold"; ?></font></b> <?php
}
else
{
?><font color="af151d"><b><?php echo "Rejected"; ?></font></b> <?php
}
?>     
<td>

<?php 
echo $ddi['comments']; 
?>
</td>
<td>
<?php echo $ddiu['name']; ?>
</td>
 </tr>
<?php }
?>

<tr>
<td> 
<?php
if( $page > 0 )
{
   $last = $page - 2;
   echo "<a class='pagination' href=\"?page=$page\">Next&raquo;</a>";
   echo "<a class='pagination' href=\"?page=$last\">&laquo;Back</a>";
}
else if( $page == 0 )
{
   echo "<a class='pagination' href=\"?page=$page\">Next&raquo;</a>";
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a>";
}
	?>
</td>
</tr> 
</table>     
<?php 
?>
</table>
    </body>
</html>
       