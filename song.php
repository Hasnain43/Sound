<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="main.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/332a215f17.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/favicon-32x32.png">
    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Poppins', sans-serif;
    background-image:url(images/login1.jpg);
        background-size: cover;
  background-repeat: no-repeat;
  background-position-y: center;   
}
.navbar{
    display: flex;
    align-items: center;
    padding: 20px;
}
nav{
    flex: 1;
    text-align: right;
}
nav ul{
    display: inline-block;
    list-style-type: none;
}
nav ul li{
    display: inline-block;
    margin-right:20px;
    transition: transform 0.5s;
}
.navbar ul li:hover{
    transform: translateY(-5px);
}
a{
    text-decoration: none;
    color: #000;
}
.container{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}
.col-2{
    flex-basis: 50%;
    min-width: 300px;
}
.col-2 img{
    max-width: 100%;
    padding:10px 0px ;
}
.col-2 h1{
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0px;
}
.btn{
    display: inline-block;
    background:green;
    color:#fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;    
    transition: background 0.5s;
}
.btn:hover{
    background:rgb(16, 70, 19);
}
.header{
    background: radial-gradient(#fff, rgba(82, 82, 74, 0.4));
}
.header .row{
    margin-top: 95px;
}
.categories{
    margin: 20px 0;
}
.col-3{
    flex-basis: 30%;
    min-width: 250px;
    margin-bottom: 30px;
}
.col-3 img{
    width: 100%;
}
.small-container{
    max-width: 1080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.col-4{
    flex-basis: 25%;   
    padding: 10px;
    min-width: 200px;
    margin-bottom: 50px;
    transition: transform 0.5s;
}
.col-4 img{
    width: 100%;
}
.title{
    text-align: center;
    margin: 0 auto 20px;
    position: relative;
    line-height: 50px;
    color: #555;
}
.title::after{
    content:'';
    background: #ff523b;
    width: 80px;
    height: 5px;
    border-radius: 5px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
}
.h4{
    color:#555 ;
    font-weight: normal;
}
.col-4 p{
    font-size: 14px;
}
.rating .fa{
    color: #ff523b;
}
.col-4:hover{
    transform: translateY(-5px);
}
.offer{
    background: radial-gradient(#fff, rgba(82, 82, 74, 0.4)); 
    margin-top: 30px;
    padding: 30px 0;
}
.col-2 .offer-img{
    padding: 50px;
}
small{
    color: #555;
}
.our-team{
    padding-top: 50px;
}
.our-team .col-4{
    text-align: center;
    padding: 40px 20px;
}
.our-team .col-4 img{
    width: 150px;
    margin-top: 0px;
    border-radius: 50%;
}
.footer{
    background: #000;
    color: #8a8a8a;
    font-size: 14px;
    padding: 60px 0 20px;
}
.footer p{
    color: #8a8a8a;
}
.footer h3{
    color: #fff;
    margin-bottom: 20px;
}
.footer-col-1, .footer-col-2, .footer-col-3{
    min-width: 250px;
    margin-bottom: 20px;
} 
.footer-col-1{
    flex-basis: 30%;
}
.footer-col-2{
    flex: 1;
    text-align: center;
}
.footer-col-2 img{
    width: 180px;
    margin-bottom: 20px;
}
.footer-col-3{
    flex-basis: 12%;
    text-align: center;
}
ul{
    list-style-type: none;
}
.app-logo{
    margin-top:20px;
}
.app-logo img{
    width: 140px;
}
.footer hr{
    border: none;
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
}
.copyright{
    text-align: center;
}
.about{
    background: radial-gradient(#fff, rgba(82, 82, 74, 0.4));
}
.menu-icon{
    width: 28px;
    margin-left: 20px;
    display: none;
}

@media only screen and (max-width:800px){
    nav ul{
        position: absolute;
        top: 70px;
        left: 0;
        background: #333;
        width: 100%;
        overflow: hidden;
        transition: max-height 0.5s;
    }
    nav ul li{
        display: block;
        margin-right: 50px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    nav ul li a {
        color: #fff;
    }
    .menu-icon{
        display: block;
        cursor: pointer;
    }
}

@media only screen and (max-width:600px){
    .row{
        text-align: center;
    }
    .col-2, .col-3, .col-4{
        flex-basis: 100%;
    }
}


.side-area{
    margin-bottom: 30px;
}
.side-area:last-child{
    margin-bottom: 0px;
}
.product-side .side-content{
    border-bottom: 1px solid #eee;
}
.product-side .side-content:last-child{
    border-bottom: 5px;
}
.product-side .list{
    border-top: 1px solid #ddd;
    padding-top: 25px;
    margin-top: 25px;
}
.product-side .list:first-child{
    padding-top: 0;
    margin-top: 0;
    border-top: 0px solid transparent;
}
.product-side .list li{
    margin-bottom: 20px;
    transition: 0.5s;
}
.product-side .list li a{
    font-size: 14px;
    font-weight: normal;
    color: #606060;
    position: relative;

}
.side-shadow{
    box-shadow: 0px 10px 10px 0px rgba(153,153,153,0.2);
}
@media (max-width: 991px){
    .side-title{
        padding-left: 0;
        padding-right: 0;
    }
}
.side-title h3{
    margin-bottom: 20px;
    font-size: 14px;
    color: #fff;
    font-weight: 600;
    line-height: 40px;
    position: relative;
    background: #444546;
    padding: 10px 15px 10px 30px;
    text-transform: uppercase;
}
/*======Product Items===*/
@media (max-width: 991px){
    .product-item{
        width: 100% !important
    }
    
}
.product-top .product-sec h5{
    font-size: 14px;
    font-weight: 600;
    text-transform: capitalize;
    margin-bottom: 0;

}
.product-cate img{
    width: 100%;
}
.product-cate .product-icon{
    position: absolute;
    right: -30px;
    bottom: 100px;
    visibility: hidden;
    opacity: 0;
    transition: 0.5s;
}
.product-cate .product-icon a{
    width: 50px;
    height: 50px;
    display: inherit;
    background: #000;
    border-radius: 50%;
    line-height: 50px;
    text-align: center;
    color: #fff;
    margin-right: 10px;
    margin-top: 5px;
}
.product-cate:hover .product-icon{
    position: absolute;
    right: 11px;
    bottom: 100px;
    visibility: visible;
    opacity: 1;
}
.product-cate .product-des{
    text-align: center;
    margin-top: 23px;
}
.product-cate .product-des h5{
    font-size: 16px;
    color: #000;
    margin-bottom: 0;
}
.product-cate .product-des p{
    font-size: 18px;
    font-weight: 600;
    color: #606060;
}
.product-btn{
    display: inline-block;
    width: 180px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    background: #fff;
    font-size: 18px;
    font-weight: 700;
    color: #1e1e1e;
    transition: all .4s ease-in-out;
    text-transform: capitalize;
}
.product-btn:hover{
    color: #fff!important;
    background: #000;
    text-decoration: none;
}
@media(max-width: 991px){
    .product-btn{
        height: 50px;
        width: 140px;
        line-height:50px;
    }
}
.product{
    background: radial-gradient(#fff, rgba(82, 82, 74, 0.4));
}

    </style>
  </head>
  <body>
    <div class="product">
 <!-- header section strats -->
 <?php require 'partials/nav.php' ?>
    <!-- end header section -->

      <!---Side bar-->

      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div>
              <aside class="side-area product-side side-shadow mt-0">
                <div class="side-title">
                      <h3> music industry</h3>
                    </div>
                    <div class="side-content">
                      <ul class="list">
                        <li>
                          <input type="radio" aria-label="radio button" />
                          <a href="boys product.html">Bollywood</a>
                        </li>
                        <li>
                          <input type="radio" aria-label="radio button" />
                          <a href="girls product.html">Hollywood</a>
                <div class="side-title">
                  <h3>songs</h3>
                </div>
                <div class="side-content">
                  <ul class="list">
                    <li>
                      <input type="radio" aria-label="radio button" />
                      <a href="boys shirt 1.html">Neffex</a>
                    </li>
                    <li>
                      <input type="radio" aria-label="radio button" />
                      <a href="pt t shirt.html">ED SHEREN</a>
                    </li>
                    <li>
                      <input type="radio" aria-label="radio button" />
                      <a href="g frocks.html">TYLOR SWIFT</a>
                    </li>
                    <li>
                      <input type="radio" aria-label="radio button" />
                      <a href="p.t track pant.html">justin bieber</a>
                    </li>
                    <li>
                      <input type="radio" aria-label="radio button" />
                      <a href="#">eminem </a>
                    </li>
                    <li>
                      <input type="radio" aria-label="radio button" />
                      <a href="logos.html">alan walker</a>
                    </li>
                    <li>
                      <input type="radio" aria-label="radio button" />
                      <a href="BELT.HTML">drake</a>
                    </li>
                    <li>
                      <input type="radio" aria-label="radio button" />
                      <a href="socks.html">Dua lipa</a>
                    </li>
                  </ul>
                  
                </div>
              </aside>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row">
              <div class="col-lg-12">
                <div
                  class="product-top d-flex justify-content-between align-items-center"
                >
                  <div class="product-sec product-item">
                    <h2 class="my-5">Songs</h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="product-cate">
                  <div>
                    <a href="boys shirt 1.html"><img src="images/neffex.jpg" alt="" /></a>
                    <div class="product-icon">
                      <ul>
                        <li>
                          <a href=""><i class="fas fa-heart"></i></a>
                        </li>
                       
                      </ul>
                    </div>
                    <!------>
                    <div class="product-des">
                      <h5>Neffex</h5>
                     
                    </div>
                  </div>
                </div>
              </div>
              <!----->
              <div class="col-lg-4 col-sm-6">
                <div class="product-cate">
                  <div>
                    <a href="gskirt.html"><img src="Images/sheren.jpg" alt="" /></a>
                    <div class="product-icon">
                      <ul>
                        <li>
                          <a href=""><i class="fas fa-heart"></i></a>
                        </li>
                    
                      </ul>
                    </div>
                    <!------>
                    <div class="product-des">
                      <h5>ed sheren</h5>
    
                    </div>
                  </div>
                </div>
              </div>
              <!----->
              <div class="col-lg-4 col-sm-6">
                <div class="product-cate">
                  <div>
                   <a href="#">  <img src="Images/tylor.jpg" alt="" /></a>
                    <div class="product-icon">
                      <ul>
                        <li>
                          <a href=""><i class="fas fa-heart"></i></a>
                        </li>
                     
                      </ul>
                    </div>
                    <!------>
                    <div class="product-des">
                      <h5>TYLOR swift</h5>
                     
                    </div>
                  </div>
                </div>
              </div>
              <!----->
              <div class="col-lg-4 col-sm-6">
                <div class="product-cate">
                  <div>
                    <a href="#"><img src="Images/eminem.jpg" alt="" /></a>
                    <div class="product-icon">
                      <ul>
                        <li>
                          <a href=""><i class="fas fa-heart"></i></a>
                        </li>
                       
                      </ul>
                    </div>
                    <!------>
                    <div class="product-des">
                      <h5>eminem</h5>
                  
                    </div>
                  </div>
                </div>
              </div>
              <!----->
               
              <div class="col-lg-4 col-sm-6">
                <div class="product-cate">
                  <div>
                    <a href="#"><img src="Images/justin.jpg" alt="" /></a>
                    <div class="product-icon">
                      <ul>
                        <li>
                          <a href=""><i class="fas fa-heart"></i></a>
                        </li>
                       
                      </ul>
                    </div>
                    <!------>
                    <div class="product-des">
                      <h5>justin</h5>
                    
                    </div>
                  </div>
                </div>
              </div>
              <!----->
              <div class="col-lg-4 col-sm-6">
                <div class="product-cate">
                  <div>
                    <a href="p.t track pant.html"><img src="Images/alan.jpg" alt="" /></a>
                    <div class="product-icon">
                      <ul>
                        <li>
                          <a href=""><i class="fas fa-heart"></i></a>
                        </li>
                    
                      </ul>
                    </div>
                    <!------>
                    <div class="product-des">
                      <h5>alan walker</h5>
                     
                    </div>
                  </div>
                </div>
              </div>
             
              <!----->
              <div class="col-lg-12 text-center">
                <a href="" class="product-btn">More music</a>
              </div>
            </div>
          </div>
        </div>
      </div>
<!----footer--->
<?php require 'partials/footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
