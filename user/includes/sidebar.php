<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link" href="view-donors.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Donors
                </a>
                <a class="nav-link" href="view-myrequests.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Requests
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?= $_SESSION['auth_user']['user_name']; ?>
        </div>
    </nav>
</div>