<div id="layoutSidenav_nav">

    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link mt-5" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link mt-3" href="view-register.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Registered Users
                </a>

                <a class="nav-link collapsed mt-3" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="category-add.php">Add Category</a>
                        <a class="nav-link" href="category-view.php">View Category</a>
                    </nav>
                </div>
                
                <!-- this is a seperator -->

                <a class="nav-link collapsed mt-2" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts"
                    aria-expanded="false" aria-controls="collapsePosts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapsePosts" aria-labelledby="Posts"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="post-add.php">Add Post</a>
                        <a class="nav-link" href="post-view.php">View Post</a>
                    </nav>
                </div>


              
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as: <?= $_SESSION["auth_username"]; ?></div>
        </div>
    </nav>
</div>