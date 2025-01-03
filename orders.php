<?php require "../includes/header.php" ?>
<?php require "../config.php" ?>

<?php

if(!isset($_SESSION['user_id'])){
	header("location: ".APPURL." ");
}

        $orders = $conn->query("SELECT * FROM orders WHERE user_id='$_SESSION[user_id]' ");
        $orders->execute();

        $allOrders = $orders->fetchAll(PDO::FETCH_OBJ);


?>

<section class="home-slider owl-carousel">

<div class="slider-item" style="background-image: url(<?php echo APPURL; ?>/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
  <div class="container">
    <div class="row slider-text justify-content-center align-items-center">

      <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Your Orders</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo APPURL; ?>">Home</a></span> <span>Your Orders</span></p>
      </div>

    </div>
  </div>
</div>
</section>
<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
						<?php if(count($allOrders) > 0) : ?>
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>first_name</th>
						        <th>last_name</th>
                                <th>street_address</th>
						        <th>town</th>
						        <th>phone</th>
						        <th>status</th>
								<th>total_price</th>
						      </tr>
						    </thead>
						    <tbody>
								<?php foreach($allOrders as $order) : ?>
						      <tr class="text-center">
						        <td class="product-remove"><?php echo $order->first_name; ?></td>
						        
						        <td class="image-prod"><?php echo $order->last_name; ?></td>
						        
						        <td class="product-name">
						        	<h3><?php echo $order->street_address; ?></h3>
						        	
						        </td>
						        
                                    <td><p><?php echo $order->town; ?></p></td>

						        <td class="price"><?php echo $order->phone; ?></td>
						        
						        <td>
								<?php echo $order->status; ?>
					            </td>
						        
						        <td class="total"><?php echo $order->total_price; ?></td>
						      </tr>
									<?php endforeach; ?>
						    </tbody>
						  </table>
						  <?php else : ?>
							<p>No Orders Found!!</p>
							<?php endif; ?>
					  </div>
    			</div>
    		</div>
			</div>
		</section>



<?php require "../includes/footer.php" ?>







      