<div class="four wide column" id="example1">
    <style>
    .orange-container {
        background-color: darkorange;
        padding: 10px;
        border-radius: 5px;
        min-height: 120vh; /* Nilai min-height diturunkan menjadi 70vh */
        display: flex;
        flex-direction: column;
    }
    .ui.vertical.menu {
        background-color: darkorange;
        color: white;
        border: none;
        box-shadow: none;
        flex-grow: 1;
    }
    .ui.vertical.menu .item {
        color: white;
    }
    .ui.vertical.menu .item:hover,
    .ui.vertical.menu .item.active {
        background-color: white;
        color: darkorange;
    }
    .ui.vertical.menu .item i.icon {
        margin-right: 8px;
    }
    .orange-sub-container {
        background-color: darkorange;
        height: 10px;
        margin-bottom: 10px;
    }
    </style>

    <div class="orange-container">
        <div class="ui secondary vertical pointing menu">
            <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/index.php" ? "active" : "");?>" href="index.php">
                <i class="dashboard icon"></i> Dashboard
            </a>
            <div class="orange-sub-container"></div>

            <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/index.php" ? "active" : "");?>" href="../index.php">
                <i class="home icon"></i> Beranda
            </a>
            <div class="orange-sub-container"></div>

            <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/donatur.php" ? "active" : "");?>" href="donatur.php">
                <i class="users icon"></i> Donatur
            </a>
            <div class="orange-sub-container"></div>

            <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/ulasan.php" ? "active" : "");?>" href="ulasan.php">
                <i class="comments icon"></i> Ulasan
            </a>
            <div class="orange-sub-container"></div>
        </div>
    </div>
</div>
