<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job list</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bodyStyle">
   

    <!-- Include navbar.php -->
    <?php include 'navbar.php'; ?>


    <!-- button -->
    <section style="text-align: center;">
        <h2>Job List</h2>
        <hr>
        <a href="postJob.php">
                <!-- <button type="button" class="btn btn-primary btn-lg">+ Post a job opportunity</button> -->
                <button type="button" class="btn btn-primary btn-lg">+ Post a job opportunity</button>
             </a>
        <!-- <button type="button" class="btn btn-primary btn-lg">+ Post a job opportunity</button> -->
    </section>
    <!-- search and job title -->
    <section>
        <!-- search -->
        <br>
        <div class="job inputStyle container">
            <input class="form-control mx-4" type="text" placeholder="Filter job">
            <button type="button" class="btn btn-primary btn-sm mx-4">Search</button>
        </div>
        <br>
        <!-- job title -->
        <div class="job container">
            <h3 style="text-align: center;">Job Title</h3>
            <hr>
            <div class="inputStyle">
                <p>company</p>
                <p class="mx-auto">Location</p>
            </div>
            <input class="form-control " type="text" placeholder="Description and details about the job"> <br>
            <div class="inputStyle">
                <p class="post">Posted by: Mahadi Hasan</p>
                
                <button type="button" class="btn btn-primary btn-sm mx-4">Read More</button>

            </div>
        </div>
        <!-- job title 2 -->
        <br>
        <div class="job container">
            <h3 style="text-align: center;">Job Title</h3>
            <hr>
            <div class="inputStyle">
                <p>company</p>
                <p class="mx-auto">Location</p>
            </div>
            <input class="form-control " type="text" placeholder="Description and details about the job"> <br>
            <div class="inputStyle">
                <p class="post">Posted by: Mahadi Hasan</p>
                <!-- <a href="postJob.html">
                        <button type="button" class="btn btn-primary btn-sm mx-4">Read More</button>
                    </a> -->
                <button type="button" class="btn btn-primary btn-sm mx-4">Read More</button>
            </div>
        </div>
    </section>
    <!-- footer -->
    <br>
    


<!-- Include footer.php -->
<?php include 'footer.php'; ?>
</body>

</html>