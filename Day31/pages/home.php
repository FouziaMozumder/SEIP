<?php include 'includes/header.php';?>

<section class="py-5 ">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-10 mx-auto">
                <div class="card card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                        </tr>
                        <tr>
                            <td><?php echo $name;?></td>
                            <td><img src="<?php echo $image;?>" alt=""/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header  text-center bg-success ">
                        <h3>Image Upload</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" value="image" class="form-control-file"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-outline-success"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php';?>
