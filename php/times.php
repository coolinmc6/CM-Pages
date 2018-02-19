<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Times in SQL</title>
	<style>
		
		.start-group, .end-group {
			display: inline-block;
			padding: 0.5rem;
		}
	</style>
</head>
<body>
	<div class="main">
		<?php 

		function printTimes() {
			$hours = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23];
			$minutes = [00, 15,30,45];
			

			
				
			foreach ($hours as $hour) {
				$h = $hour < 10 ? '0'.$hour : $hour;
				$displayHour;
				$ampm;
				if($hour == 0) {
					$displayHour = 12;
					$ampm = 'am';
				} elseif($hour <= 11) {
					$displayHour = $hour;
					$ampm = 'am';
				} elseif($hour == 12) {
					$displayHour = $hour;
					$ampm = 'pm';	
				} else {
					$displayHour = $hour - 12;
					$ampm = 'pm';
				}
				foreach ($minutes as $min) {
					$m = $min < 10 ? '0' . $min : $min;	
					echo "<option value='$h:$m'>$displayHour:$m $ampm</option>";
				}
			}
			
		}	
		 ?>
		
		

		
		<select name="" id="startTime">
		<?php printTimes(); ?>
		</select>

		<select name="" id="endTime">
		<?php printTimes(); ?>
		</select>
		
		
		<button id="add-time">Add Time</button>

		<div class="start"></div>
		<div class="end"></div>
		<button class="new-add">Add Time</button>










	</div>

		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$('#add-time').on('click', function() {
			var info = {};
			info.start = $('#startTime').val();
			info.end = $('#endTime').val();
			info.addTime = 1;

			$.post('function/addTimes.php', info, function(data) {
				console.log(data);
			})
			
		})

		function makeHTMLElement(tag, classes, text, attributes) {
			var d = document.createElement(tag);
			$(d).addClass(classes);
			$(d).append(text);
			for(var prop in attributes) {
				$(d).attr(prop, attributes[prop]);
			}
			return d;

		}


		function makeTime() {
			var s1 = makeHTMLElement('select', 'hour')

			for(var i = 1; i <= 12; i++) {
				var num = i < 10 ? '0' + i : i;
				var o = makeHTMLElement('option', '', num, { value: i});
				$(s1).append(o);
			}

			var s2 = makeHTMLElement('select', 'minutes');
			for(var i = 0; i < 12; i++) {
				var num = i*5 < 10 ? '0' + i*5 : i*5;
				var o = makeHTMLElement('option', '', num, {value: i*5} );
				$(s2).append(o)
			}

			var s3 = makeHTMLElement('select', 'am');
			var am = ["am", "pm"];
			am.map(function(item) {
				var o = makeHTMLElement('option', '', item, {value: item})
				$(s3).append(o)
			})
			

			var d = makeHTMLElement('div', 'time');
			$(d).append(s1, s2, s3)
			return d;
		}

		var a = makeTime();
		var b = makeTime();
		$('.start').append(a)
		$('.end').append(b)


		$('button.new-add').on('click', function() {
			var info = {};

			// convert 12 hour time to 24 hour time for both start and end dates
			var startHour = $('.start .time .hour').val();
			var startMin = $('.start .time .minutes').val();
			var startAM = $('.start .time .am').val();

			if(startAM == 'am') {
				info.startTime = startHour + ":" + startMin;
			} else {
				info.startTime = (parseInt(startHour) + 12) + ":" + startMin;
			}
			// info.startTime = startHour + ":" + startMin + "" + startAM;


			var endHour = $('.end .time .hour').val();
			var endMin = $('.end .time .minutes').val();
			var endAM = $('.end .time .am').val();
			info.endTime = endHour + ":" + endMin + "" + endAM;

			console.log(info);
		})



		
	</script>

	
</body>
</html>