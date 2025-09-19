<?php
$manga_list = [
    1 => ["title" => "Tokyo Ghoul", "chapters" => 5],
    2 => ["title" => "Konosuba: God's Blessing on This Wonderful World!", "chapters" => 5],
    3 => ["title" => "Jujutsu Kaisen", "chapters" => 5],
    4 => ["title" => "Demon Slayer: Kimetsu no Yaiba", "chapters" => 5],
    5 => ["title" => "Solo Leveling", "chapters" => 5],
    6 => ["title" => "Tokyo Revengers", "chapters" => 5],
];

$manga_id = isset($_GET['manga']) ? (int)$_GET['manga'] : 1;
$chapter = isset($_GET['chapter']) ? (int)$_GET['chapter'] : 1;

if (!isset($manga_list[$manga_id])) {
    echo "<h1>Manga not found</h1>";
    exit;
}

$manga = $manga_list[$manga_id];

function getMangaPages($manga_id, $chapter_id) {
    $pages = [];
    // Placeholder for actual manga pages. You would replace these with real image URLs for each chapter.
    // For demonstration, I'm using a generic placeholder.
    $base_url = "https://via.placeholder.com/600x800?text=";

    if ($manga_id == 1) { // Tokyo Ghoul
        $pages[] = $base_url . "Tokyo+Ghoul+Ch" . $chapter_id . "+Page1";
        $pages[] = $base_url . "Tokyo+Ghoul+Ch" . $chapter_id . "+Page2";
    } elseif ($manga_id == 2) { // Konosuba
        $pages[] = $base_url . "Konosuba+Ch" . $chapter_id . "+Page1";
        $pages[] = $base_url . "Konosuba+Ch" . $chapter_id . "+Page2";
    } elseif ($manga_id == 3) { // Jujutsu Kaisen
        $pages[] = $base_url . "Jujutsu+Kaisen+Ch" . $chapter_id . "+Page1";
        $pages[] = $base_url . "Jujutsu+Kaisen+Ch" . $chapter_id . "+Page2";
    } elseif ($manga_id == 4) { // Demon Slayer
        $pages[] = $base_url . "Demon+Slayer+Ch" . $chapter_id . "+Page1";
        $pages[] = $base_url . "Demon+Slayer+Ch" . $chapter_id . "+Page2";
    } elseif ($manga_id == 5) { // Solo Leveling
        $pages[] = $base_url . "Solo+Leveling+Ch" . $chapter_id . "+Page1";
        $pages[] = $base_url . "Solo+Leveling+Ch" . $chapter_id . "+Page2";
    } elseif ($manga_id == 6) { // Tokyo Revengers
        $pages[] = $base_url . "Tokyo+Revengers+Ch" . $chapter_id . "+Page1";
        $pages[] = $base_url . "Tokyo+Revengers+Ch" . $chapter_id . "+Page2";
    }
    return $pages;
}

$pages = getMangaPages($manga_id, $chapter);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $manga['title'] ?> - Chapter <?= $chapter ?></title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

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
<a href="manga.php?manga=<?= $manga_id ?>" class="back">⬅ Back to <?= $manga['title'] ?></a>
<h1><?= $manga['title'] ?> - Chapter <?= $chapter ?></h1>

<div class="reader-container">
    <?php foreach ($pages as $page): ?>
        <img src="<?= $page ?>" alt="Manga page">
    <?php endforeach; ?>
</div>

<div class="controls">
    <?php if ($chapter > 1): ?>
        <a href="panels.php?manga=<?= $manga_id ?>&chapter=<?= $chapter-1 ?>"><button>Prev Chapter</button></a>
    <?php else: ?>
        <button disabled>Prev Chapter</button>
    <?php endif; ?>

    <select onchange="location = this.value;">
        <?php for($i=1; $i <= $manga['chapters']; $i++): ?>
            <option value="panels.php?manga=<?= $manga_id ?>&chapter=<?= $i ?>" <?= $i==$chapter?'selected':'' ?>>Chapter <?= $i ?></option>
        <?php endfor; ?>
    </select>

    <?php if ($chapter < $manga['chapters']): ?>
        <a href="panels.php?manga=<?= $manga_id ?>&chapter=<?= $chapter+1 ?>"><button>Next Chapter</button></a>
    <?php else: ?>
        <button disabled>Next Chapter</button>
    <?php endif; ?>
</div>

</section>
<script src="main.js"></script>
</body>
</html>