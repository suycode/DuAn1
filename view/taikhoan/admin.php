<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            
            <h1 class="boxtitle">ĐĂNG NHẬP ADMIN</h1>
            <div class="row boxcontent formtaikhoan">
                 <form action="index.php?act=admin" method="post">
                    <div class="row mb10">
                        Tên đăng nhập
                        <input type="text" name="user" required>
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                        <input type="password" name="pass" required>
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Đăng nhập" name="dangnhap" style="background-color:green; color:white">
                        <!-- <input style="background-color:green; color:white" type="submit" value="Đăng ký" name="dangky">
                        <input style="background-color:red; color: white" type="reset" value="Nhập lại"> -->
                    </div>
                    <!-- <li>
                        <a style="color:red" href="index.php?act=quenmk">Quên mật khẩu</a>
                    </li>
                    <li>
                        <a style="color:purple" href="index.php?act=dk_admin">Đăng ký Admin</a>
                    </li> -->
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