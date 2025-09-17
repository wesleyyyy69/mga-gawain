<?php
$manga_list = [
    1 => [
        "title" => "Tokyo Ghoul",
        "genre" => "dark fantasy",
        "cover" => "https://en.wikipedia.org/wiki/File:Tokyo_Ghoul_volume_1_cover.jpg",
        "description" => "A college student survives an encounter with a ghoul, only to become half-ghoul himself.",
        "chapters" => 5
    ],
    2 => [
        "title" => "Konosuba: God's Blessing on This Wonderful World!",
        "genre" => "comedy",
        "cover" => "https://upload.wikimedia.org/wikipedia/en/thumb/7/7c/Kono_Subarashii_Sekai_ni_Shukufuku_wo%21_light_novel_volume_1_cover.jpg/220px-Kono_Subarashii_Sekai_ni_Shukufuku_wo%21_light_novel_volume_1_cover.jpg",
        "description" => "A high school student dies and is reincarnated in a fantasy world, forming a dysfunctional party with a goddess, a mage, and a crusader.",
        "chapters" => 5
    ],
    3 => [
        "title" => "Jujutsu Kaisen",
        "genre" => "dark fantasy",
        "cover" => "https://upload.wikimedia.org/wikipedia/en/thumb/4/46/Jujutsu_Kaisen_vol_1.jpg/220px-Jujutsu_Kaisen_vol_1.jpg",
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
        "genre" => "Fantasy",
        "cover" => "",
        "description" => "The story follows Takemichi's journey as he tries to rewrite destiny and save his loved ones from tragic fates.",
        "chapters" => "5"
    ]
]; 
$manga_id = isset($_GET['manga']) ? (int)$_GET['manga'] : 0;

if (!isset($manga_list[$manga_id])) {
    echo "<h1>Manga not found</h1>";
    exit;
}

$manga = $manga_list[$manga_id];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $manga['title'] ?> - Chapters</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <a href="index.php" class="back">⬅ Back to Manga List</a>
    <div class="manga-container">
        <img src="<?= $manga['cover'] ?>" alt="<?= $manga['title'] ?>">
        <div class="manga-details">
            <h1><?= $manga['title'] ?></h1>
            <div class="genre"><?= $manga['genre'] ?></div>
            <p><?= $manga['description'] ?></p>
        <div class="chapter-list">
                <?php for($i=1; $i <= $manga['chapters']; $i++): ?>
                <a href="panel.php?manga=<?= $manga_id ?>&chapter=<?= $i ?>">Chapter <?= $i ?></a>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</body>
</html>