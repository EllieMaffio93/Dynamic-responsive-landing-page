<?php include "contents.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Landing Page Responsive with Dynamic contents";?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<!--header-->



<div class="container" style="background-color:#F4F6F9;">
    <div class="header">
        <div class="navbar">
            <div class="logo">
                <img class="logo-image" src="<?php echo $navbar["logo-image"]; ?>" alt="logo">
                <h1 class="logotype"><?php echo $navbar["logotype"]; ?></h1>
            </div>
        </div>
        <div class="header-content">
            <div class="header-text">
                <h1 class="header-title"><?php echo $header["header-texts"]["title_line1"] ;?></br><?php echo $header["header-texts"]["title_line2"] ;?></h1>
                <h3 class="header-subtext"><?php echo $header["header-texts"]["subtitle_line1"] ;?></br><?php echo $header["header-texts"]["subtitle_line2"] ;?></h3>
                <div class="app-buttons">
                    <img src="<?php echo $header["app-buttons"]["image_button_1"] ;?>" alt="app-store" class="button">
                    <img src="<?php echo $header["app-buttons"]["image_button_2"] ;?>" alt="google-play" class="button">
                </div>
            </div>
            <div class="header-background-section" style="background:url(<?php echo $header["header-background"]["image"] ;?>)center /cover;"></div>
        </div>
    </div>
</div>

<!--first section-->


    <div class="first-section">
        <div class="first-section-left" style="background:linear-gradient(230deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0.5) 100%),url(<?php echo $firstSection ["first-section-left"]["background-img"] ;?>)center /cover;">
            <div class="container left-first">
                <img class="player-img" src="<?php echo $firstSection["first-section-left"]["player-imgs"] ;?>" alt="player-image">
            </div>
        </div>
        <div class="first-section-right">
            <div class="container right-first">
                <h4 class="light-blue-title right-first-title"><?php echo $firstSection["first-section-right"]["blue-title"] ;?></h4>
                <h3 class="black-title"><?php echo $firstSection["first-section-right"]["black-title"] ;?></h3>
                <div class="explanation">
                    <h5 class="black-text-explanation"><?php echo $firstSection["first-section-right"]["black-explanation-1"];?></h5></br>
                    <h5 class="black-text-explanation"><?php echo $firstSection["first-section-right"]["black-explanation-2"]  ;?></h5>
                    <a href="" class="blue-link"><?php echo $blue_link;?></a>
                </div>
            </div>
        </div>
    </div>

<!--second section--> 

    
    <div class="second-section">
        <div class="second-section-left">
            <div class="right-second">
                <h4 class="light-blue-title"><?php echo $secondSection["second-section-left"]["blue-title"] ;?></h4>
                <h3 class="black-title"><?php echo $secondSection["second-section-left"]["black-title"] ;?></h3>
                <div class="explanation">
                    <h5 class="black-text-explanation"><?php echo $secondSection["second-section-left"]["black-explanation-1"];?></h5></br>
                    <h5 class="black-text-explanation"><?php echo $secondSection["second-section-left"]["black-explanation-2"]  ;?></h5>
                    <a href="" class="blue-link"><?php echo $blue_link;?></a>
                </div>
            </div>
        </div>
        <div class="second-section-right" style="background:url(<?php echo $secondSection ["second-section-right"]["background"] ;?>) center / cover;"></div>
    </div>


<!--third section--> 

    <div class="third-section">
        <div class="inside-third-section" style="background:url(<?php echo $thirdSection ["background"] ;?>) center / cover;"></div>
    </div>


</body>
</html>