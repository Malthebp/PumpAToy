<?php

include ('layout.php');


$products = $fpdo->from('ptoys_product');


?>


<h1>Products</h1>
<hr>

<div>
    <article class="col-md-3 special-products-grid text-center">
        <h2>
        <a href="newproduct" class="brand-name">
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
        <a class="brand-name" href="single-page.html">
        </a>
        <a class="product-here" href="single-page.html">
        <img src="<?php echo $product['image']; ?>" title="product-name" />
        </a>
        <h4>
        <a href="single-page.html"><?php echo $product['name']; ?></a>
        <p><?php echo $product['price']; ?> Dkk. </p>
        </h4>
    </article>
<?php
}
?>
<!--/col-span-9-->
</div>


<div class="modal" id="addWidgetModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Add Widget</h4>
</div>
<div class="modal-body">
    <p>Add a widget stuff here..</p>
</div>
<div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dalog -->
</div>
<!-- /.modal -->
<?php

include ('footer.php');

?>