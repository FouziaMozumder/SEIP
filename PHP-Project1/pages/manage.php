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
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Stock Amount</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Image</th>

                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($students as $student){?>
                                <tr>
                                    <td><?php echo $student['p_name'];?></td>
                                    <td><?php echo $student['p_price'];?></td>
                                    <td><?php echo $student['s_amount'];?></td>
                                    <td><?php echo $student['c_name'];?></td>
                                    <td><?php echo $student['b_name'];?></td>
                                    <td>
                                        <img src="<?php echo $student['image'];?>" alt="" height="50"/>
                                    </td>
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
