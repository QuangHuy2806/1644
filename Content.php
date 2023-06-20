  
<?php
include_once("connection.php");
?>
     <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="../huy/product-imgs/bo-suu-tap-air-force-1.jpg.webp" style="width: 40%;" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
                            Air Force 1<span class="primary"> <strong></strong></span>
							</h2>
							<h4 class="caption subtitle">Collection</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="../huy/product-imgs/bo-suu-tap-air-jordan-1.jpg.webp" style="width: 40%;" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
                           Air Jordan 1 <span class="primary"> <strong></strong></span>
							</h2>
							<h4 class="caption subtitle">New</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="../huy/product-imgs/bo-suu-tap-adidas-forum.jpg.webp" style="width: 40%;" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
                            Adidas Forum <span class="primary"> <strong></strong></span>
							</h2>
							<h4 class="caption subtitle">New</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="../huy/product-imgs/bo-suu-tap-mlb-liner.jpg.webp" style="width: 40%;" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
                          MLB Liner <span class="primary"><strong></strong></span>
							</h2>
							<h4 class="caption subtitle">NEW</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <!--Gioi thieu cac chuc nang-->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Exchange, return every 30 days</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free ship</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Payment security</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New Product</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel">
                        
                        <!--Load san pham tu DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
		
			            
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
				            <!--Một sản phẩm -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../huy/product-imgs/<?php echo $row['Pro_image']?>" width="150" height="150">
                                    <div class="product-hover">
                                        <a href="?func=dathang&ma=<?php echo  $row['Product_ID']?>" class="add-to-cart-link" ><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="?page=detail&&id=<?php echo  $row['Product_ID']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price']?></ins> <del><?php echo  $row['oldPrice']?></del>
                                </div> 
                            </div>
                
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="../huy/images/brand1.jpg" alt="">
                            <img src="../huy/images/brand2.jpg" alt="">
                            <img src="../huy/images/brand3.jpg" alt="">
                            <img src="../huy/images/brand4.jpg" alt="">
                            <img src="../huy/images/brand5.jpg" alt="">
                            <img src="../huy/images/brand6.jpg" alt="">
                            <img src="../huy/images/brand7.jpg" alt="">
                            <img src="../huy/images/brand8.jpg" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Bestseller</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="../huy/img/giay-nike-air-force-1-07-panda-dv0788-001.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Nike Air Force 1</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$300.00</ins> <del>$400.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="../huy/img/giay-nike-air-jordan-1-low-se-heavy-tan-leather-fb7168-121-7.png.webp" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html"></a>Nike Air Jordan 1 Low SE</h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> 
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="../huy/img/giay-nike-court-legacy-next-nature-white-desert-ochre-dh3162-100.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Nike Court Legacy</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="../huy/img/nike-air-force-1-low-wheat-cj9179-200.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Nike Air Force 1 Low</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="../huy/img/giay-adifom-superstar-core-black-hq8752-11.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Adifom Superstar</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> 
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="../huy/img/Giay-Louis-Vuitton-x-Nike-Air-Force-1-Low-By-Virgil-Abloh-‘White-Green.jpg.webp" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Louis Vuitton x Nike Air Force 1 Low</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Latest</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="../huy/img/Giay-Louis-Vuitton-x-Nike-Air-Force-1-Low-By-Virgil-Abloh-‘White-Red.jpg.webp" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Louis Vuitton x Nike Air Force 1 Low</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="../huy/img/dior-x-air-jordan-1-high-cn8607-002.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Dior x Air Jordan 1 High</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> 
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="../huy/img/giay-bong-ro-nam-travis-scott-x-dunk-low-premium-qs-sb-cactus-jack-ct5053-101.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Travis Scott x Dunk Low Premium</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> 
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
