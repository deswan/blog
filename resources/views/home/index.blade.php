<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Stephanie walk in street</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="app">
    <my-header></my-header>
<main id="main">
<banner></banner>
<article-list :articles_1="articles"></article-list>
<pagination :page_sum="page_sum"></pagination>
</main>
<my-footer></my-footer>
</div>
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
<script src="/js/home.js"></script>
</body>
</html>
