<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <title>Project_01</title>
</head>

<body>
    <div style="margin-top: 50px; " class="container ">
        <ul style="border:1px solid #ddd;padding:10px 0;" class="nav ">
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/lfwf_PHP_project/project_01%2319.4.22/overview.php">Overview</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/lfwf_PHP_project/project_01%2319.4.22/resourse.php">Resourse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://127.0.0.1/lfwf_PHP_project/project_01%2319.4.22/">quiz</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/lfwf_PHP_project/project_01%2319.4.22/assignment.php">Assignment</a>
            </li>

        </ul>


        <!--============---------- Assignment no 1 start----------===============-->

        <!-- Question 01:

        Let’s make an exam question set (add at list 10 dummy question) like that
        $questionSet = [
            [
                'question' => 'What is loream ipsum?',
                'options' => ['ans1', 'ans2', 'ans3', 'ans4' ]
            ],
            [
                'question' => 'What is loream ipsum?',
                'options' => ['ans1', 'ans2', 'ans3', 'ans4']
            ],
            [
                'question' => 'What is loream ipsum?',
                'options' => ['ans1', 'ans2', 'ans3', 'ans4']
            ]
        ];        
        
        Make a simple exam design using html css
        Then make a exam by using these questions
        Your questions must be come randomize order -->


        <?php
        echo "<br>";
        $questionSet = [
            [
                'question' => ' For preserving key sequences in array_chunk() you have to use..',
                'options' => [
                    'First parameter will be false', 'Second parameter will be true', 'Fourth parameter will be true', 'Third parameter will be true'
                ]
            ],

            [
                'question' => 'arsort() - Sort an array in ascending order and maintain index association..',
                'options' => [
                    'True', 'False'
                ]
            ],

            [
                'question' => 'krsort() Sort an array by key in descending order…',
                'options' => [
                    'True', 'False'
                ]
            ],

            [
                'question' => '
                            implode() function accepts 3 parameters…',
                'options' => [
                    'True', 'False'
                ]
            ],

            [
                'question' => 'implode() function used for…',
                'options' => [
                    'String to array', 'Array to string', 'Make randomize array', 'None of these'
                ]
            ],

            [
                'question' => 'explode(separator_symble, element_limit, which_string) ?',
                'options' => [
                    'True', 'False'
                ]
            ],

            [
                'question' => 'How many parameters accept array_chunk() ?',
                'options' => [
                    1, 2, 3, 4
                ]
            ],

            [
                'question' => 'For changing arrays into strings, which function is used?',
                'options' => [
                    'exp ( )', 'explode ( )', 'implode', 'imp ( )'
                ]
            ],

            [
                'question' => 'Which PHP function is used to get one or more random keys from an array?',
                'options' => [
                    'array_random()', 'array_randomize()', 'array_rand()  ', 'krand()'
                ]
            ],

            [
                'question' => 'Assume you would like to sort an array in ascending order by value while preserving key associations. Which of the following PHP sorting functions would you use?',
                'options' => [
                    'ksort()', 'krsort()', 'sort()', 'asort() '
                ]
            ]

        ];

        ?>
        <div style="width:100%;" class="card ">
            <div style="padding-right:500px; " class="card-body ">

                <h4>Class 7 --Assignment-Mini_project 01(Quiz)</h4>

                <div class="form-check ">
                    <?php
                    shuffle($questionSet);
                    echo "<br>";

                    foreach ($questionSet as $outerkey => $outervalue) {
                        echo "Q " . ++$outerkey . " . " . $outervalue['question'] . "<br>";
                        foreach ($outervalue['options'] as $key => $option) {
                    ?>
                            <input style="margin-left: 15px; margin-right: 10px;" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            
                            <label><?php echo $option; ?></label>

                    <?php
                            echo "<br>";
                        }
                        echo "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <!--============---------- Assignment no 1 end----------===============-->




        <!--============---------- Assignment no 2 start----------===============-->
            
        <!-- Question 02:

            Let’s make a website which only contains our teams section.
            Now create an array of our teams at least three elements and make the our team section dynamic using php.       

            Make an array of our teams including image
            Make a section of our team by using html css
            And dynamic the section by php -->


        <?php
        $teams = [
            [
                "name"     => "John Doe",
                "position" => "CEO and Founder",
                "image"    => "team-5.jpg",
                "socail"   => '<a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-facebook"></i></a>  <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-twitter"></i></a> <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-instagram"></i></a>'
            ],

            [
                "name"     => "Monica Doe",
                "position" => "Project Manager",
                "image"    => "team-2.jpg",
                "socail"   => '<a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-facebook"></i></a>  <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-twitter"></i></a> <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-instagram"></i></a>'
            ],

            [
                "name"     => "fessic doe",
                "position" => "Web Developer",
                "image"    => "team-3.jpg",
                "socail"   => '<a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-facebook"></i></a>  <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-twitter"></i></a> <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-instagram"></i></a>'
            ],

            [
                "name"     => "Robert Doe",
                "position" => "Finance Expert",
                "image"    => "team-4.jpg",
                "socail"   => '<a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-facebook"></i></a>  <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-twitter"></i></a> <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-instagram"></i></a>'
            ],

            [
                "name"     => "Janice Doe",
                "position" => "Web Designer",
                "image"    => "team-6.jpg",
                "socail"       => '<a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-facebook"></i></a>  <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-twitter"></i></a> <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-instagram"></i></a>'
            ],

            [
                "name"     => "Chris Doe",
                "position"     => "Manufacturing",
                "image"    => "team-8.jpg",
                "socail"   => '<a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-facebook"></i></a>  <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-twitter"></i></a> <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-instagram"></i></a>'
            ],

            [
                "name"     => "Melinda Doe",
                "position" => "Marketing",
                "image"    => "team-7.jpg",
                "socail"   => '<a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-facebook"></i></a>  <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-twitter"></i></a> <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-instagram"></i></a>'
            ],

            [
                "name"   => "Rick Doe",
                "position" => "Grapics Designer",
                "image"    => "team-9.jpg",
                "socail"   => '<a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-facebook"></i></a>  <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-twitter"></i></a> <a href="#"><i style="font-size:20px;margin-right:10px;" class="fab fa-instagram"></i></a>'
            ]


        ]

        ?>
        <div class="section">

            <div class="row">
                <h4 style="text-align: center;margin-top:100px;">Class 7 --Assignment-Mini_project 02(Team)</h4>
                <h6 style="text-align: center;margin-top:50px;">THE MEMBERS</h6>
                <h2 style="text-align: center;">Our Amazing Team</h2>
                <p style="text-align: center;margin-bottom:50px;padding:0 200px ;">
                    Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.
                </p>

                <?php foreach ($teams as $member) { ?>

                    <div class="col-lg-3 mb-5">
                        <div class="card">
                            <img src="img/<?php echo $member["image"] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $member["name"] ?></h5>
                                <p class="card-text"><?php echo $member["position"] ?></p>
                                <span> <?php echo $member["socail"] ?></span>

                            </div>
                        </div>

                    </div>
                <?php  } ?>
            </div>
        </div>

        <!--============---------- Assignment no 2 end----------===============-->




    </div>
</body>

</html>