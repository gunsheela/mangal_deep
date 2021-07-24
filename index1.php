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
#check{
    display: none;
}
        #men{
        display: none;
        }
        
        #opn{
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
        @media(max-width:954px)
        {
            #tt{
                display: none;
            }
            #tt1{
                display: block;
            }
            #opn{
                display: block;
                width: auto;
                margin: auto;
            }
            
        }
        @media(max-width:700px)
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
              <ti><a href="">TOTAL ORDERS&nbsp;&nbsp;&nbsp;</a></ti>
              <ti><a href="">CONTACT US&nbsp;&nbsp;&nbsp;</a></ti> 
              <ti><a href="">ABOUT US&nbsp;&nbsp;&nbsp;</a></ti>
              <ti><a href="">LOGIN</a></ti>
           </ul>
        </nav>
   </div>
    <a href="" class="btn">DOWNLOAD THE APP</a>&nbsp;&nbsp;&nbsp;<a href="index2.php" class="btn">ORDER NOW</a>

    <div class="row">
        <div class="col-2">
            <h1 id="yoyo">
            Latest Rates
         </h1>
            <?php
            $result=file_get_contents('https://spreadsheets.google.com/feeds/list/1jrUMBsXYdzeaKpyvFUI1xRFitGF0sLmgRqj8_-O4UXA/od6/public/values?alt=json');
            
            $arr=json_decode($result,true);
            echo '<pre>';
            $data=$arr['feed']['entry'];
            ?>
           <table border="25" bgcolor="cyan" id=tt>
               
            <?php 
            $i=1;
            foreach($data as $list){
                $str=$list['content']['$t'];
                $arr=explode(",",$str);
                $namearr=explode(":",$arr[0]);
                $pricearr=explode(":",$arr[1]);
                $mrparr=explode(":",$arr[2]);
                
                echo"<tr>
                
                <td>$i.</td> <td>".$namearr[1]."</td>
                    <td><s>".$mrparr[1]."</s></td>
                    <td>₹".$pricearr[1]."</td>
                    
                    </tr> "; 
                $i++;
            }
            ?>            

                            
</table>
            <table border="0" id="opn">
               
            <?php 
            $i=1;
            foreach($data as $list){
                $str=$list['content']['$t'];
                $arr=explode(",",$str);
                $namearr=explode(":",$arr[0]);
                $pricearr=explode(":",$arr[1]);                
                echo"<tr>
                
                 <td>".$namearr[1]."</td>
                    <td>:- ₹".$pricearr[1]."</td>
                    
                    </tr> "; 
                $i++;
            }
            ?>            

                            
</table> 
               
        </div>
    
    </div>
    
    </div>
</div>
    
    
    
        
    
   
</body>
</html>
