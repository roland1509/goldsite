<?php
 include 'connection.inc.php'; 
  ?>
<?php

if(isset($_GET['tracker']) && $_GET['tracker'] != ''){

$tracker_num = filter_var($_GET['tracker'], FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM tracking_details WHERE tracking_number ='$tracker_num' LIMIT 1";
  
$result = mysqli_query($con, $sql);
  
$tracker = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) > 0){

$sql_update = "SELECT * FROM tracking_update WHERE tracking_number ='$tracker_num' ORDER BY id DESC";
$result_update = mysqli_query($con, $sql_update);
$tracker_update = mysqli_fetch_assoc($result_update);

$tracker_number = $tracker['tracking_number'];

$sender_name = $tracker['sender_name'];

$email = $tracker['email'];

$receiver_name = $tracker['receiver_name'];

$receiver_number = $tracker['receiver_number'];

$parcel_name = $tracker['parcel_name'];

$tracker_origin = $tracker['origin'];
$tracker_destination = $tracker['destination'];
// $tracker_pieces = $tracker['pieces'];
$tracker_cubic = $tracker['cubic'];
$tracker_weight = $tracker['weight'];
// $tracker_transport = $tracker['transport_mode'];
$tracker_delivery_date = $tracker['estimated_delivery'];
$tracker_required_by = $tracker['delivery_required_by'];

$tracker_update_time = $tracker_update['created_at'];
$tracker_status = $tracker_update['status'];

$color1 = "";
if($tracker_status == "Pending"){
    $color1 = "blue";
    $ustatus = "Pending";
}
if($tracker_status == "Picked up"){
    $color1 = "grey";
    $ustatus = "Picked up";
}

if($tracker_status == "Out for delivery"){
    $color1 = "lime";
    $ustatus = "Out for delivery";
}
if($tracker_status == "In Transit"){
    $color1 = "purple";
    $ustatus = "In Transit";
}
if($tracker_status == "Enroute"){
    $color1 = "teal";
    $ustatus = "Enroute";
}

if($tracker_status == "Cancelled"){
    $color1 = "lightblue";
    $ustatus = "Cancelled";
}

if($tracker_status == "Delivered"){
    $color1 = "pink";
    $ustatus = "Delivered";
}

if($tracker_status == "Returned"){
    $color1 = "red";
    $ustatus = "Returned";
}

// if($tracker_status == "DELIVERED"){
//     $color1 = "green";
//     $ustatus = "DELIVERED";
// }
 


}else{
    echo "<script> alert('Tracker information invalid!') 
    window.location.href='tracker.php';
    </script>";
}
}else{
echo "<script>
     alert('Tracker information invalid!');
     window.location.href='tracker.php';
      </script>";

}

?>
<?php 
include 'header.php';

$title = "Tracking Details";
 ?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<link rel="stylesheet" href="logistico.css">
    <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="main.css">
<div id="document" class="container-fluid document">
	
		<div class="row">
		
			<div class="col-12 order-md-1">
                <div id="mainContent"><div id="trackContent"><div class="track-bar  d-none d-md-block"><h1 class="tracker-title">Truck Tracker</h1></div><div class="container" id="document"><div class="row"><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><div class="contentbox tracker-header"><div class="row tracker-header-details"><div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12 tracker-header-reference"><h2><i class="fas fa-star favourite-star  popover-trigger" aria-hidden="true"></i> <?php echo $tracker_number;?>         </h2><div class="subheader"><?php echo $tracker_origin;?> to <?php echo $tracker_destination;?></div><div id="favouritePopover"></div></div><div class="col-xl-2 col-lg-1 col-md-0 col-sm-0 col-0"></div><div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 tracker-header-status"><table class="status-hero-table"><tbody><tr><td class="status-hero">

                    <div class="status-hero-header <?php echo $color1;?>">

                        <?php echo @$ustatus;?></div><div class="status-hero-text "><span><?php echo date("D d F, Y; g:i A", strtotime($tracker_update_time));?></span></div><div class="status-hero-text "><span><?php echo $tracker_destination;?> local time</span></div></td></tr></tbody></table></div></div><div class="row tracker-header-worm">
                    <div class="col-lg-12">
                        <ul class="worm ">
<!--                             <li class="blue three ">
                                <span class="content" style="color: white;">Pending</span>
                            </li>
                            <li class="grey three ">Picked up</span></li>
                            <li class="red three " style="background-color: lime;">Out for delivery</span></li>
                            <li class="red three " style="background-color: purple;">In Transit</span></li>
                            <li class="red three " style="background-color: orange;">Enroute</span></li>
                            <li class="red three " style="background-color: teal;">Cancelled</span></li>
                            <li class="red three " style="background-color: pink;">Delivered</span></li>
                            <li class="red three " style="background-color: red;">Returned</span></li> -->
