<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Requests</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Requests</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <?php include('message.php') ?>
            <div class="card">
                <div class="card-header">
                    <h4>Requests
                        <a href="add-request.php" class="btn btn-primary float-end">Add Request</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Patient Name</th>
                                <th>Blood Group</th>
                                <th>Contact</th>
                                <th>City</th>
                                <!-- <th>Email</th> -->
                                <!-- <th>Contact</th> -->
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM needed";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $row) {
                            ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['patient_name']; ?></td>
                                        <td><?= $row['required_blood_group']; ?></td>
                                        <td><?= $row['contact']; ?></td>
                                        <td><?= $row['city']; ?></td>
                                        <td><a href="edit-requests.php?id=<?= $row['id']; ?>" class="btn btn-success">Edit</a></td>
                                        <td>
                                            <form action="update-request.php" method="post">
                                                <button type="submit" name="delete_request" value="<?= $row['id']; ?>" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <td colspan="6">No Record Found</td>
                            <?php
                            }
                            ?>
                            <!-- <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('includes/footer.php');
    include('includes/scripts.php');
    ?>