<?php include('include/header.php');?>

<section class="wht_cont_area">
	<div class="container">
		<div class="row">
			<?php
      	$get_contact_sql1="select * from   tbl_hotel where hotel_id=1";
		$get_contact_rs1=mysqli_query($connobj,$get_contact_sql1);
		$get_contact_row1=mysqli_fetch_array($get_contact_rs1);
      	?>
<style>
      	    .popup{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    /* border: 2px red solid; */
    display: none;
    z-index: 9999;
    opacity: 10;
}
.ContentBox{
     z-index: 1;
    position: relative;
    width: 600px;
    height: 400px;
    background-color: antiquewhite;
    border-radius: 20px;
    display: flex;
}
.ContentBox .imgbox{
    position: relative;
    width: 300px;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
    /* border: black 2px solid; */
}
.ContentBox .imgbox img{
    position: relative;
    max-width: 250px;
    border-radius: 20px;
    /* border: steelblue 2px solid; */
    z-index: 1;
}
.ContentBox .content{
/* border:orangered 2px solid; */
position: relative;
width: 300px;
height: 400px;
display: flex;
justify-content: center;
align-items: center;
}

.ContentBox .content h3{
    color: #333;
    line-height: 1em ;
    font-size: 2em;
    font-weight: 300; 
}
.ContentBox .content h2{
    font-size: 2em;
    color: #ff4d54;
    line-height: 1em ;
    
}
.ContentBox .content h2 span{
    color: #333;
    font-size: 0.75em;
    text-transform: uppercase;
}
.ContentBox .content p{
    font-weight: 200;
    font-size: 15px;
}
.ContentBox .content a{
    display: inline-block;
    padding: 10px 20px ;
    background: chocolate;
    margin-top: 15px;
    text-decoration: none;
    border-radius: 10px;
    color: white;
}
.close{
    position: absolute;
    top: 20px;
    right: 6px;
    width: 30px;
    height: 30px;
    background: rgb(219, 219, 219) url('../images/close16.png');
    background-repeat: no-repeat;
    background-size: 10px;
    background-position: center;
    cursor: pointer;   
    border-radius: 50%;
    opacity:1;
    z-index: 10;
}
.close a:hover{
    background-color:red ;
    opacity:2;
}

