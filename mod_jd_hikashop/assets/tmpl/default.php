<?php 
  // no direct access
 // Licensed under the GPL v3
defined( '_JEXEC' ) or die( 'Restricted access' );
            
			$document = JFactory::getDocument(); 
			$document->addStyleSheet('modules'.'/'.'mod_jd_hikashop'.'/'.'assets'.'/'.'css'.'/'.'slick.css');
			$document->addStyleSheet('modules'.'/'.'mod_jd_hikashop'.'/'.'assets'.'/'.'css'.'/'.'slick-theme.css');
			$document->addStyleSheet('modules'.'/'.'mod_jd_hikashop'.'/'.'assets'.'/'.'css'.'/'.'style.css');
			$document->addScript('modules'.'/'.'mod_jd_hikashop'.'/'.'assets'.'/'.'js'.'/'.'slick.min.js');
			 
		    if (!defined('DS'))
			{
				define('DS', DIRECTORY_SEPARATOR);
			}

			include_once rtrim(JPATH_ADMINISTRATOR, DS) . '/' . 'components' . '/' . 'com_hikashop' . '/' . 'helpers' . '/' . 'helper.php';
?>
     
  <!---- Font Awesome ---->
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 
  <div class="jd-hikashop-category-element">
        
            <div class="jd-category-slider jd-hikashop-category-wrapper">
                <div class="row jd-slider-row">
                    <div class="col-md-5 jd-slider-col">
                        <div class="jd-product-heading-wrapper">
                            <h1 class="jd-slider-heading"><?php echo $title;?></h1>
                            <p class="jd-slider-subHeading"><?php echo $subtitle;?></p>
                        </div>
                    </div>
                    <div class="col-md-7 jd-slider-col">
                        <div class="jd-slider-category-item-list jd-hikashop-category-item-list">
                            <ul class="jd-unstyled-list">
								<?php if($featuredproducts=="1") :?>
									<li class="active"><a href="#">Featured Product</a></li>
								<?php endif;?>
								
								<?php if($newarrival=="1") :?>
									<li><a href="#">New Arrival</a></li>
								<?php endif;?>
								
								<?php if($hotproducts=="1") :?>
									<li><a href="#">Hot Products</a></li>
								<?php endif;?>
								
								<?php if($bestseller=="1") :?>
									<li><a href="#">Best Seller</a></li>
								<?php endif;?>
                            </ul>
                        </div>
                    </div>

                </div>
				
				<?php if(empty($count)){  ?>
					<div class="alert alert-error"><a data-dismiss="alert" class="close">x</a><div><p style="color:black;"><?php echo "ADD PRODUCT"; ?></p></div></div>
				<?php } ?>
                <div class="jd-hikashop-category-container">
                    <div class="jd-hikashop-category-item-wrapper">
						<?php foreach($item as $items) :?>
						 <?php $link = hikashop_contentLink('product&task=show&cid='.$items['product_id'].'&name='.$items['product_alias']."false","true");?>
							<div class="jd-hikashop-category-item">
								<div class="jd-hikashop-category-item-image text-center">
									<a href="#"><img src="<?php echo JURI::base();?>/images/com_hikashop/upload/<?php echo $items['file_path']?>" alt=""></a>
								</div>
								<div class="jd-hikashop-category-item-content text-center">
									<div class="jd-slider-cart-wrapper">
										<ul class="jd-unstyled-list">
											<li class="jd-icon-cart"><a href="<?php echo $link;?>"></a></li>
											<li class="jd-icon-heart"><a href="#"></a></li>
										</ul>
									</div>
									<div class="jd-slider-rating">
										<ul class="jd-unstyled-list">
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="far fa-star"></i></a></li>
										</ul>
									</div>
									<h5 class="jd-hikashop-category-heading">
										<a href="<?php echo $link; ?>"><?php echo $items['product_name'];?></a>
									</h5>
									<h5 class="jd-hikashop-category-heading">
										<a href="#"><?php echo $items['category_name'];?></a>
									</h5>
									<p class="jd-hikashop-category-price">
										<a href="<?php echo $link; ?>"><?php echo $items['product_sort_price']; ?>
										</a>
									</p>
								</div>
							</div>
						<?php endforeach;?>
                    </div>
                </div>
            </div>
    </div>
      <script>
	    jQuery(document).ready(function($ ){
    $('.jd-hikashop-category-item-wrapper').slick({
        slidesToShow: <?php if($count > 1){ echo $count-1;} else {echo $count;}?>,
        dots: <?php if($displaybullets=="1"){echo "true";} else { echo "false";}?>,
        arrows: <?php if($displayarrows=="1"){echo "true";} else { echo "false";}?>,
        touchMove: true,
        autoplay: <?php if($autoplay=="1"){echo "true";} else { echo "false";}?>,
        pauseOnHover: true,
		speed: <?php if($autoplayspeedoptional){ echo $autoplayspeedoptional;} else{ echo "1000";} ?>,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3
                }
    },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2
                }
    },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    });
});
      </script>