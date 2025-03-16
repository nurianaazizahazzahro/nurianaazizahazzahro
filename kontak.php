<?php include './components/header.php'; ?>

<div class="ui container">

    <!-- Top Navigation Bar -->
    <?php include './components/top-menu.php'; ?>



        <!-- Right Content -->
        <div class="twelve wide column">
            <!-- ulasan Form -->
            <div class="ui segment">
                <h1>Ulasan</h1>

                <?php
                if(isset($_POST['submit_ulasan'])) {
                    $nama = $_POST['nama_lengkap'];
                    $alamat = $_POST['alamat_lengkap'];
                    $kontak = $_POST['kontak'];
                    $email = $_POST['email'];
                    $komen = $_POST['komen'];

                    $sql = "INSERT INTO ulasan (nama_lengkap, alamat_lengkap, kontak, email, komen) 
                            VALUES ('$nama', '$alamat', '$kontak', '$email', '$komen')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script> alert('Feedback successfully sent'); </script>";
                    } else {
                        echo "<script> alert('Error in Insertion'); </script>";
                    }
                    $conn->close();
                }
                ?>

                <form action="<?php $_PHP_SELF ?>" method="post" class="ui form">
                    <div class="field">
                        <label>Nama</label>
                        <input type="text" name="full_name" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="field">
                        <label>Alamat</label>
                        <input type="text" name="full_address" placeholder="Alamat" required>
                    </div>
                    <div class="field">
                        <label>Kontak</label>
                        <input type="tel" name="phone" placeholder="Phone / WA" required>
                    </div>
                    <div class="field">
                        <label>Email </label>
                        <input type="email" name="email" placeholder="Email " required>
                    </div>
                    <div class="field">
                        <label>Komen</label>
                        <textarea rows="2" name="comment" required></textarea>
                    </div>
                    <button name="submit_ulasan" class="ui primary button" type="submit">Submit</button>
                    <button class="ui button" type="reset">Reset</button>
                </form>
            </div>

  <div class="twelve wide column">
            <!-- ulasan Form -->
            <div class="ui segment">
                <h1>Hubungi Kami</h1>

        <div class="col-4">
            <p style="margin-bottom: 15px; font-size: 18px;"><i class="fas fa-map-marker-alt" style="font-size: 24px;"></i> <b>Alamat :</b><br>Jln Jogja-Wonosari km 25 Kerjan,Beji,Patuk,Gunung Kidul,DIY</p>
            <p style="margin-bottom: 15px; font-size: 18px;"><i class="fas fa-phone" style="font-size: 24px;"></i> <b>Telepon :</b><br>02742901151</p>
            <p style="margin-bottom: 15px; font-size: 18px;"><i class="fab fa-whatsapp" style="font-size: 24px;"></i> <b>WA :</b><br>08112950430</p>
            <p style="margin-bottom: 15px; font-size: 18px;"><i class="far fa-envelope" style="font-size: 24px;"></i> <b>Email :</b><br>pesantrenalmumtaz@gmail.com</p><br><br>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.17295205008!2d110.52948537405115!3d-7.876964978331631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a4dfb3ed0d387%3A0x3a7a44878d94f766!2sPondok%20Pesantren%20Al%20Mumtaz!5e0!3m2!1sid!2sid!4v1708666504968!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
    </div><br><br>
</div>
</div>
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
</div>

<?php include './components/footer.php'; ?>
