<?php include('apps_top.php'); 
$connobj=establishcon();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Vesta Hotels</title>
    <!-- Pop Up Css 
   <link href="https://vestahotels.in/css/Style.css" rel="stylesheet"> -->
    <!-- Bootstrap core CSS -->    
    <link href="https://vestahotels.in/css/bootstrap.css" rel="stylesheet">
   

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="https://vestahotels.in/css/doc.css" rel="stylesheet">
    
	<link href="https://vestahotels.in/css/magnific-popup.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://vestahotels.in/css/flexslider.css" type="text/css" media="screen" />
	<!-- Bootstrap core JavaScript ================================================== -->
<script type="text/javascript" src="https://vestahotels.in/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://vestahotels.in/js/jquery.magnific-popup.min.js"></script>
  
  
  <script type="text/javascript">
  	function change_button(v){
  		if(v=='international'){
  			document.getElementById('international').style.display='block';
  			document.getElementById('bikanir').style.display='none';
  			document.getElementById('mayura').style.display='none';
  		}
  		if(v=='bikanir'){
  			document.getElementById('bikanir').style.display='block';
  			document.getElementById('international').style.display='none';
  			document.getElementById('mayura').style.display='none';
  		}
  		if(v=='mayura'){
  			document.getElementById('mayura').style.display='block';
  			document.getElementById('bikanir').style.display='none';
  			document.getElementById('international').style.display='none';
  		}
  		
  	}
  </script>
  
  
   
</head>

<body>
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KJZ7BD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KJZ7BD');</script>	
<script type="text/javascript">
var sc_project=6409545;
var sc_invisible=1;
var sc_security="0ab40766";
</script>
<script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js"></script>
<noscript>
<div class="statcounter"><a title="vBulletin stat" class="statcounter" href="http://statcounter.com/vbulletin/"><img class="statcounter" src="http://c.statcounter.com/6409545/0/0ab40766/1/" alt="vBulletin stat"
/></a></div>
</noscript>

