
<?php require APPROOT . '/views/components/header.php';?>

<div class="wrapper d-flex align-items-stretch">

	   <?php include(APPROOT.'/views/components/sidebar.php'); ?>

      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

      <?php include(APPROOT.'/views/components/menu.php'); ?>

      <h2 class="mb-4">Category</h2>

	   <?php include(APPROOT.'/views/components/message.php'); ?>


      <table class="table table-light text-center" id="myTable">
      <thead>
       <tr>
         <th>Id</th>
         <th>Name</th>
         <th>Description</th>
         <th>Type</th>
         <th></th>
         <th></th>
       </tr>
       </thead>
        <?php
            foreach( $data['categories'] as $category )
            {
               ?>
               <tr>
               <td><?php echo $category['id'] ?></td>
               <td><?php echo $category['name'] ?></td>
               <td><?php echo $category['description'] ?></td>
               <td><?php echo $category['type_name'] ?></td>
               <td>
                  <a href="<?php echo URLROOT ?>/category/edit/<?php echo $category['id'] ?>" class="btn btn-primary">Edit</a>
               </td>
               <td>
                  <a href="<?php echo URLROOT ?>/category/destory/<?php echo base64_encode($category['id'])?>" class="btn btn-danger">Delete</a>
               </td>
               </tr>
               <?php
            }

         ?>
      </table>

      <a href="<?php echo URLROOT ?>/category/create" class="btn btn-primary float-right mt-5">Add New</a>
      </div>
		</div>


<?php require APPROOT . '/views/components/footer.php';?>
