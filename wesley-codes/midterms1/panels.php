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
<title><?= $manga['title'] ?> - Chapter <?= $chapter ?></title>
<link rel="stylesheet" href="styles.css">
<style>
body { background: #1a1a1a; color: #e0e0e0; font-family: Arial, sans-serif; text-align: center; margin: 0; padding: 0; } /* Darker background and lighter text */
a.back { display: inline-block; margin: 20px; padding: 10px 15px; background: #333333; color: white; border-radius: 6px; text-decoration: none; } /* Darker back button */
a.back:hover { background: #555555; } /* Lighter dark on hover */
.reader-container { max-width: 600px; margin: auto; display: flex; flex-direction: column; align-items: center; gap: 20px; }
.reader-container img { max-width: 100%; height: auto; border-radius: 8px; }
.controls { display: flex; justify-content: space-between; width: 100%; margin: 10px 0; }
button, select { padding: 10px 20px; font-size: 1.4rem; border-radius: 5px; border: none; cursor: pointer; background: #bb0000; color: white; } /* Darker red for buttons and select */
button:hover, select:hover { background: #880000; } /* Even darker red on hover */
</style>
</head>
<body>

<a href="index.php" class="back">⬅ Back to Menu</a>
<h1><?= $manga['title'] ?> - Chapter <?= $chapter ?></h1>

<div class="reader-container">
    <?php foreach ($pages as $page): ?>
        <img src="<?= $page ?>" alt="Manga page">
    <?php endforeach; ?>
</div>

<div class="controls">
    <?php if ($chapter > 1): ?>
        <a href="panel.php?manga=<?= $manga_id ?>&chapter=<?= $chapter-1 ?>"><button>Prev Chapter</button></a>
    <?php else: ?>
        <button disabled>Prev Chapter</button>
    <?php endif; ?>

    <select onchange="location = this.value;">
        <?php for($i=1; $i <= $manga['chapters']; $i++): ?>
            <option value="panel.php?manga=<?= $manga_id ?>&chapter=<?= $i ?>" <?= $i==$chapter?'selected':'' ?>>Chapter <?= $i ?></option>
        <?php endfor; ?>
    </select>

    <?php if ($chapter < $manga['chapters']): ?>
        <a href="panel.php?manga=<?= $manga_id ?>&chapter=<?= $chapter+1 ?>"><button>Next Chapter</button></a>
    <?php else: ?>
        <button disabled>Next Chapter</button>
    <?php endif; ?>
</div>

</body>
</html>