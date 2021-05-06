<?php
class cp
{
public $username;
public $opassword;
public $npassword;
public $hashpassword2;
function changepassword($username,$opassword,$hashpassword2)
{
    $updatep = "UPDATE user SET password = $hashpassword2 WHERE username = $username AND password = $opassword";
    $resultp = mysqli_query($db,$updatec);
    if($resultp == True)
  {
    return True;
  }
}
}