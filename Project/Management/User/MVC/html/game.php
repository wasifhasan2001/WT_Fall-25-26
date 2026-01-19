<?php
session_start();

// Get data from session
$name = $_SESSION['name'] ?? null;
$alerts = $_SESSION['alerts'] ?? [];
$active_form = $_SESSION['active_form'] ?? '';

// Only clear alerts and active form, KEEP the $name session for the account page
unset($_SESSION['alerts']);
unset($_SESSION['active_form']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game BD | Home</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
     <header>
        <a href="index.php" class="logo">Game BD</a>
        
        <nav>
            <a href="../HTML/index.php">Home</a>
            <a href="game.php">Games</a>
            <a href="../HTML/about.php">About</a>
        </nav>

        <div class="user-auth">
            <?php if ($name): ?>
            <div class="profile-box">
                <div class="avatar-circle"><?= strtoupper($name[0]); ?></div>
                <div class="dropdown">
                    <a href="account.php">My Account</a>
                    <a href="../PHP/logout.php">Logout</a>
                </div>
            </div> 
            <?php else: ?>  
            <button type="button" class="login-btn-modal">Login</button>
            <?php endif; ?>
        </div>
     </header>

   <section class="game-page-section">
    
    
    <div class="Title">
        <h2 class="section-title">Popular Games</h2>
    </div> 

    <div class="game-grid">
        <div class="game-card">
            <img src="../IMAGE/GTAV.jpg" alt="GTA V">
            <h3>GTA V</h3>
            <p>Action • Open World</p>
            <button class="play-btn">Buy</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/V.jpg" alt="Valorant">
            <h3>Valorant</h3>
            <p>FPS • Multiplayer</p>
            <button class="play-btn">Buy</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/74984-Cyberpunk-2077-4k-Ultra-HD-Wallpaper.jpg" alt="Cyberpunk">
            <h3>Cyberpunk</h3>
            <p>RPG • Sci-Fi</p>
            <button class="play-btn">Buy</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/spider-man.jpg" alt="GTA V">
            <h3>Spider-man Remaster</h3>
            <p>Action • Open World</p>
            <button class="play-btn">Buy</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/god-of-war.jpg" alt="Valorant">
            <h3>God Of War</h3>
            <p>Action • Open World</p>
            <button class="play-btn">Buy</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/ER.jpg" alt="Cyberpunk">
            <h3>Elden Ring</h3>
            <p>RPG • Fantasy</p>
            <button class="play-btn">Buy</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/BMW.jpg" alt="GTA V">
            <h3>Black Myth Wukong</h3>
            <p>Action • RPG • Fantasy</p>
            <button class="play-btn">Buy</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/WUWA.jpg" alt="Valorant">
            <h3>Wuthering Wave</h3>
            <p>Open World • Multiplayer</p>
            <button class="play-btn">Free</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/26.jpg" alt="Cyberpunk">
            <h3>FC 26</h3>
            <p>Multiplayer • Sport</p>
            <button class="play-btn">Buy</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/HL.jpg" alt="GTA V">
            <h3>Howart Legacy</h3>
            <p>Action • Open World • Fantasy</p>
            <button class="play-btn">Buy</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/RDR2.jpg" alt="Valorant">
            <h3>Red Dead Redemption 2</h3>
            <p>RPG • Multiplayer • Open World</p>
            <button class="play-btn">Buy</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/HZD.jpg" alt="Cyberpunk">
            <h3>Horizon Zero Dawn</h3>
            <p>RPG • Fantasy • Open World</p>
            <button class="play-btn">Buy</button>
        </div>
    </div>

        <div class="Title">
        <h2 class="section-title">Free Games</h2>
    </div> 

    <div class="game-grid">
        <div class="game-card">
            <img src="../IMAGE/WUWA.jpg" alt="GTA V">
            <h3>Wuthering Wave</h3>
            <p>Open World • Multiplayer</p>
            <button class="play-btn">Free</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/Rivals.jpg" alt="Valorant">
            <h3>Marvel Rivals</h3>
            <p>Multiplayer</p>
            <button class="play-btn">Free</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/genshin-impact.jpg" alt="Cyberpunk">
            <h3>Genshin Impact</h3>
            <p>Open World • Multiplayer</p>
            <button class="play-btn">Free</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/fortnite.jpg" alt="GTA V">
            <h3>Fortnite</h3>
            <p>Multiplayer</p>
            <button class="play-btn">Free</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/PUBG.jpg" alt="Valorant">
            <h3>PUBG</h3>
            <p>Multiplayer</p>
            <button class="play-btn">Free</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/warframe.jpg" alt="Cyberpunk">
            <h3>Warframe</h3>
            <p>RPG • Shooting</p>
            <button class="play-btn">Free</button>
        </div>

        <div class="game-card">
            <img src="../IMAGE/WWM.jpg" alt="GTA V">
            <h3>Where Wind Meet</h3>
            <p>RPG • Fantasy • Multiplayer</p>
            <button class="play-btn">Free</button>
        </div>
        
        <div class="game-card">
            <img src="../IMAGE/A9.jpg" alt="GTA V">
            <h3>Asphalt </h3>
            <p>Racing</p>
            <button class="play-btn">Free</button>
        </div>



    </div>


    
</section>

     <?php if (!empty($alerts)): ?>
     <div class="alert-box">
        <?php foreach ($alerts as $a): ?>
        <div class="alert <?= $a['type']; ?>">
            <i class='bx <?= $a['type'] === 'success' ? 'bxs-check-circle' : 'bxs-x-circle'; ?>'></i> 
            <span><?= $a['message']; ?></span>
        </div>
        <?php endforeach; ?>
     </div>
     <?php endif; ?>

     <div class="auth-modal <?= $active_form === 'register' ? 'show slide' : ($active_form === 'login' ? 'show' : ''); ?>">
        <button type="button" class="close-btn-modal"><i class='bx bxs-x-circle'></i> </button>
        
        <div class="form-box login">
            <h2>Login</h2>
            <form action="auth_process.php" method="POST">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i> 
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock'></i> 
                </div>
                <button type="submit" name="login_btn" class="btn">Login</button>
                <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
            </form>
        </div>

        <div class="form-box register">
            <h2>Register</h2>
            <form action="auth_process.php" method="POST">
                <div class="input-box">
                    <input type="text" name="name" placeholder="Name" required>
                    <i class='bx bxs-user'></i> 
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i> 
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock'></i> 
                </div>
                <button type="submit" name="register_btn" class="btn">Register</button>
                <p>Already have an account? <a href="#" class="login-link">Login</a></p>
            </form>
        </div>
     </div>

     <script src="../JS/script.js"></script>
</body>
</html>