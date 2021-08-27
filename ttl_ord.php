
<!DOCTYPE HTML>
<html>
     <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="style1.css">
<body><div id="myId"> <style>           

    #myList li{
        margin-bottom: 8px;
    }
    a{
            color: #555;
    text-decoration: none;
        cursor: pointer;
    }
    .yob{
        cursor: pointer;
    }
    #orc{
        display: none;
    }
    #st{
        margin-left: 50%;
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
    </style>              <div class="loader" id="lo"></div>

        <h1>Your Total Orders</h1>
    <h15><i>* NOTE , THAT ORDERS PLACED WITHOUT LOGGING IN ARE NOT RECORDED * </i></h15>
    <button class="btn" onclick="rel()" style="display:none" id="bn">Back</button><div id="st"></div><table id="mt" cellspacing=6px></table>
<ul id="myList"></ul></div><div id="orc"><table border="10" id="kp"></table></div>
    <div id="try"></div>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-analytics.js"></script>
    <script>
        function rel()
        {
            window.location="ttl_ord.php";
        }
   
 var hi;
    var n=sessionStorage.getItem("usrna");
        if(n==null)
            {
                alert("You Cant Access This Page Before Logging In");
                window.location="Login.php" ;
            }
        
        else{
            
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
          var data;
          var database = firebase.database();
            var firebaseRef23 = firebase.database().ref("Accounts/account-"+n+"/Orders");
            firebaseRef23.on("value",function(snapshot){
             if(snapshot.exists())
                 {
                     
                
          var firebaseRef = firebase.database().ref("Accounts/account-"+n+"/Orders");
            firebaseRef.once("value",function(snapshot){
              var bantai=snapshot.numChildren();
              var c=1;var or_no=[];var j=0;var t;
              while(c<=bantai)
                  {
                                               
                      var y= document.getElementById('lo');
               y.className="loader";
                      var firebaseRef = firebase.database().ref("Accounts/account-"+n+"/Orders/"+"ORDER-NO= "+c+"/ORDER-NO= "+c);
                      firebaseRef.once("value",function(snapshot){
                          or_no=or_no+","+snapshot.val();
                          j++;
                          
                          if(j==bantai)
                              {
                                gi(or_no,n);

                              }
                          
                        });

                      c++;  
                 }
                
                
          });
            
             }
                else{
                    var y= document.getElementById('lo');
                    y.className="loader1";
                    document.getElementById("no").innerHTML="No Orders Placed";
                }
            });

            }
        
   
        function gi(or_no,n)
        {     
              var a=or_no;
              var o_l=a.split(",");
              var list = document.getElementById("myList");
            var t=document.getElementById("mt");
            var r=t.insertRow(cnt);
                          var x = r.insertCell(0);
            x.innerHTML="";
            var cnt=0;
              while(cnt<o_l.length)
                  {
                      if(o_l[cnt]!=""){
                          var r=t.insertRow(cnt);
                          var x = r.insertCell(0);
                          var btn = document.createElement("button");
                          btn.innerHTML="ORDER - "+cnt;
                          btn.className="yob";
                          x.appendChild(btn);
                          btn.onclick=function(){
                              var rowJavascript = this.parentNode.parentNode;
                              var in1=rowJavascript.rowIndex;
                              document.getElementById("mt").style.display="none";
                              document.getElementById("orc").style.display="block";
                              document.getElementById("bn").style.display="block";
                              var data;
                              var database = firebase.database();
                              var firebaseRef2 = firebase.database().ref("Web_Orders/"+o_l[in1]);
                              firebaseRef2.once("value",function(snapshot){
                                  var pawa=[];
                                  pawa[0]=snapshot.child("Pay_Way").val();
                                  pawa[1]=snapshot.child("STATUS").val();
                                  pawa[2]=snapshot.child("TOTAL").val();
                                  pawa[3]=snapshot.child("address").val();
                                  pawa[4]=snapshot.child("name").val();
                                  pawa[5]=snapshot.child("ph_no").val();
                                  var pq=[];var pr=[];
                                  pq=snapshot.child("ProQuan").val();
                                  pr=snapshot.child("Products").val();
                                  var k=0;
                                  var sa = document.getElementById("st");
                                  sa.innerHTML="STATUS"+"<br><br>"+pawa[1];
                                  var list = document.getElementById("kp");
                                  
                                  var r1=list.insertRow(0);
                                  var x1=r1.insertCell(0);
                                  x1.innerHTML="Name :";
                                  var x1=r1.insertCell(1);
                                  x1.innerHTML=pawa[4];
                                  
                                  var r1=list.insertRow(1);
                                  var x1=r1.insertCell(0);
                                  x1.innerHTML="Address :";
                                  var x1=r1.insertCell(1);
                                  x1.innerHTML=pawa[3];
                                  
                                  var r1=list.insertRow(2);
                                  var x1=r1.insertCell(0);
                                  x1.innerHTML="Phone Number :";
                                  var x1=r1.insertCell(1);
                                  x1.innerHTML=pawa[5];
                                  
                                  var r1=list.insertRow(3);
                                  var x1=r1.insertCell(0);
                                  x1.innerHTML="Payment Method :";
                                  var x1=r1.insertCell(1);
                                  x1.innerHTML=pawa[0];
                                  
                                  var r1=list.insertRow(4);
                                  var x1=r1.insertCell(0);
                                  x1.innerHTML="Total Amount :";
                                  var x1=r1.insertCell(1);
                                  x1.innerHTML="₹"+pawa[2];
                                  
                                  var r1=list.insertRow(5);
                                  var x1=r1.insertCell(0);
                                  x1.innerHTML="SELECTED PRODUCTS :";
                                  var x1=r1.insertCell(1);
                                  x1.innerHTML="Quantity :";
                                  
                                  var cn=6;var hi=0;
                                  while(hi<pr.length)
                                      {
                                          if(pr[hi]!=null){
                                          var r1=list.insertRow(cn);
                                          var x1=r1.insertCell(0);
                                          x1.innerHTML=pr[hi];
                                          var x1=r1.insertCell(1);
                                          x1.innerHTML=":- "+pq[hi];
                                              cn++;
                                          }
                                          hi++;
                                          
                                          
                                      }
                                  
                                  
                              });
                              

                          }
                      }
              cnt++;
                  }
            var y1= document.getElementById('lo');
               y1.className="loader1";
                

        }
        
    </script>
    <div id=no></div>
</body>
</html>