@media (max-width: 767px)
{
    .popup{
        z-index:999;
    }
    .ContentBox{
        width:300px;
        height: auto;
        flex-direction: column;
    }
    .ContentBox .imgbox{
       height: auto;
      /*  border: hotpink 2px solid;*/
    }
    .ContentBox .content{

        height :auto;
        text-align: center;
        padding: 20px;
        padding-top: 0;
    }
    .close{
    top:-5px;
    right: -20px;
   /* background:  rgb(219, 219, 219) url(../Images/close16.png);*/
    background-repeat: no-repeat;
    background-size: 10px;
    background-position: center;
    cursor: pointer;   
    border-radius: 50%;
    z-index: 10;
    }
}
      	</style>
      	<div col-md-12>
      	  
     <div class="popup">
        <div class="ContentBox">
            <span class="close" >
            </span>
            <div class="imgbox" >
                <img src="https://vestahotels.in/images/1_lastminutedeals.jpg" alt="">
            </div>
            <div class="content">
                <div>
                <h3>Special Offers</h3>
                <h2>10-40<sup>%</sup><span>Discount</span></h2>
                <p>Vesta Hotels & Resorts offers last minute 
                    discounted deals to travellers booking 24 hours 
                    prior to their stay. 
                    Discounts range from 10%-40% depending on room availability.</p>
                <a href="http://vestahotels.in/Offers">More Offers</a> 
                </div>
            </div>
        </div>
    </div>
      	</div>
			
			<div class="col-sm-12">
				<div class="welcome_cont">
					<h3><span>Welcome to Vesta</span></h3>
					<p><?php echo nl2br(stripslashes(htmlspecialchars_decode($get_contact_row1['hotel_desc'])));?></p>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="red_sec">
	<div class="container">
		<div class="row">
			<?php
      	$get_int_menu_sql="select * from  tbl_hotel where hotel_id=2";
		
		$get_int_menu_rs=mysqli_query($connobj,$get_int_menu_sql);
		$get_int_menu_row=mysqli_fetch_array($get_int_menu_rs);
      	?>
			<div class="col-sm-4">
				<div class="whit_vesta_pnl">
					<a href="Vesta_International"><img src="<?php echo constant('SITE_URL');?>admin/gallery/<?php echo $get_int_menu_row['hotel_menu_image']?>"></a>
					<div class="whit_vesta_pnlInr">
						
						<h4><a href="Vesta_International"><?php echo html_entity_decode($get_int_menu_row['hotel_name']); ?></a></h4>
						<ul>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_International/Accomodation">Rooms and Suites</a></li>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_International/F&B_outlets">Restaurants & Bar</a></li>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_International/Banquets_Conferences">Meetings & Conferences</a></li>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_International/Facilities_Services">Facilities & Services</a></li>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_International/Images">Image Tour</a></li>
							
							
						</ul>
						
					</div>
				</div>
			</div>
			<?php
      	$get_mayur_menu_sql="select * from  tbl_hotel where hotel_id=3";
		$get_mayur_menu_rs=mysqli_query($connobj,$get_mayur_menu_sql);
		$get_mayur_menu_row=mysqli_fetch_array($get_mayur_menu_rs);
      	?>
			<div class="col-sm-4">
				<div class="whit_vesta_pnl">
					<a href="Vesta_Maurya_Palace"><img src="<?php echo constant('SITE_URL');?>admin/gallery/<?php echo $get_mayur_menu_row['hotel_menu_image']?>"></a>
					<div class="whit_vesta_pnlInr">
					
						<h4><a href="<?php echo constant('SITE_URL');?>Vesta_Maurya_Palace"><?php echo html_entity_decode($get_mayur_menu_row['hotel_name']); ?></a></h4>
						<ul>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_Maurya_Palace/Accomodation">Rooms and Suites</a></li>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_Maurya_Palace/F&B_outlets">Restaurants & Bar</a></li>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_Maurya_Palace/Banquets_Conferences">Meetings & Conferences</a></li>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_Maurya_Palace/Facilities_Services">Facilities & Services</a></li>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_Maurya_Palace/Images">Image Tour</a></li>
							
						</ul>
						
					</div>
				</div>
			</div>
			<?php
      	$get_bik_menu_sql="select * from  tbl_hotel where hotel_id=4";
		$get_bik_menu_rs=mysqli_query($connobj,$get_bik_menu_sql);
		$get_bik_menu_row=mysqli_fetch_array($get_bik_menu_rs);
      	?>
			<div class="col-sm-4">
				<div class="whit_vesta_pnl">
					<a href="Vesta_Bikaner_Palace"><img src="<?php echo constant('SITE_URL');?>admin/gallery/<?php echo $get_bik_menu_row['hotel_menu_image']?>"></a>
					<div class="whit_vesta_pnlInr">
						
						<h4><a href="<?php echo constant('SITE_URL');?>Vesta_Bikaner_Palace"><?php echo html_entity_decode($get_bik_menu_row['hotel_name']); ?></a></h4>
						<ul>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_Bikaner_Palace/Accomodation">Rooms and Suites</a></li>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_Bikaner_Palace/F&B_outlets">Restaurants & Bar</a></li>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_Bikaner_Palace/Banquets_Conferences">Meetings & Conferences</a></li>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_Bikaner_Palace/Facilities_Services">Facilities & Services</a></li>
							<li><a href="<?php echo constant('SITE_URL');?>Vesta_Bikaner_Palace/Images">Image Tour</a></li>
							
						</ul>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 <script>
        
        const popup=document.querySelector('.popup');
        const close=document.querySelector('.close');
        window.onload=function(){
            setTimeout(function(){
                popup.style.display = "block"
            },2000)
        }
        close.addEventListener('click',() => {
             popup.style.display = "none"; 
        }
         )
         
    </script>

<?php include('include/footer.php');?>		