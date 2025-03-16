<?php include './components/header.php'; ?>

    <div class="ui container">

        <!-- Top Navigation Bar -->
        <?php include './components/top-menu.php'; ?>

  
            
            <!-- right content -->
            <div class="twelve wide column">
                <h1>Photo Gallery</h1>
                <!-- <p><strong>CCDF</strong> is a non-profit, non-government and voluntary organization committed to the care & development and voluntary organization committed to the care and development of the underprivileged children.</p>
                <p><strong>CCDF is a group</strong> of quanlified, hardworking, dedicated, like-minded people trying to make a difference in the life of the underrepresented, disadvantaged and marginalized sections of the society. It have been established to work as a platform to channelize and make optimum use of the resources and infrastructure available and people's desire to give back to society a bit of what they owe to it.</p>
                <p><strong>It is out effort</strong> at CCDF to guide and motivate people to use their resources in a construction in changing the lives of these street children.</p> <p><strong>We are working</strong> in the field of education and over all development of the destitute children by providing then with an opportunity to realize their full potentials and lead a dignified and respectable life.</p> -->

                <h2 class="ui block header">Sedekah Al Qur'an</h2>
                   <div class="ui medium images">
                    <img class="ui medium rounded image" src="img/WhatsApp Image 2024-06-06 at 19.50.24 (1).jpeg">
                    <img class="ui medium rounded image" src="img/WhatsApp Image 2024-06-06 at 19.50.23 (1).jpeg">
                    <img class="ui medium rounded image" src="img/WhatsApp Image 2024-06-06 at 19.50.23 (2).jpeg">
                    <img class="ui medium rounded image" src="img/WhatsApp Image 2024-06-06 at 19.50.24.jpeg">  
                    <img class="ui medium rounded image" src="img/WhatsApp Image 2024-06-06 at 19.50.23.jpeg">                
                </div>
                 <h2 class="ui block header">Sedekah Buka Puasa</h2>
                   <div class="ui medium images">
                    <img class="ui medium rounded image" src="img/WhatsApp Image 2024-06-27 at 18.12.40 (5).jpeg">
                    <img class="ui medium rounded image" src="img/WhatsApp Image 2024-06-27 at 18.12.40 (4).jpeg">
                    <img class="ui medium rounded image" src="img/WhatsApp Image 2024-06-27 at 18.12.40 (3).jpeg">
                    <img class="ui medium rounded image" src="img/WhatsApp Image 2024-06-27 at 17.52.14 (1).jpeg">  
                    <img class="ui medium rounded image" src="img/WhatsApp Image 2024-06-27 at 17.52.13 (1).jpeg">                
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