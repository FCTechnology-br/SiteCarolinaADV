<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Benefícios do INSS - Carolina RPM Especialista">
    <title>Carolina RPM - Benefícios do INSS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <?php $cssPath = __DIR__ . '/../../../assets/css/style.css'; ?>
    <link rel="stylesheet" href="assets/css/style.css?v=<?= file_exists($cssPath) ? filemtime($cssPath) : time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php require __DIR__ . '/../components/header.php'; ?>
    
    <main>
        <?php require __DIR__ . '/../home.php'; ?>
    </main>

    <?php require __DIR__ . '/../components/footer.php'; ?>
    
    <script src="assets/js/script.js"></script>
</body>
</html>
