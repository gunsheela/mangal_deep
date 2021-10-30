<!DOCTYPE html>
<html lang="en">
       
    <link rel = "icon" href = 
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" 
        type = "image/x-icon">
    
    <style>
        
        .chckbtn{
    font-size: 30px;
    float: right;
    line-height: 20px;
    cursor: pointer;
            display: none;
}
        #myt
        {
            display: none;
        }
        #hi1ttl{
            cursor: pointer;
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
        .btn{
            cursor: pointer;
        }
        .pt{
            font-size: 12px;
        }
        
        #hi{
          float: left;
            display: none;
        }
        #tt{
            width: 100%
        }
        #men{
        display: none;
        }
        .loader {
            margin-left: 0px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid  #FF0000 ;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}   
        .opn{
            display: none;
        }
        #tt1{
            display: none;
        }
        #yo{text-align: center}
        #yoyo{text-align: center}
       
        
           #header{
               min-height: 100px;
           }
        @media(max-width:752px)
        {
            #tt{
                display: none;
            }
            #tt1{
                display: block;
            }
            .opn{
            
                display: block;
            }
            #myt
            {
                display: block;
            }
            
        }
        @media(max-width:776px)
        {
            .chckbtn{
                display: block;
            }
            ul{
                background: #2c3e50;
                position: fixed;
                width: 100%;
                height: 100vh;
                top: 200px;
                left: -100%;
                text-align: center;
                word-spacing: 3px;
                transition: all 1.0s;
            
                }
            nav ul ti{
                display: block;
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
            #hi{
                display: block;
            }
            
    }
        @media(max-width:400px)
        {
            
            #myt{
                font-size:13px;
            }
            
        } 
      @media(max-width:308px)
        {
            
            .opn{
                font-size: 10px;
            }
            #myt{
                font-size:12px;
            }
            
        }  
        
        
    </style>
<head>
    <meta charset="UTF-8">
    <title>Mangal Deep</title>
    <link rel="stylesheet" href="style.css">
   
        <div class="header1">

    <h1 id="yo">
     WELCOME <br>TO<br> MANGAL DEEP
    </h1>
            
    </div>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    
<body>

    <div class="header">

<div class="container">
    <div class="navbar">
        <div class="logo">
           <img  src="images\hihello.png" width="125px">
            
        </div>
        
       
        <nav>
    <input type="checkbox" id="check">
    <label for="check" class="chckbtn">
    <i class="fas fa-bars">☰</i>
    </label>
           <ul>
               <ti><a class="active"></a></ti>
              <ti><a onclick="hi()" id="hi1ttl">TOTAL ORDERS&nbsp;&nbsp;&nbsp;</a></ti>
              <ti><a href="reviee.php">CONTACT US&nbsp;&nbsp;&nbsp;</a></ti> 
              <ti><a href="abt%20us.php">ABOUT US&nbsp;&nbsp;&nbsp;</a></ti>
               <div id="home">
               <ti><a href="login.php">LOGIN</a></ti>
               </div>
               <div id="home1">
               <ti><a href="ac_de.php">ACCOUNT</a></ti>
               </div>
              
           </ul>
        </nav>
         <script>
        
             var logchk=0;
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
             }
        const params = new URLSearchParams(window.location.search);
            if(sessionStorage.getItem("usrna")!=null)
            {
                
            
                            yoloh();
                            logchk=1;
                            sessionStorage.setItem("logdet",logchk);
                            
                            
                        }
                    else{
                        logchk=0;
                        sessionStorage.setItem("logdet",logchk);
                    }
                    
                
            function yoloh(){
                document.getElementById("home").style.display="none";
                document.getElementById("home1").style.display="inline-block";
            }
        
    
        function yoman()
             {
                 alert("Currently unavailable");
             }
        </script>
   </div>
    <a  onclick="yoman()" class="btn">DOWNLOAD THE APP</a>&nbsp;&nbsp;&nbsp;<a href="index2.php" class="btn">ORDER NOW</a>

    <div class="row">
        <div class="col-2">
            <h1 id="yoyo">
            Latest Rates
         </h1>
            <?php
     $result=file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1jrUMBsXYdzeaKpyvFUI1xRFitGF0sLmgRqj8_-O4UXA/values/Sheet5?key=AIzaSyCUuFo-j73XtIScQ6_NQRRW0LRSCakgTfg');

            $arr=json_decode($result,true);
            echo '<pre>';
            $data=$arr['values'];
            ?>
           <table border="25" bgcolor="cyan" id=tt >
               <tr><td>PRODUCT</td><td>BRAND</td><TD>PACKING SIZE</TD><td>SELLING PRICE</td><TD>MRP</TD></tr>
               
               <?php
               
               $len=count($data);
               for($n=1;$n<=$len-1;$n++){  
                   $trial =explode(",",json_encode( $data[$n] ) );
                   $trial=str_replace('"','',$trial);
                   $product=$trial[0];
                   $product=str_replace('[','',$product);
                   $product=str_replace(']','',$product);
                   $product=trim($product," ");
                   $name=$trial[1];
                   $name=str_replace('[','',$name);
                   $name=str_replace(']','',$name);
                   $name=trim($name," ");
                   $stk=$trial[2];
                   $stk=str_replace('[','',$stk);
                   $stk=str_replace(']','',$stk);
                   $stk=trim($stk," ");
                   $mrp=$trial[3];
                   $mrp=str_replace('[','',$mrp);
                   $mrp=str_replace(']','',$mrp);
                   $mrp=trim($mrp," ");
                   $mrp=str_replace('\u20b9','₹',$mrp);
                   $price=$trial[4];
                   $price=str_replace('[','',$price);
                   $price=str_replace(']','',$price);
                   $price=trim($price," ");
                   $price=str_replace('\u20b9','₹',$price);
                   
                   echo "<tr>
                
                <td>$product</td> <td>$name</td><td>$stk</td>
                <td>$mrp</td>
                <td><s>$price</s></td>
                    
                    
                    </tr>";
                   
               }
               ?>

                            
