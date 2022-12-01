<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      
    <title>Hello, world!</title>
    <style>
      /* background-image: linear-gradient(to right, #eea2a2 0%, #bbc1bf 19%, #57c6e1 42%, #b49fda 79%, #7ac5d8 100%); */
      body{
        background-blend-mode: multiply,multiply;
        background-image: linear-gradient(to right, #eea2a2 0%, #bbc1bf 19%, #57c6e1 42%, #b49fda 79%, #7ac5d8 100%);
        /* background-image: linear-gradient(to bottom right, #FDFCFB, #E2D1C3); */
        /* background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%); */
      }
      h2{
        color:  #D7FFFE;
        
      }
      h1{
        color: whitesmoke;
      }
      h3{
        color: whitesmoke;
      }
      .row{
    
       padding: 20px 10px;
       border-radius: 35px;
      }
      .navs{
        background-image: linear-gradient(to right, #d7d2cc 0%, #304352 100%);
      }
      .container{
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .fill-box-all{

        margin: 50px 250px;
      }
      
      .show-box{
        background-color: grey ;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 0px 50px;
        padding: 50px 40px;
        height: auto;
        width: auto;
        box-sizing: border-box;
        border: 2px solid ;
        border-radius: 10px;
        
        background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);
      }
      .fill-box{
        background-image: linear-gradient(to bottom right, #0100EC, #FB36F4);
        display: flex;
        flex-direction: column;
        justify-content: center;
         margin: 0px 40px;
         padding: 50px 40px;
         height: auto;
         box-sizing: border-box;
         border: 2px solid #43C6AC ;
         border-radius: 10px;
         
      }
        .col-md-8{
            border: 2px solid black;
            box-sizing: border-box;
        }
        .active{
            background-color: grey;
        }
        .container-fluid{
            display: flex;
            justify-content: center;
        }
        .disabled{
          display: none;
        }

    </style>
 <script src=" 
https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.slim.min.map  "></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navs">
  <a class="navbar-brand" href="index.php">CountryCrud</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>