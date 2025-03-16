<?php include './admin_components/admin_header.php'; ?>

<div class="ui container">
    <!-- Top Navigation Bar -->
    <?php include './admin_components/admin_top-menu.php'; ?>

    <!-- BODY Content -->
    <div class="ui grid">
        <!-- Left menu -->
        <?php include './admin_components/admin_side-menu.php'; ?>

        <!-- Right content -->
        <div class="twelve wide column">
            <h1>Donatur</h1>

            <!-- Tabel Donasi per Program -->
            <div class="ui segment">
                <h3 class="ui header">Detail Donatur</h3>
                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Program</th>
                            <th>Jumlah</th>
                            <th>Nama Donatur</th>
                            <th>Email</th>
                            <th>Kontak</th>
                            <th>Alamat</th>
                            <th>Gambar</th>
                        </tr>
                    </thead>
                    <tbody>
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

                        $sql = "SELECT * FROM donasi";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // Adjusted image path
                                $imagePath = !empty($row['gambar']) ? '/Mumtaz_Donasi/uploads/' . $row['gambar'] : 'uploads/default-gambar.jpg';
                        ?>
                                <tr>
                                    <td data-label="ID"><?php echo htmlspecialchars($row['d_id']); ?></td>
                                    <td data-label="Program"><?php echo htmlspecialchars($row['program']); ?></td>
                                    <td data-label="Jumlah"><?php echo 'Rp ' . number_format($row['jumlah'], 0, ',', '.'); ?></td>
                                    <td data-label="Nama Donatur"><?php echo htmlspecialchars($row['d_nama']); ?></td>
                                    <td data-label="Email"><?php echo htmlspecialchars($row['email']); ?></td>
                                    <td data-label="Kontak"><?php echo htmlspecialchars($row['kontak']); ?></td>
                                    <td data-label="Alamat"><?php echo htmlspecialchars($row['d_alamat']); ?></td>
                                    <td align="center"><img src="<?php echo $imagePath; ?>" alt="bukti transaksi" style="max-width: 100px;"></td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='8'>No records found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Tabel Jumlah Donasi per Program -->
            <div class="ui segment">
                <h3 class="ui header">Jumlah Donasi per Program</h3>
                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>Program</th>
                            <th>Total Jumlah Donasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Query to get donation total per program
                        $sql = "SELECT program, SUM(jumlah) as total_donasi
                                FROM donasi
                                GROUP BY program";
                        $result = $conn->query($sql);

                        $grandTotal = 0; // Initialize grand total variable

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $totalDonasi = number_format($row['total_donasi'], 0, ',', '.');
                                $grandTotal += $row['total_donasi']; // Accumulate grand total
                        ?>
                                <tr>
                                    <td data-label="Program"><?php echo htmlspecialchars($row['program']); ?></td>
                                    <td data-label="Total Jumlah Donasi"><?php echo 'Rp ' . $totalDonasi; ?></td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='2'>No records found</td></tr>";
                        }
                        ?>
                        <!-- Baris untuk Total Semua Program -->
                        <tr>
                            <td><strong>Total Semua Program</strong></td>
                            <td><strong><?php echo 'Rp ' . number_format($grandTotal, 0, ',', '.'); ?></strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Menutup koneksi database -->
            <?php mysqli_close($conn); ?>
        </div>
    </div>
</div>

</body>
</html>
