<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            
            <h1 class="boxtitle">ĐĂNG KÝ TÀI KHOẢN</h1>
            <div class="row boxcontent formtaikhoan">
                 <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        Email
                        <input type="text" name="email" required>
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập
                        <input type="text" name="user" required>
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                        <input type="password" name="pass" required minlength="8"  oninvalid="this.setCustomValidity('Mật khẩu phải có ít nhất 8 ký tự')" 
                        oninput="this.setCustomValidity('')">
                    </div>
                    <div class="row mb10">
                        <input style="background-color:green; color:white" type="submit" value="Đăng ký" name="dangky">
                        <input style="background-color:red; color: white" type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?> 
                </h2>
            </div>
        </div>
       
        
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>