<?php

if(isset($_SESSION['success']))
{
?>

<div class="alert alert-success mb-5" role="alert">
  <?php

    echo $_SESSION['success'];

    unsetMessage('success');
  ?>
</div>

<?php
}
?>