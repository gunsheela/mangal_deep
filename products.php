
<!DOCTYPE html>
<html lang="en">
   <body id="yo">
       <head><meta name="viewport" content="width=device-width,initial scale=1"/></head>
           <link rel="stylesheet" href="style1.css">

       
       
       


       <title>PRODUCTS-(MANGAL DEEP)</title>
       <style>
           *{
               box-sizing: border-box;
           }
           .yp{
    float: left;
    width: 26.0%;
}
           @viewport{
               zoom:1.0;
               width: extend-to-zoom;
           }
           @-ms-viewport{
               width: extend-to-zoom;
               zoom:1.0;
           }
           #body{
               min-height: 400px;
               margin-top: 3%;
           }
           #header{
               min-height: 100px;
           }
           #yoo0{
               visibility: hidden
           }
           #yoo1{
               visibility: hidden
           }
           #yoo2{
               visibility: hidden
           }
           #yoo3{
               visibility: hidden
           }
           #yoo4{
               visibility: hidden
           }
           #yoo5{
               visibility: hidden
           }
           #yoo6{
               visibility: hidden
           }
           #yoo7{
               visibility: hidden
           }
           #yoo8{
               visibility: hidden
           }
           #yoo9{
               visibility: hidden
           }
           #yoo10{
               visibility: hidden
           }
           #yoo11{
               visibility: hidden
           }
           #yoo12{
               visibility: hidden
           }
           #yoo13{
               visibility: hidden
           }
           #cont{
               text-align: center;
           }
           
           #ord{
               font-size: 20px;
                   line-height: 22px;
               font-family: monospace;
               
                
           }
           #yo{
               background: #fff;
               
           }
           #chyo{
                              background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);

           }
           #cnt
           {
               position: fixed;
               left: 1000px;
               top : 400px; 
               width: 200px;
               height: 75px;
           }
           #bant
           {
                position: fixed;
               left: 550px;
               top : 475px; 
               width: 200px;
               height: 75px;
           }
           #data_table
           {
               background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
           }
       </style>

       <script> var i12=0;                   var gsadd=[];var gspr=[];  var tol=[];         var prch1=[];var prbs1=[];var stprcnt=[];


           const qucnt=[];var stk=[];
           function quanch(fq)
           {
               var ij1=0;
               var len=document.getElementById("yoy").rows[16].cells.length;
           for(ij1=0;ij1<len;ij1++)
           {
           
           stk[ij1]=document.getElementById("yoy").rows[16].cells[ij1].innerHTML;

           }
           stk.reverse();
               var cnt=parseInt(document.getElementById("quan"+fq).innerHTML);
               cnt++;
               var h111=stprcnt[fq];
               if(h111>=cnt)
                   {
               qucnt[fq]=cnt;
               var yocnt=""+cnt+" ";
               document.getElementById("quan"+fq).innerHTML=yocnt;
                   }
               else{
                   alert('Sorry We Currently Have Only '+h111+' Bags Contact Us For Furthur Details !!');
               }
           }
           function quanchm(fq)
           {
               var cnt1=parseInt(document.getElementById("quan"+fq).innerHTML);
               cnt1--;
               if(cnt1==0)
                  {
                  document.getElementById("yo"+fq).style.visibility="visible";

                  document.getElementById("yoo"+fq).style.visibility="hidden";
                  yo[fq]=null;
                  qucnt[fq]=null;
                  }
               else{
               var yocnt1=""+cnt1+"";
               document.getElementById("quan"+fq).innerHTML=yocnt1;
               qucnt[fq]=cnt1;
               }
               
           }
       </script>
       <div id="ord">
           
           <h1 style="text-align:center" id="chyo">M A N G A L<br><br>D E E P<br><br>P R O D U C T S   </h1>
           
               <div id="cont"><button type="button" class="ctn" onclick="hide()" id="cnt" >PROCEED</button></div>

            <table id="yoy" cellspacing="30">
                
                
                
               
            </table>
       
        <script>
            const yo=[];
            var ttl=[];
        function getdat(no)
        {
            qucnt[no]=1;
         yo[no]=document.getElementById("yoy").rows[no].cells[1].innerHTML;
        document.getElementById("yo"+no).style.visibility="hidden";

        document.getElementById("yoo"+no).style.visibility="visible";

        }
            
        
        
            function yoadd()
            {
             window.location.href = "reviee.php";
            }
            
           
        </script>

       <?php
            $result=file_get_contents('https://spreadsheets.google.com/feeds/list/1jrUMBsXYdzeaKpyvFUI1xRFitGF0sLmgRqj8_-O4UXA/od6/public/values?alt=json');
            
            $arr=json_decode($result,true);
            echo '<pre>';
            $data=$arr['feed']['entry'];
            ?>
               
            <?php 
            $i=1;
            foreach($data as $list){
                $str=$list['content']['$t'];
                $arr=explode(",",$str);
                $namearr=explode(":",$arr[0]);
                $pricearr=explode(":",$arr[1]);
                $mrparr=explode(":",$arr[2]);
                $img=explode(":",$arr[3]);
                $bgsiz=explode(":",$arr[5]);
                $stin=explode(":",$arr[6]);


                ?>
         <img id="hi" src="" width="125px">

           <script>
              function trtr(){
                  alert("hi");
              }
                var imga=<?php echo json_encode($img);?>;
                var img1=imga[1]+":"+imga[2];
               var chck=<?php echo json_encode($namearr);?>;
               var chck1=<?php echo json_encode($pricearr);?>;
               var chck2=<?php echo json_encode($mrparr);?>;
               var bgsz=<?php echo json_encode($bgsiz);?>;
                var prst=<?php echo json_encode($stin);?>;
              function myFunction() {
                   if(i12<61){
                       prch1[i12]=chck1[1];
                    prbs1[i12]=bgsz[1];
                       stprcnt[i12]=prst[1];
    var newtr=document.getElementById("yoy");
    var row = newtr.insertRow(i12);
    var x = row.insertCell(0);
    var img = document.createElement('img');
    img.style.width = '125px';
    img.src = img1;
    x.appendChild(img);
    var x = row.insertCell(1);
    x.innerHTML = chck[1]+"<br><br>"+"PER KG"+"<br><br>"+"₹"+chck1[1]+"&nbsp&nbsp&nbsp"+"<s>"+chck2[1]+"</s>";
    var btn = document.createElement("button");
                       var btnpl = document.createElement("bpl");
                       var btnmi = document.createElement("bmi");
                                              var qtxt = document.createElement("qtx");

    btn.innerHTML = "ADD";btnmi.innerHTML = "-";btnpl.innerHTML = "+";qtxt.innerHTML=1;
    btn.className="btn";    btnpl.className="btn";
    btnmi.className="btn"; 
    
    btn.id="btnyo"+i12;    btnmi.id="bm"+i12;
    btnpl.id="bp"+i12;qtxt.id="qt"+i12;

    btn.onclick = function () {

    var rowJavascript = this.parentNode.parentNode;
    var in1=rowJavascript.rowIndex;
        var n1=stprcnt[in1];
        if(n1!=0)
           {
        gsadd[in1]=1;
        gspr[in1]=document.getElementById("yoy").rows[in1].cells[1].innerHTML;
    document.getElementById("btnyo"+in1).style.visibility="hidden";
       
    
    
    x.appendChild(btnmi);
        btnmi.onclick=function ()
        {
            var ch1=document.getElementById("qt"+in1).innerHTML;
            ch1--;

            if(ch1==0){
    document.getElementById("bm"+in1).style.visibility="hidden";
    document.getElementById("bp"+in1).style.visibility="hidden";
    document.getElementById("qt"+in1).style.visibility="hidden";
    document.getElementById("btnyo"+in1).style.visibility="visible";
                    gsadd[in1]=null;
                gspr[in1]=null;
}
    else{
                gsadd[in1]=ch1;                

document.getElementById("qt"+in1).innerHTML=ch1;}


        }
    x.appendChild(qtxt);
    x.appendChild(btnpl);
        btnpl.onclick=function()
        {
          var ch=document.getElementById("qt"+in1).innerHTML;
            ch++;
            var h22=stprcnt[in1];
            if(h22>=ch){
                    gsadd[in1]=ch;

          document.getElementById("qt"+in1).innerHTML=ch;}
            else{
                alert("Sorry For The Inconvenience !\nWe Currently Have Only '"+h22+" ' Bags Of This Product In Stock !!");
                alert("FEEL FREE TO CONTACT US!\nSO THAT WE CAN KNOW YOUR REQUIREMENTS !!\nTHANK YOU !");
            }
        }
    document.getElementById("bm"+in1).style.visibility="visible";
    document.getElementById("bp"+in1).style.visibility="visible";
    document.getElementById("qt"+in1).style.visibility="visible";
        
    }
         else
            {
                alert("We Are Extremly Sorry !!\nWe Currently Dont Have This Product\n(-Out-Of-Stock-)");
                alert("FEEL FREE TO CONTACT US !\nSO THAT WE CAN KNOW YOUR REQUIREMENTS !!\nTHANK YOU !");
            }
    }
    var x = row.insertCell(2);
    x.appendChild(btn);
    
   

                   i12++;} 
                   
                   
}
          
           
            myFunction();
           
               </script><?php
                
            
                $i++;
            }
            ?>            
       </div>
       <script>
       function hide(){
          // sessionStorage.setItem('products',JSON.stringify(yo));
           document.getElementById("ord").style.display="none";
           document.getElementById("ji").style.display="block";
           yoban();
           hellq();
          // hel();
       }
       </script>
       <div id="ji" style="display:none">
           

           <h1 style="text-align:center;">Your Selected Products!!!</h1>
           <section class="yp">PRODUCTS</section>
           <section class="yp">QUANTITY</section>
           <section class="yp">PRODUCT TOTAL</section>
           <div id="y">
           
       <table border="0" id="data_table">
       </table>
       </div>
      <script type="text/javascript">
           
        function yoban()
       { var amtt=0;
           for( i=0;i<gspr.length;i++){
               var table=document.getElementById("data_table");
               if(gspr[i]!=null){
                       var row = table.insertRow(i);
                       var cell1 = row.insertCell(0);
                       var cell2=row.insertCell(1);
                       var cell3=row.insertCell(2);
                       cell1.innerHTML = gspr[i]+"<br>"+"_____________________________________";
                       cell2.innerHTML="<br><br>"+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x"+gsadd[i]+"<br><br><br>"+"_____________________________________";
                       tol[i]=prch1[i]*prbs1[i]*gsadd[i];
                       cell3.innerHTML="<br><br>"+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= ₹"+tol[i]+"<br><br><br>"+"___________________________________";
                         amtt=tol[i]+amtt;
                   console.log(amtt);
                }
               else
                   {
                       var row = table.insertRow(i);
                       var cell1 = row.insertCell(0);
                       cell1.innerHTML = null;   
                   }
                       
                   
                   

           }
        
           
       }
          
          function hell()
          {
             document.getElementById("ord").style.display="block";
           document.getElementById("ji").style.display="none"; 
          }
           
          function hellq()
          { 
            
            var tb=document.getElementById("data_table");
            var tb1=document.getElementById("data_table").rows.length;
             /*var d1=0;
            for(d1=0;d1<tb1;d1++)
                   {*/
              
                  // }
            
            if(tb1!=gspr.length)
            {
                var ch1=tb1-gspr.length;
                var i1=1;
                for(i1=1;i1<=ch1;i1++)
                    {

                        var arl=gspr.length;
                        var yyban=arl+i1;
                        tb.deleteRow(arl);

                    }
            }
          }
       function hel()
          {    
                      document.getElementById("ordta").style.display="block";
              document.getElementById("ji").style.display="none";

          }
          function hell1()
          {    
                      document.getElementById("ordta").style.display="none";
              document.getElementById("ji").style.display="block";

          }
          
       </script>
           
           <button class="btn"onclick="hell()">ADD / REMOVE PRODUCTS</button>  
           <button class="btn"onclick="hel()" id="order" style="float: right">ORDER ---></button>  

       </div>
       
       <div id='ordta' style="display:none">
        
           

       <form>
             <table border="0" align="center" width="600px" cellspacing="15"  method="post">
             <tr>
                 <tr><td>&nbsp;</td></tr>
                 <tr>
                 <td colspan="2" align="center">D E T A I L S</td>
                 </tr>
                 <tr>
                 <td>
                 NAME :
                 </td>
                 <td>
                 <input type="text" placeholder="Name" id="name">
                 </td>
                 </tr>
                 <tr>
                 <td>
                     ADDRESS : 
                     </td>
                     <td>
                     <input type="text" placeholder="address" name="" size="50" id="addr">
                     </td>
                 </tr>
                 <tr>
                     <td>
                 PHONE NUMBER :
                     </td>
                     <td>
                         <select>
                         <option>+91</option>
                         </select>
                     <input type="tel" placeholder="phone number" maxlength="10" name="" id="phno">
                     </td>
                     
                 </tr>
                 <tr><td>&nbsp;</td></tr>
                 <tr>
                 <td colspan="2" align="center">P A Y M E N T&nbsp;&nbsp;&nbsp;&nbsp;M E T H O D</td>
                 </tr>
                 <tr>
                     <td colspan="2" align="center">
                         <input type="radio" name="status" id="cod" onclick="pay('cod')">COD</td>
                 </tr>
                 <tr>
                     <td colspan="2" align="center">
                         <input type="radio" name="status" id="cod1" onclick="pay('cod1')">COD1</td>
                 </tr>
                 <tr>
                     <td colspan="2" align="center">
                         <input type="radio" name="status" id="cod2"onclick="pay('cod2')" >COD2</td>
                 </tr>
                 
                 <tr>
                     <td colspan="2" align="center">
                         <input type="radio" name="status" id="cod3"onclick="pay('cod3')" >COD3</td>
                 </tr>
                 <tr>
                     <td colspan="2" align="center">
                         <input type="radio" name="status" id="cod4"onclick="pay('cod4')">COD4</td>
                 </tr>
                
             </table>
            
           </form> 
           <button class="btn"onclick="add()" id="bant">PLACE YOUR ORDER</button> 
           <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-database.js"></script>
           <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-analytics.js"></script>


       <script>
           
           var firebaseConfig = {
    apiKey: "AIzaSyBO1I1c_7l09EJRD3Sd-RkuwUT48aJpz5w",
    authDomain: "fire-9d7b4.firebaseapp.com",
    databaseURL: "https://fire-9d7b4-default-rtdb.firebaseio.com",
    projectId: "fire-9d7b4",
    storageBucket: "fire-9d7b4.appspot.com",
    messagingSenderId: "717028647199",
    appId: "1:717028647199:web:301a8c1e5b78dcf80e502a",
    measurementId: "G-D6X8890BZR"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
           
           function add(){
               
                             

       
               var name=[];
               name[0]=document.getElementById("name").value;
               name[1]=document.getElementById("addr").value;
               name[2]=document.getElementById("phno").value;
               name[3]=chch;
               var a=0;
            /* for(a=0;a<yo.length;a++){
                
             yo[a]=yo[a].replace('<br>','');
             yo[a]=yo[a].replace('<br>','');
             yo[a]=yo[a].replace('PER KG','');
             yo[a]=yo[a].replace('<br>','');
             yo[a]=yo[a].replace('<br>','');
             yo[a]=yo[a].replace('<br>','');
             yo[a]=yo[a].replace('&nbsp;','');
             yo[a]=yo[a].replace('&nbsp;','');
             yo[a]=yo[a].replace('&nbsp;','');
             yo[a]=yo[a].replace('<s>','');
             yo[a]=yo[a].replace('</s>','');}*/
               
                           var database = firebase.database();
               var i=0;
               var firebaseRef = firebase.database().ref("TOTAL_WEB_ORDERS");
               firebaseRef.once("value",function(snapshot){
                   var data=snapshot.val();
                   data++;
                   firebase.database().ref('TOTAL_WEB_ORDERS').set(data);
                    firebase.database().ref('Web_Orders/'+"order-"+data).set({
                                       name : name[0],
                        address : name[1],
                        ph_no : name[2],
                        Pay_Way : name[3],
                        Products : gspr,
                        ProQuan : gsadd,
                        TOTAL : tol
                        
                                   });
                   
                   alert("done");
                   });
               
               
                } var chch;
           function pay(payway){
                    chch=payway;

           }
           

           
            
          
       </script>
       <script>
           
           
          
           
           
       </script>
       
       </div>
       
       
    </body>
    
    
</html>
