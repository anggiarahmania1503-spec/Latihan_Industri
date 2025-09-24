<?php

use App\Models\Post;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ControllerBiodata;
use App\Models\Siswa;
use App\Models\Biodata;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('About', function () {
    return '<center><h2>Selamat datang di halaman About</center>';
});

Route::get('Profil', function () {
    return '<center><h2>Selamat datang di halaman Profil</center>';
});

Route::get('Biodata', function () {
    return '<center><h2>Biodata</h2><br>'. 
    'Nama Lengkap  : Anggia Rahmania <br>'. 
    'Jenis Kelamin : Perempuan <br>'. 
    'Tempat Lahir  : Bandung <br>'.
    'Alamat        : Cibedug Hilir <br>'. 
    'Agama         : Islam <br>'. 
    'No Telpon     : 0895800899494</center>';
});

Route::get('/Biodata2/{Nama}/{Js}/{tl}/{almt}/{agm}/{telp}', function ($nama_lengkap, $Jenis_kelamin, $Tempat_lahir, $Alamat, $Agama, $No_telpon) {
    return "<center><h2>Biodata</h2><br>". 
    "Nama Lengkap  : $nama_lengkap <br>". 
    "Jenis Kelamin : $Jenis_kelamin <br>". 
    "Tempat Lahir  : $Tempat_lahir <br>".
    "Alamat        : $Alamat <br>". 
    "Agama         : $Agama <br>". 
    "No Telpon     : $No_telpon</center>";
});

Route::get('/Penjumlahan/{bilangan_1}/{bilangan_2}', function ($bilangan_1, $bilangan_2) {
    $hasil = $bilangan_1 + $bilangan_2;
    return "bilangan 1 : $bilangan_1<br>". 
    "bilangan 2 : $bilangan_2<br>" . 
    "Hasil : $hasil";
});

Route::get('/Segitiga/{alas}/{tinggi}', function ($alas, $tinggi) {
    $hasil =0.5 * $alas * $tinggi;
    return "Rumus Luas Segitiga : 1/2 x tinggi x alas<br>". 
    "tinggi: $tinggi<br>" . 
    "Alas : $alas<br>". 
    "Hasil : $hasil";
});

Route::get('/Persegi_Panjang/{panjang}/{lebar}', function ($panjang, $lebar) {
    $hasil = $panjang * $lebar;
    return "Rumus Luas Persegi Panjang : Panjang x Lebar<br>". 
    "Panjang: $panjang<br>" . 
    "Tinggi : $lebar<br>". 
    "Hasil : $hasil";
});

Route::get('/Persegi/{sisi}', function ($sisi) {
    $hasil = $sisi * $sisi;
    return "Rumus Luas Persegi : Sisi x Sisi<br>". 
    "Sisi: $sisi<br>" . 
    "Hasil : $hasil<br>";
});


Route::get('/Lingkaran/{jari_jari}', function ($jari_jari) {
    $hasil = 3.14 * $jari_jari;
    return "Rumus Luas Lingkaran : 3,14 x Jari-jari <br>". 
    "Jari-jari: $jari_jari<br>" . 
    "Hasil : $hasil";
});

Route::get('/Angkringan/{nama}/{no_telpon}/{tgl}/{jenis}/{menu}/{jumlah}', function ($nama,$no_telpon,$tgl,$jenis,$menu,$jumlah) {
if($jenis == "makanan"){

    if($menu == "seblak"){
        $harga = 10000;
    }else if($menu == "batagor"){
        $harga = 20000;
    }else if($menu == "pentol"){
        $harga = 15000;
    }else {
        echo $harga= 0;
    }

 }else if($jenis == "minuman"){

    if($menu == "jus"){
        $harga = 10000;
    }else if($menu == "thai tea"){
        $harga = 15000;
    }else if($menu == "kopi"){
        $harga = 5000;
    }else {
        echo $harga= 0;
    }
}else{
    echo "jenis menu tidak ada";
};
$total = $harga * $jumlah;
if($total > 50000) {
    $diskon = 0.1 * $total;
    $total_harga = $total - $diskon;
    $cetak ="diskon 10% = $diskon";
}else {
    $cetak = "Tidak Mendapat Diskon";
    $total_harga = $total;
}
    return "<h2>Angkringan Jehyun<br>". 
    "<hr><br>".
    "Nama Lengkap : $nama<br>" .
    "No Telpon : $no_telpon<br>" .
    "Tanggal : $tgl<br>" .
    "Jenis : $jenis<br>" .
    "Menu : $menu<br>" .
    "Harga : $harga<br>" .
    "Jumlah : $jumlah<br>".
    "<hr>". 
    "Total :$total<br>". 
    "$cetak<br>". 
    "<hr>". 
    "Total Bayar : $total_harga<br>";
});

// routes view
Route::get('halaman1', function () {

    $siswa = ["jajas","ani","awa","bais","dila"];

    return view('tampil1', compact('siswa'));
});

Route::get('halaman2', function () {
    $hobi = ["membaca","maling","demo","nari","nari","ngoding","menulis","menyanyi","memasak","mewarnai","menggambar"];

    return view('tampil2', compact('hobi'));
    
});

Route::get('halaman3', function () {
    $idola = ["jaehyun","rony","kang taemoo","shin ha-ri","tiara","mahalini","ziva","afgan","rossa","raisa","roma irama"];

    return view('tampil3', compact('idola'));
});

Route::get('post', function () {
//(menampilkan data tertentu)
    return $post = Post::where('id','like','%2%')->get();

//(merubah data)
    //$post = Post::find(1);
    //$post->content = "belajar dengan giat lagi";
    //$post->save();
    //return $post;

//(menampilkan semua data)
   //$post = Post::all();
   //return view('halaman_post', compact('post'));

//(menghapus data)
  //$post = Post::find(1);
  //$post->delete();
  //return $post;

//(menambahkan data)
  //$post          = new Post;
  //$post-> tittle = "Menjadi musuh yang baik";
  //$post-> content = "Menjadi musuh yang baik adalah hal positif";
  //$post-> save();
//return $post;
});

Route::get('siswa', function () {
  // return $siswa = Siswa::all();
  $siswa = Siswa::all();
    return view('halaman_siswa', compact('siswa'));
});

//Route::get('biodata2', function () {
  // return $siswa = Siswa::all();
  //$biodata = Biodata::all();
    //return view('halaman_biodata', compact('biodata'));

  //$biodata2                 = new Biodata;
  //$biodata2-> nama_lengkap  = "Nadin Putri";
  //$biodata2-> jenis_kelamin = "Perempuan";
  //$biodata2-> tanggal_lahir = "2009-12-09";
  //$biodata2-> tempat_lahir  = "Bandung";
  //$biodata2-> agama         = "Islam";
  //$biodata2-> alamat        = "Cibedug";
  //$biodata2-> telepon       = "08973101081";
  //$biodata2-> email         = "dindinn@gmail.com";
  //$biodata2-> save();
//return $biodata2;

//$biodata2 = Biodata::find(1);
  //  $biodata2->nama_lengkap = "Zaskia Ramadhani";
    //$biodata2->save();
    //return $biodata2;
//});

Route::get('post', [PostsController::class,'tampil']);
Route::get('biodata2', [ControllerBiodata::class,'tampil']);

Auth::routes();

Route::get('/product', [ProductController::class, 'index'])->name('product');
