<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title" style="color:black; font-family:times; font-size:20px;">SỬA DANH MỤC</h5>
                    <p style="color:red;">
                        <?php echo $message??""; ?>
                    </p>
                </div>
                <i style="color:red;">
                </i>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label style="color:black; font-family:times; font-size:20px;">Tên danh mục</label>
                                    <input type="text" class="form-control" placeholder="Tên danh mục" value="<?php echo $nameCategory; ?>" name="nameCategory">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label style="color:black; font-family:times; font-size:20px;">URL</label>
                                    <input type="text" class="form-control" placeholder="URL" name="urlCategory" value="<?php echo $urlCategory; ?>">
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-danger"style="background-color:blue">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>