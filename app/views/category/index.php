
<?php require APPROOT . '/views/components/header.php';?>

<div class="wrapper d-flex align-items-stretch">

	   <?php include(APPROOT.'/views/components/sidebar.php'); ?>

      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

      <?php include(APPROOT.'/views/components/menu.php'); ?>

        <h2 class="mb-4">Category</h2>
       
        <?php 

           //var_dump($data['categories']);

           foreach($data['categories'] as $cat)
           {
              echo $cat['name'];
           }

        ?>


      </div>
		</div>


<?php require APPROOT . '/views/components/footer.php';?>
