<html lang="en">
	<head>
		<link rel="stylesheet" href="css/style.css">
		<script src="js/app.js"></script>
		<title>Trello Board</title>
		

	</head>
	<body>
		<div class="board">
			<?php for($i=0;$i<15;$i++){?>
				<div class="list">
					<div class="list-title">Title List <?php echo $i+1; ?></div>
					<div class="card-wraper sortable droptrue connectedSortable">
						<div class="card ui-state-default">
							<div class="card-label-wrap">
								<div class="card-label bug"></div>
							</div>
							<div class="card-title">Create new task for manager</div>
						</div>
						<div class="card ui-state-default">
							<div class="card-title">Cretae new database with some new fresh columns and try to mainatian the speed and performance as much improved as we can.</div>
						</div>
					</div>
				</div>
			<?php }?>
			
		</div>
		
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
		$( function() {
		$( ".sortable" ).sortable({
		  placeholder: "ui-state-highlight",
		  connectWith: ".connectedSortable",
		  start: function(event, ui){
			  var height = $(ui.item).outerHeight();
			  $(".ui-state-highlight").height(height);
			  $(ui.item).addClass('dragging');
		  },
		  stop: function(event, ui){
			  $(ui.item).removeClass('dragging');
		  }
		});
		$( ".sortable" ).disableSelection();
		} );
		</script>
		
	</body>
</html>