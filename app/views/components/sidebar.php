<nav id="sidebar">
        <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(<?php echo URLROOT; ?>/public/images/logo.jpg);"></a>
        <ul class="list-unstyled components mb-5">
        <li class=<?php 
        if(isset($data['index']))
        {
            if($data['index']=='dashboard') echo "active";
        }
         ?>>
        <a href="<?php echo URLROOT ?>/">Dashboard</a>
        </li>
        <li class=<?php 
        if(isset($data['index']))
        {
            if($data['index']=='income') echo "active";
        }
         ?>>
        <a href="#incomeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Income</a>
        <ul class="collapse list-unstyled" id="incomeSubmenu">
        <li>
            <a href="<?php echo URLROOT ?>/income">View All</a>
        </li>
        <li>
            <a href="<?php echo URLROOT ?>/income/create">Add New</a>
        </li>
        </ul>
        </li>
        <li class=<?php 
        if(isset($data['index']))
        {
            if($data['index']=='expense') echo "active";
        }
         ?>>
        <a href="#expenseSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Expense</a>
        <ul class="collapse list-unstyled" id="expenseSubmenu">
        <li>
            <a href="<?php echo URLROOT ?>/expense">View All</a>
        </li>
        <li>
            <a href="<?php echo URLROOT ?>/expense/create">Add New</a>
        </li>
        </ul>
        </li>
        <li class="<?php 
        if(isset($data['index']))
        {
            if($data['index']=='category') echo "active";
        }
         ?>">
        <a href="#categorySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Category</a>
        <ul class="collapse list-unstyled" id="categorySubmenu">
        <li>
            <a href="<?php echo URLROOT ?>/category">View All</a>
        </li>
        <li>
            <a href="<?php echo URLROOT ?>/category/create">Add New</a>
        </li>
        </ul>
        </li>
        <li>
            <a href="#">Setting</a>
        </li>
        <li>
            <a href="#">Contact Us</a>
        </li>
    </ul>

    <div class="footer">
        <p></p>
    </div>

    </div>
</nav>