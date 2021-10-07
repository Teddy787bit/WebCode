<?php include('include/header.php'); ?>

<section class="offer_sec">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="offer_inner">
					<h3><span>Offers At Vesta</span></h3>
					<?php 
					$offer_sql = "select * from tbl_offer order by offer_id asc";
					$offer_exe = mysqli_query($connobj,$offer_sql);
					while($offer_row=mysqli_fetch_array($offer_exe)){
					?>
					
					<div class="offer_details">
						<div class="row">
							<div class="col-sm-3 col-xs-3">
								<div class="offer_pic">
									<a href="#"><img src="http://vestahotels.in/admin/offer/<?php echo $offer_row['offer_image']; ?>" alt="" /></a>
								</div>
							</div>
							<div class="col-sm-9 col-xs-9">
								<div class="offer_text">
									<?php// echo $offer_row['offer_id']; ?>
									<h4><?php echo html_entity_decode(stripslashes($offer_row['offer_name'])); ?></h4>
									<?php echo html_entity_decode(stripslashes($offer_row['offer_desc'])); ?>
									
									<a target="_blank" href="<?php echo $offer_row['offer_link']; ?>">Vesta International</a>
									<a target="_blank" href="<?php echo $offer_row['offer_link1']; ?>">Vesta Maurya Palace</a>
									<a target="_blank" href="<?php echo $offer_row['offer_link2']; ?>">Vesta Bikaner Palace</a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
					
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('include/footer.php'); ?>