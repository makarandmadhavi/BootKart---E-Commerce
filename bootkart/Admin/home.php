<?php include 'templates/header.php'; ?>
<?php include 'backend/getproducts.php'; 
                $products = getallproducts();

?>

<h1 class="text-center" >All Products</h1>

<div class="container">
    <div class="row">
        <?php foreach($products as $product){ ?>
        <div class="col-sm-4">
            
            <div class="card" style="width: 18rem; margin-top:20px;">
            <h5 class="text-right" style="margin:5px;color:grey;">X</h5>
                <img class="card-img-top" src="<?=$product['img']?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?=$product['name']?> - Rs.<?=$product['price']?></h5>
                    <p class="card-text"><?=$product['description']?></p>                       
                </div>
            </div>
        </div>   
        <?php } ?>
      
    </div>
</div>

<?php  include 'templates/footer.php'; ?>