</table>
            <table border="0" class=opn>
              
            <tr><td><select id='selectBox' onchange='changeFunc();'><option selected disabled hidden>Select Product</option>
                <option>Toor Daal</option> 
                <option>Green Peas</option>
                <option>Chana Daal</option>        
                <option>Rice</option>
                <option>Basmati</option>
                <option>Rice</option>x
                <option>Moong Daal</option>
                <option>Moong</option>
                
               
                
                </select></td></tr>
            </table> 
            
        </div>
    
    </div>
    
    </div>
                    <table id=myt></table>

</div>
    <script>
       
      function changeFunc() {
          
          var x = document.getElementById("myt").rows.length;
                          var kj=0;
                          if(x!=0){
                          while(kj<x)
                              {
                                  
                                 document.getElementById("myt").rows[kj].style.display="none";
                                  
                                 kj++;
                              }
                          }
    var selectBox = document.getElementById("selectBox");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
          var selectedValue1=selectedValue.trim();
            var nameArr=<?php echo json_encode($data);?>;
            var length1=nameArr.length;var j=0;
          for(i=1;i<length1;i++)
              {
                  var newa=nameArr[i];
                  newa=newa[0];
                  newa=newa.toString();
                  newa=newa.trim();
                  if(newa==selectedValue1)
                      {
                          var newnew=nameArr[i];
                          var newnew1=newnew[1];
                          newnew1=newnew1.toString();
                          newnew1=newnew1.trim();
                          var newnew12=newnew[2];
                          newnew12=newnew12.toString();
                          newnew12=newnew12.trim();
                          var newnew13=newnew[3];
                          newnew13=newnew13.toString();
                          newnew13=newnew13.trim();
                          var newnew14=newnew[4];
                          newnew14=newnew14.toString();
                          newnew14=newnew14.trim();
                          var table=document.getElementById("myt");
                          var row=table.insertRow(j);
                          var cell=row.insertCell(0);
                          cell.innerHTML=newnew1+"("+newnew12+")<bR>"+newnew13+"<br><s>"+newnew14+"</S><br>_______";
                          j++;
                      }

              }
              }
   
    
    </script>
    
    
        
  
   
</body>
</html>
