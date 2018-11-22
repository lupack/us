<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$title}}</title>
</head>
<body>
	<form action="/article" method='post'>
		用户名: <input type="text" name='uname' /><br>
		年龄: <input type="text" name='age' /><br>
		邮箱: <input type="text" name='email' /><br>

		{{csrf_field()}}

		<button>添加</button>

	</form>


	<a href="/article/40/edit">修改</a>

	
</body>
</html>