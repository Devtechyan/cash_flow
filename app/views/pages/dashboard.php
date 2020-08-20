
<?php require APPROOT . '/views/components/header.php';?>

<div class="wrapper d-flex align-items-stretch">

	   <?php include(APPROOT.'/views/components/sidebar.php'); ?>

      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

      <?php include(APPROOT.'/views/components/menu.php'); ?>

      <h2 class="mb-4">Dashboard</h2>
        <span><?php echo date("jS \of F Y ( l )"); ?></span>

        <div class="row mt-5">

        <div class="card border-primary my-3 mx-4" style="max-width: 18rem;">
            <div class="card-header">Today Income</div>
              <div class="card-body">
                <h5 class="card-title"> <?php if($data['expense']['amount'])echo $data['income']['amount'];else echo "0.00" ?> MMKs </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <div class="card-footer">
                <a href="income/addnew.php" class="btn btn-primary btn-block"> Add New</a>
              </div>
            </div>

            <div class="card border-primary my-3 mx-4" style="max-width: 18rem;">
            <div class="card-header">Today Expand</div>
              <div class="card-body">
              <h5 class="card-title"> <?php if($data['expense']['amount'])echo $data['expense']['amount'];else echo "0.00" ?> MMKs </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <div class="card-footer">
              <a href="expense/addnew.php" class="btn btn-primary btn-block"> Add New</a>
              </div>
            </div>

            <div class="card border-info my-3 mx-4" style="max-width: 18rem;">
            <div class="card-header">Today Transitions</div>
              <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
        </div>  <!-- end of row -->

      </div>
		</div>


<?php require APPROOT . '/views/components/footer.php';?>
