<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Requests</h4>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Request
                        <a href="view-requests.php" class="btn btn-danger float-end">back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="update-request.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Patient Name</label>
                                <input type="text" name="patient_name" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Blood Group</label>
                                <input type="text" name="required_blood_group" class="form-control">
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
                                <button type="submit" name="add_request" class="btn btn-primary">Add Request</button>
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