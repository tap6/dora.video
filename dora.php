<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>哆啦A梦新番</title>
	<link href="dora/css/bootstrap-4.0.0.css" rel="stylesheet">
	<script src="dora/js/jquery-3.2.1.min.js"></script>
	<script src="dora/js/popper.min.js"></script>
	<script src="dora/js/bootstrap-4.0.0.js"></script>

	<link href="dora/css/mycss.css" rel="stylesheet">
	<script src="dora/js/setvideo.js"></script>
	<?php

			function getDir( $path ) {
				//判断目录是否为空
				if ( !file_exists( $path ) ) {
					return [];
				}

				$files = scandir( $path );
				$fileItem = [];
				foreach ( $files as $v ) {
					$newPath = $path . DIRECTORY_SEPARATOR . $v;
					if ( is_dir( $newPath ) && $v != '.' && $v != '..' ) {
						$fileItem = array_merge( $fileItem, getDir( $newPath ) );
					} else if ( is_file( $newPath ) ) {
						$fileItem[] = $newPath;
					}
				}

				return $fileItem;
			}
			
			function getFilename($path){
				return substr($path,strripos($path,"\\")+1);
				
			}
	?>
</head>

<body>
	<div class="container">
		<div id="head" style="text-align:center;">
			<h1 style="font-size: 55px" id="ti">哆啦A梦.video</h1>

		</div>
		<hr>
		<div style="text-align: center">
			<video controls="controls" poster="dora/images/img.jpg" width="100%" id="myVideo"></video>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-4">
				<!-- 哆啦A梦新番Div -->
				<h2 style="text-align: center">哆啦A梦新番 <small style="color: gray">每周更新</small></h2>
				<hr>
				<?php
				$path = realpath( 'dora/src_dora/哆啦A梦新番/' );
				$html_dora_xf;
				foreach ( getDir( $path ) as $value ) {
					//$value = basename( $value );
					$value = getFilename( $value );
					//echo $value;
					$html_dora_xf=( '<button value="' . 'dora/src_dora/哆啦A梦新番/' . $value . '" onClick="setVideo(this)">' . $value . '</button><br>' ).$html_dora_xf;
				}
				echo $html_dora_xf;

				?>
			</div>
			<div class="col-md-5">
				<!-- 哆啦A梦大电影Div -->
				<h2 style="text-align: center">哆啦A梦剧场版</h2>
				<hr>
				<?php
				$path = realpath( 'dora/src_dora/哆啦A梦剧场版/' );

				foreach ( getDir( $path ) as $value ) {
					$value = basename( $value );
					echo( '<button value="' . 'dora/src_dora/哆啦A梦剧场版/' . $value . '" onClick="setVideo(this)">' . $value . '</button><br>' );
				}
				?>
			</div>
			<div class="col-md-3">
				<!-- 其他电影Div -->
				<h2 style="text-align: center">其他电影</h2>
				<hr>
				<?php
				$path = realpath( 'dora/src_dora/其他电影/' );

				foreach ( getDir( $path ) as $value ) {
					$value = basename( $value );
					echo( '<button value="' . 'dora/src_dora/其他电影/' . $value . '" onClick="setVideo(this)">' . $value . '</button><br>' );
				}
				?>

				<br>
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- Include all compiled plugins (below), or include individual files as needed -->

</body>
</html>