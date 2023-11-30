<div class="card card-solid mt-2 bg-light">
    <div class="card-body pb-0">
        <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-info">
                    <h2 class="widget-user-username">
                        <?= $this->session->userdata('nama_pelanggan') ?>
                    </h2>

                </div>
                <div class="widget-user-image">
                    <img class="img-circle elevation-2"
                        src="<?= base_url('assets/foto/' . $this->session->userdata('foto')) ?>" alt="User Avatar">
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Nama </label>
                        <input name="nama_pelanggan" class="form-control"
                            value="<?= $this->session->userdata('nama_pelanggan') ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Email </label>
                        <input name="email" class="form-control" value="<?= $this->session->userdata('email') ?>"
                            disabled>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group"><a href="<?= base_url('pelanggan/edit') ?>"
                            class="btn btn-primary btn-sm col-12">Edit</a>
                    </div>
                </div><br>
            </div>
            <!-- /.widget-user -->
        </div>
        <!-- /.col -->
    </div>
</div>
</div>