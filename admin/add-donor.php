<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Donors</h4>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Donor
                        <a href="view-donors.php" class="btn btn-danger float-end">back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="update-donor.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Blood Group</label>
                                <input type="text" name="blood_group" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Contact</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">City</label>
                                <input type="txt" name="city" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="add_donor" class="btn btn-primary">Add Donor</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <?php
    include('includes/footer.php');
    include('includes/scripts.php');
    ?>