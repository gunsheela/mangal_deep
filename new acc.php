
<!DOCTYPE html>
<html lang="en">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style1.css">
    <style>#login{
        cursor: pointer;
        }
        #do{
            float: left;
            display: none;
        }
        .loader {
            margin-left: 600px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
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
        @media(max-width:769px)
        {
            
            
            .loader{
                margin-left:300px; 
            }
        }
        @media(max-width:468px)
        {
            
            
            .loader{
                margin-left:150px; 
            }
        }
        @media(max-width:335px)
        {
            
            
            .loader{
                margin-left:0px; 
            }
            #lo{
                font-size: 13px;
            }
        }
    </style>
   <body style="text-align:center" id="yo">
       <table align=center cellspacing=10px border="0" id="lo">
           <tr>
           
           <td align=left colspan="2">Name</td>
           </tr>
           <tr><td colspan="2">
           <input size=40 type=text placeholder="Your Name" id="namen">
           </td></tr>
       <tr>
           
           <td align=left colspan="2">Phone Number</td>
           </tr><tr><td colspan="2">
           <input size=40 type=tel placeholder="Ph.No" id="usru">
           </td></tr>
           <tr>
           
           <td align=left colspan="2">Email Address</td>
           </tr><tr><td colspan="2">
           <input size=40 type=text placeholder="Email Address" id="usru1">
           </td></tr>
           <tr align=left><td colspan="2">
           New Password
           </td></tr><tr><td colspan="2">
           <input type=password size=40 placeholder="Password" id="passp">
           </td></tr>
           <tr><td align=left>Re-Enter Your Password</td></tr>
           <tr><td align=left><input size=40 type=password placeholder="Re-Enter Password" id="rpr"></td></tr>
           <tr><td colspan="2" align="left">
           <input type="checkbox" id="myCheck" onclick="ps()">Show Password
           </td></tr>
           <tr><td colspan=50><button id=login class=btn onclick=yo()>Create Account</button></td></tr>
           
       </table>
       
       <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-database.js"></script>
           <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-analytics.js"></script>
       <script>
           function ps(){
             var checkBox = document.getElementById("myCheck");
           if (checkBox.checked == true){
               document.getElementById("passp").type="text";
               document.getElementById("rpr").type="text";
          } else {
              document.getElementById("passp").type="password";
               document.getElementById("rpr").type="password";
    }
           }
           document.getElementById("lo").style.display="none";
               
           var suc=[];var suc1=[];
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
                    var firebaseRef = firebase.database().ref("ttl_account");
                    firebaseRef.on("value",function(snapshot){
                    data=snapshot.val();
                        var i=1;
                        var j=1;
                        var j1=1;
                        while(i<=data)
                            {
                        var firebaseRef1 = firebase.database().ref("Accounts/account-"+i+"/number");
                                firebaseRef1.once("value",function(snapshot){
                                  
                                    suc[j]=snapshot.val();
                                    j++;
                                });
                                var firebaseRef12 = firebase.database().ref("Accounts/account-"+i+"/email");
                                firebaseRef12.once("value",function(snapshot){
                                  
                                    suc1[j1]=snapshot.val();
                                    j1++;
                                });
                               
                                
                                i++;
                            }
                        var yo11231=document.getElementById('yoyo');
               yo11231.className="dsds";                        
                        document.getElementById("lo").style.display="inline-block";
                        
                    });
          
                                   
                                
                                   
           
                        
       
       function yo()
           {
               
               
              var name,usr,pass,rp,usr1;
               name=document.getElementById("namen").value;
               usr=document.getElementById("usru").value;
               pass=document.getElementById("passp").value;
               rp=document.getElementById("rpr").value;
               usr1=document.getElementById("usru1").value;
               usr1.trim();
               name=name.trim();
               usr=usr.trim();
               pass=pass.trim();
               rp=rp.trim();
               
              if(name&&usr&&pass&&rp&&usr1!="")
                   {
                        var yo=1;var tk=0;
                               while(yo<suc.length){
                               suc[yo]=suc[yo].trim();
                               
                               if(suc[yo]==usr){
                                   tk=1;
                                   
                                   
                                   
                               }
                                   yo++;
                               }
                       var yo1=1;var tk1=0;
                               while(yo1<suc1.length){
                               suc1[yo1]=suc1[yo1].trim();
                               
                               if(suc1[yo1]==usr1){
                                   tk1=1;
                                   
                                   
                                   
                               }
                                   yo1++;
                               }
                       
                       if(tk==0&&tk1==0)
                       {
                       if(pass==rp)
                           {
                        
                             
                   var database = firebase.database();
                    var firebaseRef = firebase.database().ref("ttl_account");
                    firebaseRef.once("value",function(snapshot){
                    var data=snapshot.val();
                    data++;
                    firebase.database().ref('ttl_account').set(data);
                    firebase.database().ref('Accounts/'+"account-"+data).set({
                                       name: name,
                                       number : usr,
                        email:usr1,
                                       password: pass,
                        
                                   });
                       }); 
                           
                           document.getElementById("lo").style.display="none";
                               document.getElementById("do").style.display="block";
                           }
                       else{
                           alert("passwords dont match");
                           
                       }
                       
                       
                       
                       
                       
                       
                       
                   }
                      
                           else{
                               
                               
                               
                          if(tk==1){     
                   alert("NUMBER already TAKEN");}
                           else if(tk1==1)
                               {
                                   alert("EMAIL already TAKEN");
                               }
                           
                           }
               }
                   
               
                   
               else
                   {
                       
                       alert("fill all details");
                       
                       
                   } 
               
           }
               
               
       
                                
       
       </script>
       <div class="loader" id="yoyo"></div>
       <div id="do" style="float:center">Account Created<br><a href="login.php">LOGIN TO CONTINUE !</a></div>
  </body>
</html>
