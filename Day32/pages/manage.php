<?php include 'includes/header.php';?>

<section class="py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card card-header text-center">
                        <h3>All Student Information Here</h3>
                    </div>
                    <div class="card card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($students as $student){?>
                                <tr>
                                    <td><?php echo $student['name'];?></td>
                                    <td><?php echo $student['email'];?></td>
                                    <td><?php echo $student['mobile'];?></td>
                                    <td>
                                        <img src="<?php echo $student['image'];?>" alt="" height="100"/>
                                    </td>

                                    <td>1</td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php';?>
