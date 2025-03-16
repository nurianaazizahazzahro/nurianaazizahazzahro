<?php include './components/header.php'; ?>

    <div class="ui container">

        <!-- Top Navigation Bar -->
        <?php include './components/top-menu.php'; ?>
             <div class="ui medium center images" style="text-align: center;">
                    <img style="width: 100%; height: 600px;" class="ui medium rounded image" src="./img/aza.jpg">
                </div>
                <style>
                     /* CSS untuk tombol */
        .btn-primary {
            background-color: darkblue;
            padding: 20px 80px;
            display: inline-block;
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s;
            border-radius: 20px; /* Bentuk oval */
            font-size: 30px
        }

        .btn-primary:hover {
            background-color: blue;
        }

        .donation-icons {
            display: flex;
            justify-content: space-between;
            margin-left: 50px; /* Menggeser ke kanan */
            margin-right: 50px;
            width: 90%; /* Lebar kontainer ikon */
        }

        .btn-whatsapp {
            background-color: blue;
            padding: 20px 70px;
            display: inline-block;
            text-decoration: none;
            color: white;
            font-weight: bold;
            margin-left: 20px; /* Menambahkan jarak antara tombol */
            transition: background-color 0.3s;
        }

        .btn-whatsapp:hover {
            background-color: darkblue;
        }

        .donation-icons i {
            color: white;
            font-size: 150px;
            margin-right: 20px; /* Jarak antara ikon */
        }

        .icon-container {
            text-align: center;
            height: 200px; /* Sesuaikan dengan tinggi ikon */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .icon-text {
            margin-top: 10px;
            font-size: 16px;
            font-family: Arial Black, sans-serif; /* Perbaikan nama jenis font */
            color: white;
        }

        /* CSS untuk kontainer dengan warna biru */
        .blue-container {
            display: flex;
            justify-content: space-between;
            background-color: darkorange;
            padding: 20px;
            color: white;
            margin-top: 20px; /* Jarak antara kontainer dengan tombol */
            width: 100%;
            height: 200px; /* Sesuaikan tinggi background */
        }

        /* CSS untuk kotak di atas kontainer warna biru */
        .box {
            flex: 1;
            width: 200px;
            height: 300px;
            background-color: white;
            margin: 0 30px; /* Jarak antara kotak */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Menambahkan shadow */
            text-align: center;
            padding: 20px;
        }
    </style>
    </head>
<body>
<div class="ui container" style="position: relative;">
    <!-- Content -->
    <div class="twelve wide column" style="position: absolute; top: 0px; left: 50%; transform: translateX(-50%); z-index: 1; text-align: center;">
        <!-- Button -->
        <a href="donasi_form.php" class="btn btn-primary">Donasi Sekarang</a>
    </div>
</div>

    <br><br><br><br><br>
<!-- Kontainer dengan warna biru -->
<div class="blue-container">
    <!-- Kotak 1 -->
    <div class="box">
        <i class="fas fa-hand-holding-heart" style="color: orange; font-size: 36px;"></i><br><br>
        <h2 style="color: black; font-family: Tw Cen MT Condensed Extra Bold, sans-serif;">Sedekah</h2><br>
        <p style="color: black;">Tunjukkan kebaikanmu dengan berdonasi online, mulai dari infaq untuk kesejahteraan bersama</p>
       
    </div>
    <!-- Kotak 2 -->
    <div class="box">
        <i class="fas fa-money-bill-wave" style="color: orange; font-size: 36px;"></i><br><br>
        <h2 style="color: black; font-family: Tw Cen MT Condensed Extra Bold, sans-serif;">Infaq</h2><br>
      <p style="color: black;">Tunjukkan kebaikanmu dengan berdonasi online, mulai dari sedekah untuk menyebarkan kebaikan tanpa batas</p>
        
    </div>
    <!-- Kotak 3 -->
    <div class="box">
        <i class="fas fa-hand-holding-usd" style="color: orange; font-size: 36px;"></i><br><br>
        <h2 style="color: black; font-family: Tw Cen MT Condensed Extra Bold, sans-serif;">Zakat</h2><br>
        <p style="color: black;">Tunjukkan kebaikanmu dengan berdonasi online, mulai dari zakat untuk menguatkan solidaritas sosial</p>
        
    </div>
    <!-- Kotak 4 -->
    <div class="box">
        <i class="fas fa-home" style="color: orange; font-size: 36px;"></i><br><br>
        <h2 style="color: black; font-family: Tw Cen MT Condensed Extra Bold, sans-serif;">Wakaf</h2><br>
        <p style="color: black;">Tunjukkan kebaikanmu dengan berdonasi online, mulai dari wakaf untuk membangun masa depan yang berkelanjutan</p>
        
    </div>
</div><br><br><br><br><br><br><br><br><br><br>


<style>
    .tentang-kami {
        display: flex; /* Menggunakan flexbox */
        justify-content: space-between; /* Menyusun elemen secara merata di sepanjang kontainer */
        align-items: center; /* Menyamakan tinggi elemen secara vertikal */
        text-align: left; /* Rata kiri teks */
    }

    .judul-pondok {
        font-size: 25px; /* Ukuran font */
        font-weight: bold; /* Teks tebal */
        color: white; /* Warna teks */
        margin-bottom: 5px; /* Jarak bawah */
        font-family: Tw Cen MT Condensed Extra Bold, sans-serif; /* Ganti font */
    }

    .teks-pondok {
        font-size: 18px; /* Ukuran font */
        color: white; /* Warna teks */
        line-height: 1.3; /* Tinggi baris */
        text-align: left; /* Rata kiri */
    }

    .foto-tentang-kami img {
        width: 80%; /* Lebar foto */
    }

    .button-oren {
        background-color: orange; /* Warna latar belakang */
        color: white; /* Warna teks */
        padding: 10px 20px; /* Padding tombol */
        border: none; /* Tanpa border */
        border-radius: 20px; /* Bentuk oval */
        cursor: pointer; /* Pointer mouse ketika diarahkan ke tombol */
        font-size: 16px; /* Ukuran font */
        transition: background-color 0.3s; /* Transisi warna latar belakang */
        text-decoration: none; /* Tanpa dekorasi teks */
    }

    .button-oren:hover {
        background-color: darkorange; /* Warna latar belakang saat dihover */
    }

    .section {
        background-color: darkblue; /* Warna latar belakang */
        padding: 20px; /* Padding */
        border-radius: 10px; /* Sudut bulatan */
        margin-top: 20px; /* Jarak atas */
    }
    .section-bawah {
        background-color: darkorange; /* Warna latar belakang */
        padding: 40px; /* Padding: atas bawah kanan kiri */
        border-radius: 10px; /* Sudut bulatan */
        margin-top: 20px; /* Jarak atas */
        width: 40%; /* Set lebar menjadi 50% dari .section-tentang-kami */
        height: 400px;
        margin-left: 10%; /* Geser ke kanan */
    }
    .judul-bawah {
        font-size: 35px; /* Ukuran font */
        font-weight: bold; /* Teks tebal */
        color: black; /* Warna teks */
        margin-bottom: 5px; /* Jarak bawah */
        font-family: Tw Cen MT Condensed Extra Bold, sans-serif; /* Ganti font */

    }

    .teks-bawah {
        font-size: 20px; /* Ukuran font */
        color: black; /* Warna teks */
        line-height: 1.3; /* Tinggi baris */
        text-align: left; /* Rata kiri */
    }
</style>

<div class="section">
    <div class="container text-center tentang-kami">
        <div class="foto-tentang-kami">
            <img src="img/WhatsApp Image 2024-02-20 at 10.11.39.jpeg" alt="Foto Tentang Kami">
        </div>
        <div>
            <p class="judul-pondok">Pondok Pesantren Terpadu Al-Mumtaz</p><br><br>
            <p class="teks-pondok">Didirikan pada tahun 2012, sebuah lembaga pendidikan dan sosial yang dikelola dengan konsep Islamic Boarding School berbasis entrepreneur dan tahfidz dan berkomitmen untuk menjadi pesantren yang memiliki ciri khas salafiyah haditsah, bermanajemen modern, peduli terhadap lingkungan, dalam rangka menuju lembaga yang Li-i'laaikalimatillah.</p><br>

            <a href="tentang_kami.php" class="button-oren">Selengkapnya ></a>
        </div>
    </div>
</div><br><br><br><br>
<!-- Top Navigation Bar -->
   
    <div class="container text-center" style="max-width: 1200px;">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Donasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <style>
        .donation-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
            margin: 10px;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            width: 100%;
        }
        .donation-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .donation-card .content {
            padding: 20px;
        }
        .donation-card .content h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .donation-card .content p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .donation-card .content .amount {
            font-size: 18px;
            font-weight: bold;
            color: #e74c3c;
        }
        .donation-card .content .progress {
            margin: 10px 0;
        }
        .slick-slide {
            margin: 0 10px;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .btn-view-programs {
            background-color: darkorange;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="ui container">
        <div class="donation-slider">
            
            <?php
            // Data donasi
            $donations = [
                [
                    'title' => 'Sedekah Daging',
                    'image' => './img/kesempatan beramal kalau belum bisa berqurban (1).png', // Ganti dengan path gambar yang sesuai
                    'organization' => 'yayasan PPT Al Mumtaz',
                    'amount' => 'Rp 0',
                    'collected' => 0,
                    'target' => 5000000,
                    'link' => 'programsatu.php' // Link ke halaman detail donasi
                ],
                [
                    'title' => 'Berqurban',
                    'image' => './img/kesempatan beramal kalau belum bisa berqurban (2).png', // Ganti dengan path gambar yang sesuai
                    'organization' => 'yayasan PPT Al Mumtaz',
                    'amount' => 'Rp 0',
                    'collected' => 0,
                    'target' => 10000000,
                    'link' => 'programdua.php' // Link ke halaman detail donasi
                ],
                [
                    'title' => 'Wakaf Quran',
                    'image' => './img/kesempatan beramal kalau belum bisa berqurban (3).png', // Ganti dengan path gambar yang sesuai
                    'organization' => 'yayasan PPT Al Mumtaz',
                    'amount' => 'Rp 0',
                    'collected' => 0,
                    'target' => 5000000,
                    'link' => 'programtiga.php' // Link ke halaman detail donasi
                ],
                [
                    'title' => 'Sedekah sahur & buka puasa',
                    'image' => './img/kesempatan beramal kalau belum bisa berqurban (4).png', // Ganti dengan path gambar yang sesuai
                    'organization' => 'yayasan PPT Al Mumtaz',
                    'amount' => 'Rp 0',
                    'collected' => 0,
                    'target' => 2000000,
                    'link' => 'programempat.php' // Link ke halaman detail donasi
                ],
                [
                    'title' => 'Sedekah Daging',
                    'image' => './img/kesempatan beramal kalau belum bisa berqurban (1).png', // Ganti dengan path gambar yang sesuai
                    'organization' => 'yayasan PPT Al Mumtaz',
                    'amount' => 'Rp 0',
                    'collected' => 0,
                    'target' => 4000000,
                    'link' => 'programlima.php' // Link ke halaman detail donasi
                ],
                [
                    'title' => 'Berqurban',
                    'image' => './img/kesempatan beramal kalau belum bisa berqurban (2).png', // Ganti dengan path gambar yang sesuai
                    'organization' => 'yayasan PPT Al Mumtaz',
                    'amount' => 'Rp 0',
                    'collected' => 0,
                    'target' => 5000000,
                    'link' => 'programenam.php' // Link ke halaman detail donasi
                ],
            ];

            foreach ($donations as $donation) {
                $percentage = ($donation['collected'] / $donation['target']) * 100;
                echo '
                <a href="'.$donation['link'].'" class="donation-card">
                    <div class="image">
                        <img src="'.$donation['image'].'" alt="'.$donation['title'].'">
                    </div>
                    <div class="content">
                        <h3>'.$donation['title'].'</h3>
                        <p>'.$donation['organization'].'</p>
                        <p class="amount">'.$donation['amount'].' terkumpul</p>
                        <div class="progress">
                            <div class="ui progress" data-percent="'.$percentage.'">
                                <div class="bar" style="width: '.$percentage.'%;"></div>
                            </div>
                        </div>
                    </div>
                </a>
                ';
            }
            ?>
        </div><br>
     <style>
    .btn-wrapper {
        display: flex;
        justify-content: center; /* Mengatur tata letak ke tengah */
        margin-top: 20px; /* Contoh margin top, sesuaikan dengan kebutuhan Anda */
    }

    .btn-view-programs {
        display: inline-block;
        background-color: orang; /* Warna latar belakang */
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .btn-view-programs:hover {
        background-color: darkorange; /* Warna latar belakang yang berbeda saat dihover */
    }
</style>

<div class="btn-wrapper">
    <a href="program.php" class="btn-view-programs">Lihat Selengkapnya &gt;</a>
</div>

       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.donation-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>
</html><br><br>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alirkan Pahala</title>
    <style>
        .section {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .left-box, .right-box {
            flex: 1;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            font-size: 20px; /* Menambah ukuran font */
        }

        .left-box {
            background-color: orange;
            color: black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: left;
        }

        .right-box {
            background-color: #32CD32;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .button-blue {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .button-blue:hover {
            background-color: darkblue;
        }
        
    </style>
</head>
<body>

<div class="section">
    <div class="left-box">
        <h2>Bersama Kita Bisa Bantu Sesama</h2>
        <p>Yayasan PPT Al Mumtaz terus berupaya menyebar manfaat kepada penerima yang benar-benar membutuhkan sehingga tepat sasaran. Melalui berbagai program sosial dan pendidikan, kami berkomitmen memberdayakan masyarakat kurang mampu dan memberikan dukungan yang mereka perlukan untuk kehidupan lebih baik. Mari bergandengan tangan, bersama kita bisa mewujudkan impian mereka.</p>
    </div>
    <div class="right-box">
        <h2>Ada Pertanyaan atau Perlu Bantuan?</h2>
        <p>Silahkan hubungi kami melalui kontak yang sudah disediakan</p>
        <a href="kontak.php" class="button-blue">Hubungi Kami ></a>
    </div>
</div>

</body>
</html>

</div><br><br><br>


<!-- Testimoni -->
<style>
.testimoni {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.testimoni-box {
    width: 330px;
    margin: 20px;
    text-align: center;
    height: 350px; /* Added height to ensure boxes are the same size */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    background-color: white;
}

/* Tambahan untuk memperbaiki margin pada paragraf */
.testimoni-box p {
    margin: 0;
}
</style>

<div class="section" style="background-image: url('img/WhatsApp Image 2024-03-12 at 20.43.09.jpeg'); padding: 50px 0; background-size: cover; background-position: center;">
    <div class="container text-center" style="max-width: 1200px;">
       <h2 style="color: black; font-size: 50px; font-family: 'Tw Cen MT Condensed Extra Bold', sans-serif; text-align: center;">Testimoni</h2><br>
       <h2 style="color: black; font-size: 20px; font-family: 'Times New Roman', sans-serif; text-align: center;">Apa yang dikatakan donatur untuk mumtaz donasi</h2><br><br><br>

       <div class="testimoni">
            <div class="testimoni-box">
                <div class="rating"></div>
                <p>"saya merasa tenang berdonasi melalui Panti asuhan Amalunnajah yang dibawah naungan Yayasan Pondok Pesantren Terpadu Al Mumtaz, selain penyaluran donasi tepat sasaran, juga memiliki legalitas resmi yang berbadab hukum dan terpercaya"</p><br><br>
                
                <p>- Ahmad Yazid (pemberi manfaat)</p>
            </div>
            <div class="testimoni-box">
                <div class="rating"></div>
                <p>"alhamdulillah berbagi donasi yang diterima membantu saya dan teman-teman lain dalam memenuhi kebutuhan selama menjalani pendidikan kepesantrenan, formal, dan enterpreneur."</p><br><br>
               
                <p>- Fitri (penerima manfaat)</p>
            </div>
            <div class="testimoni-box">
                <div class="rating"></div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor hendrerit semper."</p><br><br>
              
                <p>- Rosyid</p>
            </div>
        </div>
    </div>
</div>
<br><br>
<style>
    .section#jurusan {
        background-color: darkblue; /* Warna abu-abu */
        padding: 50px 0; /* Padding atas dan bawah */
        width: 100%; /* Lebar penuh */
        height: 70vh; /* Tinggi viewport */
        display: flex; /* Flex container */
        justify-content: center; /* Tengahkan konten horizontal */
        align-items: center; /* Tengahkan konten vertikal */
    }
    .button-oren {
        background-color: orange; /* Warna latar belakang */
        color: white; /* Warna teks */
        padding: 10px 20px; /* Padding tombol */
        border: none; /* Tanpa border */
        border-radius: 20px; /* Bentuk oval */
        cursor: pointer; /* Pointer mouse ketika diarahkan ke tombol */
        font-size: 16px; /* Ukuran font */
        transition: background-color 0.3s; /* Transisi warna latar belakang */
        text-decoration: none; /* Tanpa dekorasi teks */
    }

    .button-oren:hover {
        background-color: darkorange; /* Warna latar belakang saat dihover */
    }
</style>

<div class="section" id="jurusan">
    <!-- Konten di sini -->
    <div class="twelve wide column">
                <div class="ui medium center images" style="text-align: center;">
                    <img style="width: 400px; height: 280px;" class="ui medium rounded image" src="./img/WhatsApp Image 2024-06-06 at 19.50.23 (1).jpeg">
                    <img style="width: 400px; height: 280px;" class="ui medium rounded image" src="./img/WhatsApp Image 2024-06-06 at 19.50.24 (1).jpeg">
                    </div><br><br>
                <a href="galeri.php" class="button-oren">Lihat Selengkapnya ></a>

                <span class="p-20"></span>
            </div>
        </div>



   

</div><br><br><br><br><br>
<style>
    .whatsapp-button {
        position: fixed; /* Membuat tombol terapung */
        bottom: 20px; /* Jarak dari bawah layar */
        right: 20px; /* Jarak dari kanan layar */
        z-index: 9999; /* Layer di atas konten lain */
        background-color: #25D366; /* Warna latar belakang */
        color: white; /* Warna teks */
        width: 60px; /* Lebar tombol */
        height: 60px; /* Tinggi tombol */
        border-radius: 50%; /* Membuat tombol berbentuk lingkaran */
        text-align: center; /* Pusatkan ikon */
        line-height: 60px; /* Atur ketinggian ikon */
        font-size: 24px; /* Ukuran font */
        cursor: pointer; /* Pointer mouse saat diarahkan ke tombol */
        transition: background-color 0.3s; /* Transisi warna latar belakang */
        text-decoration: none; /* Hapus garis bawah */
 
}


    .whatsapp-button:hover {
        background-color: #128C7E; /* Warna latar belakang saat dihover */
    }
</style>

<!-- Tombol WhatsApp -->
<a href="https://wa.me/08112950430" class="whatsapp-button" target="_blank">
    <i class="fab fa-whatsapp"></i> <!-- Icon WhatsApp -->
</a>
</body>
</div>


   
    
<?php include './components/footer.php'; ?>