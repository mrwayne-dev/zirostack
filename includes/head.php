<head>
    <meta charset="UTF-8">
    <meta name="author" content="Zirostack">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? "Zirostack" ?></title>

    <!-- Resource hints: pre-resolve Google Fonts DNS + pre-fetch critical fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="/assets/fonts/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/assets/fonts/Roboto-Bold.woff2" as="font" type="font/woff2" crossorigin>

    <?php if (!empty($useTemplateAssets)) : ?>
        <?php include INCLUDES_PATH . '/template-css.php'; ?>
    <?php endif; ?>

    <!-- Zirostack Primary Styles -->
    <link rel="stylesheet" href="/assets/css/index.css">
    <!-- Phosphor Icons -->
    <link rel="stylesheet" href="/assets/vendor/phosphor/style.css">

    <!-- Favicon -->
    <!-- <link rel="icon" href="/assets/favicon/favicon-32x32.png">
    <link rel="shortcut icon" href="/assets/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="/assets/favicon/apple-touch-icon.png">
    <link rel="manifest" href="/assets/favicon/site.webmanifest"> -->
</head>
