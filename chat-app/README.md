# Chat-App

This is just a jQuery Ajax chat app designed to play around with ajax and displaying a chat.

I largely followed this template from my other chat app:

1. Create database
2. Create div to hold chat
3. Create form / input elements to input message
4. Write $.post request to insert chat texts
5. Write GET request that refreshes every second to get chat, limit 50, order by DESC
6. Display overflow to scroll
7. Enter some test chats and confirm it works- 	

Here are a few thoughts:
  - you can't have two auto incrementing items in the same table.  For me, that means that
  I can't have both an a_i ID column AND a timestamp.  I CAN, however, insert a string
  using PHP's date() method:
```php
$date = date('Y:m:d h:i:sa');
// 2016:12:16 08:46:51am
```

  - getting the database connection to work to longer than it should have.  Just use
  the db connection method you are familiar with
  - binding parameters is not just for security...inserting anything with an apostrophe
  can screw up the SQL
  - After creating the database (#1) and chat div (#2), I should manually enter in a 
  message or two into the DB and then do the GET request (#5).  Doing a select statement
  is always easier and allows me to set up the setInterval and constant update 
  functionality
  - for the PDO function, using variables for the user name and password that are defined
  outside of the db_connect() function doesn't work...despite including the db.php file
  - I need to learn the try{} catch{} to see what my errors are
  

