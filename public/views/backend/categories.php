<?php

include ('layout.php');


$categories = $fpdo->from('ptoys_category');
?>


<h1>Category</h1>
<hr>

<div>
    <article class="col-md-3 special-products-grid text-center">
        <h2>
        <a href="category/new" class="brand-name">
            New category
        </a>
        </h2>
    </article>
<?php 
foreach ($categories as $category)
{
?> 
    <!-- center left-->
    <article class="col-md-3 special-products-grid text-center">
        <a class="brand-name" href="category/<?php echo $category['id']; ?>/">
        </a>
        <a class="product-here" href="category/<?php echo $category['id']; ?>/">
        <img src="../<?php echo $category['image']; ?>" title="category-name" />
        </a>
        <h4>
        <a href="category/<?php echo $category['id']; ?>/"><?php echo $category['name']; ?></a>
        </h4>
    </article>
<?php } ?>
<!--/col-span-9-->
</div>



<?php

include ('footer.php');

?>