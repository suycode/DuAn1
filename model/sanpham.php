<?php

function insert_sanpham($tensp, $gia, $hinh, $mota,$iddm){
    $sql="INSERT INTO sanpham(name,gia,hinh,mota,iddm) VALUES('$tensp','$gia','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="DELETE FROM sanpham WHERE id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by view desc limit 0,10";
    $listsp=pdo_query($sql);
    return $listsp;
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
    $listsp=pdo_query($sql);
    return $listsp;
}
function loadall_sanpham($kyw="",$iddm=0){
    $sql= "SELECT * FROM sanpham where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm = ".$iddm;
    }
    $sql.=" order by id desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql = "SELECT * FROM danhmuc WHERE id=".$iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return"";
    }
}
function loadone_sanpham($id){
    $sql = "SELECT * FROM sanpham WHERE id=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id,$iddm){
    $sql = "SELECT * FROM sanpham WHERE iddm = ".$iddm." AND id <> ".$id;
    $sp = pdo_query($sql);
    return $sp;
}
function update_sanpham($id,$iddm,$tensp,$gia,$mota,$hinh){
    if($hinh != "")
        $sql="UPDATE sanpham set iddm= '".$iddm."',name= '".$tensp."',gia= '".$gia."',mota= '".$mota."', hinh= '".$hinh."' where id=".$id;
    else
        $sql="UPDATE sanpham set iddm= '".$iddm."',name= '".$tensp."',gia= '".$gia."',mota= '".$mota."' where id=".$id;
    pdo_execute($sql);
}

?>