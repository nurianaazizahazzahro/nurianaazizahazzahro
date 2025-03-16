<?php include './components/header.php'; ?>

    <div class="ui container">

        <!-- Top Navigation Bar -->
        <?php include './components/top-menu.php'; ?>

  
            
            <!-- right content -->
            <div class="twelve wide column">
                <h1>Penggunaan Dana</h1>
                
                <h2 class="ui block header">juni 2024</h2>
                   <div class="ui medium images">
                    <img class="ui medium rounded image" src="img/WhatsApp Image 2024-07-05 at 09.55.39.jpeg">
                                    
                </div>
                 

              

                <span class="p-20"></span>
            </div>
        </div>

    </div><br><br>
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
    
<?php include './components/footer.php'; ?>