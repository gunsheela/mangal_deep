<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width,initial scale=1"/>       
       
    <script>
    
    </script>
    <style>
        #yo{text-align: center}
        #yoyo{text-align: center}
        #tr1 td{
            background: purple
        }
        #body{
               min-height: 400px;
               margin-top: 3%;
           }
           #header{
               min-height: 100px;
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
    
</head>
<body>

    <div class="header">
        
<div class="container">
    <div class="navbar">
        <div class="logo">
           <img  src="images\hihello.png" width="125px">
            
            

            <p><a href="" class="btn">DOWNLOAD THE APP</a></p>
        </div>
        <nav>
           <ul>
              <ti><a href="">TOTAL ORDERS&nbsp;&nbsp;&nbsp;</a></ti>
              <ti><a href="">CONTACT US&nbsp;&nbsp;&nbsp;</a></ti> 
              <ti><a href="">ABOUT US&nbsp;&nbsp;&nbsp;</a></ti>
              <ti><a href="">LOGIN</a></ti>
           </ul>
        </nav>
   </div>
    
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
           <table border="25" bgcolor="cyan" >
               
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
            <br>
            <a href="index1.php" class="btn">ORDER NOW</a>
                
        </div>
    
    </div>
    
    </div>
</div>
    
    
    
        
    
   
</body>
</html>
