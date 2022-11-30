<?php include ('./data/inc.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name=viewport content="width=device-width,anicital-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<script type="text/javascript" src="js/jquery-1.11.9.js"></script>
		<script type="text/javascript" src="js/base64.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
	<header class="navbar-fixed-top">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- 手机自适应样式 -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">导航切换</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
							<!--logo图标-->
							
						</div>
						<!-- pc导航样式 -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<!--导航 右侧-->
							<ul class="nav navbar-nav navbar-right">
								
								<li class="dropdown">
									
									<ul class="dropdown-menu">
										
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<!--视频box区域-->
		<div class="container-fluid video-box">
			<div class="container ">
				<div class="tit-name">
					<span>正在播放:</span>
					<h1 id="tittext">Null</h1>
				</div>
				<iframe id="palybox" src="" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="true" allowtransparency="true"></iframe>


				<div class="url-box">
					<div class="input-group">
						<input type="text" id="url" class="form-control url-text" aria-label="Text input with segmented button dropdown" placeholder="请粘贴视频网址>ㅂ<ﾉ ☆" title="请复制你想要看的视频网址，粘贴到此处点击播放即可！">
						<div class="input-group-addon">
							<select class="url-c url-text" title="如发现视频无法正常播放请尝试更换视频线路！" id="jk">
								<option value="<?php echo $aik['jiekou1'];?>" selected>
									<?php echo $aik['jiekou1name'];?>
								</option>
								<option value="<?php echo $aik['jiekou2'];?>">
									<?php echo $aik['jiekou2name'];?>
								</option>
								<option value="<?php echo $aik['jiekou3'];?>">
									<?php echo $aik['jiekou3name'];?>
								</option>
								<option value="<?php echo $aik['jiekou4'];?>">
									<?php echo $aik['jiekou4name'];?>
								</option>
								<option value="<?php echo $aik['jiekou5'];?>">
									<?php echo $aik['jiekou5name'];?>
								</option>
								<option value="<?php echo $aik['jiekou6'];?>">
									<?php echo $aik['jiekou6name'];?>
								</option>
								<option value="<?php echo $aik['jiekou7'];?>">
									<?php echo $aik['jiekou7name'];?>
								</option>
								<option value="<?php echo $aik['jiekou8'];?>">
									<?php echo $aik['jiekou8name'];?>
								</option>
								<option value="<?php echo $aik['jiekou9'];?>">
									<?php echo $aik['jiekou9name'];?>
								</option>
								<option value="<?php echo $aik['jiekou10'];?>">
									<?php echo $aik['jiekou10name'];?>
								</option>
							</select>
						</div>
						<div class="input-group-btn">

							<button type="button" class="btn btn-default btn-play" title="点击开始解析并开始播放" onclick="play()">解析播放</button>
                            <button type="button" class="btn btn-default" title="获取剧集" onclick="t()">获取剧集</button>
						</div>
					</div>

				</div>
				<div id="jj">

                </div>
		</div>
		<div class="container-fluid logo-box">
			<div class="container ">
				
			</div>
		</div>
			<?php  include 'footer.php';?>
			<script type="text/javascript" src="js/tv.js" ></script>
	</body>
</html>
