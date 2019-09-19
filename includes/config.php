<?php

/*
config.php - will allow us to swap html pieces dynamically. To do this 
you need to include this config.php file at the top your 'header.php' page.  Also, on this page are the keys to your form's recaptcha and the fix the footer date issue.
*/

// Footer timezone fix
date_default_timezone_set('America/Los_Angeles');

// Keys for SCC's server, edison.seattlecentral.edu, go on the next line
include 'credentials.php'

//place URL & labels in the variable/array here for navigation:
$nav1['index.php'] = "Main";
$nav1['menu.php'] = "Menu";
$nav1['events.php'] = "Event";
$nav1['map.php'] = "Map";
$nav1['contactus.php'] = "Contact Us";

//this line below identifies the current page
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

/* below we can create 'case' statements to accommodate
 unique data items (title, a page id and an image) that will
reside in the 'top.php' file
*/
switch(THIS_PAGE)
{
  case "index.php":
  $myTitle = "Pho Dinh";
  $myPageID = "Welcome";
  break;
  
  case "menu.php":
  $myTitle = "Pho Dinh's Menu";
  $myPageID = "Menu";
  break;
  
  case "events.php":
  $myTitle = "Pho Dinh's Events!";
  $myPageID = "Events";
  break; 
  
  case "map.php":
  $myTitle = "Pho Dinh's Location - Find us!";
  $myPageID = "Location";
  break;
  
  case "contactus.php":
  $myTitle = "Pho Dinh's Contact Information";
  $myPageID = "Contact Us";
  break;  
        
  case "disclaimer.php":
  $myTitle = "Disclaimer / Privacy Notice";
  $myPageID = "Disclaimer / Privacy Notice";
  break;  

  //fallback values for undefined pages
  default:
  $myTitle = THIS_PAGE; #the file name is unique
  $myPageID = "This is a default tool tip message!";
}
//--------------END CONFIG AREA --------------------------------
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//current page - add class reference
	    	$myReturn .= '<li class="active"><a href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


/*

saved below as the original HTML markup for the navigation:

 <nav id="cssmenu">
      <ul>
        <li class="active"><a href="index.php"><i class="fa fa-fw fa-home"></i> Home plate</a></li>
        <li><a href="menu.php"><i class="fa fa-fw fa-bars"></i> Lineup (menu)</a></li>
        <li><a href="events.php"><i class="fa fa-fw fa-calendar"></i> Schedule</a></li>
        <li><a href="map.php"><i class="fa fa-fw fa-map-marker"></i> Map</a></li>
        <li><a href="contactus.php"><i class="fa fa-fw fa-phone"></i> Contact Us</a></li>
      </ul>
    </nav>

*/


?>