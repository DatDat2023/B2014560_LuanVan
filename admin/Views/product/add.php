<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">THÊM SẢN PHẨM</h5>
                </div>
                <i style="color:red;">
                    <?php
                        echo $message??"";
                    ?>
                </i>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label style="color:black; font-family:times; font-size:16px;">TÊN SẢN PHẨM</label>
                                    <input type="text" class="form-control" placeholder="Tên sản phẩm" value="<?php echo $productName??"";?>" name="name">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label style="color:black; font-family:times; font-size:16px;">Giá</label>
                                    <input type="number" class="form-control" placeholder="Giá" name="price" value="<?php echo $price??"";?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"style="color:black; font-family:times; font-size:16px;">DANH MỤC</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="category">
                                        <?php foreach($allCategory as $value){ ?>
                                        <option value="<?php echo $value['ID']; ?>"><?php echo $value['Name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="exampleFormControlSelect1" style="color:black; font-family:times; font-size:16px;">IMAGE</label>
                                <div class="custom-file" id="customFile" lang="es">
                                        <input type="file" name="fileUpload" class="custom-file-input" id="exampleInputFile" aria-describedby="fileHelp" value="">
                                        <label class="custom-file-label" for="exampleInputFile">
                                        Select file...
                                        </label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-danger" style="background-color:blue">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelector('.custom-file-input').addEventListener('change',function(e){
        var fileName = document.getElementById("exampleInputFile").files[0].name;
        var nextSibling = e.target.nextElementSibling
        nextSibling.innerText = fileName
    });
</script>