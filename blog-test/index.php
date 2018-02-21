<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog Home</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	
	
</head>
<body>
	<div class="main">
		<?php include_once('includes/blog-nav.php'); ?>

		<div class="container">
			<h1>New Blog Post</h1>
			<form>
			  <div class="form-group">
			    <label for="blog-heading">Blog Heading or Title</label>
			    <input type="text" class="form-control" id="blog-heading" placeholder="This Amazing Blog Post">
			  </div>
			  <div class="form-group">
			    <label for="blog-tags">Tags</label>
			    <select multiple class="form-control" id="blog-tags">
			      <option value="tag-1">Cool Stuff</option>
			      <option value="tag-2">Different Stuff but still cool</option>
			      <option value="tag-3">Not Really Cool Stuff</option>
			      
			      
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="blog-entry">Blog Post</label>
			    <textarea class="form-control" id="blog-entry" rows="3"></textarea>
			  </div>

				<button type="button" class="btn btn-primary">Primary</button>
			</form>
		</div>
		
		<div class="container">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quia iste molestias sint cum veritatis odit nihil corrupti, enim consectetur soluta, porro numquam aperiam fugit blanditiis natus ipsa repellendus repudiandae.
			Adipisci dolorum reiciendis tempore corporis enim id nulla unde quisquam. Maxime totam harum ipsum commodi asperiores reiciendis, autem eius. Voluptatibus nihil expedita sapiente modi iusto, ratione reprehenderit labore dicta amet.
			Maxime eveniet minima possimus soluta consequuntur sint ipsam quibusdam voluptate, aperiam voluptatibus. Obcaecati quae sapiente consequatur officia cum dolores debitis repellat consectetur, nesciunt accusamus natus nostrum optio perspiciatis molestiae vel.
		</div>
	</div>

		
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="tinymce/tinymce.min.js"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$('.btn').on('click', function() {
			var info = {
				addPost: 1, 
				content: tinymce.get('blog-entry').getContent()
			}
			
			$.post('blog-functions.php', info, function(data) {
				if(data == 1) {
					alert('Success!!')
				}
			})

		})

		// Editing a blog entry
		setTimeout(function() {
			tinymce.get('blog-entry').setContent('<h1>This is an H1</h1>')
		}, 1000)

	</script>
</body>
</html>

