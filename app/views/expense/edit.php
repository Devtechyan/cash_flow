
<?php require APPROOT . '/views/components/header.php';?>

<div class="wrapper d-flex align-items-stretch">

	   <?php include(APPROOT.'/views/components/sidebar.php'); ?>

      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

      <?php include(APPROOT.'/views/components/menu.php'); ?>

      <h2 class="mb-4">Edit Expense</h2>
        <span><?php echo date("jS \of F Y ( l )"); ?></span>

        <div class="row mt-5">
        <div class="col-md-4"></div>
        
        <form class="col-md-8" action="<?php echo URLROOT ?>/expense/update" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['expense']['id'] ?>">
            <input type="hidden" name="user_id" value="<?php echo $data['expense']['user_id'] ?>">
            <input type="hidden" name="date" value="<?php echo $data['expense']['date'] ?>">
            <div class="form-group">
                <label >Amount</label>
                <input type="number" class="form-control" name="amount" id="amount" value="<?php echo $data['expense']['amount']; ?>" placeholder="enter amount here">
            </div>
            <div class="form-group">
                <label for="qty">Quantity</label>
                <input type="number" class="form-control" name="qty" id="qty" value="<?php echo $data['expense']['qty'] ?>" placeholder="enter quantity here">
            </div>
            <div class="form-group">
                <label >Category</label>
                <select class="form-control" id="category" name="category_id">
                
                <?php 
                    foreach($data['categories'] as $category)
                    {
                ?>
                <option value="<?php  echo $category['id'] ?>"  <?php if($category['id']==$data['expense']['category_id']) echo "selected"; ?>>
                    <?php  echo $category['name'] ?>
                </option>

                <?php
                    }
                ?>

                </select>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <input type="reset" class="btn btn-secondary float-right btn-block" value="Reset">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary float-right btn-block">Update</button>
                </div>
            </div>
        </form>
        
        </div>  <!-- end of row -->

      </div>
</div>


<?php require APPROOT . '/views/components/footer.php';?>
