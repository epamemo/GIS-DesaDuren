<?php

function connect(){
    $conn = mysqli_connect('localhost', 'root', '', 'spk_penyebaranblt');
    if ($conn == false) {
        echo mysqli_connect_error();
        die();
    } else {
        return $conn;
    }
}

function query($sql){
    $conn = connect();
    return mysqli_query($conn, $sql);
}


//Function Create
function createKartuKeluarga(){
    $process_ins_kk = [
        'kk' => $_POST['kartu-keluarga'],
        'ktp' => $_POST['ktp'],
        'nama' => $_POST['nama-lengkap'],
    ];

    $sql = "insert into tbkartukeluarga(idkk, id_penduduk) values('" . $process_ins_kk['kk'] . "','" . $process_ins_kk['ktp'] . "')";
    $sql2 = "insert into tbpenduduk(id_penduduk,nama,idkk) values('" . $process_ins_kk['ktp'] . "','" . $process_ins_kk['nama'] . "','" . $process_ins_kk['kk'] . "')";
    $process_ins_kk = query($sql2);
    $process_ins_kk = query($sql);
    return $process_ins_kk;
}

//Function Read
function readKartuKeluarga(){
    $sql = "select tbkartukeluarga.idkk, tbkartukeluarga.id_penduduk, tbpenduduk.nama  from tbkartukeluarga INNER JOIN tbpenduduk ON tbkartukeluarga.id_penduduk = tbpenduduk.id_penduduk";
    $data = query($sql);
    return $data;
}

function readKartuKeluarga_all($id){
    $sql = "select *from tbkartukeluarga where idkk='$id'";
    $data = query($sql);
    return $data;
}

function readKartuKeluarga_detail($id){
    $sql = "select * from tbpenduduk where idkk='$id'";
    $data = query($sql);
    return $data;
}

function check_KartuKeluarga($id){

}

function chec2k_KartuKeluarga($id){

}

//Function Update

//Function Delete

?>