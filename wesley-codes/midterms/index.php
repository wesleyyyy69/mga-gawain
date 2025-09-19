<?php
$title = "Manga Reader";
$site_name = "Manga Reader";

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
        "cover" => "https://static.beebom.com/wp-content/uploads/2024/11/Gojo.jpg?quality=75&strip=all.jpeg",
        "description" => "A high school student swallows a cursed object and becomes involved in the world of Jujutsu Sorcerers.",
        "chapters" => 5
    ],
    4 => [
        "title" => "Demon Slayer: Kimetsu no Yaiba",
        "genre" => "dark fantasy",
        "cover" => "https://cdn.kobo.com/book-images/086b65fc-4a24-4400-9b81-d828313958bf/353/569/90/False/demon-slayer-kimetsu-no-yaiba-vol-1.jpg",
        "description" => "A young boy seeks to avenge his family and cure his sister, who was turned into a demon.",
        "chapters" => 5
    ],
    5 => [
        "title" => "Solo Leveling",
        "genre" => "fantasy",
        "cover" => "https://cdn.kobo.com/book-images/13b9c607-87d8-45df-90dc-841025f8999e/353/569/90/False/solo-leveling-vol-1-comic.jpg",
        "description" => "In a world where hunters, humans with magical abilities, must battle deadly monsters, a weak hunter gains a unique power.",
        "chapters" => 5
    ],
    6 => [
        "title" => "Tokyo Revengers",
        "genre" => "fantasy",
        "cover" => "https://upload.wikimedia.org/wikipedia/en/b/b1/Tokyo_Revengers_volume_1_cover.jpg",
        "description" => "The story follows Takemichi's journey as he tries to rewrite destiny and save his loved ones from tragic fates.",
        "chapters" => "5"
    ]
];
$selected_genre = $_GET['genre'] ?? "all";
$search = $_GET['search'] ?? '';

// Determine the genre class for the body tag
$body_genre_class = '';
if ($selected_genre !== 'all') {
    $body_genre_class = 'genre-' . str_replace(' ', '-', $selected_genre);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $title ?></title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="<?= $body_genre_class ?>">

<header>
    <a href="index.php" class="logo"><?= $site_name ?></a>

    <nav class="navbar">
        <a href="index.php?genre=all" class="<?= ($selected_genre=='all')?'active':''; ?>">Home</a>
        <a href="index.php?genre=fantasy" class="<?= ($selected_genre=='fantasy')?'active':''; ?>">Fantasy</a>
        <a href="index.php?genre=dark fantasy" class="<?= ($selected_genre=='dark fantasy')?'active':''; ?>">Dark Fantasy</a>
        <a href="index.php?genre=comedy" class="<?= ($selected_genre=='comedy')?'active':''; ?>">Comedy</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
    </div>
    <form class="search-form" id="search-form" action="index.php" method="GET">
        <input type="text" name="search" placeholder="Search manga..." value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
</header>

<section class="home">
    <h2 class="section-title"><?= ucfirst($selected_genre) == "All" ? "Manga List" : $selected_genre . " Manga"; ?></h2>

    <div class="manga-grid">
        <?php foreach($manga_list as $id => $manga): 
            $matches_genre = ($selected_genre == "all" || $manga['genre'] == $selected_genre);
            $matches_search = ($search == '' || stripos($manga['title'], $search) !== false || stripos($manga['description'], $search) !== false);
            if($matches_genre && $matches_search):
        ?>
        <div class="manga-card">
            <img src="<?= $manga['cover'] ?>" alt="<?= $manga['title'] ?>">
            <h3><?= $manga['title'] ?></h3>
            <p><?= $manga['description'] ?></p>
            <a href="manga.php?manga=<?= $id ?>" class="btn">Read</a>
        </div>
        <?php endif; endforeach; ?>
    </div>
</section>
<script src="main.js"></script>
</body>
</html>