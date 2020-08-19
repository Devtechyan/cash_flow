
<?php require APPROOT . '/views/components/header.php';?>

<div class="wrapper d-flex align-items-stretch">

	   <?php include(APPROOT.'/views/components/sidebar.php'); ?>

      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

      <?php include(APPROOT.'/views/components/menu.php'); ?>

      <h2 class="mb-4">Expense</h2>

      <?php include(APPROOT.'/views/components/message.php'); ?>

      <table class="table table-light text-center" id="myTable">
      <thead>
       <tr>
         <th>id</th>
         <th>Category</th>
         <th>Amount</th>
         <th>Qty</th>
         <th>Assigned By</th>
         <th>Date </th>
         <th></th>
         <th></th>
       </tr>
       </thead>
        <?php
            foreach( $data['expenses'] as $expense )
            {
               ?>
               <tr>
               <td><?php echo $expense['id'] ?></td>
               <td><?php echo $expense['category_name'] ?></td>
               <td><?php echo $expense['amount'] ?></td>
               <td><?php echo $expense['qty'] ?></td>
               <td><?php echo $expense['user_name'] ?></td>
               <td><?php echo $expense['date'] ?></td>
               <td>
                  <a class="btn btn-primary" href="<?php echo URLROOT ?>/expense/edit/<?php echo $expense['id'] ?>">Edit</a>
               </td>
               <td>
                <a class="btn btn-danger" href="<?php echo URLROOT ?>/expense/destory/<?php echo base64_encode($expense['id']); ?>">Delete</a>
               </td>
               </tr>
               <?php
            }

         ?>
      </table>
      <a href="<?php echo URLROOT ?>/expense/create" class="btn btn-primary float-right mt-5">Add New</a>

      </div>
		</div>


<?php require APPROOT . '/views/components/footer.php';?>
