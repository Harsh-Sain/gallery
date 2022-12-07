head>
<meta charset="ISO-8859-1">
<title>Stock Photos</title>
<style> 
body { 
  background-image: linear-gradient(120deg,rgba(0,0,0, 0.5),rgba(0,0,0, 0.5)),url(back2.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;

}
.banner
{
  height: 100vh;
  width: 100%;
  background-size: cover;
  background-position: center;
  position: relative;
}
.navbar{
  width: 85%;
  margin: auto;
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.logo{
  flex-basis: 15%;
  cursor: pointer;
}
.logo img{
  width: 125px;
  margin: 20px 0;
}
nav,.navbar ul{
  display: flex;
  align-items: center;
}
.navbar ul li{
  list-style: none;
  color: #fff;
  margin-right: 40px;
  text-decoration: none;
  cursor: pointer;
}
.navbar ul li a{
  color: #fff;
  font-family: arial;
  text-decoration: none;
}
button{
  padding: 12px 20px;
  outline: none;
  border: 0;
  color: #7b91ce;
  font-weight: bold;
  background-size: #fbfbfb;
  cursor: pointer;
  border-radius: 5px;
  cursor: p;
}
.container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  line-height: 10px;
  border-radius: 3px;
}
.btn {
  width: 6rem;
  height: 3rem;
  position: absolute;
  left: 37%;
  right: -50%; 
  

}

.form-control{

  margin: 5px;
  width: 20rem;
  height: 4rem;
  text-align: center;
  font-size: 20px;
  margin-bottom: 2rem;
}
</style>
</head>

<body>
  <div class="banner">
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="">
            </div>
            <nav>
                <ul>
                    <li><a href="demo.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="index.html">Gallery</a></li>
                </ul>
            </nav>
        </div>


<div class="container">

</div>
<div class="container">
  <form action="code.php" method="POST">
    <div class="row">
      <div class="col">
        <input type="email" class="form-control" id="Username" placeholder="Enter email" name="email">
      </div>
      <div class="col">
        <input type="password" class="form-control" placeholder="Enter password" name="password">
      </div>
    </div>
    
    <input type="submit"  name="login_btn" class="btn btn-primary mt-3" value="login">
  </form>
</div>
</body>
</html>