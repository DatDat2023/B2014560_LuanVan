<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="font-family:times;">DANH SÁCH DANH MỤC</h3>
                    <a href="./danhmuc/them">
                        <i class="now-ui-icons ui-1_simple-add" ></i  style="font-family:times; color:black;"> THÊM DANH MỤC SÁCH
                    </a><br>
                    <i style="color: black;">
                    <?php echo $message??""; ?>
                    </i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" style="overflow: hidden; font-family:times; color:black">
                            <thead class=" text-primary">
                                <tr>
                                    <th style="color:black">
                                        STT
                                    </th>
                                    <th  style="color:black"> 
                                       TÊN DANH MỤC
                                    </th>
                                    <th  style="color:black">
                                        URL
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
                            <?php
                                foreach($allCategory as $key => $value){
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $key + 1; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['Name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['Url']; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['IsShow']==0?"Có":"Không"; ?>
                                    </td>
                                    <td>
                                    <div class="btn-group dropleft" style="position: static;">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family:times; background-color:blue;">
                                                TÙY CHỌN
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <?php if($value['IsShow']==0){ ?>
                                                <a style="color: black;" href="./danhmuc/an/<?php echo $value['ID']; ?>"><button class="dropdown-item" type="button">Ẩn</button></a>
                                                <?php }else{ ?>
                                                <a style="color: black;" href="./danhmuc/hien/<?php echo $value['ID']; ?>"><button class="dropdown-item" type="button">Hiện</button></a>
                                                <?php } ?>
                                                <a style="color: black;" href="./danhmuc/sua/<?php echo $value['ID']; ?>"><button class="dropdown-item" type="button">Sửa</button></a>
                                                <a style="color: black;" href="./danhmuc/xoa/<?php echo $value['ID']; ?>"><button class="dropdown-item" type="button">Xóa</button></a>
    
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