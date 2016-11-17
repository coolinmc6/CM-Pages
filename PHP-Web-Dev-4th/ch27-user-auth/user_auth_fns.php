<?php

  function register ($username, $email, $password) {
    // register new person with db
    // return true or error message

    // connect to database
    $conn = db_connect();

    // check if username is unique
    // CM -> Shouldn't we bind this parameter?
    $result = $conn->query("select * from user where username = '".$username."'");
    if (!$result) {
      throw new Exception('Could not execute query');
    }

    if ($result->num_rows > 0) {
      throw new Exception('That username is taken - go back and choose another one.');
    }
    
    // if okay, put into database
    // CM -> Shouldn't this we bind this as well?
    $result = $conn->query("insert into user values ('".$username."', sha1('".$password."'), '".$email."')");
    if (!$result) {
      throw new Exception('Could not register you in database - please try again later.');
    }

    return true;
  }


  function login ($username, $password) { 
    // check username and password with db
    // if yes, return true
    // else throw exception

    // connect to database
    $conn = db_connect();
   
    // check if username is unique
    $result = $conn->query("select * from user where username='" . $username . 
      "'and passwd = sha1('".$password."')");

  	if (!$result) {
  	  throw new Exception('Could not log you in.');
  	}

  	if ($result->num_rows > 0) {
  	  return true;
  	} else {
  	  throw new Exception('Could not log you in.');
  	} 
  }


  function check_valid_user() {
	// see if somebody is logged in and notify them if not
  	if (isset($_SESSION['valid_user'])) {
  	  echo "Logged in as ".$_SESSION['valid_user'].".<br />";
  	} else {
  	  // 
  	  do_html_heading('Problem:');
  	  echo 'You are not logged in.<br />';
  	  do_html_url('login.php', 'Login');
  	  do_html_footer();
  	  exit;
  	}
  }

  function change_password($username, $old_password, $new_password) {
    // change password for username/old_password to new_password
    // return true or false
    // if the old password is right
    // change their password to new_password and return true
    // else throw an exception
    login($username, $old_password);
    $conn = db_connect();

    $result = $conn->query("update user set passwd = sha1('".$new_password."')
      where username = '".$username."'");
    
    if (!$result) {
      throw new Exception('Password could not be changed.');
    } else {
      return true; // changed successfully
    }
  }  

?>