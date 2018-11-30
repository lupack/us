<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ewqewq</title>
</head>
<body>
	<form action="/article/50" method='post'>
		用户名: <input type="text" name='uname' /><br>
		年龄: <input type="text" name='age' /><br>
		邮箱: <input type="text" name='email' /><br>

		{{csrf_field()}}
		{{ method_field('PUT') }}

		<button>修改</button>

	</form>

	<form action="/article/40" method="POST">
	   {{csrf_field()}}
	   {{method_field('DELETE')}}

	   <button>删除</button>
	</form>
	
</body>
</html>