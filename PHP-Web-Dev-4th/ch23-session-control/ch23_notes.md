<!-- ch23_notes.md -->
# Chapter 23: Using Session Control in PHP

Localhosts:
work - http://localhost:8888/CM-Pages/PHP-Web-Dev-4th/ch23-session-control/authmain.php
home - 

- The idea of session control is to be able to track a user during a single session on a
website.
- Sessions in PHP are driven by a unique session ID, a cryptographically random number.
- Cookies are a different solution to the problem of preserving state across a number of
transactions while still having a clean-looking URL
- A cookie is a small piece of information that scripts can store on a client-side machine.
- You can manually set cookies in PHP using the setcookie() function.
- If you set a cookie as => setcookie (‘mycookie’, ‘value’);
- you will have access to the cookie via => $_COOKIE[‘mycookie’].
- One tip is that cookie headers must besent before any other headers; otherwise, they 
will not work
- PHP uses cookies by default with sessions
- The basic steps of using sessions are
  1. Starting a session
  2. Registering session variables
  3. Using session variables
  4. Deregistering variables and destroying the session
1. Starting a Session
  - The first, and simplest, is to begin a script with a call to the session_start() function
2. Registering session variables
  - To create a session variable, you simply set an element in this array, as follows:
    $_SESSION[‘myvar’] = 5;
3. Using Session Variables
  - Here we are thus far:
    -  first start a session calling session_start().
    - You can then access the variable via the $_SESSION superglobal array—for example, 
    as $_SESSION[‘myvar’].
  - You can check a variable to see whether it is a registered session variable by checking 
  in $_SESSION:
    - if (isset($_SESSION[‘myvar’]))
4. Deregistering variables and destroying the session
  - When you are finished with a session variable, you can unset it. You can do this directly
	by unsetting the appropriate element of the $_SESSION array, as in this example:
		- unset($_SESSION[‘myvar’]);
  - after unsetting the variables, do: session_destroy();
- After you have used the variable, you unset it.The session still exists, but the variable
$\_SESSION[‘sess_var’] no longer exists.
- Possibly the most common use of session control is to keep track of users after they
have been authenticated via a login mechanism
- STOP => pg. 517 (in the book, 533 in the pdf)
  - Chapter 17 -> Implementing Authentication with PHP and MySQL
    - do this first and the come back to finish this chapter...and THEN chapter 27
- If a form's action='thispage.php' is the same page then when the user clicks the submit 
button on the form, this script is reinvoked, and you start again from the top.

11/16/2016
  - database has been created called php\_web\_dev\_4th with the table 'authorized_users'
  - Authorization has been successfully setup

















