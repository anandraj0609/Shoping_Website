<?php
  $links = "index.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNITY STORE</title>
    <!-- <link rel="stylesheet" href="stylee.css"> -->
    <link rel="shortcut icon" href="images/top/asd.png">
</head>
<style>
  body
  {
    margin: 0px;
    padding: 0px;
    font-family: poppins;
  }
  a
  {
    text-decoration: none;
  }
*{
    box-sizing: border-box;
  }
#main{
    width:100%;
    height: 100vh;
    background-color: #222222;
    position: relative;
  }
.bg{
    width:100%;
    height: 100vh;
}
.bg video
{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position:center;
}
.text{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: rgba(14, 14, 14, 0.70);
}
.text strong{
    font-size: 3rem;
    width: 100%;
    text-align: center;
    color: white;
    line-height: 50px;
}
.text p
{
    color: rgba(230,230,230,0.92) ;
    text-align: center;
    font-size: 1.5rem;
    font-weight: 400;
}
.btn
{
    width: 200px;
    height: 45px;
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    /* background-color: iolet; */
    background:rgb(180,180,180);
    margin-top: 10px;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.2);
}
.btn:hover
{
    background-color: rgb(212, 171, 212);
    /* background:rgb(200,200,200); */
    transition: all ease 0.3s;
}

/* .logo{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    display: flex;
    justify-content:first baseline;
    align-items: center;
    flex-direction: column;
} */

.text h1{
    font-size: 4rem;
    width: auto;
    margin-top: 0px;
    margin-bottom: 0px;
    text-align: center;
    color: rgba(230,230,230,0.92) ;
    line-height: 50px;
}

.text h5
{
    color: rgba(230,230,230,0.92) ;
    text-align: center;
    font-size: 1.2rem;
    font-weight: 400;
    margin-top: 15px;
    margin-bottom: 40px;
}

@media(max-width:700px){
    .text strong{
        font-size: 2rem;
        line-height: 40px;
        padding: 0px 10px;
    }
    .text p{
        font-size: 1rem;
    }
    .btn{
        width: 180px;
        height: 44px;
    }
}
@media(max-width:520px){
    .text strong {
        font-size:1.6rem;
        line-height: 30px;
    }
    .text p{
        width: 90%;
    }
    .btn{
        margin-top: 20px;
        font-size: 0.9rem;
    }
}
@media(max-width:400px){
    .text strong{
        font-size: 1.3rem;
        line-height: 30px;
    }
}

.text img
{
    width: 200px;
    margin-bottom: 20px;
}
</style>
<body>
    <section class="main">
      <div class="bg">
          <!-- <img src="front-img.jpg" alt="img"> -->
          <video src="images/top/mix_ved.mp4" autoplay loop muted></video>
      </div>
      <!-- <div class="logo">
          <h1>AR_GROUP</h1>
          <h5>Bulding Careers & Creating Opportunity</h5>
      </div> -->
      <div class="text">
        <!-- <h1>AR_GROUP</h1>
        <h5>Bulding Careers & Creating Opportunity</h5> -->
          <img src="images/top/asd.png" alt="logo">
          <strong><span class="type"></span></strong>
          <p>The Best Place To Purchage Any Thing</p>
         <a href='<?php echo $links; ?>' class="btn">EXPLORE</a>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
     var typed = new Typed('.type', {
  // Waits 1000ms after typing "First"
    strings: ['A change you can see.', 'A few clicks is all it takes.', 'A fresh approach to shopping.', 'A great place to be.','A higher form of shopping.','Find it, love it, buy it.'],
    typeSpeed:14,
    backSpeed:16,
    loop:true,
    });
    </script>
</body>
</html>