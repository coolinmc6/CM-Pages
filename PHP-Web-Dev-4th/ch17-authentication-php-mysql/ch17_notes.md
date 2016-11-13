<!-- ch17_notes.md -->
# Chapter 17: Implementing Authentication with PHP and MySQL

-  asking a user to prove her identity is called authentication
- It looks like you can hide passwords like this:
  - insert into authorized_users values ('testuser', sha1('password'));  
  - This is what it looks like in the table: 5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8
- Regardless of whether you store your data in a database or a file, storing the passwords as
plain text is an unnecessary risk.A one-way hashing algorithm can provide better security
with very little extra effort
- crypt() is weak, md5() is a little stronger, sha1() is even stronger
-  Secure Hash Algorithm 1 (SHA-1.) The PHP function sha1() provides a strong, one-way 
cryptographic hash function.
- that long string sha1() produces (5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8) cannot be 
decrypted and turned back into “password” even by its creator
- MySQL can also do the hashing for you...you can write it into your SQL script:
	select count(*) from authorized_users where
		name = '".$name."' and
		password = sha1('".$password."');
	- this query looks for people with a username (which I should make sure is unique) and sees
	if it equals the hashed password.  The result of this query will either be a 1 or a 0 (you are
	counting...)
- Hash functions generally return data of a fixed size. In the case of SHA1, it is 40
characters when represented as a string. Make sure that your database column is this width.
- Basic authentication -> web servers need authentication for each action but the user doesn't
need to enter details in every page/action because it's already saved in the browser
  - this is achieved via PHP or Apache (the web server)
- Chapter 18 has more on web security
- the PHP method of checking for authentication I don't like...I don't want a pop-up requesting
user information (http.php is the file).
- pg. 402 is Apache's method
- The first line of the .htaccess file tells Apache what document to display for visitors who 
fail to authenticate (HTTP error number 401).
- The line 'AuthUserFile /home/book/.htpass' tells Apache where to find the file that 
contains authorized users’ passwords
- As already mentioned, mod_auth is easy to set up with Apache and is effective. Because it
stores users in a text file, it is not really practical for busy sites with large numbers of
users.
- p.422 => installing mod_auth_mysql
- More advanced authentication and authorization continues in Chapter 23
- Sessions appear to be necessary for password submission via forms because you are going to a 
new page.  Sessions are used to track variables between pages.



