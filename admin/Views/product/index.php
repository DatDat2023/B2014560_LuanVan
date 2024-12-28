<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="color:black; font-family:times; font-size:20px;">DANH SÁCH SẢN PHẨM SÁCH</h4>
                    <a href="./sanpham/them">
                        <i class="now-ui-icons ui-1_simple-add"></i> THÊM SÁCH
                    </a>
                    <br/>
                    <i style="color: red;">
                        <?php echo $message??""; ?>
                    </i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" style="overflow: hidden; color:black; font-family:times; font-size:14px;">
                            <thead class=" text-primary">
                                <tr>
                                    <th  style="color:black">
                                        STT
                                    </th>
                                    <th  style="color:black">
                                      TÊN SÁCH
                                    </th>
                                    <th  style="color:black">
                                    GIÁ
                                    </th>
                                    <th  style="color:black">
                                        DANH MỤC
                                    <th  style="color:black">
                                    IMAGE
                                    </th>
                                    <th  style="color:black">
                                     HIỂN THỊ 
                                    </th>
                                    <th  style="color:black">
                                     CHỈNH SỬA
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($allProducts as $key=>$value) {?>
                                <tr>
                                    <td>
                                        <?php echo $key+1; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['Name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['Price']; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['Category']; ?>
                                    </td>
                                    <td>
                                        <img width="50px;" src='<?php echo $value['Image']; ?>'/>
                                    </td>
                                    <td>
                                        <?php echo $value['IsShow']==0?"Có":"Không"; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group dropleft" style="">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:blue">
                                                TÙY CHỌN
                                            </button>
                                            <div class="dropdown-menu">
                                            <?php if($_SESSION['user']['Role'] == 1){ ?>
                                                <!-- Dropdown menu links -->
                                                <?php
                                                    if($value['IsShow']==0){
                                                ?>
                                                <a href="./sanpham/an/<?php echo $value['ID']; ?>" style="color:black;"><button class="dropdown-item" href="#" type="button">Ẩn</button></a>
                                                <?php
                                                    }else{
                                                ?>
                                                <a href="./sanpham/hien/<?php echo $value['ID']; ?>" style="color:black;"><button class="dropdown-item" href="#" type="button">Hiện</button></a>
                                                <?php } ?>
                                                <a href="./sanpham/sua/<?php echo $value['ID']; ?>" style="color:black;"><button class="dropdown-item" href="#" type="button">Sửa</button></a>
                                                <a href="./sanpham/xoa/<?php echo $value['ID']; ?>" style="color:black;"><button class="dropdown-item" href="#" type="button">Xóa</button></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>                                                                                                         
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>