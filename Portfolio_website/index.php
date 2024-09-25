<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of [Your Name]">
    <title>Atiqur Rahman PK Portfolio</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Navigation Section -->
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="welc.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Banner Section -->
    <section id="home" class="banner">
        <h1 style="color: #581845">Welcome to My Portfolio</h1>
        <p style="color: #900C3F ">I'm Atiqur Rahman PK, a passionate web developer and designer.</p>
        <a href="welc.php" class="cta-button">View My Work</a>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio">
        <h2>My Projects</h2>
        <div class="portfolio-container">
            <?php include 'portfolio-items.php'; ?>
            <?php foreach ($portfolioItems as $item): ?>
                <div class="portfolio-item">
                    <img src="<?= $item['image']; ?>" alt="<?= $item['title']; ?>">
                    <h3><?= $item['title']; ?></h3>
                    <p><?= $item['description']; ?></p>
                    <a href="<?= $item['link']; ?>" class="portfolio-link">View Project</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>© Atiqur Rahman PK 2024. All rights reserved.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
