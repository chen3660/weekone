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
	<style>
		#box{
			width: 100px;
			transition: width 2s;
		}
		#box:hover{
			width: 300px;
		}
	</style>
</head>
<body>
<h1 style="margin-left: 105px;">用户注册页面</h1>
<form class="form-horizontal" action="create" method="post">
	{{csrf_field()}}
	<div class="form-group" style="margin-top: 100px;">
		<div class="col-sm-3 col-xs-8" style="margin-left: 50px;">
			<input type="text" name="nickname" class="form-control" id="inputEmail3" placeholder="昵称" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-3 col-xs-8"  style="margin-left: 50px;">
			<input type="password" name="pwd" class="form-control" id="inputPassword3" placeholder="密码" required>
		</div>
	</div>
	<div class="form-group" >
		<div class="col-sm-1 col-xs-3" style="margin-left: 50px; float: left">
			<select class="form-control">
				<option>+86</option>
				<option value="">中国 +86</option>
				<option>中国香港特别行政区 +852</option>
				<option>中国澳门特别行政区 +853</option>
				<option>中国台湾地区 +886</option>
			</select>
		</div>
		<div class="col-sm-2 col-xs-5" style=" float: left">
			<input type="tel" name="phone" class="form-control" id="inputPassword3" placeholder="手机号码" required pattern="1[3578]\d{9}">
		</div>
	</div>
	<div class="form-group">

	</div>
	<div class="form-group" style="margin-left: 50px;">
		<div class=" col-sm-5">
			<button type="submit" id="box" class="btn btn-default">注册</button>
		</div>
	</div>
</form>
</body>
</html>