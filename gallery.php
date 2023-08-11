<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            margin-top: 30px;
            text-align: center;
            color: darkorange;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1000px;
            margin: 0 auto;
        }

        .image {
            width: 250px;
            height: 250px;
            margin: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .image:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>
<?php include 'header.php'; ?>

    <h1>Image Gallery</h1>
    <hr>
    <br>
    <div class="gallery">
        <img class="image" src="the.jpg" alt="Image 1">
        <img class="image" src="the.jpg" alt="Image 2">
        <img class="image" src="the.jpg" alt="Image 3">
        <img class="image" src="the.jpg" alt="Image 4">
        <img class="image" src="the.jpg" alt="Image 5">
        <img class="image" src="the.jpg" alt="Image 6">
        <img class="image" src="the.jpg" alt="Image 7">
        <img class="image" src="the.jpg" alt="Image 8">
        <img class="image" src="the.jpg" alt="Image 8">
        
    </div>
    <hr>

    <br><br>

    <?php include 'footer.php'; ?>
</body>
</html>