<!-- Fixed navbar -->
<nav class="navbar navbar-default header">
  <div class="container nav_inr">
    <div class="navbar-header">
    
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <?php 
	  
      $page= basename($_SERVER['PHP_SELF']);
      if($page=='index.php' || $page=='gallery.php' || $page=='page.php' || $page=='contact.php' || $page=='invester.php' || $page=='invester_details.php' || $page=='offer.php' || $page=='financial_info.php' || $page=='notice.php' || $page=='events.php' || $page=='b2b.php'){ ?>
      <a class="navbar-brand" href="http://vestahotels.in/"><img src="http://vestahotels.in/images/logo.png"></a>
      <?php }elseif($_REQUEST['hid']=='2'){ ?>
      <a class="navbar-brand" href="http://vestahotels.in/Vesta_International"><img src="http://vestahotels.in/images/logointernational.png"></a>
      <?php }elseif($_REQUEST['hid']=='3'){ ?>	
      <a class="navbar-brand" href="http://vestahotels.in/Vesta_Maurya_Palace"><img src="http://vestahotels.in/images/logomayura.png"></a>
      <?php }elseif($_REQUEST['hid']=='4'){ ?>	
       <a class="navbar-brand" href="http://vestahotels.in/Vesta_Bikaner_Palace"><img src="http://vestahotels.in/images/logobikaner.png"></a>		
      <?php } ?>	
    </div>
    
    <?php
    
      	$get_contact_sql="select * from   tbl_hotel where hotel_id=1";
		$get_contact_rs=mysqli_query($connobj,$get_contact_sql);
		$get_contact_row=mysqli_fetch_array($get_contact_rs);
      	?>
      <?php
									$hotel_phn1=str_replace("(", "",$get_contact_row['hotel_phn']);
									$hotel_phn1=str_replace(")", "",$hotel_phn1);
									$hotel_phn1=str_replace(" ", "",$hotel_phn1);
									
									?>	
    <a href="tel:<?php echo $hotel_phn1;?>" class="hdr_btn"> <img src="http://vestahotels.in/images/reach_icon2.png"><?php echo nl2br($get_contact_row['hotel_phn']);?></a>
    <br class="clearfix"/>
    <?php 
      $page= basename($_SERVER['PHP_SELF']);
      if($page=='index.php' || $page=='gallery.php' || $page=='page.php' || $page=='contact.php' || $page=='invester.php' || $page=='invester_details.php' || $page=='offer.php' || $page=='financial_info.php' || $page=='notice.php' || $page=='events.php' || $page=='b2b.php'){ ?>
    <div id="navbar" class="navbar-collapse collapse">
    	<?php
    	$page= basename($_SERVER['PHP_SELF']);
    	?>      
      <ul class="nav navbar-nav navbar-right navigation">
      	<li><a href="http://vestahotels.in/">Home</a></li>
        <li><a href="http://vestahotels.in/About_us">About us</a></li>
        <li><a href="http://vestahotels.in/Offers">Offers</a></li>
       <!-- <li><a href="http://vestahotels.in/b2b.php">B2B</a></li>  -->
        <li><a href="http://vestahotels.in/Images" <?php if($page=='gallery.php'){?>class="active"<?php }?>>Image Tour </a></li>
        <li><a href="http://vestahotels.in/Contact">Contact Us</a></li>        
      </ul>
    </div><!--/.nav-collapse -->
    <?php }else{ ?>
    <nav>
	  
	    
	    
	    <div id="navbar" class="navbar-collapse collapse navbar-ex2-collapse">      
	      <ul class="nav navbar-nav navbar-right navigation navigation2">
	      	<?php if($_REQUEST['hid']=='2'){ ?>
	      		<li><a href="http://vestahotels.in/Vesta_International/Accomodation">Rooms and Suites</a></li>
				<li><a href="http://vestahotels.in/Vesta_International/F&amp;B_outlets">Restaurants &amp; Bar</a></li>
				<li><a href="http://vestahotels.in/Vesta_International/Banquets_Conferences">Meetings &amp; Conferences</a></li>
				<li><a href="http://vestahotels.in/Vesta_International/Facilities_Services">Facilities &amp; Services</a></li>
				<li><a href="http://vestahotels.in/Vesta_International/Images">Image Tour</a></li>
	      	<?php }elseif($_REQUEST['hid']=='3'){ ?>
	      		<li><a href="http://vestahotels.in/Vesta_Maurya_Palace/Accomodation">Rooms and Suites</a></li>
				<li><a href="http://vestahotels.in/Vesta_Maurya_Palace/F&amp;B_outlets">Restaurants &amp; Bar</a></li>
				<li><a href="http://vestahotels.in/Vesta_Maurya_Palace/Banquets_Conferences">Meetings &amp; Conferences</a></li>
				<li><a href="http://vestahotels.in/Vesta_Maurya_Palace/Facilities_Services">Facilities &amp; Services</a></li>
				<li><a href="http://vestahotels.in/Vesta_Maurya_Palace/Images">Image Tour</a></li>
			<?php }elseif($_REQUEST['hid']=='4'){ ?>	
				<li><a href="http://vestahotels.in/Vesta_Bikaner_Palace/Accomodation">Rooms and Suites</a></li>
				<li><a href="http://vestahotels.in/Vesta_Bikaner_Palace/F&amp;B_outlets">Restaurants &amp; Bar</a></li>
				<li><a href="http://vestahotels.in/Vesta_Bikaner_Palace/Banquets_Conferences">Meetings &amp; Conferences</a></li>
				<li><a href="http://vestahotels.in/Vesta_Bikaner_Palace/Facilities_Services">Facilities &amp; Services</a></li>
				<li><a href="http://vestahotels.in/Vesta_Bikaner_Palace/Images">Image Tour</a></li>
			<?php } ?>	
	      	
		  </ul>
	    </div><!--/.nav-collapse -->
	  
	 
	</nav>
   <?php } ?>	
  </div>
</nav>

<section class="banner_sec">



<div class="flexslider">
  <ul class="slides">
  	<?php
  	if(isset($_REQUEST['hid'])){
$get_top_ban_sql="select * from  tbl_banner where  	hotel_id='".$_REQUEST['hid']."'";
	}else{
		$get_top_ban_sql="select * from  tbl_banner where  	hotel_id=1";
	}
