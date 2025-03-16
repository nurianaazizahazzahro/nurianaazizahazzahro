<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200vh;
            background-color: lightgrey;
            margin: 0;
        }

        .payment-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }

        .container-transfer-bank,
        .container-qris {
            margin-top: 20px;
            padding: 20px;
            border-radius: 5px;
            background-color: lightgray;
        }

        .foto-tentang-kami img {
            width: 300px;
            height: 80px;
            border-radius: 50px; /* Membuat samping gambar oval */
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <div class="foto-tentang-kami">
            <h4>Transfer Bank</h4>
            <img src="img/WhatsApp Image 2024-05-16 at 10.31.56.jpeg" alt="Foto Tentang Kami">
        </div>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Mumtaz_Donasi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit_donasi'])) {
    $program = isset($_POST['program']) ? $_POST['program'] : null;
    $jumlah = $_POST['amount'];
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $kontak = $_POST['phone'];
    $alamat = $_POST['address'];

    if ($program === null) {
        echo "<script>alert('Silakan pilih program yang akan disponsori.')</script>";
    } else {
        // Periksa apakah file gambar telah diunggah dengan benar
        if(isset($_FILES['payment_proof']) && $_FILES['payment_proof']['error'] === UPLOAD_ERR_OK) {
            $gambar = $_FILES['payment_proof']['name'];
            $target_directory = "uploads/";

            // Periksa apakah direktori tujuan ada
            if (!is_dir($target_directory)) {
                mkdir($target_directory, 0777, true); // Buat direktori jika belum ada
            }

            $target_file = $target_directory . basename($gambar);

            // Coba untuk memindahkan file yang diunggah ke direktori tujuan
            if (move_uploaded_file($_FILES["payment_proof"]["tmp_name"], $target_file)) {
                // Simpan informasi donasi ke dalam database
                $stmt = $conn->prepare("INSERT INTO donasi (program, jumlah, d_nama, email, kontak, d_alamat, gambar) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sisssss", $program, $jumlah, $nama, $email, $kontak, $alamat, $gambar);

                if ($stmt->execute() === TRUE) {
                    echo "<script>alert('Successfully Donasition form Submitted');</script>";
                } else {
                    echo "<script>alert('Error in Insertion');</script>";
                }

                $stmt->close();
            } else {
                echo "<script>alert('Maaf, terjadi kesalahan saat mengunggah gambar.')</script>";
            }
        } else {
            echo "<script>alert('Maaf, terjadi kesalahan saat mengunggah gambar.')</script>";
        }
    }

    $conn->close();
}
?>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="ui form" enctype="multipart/form-data">
                <h4 class="ui dividing header">Pilih program yang akan disponsori</h4>
                <div class="grouped fields">
                    <label for="program"><strong>Program:</strong></label>
                    <div class="field">
                        <div class="ui radio checkbox" style="text-align: left;">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="Sedekah Daging" value="Sedekah Daging">
                            <label for="Sedekah Daging">Sedekah Daging</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox" style="text-align: left;">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="Qurban Bareng" value="Qurban Bareng">
                            <label for="Qurban Bareng">Qurban Bareng</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox" style="text-align: left;">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="Wakaf Al Qur'an" value="Wakaf Al Qur'an">
                            <label for="Wakaf Al Qur'an">Wakaf Al Qur'an</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox" style="text-align: left;">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="Sedekah Sahur" value="Sedekah Sahur">
                            <label for="Sedekah Sahur">Sedekah Sahur Dan Buka Puasa</label>
                        </div>
                    </div>
                </div>
                <h4 class="ui dividing header">Form Donasi</h4>
                <div class="field">
                    <label>Nama</label>
                    <input type="text" name="name" placeholder="Nama Lengkap" required>
                </div><br>
                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email" required>
                </div><br>
                <div class="field">
                    <label>No HP/WA</label>
                    <input type="tel" name="phone" placeholder="No HP/WA" required>
                </div><br>
                <div class="field">
                    <label>Alamat</label>
                    <input type="text" name="address" placeholder="Alamat" required>
                </div><br>
                <div class="field">
                    <label>Jumlah</label>
                    <input type="number" name="amount" min="1" placeholder="Jumlah" required>
                </div><br>
                <div class="field">
                    <label>gambar</label>
                    <input type="file" name="payment_proof" placeholder="gambar" required accept="gambar/*">
                </div><br>
                <button name="submit_donasi" class="ui primary button" type="submit" style="background-color: blue;">Submit</button>
                <button class="ui button" type="reset">Reset</button>
            </form>
    </div>
</body>
</html>
