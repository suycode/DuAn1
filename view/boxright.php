<div class="row mb">
    <h1 class="boxtitle">TÀI KHOẢN</h1>
    <div class="boxcontent formtaikhoan">
        <?php
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
        ?>
            <h1 style="color: green" class="row mb">XIN CHÀO <?=$user?></h1>
            <div class="row mb">
                
                <li>
                    <a style="color:blue" href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                </li>
                <?php if($role==1){ ?>
                
                <li>
                    <?php }; ?>
                </li>
                <li>
                    <a style="color:purple" href="index.php?act=thoat">Đăng xuất</a>
                </li>
            </div>
        <?php
            } else {
        ?>
        <form action="index.php?act=dangnhap" method="post">
            <div class="row mb10">
                Tên đăng nhập<br>
                <input type="text" name="user" required>
            </div>
            <div class="row mb10">
                Mật khẩu<br>
                <input type="password" name="pass" required minlength="8"  oninvalid="this.setCustomValidity('Mật khẩu phải có ít nhất 8 ký tự')" 
                oninput="this.setCustomValidity('')">
            </div>
            <div class="row mb10">
                <input type="checkbox" name="id" id="">Lưu mật khẩu<br>
            </div>
            <div class="row mb10">
                <input type="submit" value="Đăng nhập" name="dangnhap" style="background-color:green; color:white">
            </div>
        </form>
        <li>
            <a style="color:red" href="index.php?act=quenmk">Quên mật khẩu</a>
        </li>
        <li>
            <a style="color:purple" href="index.php?act=dangky">Đăng ký tài khoản</a>
        </li>
        <li>
            <a href="index.php?act=admin">Admin</a>
        </li>
        <?php }; ?>
    </div>
</div>
<div class="row mb">
    <h1 class="boxtitle" >DANH MỤC</h1>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
                foreach ($dsdm as $dm){
                    extract($dm);
                    $linkdm="index.php?act=sanpham&iddm=".$id;
                    echo '<li>
                            <a href="'.$linkdm.'">'.$name.'</a>
                        </li>';
                    };
            ?>
        </ul>
    </div>
    <div class="boxfooter searbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
    </div>
    <div class="row">
        <h1 style="text-align: center" class="boxtitle">TOP 10 SẢN PHẨM </br> ĐƯỢC YÊU THÍCH</h1>
        <div class="row boxcontent">
            <?php
                foreach ($dstop10 as $sp){
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $img=$img_path.$hinh;
                    echo '<div class="row mb10 top10">
                        <a href="'.$linksp.'">'.$name.'</a>
                    </div>';
                }
            ?>
        </div>  
    </div>                 
</div>