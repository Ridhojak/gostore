<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url() ?>assets/slider/slider1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url() ?>assets/slider/slider2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url() ?>assets/slider/slider3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url() ?>assets/slider/slider4.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<marquee behavior="scroll" direction="left" class="btn btn-primary mt-2">selamat datang ditoko <b>GO STORE</b>
    silakan
    berbelanja, dijamin barang original dan berkualitas yah....
</marquee>
<div class="card card-solid mt-2 bg-info">
    <div class="card-body pb-0">
        <div class="row d-flex align-items-strtch">
            <?php foreach ($barang as $value): ?>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            <h2 class="lead"><b>
                                    <?= $value->nama_brg ?>
                                </b></h2>
                            <p class="text-muted text-sm"><b>Kategori : </b>
                                <?= $value->kategori ?>
                            </p>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-12  text-center">

                                    <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="user-avatar"
                                        class="img-fluid" width="180px" height="150px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-left">
                                        <span class="bagde bg-primary btn-sm">Rp.
                                            <?= number_format($value->harga, 0, ',', '.') ?>,-
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-aye">v</i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i>add
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>