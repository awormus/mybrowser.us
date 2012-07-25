<?php

 include("../libs/pChart2.1.3/class/pDraw.class.php");
 include("../libs/pChart2.1.3/class/pImage.class.php");

 /* Create the pChart object */
 $myPicture = new pImage(700,530);

 /* Draw the background */
 $Settings = array("R"=>170, "G"=>183, "B"=>87, "Dash"=>1, "DashR"=>190, "DashG"=>203, "DashB"=>107);
 $myPicture->drawFilledRectangle(0,0,700,530,$Settings);

 /* Overlay with a gradient */
 $Settings = array("StartR"=>219, "StartG"=>231, "StartB"=>139, "EndR"=>1, "EndG"=>138, "EndB"=>68, "Alpha"=>50);
 $myPicture->drawGradientArea(0,0,700,530,DIRECTION_VERTICAL,$Settings);
 $myPicture->drawGradientArea(0,0,700,30,DIRECTION_VERTICAL,array("StartR"=>0,"StartG"=>0,"StartB"=>0,"EndR"=>50,"EndG"=>50,"EndB"=>50,"Alpha"=>80));

 /* Add a border to the picture */
 $myPicture->drawRectangle(0,0,699,529,array("R"=>0,"G"=>0,"B"=>0));
 
 /* Write the picture title */ 

// Bedizen.ttf  Forgotte.ttf  GeosansLight.ttf  MankSans.ttf  Silkscreen.ttf  advent_light.ttf  calibri.ttf  pf_arma_five.ttf  verdana.ttf
 
$myPicture->setFontProperties(array("FontName"=>"../libs/pChart2.1.3/fonts/GeosansLight.ttf","FontSize"=>20));
$myPicture->drawText(2,28,"myBrowser.us - browser specification & capability report",array("R"=>255,"G"=>255,"B"=>255));

 /* Enable shadow computing */
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20));

 /* Draw a rounded filled rectangle */
 $RectangleSettings = array("R"=>255,"G"=>248,"B"=>229,"Alpha"=>70);
 $myPicture->drawRoundedFilledRectangle(10,40,600,670,10,$RectangleSettings);

 /* Enable shadow computing */
 $myPicture->setShadow(FALSE);

 /* Draw a rounded filled rectangle */
 $RectangleSettings = array("R"=>209,"G"=>134,"B"=>27,"Alpha"=>30);
 $myPicture->drawRoundedFilledRectangle(30,50,250,200,10,$RectangleSettings);

 /* Enable shadow computing */
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20));

 /* Draw a rounded filled rectangle */
 $RectangleSettings = array("R"=>209,"G"=>31,"B"=>27,"Alpha"=>100,"Surrounding"=>30);
 $myPicture->drawRoundedFilledRectangle(480,50,650,80,5,$RectangleSettings);

 /* Draw a rounded filled rectangle */
 $RectangleSettings = array("R"=>209,"G"=>125,"B"=>27,"Alpha"=>100,"Surrounding"=>30);
 $myPicture->drawRoundedFilledRectangle(480,90,650,120,5,$RectangleSettings);

 /* Draw a rounded filled rectangle */
 $RectangleSettings = array("R"=>209,"G"=>198,"B"=>27,"Alpha"=>100,"Surrounding"=>30);
 $myPicture->drawRoundedFilledRectangle(480,130,650,160,5,$RectangleSettings);

 /* Draw a rounded filled rectangle */
 $RectangleSettings = array("R"=>134,"G"=>209,"B"=>27,"Alpha"=>100,"Surrounding"=>30);
 $myPicture->drawRoundedFilledRectangle(480,170,650,200,5,$RectangleSettings);

// Draw Text


$TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>15); 
$myPicture->drawText(130,70, "my screen size",$TextSettings); 


$TextSettings = array("R"=>200,"G"=>100,"B"=>0,"Angle"=>90,"FontSize"=>12); 
$myPicture->drawText(40,170, $_GET['sh'] . " pixels",$TextSettings); 

$TextSettings = array("R"=>200,"G"=>100,"B"=>0,"Angle"=>0,"FontSize"=>12); 
$myPicture->drawText(40,210, $_GET['sw'] . " pixels",$TextSettings); 



 /* Render the picture (choose the best way) */
 $myPicture->autoOutput("pictures/example.drawRoundedFilledRectangle.png");
?> 
