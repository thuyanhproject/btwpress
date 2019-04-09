<?php
get_header();
?>
<section>
    <div class="container">
        <!-- productsdetails image -->
        <div class="row ml-0 mt-5">
            <div class="col-xs-12 col-xl-10 ml-0">
                <div class="productsdetails-img-containt row">
                    <!--start-->
                    <div class="productsdetails-slider col-md-9 col-12 row">
                        <div class="slider-nav col-4 col-sm-2">
                            <div>
                                <img src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA.png"/>
                            </div>
                            <div>
                                <img src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA-info.png"/>
                            </div>
                            <div>
                                <img src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA.png"/>
                            </div>
                            <div>
                                <img src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA-info.png"/>
                            </div>
                        </div>
                        <div class="slider-for col-8 col-sm-10 thumbnails">
                            <div>
                                <img src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA.png"/>
                            </div>
                            <div>
                                <img src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA-info.png"/>
                            </div>
                            <div>
                                <img src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA.png"/>
                            </div>
                            <div>
                                <img src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA-info.png"/>
                            </div>
                        </div>
                    </div>
                    <div class="productsdetails-info col">
                        <div>
                            <p class="productsdetails-info-bigtitle">OLIGO EXTRA</p>
                            <p>Injection Solution</p>
                            <hr/>
                            <p>XUẤT SỨ:...</p>
                            <p>THỂ TÍCH: <small> 100 ml</small></p>
                            <p>BROMHEXIN 0,3% <br/><small>Dung dịch tiêm 100ml</small> </p>
                            <p>THÀNH PHẦN:<br/> <small>BromhexinHCL  300mg</small> </p>
                        </div>
                    </div>
                </div>
                <!--end-->
            </div>
        </div>
        <!-- products details -->
        <div class="productsdetails-info-containt">
            <nav class="nav">
                <a class="nav-link" href="#" id="decription" onclick="changePage(this.id)">MÔ TẢ SẢN PHẨM</a>
                <a class="nav-link" href="#" id="note" onclick="changePage(this.id)">LƯU Ý</a>
                <a class="nav-link" href="#" id="contact" onclick="changePage(this.id)">LIÊN HỆ</a>
            </nav>
            <div>
                <div class="productsdetails-decription-containt mb-5" id="decription-containt">
                    <div class="productsdetails-smalltitle-decription">
                        <p><img src="<?php echo get_template_directory_uri()?>/asset/images/foot-print-5.png"/>Mô tả sản phẩm</p>
                    </div>
                    <div class="productsdetails-info-decription">
                        <p>bromhexin 0,3%</p>
                        <p><small>Dung dịch tiêm</small> <small>100ml</small></p>
                    </div>
                    <div class="productsdetails-info-decription">
                        <p>thành phần:</p>
                        <p><small>Bromhexin HCL</small> <small class="ml-3">300mg</small></p>
                        <p><small>Dung môi vừa đủ</small> <small class="ml-3">100ml</small></p>
                    </div>
                    <div class="productsdetails-info-decription">
                        <p>chỉ định điều trị:</p>
                        <p><small>- Long đờm, giảm ho, giãn phế quản, giúp thú dễ thở trong bệnh viêm phổi</small></p>
                        <p><small>- Nên kết hợp với kháng sinh trong trường hợp nhiễm trùng hô hấp để tăng kết quả điều trị</small></p>
                    </div>
                    <div class="productsdetails-info-decription">
                        <p>chống chỉ định:</p>
                        <p><small>Không được phép sử sụng trong trường hợp chăn nuôi bò lấy sữa cho người</small></p>
                    </div>
                    <div class="productsdetails-info-decription">
                        <p>cách dùng và liều lượng:</p>
                        <p><small>Tiêm bắp mỗi ngày 1 lần trong 5 ngày liên tục -Trâu, bò:17ml/100kg thể trọng -Lợn: 7-17ml/100kg thể trọng</small></p>
                        <p><small>Tại một vị trí không tiêm quá: gia súc:20ml, lợn:10ml</small></p>
                    </div>
                    <div class="productsdetails-info-decription">
                        <p>thời gian ngưng sử dụng thuốc:</p>
                        <p><small>28 ngày trước khi giết mổ</small></p>
                    </div>
                    <div class="productsdetails-info-decription">
                        <p>bảo quản:</p>
                        <p><small>Nơi khô ráo, tránh ánh sáng trực tiếp</small></p>
                    </div>
                </div>
                <div class="productsdetails-note-containt mb-5" id="note-containt">
                    <div class="productsdetails-smalltitle-decription">
                        <p><img src="<?php echo get_template_directory_uri()?>/asset/images/foot-print-5.png"/>Lưu ý</p>
                        <p><small>Sản phẩm bảo vệ thực vật công nghệ tiên tiến đã và đang được công ty chúng tôi nghiên cứu và phát triển</small></p>
                    </div>
                </div>
                <div class="productsdetails-contact-containt" id="contact-containt">
                    <div class="productsdetails-note-containt">
                        <div class="productsdetails-smalltitle-decription">
                            <p><img src="<?php echo get_template_directory_uri()?>/asset/images/foot-print-5.png"/>Liên hệ</p>
                        </div>
                        <div class="productsdetails-info-decription mb-5">
                            <p>công ty cổ phần nguyễn hiếu</p>
                            <p><small>Địa chỉ: 69 - Đường Hùng Vương - Phường Thới Bình Quận Ninh Kiều - Thành phố Cần Thơ</small></p>
                            <p><small>Điện thoại: (84-292) 3732 626</small></p>
                            <p><small>Email: nguyenhieujsc@gmail.com</small></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- same productss -->
        <div class="productsdetails-sameproduct-containt newproducts-containt">
            <div class="newproducts-header-containt">
                <h1 class="newproducts-header-title">Sản Phẩm Tương Tự</h1>
                <img class="newproducts-header-footprint1" src="<?php echo get_template_directory_uri()?>/asset/images/foot-print-3.png">
                <img class="newproducts-header-footprint2" src="<?php echo get_template_directory_uri()?>/asset/images/foot-print-4.png">
            </div>
            <div class="newproducts-list productslist-containt card-deck">
                <div class="card newproducts-list-item">
                    <div class="card-title row">
                        <div class="col-6 name-product">Tylosin </div>
                        <div class="col-6 subinfo-product">30% LA </div>
                    </div>
                    <img class="card-img-top productslist-product-img" src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text info-product">Injection Solution</p>
                        <button type="button" class="btn btn-info btn-viewmore">VIEW MORE</button>
                    </div>
                </div>
                <div class="card newproducts-list-item">
                    <div class="card-title row">
                        <div class="col-6 name-product">Tylosin </div>
                        <div class="col-6 subinfo-product">30% LA </div>
                    </div>
                    <img class="card-img-top productslist-product-img" src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text info-product">Injection Solution</p>
                        <button type="button" class="btn btn-info btn-viewmore">VIEW MORE</button>
                    </div>
                </div>
                <div class="card newproducts-list-item">
                    <div class="card-title row">
                        <div class="col-6 name-product">Tylosin </div>
                        <div class="col-6 subinfo-product">30% LA </div>
                    </div>
                    <img class="card-img-top productslist-product-img" src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text info-product">Injection Solution</p>
                        <button type="button" class="btn btn-info btn-viewmore">VIEW MORE</button>
                    </div>
                </div>
                <div class="card newproducts-list-item">
                    <div class="card-title row">
                        <div class="col-6 name-product">Tylosin </div>
                        <div class="col-6 subinfo-product">30% LA </div>
                    </div>
                    <img class="card-img-top productslist-product-img" src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text info-product">Injection Solution</p>
                        <button type="button" class="btn btn-info btn-viewmore">VIEW MORE</button>
                    </div>
                </div>
                <div class="card newproducts-list-item">
                    <div class="card-title row">
                        <div class="col-6 name-product">Tylosin </div>
                        <div class="col-6 subinfo-product">30% LA </div>
                    </div>
                    <img class="card-img-top productslist-product-img" src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text info-product">Injection Solution</p>
                        <button type="button" class="btn btn-info btn-viewmore">VIEW MORE</button>
                    </div>
                </div>
                <div class="card newproducts-list-item">
                    <div class="card-title row">
                        <div class="col-6 name-product">Tylosin </div>
                        <div class="col-6 subinfo-product">30% LA </div>
                    </div>
                    <img class="card-img-top productslist-product-img" src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text info-product">Injection Solution</p>
                        <button type="button" class="btn btn-info btn-viewmore">VIEW MORE</button>
                    </div>
                </div>
                <div class="card newproducts-list-item">
                    <div class="card-title row">
                        <div class="col-6 name-product">Tylosin </div>
                        <div class="col-6 subinfo-product">30% LA </div>
                    </div>
                    <img class="card-img-top productslist-product-img" src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text info-product">Injection Solution</p>
                        <button type="button" class="btn btn-info btn-viewmore">VIEW MORE</button>
                    </div>
                </div>
                <div class="card newproducts-list-item">
                    <div class="card-title row">
                        <div class="col-6 name-product">Tylosin </div>
                        <div class="col-6 subinfo-product">30% LA </div>
                    </div>
                    <img class="card-img-top productslist-product-img" src="<?php echo get_template_directory_uri()?>/asset/images/OLIGO-EXTRA.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text info-product">Injection Solution</p>
                        <button type="button" class="btn btn-info btn-viewmore">VIEW MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    get_footer();
?>
