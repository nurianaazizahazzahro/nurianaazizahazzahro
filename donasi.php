<?php include './components/header.php'; ?>

<div class="ui container">

    <!-- Top Navigation Bar -->
    <?php include './components/top-menu.php'; ?>

    <!-- right content -->
    <div class="twelve wide column">
        <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <img src="img/WhatsApp_Image_2024-07-08_at_19.14.14-removebg-preview.png" alt="Cartoon Image" style="width: 500px; height: auto; margin-right: 20px;">
            <div>
                <h1 style="color: black; text-align: left;">Kenapa Donasi Penting?</h1>
                <p style="text-align: left;"><strong>Yayasan Pondok Pesantren Terpadu Al Mumtaz</strong> Donasi Anda membantu kami menyediakan pendidikan yang lebih baik bagi anak-anak yang membutuhkan. Bersama, kita dapat membuat perbedaan nyata dalam hidup mereka.</p>
            </div>
        </div>



 

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Metode Pembayaran</title>
        <style>
            body {
                background-color: #f0f8ff;
                font-family: Arial, sans-serif;
                color: #333;
                margin: 0;
                padding: 0;
            }

            .payment-container {
                background-color: #ffffff;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                max-width: 800px;
                margin: 30px auto;
                text-align: center;
            }

            .payment-container h1 {
                color: darkorange;
                margin-bottom: 20px;
            }

            .payment-buttons {
                display: flex;
                justify-content: center;
                margin-bottom: 20px;
            }

            .payment-buttons a {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 15px 30px;
                margin: 0 10px;
                cursor: pointer;
                color: #fff;
                border-radius: 50px;
                text-decoration: none;
                background-color: #007bff;
                transition: background-color 0.3s;
                font-size: 16px;
            }

            .payment-buttons a:hover {
                background-color: #0056b3;
            }

            .payment-buttons a i {
                margin-right: 10px;
            }

            .container-transfer-bank,
            .container-qris {
                margin-top: 20px;
                padding: 20px;
                border-radius: 5px;
                background-color: #e3f2fd;
                border: 1px solid #90caf9;
                text-align: left;
            }

            .additional-info {
                margin-top: 30px;
                padding: 20px;
                background-color: #fff3e0;
                border-radius: 10px;
                border: 1px solid #ffcc80;
                text-align: center;
            }

            .additional-info h2 {
                color: #ff9800;
            }

            .additional-info p {
                color: #666;
            }

            .whatsapp-button {
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 9999;
                background-color: #25D366;
                color: white;
                width: 60px;
                height: 60px;
                border-radius: 50%;
                text-align: center;
                line-height: 60px;
                font-size: 24px;
                cursor: pointer;
                transition: background-color 0.3s;
                text-decoration: none;
            }

            .whatsapp-button:hover {
                background-color: #128C7E;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        <div class="payment-container">
            <h1>Pilih Metode Pembayaran</h1>
            <div class="payment-buttons">
                <a href="donasi-form1.php" id="transfer_bank_button"><i class="fas fa-university"></i> Transfer Bank</a>
                <a href="donasi-form2.php" id="qris_button"><i class="fas fa-qrcode"></i> QRIS</a>
            </div>

            <?php
            $method = isset($_GET['method']) ? $_GET['method'] : 'transfer_bank';

            if ($method === 'transfer_bank') {
                echo '<div id="metode_transfer_bank" class="container-transfer-bank">
                        <h3>Pembayaran melalui Transfer Bank</h3>
                        <p>Silahkan transfer ke rekening berikut:</p>
                        <ul>
                            <li>Bank BSI: 7055999999 a.n. Yayasan Pondok Pesantren Al Mumtaz</li>
                        </ul>
                      </div>';
            } elseif ($method === 'qris') {
                echo '<div id="metode_qris" class="container-qris">
                        <h3>Pembayaran melalui QRIS</h3>
                        <p>Gunakan aplikasi pembayaran QRIS dan scan kode QR berikut:</p>
                        <img src="qris_code.png" alt="QRIS Code" width="200" height="200">
                      </div>';
            }
            ?>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var method = '<?php echo $method; ?>';
                if (method === 'transfer_bank') {
                    document.getElementById('transfer_bank_button').classList.add('active');
                } else if (method === 'qris') {
                    document.getElementById('qris_button').classList.add('active');
                }
            });
        </script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi</title>
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .donation-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .donation-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .donation-box {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            flex: 1 1 calc(20% - 20px);
            margin: 10px;
            padding: 20px;
            text-align: center;
        }

        .donation-box h3 {
            color: darkorange;
            margin-bottom: 10px;
        }

        .donation-box p {
            color: #666;
        }

        .circle-buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .circle-buttons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            margin: 0 10px;
            border-radius: 50%;
            background-color: #0056b3;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .circle-buttons a:hover {
            background-color: #007bff;
        }

        .circle-buttons a i {
            font-size: 3em;
        }

        .transaction-fee {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="donation-header">
            <h1>Mengapa Berdonasi Di Yayasan Pondok Pesantren Terpadu Al Mumtaz?</h1>
        </div>
        <div class="donation-grid">
            <div class="donation-box">
                <i class="fas fa-calendar-alt" style="color: darkorange; margin-bottom: 10px; font-size: 2em;"></i>
                <p>Lebih dari 10 tahun mengelola donasi.</p>
            </div>
            <div class="donation-box">
                <i class="fas fa-users" style="color: darkorange; margin-bottom: 10px; font-size: 2em;"></i>
                <p>Memiliki lebih dari 100 donatur baik tetap maupun tidak tetap.</p>
            </div>
            <div class="donation-box">
                <i class="fas fa-child" style="color: darkorange; margin-bottom: 10px; font-size: 2em;"></i>
                <p>Memiliki santri dengan total lebih dari 50 orang yang merupakan anak yatim, piatu, dhuafa.</p>
            </div>
            <div class="donation-box">
                <i class="fas fa-handshake" style="color: darkorange; margin-bottom: 10px; font-size: 2em;"></i>
                <p>Menjalin mitra pendidikan formal, kepesantrenan dan badan usaha untuk mendidik santri agar memiliki ilmu pengetahuan umum, agama, dan entrepreneur.</p>
            </div>
            <div class="donation-box">
                <i class="fas fa-money-bill-wave" style="color: darkorange; margin-bottom: 10px; font-size: 2em;"></i>
                <p>Kemudahan donasi, tidak harus ke kantor namun bisa transfer.</p>
            </div>
        </div>

        <div class="circle-buttons">
            <a i class="fas fa-dollar-sign fa-3x"></i></a>
            <a i class="fas fa-dollar-sign fa-3x"></i></a>
            <a i class="fas fa-dollar-sign fa-3x"></i></a>
            <a i class="fas fa-dollar-sign fa-3x"></i></a>
            <a i class="fas fa-dollar-sign fa-3x"></i></a>
            <a i class="fas fa-ellipsis-h fa-3x"></i></a>
        </div>

        
</body>
</html>



     

        <!-- Tombol WhatsApp -->
        <a href="https://wa.me/08112950430" class="whatsapp-button" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </body>
    </html>

</div>

<?php include './components/footer.php'; ?>
