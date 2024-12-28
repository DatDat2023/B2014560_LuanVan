<div class="panel-header panel-header-sm">
</div>
<div class="card">
    <div class="card-header">
        <h5 class="card-category" style="font-family:times; color:blue; font-size:25px">Doanh thu</h5>
        <h4 class="card-title" style="font-family:times; color:bLACK; font-size:25px"> Doanh thu theo chi nhánh</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                    <tr>
                        <th style="font-family:times; color:black">
                            STT
                        </th>
                        <th  style="font-family:times; color:black" >
                         CHI NHÁNH
                        </th>
                        <th  style="font-family:times; color:black" >
                           ĐỊA CHỈ CHI NHÁNH
                        </th>
                        <th  style="font-family:times; color:black">
                          DOANH THU
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $sumMoneyAll = 0; 
                foreach($revenue as $key => $value){ 
                       $sumMoneyAll = $sumMoneyAll + (int)$value['Sum'];
                ?>
                    <tr>
                        <td>
                            <?php echo $key+1; ?>
                        </td>
                        <td  style="font-family:times; color:blue; font-size:20px">
                           <?php echo $value['StoreName']; ?>
                        </td>
                        <td style="font-family:times; color:blue; font-size:20px">
                            <?php echo $value['Address']; ?>
                        </td>
                        <td style="font-family:times; color:blue; font-size:20px">
                            <?php echo number_format($value['Sum']); ?>
                        </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="font-family:times; color:BLACK; font-size:25px">Tổng cộng:</td>
                    <td style="font-family:times; color:RED; font-size:25px"><?php echo number_format($sumMoneyAll); ?>vnđ</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>