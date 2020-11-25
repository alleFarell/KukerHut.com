<!--- Dafa Punya --->
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <?php foreach ($iklan as $i) : ?>
            <div class="slider-item" style="background-image: url('<?= base_url('assets/images/fotoIklan/') . $i['foto_iklan'] ?>');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-bottom" data-scrollax-parent="true">
                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2"><?= $i['nama_iklan']; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!--- Dafa Punya --->

<!-- Categories Start -->
<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Free Shipping</h3>
                        <span>On order around VNI3</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Always Fresh</h3>
                        <span>Product well package</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Superior Quality</h3>
                        <span>Quality Products</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Support</h3>
                        <span>Well Services</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories End -->

<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last align-items-stretch d-flex">
                        <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(<?= base_url('assets/images/kategori.jpg') ?>);">
                            <div class="text text-center">
                                <h2>Cake and Cookies</h2>
                                <p>Choose the best Joy</p>
                                <p><a href="<?= base_url('kukerhut/products') ?>" class="btn btn-primary">Shop now</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(<?= base_url('assets/images/kategori-1.jpg') ?>);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="<?= base_url(); ?>Kukerhut/category/1">Cake</a></h2>
                            </div>
                        </div>
                        <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(<?= base_url('assets/images/kategori-2.jpg') ?> );">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="<?= base_url(); ?>Kukerhut/category/2">Cookies</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(<?= base_url('assets/images/kategori-3.jpg') ?>);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="<?= base_url(); ?>Kukerhut/category/3">Dessert</a></h2>
                    </div>
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(<?= base_url('assets/images/kategori-4.jpg') ?>);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="<?= base_url(); ?>Kukerhut/category/4">Daily Cake</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Featured Products</span>
                <h2 class="mb-4">Our Products</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($produk as $p) : ?>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <button type="button" data-toggle="modal" data-target="#modalDetails<?php echo $p['id_produk'] ?>" style="background: none;border: none;float: left;">
                        <div class="product">
                            <a class="img-prod" style="height: 240px;width: auto;"><img class="img-fluid" src="<?= base_url('assets/images/fotoProduk/') . $p['foto_produk'] ?>" alt="Colorlib Template">
                                <!-- <span class="status">Serba 25rb</span> -->
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#"><?= $p['nama_produk']; ?></a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="mr-2 price-dc"></span><span class="price-sale"><?= $p['harga_produk']; ?></span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a button type="button" data-toggle="modal" data-target="#modalDetails<?php echo $p['id_produk'] ?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span class="iconify" data-icon="logos:whatsapp" data-inline="false"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<hr>

<?php foreach ($produk as $d) : ?>
    <div class="modal fade" id="modalDetails<?= $d['id_produk'] ?>" tabindex="-1" aria-labelledby="modalDetailsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width: auto;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-responsive d-flex justify-content-center" style="height: 250px;width: auto;">
                        <img class="card-img-top" src="<?= base_url('assets/images/fotoProduk/' . $d['foto_produk']) ?>" style="height: 300px;width: auto;">
                    </div>
                    <hr style="width: 50%;background-color:#942E90 !important;">
                    <div class="card-body">
                        <div class="d-flex bd-highlight">
                            <div class="p-2 bd-highlight w-50">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: #942E90 !important;font-weight: 500;font-size: 25px;"><?= $d['nama_produk'] ?>
                                </h5>
                                <p class="badge badge-success">
                                    <?= $this->db->get_where('kategori', ['id_kategori' => $d['id_kategori']])->row('nama_kategori'); ?>
                                </p>
                                <!-- <div class="desc" style="width: 50%;"> -->
                                <p><?= $d['deskripsi_produk'] ?></p>
                                <!-- </div> -->
                            </div>
                            <div class="ml-auto bd-highlight">
                                <h5 class="mb-0 p-0 mt-0" style="font-weight: bold;color: #942E90 !important;font-size: 25px;">
                                    <span class="mr-2 price-dc text-success"><?= $d['harga_produk']; ?></span>
                                    <br>
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=628128291433&text=Halo%20Saya%20Mau%20Beli%20<?= $d['nama_produk'] ?>,%20Apakah%20Ready?	" type="button" class="btn btn-outline-info mb-0"> <img src="<?= base_url('assets/images/wa.png') ?>" style="width: 20px;height: auto;"> Contact Us</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>