$get_top_ban_rs=mysqli_query($connobj,$get_top_ban_sql);
while($get_top_ban_row=mysqli_fetch_array($get_top_ban_rs))
{
?>
    	<li>
	    <img src="http://vestahotels.in/admin/banner/<?php echo $get_top_ban_row['banner_image'];?>">
		</li>
<?
}
 ?>			
		
  </ul>
</div>


<div class="bnr_frm_sec">

<script>
	function productLightBox(v) {
		
		document.getElementById("light781").style.display='block';
		document.getElementById("black_overlay").style.display='block';
		document.getElementById("lightimg").src = v;
	}
</script>
<script>
function pad(n) {
    if (n < 10)
        return "0" + n;
    return n;
}
function getMonthFromString(mon){
   let month=new Date(Date.parse(mon +" 1, 2012")).getMonth()+1;
   return pad(month);
}

 function validateBooking(data){
  var action = data.action;
 
  var arrival_day = $(':selected',data.arrival_day).val();
  var arrival_month = $(':selected',data.arrival_month).val();
  var arrival_year = $(':selected',data.arrival_year).val();
  var departure_day = $(':selected',data.departure_day).val();
  var departure_month = $(':selected',data.departure_month).val();
  var departure_year = $(':selected',data.departure_year).val();
  var arrival_month_text = $(':selected',data.arrival_month).html();
  var departure_month_text = $(':selected',data.departure_month).html();
  var arrival_date = new Date(arrival_year,arrival_month - 1,arrival_day);
  var departure_date = new Date(departure_year,departure_month - 1,departure_day);
  var today = new Date();
  
  var checkin = arrival_year +'-'+ getMonthFromString(arrival_month_text) +'-'+ arrival_day;
  var checkout = departure_year +'-'+ getMonthFromString(departure_month_text) +'-'+ departure_day;
  today.setHours(0);
  today.setMinutes(0,0,0);
  //alert(checkin +'cccc'+ checkout);
  
 
  
  if(arrival_date.getTime() < today.getTime() ){
    alert("Arrival date should be greater than today date.");
    return false;
  }
  
  if(departure_date.getTime() <= arrival_date.getTime()){
    alert("Departure date should be greater than arrival date.");
    return false;
  }
   $(':input[name="arrival_month"]').remove();
   $(':input[name="arrival_day"]').remove();
   $(':input[name="arrival_year"]').remove();
   $(':input[name="departure_month"]').remove();
   $(':input[name="departure_day"]').remove();
   $(':input[name="departure_year"]').remove();
  
   
   

     

 // data.action = "https://be.synxis.com/?hotel="+hotel_code+"&Chain=16365&nocache=true";
  $(data.checkin).val(checkin);
  $(data.checkout).val(checkout);
 // $(data.hotel).val(hotel_code);
// $('[type="submit"]').val('Please Wait....').attr('disabled', 'disabled');
 
  return true;
 }
