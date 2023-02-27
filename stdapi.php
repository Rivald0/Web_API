<?php
$arr = [
    "Status" => "Succes",
    "Angkatan" => "2022",
    "Nim" => "13322033",
    "Username" => "CPirate",
    "Nama" => "Rivaldo Butarbutar",
    "Age" => "18",
    "Gender" => "Laki-Laki",
    "ProgramStudi" => "D3 Teknologi Komputer",
    "Kelas" => "31TK",
    "NoHp" => "087885490660",

];
header('Content-Type: application/json; charshet=utf-8');
echo json_encode($arr);