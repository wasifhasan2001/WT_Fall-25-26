<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('Location: ../HTML/index.php');
    exit();
}
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="account-body">
    <header class="account-header">
        <a href="index.php" class="logo">Game BD</a>
        <nav>
            <a href="../HTML/index.php">Home</a>
            <a href="../HTML/game.php">Games</a>
            <a href="../HTML/about.php">About</a>
        </nav>
        <div class="user-auth">
            <button type="button" id="logoutBtn" class="login-btn-modal">Logout</button>
        </div>
    </header>

    <div class="dashboard-wrapper">
        <aside class="profile-sidebar">
            <div class="avatar-large"><?= strtoupper($name[0]); ?></div>
            <h2 style="text-align:center;"><?= htmlspecialchars($name); ?></h2>
            
            <div class="info-group">
                <h3><i class='bx bxs-user'></i> Personal Info</h3>
                <p>Email: user@example.com</p>
                <p>Joined: Jan 2024</p>
            </div>

            <div class="info-group">
                <h3><i class='bx bxs-map'></i> Address</h3>
                <p>123 Gaming St, Dhaka, Bangladesh</p>
            </div>
        </aside>

        <main class="dashboard-content">
            <section class="dashboard-section">
                <h3><i class='bx bxs-trophy' style="color:gold;"></i> Recent Achievements</h3>
                <ul class="achievement-list">
                    <li><i class='bx bxs-medal'></i> First Win</li>
                    <li><i class='bx bxs-hot'></i> 10h Streak</li>
                    <li><i class='bx bxs-star'></i> MVP</li>
                </ul>
            </section>

            <section class="dashboard-section">
                <h3><i class='bx bxs-game'></i> My Games</h3>
                <div class="game-item">
                    <img src="../IMAGE/GTAV.jpg" alt="GTA V">
                    <div>
                        <h4>GTA V</h4>
                        <p>Played: 6 Hours</p>
                    </div>

                    <img src="../IMAGE/A9.jpg" alt="GTA V">
                    <div>
                        <h4>Asphalt</h4>
                        <p>Played: 8 Hours</p>
                    </div>

                    <img src="../IMAGE/ER.jpg" alt="GTA V">
                    <div>
                        <h4>Elden Ring</h4>
                        <p>Played: 12 Hours</p>
                    </div>

                </div>
            </section>
        </main>
    </div>
</body>
</html>