<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Printable Table</title>
	<style>
		.hide {
			color: red;
			font-size: 1.2rem;
		}
		@media print {
			.hide {
				display: none;
			}
		}
	</style>
</head>
<body>
	<p>
		The 'hide' class is red and larger than the rest of the table.  When you go to print, it will be hidden.
	</p>
	<table>
		<tr>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
			<td>Stuff</td>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
			<td>Stuff</td>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
		</tr>
		<tr>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
			<td>Stuff</td>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
			<td>Stuff</td>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
		</tr>
		<tr>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
			<td>Stuff</td>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
			<td>Stuff</td>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
		</tr>
		<tr>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
			<td>Stuff</td>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
			<td>Stuff</td>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
		</tr>
		<tr>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
			<td>Stuff</td>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
			<td>Stuff</td>
			<td class="hide">Stuff</td>
			<td>Stuff</td>
		</tr>
	</table>
	
</body>
</html>