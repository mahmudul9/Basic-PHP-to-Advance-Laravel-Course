<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <?php
$questionSet = [
    [
        'question' => 'Which command should you use to initialize a new git repository?',
        'options' => [
            'git init','git bash','git install','git start'
        ]
    ],
    [
        'question' => 'Command to check the created, modified, deleted files in git bash before Commit?',
        'options' => [
            'git show','git log','git status ','all of the above'
        ]
    ],
    [
        'question' => 'Which the git command for commit with this "Initial commit" message?',
        'options' => [
            'git commit -m "Initial commit" |','git commit -msg "Initial commit"','git commit -M "Initial commit"','git commit "comment"'
        ]
    ],
    [
        'question' => 'Git commit -m < ? >, ? is for...',
        'options' => [
            'comment','repo url
            ','file name to be committed','None'
        ]
    ],
    [
        'question' => 'You can type “git status” at any time in a directory controlled by git to check the status of your files.',
        'options' => [
            'True','False',
        ]
    ],
    [
        'question' => 'You are in desktop directory, You have a directory name MyGitProject on Desktop desktop directory. How can you enter into this directory?',
        'options' => [
            'git cd MyGitProject','cd MyGitProjec
            ','file name to be committed','cd ..'
        ]
    ],
    [
        'question' => 'What is the meaning of this command git add . '  ,
        'options' => [
            'stage individual file of your git project','stage All files of your current directory
            ','stage all files of your whole project','None'
        ]
    ],
    [
        'question' => 'Git is a Version Control System... '  ,
        'options' => [
            'True ','False
            ',
        ]
    ],
    [
        'question' => 'Github is not a Software Development Hosting Platform for Collaboration.'  ,
        'options' => [
            'True ','False
            ',
        ]
    ],
    [
        'question' => ' Whats a shortcut to staging all the changes you have? '  ,
        'options' => [
            'git commit add .','git commit .
            ','git add ','git stage -a'
        ]
    ],
];



?>

<div class="container">

<?php
 shuffle($questionSet);
foreach ($questionSet as $key1 => $total_question) {
    echo   ++$key1 . " . " . $total_question['question'] ."<br>";
    
    foreach ($total_question['options'] as $key2 => $option) {

  
?>


<div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
  <label class="form-check-label" for="customRadio1"><?php echo $option; ?></label>
</div>


<?php
    } 
 ?>
<?php echo "<br>"; } ?>



</div>
             



    <!--########## Question 02########## -->

    <?php 

$member_details=[
    ['name'=>"Fargesen",
    'status' => 'Graphic designer',
    'home_town' => 'California',
    'image' => 'images (3).jpg',
    'more' => 'More details'
],
    ['name'=>"Roshels",
    'home_town' => 'Karolina',
    'status' => 'Wordpress developer',
    'image' => 'images (1).jpg',
    'more' => 'More details'
],
    ['name'=>"Jastin",
    'home_town' => 'Alaska',
    'status' => 'Php Developer',
    'image' => 'images (3).jpg',
    'more' => 'More details'
],
    ['name'=>"Robarto",
    'home_town' => 'Alabama',
    'status' => 'Software engineer',
    'image' => 'images (1).jpg',
    'more' => 'More details'
]
]


    ?>

    <div class="container mt-5">
        <div class="row">


        <?php
        foreach ($member_details as $key => $member_detail){

       
        ?>
            <!-- 1 -->
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $member_detail['image']  ?>" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title name"><?php echo $member_detail['name']  ?></h6>
                        <h6 class="card-title status"><?php echo $member_detail['status']  ?></h6>
                        <span class="card-title"><?php echo $member_detail['home_town']  ?></span>
                        <a href="#" class="btn btn-primary"><?php echo $member_detail['more']?></a>
                        

                    </div>
                </div>
            </div>

            <?php }  ?>


        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>