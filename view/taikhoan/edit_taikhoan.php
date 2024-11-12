<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            
            <h1 class="boxtitle">CẬP NHẬT TÀI KHOẢN</h1>
            <div class="row boxcontent formtaikhoan">
                <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                        $tk = loadone($_SESSION['user']['user']);
                    }
                ?>
                 <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb10">
                        Email
                        <input type="text" name="email" value="<?=$tk['email']?>" required>
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập
                        <input type="text" name="user" value="<?=$tk['user']?>" required>
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                        <input type="password" name="pass" value="<?=$tk['pass']?>" required minlength="8"  oninvalid="this.setCustomValidity('Mật khẩu phải có ít nhất 8 ký tự')" 
                        oninput="this.setCustomValidity('')">
                    </div>
                    <div class="row mb10">
                        Địa chỉ
                        <input type="text" name="address" value="<?=$tk['address']?>">
                    </div>
                    
                    <div class="row mb10">
                        Số điện thoại
                        <input type="text" name="tel" value="<?=$tk['tel']?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capnhat" style="background-color:yellow">
                        <input type="reset" value="Nhập lại" style="background-color:red; color: white">
                    </div>
                </form>
                <h2 class="thongbao">
                <?php
                    if (isset($_SESSION['thongbao']) && ($_SESSION['thongbao'] != "")) {
                        echo $_SESSION['thongbao'];
                        unset($_SESSION['thongbao']); // Xóa thông báo sau khi hiển thị
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