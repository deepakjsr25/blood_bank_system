<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Blood Bank Admin Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Users
                    <?php
                    $dash_users_query = "SELECT * FROM users";
                    $dash_users_query_run = mysqli_query($conn, $dash_users_query);

                    if ($users_total = mysqli_num_rows($dash_users_query_run)) {
                        echo '<h4 class="mb-0">' . $users_total . '</h4>';
                    } else {
                        echo '<h4 class="mb-0">No Data</h4>';
                    }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Donors
                    <?php
                    $dash_donors_query = "SELECT * FROM donors";
                    $dash_donors_query_run = mysqli_query($conn, $dash_donors_query);

                    if ($donors_total = mysqli_num_rows($dash_donors_query_run)) {
                        echo '<h4 class="mb-0">' . $donors_total . '</h4>';
                    } else {
                        echo '<h4 class="mb-0">No Data</h4>';
                    }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Requests
                    <?php
                    $dash_requests_query = "SELECT * FROM needed";
                    $dash_requests_query_run = mysqli_query($conn, $dash_requests_query);

                    if ($requests_total = mysqli_num_rows($dash_requests_query_run)) {
                        echo '<h4 class="mb-0">' . $requests_total . '</h4>';
                    } else {
                        echo '<h4 class="mb-0">No Data</h4>';
                    }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Admins
                    <?php
                    $dash_users_query = "SELECT * FROM users Where role_as='1'";
                    $dash_users_query_run = mysqli_query($conn, $dash_users_query);

                    if ($users_total = mysqli_num_rows($dash_users_query_run)) {
                        echo '<h4 class="mb-0">' . $users_total . '</h4>';
                    } else {
                        echo '<h4 class="mb-0">No Data</h4>';
                    }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">O +ve Blood group donors
                    <?php
                    $dash_donors_query = "SELECT * FROM donors where blood_group='O+ve'";
                    $dash_donors_query_run = mysqli_query($conn, $dash_donors_query);

                    if ($donors_total = mysqli_num_rows($dash_donors_query_run)) {
                        echo '<h4 class="mb-0">' . $donors_total . '</h4>';
                    } else {
                        echo '<h4 class="mb-0">No Data</h4>';
                    }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">AB +ve Blood group donors
                    <?php
                    $dash_donors_query = "SELECT * FROM donors where blood_group='AB+ve'";
                    $dash_donors_query_run = mysqli_query($conn, $dash_donors_query);

                    if ($donors_total = mysqli_num_rows($dash_donors_query_run)) {
                        echo '<h4 class="mb-0">' . $donors_total . '</h4>';
                    } else {
                        echo '<h4 class="mb-0">No Data</h4>';
                    }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">A +ve Blood group donors
                    <?php
                    $dash_donors_query = "SELECT * FROM donors where blood_group='A+ve'";
                    $dash_donors_query_run = mysqli_query($conn, $dash_donors_query);

                    if ($donors_total = mysqli_num_rows($dash_donors_query_run)) {
                        echo '<h4 class="mb-0">' . $donors_total . '</h4>';
                    } else {
                        echo '<h4 class="mb-0">No Data</h4>';
                    }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">B +ve Blood group donors
                    <?php
                    $dash_donors_query = "SELECT * FROM donors where blood_group='B+ve'";
                    $dash_donors_query_run = mysqli_query($conn, $dash_donors_query);

                    if ($donors_total = mysqli_num_rows($dash_donors_query_run)) {
                        echo '<h4 class="mb-0">' . $donors_total . '</h4>';
                    } else {
                        echo '<h4 class="mb-0">No Data</h4>';
                    }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>