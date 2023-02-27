<?php
$arr = [
    "13322033" => [
        "Status" => "Succes",
        "Angkatan" => "2022",
        "Nim" => "13322033",
        "Username" => "CPirate",
        "Nama" => "Rivaldo Butarbutar",
        "Age" => "18",
        "Gender" => "Laki-Laki",
        "ProgramStudi" => "D3 Teknologi Komputer",
        "Kelas" => "31TK",
        "email" => "rivaldo2butar@gmail.com",
        "NilaiMatakuliah" => [
            "PABI" => "90",
            "ALSTRUDAT" => "95",
            "ALJALI" => "80",
            "SISOP" => "85",
            "PBD" => "80",
        ]
    ],
    "13322034" => [
        "Status" => "Succes",
        "Angkatan" => "2022",
        "Nim" => "13322034",
        "Username" => "RaFaEl",
        "Nama" => "Rafael Doloksaribu",
        "Age" => "17",
        "Gender" => "Laki-Laki",
        "ProgramStudi" => "D3 Teknologi Komputer",
        "Kelas" => "31TK",
        "email" => "rafaelrv@gmail.com",
        "NilaiMatakuliah" => [
            "PABI" => "80",
            "ALSTRUDAT" => "75",
            "ALJALI" => "80",
            "SISOP" => "75",
            "PBD" => "90",
        ]
    ],
    "13322000" => [
        "Status" => "Succes",
        "Angkatan" => "2022",
        "Nim" => "13322033",
        "Username" => "ERROR",
        "Nama" => "Yohanes Geopani",
        "Age" => "18",
        "Gender" => "Laki-Laki",
        "ProgramStudi" => "D3 Teknologi Komputer",
        "Kelas" => "31TK",
        "email" => "yohanesgeopani@gmail.com",
        "NilaiMatakuliah" => [
            "PABI" => "100",
            "ALSTRUDAT" => "100",
            "ALJALI" => "100",
            "SISOP" => "100",
            "PBD" => "100",
        ]
    ],

];
//template response 
$result = [
    'Status' => 'Succes',
    'Message' => '',
    'data' => []
];

if (isset($_GET['Nim']) && $_GET['Nim'] != null && array_key_exists($_GET['Nim'], $arr)) {
    $nim = $_GET['Nim'];
    $result['Status'] = 'Succes';
    $result['data'] = $arr[$nim];
    $result['Message'] = 'Sukses Mengambil data';
} elseif (isset($_GET['Nim']) && $_GET['Nim'] != null && !aray_key_exists($_GET['Nim'], $arr)) {
    //Kondisi NIM ada data tidak ada
    $result['Status'] = 'Succes';
    $result['Message'] = 'Data dengan nim ' . $_GET['Nim'] . 'Tidak ditemukan!';
} else {
    $result['Status'] = 'Error';
    $result['Message'] = 'Parameter tidak ditemukan ! ';
}

header('Content-Type: application/json; charshet=utf-8');
echo json_encode($result);