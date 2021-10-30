
<!DOCTYPE html>
<html lang="en">       <title>Contact us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        #yo{
            font-size: 50px;
        }
        @media(max-width:350px)
        {
            #yo{
                font-size:25px;
            }
        }
        #home{
            display: inline-block;
        }
        #home1{
            display: none;
        }
    </style>
    <nav>
    <input type="checkbox" id="check">
    <label for="check" class="chckbtn">
    <i class="fas fa-bars">☰</i>
    </label>
           <ul>
               <ti><a class="active"></a></ti>
              <ti><a onclick="hi()" id="hi1ttl">TOTAL ORDERS&nbsp;&nbsp;&nbsp;</a></ti>
              <ti><a href="index.php">HOME&nbsp;&nbsp;&nbsp;</a></ti> 
              <ti><a href="abt%20us.php">ABOUT US&nbsp;&nbsp;&nbsp;</a></ti>
               <div id="home">
               <ti><a href="login.php">LOGIN</a></ti>
               </div>
               <div id="home1">
               <ti><a href="ac_de.php">ACCOUNT</a></ti>
               </div>
              
           </ul>
               
        </nav>     
   <body style="text-align:center" id="yo">
       Phone Number :
       <br>
       <br>
       1.&nbsp;&nbsp;&nbsp;080 4096 4629
       <br><br>
       2.&nbsp;&nbsp;&nbsp;9886223455
       <br><br>
       3.&nbsp;&nbsp;&nbsp;9844061137
       <br>-------<br>
       <script>if(sessionStorage.getItem("usrna")!=null)
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
       
  </body>
</html>
