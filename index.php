<?php include './admin_components/admin_header.php'; ?>

<div class="ui container">
    <!-- Menu Navigasi Atas -->
    <?php include './admin_components/admin_top-menu.php'; ?>

    <!-- Konten Utama -->
    <div class="ui stackable grid">
        <!-- Sidebar Kiri -->
        <div class="four wide column">
            <?php include './admin_components/admin_side-menu.php'; ?>
        </div>

        <!-- Konten Kanan -->
        <div class="twelve wide column">
            <div class="ui raised segment orange">
                <div class="ui divided items">
                    <div class="item">
                        <div class="image">
                            <img src="/donasi_backup/admin/img/Screen-Shot-2022-03-29-at-13.17.12-removebg-preview.png" alt="Dashboard Image" style="width: 100%; height: auto;">
                        </div>
                        <div class="content">
                            <h2 class="ui header">Dashboard Admin</h2>
                            <div class="description">
                                <p>Selamat datang di dashboard admin Anda. Gunakan sidebar untuk navigasi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grafik Donasi per Program -->
            <div class="ui raised segment">
                <h3 class="ui header">Grafik </h3>
                <div class="ui stackable grid">
                    <div class="sixteen wide column">
                        <div class="ui segment">
                            <h4 class="ui header">Grafik Donasi per Program</h4>
                            <canvas id="donationChart" style="width: 100%; height: 300px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Akses Cepat ke Fitur-Fitur Utama -->
            <div class="ui raised segment">
                <div class="ui stackable two column grid">
                    <div class="column">
                        <div class="ui segment">
                            <a href="donatur.php" class="ui large blue button">
                                <i class="users icon"></i> Manajemen Donatur
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui segment">
                            <a href="ulasan.php" class="ui large blue button">
                                <i class="comments icon"></i> Ulasan Pengguna
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include './admin_components/admin_footer.php'; ?>

<!-- Menambahkan Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Data donasi per program dari database
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "Mumtaz_Donasi";

    // Database Connection
    $conn = mysqli_connect($servername, $username, $password, $databasename);

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Query to get donation total per program
    $sql = "SELECT program, SUM(jumlah) as total_donasi
            FROM donasi
            GROUP BY program";
    $result = $conn->query($sql);

    $programs = [];
    $donations = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $programs[] = $row['program'];
            $donations[] = $row['total_donasi'];
        }
    } else {
        echo "No records found";
    }

    // Close connection
    mysqli_close($conn);
    ?>

    // JavaScript Data
    const programLabels = <?php echo json_encode($programs); ?>;
    const donationValues = <?php echo json_encode($donations); ?>;

    const donationData = {
        labels: programLabels,
        datasets: [{
            label: 'Jumlah Donasi per Program',
            data: donationValues,
            backgroundColor: 'rgba(0, 51, 102, 0.5)', // Biru tua
            borderColor: 'rgba(0, 51, 102, 1)', // Warna batas batang biru tua
            borderWidth: 2,
            hoverBackgroundColor: 'rgba(0, 51, 102, 0.7)', // Biru tua saat hover
            hoverBorderColor: 'rgba(0, 51, 102, 1)', // Warna batas saat hover biru tua
            datalabels: {
                display: true,
                color: 'black',
                anchor: 'end',
                align: 'top',
                font: {
                    weight: 'bold'
                },
                formatter: function(value) {
                    return 'Rp ' + value.toLocaleString(); // Format label data
                }
            }
        }]
    };

    // Konfigurasi grafik
    const config = {
        type: 'bar', // Jenis grafik
        data: donationData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.dataset.label + ': Rp ' + tooltipItem.raw.toLocaleString();
                        }
                    }
                },
                datalabels: {
                    display: true,
                    color: '#000',
                    anchor: 'end',
                    align: 'top',
                    font: {
                        weight: 'bold'
                    },
                    formatter: function(value) {
                        return 'Rp ' + value.toLocaleString();
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return 'Rp ' + value.toLocaleString();
                        }
                    }
                }
            }
        }
    };

    // Render grafik
    const donationChart = new Chart(
        document.getElementById('donationChart'),
        config
    );
</script>
