<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="C:\Users\hp\Desktop\java\donate.html">
</head>
<body style="font-family: Lato, sans-serif;">

 <div class="sidenav" style="width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0; height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;">
         <div class="login-main-text" style="font-weight: 300; margin-top: 20%;
    padding: 60px;
    color: #fff;
">
            <h2>Sign-in <br></h2>
            <p>Enter details for proceedings.</p>
         </div>
      </div>
      <div class="main" style="margin-left: 40%; padding: 0px 10px; ">
         <div class="col-md-6 col-sm-12">
            <div class="login-form" style="margin-top: 80%;"> 
               <form action="pay.php" method="POST">
        <div class="form-group"> 
        <label>Amount to be donated</label>
      <input type="text"  class="form-control" name="amount"><br>
        </div>
                    <div class="form-group"> 
                     <label>Name</label>
                     <input type="text" class="form-control" name="name">
                  </div>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                     <label>Contact no</label>
                     <input type="text" class="form-control" name="contactno">
                  </div>
                  <button type="submit"  name="submit" value="Proceed To Pay" class="btn btn-black" style="background-color: #000 !important;
    color: #fff;">Submit</button>
               </form>
            </div>
         </div>
      </div> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body> 
</html>
