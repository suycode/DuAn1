<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            
            <h1 class="boxtitle">QUÊN MẬT KHẨU</h1>
            <div class="row boxcontent formtaikhoan">
                 <form action="index.php?act=quenmk" method="post">
                    <div class="row mb10">
                        Email
                        <input type="text" name="email" required>
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Gửi" name="guiemail" style="background-color:yellow">
                        <input type="reset" value="Nhập lại" style="background-color:red; color: white">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>
       
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>