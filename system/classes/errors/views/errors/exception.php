<!DOCTYPE>
<html>
	<head>
		<title>An error has occured</title>
		<style type="text/css">
		html{font-size: 100%;}
		body {padding-top: 60px;padding-bottom: 40px;margin: 0;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;font-size: 14px;line-height: 20px;color: #333;background-color: #FFF}
		h1,h2,h3,h4,h5,h6 {margin: 10px 0;font-family: inherit;font-weight: bold;line-height: 20px;}
		h1,h2,h3 {line-height: 40px;}h1{font-size: 38.5px;}h2{font-size: 31.5px;}h3{font-size: 24.5px;}h4{font-size: 17.5px;}h5{font-size: 14px;}h6{font-size: 11.9px;}
		.container{padding-right: 20px;padding-left: 20px;}
		.row{margin-left:20px;}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>An error has occured</h1>
			<div class="row">
				<h3>Description</h3>
				<p>An error has occrued that prevented this page for displaying</p>
			</div>
			<?php if(isset($e)): ?>
			<div class="row">
				<h3>Exception</h3>
				<table>
					<tbody>
						<tr><td>Message</td><td><?php echo $e->getMessage(); ?></td></tr>
						<tr><td>Code</td><td><?php echo $e->getCode(); ?></td></tr>
						<tr><td>File</td><td><?php echo $e->getFile(); ?></td></tr>
					</tbody>
				</table>
			</div>
			<div class="row">
				<h3>Stack Trace</h3>
				<pre><?php echo $e->getTraceAsString(); ?></pre>
			</div>
		<?php endif; ?>
		</div>
	</body>
</html>