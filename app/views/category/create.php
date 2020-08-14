
<?php require APPROOT . '/views/components/header.php';?>

<div class="wrapper d-flex align-items-stretch">

	   <?php include(APPROOT.'/views/components/sidebar.php'); ?>

      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

      <?php include(APPROOT.'/views/components/menu.php'); ?>

      <h2 class="mb-4">New Category</h2>
        <span><?php echo date("jS \of F Y ( l )"); ?></span>

        <div class="row mt-5">
        <div class="col-md-4"></div>
        <form class="col-md-8" action="<?php echo URLROOT ?>/category/store" method="POST">
            <div class="form-group">
                <label for="amount">Name</label>
                <input type="text" class="form-control" id="amount" placeholder="enter name here" name="name" require>
            </div>
            <div class="form-group">
                <label for="amount">Type</label>
                <select class="form-control" name="type_id" id="type_id">
                    <?php 
                        foreach($data['types'] as $type)
                        {
                    ?>
                        <option value="<?php echo $type['id'] ?>">
                           <?php echo $type['name'] ?>
                        </option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="5" require ></textarea>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <input type="reset" class="btn btn-secondary float-right btn-block" value="Reset">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary float-right btn-block">Add</button>
                </div>
            </div>
        </form>
        
            
        </div>  <!-- end of row -->

      </div>
</div>


<?php require APPROOT . '/views/components/footer.php';?>
