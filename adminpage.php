<!DOCTYPE html>
<html>
<head>

<style>
* {
  box-sizing: border-box;
}

    body{
    background: white url("def.jpg");
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>
<div class="header">

  <h1>ElectroNation</h1>
  
</div>
<div class="navbar">
        <a href="home.php">Home</a>
        <a href="adminpage.php" class="active">Add Products</a>
        <a href="reviewvalidate.php">View Reviews!</a> 
        <a href='home.php' class='right'>Logout</a> 
        </div>
<pre>
	<form action="addproduct.php" method="post" enctype="multipart/form-data">
		Product name:<input type="text" name="pname">
		Product type: <select name="ptype">
						<option value="mobile">Mobile</option>
						<option value="camera">Camera</option>
					</select>
		Brand:	     <input type="text" name="btype">
		Upload image:	   <input type="file" name="pimage" id="pimage">
		Description:	<input type="text" name="pdescript">
		Cost:		<input type="number" name="pcost">
	


                  <input type="submit" value="Add Product" >   <input type="reset" value="Reset" > 
		
	</form>
</pre>
</body>
</html>