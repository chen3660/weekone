<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<h1 style="margin-left: 105px;">用户登录页面</h1>
<form class="form-horizontal" action="logindo" method="post">
	{{csrf_field()}}
	<div class="form-group" style="margin-top: 100px;">
		<div class="col-sm-3 col-xs-8" style="margin-left: 50px;">
			<input type="text" name="idcard" class="form-control" id="inputEmail3" placeholder="账号" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-3 col-xs-8"  style="margin-left: 50px;">
			<input type="password" name="pwd" class="form-control" id="inputPassword3" placeholder="密码" required>
		</div>
	</div>
	<div class="form-group">
	</div>
	<div class="form-group" style="margin-left: 50px;">
		<div class=" col-sm-5">
			<button type="submit" id="box" class="btn btn-default">登录</button>
		</div>
	</div>
</form>
</body>
</html>