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

if (isset($_GET['Nim']) && $_GET['Nim'] == 'all') {
    $result['Status'] = 'Success';
    $result['data'] = array_merge(array_values($arr));
    $result['Message'] = 'Sukses Mengambil semua data';
} elseif (isset($_GET['Nim']) && array_key_exists($_GET['Nim'], $arr)) {
    // Mengambil data berdasarkan NIM yang diberikan
    $nim = $_GET['Nim'];
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($arr[$nim]);
} else {
    // Menampilkan pesan error jika parameter NIM tidak ditemukan
    header('Content-Type: application/json; charset=utf-8');
}

header('Content-Type: application/json; charshet=utf-8');
echo json_encode($result);
