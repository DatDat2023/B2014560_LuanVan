<div class="container">

    <div class="checkout__form">
        <h4 style="font-family:times; color:#0A0A2A">--CHI TIẾT ĐƠN HÀNG--</h4>
        <p style="color:red;">
            <?php echo $message ?? ""; ?>
        </p>
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p style="font-family:times; color:#0A0A2A">Họ và tên<span>*</span></p>
                                <input name="name" type="text" placeholder="Họ và tên">
                            </div>
                        </div>
                    </div>
                    <div class="checkout__input">
                        <p style="font-family:times; color:#0A0A2A">Địa chỉ<span>*</span></p>
                        <input type="text" name="address" placeholder="Địa chỉ" class="checkout__input__add">
                    </div>
                    <input name="idVoucher" type="hidden" value="<?php echo $_COOKIE['voucherCode'] ?? "0"; ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p style="font-family:times; color:#0A0A2A">Số điện thoại<span>*</span></p>
                                <input name="numberPhone" type="number" placeholder="Số điện thoại">
                            </div>
                                <p style="font-family:times; color:#0A0A2A">Chi nhánh <span>*</span></p>
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="IDStore">
                                        <?php foreach($allStore as $value){ ?>
                                            <option selected="selected" value="<?php echo $value['ID']; ?>"><?php echo "{$value['StoreName']} ({$value['Address']})"; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="checkout__order" style="font-size:25px; font-family:times">Đơn hàng của bạn:
                        <div class="checkout__order__products">Sản phẩm <span>tổng</span></div>
                        <ul>
                            <?php foreach ($allProductInCart as $value) { ?>
                                <li style="font-style:italic"><?php echo $value['Name']; ?> <span><?php echo $value['Price'] * $this->getCountCart($value['ID']); ?>VNĐ</span></li>
                            <?php } ?>
                        </ul>
                        <div class="checkout__order__subtotal">Tổng tiền <span><?php echo $_COOKIE['MoneySubTotal']; ?></span></div>
                        <div class="checkout__order__total">Giảm giá <span><?php echo $_COOKIE['voucherCodePercent'] ?? "0"; ?>%</span></div>
                        <div class="checkout__order__total">Tổng phải thanh toán <span><?php echo $_COOKIE['MoneyTotal']; ?>VNĐ</span></div>
                        <button type="submit" class="site-btn" style="background-color:#0A0A2A">Đặt Hàng</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>