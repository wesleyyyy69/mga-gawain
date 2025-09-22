<?php
$manga_list = [
    1 => ["title" => "Tokyo Ghoul", "chapters" => 5],
    2 => ["title" => "Konosuba: God's Blessing on This Wonderful World!", "chapters" => 3],
    3 => ["title" => "Jujutsu Kaisen", "chapters" => 3],
    4 => ["title" => "Demon Slayer: Kimetsu no Yaiba", "chapters" => 3],
    5 => ["title" => "Solo Leveling", "chapters" => 3],
    6 => ["title" => "Tokyo Revengers", "chapters" => 3],
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

    // --- Tokyo Ghoul ---
    if ($manga_id == 1) {
        if ($chapter_id == 1) {
            $pages = [
                "https://tgmanga.com/wp-content/uploads/2023/12/4.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/5.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/6.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/7.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/8.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/9.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/10.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/11.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/12.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/13.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/14.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/15.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/16.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/17.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/18.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/19.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/20.jpg",
                "https://tgmanga.com/wp-content/uploads/2023/12/21.jpg",
            ];
        } elseif ($chapter_id == 2) {
            $pages = [
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390837_301_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390837_28_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390838_559_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390838_325_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390838_812_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390838_592_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390839_876_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390839_477_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390839_906_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390839_971_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390839_13_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390840_885_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390840_849_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390840_477_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390840_424_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390841_655_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
               "https://tgmanga.com/wp-content/uploads/2023/12/1703390841_87_aHR0cHM6Ly90b2t5b2dob3VsLnh5ei8=.jpeg",
            ];
        } elseif ($chapter_id == 3) {
            $pages = [
                "images/ch61_1.jpg" ,
                "images/ch61_2.jpg",
                "images/ch61_3.jpg",
                "images/ch61_4.jpg",
                "images/ch61_5.jpg",
                "images/ch61_6.jpg",
                "images/ch61_7.jpg",
                "images/ch61_8.jpg",
                "images/ch61_9.jpg",
                "images/ch61_10.jpg",
                "images/ch61_11.jpg",
                "images/ch61_12.jpg",
                "images/ch61_12.jpg",
                "images/ch61_13.jpg",
                "images/ch61_14.jpg",
                "images/ch61_15.jpg",
                "images/ch61_16.jpg",
                "images/ch61_17.jpg",
                "images/ch61_18.jpg",
            ];
        } elseif ($chapter_id == 4) {
            $pages = [
                "images/ch62_1.jpg" ,
                "images/ch62_2.jpg",
                "images/ch62_3.jpg",
                "images/ch62_4.jpg",
                "images/ch62_5.jpg",
                "images/ch62_6.jpg",
                "images/ch62_7.jpg",
                "images/ch62_8.jpg",
                "images/ch62_9.jpg",
                "images/ch62_10.jpg",
                "images/ch62_11.jpg",
                "images/ch62_12.jpg",
                "images/ch62_12.jpg",
                "images/ch62_13.jpg",
                "images/ch62_14.jpg",
                "images/ch62_15.jpg",
                "images/ch62_16.jpg",
                "images/ch62_17.jpg",
                "images/ch62_18.jpg",
            ];
        } elseif ($chapter_id == 5) {
            $pages = [
                "images/ch63_1.jpg" ,
                "images/ch63_2.jpg",
                "images/ch63_3.jpg",
                "images/ch63_4.jpg",
                "images/ch63_5.jpg",
                "images/ch63_6.jpg",
                "images/ch63_7.jpg",
                "images/ch63_8.jpg",
                "images/ch63_9.jpg",
                "images/ch63_10.jpg",
                "images/ch63_11.jpg",
                "images/ch63_12.jpg",
                "images/ch63_12.jpg",
                "images/ch63_13.jpg",
                "images/ch63_14.jpg",
                "images/ch63_15.jpg",
                "images/ch63_16.jpg",
                "images/ch63_17.jpg",
                "images/ch63_18.jpg",
            ];
        }
    }

    // --- Konosuba ---
    if ($manga_id == 2) {
        if ($chapter_id == 1) {
            $pages = [
              "https://n15.mbdny.org/media/7006/946/609f5c06ddae63ad23099649/6574468_1100_1650_90748.webp",
              "https://n08.mbzcp.org/media/7006/946/609f5c06ddae63ad23099649/6574472_2200_1650_228060.webp",
              "https://n24.mbhiz.org/media/7006/946/609f5c06ddae63ad23099649/6574471_1100_1650_182460.webp",
              "https://n03.mbcej.org/media/7006/946/609f5c06ddae63ad23099649/6574476_1100_1650_139852.webp",
              "https://n02.mbxma.org/media/7006/946/609f5c06ddae63ad23099649/6574474_1100_1650_196968.webp",
              "https://n01.mbwbm.org/media/7006/946/609f5c06ddae63ad23099649/6574477_1100_1650_137834.webp",
              "https://n05.mbimg.org/media/7006/946/609f5c06ddae63ad23099649/6574480_1100_1650_160240.webp",
              "https://n01.mbuul.org/media/7006/946/609f5c06ddae63ad23099649/6574482_1100_1650_199846.webp",
              "https://n10.mbdny.org/media/7006/946/609f5c06ddae63ad23099649/6574484_1100_1650_173464.webp",
              "https://n28.mbtba.org/media/7006/946/609f5c06ddae63ad23099649/6574403_1100_1650_188888.webp",
              "https://n26.mbcej.org/media/7006/946/609f5c06ddae63ad23099649/6574405_1100_1650_189396.webp",
              "https://n04.mbdny.org/media/7006/946/609f5c06ddae63ad23099649/6574407_1100_1650_227022.webp",
              "https://n18.mbfpu.org/media/7006/946/609f5c06ddae63ad23099649/6574408_1100_1650_195380.webp",
              "https://n27.mbrtz.org/media/7006/946/609f5c06ddae63ad23099649/6574409_1100_1650_156434.webp",
              "https://n15.mbwbm.org/media/7006/946/609f5c06ddae63ad23099649/6574413_1100_1650_175768.webp",
              "https://n01.mbwww.org/media/7006/946/609f5c06ddae63ad23099649/6574414_1100_1650_225480.webp",
              "https://k02.mbimg.org/media/7006/946/609f5c06ddae63ad23099649/6574416_1100_1650_185826.webp",
              "https://n28.mbznp.org/media/7006/946/609f5c06ddae63ad23099649/6574418_1100_1650_217912.webp",
              "https://n18.mbuul.org/media/7006/946/609f5c06ddae63ad23099649/6574420_1100_1650_174424.webp",
              "https://n06.mbwbm.org/media/7006/946/609f5c06ddae63ad23099649/6574422_1100_1650_187286.webp",
              "https://n10.mbtba.org/media/7006/946/609f5c06ddae63ad23099649/6574424_1100_1650_156356.webp",
              "https://n05.mbdny.org/media/7006/946/609f5c06ddae63ad23099649/6574426_1100_1650_143142.webp",
              "https://n22.mbwbm.org/media/7006/946/609f5c06ddae63ad23099649/6574428_1100_1650_199748.webp",
              "https://k02.mbqtj.org/media/7006/946/609f5c06ddae63ad23099649/6574430_1100_1650_199374.webp",
              "https://n22.mbimg.org/media/7006/946/609f5c06ddae63ad23099649/6574433_1100_1650_218196.webp",
              "https://k03.mbwbm.org/media/7006/946/609f5c06ddae63ad23099649/6574435_1100_1650_203154.webp",
              "https://k00.mbqgu.org/media/7006/946/609f5c06ddae63ad23099649/6574438_1100_1650_206986.webp",
              "https://k02.mbtba.org/media/7006/946/609f5c06ddae63ad23099649/6574442_1100_1650_143210.webp",
              "https://n03.mbhiz.org/media/7006/946/609f5c06ddae63ad23099649/6574441_1100_1650_211486.webp",
              "https://n24.mbeaj.org/media/7006/946/609f5c06ddae63ad23099649/6574444_1100_1650_175792.webp",
              "https://n00.mbxma.org/media/7006/946/609f5c06ddae63ad23099649/6574448_1100_1650_176186.webp",
              "https://n15.mbqtj.org/media/7006/946/609f5c06ddae63ad23099649/6574447_1100_1650_151744.webp",
              "https://k02.mbtmv.org/media/7006/946/609f5c06ddae63ad23099649/6574451_1100_1650_204704.webp",
              "https://k09.mbfpu.org/media/7006/946/609f5c06ddae63ad23099649/6574401_2200_1650_503398.webp",
              "https://n08.mbznp.org/media/7006/946/609f5c06ddae63ad23099649/6574452_1100_1650_190314.webp",
              "https://k06.mbwnp.org/media/7006/946/609f5c06ddae63ad23099649/6574454_1100_1650_168364.webp",
              "https://n11.mbxma.org/media/7006/946/609f5c06ddae63ad23099649/6574456_1100_1650_159806.webp",
            ];
        } elseif ($chapter_id == 2) {
            $pages = [
              "https://k03.mbrtz.org/media/7006/966/609f5cbaddae63ad23099669/6574514_1100_1650_210766.webp",
              "https://k07.mbcej.org/media/7006/966/609f5cbaddae63ad23099669/6574515_1100_1650_132216.webp",
              "https://n01.mbtba.org/media/7006/966/609f5cbaddae63ad23099669/6574516_1100_1650_216052.webp",
             "https://k07.mbwww.org/media/7006/966/609f5cbaddae63ad23099669/6574517_1100_1650_269802.webp",
             "https://n19.mbfpu.org/media/7006/966/609f5cbaddae63ad23099669/6574518_1100_1650_190922.webp",
             "https://n07.mbfpu.org/media/7006/966/609f5cbaddae63ad23099669/6574519_1100_1650_200760.webp",
             "https://n26.mbwww.org/media/7006/966/609f5cbaddae63ad23099669/6574520_1100_1650_181090.webp",
             "https://n23.mbwww.org/media/7006/966/609f5cbaddae63ad23099669/6574521_1100_1650_222784.webp",
             "https://n07.mbwww.org/media/7006/966/609f5cbaddae63ad23099669/6574522_1100_1650_186000.webp",
             "https://n29.mbrtz.org/media/7006/966/609f5cbaddae63ad23099669/6574523_1100_1650_134996.webp",
             "https://n28.mbqgu.org/media/7006/966/609f5cbaddae63ad23099669/6574524_1100_1650_155116.webp",
             "https://n07.mbqgu.org/media/7006/966/609f5cbaddae63ad23099669/6574525_1100_1650_177116.webp",
             "https://n04.mbxma.org/media/7006/966/609f5cbaddae63ad23099669/6574526_1100_1650_173794.webp",
             "https://k06.mbwbm.org/media/7006/966/609f5cbaddae63ad23099669/6574527_1100_1650_222004.webp", 
             "https://n27.mbdny.org/media/7006/966/609f5cbaddae63ad23099669/6574528_1100_1650_182502.webp",
             "https://n07.mbwbm.org/media/7006/966/609f5cbaddae63ad23099669/6574499_1100_1650_191820.webp",
             "https://k00.mbopg.org/media/7006/966/609f5cbaddae63ad23099669/6574500_1100_1650_150612.webp",
             "https://n15.mbznp.org/media/7006/966/609f5cbaddae63ad23099669/6574501_1100_1650_135378.webp",
             "https://n23.mbrtz.org/media/7006/966/609f5cbaddae63ad23099669/6574502_1100_1650_188786.webp",
             "https://k00.mbxma.org/media/7006/966/609f5cbaddae63ad23099669/6574503_1100_1650_154222.webp",
             "https://k03.mbdny.org/media/7006/966/609f5cbaddae63ad23099669/6574504_1100_1650_201046.webp",
             "https://n12.mbtmv.org/media/7006/966/609f5cbaddae63ad23099669/6574505_1100_1650_196216.webp",
             "https://n16.mbzcp.org/media/7006/966/609f5cbaddae63ad23099669/6574506_1100_1650_225444.webp",
             "https://n19.mbimg.org/media/7006/966/609f5cbaddae63ad23099669/6574507_1100_1650_196688.webp",
             "https://n11.mbzcp.org/media/7006/966/609f5cbaddae63ad23099669/6574508_1100_1650_191176.webp",
             "https://k00.mbuul.org/media/7006/966/609f5cbaddae63ad23099669/6574509_1100_1650_252516.webp",
             "https://n17.mbxma.org/media/7006/966/609f5cbaddae63ad23099669/6574510_1100_1650_202786.webp",
             "https://k00.mbqtj.org/media/7006/966/609f5cbaddae63ad23099669/6574511_1100_1650_152206.webp",
             "https://n26.mbcej.org/media/7006/966/609f5cbaddae63ad23099669/6574512_1100_1650_182634.webp",
             "https://k02.mbcej.org/media/7006/966/609f5cbaddae63ad23099669/6574513_1100_1650_165912.webp",
            ];
         } elseif ($chapter_id == 3) {
            $pages = [
                "https://n17.mbqtj.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574544_1100_1650_284908.webp",
                "https://k01.mbzcp.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574545_1100_1650_188474.webp",
                "https://n28.mbwbm.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574546_1100_1650_223648.webp",
                "https://n03.mbuul.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574547_1100_1650_173204.webp",
                "https://n02.mbwbm.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574548_1100_1650_182270.webp",
                "https://n25.mbmyj.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574549_1100_1650_178640.webp",
                "https://k07.mbrtz.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574550_1100_1650_184052.webp",
                "https://n02.mbeaj.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574551_1100_1650_245946.webp",
                "https://n09.mbfpu.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574552_1100_1650_213790.webp",
                "https://n06.mbrtz.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574553_1100_1650_174438.webp", 
                "https://n14.mbrtz.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574554_1100_1650_218258.webp",
                "https://n02.mbdny.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574556_1100_1650_239622.webp",
                "https://n15.mbwbm.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574555_1100_1650_228894.webp",
                "https://n03.mbqgu.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574557_1100_1650_197538.webp",
                "https://n12.mbxma.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574558_1100_1650_248212.webp",
                "https://n24.mbtmv.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574529_1100_1650_251266.webp",
                "https://n15.mbqgu.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574530_1100_1650_273972.webp",
                "https://n19.mbqgu.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574531_1100_1650_230380.webp",
                "https://n24.mbhiz.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574532_1100_1650_251826.webp",
                "https://n30.mbdny.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574533_1100_1650_225104.webp",
                "https://n00.mbznp.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574534_1100_1650_225630.webp",
                "https://n26.mbcej.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574535_1100_1650_179022.webp",
                "https://n29.mbtmv.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574536_1100_1650_227410.webp",
                "https://n24.mbqtj.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574537_1100_1650_233978.webp",
                "https://n27.mbxma.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574538_1100_1650_191544.webp",
                "https://k02.mbmyj.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574539_1100_1650_238254.webp",
                "https://n30.mbwbm.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574540_1100_1650_196536.webp",
                "https://n28.mbxma.org/media/7006/e92/609f5cee27b34bad0a9b229e/6574541_1100_1650_157326.webp",
         ];
        }
        
        
       
    }

   if ($manga_id == 3) {
        if ($chapter_id == 1) {
            $pages = [
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_1.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_2.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_3.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_4.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_5.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_6.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_7.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_8.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_9.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_10.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_11.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_12.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_13.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_14.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_15.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_16.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_17.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/03d9999bfd6cf04d8d4b9509f3810fe8/jujutsu_kaisen_14_18.jpg",

            ];
        } elseif ($chapter_id == 2) {
            $pages = [
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_1.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_2.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_3.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_4.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_5.jpg",
                 "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_6.jpg",
                 "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_7.jpg",
                  "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_8.jpg",
             "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_9.jpg",
              "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_10.jpg",
              "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_11.jpg",
              "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_12.jpg",
              "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_13.jpg",
              "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_14.jpg",
             "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_15.jpg",
             "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_16.jpg",
             "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/ea1ec88535d098db615df0bf1f7d4b06/jujutsu_kaisen_15_17.jpg",
            ];
        } elseif ($chapter_id == 3) {
            $pages = [
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_1.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_2.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_3.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_4.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_5.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_6.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_7.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_8.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_9.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_10.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_11.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_12.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_13.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_14.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_15.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_16.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_17.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_18.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_19.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dbd5de8158e9/f2368bc284322eb223a06369edcc9318/jujutsu_kaisen_16_20.jpg",
            ];
        }
    }

    // --- Demon Slayer (3 chapters only) ---
    if ($manga_id == 4) {
        if ($chapter_id == 1) {
            $pages = [
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_2.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_3.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_4.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_5.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_6.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_7.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_8.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_9.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_10.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_11.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_12.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_13.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_14.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_15.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_16.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_17.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_18.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_19.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_20.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_21.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_22.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_23.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_24.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_25.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_26.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_27.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_28.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_28.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_29.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_30.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_31.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_32.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_33.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_34.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_35.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_36.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_37.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_38.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_39.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_40.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_41.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_42.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_43.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_44.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_45.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_46.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_47.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_48.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_49.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e1806a8bcada9992cb089acc5500f01a/kimetsu_no_yaiba_1_50.jpg",
            ];
        } elseif ($chapter_id == 2) {
            $pages = [
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_1.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_2.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_3.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_4.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_5.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_6.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_7.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_8.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_9.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_10.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_11.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_12.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_13.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_14.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_15.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_16.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_17.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_18.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_19.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_20.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_21.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_22.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_23.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_24.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/70bd9608ec93e798e45c28604f2b0fa2/kimetsu_no_yaiba_2_25.jpg",
            ];
        } elseif ($chapter_id == 3) {
            $pages = [
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_1.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_2.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_3.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_4.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_5.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_6.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_7.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_8.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_9.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_10.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_11.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_12.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_13.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_14.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_15.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_16.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_17.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_18.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_19.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_20.jpg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_21.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_22.jpg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5db9527803152/e3d6641d280f0c668f79dee67f920226/kimetsu_no_yaiba_3_23.jpg",

            ];
        }
    }

    // --- Solo Leveling (3 chapters only) ---
    if ($manga_id == 5) {
        if ($chapter_id == 1) {
            $pages = [
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_1.jpg",
                 "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_2.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_3.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_4.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_5.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_6.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_7.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_8.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_9.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_10.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_11.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_12.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_13.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_14.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/ae262fed0c1d8a95d98c3baf275d0af5/solo_leveling_1_15.jpg",
            ];
        } elseif ($chapter_id == 2) {
            $pages = [
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/3065ac08fdf7abb65412b9e514f15ac9/solo_leveling_2_2.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/3065ac08fdf7abb65412b9e514f15ac9/solo_leveling_2_3.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/3065ac08fdf7abb65412b9e514f15ac9/solo_leveling_2_4.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/3065ac08fdf7abb65412b9e514f15ac9/solo_leveling_2_5.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/3065ac08fdf7abb65412b9e514f15ac9/solo_leveling_2_6.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/3065ac08fdf7abb65412b9e514f15ac9/solo_leveling_2_7.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/3065ac08fdf7abb65412b9e514f15ac9/solo_leveling_2_8.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/3065ac08fdf7abb65412b9e514f15ac9/solo_leveling_2_9.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/3065ac08fdf7abb65412b9e514f15ac9/solo_leveling_2_10.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/3065ac08fdf7abb65412b9e514f15ac9/solo_leveling_2_11.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/3065ac08fdf7abb65412b9e514f15ac9/solo_leveling_2_12.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/3065ac08fdf7abb65412b9e514f15ac9/solo_leveling_2_13.jpg",
            ];
        } elseif ($chapter_id == 3) {
            $pages = [
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_1.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_2.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_3.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_4.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_5.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_6.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_7.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_8.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_9.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_10.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_11.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_12.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_13.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_14.jpg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5dba5921b610c/f3b036eeeb434f4274d6075a8b2930a7/solo_leveling_3_15.jpg",
               
            ];
        }
    }

    // --- Tokyo Revengers (3 chapters only) ---
    if ($manga_id == 6) {
        if ($chapter_id == 1) {
            $pages = [
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/6.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/11.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/12.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/13.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/14.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/14.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/15.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/16.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/17.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/18.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/19.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/20.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/21.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/22.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/23.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/24.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/25.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/26.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/27.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/28.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/29.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/30.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/31.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/32.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/33.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/34.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/35.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/36.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/37.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/38.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/39.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/40.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/41.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/42.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/43.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/44.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/45.jpeg",
               "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/46.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/47.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/48.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/49.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/50.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/51.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/52.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/53.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/54.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/55.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/56.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/57.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/58.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/59.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/60.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/61.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/62.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/63.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/64.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/65.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7237309968fdda1f6020bda93cc45eed/67.jpeg",

            ];
        } elseif ($chapter_id == 2) {
            $pages = [
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/3.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/4.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/5.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/6.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/7.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/8.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/9.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/10.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/11.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/12.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/13.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/14.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/15.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/16.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/17.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/18.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/19.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/20.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/21.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/22.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/23.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/24.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/25.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/26.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/27.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/28.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/29.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/30.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/31.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/32.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/33.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/34.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/35.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/36.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/37.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/38.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/39.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/40.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/41.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/42.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/b12d35914ac7514994a42b6552681440/43.jpeg",
            ];
        } elseif ($chapter_id == 3) {
            $pages = [
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/3.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/4.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/5.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/6.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/7.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/8.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/9.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/10.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/11.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/12.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/13.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/14.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/15.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/16.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/17.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/18.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/19.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/20.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/21.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/22.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/23.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/24.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/25.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/26.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/27.jpeg",
                "https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_6130f44b2cdec/7326e8bc4eef0dc61331f0021d729310/28.jpeg",
            ];
        }
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
