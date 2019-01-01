<nav class="navbar navbar-default mb-xl-5 mb-4">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <!-- Search-from -->
        <form action="#" method="post" class="form-inline mx-auto search-form">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
            <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
        </form>
        <!--// Search-from -->
        <ul class="top-icons-agileits-w3layouts float-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="far fa-user"></i>
                </a>
                <div class="dropdown-menu drop-3">
                    <div class="profile d-flex mr-o">
                        <div class="profile-r align-self-center">
                            <h5 class="sub-title-w3-agileits"><?php echo $_SESSION['admin_name'];?></h5>
                            <a href="<?php echo $_SESSION['admin_email'];?>"><?php echo $_SESSION['admin_email'];?></a>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>