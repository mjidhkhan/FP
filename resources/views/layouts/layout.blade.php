<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="{{ asset('css/app.css') }}"/>
	<title>Laravel 5.8</title>
	<style>
	@import url('https://fonts.googleapis.com/css?family=Nunito+Sans|Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap');
	
	*{
        margin: 0px;
        padding: 0px;
    }
	body{
		font-family: 'Nunito', sans-serif;
		font-family: 'Nunito Sans', sans-serif;
		font-weight: 300;
	}
	

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 background-color: #eee;
}

li {
  float: left;
}

li a {
  	display: block;
	color: rgb(2, 85, 133);
  	text-align: center;
  	padding: 14px 16px;
  	text-decoration: none;
	
}

li a:hover {
  background-color: rgb(77, 91, 99);
  color: #FFFFFF;
}

.container{
	padding:20px;
}
.section{
	display: flex;
	direction: ltr;

}
</style>
</head>
<body>
	<ul>
		<li><a class="active" href="/">Home</a></li>
		<li><a href="/about">About Us</a></li>
		<li><a href="/contact">Contact Us</a></li>
		<li><a href="/customers">Customer List</a></li>
	</ul>

	
	
		@yield('content')
	
</body>
</html>