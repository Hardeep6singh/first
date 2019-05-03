<!DOCTYPE html>
<html>
<head>
<title>
  @yield('tittle')
</title>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
img {
  
  margin-right: auto;
  
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="/">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="/About">About Us</a></li>
  <li><a href="/ProductInfo">Product Info</a></li>
  <li><a href="/AddProduct">Add Product</a></li>
</ul>


@yield('text')
</body>
</html>
