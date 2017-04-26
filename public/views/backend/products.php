<?php

include ('layout.php');


$products = $fpdo->from('ptoys_product');


?>


<h1>Products</h1>
<hr>

<div>
    <article class="col-md-3 special-products-grid text-center">
        <h2>
        <a href="product/new" class="brand-name">
            New product
        </a>
        </h2>
    </article>
<?php 
foreach ($products as $product)
{
?> 
    <!-- center left-->
    <article class="col-md-3 special-products-grid text-center">
        <a class="brand-name" href="product/<?php echo $product['id']; ?>/">
        </a>
        <a class="product-here" href="product/<?php echo $product['id']; ?>/">
        <img src="../<?php echo $product['image']; ?>" title="product-name" />
        </a>
        <h4>
        <a href="product/<?php echo $product['id']; ?>/"><?php echo $product['name']; ?></a>
        <p><?php echo $product['price']; ?> Dkk. </p>
        </h4>
    </article>
<?php
}
?>
<!--/col-span-9-->
</div>

<?php

include ('footer.php');

?>