<?php include "templates/header.php"; 
include "backend/getproducts.php";
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
    $cart = getcart($id);
}
else{
    $username='User';
}

//print_r($cart)

?>

<div class="container text-center">
    <h1>Your Cart</h1>
    <br>
    <ul class="list-unstyled">
    <?php foreach($cart as $element){ 
        $productid=$element['productid'];
        $product=getsingleproduct($productid);
        //print_r($product);
        ?>
        <li class="media my-5">
            <img class="mr-3" style="width: 200px;" src="<?=$product['img']?>" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0 mb-1"><?=$product['name']?> - Price = <?=$product['price']?></h5>
                <p><?=$product['description']?></p>
                <button class="btn btn-success btn-block">Place Order</button>
            </div>
        </li>
    <?php } ?>   
    </ul>


</div>

<?php include "templates/footer.php"; ?>