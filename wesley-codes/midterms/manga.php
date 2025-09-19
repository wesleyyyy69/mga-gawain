<?php
$manga_list = [
    1 => [
        "title" => "Tokyo Ghoul",
        "genre" => "dark fantasy",
        "cover" => "https://upload.wikimedia.org/wikipedia/en/e/e5/Tokyo_Ghoul_volume_1_cover.jpg",
        "description" => "A college student survives an encounter with a ghoul, only to become half-ghoul himself.",
        "chapters" => 5
    ],
    2 => [
        "title" => "Konosuba: God's Blessing on This Wonderful World!",
        "genre" => "comedy",
        "cover" => "https://books.google.com.ph/books/publisher/content?id=zE8ODQAAQBAJ&pg=PP1&img=1&zoom=3&hl=en&bul=1&sig=ACfU3U0gpf3EFrLGHBX8J7rQOR_XFL5IQQ&w=1280.jpeg",
        "description" => "A high school student dies and is reincarnated in a fantasy world, forming a dysfunctional party with a goddess, a mage, and a crusader.",
        "chapters" => 5
    ],
    3 => [
        "title" => "Jujutsu Kaisen",
        "genre" => "dark fantasy",
        "cover" => "https://preview.redd.it/volume-26-cover-hd-from-v0-ylkuv80xkmnc1.jpeg?width=640&crop=smart&auto=webp&s=942812ee626571ed8135250932ec9621e414c9b7.jpeg",
        "description" => "A high school student swallows a cursed object and becomes involved in the world of Jujutsu Sorcerers.",
        "chapters" => 5
    ],
    4 => [
        "title" => "Demon Slayer: Kimetsu no Yaiba",
        "genre" => "dark fantasy",
        "cover" => "https://upload.wikimedia.org/wikipedia/en/thumb/d/d1/Demon_Slayer_-_Kimetsu_no_Yaiba_-_Vol._1.jpeg/220px-Demon_Slayer_-_Kimetsu_no_Yaiba_-_Vol._1.jpeg",
        "description" => "A young boy seeks to avenge his family and cure his sister, who was turned into a demon.",
        "chapters" => 5
    ],
    5 => [
        "title" => "Solo Leveling",
        "genre" => "fantasy",
        "cover" => "https://upload.wikimedia.org/wikipedia/en/thumb/d/d7/Solo_Leveling_webnovel_cover.jpg/220px-Solo_Leveling_webnovel_cover.jpg",
        "description" => "In a world where hunters, humans with magical abilities, must battle deadly monsters, a weak hunter gains a unique power.",
        "chapters" => 5
    ],
    6 => [
        "title" => "Tokyo Revengers",
        "genre" => "fantasy",
        "cover" => "",
        "description" => "The story follows Takemichi's journey as he tries to rewrite destiny and save his loved ones from tragic fates.",
        "chapters" => 5
    ]
]; 
$manga_id = isset($_GET['manga']) ? (int)$_GET['manga'] : 0;

if (!isset($manga_list[$manga_id])) {
    echo "<h1>Manga not found</h1>";
    exit;
}

$manga = $manga_list[$manga_id];

// Determine the genre class for the body tag
$body_genre_class = 'genre-' . str_replace(' ', '-', $manga['genre']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $manga['title'] ?> - Chapters</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="<?= $body_genre_class ?>">

<header>
    <a href="index.php" class="logo">Manga Reader</a>
    <nav class="navbar">
        <a href="index.php?genre=all">Home</a>
        <a href="index.php?genre=fantasy">Fantasy</a>
        <a href="index.php?genre=dark fantasy">Dark Fantasy</a>
        <a href="index.php?genre=comedy">Comedy</a>
    </nav>
    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
    </div>
</header>

<section class="home">
    <a href="index.php" class="back">⬅ Back to Manga List</a>
    <div class="manga-container">
        <img src="<?= $manga['cover'] ?>" alt="<?= $manga['title'] ?>">
        <div class="manga-details">
            <h1><?= $manga['title'] ?></h1>
            <div class="genre"><?= $manga['genre'] ?></div>
            <p><?= $manga['description'] ?></p>
        <div class="chapter-list">
                <?php for($i=1; $i <= $manga['chapters']; $i++): ?>
                <a href="panels.php?manga=<?= $manga_id ?>&chapter=<?= $i ?>">Chapter <?= $i ?></a>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
<script src="main.js"></script>
</body>
</html>