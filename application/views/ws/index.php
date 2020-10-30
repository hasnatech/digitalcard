<div class="container-custom">

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <a href="<?php echo base_url('ws/new'); ?>" class="btn btn-primary">New Card</a>
                    </div>
                    <h4 class="card-title">Cards</h4>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Company Name</th>
                                    <th>Email</th>
                                    <th>Contact Name</th>
                                    <!-- <th>Table heading</th> -->
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 5; $i++) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $i ?></th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <!-- <td>Table cell</td> -->
                                        <td>Table cell</td>
                                        <td>
                                            <button class="btn btn-info">Edit</button>
                                            <button class="btn btn-warning">Pay</button>
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
</div>