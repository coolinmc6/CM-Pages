<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FlexBox</title>
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/flexbox.css">
</head>
<body>
	<div class="container">
		<h1>Example 1</h1>
		<form action="">
			<div class="form-row">
				<label for="name">Name:</label>
				<input type="text">
			</div>
			<div class="form-row">
				<label for="favColor">Favorite Color:</label>
				<input type="text">
			</div>
		</form>
	</div>
	<div class="container">
		<h1>Example 2</h1>
		<div class="column-layout">

			<div class="main-column">
				<h2>Main Column</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, rerum in laborum consequatur, sed nulla quibusdam temporibus eaque maiores dolores est quidem doloremque ab ipsam. Distinctio eveniet, magni odio hic.</p>
				<p>Debitis architecto consequatur, quae, nisi modi voluptas perferendis. Blanditiis possimus vel ullam nesciunt, dolor, magnam adipisci repudiandae, ipsa aliquid maiores temporibus nam inventore repellat voluptates amet quae placeat! Similique, quaerat.</p>
				<p>Cumque dolores consectetur velit labore corporis, voluptatem omnis autem, nostrum fugiat praesentium quas, laborum nulla exercitationem eius explicabo cum distinctio in libero. Voluptatibus officiis dignissimos optio error, laboriosam labore cumque.</p>
				<p>Ad quasi quibusdam temporibus veritatis consectetur earum nesciunt odio autem, aperiam itaque maxime quas non suscipit debitis sit adipisci dolores dolore et fugit aut dicta dolorum ipsam. Omnis, rerum excepturi.</p>
			</div>
			<div class="sidebar-one">
				<h2>Sidebar 1</h2>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. A fugit beatae omnis fugiat velit, reprehenderit voluptatibus distinctio sit veritatis, quis, sapiente, nemo quidem nobis nisi rerum error ipsum totam. Neque!
			</div>
			<div class="sidebar-two">
				<h2>Sidebar 2</h2>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed id labore ipsum, harum velit nihil, eveniet laborum enim, sint, voluptatem quo provident nobis cum tenetur beatae accusamus explicabo et unde!
			</div>
		</div>	
	</div>

	<div class="container">
		<h1>Example #3</h1>
		<div class="call-outs-container">
			<div class="call-out red">
				<h4>Feature 1</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia non nam soluta omnis officiis quod tempore, explicabo est molestiae ad maiores sint cupiditate iusto, fuga magnam voluptatibus, voluptatem inventore consectetur.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum iusto earum aspernatur repellendus sequi eligendi doloribus quia nesciunt maxime nam quidem porro, magnam fugit distinctio impedit voluptatum veniam! Magni, minus.</p>
			</div>
			<div class="call-out blue">
				<h4>Feature 2</h4>
				<p>Neque velit itaque, fugit eaque doloremque! Nostrum iste, praesentium, aliquid cupiditate earum, numquam cum incidunt commodi nesciunt minima illo at adipisci voluptate maxime fuga. Ab ipsam aspernatur eius excepturi sed!  incidunt commodi nesciunt minima illo at adipisci voluptate maxime fuga. Ab ipsam aspernatur eius excepturi sed!</p>
			</div>
			<div class="call-out green">
				<h4>Feature 3</h4>
				<p>Ad velit illum rem incidunt amet non sapiente libero nostrum. Quibusdam repellat tenetur dolorem nulla velit fugit perferendis doloremque, quia natus aliquam praesentium aliquid suscipit sit. Voluptatum quas, beatae aliquam.</p>
			</div>
		</div>
	</div>

	<!-- ******************************************* NOTES *******************************************  -->
	
	<div class="container">
		<h1>Notes</h1>
		<strong>Summary Notes</strong>
		<ul>
			<li>You need a parent element that is given <code>display: flex</code> to enable flexbox.</li>
			<li>The baseline is <code>flex: 1</code>. So three sibling elements with <code>flex: 1;</code> will be the same width. A sibling element with <code>flex: 2;</code> would be twice as wide as the <code>flex: 1</code>.</li>
		</ul>
		<strong>Example 1</strong>
		<ul>
			<li>The <code>.form-row</code> divs are the parent elements.  They are given <code>display: flex</code> which allows me to use flexbox.</li>
			<li>By giving the input element <code>flex: 1;</code>, it will take up the rest of the width.  If I also gave the label <code>flex: 1;</code>, they would take up an equal width.</li>
		</ul>
		<strong>Example 2</strong>

	</div>
	
	
	
</body>
</html>