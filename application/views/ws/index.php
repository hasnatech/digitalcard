<div class="container-custom mt-5">

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-right mb-3">
                        <a href="<?php echo base_url('WS/new'); ?>" class="btn btn-primary">New Site</a>
                    </div>
                    <h4 class="card-title">Websites</h4>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Company Name</th>
                                    <th>Email</th>
                                    <th>Link</th>
                                    <!-- <th>Table heading</th> -->
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($this->data); $i++) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $this->data[$i]->id ?></th>
                                        <td><?php echo $this->data[$i]->company ?></td>
                                        <td><?php echo $this->data[$i]->email ?></td>
                                        <td><a href="<?= base_url("business/c/" . $this->data[$i]->url . '/' . $this->data[$i]->id) ?>"><?= $this->data[$i]->url ?></a></td>
                                        <!-- <td>Table cell</td> -->
                                        <td><?php echo $this->data[$i]->id ?></td>
                                        <td>
                                            <a href="<?php echo base_url('WS/edit/'. $this->data[$i]->id); ?>" class="btn btn-info">Edit</a>
                                            <!-- <button class="btn btn-warning">Pay</button> -->
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