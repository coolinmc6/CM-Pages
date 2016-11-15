<!-- ch27_notes.md -->
# Chapter 27: Building User Authentication and Personalization

- The project itself is a bookmarking site with personalization means that based on what they
like, I recommend more shit they'll like.  Page 569 (585 pdf) has more on the requirements of 
the project which I should detail at some point
- p. 574 (590 pdf) has the setup for the database.
  - CM => I need to learn what index(username) and index(bm_URL) do as well as primary key.
- Once I've set these up, I can start coding.
- CM=>  Copy and paste the items that isn't real coding (i.e. references other pages) and code
the actual PHP/SQL
- I can't access the source code...google part of the code you want and it'll appear
- Here's an example repo: https://github.com/hankslewis/PHPbookmark
- Here's another okay source but no code: http://www.roguehangar.com/rogueserver/htdocs/WellingThompson/start.html


## Application Files

## bookmark\_fns
- appears to just be a bunch of require_once files
- the rationale behind this is because you will need these 5 files "scripts" in most pages so it's
easier to include one file instead of five


### login.php
- requires bookmark\_fns.php and then has some functions which I guess are all in bookmark\_fns


### output\_fns.php
- each of these functions simply output various parts for the page
- their format is not what I'm used to...I'll need to dig in to get a better understanding.  From the text:
	-The advantages to isolating or removing HTML from your main logic stream are discussed
	in Chapter 25,“Using PHP and MySQL for Large Projects.”We use the function API approach here.

### register\_form.php
- breaking up everything is making a litte more sense...the do\_html\_header looks a little better...the title
of the page is just passed into the function and thus I don't need to rewrite a bunch of code.
- display\_registration\_form is from output_fns.php
- unlike the pages that I had grown accustomed to making, there are literally four lines of code in this page:
  - require_once for the bookmark\_fns file
  - Header
  - Registration form
  - Footer
  - each of the displays are in the output\_fns file
  - and as a reminder, the bookmark file just references five other files that I haven't written yet at this point
  (p. 578, 594 in the pdf)
- CM => remember this.....

### register\_new.php
- p. 594


