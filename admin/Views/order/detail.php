<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="card">
        <div class="card-header">
            <h5 class="card-category" style="font-family:times; color:BLACK; font-size:25px">Chi tiết hóa đơn</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th style="font-family:times; color:blue; font-size:25px">
                                STT
                            </th>
                            <th style="font-family:times; color:blue; font-size:25px">
                               TÊN SÁCH
                            </th>
                            <th style="font-family:times; color:blue; font-size:25px">
                                SỐ LƯỢNG
                            </th>                       
                            <th style="font-family:times; color:blue; font-size:25px">
                               GIÁ
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sumMoney = 0;
                        foreach ($detailBill as $key => $value) {
                            $money = $value['Price']- $value['Price']*($value['Percent']/100);
                            $money = $money *$value['Number'];
                            $sumMoney = $sumMoney + $money;
                        ?>
                            <tr>
                                <td>
                                    <?php echo $key + 1; ?>
                                </td>
                                <td style="font-family:times; color:bLACK; font-size:18px">
                                    <?php echo $value['Name']; ?>
                                </td>
                                <td style="font-family:times; color:black; font-size:18px">
                                    <?php echo $value['Number']; ?>
                                </td>
                                <td style="font-family:times; color:red; font-size:18px">
                                    <?php echo $money; ?> (Giảm giá: <?php echo $value['Percent']; ?>%)
                                </td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td style=" text-align: right; font-family:times; font-size:20px; color:black ">Tổng cộng:</td>
                            <td style="font-family:times; color:red; font-size:25px"><?php echo $sumMoney; ?>VNĐ</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>