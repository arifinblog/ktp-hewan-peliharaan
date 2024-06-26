<!DOCTYPE html>
<html>
<head>
	<title>KTP Hewan Peliharaan Generator</title>
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrap.min.js"></script>

    <style>
    	
    	<style>
    .ruet
    {
        background-color:#008040;
        border-bottom: 6px solid #004f27;
        height:50px;
        width:100px;
        color:#ffffff;
        font-weight: bold;
        font-size:18px;      
        text-align:center;
        border-radius:5px;
        padding:10px 20px 10px 20px;


}
.ruet:hover
{
   
   background-color: #008040;
   border-bottom-width: 4px; 
   
  
}

a:link
{
  color:#ffffff;
  text-decoration:none;
  
} 

.ruet:active
{
    border-bottom-width:1px;
    background-color: #00a653;


} 

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(40,40,40);
    box-shadow: 5px 5px 5px grey;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 18px;
    color: white;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: white;
    background-color: #3F51B5;  
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 20px;
    font-size: 30px;
    margin-left: 50px;
}



.nav
{
   border-radius: 0px;
   background-color: #3F51B5;
   border:none;
}

  .foot
  {
          background-color: rgb(40,40,40);
          padding: 20px;
          color: white;
          text-align: center;
          clear: left;
          max-width: 100%;
          margin-top:500px;
          


          
  }

  .bh
  {
      font-size:30px;
      cursor:pointer;
      color: white; 
      margin-left: 20px;
      padding:5px;

  }
  .ch
  {
     font-size: 25px; 
     margin-left:15px;
  }
  .bh:hover
  {
      background-color: black;
  }

  @media only screen and (max-width:400px)
  {
    .ch
    {
       font-size:20px;
       margin-left:2px;
    }
  }



    </style>
</head>
<body>
 
       <header>
         <nav class="navbar navbar-inverse nav">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                  <span class="bh" onclick="openNav()">&#9776;</span>
                  <span class="ch"><a style="color: white;" href="index.html">KTP Hewan Peliharaan Generator</a></span>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                    <!--<li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>-->
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                  </ul>
                </div>
              </div>
        </nav> 
           



            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="https://www.dianarifin.com" target="_blank">How To Use</a>
              
            </div>

            


           
            <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
            </script>

            <div class="container">
                <!--<div id="branding">
                    <h1><span class="highlight">RUET WEB</span> Generator</h1>
                </div>
                <nav>
                    <ul>
                        
                    </ul>
                </nav>-->
            </div>
        </header>
    

  
  
    <section id="main" style="margin-top:100px;">

     <div class="container">
       

       <div class="row">
         <div class="col-sm-6">
             
         <div class="form-group">  
         <label for="bn"></label>   
        <form action="view.php" method="POST" enctype="multipart/form-data">

               
       <div class="form-group">
      <label for="bn">Nama Lengkap Hewan</label>
			<input type="text" class="form-control" name="fname" placeholder="Nama Peliharaan" required>
			</div><br>
			<div class="form-group">
            <label for="en">Jenis</label>
			<input type="text" class="form-control" name="ename" placeholder="Jenis" required>
			</div><br>
			<div class="form-group">
            <label for="">Alamat</label>
			<input type="text" class="form-control" name="faname" placeholder="Alamat" required>
			</div><br>
			<div class="form-group">
            <label for="">Nama Pemilik</label>
			<input type="text" class="form-control" name="mname" placeholder="Nama Pemilik" required>
			</div><br>
			<div class="form-group">
            <label for="">Tgl Lahir</label>
			<input type="date" class="form-control" name="dname" placeholder="Tgl Lahir" required>
			</div><br>
			<div class="form-group">
            <label for="">No Telp Pemilik</label>
			<input type="text"  class="form-control" name="nid" placeholder="no telp Pemilik" required>
			</div><br><br>
			<div class="form-group">
            <label for="">Nama pangilan hewan</label>
			<input type="text" class="form-control" name="si" placeholder="nama singkat" required>
			</div><br><br>
			<div class="form-group">
      <label for="">Upload Gambar</label>
			<b></b> <input type="file" name="file" required>
			</div><br>
			<input type="submit" class="btn btn-success" name="" value="Submit">
			</form>
      </div>

           
           </div>
           </div>
           </div>
       </section>

  
       <footer class="foot">
            <center><p>Copyright &copy;2024<br>Developed By <a href="https://www.dianarifin.com">Dian Arifin</a></p></center>
        </footer>


</body>
</html>
