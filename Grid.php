<doctype="html">
	<html>
		<?php
			include "extras.php";
			$page_title="Grid";
			echo $head1.$page_title.$head2;
		?>
		<body>
			<div id="wrapper">
				<?php
					echo $nav . $header1 . $page_title . $header2 . $grid_main . $footer1 . $footer2;
				?>
			</div>
		</body>
	</html>