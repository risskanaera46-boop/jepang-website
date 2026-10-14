<?php
$wisata = [
    [
        "nama" => "Gunung Fuji",
        "deskripsi" => "Keindahan gunung ikonik Jepang.",
        "gambar" => "https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&w=900&q=80"
    ],
    [
        "nama" => "Jalanan Kyoto",
        "deskripsi" => "Jelajahi suasana tradisional Jepang.",
        "gambar" => "https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&w=900&q=80"
    ],
    [
        "nama" => "Budaya Jepang",
        "deskripsi" => "Kenali tradisi dan keindahan sakura.",
        "gambar" => "https://images.unsplash.com/photo-1522383225653-ed111181a951?auto=format&fit=crop&w=900&q=80"
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nihon - Pesona Jepang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="navbar">
    <a href="#" class="logo">日本 <span>NIHON</span></a>
    <nav>
        <a href="#home">Home</a>
        <a href="#wisata">Wisata</a>
        <a href="#budaya">Budaya</a>
        <a href="#kontak">Kontak</a>
    </nav>
</header>

<section class="hero" id="home">
    <div class="hero-content">
        <p class="subtitle">日本へようこそ — Selamat Datang</p>
        <h1>Discover the<br><span>Beauty of Japan</span></h1>
        <p>
            Temukan keindahan alam, budaya, dan tradisi
            Negeri Matahari Terbit.
        </p>
        <a href="#wisata" class="btn">Jelajahi Jepang ↗</a>
    </div>
</section>

<section class="section" id="wisata">
    <p class="eyebrow">EXPLORE JAPAN</p>
    <h2>Pesona Negeri Sakura</h2>
    <p class="description">
        Setiap sudut Jepang memiliki cerita yang menakjubkan.
    </p>

    <div class="cards">
        <?php foreach ($wisata as $tempat): ?>
            <article class="card">
                <img
                    src="<?= htmlspecialchars($tempat['gambar']) ?>"
                    alt="<?= htmlspecialchars($tempat['nama']) ?>"
                >
                <div class="card-content">
                    <h3><?= htmlspecialchars($tempat['nama']) ?></h3>
                    <p><?= htmlspecialchars($tempat['deskripsi']) ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="culture" id="budaya">
    <p class="eyebrow">JAPANESE CULTURE</p>
    <h2>美しい日本</h2>
    <p>
        Harmoni antara tradisi, alam, dan kehidupan modern
        menjadikan Jepang tempat yang istimewa.
    </p>
</section>

<footer id="kontak">
    <h3>日本 · NIHON</h3>
    <p>Dibuat dengan ❤️ untuk pecinta Jepang.</p>
    <p>&copy; <?= date("Y") ?> Nihon Website</p>
</footer>

</body>
</html>