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
      @media(max-width:308px)
        {
            
            .opn{
                font-size: 10px;
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
           <table border="25" bgcolor="cyan" id=tt >
               
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
            <table border="0" class=opn>
              
            <?php 
                $val1[0]=null;
                $j=1;$jj=0;
                foreach($data as $list1){
                $str1=$list1['content']['$t'];
                $arr1=explode(",",$str1);
                $namearr1=explode(":",$arr1[0]);
                $token12 = strtok($namearr1[1], " ");
                $yyb[$jj]=$namearr1[1];
                $val1[$j]=$token12;
                $j++;
                    $jj++;
                }
                
                
            $i=1;
                            $i1=0;                            $i11=2;

echo '
                    <select id="hi">
                    <option selected="selected">Check Product Rates</option>';
            foreach($data as $list){
                $str=$list['content']['$t'];
                $arr=explode(",",$str);
                $namearr=explode(":",$arr[0]);
                $pricearr=explode(":",$arr[1]);
                $token = strtok($namearr[1], " [");
                $val[$i]=$token;
                if($val[$i]==$val1[$i1]){        
                
                }
                else{
                    
                   echo '
                    <option value='.$i11.'>'.$val1[$i].'</option>';
                    $i11++;
                   $mark[$i]=$i;              

                    
                    
                }
                
                 
                
                $i++;
                $i1++;
                
            }
               echo "</select>
                    ";

            ?>  
            </table> 
            
        </div>
    
    </div>
    
    </div>
</div>
    <script>
        var init=0;var tbdis=[];
     document.getElementById("hi").onchange = function()
    {
         var bm=[];var benmar=0;
          var simple = '<?php echo $i11-1; ?>';
          var simple3 = '<?php echo $i; ?>';
          var simple1=<?php echo json_encode($yyb);?>;
          var simple2=<?php echo json_encode($mark);?>;
          var iit=1;
          for(ii=0;ii<=simple3;ii++){
              if(simple2[ii]!=null)
                  {
                      bm[iit]=simple2[ii];
                      iit++;
                  }
          }
         for(izq=0;izq<=simple;izq++){
             tbdis[izq]=0;
             
             
             
             
             benmar=bm[izq];
        var body = document.getElementsByTagName('body')[0];
        
                      var tbl = document.createElement('table');
                      tbl.style.width = '100%';
                      tbl.style.display = 'none';
                      tbl.className="pt";
                      tbl.setAttribute('id', 'tabe'+izq);
                      var tbdy = document.createElement('tbody');
                      for (var i = init; i <= benmar-2 ; i++) {
                            var tr = document.createElement('tr');
                            var td = document.createElement('td');
                            td.appendChild(document.createTextNode(simple1[i]));
                            tr.appendChild(td);
                            tbdy.appendChild(tr);
                      }
                      init=benmar-1;
                      tbl.appendChild(tbdy);
                      body.appendChild(tbl);
             
             
             
             
             
             
             
    if(this.value == izq)
    {
        tbdis[izq]=1;
        
        if(tbdis[izq]==1){
            document.getElementById("tabe"+izq).style.display="block";


        }
        
        
    }
             else{
            document.getElementById("tabe"+izq).style.display="none";
        }
         
             
              
             
             
             
             

         }
         
         
};
     
    
    </script>
    
    
        
    
   
</body>
</html>
