<?php 
    session_start();
    include "connect.php";
    $info=@$_SESSION['info'];
    if(count($info)>0){
        $lama_pinjam=5;
        $tgl_harus_kembali=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_pinjam),date('Y')));
        mysqli_query($conn,"insert into guywhoApply (id_user,starting_time,deadline) value('".$_SESSION['id_user']."','".date('Y-m-d')."','".$tgl_harus_kembali."')");
         $id=mysqli_insert_id($conn);
        foreach ($info as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into jobthatgotApplied (id_apply,id_job,gaji) value('".$id."','".$val_produk['id_job']."','".$val_produk['gaji']."')");
        }
        unset($_SESSION['info']);
        echo '<script>alert("ndang dimarekno");location.href="tasks.php"</script>';
    }
?>
