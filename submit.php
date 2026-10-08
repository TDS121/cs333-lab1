<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="style.css">
    <style>

        .container {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h1>Form Submission Results</h1>
    <nav class="site-nav">
        <a href="../">← Home</a>
        <a href="index.html">Lab 1</a>
        <a href="form.html">Form</a>
        <a href="submit.php">Submit</a>
    </nav>
    <div class="container">
        <div id="result">
            <p>Name: <?php echo htmlspecialchars($_POST['name'] ?? ''); ?></p>
            <p>Email: <?php echo htmlspecialchars($_POST['email'] ?? ''); ?></p>
            <p>Message: <?php echo htmlspecialchars($_POST['message'] ?? ''); ?></p>
        </div>
    </div>
</body>

</html>