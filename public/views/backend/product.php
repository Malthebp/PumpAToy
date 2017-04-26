<?php
include ('layout.php');

foreach ($product as $p){
?>


<h1><?php echo $p['name']; ?></h1>
<hr>

<div>
<form action="product" method="PATCH" enctype="multipart/form-data" class="form-horizontal col-lg-9">
<input type="hidden" name="id" value="<?php echo $p['id']; ?>">
  <article class="form-group <?php if(!empty($_SESSION['errors']['name']))
      {
        echo 'has-error';
      }
      ?>">
    <label for="name" class="col-sm-2 control-label">Product Name *</label>
    <section class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php 
      if(!empty($_SESSION['oldvals']['name']))
      {
        echo $_SESSION['oldvals']['name'];
      } else {
        echo $p['name'];
      }
      ?>">
      <span class="help-block"><?php if(!empty($_SESSION['errors']['name']))
      {
        echo $_SESSION['errors']['name'];
      }
      ?></span>
    </section>
  </article>
  <article class="form-group <?php if(!empty($_SESSION['errors']['description']))
      {
        echo 'has-error';
      }
      ?>">
    <label for="description" class="col-sm-2 control-label">Product Description *</label>
    <section class="col-sm-10">
      <textarea id="description" class="form-control" name="description" placeholder="Description"><?php 
      if(!empty($_SESSION['oldvals']['description']))
      {
        echo $_SESSION['oldvals']['description'];
      } else {
        echo $p['description'];
      }
      ?></textarea>
      <span class="help-block"><?php if(!empty($_SESSION['errors']['description']))
      {
        echo $_SESSION['errors']['description'];
      }
      ?></span>
    </section>
  </article>
    <article class="form-group <?php if(!empty($_SESSION['errors']['price']))
      {
        echo 'has-error';
      }
      ?>">
        <label for="price" class="col-sm-2 control-label">Product Price *</label>
        <section class="col-sm-10">
          <input type="text" name="price" placeholder="10.99" class="form-control" value="<?php 
      if(!empty($_SESSION['oldvals']['price']))
      {
        echo $_SESSION['oldvals']['price'];
      } else {
        echo $p['price'];
      }
      ?>">
          <span class="help-block"><?php if(!empty($_SESSION['errors']['price']))
      {
        echo $_SESSION['errors']['price'];
      }
      ?></span>
        </section>

    </article>
  <article class="form-group <?php if(!empty($_SESSION['errors']['available']))
      {
        echo 'has-error';
      }
      ?>">
    <label for="available" class="col-sm-2 control-label">
    Product available? *
    </label>
    <section class="col-sm-10 radioButtons">
        <div>

            <input type="radio" name="available" id="availableYes"  <?php 
          if(!empty($_SESSION['oldvals']['available']) && $_SESSION['oldvals']['available'] == true)
          {
            echo 'checked';
          } if($p['available'] == 1)
          {echo 'checked'; } 
      ?> value="1">
            <label for="availableYes">Yes</label>
        </div>
        <div>
            <input type="radio" name="available" id="availableNo" value="0" <?php 
          if(!empty($_SESSION['oldvals']['available']) && $_SESSION['oldvals']['available'] == 0)
          {
            echo 'checked';
          }
          if($p['available'] == 0)
          {echo 'checked'; } 
          ?> >
            <label for="availableNo">No</label>
        </div>
           <span class="help-block"><?php if(!empty($_SESSION['errors']['available']))
      {
        echo $_SESSION['errors']['available'];
      }
      ?></span>
    </section>
  </article>
    <article class="form-group <?php if(!empty($_SESSION['errors']['stock']))
      {
        echo 'has-error';
      }
      ?>">
        <label for="stock" class="col-sm-2 control-label">Stock *</label>
        <section class="col-sm-10">
          <input type="number" min="0" name="stock" placeholder="5" class="form-control" value="<?php 
      if(!empty($_SESSION['oldvals']['stock']))
      {
        echo $_SESSION['oldvals']['stock'];
      } else {
        echo $p['stock'];
      }
      ?>">
          <span class="help-block"><?php if(!empty($_SESSION['errors']['stock']))
      {
        echo $_SESSION['errors']['stock'];
      } 
      ?></span>
        </section>
    </article>
<article class="form-group">
    <label for="image" class="col-sm-2 control-label">Image</label>
    <section class="col-sm-10">
      <div class="col-sm-6">
        <input type="file" min="0" name="image" placeholder="5" class="form-control col-sm-6">
      </div>
      <div class="col-sm-6">
        <img class="img-responsive" src="<?php echo $root . $p['image']; ?>">
      </div>
      
      <?php if(!empty($_SESSION['errors']['image']))
      {
        echo $_SESSION['errors']['image'];
      }
      ?>
    </section>
</article>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Update product</button>
    </div>
  </div>
</form>
</div>
<?php
unset($_SESSION['errors']);
unset($_SESSION['oldvals']);

include ('footer.php');
}
?>