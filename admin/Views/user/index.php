<div class="panel-header panel-header-sm">
      </div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"style="color:black; font-family:times; font-size:20px;">DANH SÁCH TÀI KHOẢN HIỆN TẠI</h4>
                    <?php if($_SESSION['user']['Role']==1){ ?>
                    <a href="./user/them">
                        <i class="now-ui-icons ui-1_simple-add"></i style="color:black; font-family:times; font-size:20px;"> THÊM
                    </a><br/>
                    <?php } ?>
                    <i style="color: red;">
                        <?php echo $message??""; ?>
                    </i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" style="overflow: hidden; color:black; font-family:times; font-size:15px;">
                            <thead class=" text-primary">
                                <tr>
                                    <th  style="color:black">
                                        STT
                                    </th>
                                    <th  style="color:black">
                                        HỌ TÊN
                                    </th>
                                    <th  style="color:black">
                                        TÊN TÀI KHOẢN
                                    </th>
                                    <th  style="color:black">
                                      CHỨC VỤ
                                    </th>
                                    <th  style="color:black">
                                    TÙY CHỈNH
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($allUser as $key=>$value) {?>
                                <tr>
                                    <td>
                                        <?php echo $key+1; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['Name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['UserName']; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['RoleName']; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group dropleft" style="">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:blue">
                                                Chức năng
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <?php if($_SESSION['user']['Role']==1){ ?>
                                                <a href="./user/sua/<?php echo $value['ID']; ?>" style="color: black;"><button class="dropdown-item"type="button">Sửa</button></a>

                                                <a href="./user/xoa/<?php echo $value['ID']; ?>" style="color: black;"><button class="dropdown-item" href="#" type="button">Xóa</button></a>
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