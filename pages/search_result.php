<?php include 'header.php'?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card-header">All User Info</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" name="search"/>
                                <div class="input-group-append">
                                    <button type="submit" name="search_btn" class="btn btn-success">
                                        <i class="fa fa-search"> Search</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <?php if (isset($result['name'])) { ?>
                        <table class="table table-bordered table-hover">
                            <thead class="bg-info">
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $result['name']?></td>
                                    <td><?php echo $result['mobile']?></td>
                                    <td><?php echo $result['email']?></td>
                                    <td><?php echo $result['address']?></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php } else { ?>
                        <h1 class="text-danger text-center">No Result Found</h1>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php'?>