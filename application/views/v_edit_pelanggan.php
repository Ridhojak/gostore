<div class="container-fluid">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="card-title m-0">Edit User</h5>
        </div>
        <div class="card-body">
            <?php foreach ($pelanggan as $value): ?>
                <form action="<?php echo base_url() . 'pelanggan/update/' . $value->id_pelanggan ?>" method="post">
                    <div class="for-group">
                        <label for="">nama</label>
                        <input type="hidden" name="id" value="<?= $value->id_pelanggan; ?>" class="form-control">
                        <input type="text" name="nama_pelanggan" class="form-control"
                            value="<?php echo $value->nama_pelanggan ?>">
                    </div>
                    <div class="for-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $value->email ?>">
                    </div>
                    <div class="for-group">
                        <label for="">password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $value->password ?>">
                    </div>
                    <div class="for-group">
                        <label for="">Telepon</label>
                        <input type="text" name="telepon" class="form-control" value="<?php echo $value->password ?>">
                    </div>
                    <div class="for-group">
                        <label for="">alamat</label>
                        <input type="text" name="password" class="form-control" value="<?php echo $value->alamat ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">simpan</button>
                <?php endforeach; ?>
            </form>
        </div>
    </div>
</div>




</div>
<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#gambar_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#review_gambar').change(function () {
        bacaGambar(this);
    });
</script>