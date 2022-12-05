
        <div class="Danhmuc">
            <div class="Danhmuc__title  goldal">
                <h1>Thêm mới sản phẩm</h1>
            </div>

            <div class="Danhmuc__content">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="Danhmuc__content-ml  mb">
                        Danh mục xe <br>
                        <select name="iddm">
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
                        <input type="text" name="tensp" id="">
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Giá <br>
                        <input type="text" name="giasp" id="">
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Hình ảnh1 <br>
                        <input type="file" name="hinhsp">
                    </div>

                    <div class="Danhmuc__content-tl  mb  input--item">
                        Hình ảnh2 <br>
                        <input type="file" name="hinhphu">
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Mô tả <br>
                        <textarea name="mota"  cols="30" rows="10"></textarea>
                    </div>
                    <div class="Danhmuc__content1">
                        <button type="submit" name="themmoi">
                            Thêm mới
                        </button>
                     
                        <button type="reset">
                            Nhập lại
                        </button>
                        
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