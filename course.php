<!DOCTYPE html>
<html>
<head>
    <title>UIU Online Courses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color:#E9F994;
        }

        h1 {
            text-align: center;
            color: #333;
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
        }

        .course a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>UIU Online Courses</h1>

    <?php
  
    $courses = array(
        array(
            'title' => 'Operating System Concepts/Operating Systems',
            'instructor' => 'Rayhan Ahamed',
            'description' => 'Learn the basics of programming with this introductory course.',
            'link' => 'https://www.youtube.com/watch?v=479fFX0CZ-Y&list=PL3_ATDyQLqPiuxm-GjBI8lXFp9M19v-lD'
        ),
        array(
            'title' => 'Software Engineering',
            'instructor' => 'Rafi ul Rashid',
            'description' => 'Learn the basics of softwear methodology with this introductory course.',
            'link' => 'https://www.youtube.com/watch?v=c1amLpllQSE&list=PL3_ATDyQLqPgepsuDv5zQX97CTQWu5_Rr'
        ),
        array(
            'title' => 'Web Programming',
            'instructor' => 'Md Saidul Haque Anik',
            'description' => 'Learn the basics of programming with this introductory course.',
            'link' => 'https://www.youtube.com/watch?v=UdHRHLvn4g4'
        ),
        array(
            'title' => 'Introduction to Programming',
            'instructor' => 'John Smith',
            'description' => 'Learn the basics of programming with this introductory course.',
            'link' => 'https://example.com/courses/intro-to-programming'
        ),
       
        array(
            'title' => 'Data Science Fundamentals',
            'instructor' => 'Mike Johnson',
            'description' => 'Explore the essentials of data science and learn data analysis techniques.',
            'link' => 'https://example.com/courses/data-science-fundamentals'
        ),
      
        array(
            'title' => 'Web Development 101',
            'instructor' => 'Jane Doe',
            'description' => 'Get started with web development and learn HTML, CSS, and JavaScript.',
            'link' => 'https://example.com/courses/web-development-101'
        ),

       
        array(
            'title' => ' Compiler/Compiler Design',
            'instructor' => 'Nahid Hossain',
            'description' => 'Get basic idea of how compiler work in computer.',
            'link' => 'https://www.youtube.com/watch?v=OrNSY64eAOo&list=PL3_ATDyQLqPidPjIs1Zh9opdanOP3mgKQ'
        ),
        

    );
lel
  
    foreach ($courses as $course) {
        echo '<div class="course">';
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p><strong>Instructor:</strong> ' . $course['instructor'] . '</p>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<a href="' . $course['link'] . '">Enroll Now</a>';
        echo '</div>';
    }
    ?>

</body>
</html>
