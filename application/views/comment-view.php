<div class="resp-tabs-container">
							    <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Description</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                <?php foreach($comment as $temp){?>
									<div class="facts">
                                    <a href="#"><img class="etalage_thumb_image img-responsive" src="<?php echo base_url()?>public/images/post/<?php echo $user['image']; ?>"  height="10px" alt=" " ></a>
									  <p > <?php echo $temp['content']?></p>
										       
							        </div>
                                    <br />
                                    <?php }?>
							    	</div>
							      
							
					 </div>