<!-- <li class="green three ">Delivered</span></li> -->
</ul></div></div></div>
<div class="contentbox tracker-timeline">
    <ul class="timeline ">
        <?php
    $sql = "SELECT * FROM tracking_update WHERE tracking_number = '$tracker_num' ORDER BY id DESC LIMIT 1";
                 $result = mysqli_query($con, $sql);
                 while($tracking = mysqli_fetch_array($result)) { 
                     $display = "";
                     $color = "";
                    if($tracking['status'] == "Pending"){
                        $display = "blue";
                        $color = "blue";
                    }
                    if($tracking['status'] == "Picked up"){
                        $display = "grey";
                        $color = "grey";
                    }
                    if($tracking['status'] == "Out for delivery"){
                        $display = "lime";
                        $color = "lime";
                    }

                    if($tracking['status'] == "In Transit"){
                        $display = "purple";
                        $color = "purple";
                    }
                    if($tracking['status'] == "Enroute"){
                        $display = "orange";
                        $color = "orange";
                    }
                    if($tracking['status'] == "Cancelled"){
                        $display = "teal";
                        $color = "teal";
                    }

                    if($tracking['status'] == "Delivered"){
                        $display = "green";
                        $color = "green";
                    }
                    if($tracking['status'] == "Returned"){
                        $display = "red";
                        $color = "red";
                    }



                    // if($tracking['status'] == "DELIVERED"){
                    //     $display = "bg-green";
                    //     $color = "green big";
                    // }
                     
                     ?>

        <li class="timeline-item <?php echo $color;?>">
            <section>
                <div>
                    <h3 class="timeline-item-heading "style="color: white;  background-color: <?php echo $display;?>;"><?php echo $tracking['message'];?></h3>
                    <div class="timeline-item-details "><?php echo date("g:i A", strtotime($tracking['created_at']));?></div>
                    <div class="timeline-item-details "><?php echo date("D d F, Y", strtotime($tracking['created_at']));?></div>
                </div>
            </section>
        </li>
       
       <?php } ?>
        </ul>
    </div>
    <div class="contentbox tracker-details">
        <div class="row">
            <div class="col-xl-12">
             <table class="table table-striped details">
                    <thead>
                        <tr>
                            <th colspan="2" style="color: black;">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HBL Number</td>
                            <td><?php echo $tracker_number;?></td>
                        </tr>
                        <tr>
                            <td>Sender name</td>
                            <td><?php echo $sender_name;?></td>
                        </tr>
                        <tr>
                            <td>Receiver name</td>
                            <td><?php echo $receiver_name;?></td>
                        </tr>
                        <tr>
                            <td>Receiver number</td>
                            <td><?php echo $receiver_number;?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $email;?></td>
                        </tr>

                         <tr>
                            <td>Parcel</td>
                            <td><?php echo $parcel_name;?></td>
                        </tr>
                        <tr>
                            <td>Origin Port</td>
                            <td><?php echo $tracker_origin;?></td>
                        </tr>
                        <tr>
                            <td>Destination Port</td>
                            <td><?php echo $tracker_destination;?></td>
                        </tr>
                        <!-- <tr>
                            <td>Transport Mode</td>
                            <td><?php echo $tracker_transport;?></td>
                        </tr> -->
                        <!-- <tr>
                            <td>Pieces</td>
                            <td><?php echo $tracker_pieces;?></td>
                        </tr> -->
                        <tr>
                            <td>Weight</td>
                            <td><?php echo $tracker_weight;?></td>
                        </tr>
                        <tr>
                            <td>Cubic</td>
                            <td><?php echo $tracker_cubic;?></td>
                        </tr>
                        <tr>
                            <td>Delivery Required By</td>
                            <td><?php echo date("D d F, Y; g:i A", strtotime($tracker_required_by));?></td>
                        </tr>
                        <tr>
                            <td>Estimated Delivery Date</td>
                            <td><?php echo date("D d F, Y; g:i A", strtotime($tracker_delivery_date));?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br/>
            <div class="col-xl-12">
          <center>  <a href="invoice.php?id=<?php echo $tracker_number;  ?>" class="btn btn-primary" style="color: #fff;">Print</a> </center>
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

<?php include 'footer.php'; ?>