<!DOCTYPE html>
<title> My Blog</title>
<link rel="stylesheet" href="/app.css">
<body>
<article>
    <h1>

        <a href="/posts/<?= $post->slug; ?>">

            <?= $post->title; ?>
        </a>
    </h1>
    <div><?= $post->body; ?></div>
</article>
<a href="/"> homepage</a>
</body>
</html>
