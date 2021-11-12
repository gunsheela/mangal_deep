<!DOCTYPE HTML>
<html>   <style>  

</style>        <title>About Us</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> <nav>
    <input type="checkbox" id="check">
    <label for="check" class="chckbtn">
    <i class="fas fa-bars">☰</i>
    </label>
           <ul>
               <ti><a class="active"></a></ti>
              <ti><a onclick="hi()" id="hi1ttl">TOTAL ORDERS&nbsp;&nbsp;&nbsp;</a></ti>
              <ti><a href="reviee.php">CONTACT US&nbsp;&nbsp;&nbsp;</a></ti> 
              <ti><a href="index.php">HOME&nbsp;&nbsp;&nbsp;</a></ti>
               <div id="home">
               <ti><a href="login.php">LOGIN</a></ti>
               </div>
               <div id="home1">
               <ti><a href="ac_de.php">ACCOUNT</a></ti>
               </div>
              
           </ul>
               
        </nav>
<h1 align="center">
    Mangal Deep Food Grai
	
    </h1>

    <style>
         .chckbtn{
    font-size: 30px;
    cursor: pointer;
}
           .navbar{
     display: flex;
     align-items: center;
     padding: 20px;
}
nav{
	flex: 8;
	text-align: left;
}
nav ul{
	display: inline-block;
	list-style-type:none;
}

nav ul ti{
	display: inline-block;
}
a{
    text-decoration: none;
    color: #555;
}
            ul{
                background: #2c3e50;
                position: fixed;
                width: 100%;
                height: 100vh;
                top: 250px;
                left: -150%;
                text-align: center;
                word-spacing: 3px;
                transition: all 1.0s;
            
                }
            nav ul ti{
                display: inline-block;
            }
            nav ul ti a{
                font-size: 20px;
                color: white;
            }
            a:hover,a.active{
                background: none;
                color: red;
                transition: .5s
            }
            #check:checked ~ ul{
                left:0;
            }
        #home{
            display: inline-block;
        }
        #home1{
            display: none;
        }
        #check{
            display: none;
        }
        #hi1ttl{
            cursor: pointer;
        }
        #bos{
            font-size: 25px;
        }
        #kol{
            font-size: 25px;
        }
        #mad{
            font-size: 25px;
        }
        #mn{
            background-color: #decddd;
            position: absolute;
            bottom: 0px;
            width: 50%;
        }
        #mn1{
            background-color: #decddd;
            position: absolute;
            bottom: 0px;
            width: 50%;
            left:50%;
        }
         @media(max-width:1037px)
        {
            
            #bos{
            font-size: 23px;
        }
        #kol{
            font-size: 23px;
        }
        #mad{
            font-size: 23px;
        }
            
        }
        @media(max-width:865px)
        {
            
             #bos{
            font-size: 20px;
        }
        #kol{
            font-size: 20px;
        }
        #mad{
            font-size: 20px;
        }
            
        } 
         @media(max-width:611px)
        {
            
             #bos{
            font-size: 17px;
        }
        #kol{
            font-size: 17px;
        }
        #mad{
            font-size: 17px;
        }
            
        }
        @media(max-width:515px)
        {
            
         #a{
             left: 0px;
           
        }#b{
            
           
        }
            
        }
        
         @media(max-width:431px)
        {
            
             #bos{
            font-size: 14px;
        }
        #kol{
            font-size: 14px;
        }
        #mad{
            font-size: 14px;
        }
            
        } 
         @media(max-width:342px)
        {
            
             
            #mn{
            position: absolute;
            bottom: 0px;
        
        }
        #mn1{
            position: absolute;
            bottom: -18px;
            
        }
            
        } 
        @media(max-width:312px)
        {
            
             #bos{
            font-size: 12px;
        }
        #kol{
            font-size: 12px;
        }
        #mad{
            font-size: 12px;
        }
            #uyo
            {
                font-size: 13px;
                
            }
            
            
        }
        
       
        #a{
            
            position: fixed;
            left: 10px;
            bottom: 50px;
                        text-align: center;
           

        }#b{
            position: fixed;
            right:10px;
            bottom: 20px;
            text-align: center;
           
        }
        #uyo{
            background-color: lightyellow;
      height: 17%;
      position: absolute;
      bottom: 0%;
      left: 0;
      width: 100%;
        }
        body
        {
      margin: 0;
        }
    </style>
    
<body>
    <p id=bos>
    We are a Bengaluru based leading wholesaler of food grains (pulses, rice, wheat, green peas, etc.) with over 3 decades of experience serving customers across Karnataka, Tamil Nadu and Andhra Pradesh in semi-wholesale, retail (traditional, modern and e-commerce), hotel, restaurants and catering businesses. 
    </p>
    <p id=kol>We have been the trusted suppliers for many established retailers and best quality hotels with some of the oldest relationships being supplied for over 2 decades. Our customers see us as their extended team/partners and not as just vendors. </p>
    
    
    <p id=mad>We have a vast supplier base all over India of over 200 millers and food processors who have been our trusted partners for many many years. 

These suppliers range from small to large processors supplying all types of food grains including pulses, wheat, rice and peas.  

We have very strong relationships with these suppliers and have been able to consistently source high quality food grains at the best prices over 3 decades.  </p>
    <section id=uyo>
    <div id=a>Visit Offlical Website : -<br> <a href=https://www.mangaldeepfoodgrains.in>Mangal Deep Food Grains</a><div id=b>Contact Us <br>080 4096 4629<br>9886223455<br>9844061137</div></div></section>
 
    
    </body>
   
    <script>
        
        if(sessionStorage.getItem("usrna")!=null)
            {
                
            document.getElementById("home").style.display="none";
                document.getElementById("home1").style.display="inline-block";
            }
        function hi()
             {
                    if(sessionStorage.getItem("usrna")!=null)
                                {
                
            
                                
                                    window.location="ttl_ord.php";
                                }
                        
                    else{
                        alert("You Need To Login Into 'YOUR ACCOUNT' \nBefore You Access This Page");
                       window.location="login.php";
                    }
             }</script>
    
</html>
