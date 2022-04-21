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
        'question' => 'Which river flows across the India-Bangladesh border?',
        'options' => [
            'Hooghly River','Ichamati River','Brahmaputra River','Suma River'
        ]
    ],
    [
        'question' => ' Capital of Bangladesh is',
        'options' => [
            'Hooghly River','Ichamati River','Brahmaputra River','Suma River'
        ]
    ],
    [
        'question' => 'Which river flows across the India-Bangladesh border?',
        'options' => [
            'Hooghly River','Ichamati River','Brahmaputra River','Suma River'
        ]
    ],
    [
        'question' => 'Which river flows across the India-Bangladesh border?',
        'options' => [
            'Hooghly River','Ichamati River','Brahmaputra River','Suma River'
        ]
    ],
];



?>

<div class="container">

<?php
foreach ($questionSet as $key1 => $total_question) {
    echo   ++$key1 . " . " . $total_question['question'] ."<br>";
    
    foreach ($total_question['options'] as $key2 => $option) {

  
?>
<form action="/action_page.php">
  <p></p>
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html"><?php echo $option; ?></label><br>


</form>

<?php } ?>
<?php } ?>



</div>
             



    <!-- Question 02 -->

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