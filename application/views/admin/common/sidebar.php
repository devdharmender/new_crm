<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=base_url()?>">
                <i class="bi bi-house-add-fill"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('user-data')?>">
                <i class="bi bi-bar-chart-fill"></i>
                    User Data
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('ticket')?>">
                <i class="bi bi-ticket-perforated-fill"></i> 
                   Search By Ticket No
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('Add_new_form')?>">
                <i class="bi bi-file-earmark-plus-fill"></i>
                    Add New Form
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('Job-Sheet')?>">
                <i class="bi bi-plus-square-dotted"></i>
                   Add Job Sheet
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('Job-Sheet-data')?>">
                <i class="bi bi-bar-chart-steps"></i>
                    Job Sheet Data
                </a>
            </li>
            
        </ul>
       

         
        <h6
            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Admin Section</span>
        
        </h6>
        <?php if($this->session->userdata('admin_type') == 'admin'){?>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('Add-User')?>">
                <i class="bi bi-person-circle"></i>
                    Add User
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('check-all-user')?>">
                <i class="bi bi-person-fill-check"></i>
                    Check All User
                </a>
            </li>
            <?php } ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('logout')?>">
                <i class="bi bi-door-open-fill"></i>
                    Logout
                </a>
            </li>
        </ul>
      
    </div>
    
</nav>


<!-- for active class -->
<!-- <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("sidebarMenu");
var btns = header.getElementsByClassName("nav-item");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script> -->