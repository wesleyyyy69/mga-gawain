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
        "cover" => "https://temp.compsci88.com/cover/normal/01J76XYAQ48RHVHTHZ7XBBAA4Z.webp",
        "description" => "A high school student dies and is reincarnated in a fantasy world, forming a dysfunctional party with a goddess, a mage, and a crusader.",
        "chapters" => 3
    ],
    3 => [
        "title" => "Jujutsu Kaisen",
        "genre" => "dark fantasy",
        "cover" => "https://static.beebom.com/wp-content/uploads/2024/11/Gojo.jpg?quality=75&strip=all.jpeg",
        "description" => "A high school student swallows a cursed object and becomes involved in the world of Jujutsu Sorcerers.",
        "chapters" => 3
    ],
    4 => [
        "title" => "Demon Slayer: Kimetsu no Yaiba",
        "genre" => "dark fantasy",
        "cover" => "https://cdn.kobo.com/book-images/086b65fc-4a24-4400-9b81-d828313958bf/353/569/90/False/demon-slayer-kimetsu-no-yaiba-vol-1.jpg",
        "description" => "A young boy seeks to avenge his family and cure his sister, who was turned into a demon.",
        "chapters" => 3
    ],
    5 => [
        "title" => "Solo Leveling",
        "genre" => "fantasy",
        "cover" => "https://cdn.kobo.com/book-images/13b9c607-87d8-45df-90dc-841025f8999e/353/569/90/False/solo-leveling-vol-1-comic.jpg",
        "description" => "In a world where hunters, humans with magical abilities, must battle deadly monsters, a weak hunter gains a unique power.",
        "chapters" => 3
    ],
    6 => [
        "title" => "Tokyo Revengers",
        "genre" => "fantasy",
        "cover" => "https://upload.wikimedia.org/wikipedia/en/b/b1/Tokyo_Revengers_volume_1_cover.jpg",
        "description" => "The story follows Takemichi's journey as he tries to rewrite destiny and save his loved ones from tragic fates.",
        "chapters" => 3
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