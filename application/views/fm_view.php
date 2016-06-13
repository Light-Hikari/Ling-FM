<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Ling</title>

<link href="//cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="fm.css" rel="stylesheet">
</head>
<body>
<div id="player"></div>
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-xs-12 col-md-8 text-center">
			<div class="fm">
			    <img src="" class="img-responsive" id="song-image">
			    <div class="info">
			    	<h3 id="song-name"></h3>
			    </div>
	      	  	<div class="jp-seek-bar" style="width: 100%;">
			      	<div class="jp-play-bar" style="width:0; overflow: hidden;"></div>
			  	</div>
			  	<div class="controls" style="width: 100%;">
			        <div class="btn-group btn-group-lg" style="width: 100%;" role="group" aria-label="...">
						<button type="button" class="btn btn-default jp-play">
							<span class="glyphicon glyphicon-play" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default jp-pause">
							<span class="glyphicon glyphicon-pause" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default" id="next">
							<span class="glyphicon glyphicon-forward" aria-hidden="true"></span>
						</button>
					</div>
			  	</div>
			  </div>
		</div>
	</div>
</div>
<script src="//cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/jplayer/2.9.2/jquery.jplayer.min.js" type="text/javascript"></script>
<script src="fm.js" type="text/javascript"></script>
</body>
</html>