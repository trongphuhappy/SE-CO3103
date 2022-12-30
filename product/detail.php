<?php
    include_once './../navbar.php';
    include_once './../connect.php';
    $query = "SELECT * FROM product WHERE id =". $_GET['id']; 
    $data = mysqli_query($connect, $query);
    $row = mysqli_fetch_row($data);
?>
    <main>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <img src="<?php echo $row[3]; ?>" class="img-fluid" alt="Ảnh áo thun">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5" style="padding-top: 5%;">
                <div class="container fs-2 "><?php echo $row[1]; ?></div>
                <span class="container org-color"><?php echo $row[2]; ?> đ</span>
                <div class="container d-flex align-items-center">
                    <div class="fs-3" style="margin-right: 1%;">Kích Thước:</div>
                    <div><button type="button" class="btn btn-outline-dark btn-sm">S</button>
                        <button type="button" class="btn btn-outline-dark btn-sm">M</button>
                        <button type="button" class="btn btn-outline-dark btn-sm">L</button>
                        <button type="button" class="btn btn-outline-dark btn-sm">XL</button>
                    </div>
                </div>
                <div class="container row" style="margin-top: 1.5%; margin-bottom: 1.5%;">
                    <div class="col-md-4">
                        <button type="button" class="container btn btn-dark btn-lg">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="container fw-bold">Thông tin sản phẩm
                    <div class="container nor"><span class="fw-bold">Chất liệu</span>: Cotton</div>
                    <div class="container nor"><span class="fw-bold">Xuất xứ</span>: Việt Nam</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="container nor">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                </div>
            </div>
        </div>
    </main>


<?php
    include_once './../footer.php';
    mysqli_close($connect);
?>