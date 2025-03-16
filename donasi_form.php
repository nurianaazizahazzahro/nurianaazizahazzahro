    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Metode Pembayaran</title>
        <style>
            body {
                background-color: lightgrey;
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