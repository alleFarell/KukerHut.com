<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row">
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                </a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Kukerhut.com</h2>
                    <p>KukerHut adalah usaha rumahan khusus untuk kuliner. Produk khas kami adalah Kue Kering, Brownies, Cake, dan Dessert.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="www.instagram.com/kuker.hut/"><span class="icon-instagram"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/Kuker-Hut-Bakery-532689390522549/"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://wa.me/628128291433"><span class="icon-whatsapp"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Menu</h2>
                    <ul class="list-unstyled">
                        <li><a href="/kukerhut" class="py-2 d-block">Home</a></li>
                        <li><a href="/kukerhut/products" class="py-2 d-block">Products</a></li>
                        <li><a href="/kukerhut/aboutUs" class="py-2 d-block">About Us</a></li>
                        <li><a href="/kukerhut/contact" class="py-2 d-block">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><a href="https://goo.gl/maps/2bucQQCoaAhSxDwL7"><span class="icon icon-map-marker"></span><span class="text">Vila Nusa Indah 3 blok KE7/23, Bojong Kulur, Gunung Putri, Bogor, West Java 16969</span></a></li>
                            <li><a href="tel://+628128291433"><span class="icon icon-phone"></span><span class="text"> +62 812 8291 433</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">opo iki cak</span></a></li>
                            <li class="offset-6"><i class="fa fa-circle" aria-hidden="true" id="show-admin"></i></li>
                            <li class="nav-item d-flex justify-content-center"><a href="<?= base_url('auth') ?>" class="nav-link" id="entry-admin"><i class="fa fa-user-circle" aria-hidden="true"></i>
                                    Entry Admin Page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>.
                    Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/jquery-migrate-3.0.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.easing.1.3.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.waypoints.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.stellar.min.js') ?>"></script>
<script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('assets/js/aos.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.animateNumber.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
<script src="<?= base_url('assets/js/scrollax.min.js') ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
</script>
<script src="<?= base_url('assets/js/google-map.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://kit.fontawesome.com/956e9a5b88.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#entry-admin").hide();
        $("#show-admin").click(function() {
            $("#entry-admin").fadeToggle(500);
        });
    });

    var page = 1;
    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page++;
            loadMoreData(page);
        }
    });

    function loadMoreData(page) {
        $.ajax({
                url: '?page=' + page,
                type: "get",
                beforeSend: function() {
                    $('.ajax-load').show();
                }
            })
            .done(function(data) {
                if (data == " ") {
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('.ajax-load').hide();
                $("#post-data").append(data);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('server not responding...');
            });
    }
</script>
</body>

</html>