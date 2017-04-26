<?php
include ('layout.php');
?>


<h1><?php echo $p['name']; ?></h1>
<hr>

<div class=" col-lg-9">
<form action="update" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
            if($p['available'] == 1){
              echo 'checked';
            }
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
            if($p['available'] == 0){
              echo 'checked';
            }
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
<article class="form-group">
    <label for="image" class="col-sm-2 control-label">Image</label>
    <section class="col-sm-10">
    <div class="col-md-6">
        <input type="file" min="0" name="image" placeholder="5" class="form-control" value="<?php echo $p['image']; ?>">
      </div>
      <div class="col-md-6">
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
      <button type="submit" class="btn btn-primary">Update category</button>
    </div>
  </div>
</form>
<form action="delete" method="post">
  <button type="submit" class="btn btn-danger pull-right">Delete</button>
</form>
</div>
<?php


unset($_SESSION['errors']);
unset($_SESSION['oldvals']);

include ('footer.php');

?>