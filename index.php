<!DOCTYPE html>
<html lang="en">
       
    
    
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
        @media(max-width:752px)
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
                    const params = new URLSearchParams(window.location.search);
                    if(params.has('l.c!?'))
                        {
                            var ch=params.get('l.c!?');
                            if(ch==1)
                                {
                                
                                    window.location="ttl_ord.php";
                                }
                        }
                    else{
                        alert("You Need To Login Into 'YOUR ACCOUNT' \nBefore You Access This Page");
                       window.location="login.php";
                    }
             }
        const params = new URLSearchParams(window.location.search);
            if(params.has('l.c!?'))
                {
                    var ch=params.get('l.c!?');
                    if(ch==1)
                        {
                            
                            yoloh();
                            logchk=1;
                            sessionStorage.setItem("logdet",logchk);
                            
                            
                        }
                    else{
                        logchk=0;
                        sessionStorage.setItem("logdet",logchk);
                    }
                    
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
     $result=file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1jrUMBsXYdzeaKpyvFUI1xRFitGF0sLmgRqj8_-O4UXA/values/Sheet1?key=AIzaSyCUuFo-j73XtIScQ6_NQRRW0LRSCakgTfg');

            $arr=json_decode($result,true);
            
            echo '<pre>';
            $data=$arr['values'];
            ?>
           <table border="25" bgcolor="cyan" id=tt >
               
            
               <?php
               
               $len=count($data);
               for($n=1;$n<=$len-1;$n++){  
                   $trial =explode(",",json_encode( $data[$n] ) );
                   $trial=str_replace('"','',$trial);
                   $name=json_encode( $trial[1] );
                   $name=str_replace('"','',$name);
                   $mrp=json_encode( $trial[3] );
                   $mrp=str_replace('"','',$mrp);
                   $mrp=str_replace('\u20b9','₹',$mrp);
                   $price=json_encode( $trial[2] );
                   $price=str_replace('"','',$price);
                   $mrp=ltrim($mrp, $mrp[0]);
                   $price="₹".$price;
                   echo "<tr>
                
                <td>$n.</td> <td>$name</td>
                <td><s>$mrp</s></td>
                <td>$price</td>
                    
                    
                    </tr>";
                   
               }
               ?>

                            
</table>
            <table border="0" class=opn>
              
            <?php 
                echo "<tr><td><select id='selectBox' onchange='changeFunc();'><option selected disabled hidden>Select Product</option>";
                
                
                $len=count($data);
                $check;
               for($n=1;$n<=$len-1;$n++){  
                   $trial =explode(",",json_encode( $data[$n] ) );
                   $trial=str_replace('"','',$trial);
                   $name=json_encode( $trial[1] );
                   $name=str_replace('"','',$name);
                   $in=strpos($name,'[');
                   if($in!=null)
                   {
                       $name=substr($name, 0, $in);
                   }
                   else
                   {
                       $in1=strpos($name,'(');
                       $name=substr($name,0,$in1);
                   }
                   $check=trim($check," ");
                   $name=trim($name," ");
                   $z=strcmp($check,$name);
                   if($z!=0)
                   {
                       echo "<option>$name</option>";
                       $check=$name;
                   }
                   
                   
               }
                
                echo "</select></td></tr>";
            ?>  
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
            var length1=nameArr.length;

          for(i=1;i<=length1-1;i++)
              {
                  var mj=0;
                  var mama=nameArr[i];
                  var papa=mama[1];
                  var chacha=mama[1];
                  if(papa.indexOf("[")> -1)
                      {
                          var ia=papa.indexOf("[");
                          papa=papa.substring(0,ia);

                      }
                  else{
                      var ib=papa.indexOf("(");
                      papa=papa.substring(0,ib);
                  }
                  var papa1=papa.trim();
                  var bhai=selectedValue1.localeCompare(papa1);
                  if(bhai==0)
                      {
                          var table = document.getElementById("myt");
                          var row = table.insertRow(mj);
                          mj++;
                          var cell1 = row.insertCell(0);
                          cell1.innerHTML=chacha+"<br>"+"_";
                      }
                  else{
                      
                  }
              }
   }
    
    </script>
    
    
        
  
   
</body>
</html>
