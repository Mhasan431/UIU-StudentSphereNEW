<!DOCTYPE html>
<html>
<head>
    <title>UIU Online Courses</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #E9F994;
        }

        h1 {
            text-align: center;
            color: #333;
        }
        #searchBar {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        #courseSearch {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }
        .course {
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .course h2 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }

        .course p {
            margin-top: 10px;
            color: #666;
        }

        .course a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-right: 10px; /* Add some margin between the buttons */
        }

        .course a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <!-- Include header.php -->
    <?php include 'header.php'; ?>

    <!-- Include navbar.php -->
    <?php include 'navbar.php'; ?>
    <h1>UIU Online Courses</h1>

    <input type="text" id="courseSearch" placeholder="Search for courses...">

    <?php
    $courses = array(
        array(
            'title' => 'Operating System Concepts/Operating Systems',
            'instructor' => 'Rayhan Ahamed',
            'description' => 'Learn the basics of programming with this introductory course.',
            'link' => 'https://www.youtube.com/watch?v=479fFX0CZ-Y&list=PL3_ATDyQLqPiuxm-GjBI8lXFp9M19v-lD',
            'qslink' => 'https://drive.google.com/drive/folders/1OQhsHDdU3cQFeIPlxtCwFkzr-_rg6Ojm?usp=share_link'
        ),
        array(
            'title' => 'Software Engineering',
            'instructor' => 'Rafi ul Rashid',
            'description' => 'Learn the basics of software methodology with this introductory course.',
            'link' => 'https://www.youtube.com/watch?v=c1amLpllQSE&list=PL3_ATDyQLqPgepsuDv5zQX97CTQWu5_Rr',
            'qslink' => 'https://drive.google.com/drive/folders/1OQhsHDdU3cQFeIPlxtCwFkzr-_rg6Ojm?usp=share_link'
        ),
        array(
            'title' => 'Web Programming',
            'instructor' => 'Md Saidul Haque Anik',
            'description' => 'Learn the basics of programming with this introductory course.',
            'link' => 'https://www.youtube.com/watch?v=UdHRHLvn4g4',
            'qslink' => 'https://drive.google.com/drive/folders/1fpBg8OcUkEftg7Bqjta-YYiVK87FNp_U?usp=share_link'
        ),
        // Add more courses as needed


        array(
            'title' => 'Data Science Fundamentals',
            'instructor' => 'Mike Johnson',
            'description' => 'Explore the essentials of data science and learn data analysis techniques.',
            'link' => 'https://www.youtube.com/watch?v=ua-CiDNNj30&list=PLWKjhJtqVAblQe2CCWqV4Zy3LY01Z8aF1',
            'qslink' => 'https://drive.google.com/drive/folders/1NHw2LYh4DGOKxiNFkNplL8N9wbfq9rgB?usp=share_link'
        ),
      
        array(
            'title' => 'Web Development 101',
            'instructor' => 'Jane Doe',
            'description' => 'Get started with web development and learn HTML, CSS, and JavaScript.',
            'link' => 'https://example.com/courses/web-development-101',
            'qslink' => 'https://drive.google.com/drive/folders/1fpBg8OcUkEftg7Bqjta-YYiVK87FNp_U?usp=share_link'
        ),
    
       
        array(
            'title' => ' Compiler/Compiler Design',
            'instructor' => 'Nahid Hossain',
            'description' => 'Get basic idea of how compiler work in computer.',
            'link' => 'https://www.youtube.com/watch?v=OrNSY64eAOo&list=PL3_ATDyQLqPidPjIs1Zh9opdanOP3mgKQ',
            'qslink' => 'https://drive.google.com/drive/folders/1fpBg8OcUkEftg7Bqjta-YYiVK87FNp_U?usp=share_link'
        ),

    );


  

    foreach ($courses as $course) {
        echo '<div class="course">';
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p><strong>Instructor:</strong> ' . $course['instructor'] . '</p>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<a href="' . $course['link'] . '">Enroll Now</a>';

        // Add the "Qs bank" button
        echo '<a href="' . $course['qslink'] . '/qs-bank">Qs Bank</a>';

        echo '</div>';
    }
    ?>

    <br><br>

    <!-- Include footer.php -->
    <?php include 'footer.php'; ?>

    <script>
        // JavaScript for searching courses
        const courseList = <?php echo json_encode($courses); ?>;
        const courseSearch = document.getElementById('courseSearch');
        const courseSuggestions = document.getElementById('courseSuggestions');

        // Function to generate course suggestions
        function generateSuggestions(searchValue) {
            courseSuggestions.innerHTML = '';
            const filteredCourses = courseList.filter(course => {
                const title = course.title.toLowerCase();
                return title.includes(searchValue.toLowerCase());
            });

            filteredCourses.forEach(course => {
                const option = document.createElement('option');
                option.value = course.title;
                courseSuggestions.appendChild(option);
            });
        }

        // Function to handle live search
        function handleLiveSearch() {
            const searchValue = courseSearch.value;
            generateSuggestions(searchValue);
            filterCourses(searchValue);
        }

        // Function to filter courses based on the search value
        function filterCourses(searchValue) {
            const courses = document.querySelectorAll('.course');
            courses.forEach(course => {
                const title = course.querySelector('h2').innerText.toLowerCase();
                if (title.includes(searchValue.toLowerCase())) {
                    course.style.display = 'block';
                } else {
                    course.style.display = 'none';
                }
            });
        }

        courseSearch.addEventListener('input', handleLiveSearch);
    </script>

</body>
</html>