</script>
<div id="light781" style="display: none;" class="white_content2">
<img class="close_certific" onClick="document.getElementById('light781').style.display='none';document.getElementById('black_overlay').style.display='none';" src="admin/images/desible2.png">
<img id="lightimg" width="1000" height="463" src="">
</div>		
		<div class="container">
		 <form onSubmit="return validateBooking(this);" name="booking" method="get" action="https://bookingengine.graceworks.com" >
			
			<div class="row">
				<div class="col-sm-12">
					<h2>Reservation</h2>
				</div>
				<div class="col-sm-4">
					<ul>
						<li><label>Hotels</label></li>
						<li>
							<div class="styled-select">
							   <select name="hid" id="hid" class="">
							      <option value="IN379510">Vesta International</option></a>
							      <option value="IN338326">Vesta Bikaner Palace</option>							      
								<option value="IN321794">Vesta Maurya Palace</option>
							   </select>
							</div>

						</li>
					</ul>
				</div>
				<input type="hidden" name="partnercode" value="VESTA">
				<div class="col-sm-4">
					<?php
					
					$dl_date = explode("-",date("Y-m-d"));
					$dt = $dl_date[2];
					$month = $dl_date[1];
					$year = $dl_date[0];

					?>
					<ul>
						<li><label>Arrival</label></li>
						<li>
							<div class="styled-select-smll">
							   <select name="arrival_month" id="arrival-month" class="arrival-month">
							      <option value="01" <?php if($month==1){ echo "selected";}?>>Jan</option>
							      <option value="02" <?php if($month==2){ echo "selected";}?>>Feb</option>
							      <option value="03" <?php if($month==3){ echo "selected";}?>>Mar</option>
							      <option value="04" <?php if($month==4){ echo "selected";}?>>Apr</option>
							      <option value="05" <?php if($month==5){ echo "selected";}?>>May</option>
							      <option value="06" <?php if($month==6){ echo "selected";}?>>Jun</option>
							      <option value="07" <?php if($month==7){ echo "selected";}?>>Jul</option>
							      <option value="08" <?php if($month==8){ echo "selected";}?>>Aug</option>
							      <option value="09" <?php if($month==9){ echo "selected";}?>>Sep</option>
							      <option value="10" <?php if($month==10){ echo "selected";}?>>Oct</option>
							      <option value="11" <?php if($month==11){ echo "selected";}?>>Nov</option>
							      <option value="12" <?php if($month==12){ echo "selected";}?>>Dec</option>
							   </select>
							</div>
						</li>
						<li>
							<div class="styled-select-smll">
							   <select name="arrival_day" class="arrival-day">
							   	<?php
							   	for($i=1;$i<=31;$i++){
							   	?>
							      <option value="<?php echo ($i < 10)?'0'.$i:$i; ?>" <?php if($dt==$i){ echo "selected";}?>><?php echo $i; ?></option>
							     <?php } ?>
							   </select>
							</div>
						</li>
						<li>
							<div class="styled-select-mid">
							   <select name="arrival_year" class="arrival-year">
							      <?php
							   	for($i=2015;$i<=2099;$i++){
							   	?>
							      <option value="<?php echo $i; ?>" <?php if($year==$i){ echo "selected";}?>><?php echo $i; ?></option>
							     <?php } ?>
							   </select>
							</div>
						</li>
						
					</ul>
				</div>
				<div class="col-sm-4">
					<?php
					$sql="SELECT DATE_ADD('".date('Y-m-d')."', INTERVAL 1 DAY)";
                    $query=mysqli_query($connobj,$sql);
                    $premium_exp_dt= mysqli_fetch_array($query);
					//print_r($premium_exp_dt);
					//echo $premium_exp_dt;
					$dl_date = explode("-",$premium_exp_dt[0]);
					$dt = $dl_date[2];
					$month = $dl_date[1];
					$year = $dl_date[0];

					?>
					<ul>
						<li><label>Departure</label></li>
						<li>
							<div class="styled-select-smll">
							   <select name="departure_month" class="departure-month">
							      <option value="01" <?php if($month==1){ echo "selected";}?>>Jan</option>
							      <option value="02" <?php if($month==2){ echo "selected";}?>>Feb</option>
							      <option value="03" <?php if($month==3){ echo "selected";}?>>Mar</option>
							      <option value="04" <?php if($month==4){ echo "selected";}?>>Apr</option>
							      <option value="05" <?php if($month==5){ echo "selected";}?>>May</option>
							      <option value="06" <?php if($month==6){ echo "selected";}?>>Jun</option>
							      <option value="07" <?php if($month==7){ echo "selected";}?>>Jul</option>
							      <option value="08" <?php if($month==8){ echo "selected";}?>>Aug</option>
							      <option value="09" <?php if($month==9){ echo "selected";}?>>Sep</option>
							      <option value="10" <?php if($month==10){ echo "selected";}?>>Oct</option>
							      <option value="11" <?php if($month==11){ echo "selected";}?>>Nov</option>
							      <option value="12" <?php if($month==12){ echo "selected";}?>>Dec</option>
							   </select>
							</div>
						</li>
						<li>
							<div class="styled-select-smll">
							   <select name="departure_day" class="departure-day">
							   	<?php
							   	for($i=1;$i<=31;$i++){
							   	?>
							      <option value="<?php echo ($i < 10)?'0'.$i:$i; ?>" <?php if($dt==$i){ echo "selected";}?>><?php echo $i; ?></option>
							     <?php } ?>
							   </select>
							</div>
						</li>
						<li>
							<div class="styled-select-mid">
							   <select name="departure_year" class="departure-year">
							      <?php
							   	for($i=2015;$i<=2099;$i++){
							   	?>
							      <option value="<?php echo $i; ?>" <?php if($year==$i){ echo "selected";}?>><?php echo $i; ?></option>
							     <?php } ?>
							   </select>
							</div>
						</li>
						
					</ul>
				</div>
				<input type="hidden" name="checkin" >
				<input type="hidden" name="checkout" >
				<div class="col-sm-12">
					<div class="bnr_frm_bot">
						<div class="row">
						<div class="col-sm-3 mob_big">
								<ul>
									<li><label>Rooms</label></li>									
									<li>
										<div class="styled-select-smll">
											<select name="nRooms" class="rooms">
										   <?php
							   	for($i=1;$i<=4;$i++){
							   	?>
							      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							     <?php } ?>
							    </select>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-sm-3 mob_big">
								<ul>
									<li><label>Adults</label></li>									
									<li>
										<div class="styled-select-smll">
											<select name="nAdults" class="adults">
										   <?php
							   	for($i=1;$i<=6;$i++){
							   	?>
							      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							     <?php } ?>
							    </select>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-sm-3 mob_big">
								<ul>
									<li><label>Children</label></li>									
									<li>
										<div class="styled-select-smll">
										   <select name="nChildrens" class="children">
										      <?php
							   	for($i=0;$i<=10;$i++){
							   	?>
							      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							     <?php } ?>
										   </select>
										</div>
									</li>
								</ul>
							</div>
						
							<div class="col-sm-3 col-xs-12">
							<input style=" background:url('http://aff.bstatic.com/data/sp_aff/330843/booknow_en-us.gif') no-repeat scroll 0 0;
    border: medium none;
    min-height: 35px;
    min-width: 170px;" type="submit"  class="submit" value="" />
				
				
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>
			
		</div>
	</div>
