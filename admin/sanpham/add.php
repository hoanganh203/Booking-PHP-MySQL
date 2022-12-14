
        <div class="Danhmuc">
            <div class="Danhmuc__title  goldal">
                <h1>Thêm mới sản phẩm</h1>
            </div>
            <p class="err" style='color: red;'><?php if(!empty($err)) echo $err?></p>
            <div class="Danhmuc__content">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="Danhmuc__content-ml  mb">
                        Danh mục xe <br>
                        <select name="iddm" value="<?php if(!empty($_POST['iddm'])) echo $_POST['iddm'] ?>">
                        <option value="">Chọn danh mục</option>
                            <?php
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value='.$id.'>'.$name1.'</option>';
                            }
                            ?>

                            <option value=""></option>
                        </select>
                    </div>


                    <div class="Danhmuc__content-tl  mb  input--item">
                        Tên xe <br>
                        <input type="text" name="tensp" id="" value="<?php if(!empty($_POST['tensp'])) echo $_POST['tensp'] ?>">
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item" >
                        Giá <br>
                        <input type="text" name="giasp" id="" value="<?php if(!empty($_POST['giasp'])) echo $_POST['giasp'] ?>">
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Hình ảnh1 <br>
                        <input type="file" name="hinhsp" value="<?php if(!empty($_POST['img'])) echo $_POST['img'] ?>">
                    </div>

                    <div class="Danhmuc__content-tl  mb  input--item">
                        Hình ảnh2 <br>
                        <input type="file" name="hinhphu" value="<?php if(!empty($_POST['imgphu'])) echo $_POST['imgphu'] ?>">
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Mô tả <br>
                        <textarea name="mota"  cols="30" rows="10" value="<?php if(!empty($_POST['mota'])) echo $_POST['mota'] ?>"></textarea>
                    </div>
                    <div class="Danhmuc__content1">
                        <button type="submit" name="themmoi">
                            Thêm mới
                        </button>
                     <br>
                        <button type="reset">
                            Nhập lại
                        </button>
                        <br>
                        <a href="index.php?act=listsp">
                        <button type="button">
                           Danh sách
                        </button></a>
                    </div>

                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;                   
                    ?>


                </form>
            </div>
        </div>

        <style>
  form{
    display: flex;
    margin: 0px 66px;
    width: 100%;
  }

  button{
    cursor: pointer;
  }
</style>