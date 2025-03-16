<?php include './components/header.php'; ?>

<div class="ui container">

    <!-- Top Navigation Bar -->
    <?php include './components/top-menu.php'; ?>
    <div class="container text-center" style="max-width: 1200px;">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Donasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <style>
        .donation-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            justify-items: center;
        }
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
            max-width: 300px;
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
        <div class="donation-grid">
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
    </div>
</body>

</html><br><br>



<?php include './components/footer.php'; ?>