<?php if($_REQUEST['hid']=='2'){ ?>
<div class="certificate">
<div id="TA_certificateOfExcellence20" class="TA_certificateOfExcellence"><ul id="H2FbfZ" class="TA_links ERPOSii"><li id="0f87YkWiLq" class="FS7e33GGJg"><a target="_blank" href="https://www.tripadvisor.in/Hotel_Review-g297666-d1585866-Reviews-Vesta_Bikaner_Palace-Bikaner_Bikaner_District_Rajasthan.html"><img src="https://www.tripadvisor.in/img/cdsi/img2/awards/v2/tchotel_2020_LL-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=20&amp;locationId=1585866&amp;lang=en_IN&amp;year=2020&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script></div>
<?php } ?>	
<?php if($_REQUEST['hid']=='3'){ ?>
<div class="certificate">	
<div id="TA_certificateOfExcellence58" class="TA_certificateOfExcellence">
<ul id="GE3SdPLzX" class="TA_links jofiZdPY6">
<li id="mxlsidHV" class="4qc2lS97N">
<a target="_blank" href="http://www.tripadvisor.in/Hotel_Review-g304555-d1585867-Reviews-Vesta_Maurya_Palace-Jaipur_Rajasthan.html"><img src="http://www.tripadvisor.in/img/cdsi/img2/awards/CoE2015_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a>
</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=58&amp;locationId=1585867&amp;lang=en_IN&amp;year=2015&amp;display_version=2"></script>
</div>
<?php } ?>	
<?php if($_REQUEST['hid']=='4'){ ?>
<div class="certificate">
<div id="TA_certificateOfExcellence20" class="TA_certificateOfExcellence"><ul id="H2FbfZ" class="TA_links ERPOSii"><li id="0f87YkWiLq" class="FS7e33GGJg"><a target="_blank" href="https://www.tripadvisor.in/Hotel_Review-g297666-d1585866-Reviews-Vesta_Bikaner_Palace-Bikaner_Bikaner_District_Rajasthan.html"><img src="https://www.tripadvisor.in/img/cdsi/img2/awards/v2/tchotel_2020_LL-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=20&amp;locationId=1585866&amp;lang=en_IN&amp;year=2020&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script></div>
<?php } ?>


</section>