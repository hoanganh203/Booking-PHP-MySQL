<section>
                <h2>Thêm Danh Mục</h2>
                <form action="index.php?act=adddm"method="POST" enctype="multipart/form-data">
              <div>
                <p>MÃ Danh Mục</p>
                <input  type="text" name="maloai" disabled>
                <p>TÊN Danh Mục</p>
                <input  type="text" name="tenloai"> 
                 <button class="normal btn" type="submit" name="them">Thêm Mới</button>  
                 <?php 
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
              ?>  
              </div>
              
                </form>

            </section>
        </div>
    </body>

<style>
  form{
    margin: 0px 566px;
    width: 100%;
  }
</style>