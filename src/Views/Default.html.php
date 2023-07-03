<!DOCTYPE html>
<html>
<head>
    <title><?= $welcomeMessage['message'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-color: #383434; /* dark brown grey */
            color: #FFFFFF; /* white */
            font-family: 'Helvetica', 'Helvetica Neue', 'Arial', 'Hiragino Kaku Gothic ProN', 'Hiragino Sans', 'Meiryo', sans-serif;
        }
        .card {
            border-color: #4AEBFF; /* intense blue */
            border-radius: 25px;
        }
        .card-body {
            color: #FFFFFF; /* white */
            background: #4b6cb7;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #182848, #4b6cb7);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #182848, #4b6cb7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .text-example {
            color: #4AEBFF !important;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1><?= $welcomeMessage['message'] ?></h1>
        <?php foreach ($welcomeMessage['documentation'] as $key => $docSection): ?>
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title"><?= ucfirst($key) ?></h5>
                    <p class="card-text"><?= $docSection['info'] ?></p>
                    <p class="card-text"><?= $docSection['usage'] ?></p>
                    <?php if (isset($docSection['example'])): ?>
                        <h6 class="card-subtitle mb-2 text-example card card-body">Example:</h6>
                        <p class="card-text"><?= $docSection['example']['modifying'] ?></p>
                        <pre class="bg-dark text-white p-2"><code><?= htmlspecialchars($docSection['example']['controller_code']) ?></code></pre>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
