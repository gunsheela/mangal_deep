
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="style1.css">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
        

    <style>
        #login{
        cursor: pointer;
        }
        .loader {
            margin-left: 600px;
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
        
        
        @media(max-width:757px)
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
        @media(max-width:350px)
        {
            
            #yum{
                font-size: 15px;
            }
            .loader{
                margin-left: 0px;
            }
        }
            
            
    
        
    </style>
   <body style="text-align:center" id="yo">
       <table align=center cellspacing=10px border="0" id="yum">
       <tr>
           <td align=left colspan="2">Phone Number / Email</td>
           </tr><tr><td colspan="2">
           <input size=40 type=text placeholder="Ph.No / Email" id="user">
           </td></tr>
           <tr align=left><td colspan="2">
           Password
           </td></tr><tr><td colspan="2">
           <input type=password size=40 placeholder="Password" id="ps" >
           </td></tr><tr><td colspan="2" align="left">
           <input type="checkbox" id="myCheck" onclick="ps()">Show Password
           </td></tr>
           
           <tr><td align=left><a href="reset.php">Forgot Password ?</a></td></tr>
           <tr><td align=left><a href="new%20acc.php">Dont Have a Account !</a></td></tr>
           
           <tr><td colspan=50><button id=login class=btn onclick="ch()">LOGIN</button></td></tr>
           
       </table>
           <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-database.js"></script>
           <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-analytics.js"></script>
       <script>
           function ps(){
             var checkBox = document.getElementById("myCheck");
           if (checkBox.checked == true){
               document.getElementById("ps").type="text";
          } else {
    document.getElementById("ps").type="password";
    }
           }
           sessionStorage.removeItem("usrna");
           var is=0;var usernamefororder;
                      document.getElementById("yum").style.display="none";
var suc=[];var suc1=[];var pso=[];var hha,hha1;var wpc=0;
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
                    firebaseRef.once("value",function(snapshot){
                    data=snapshot.val();
                        var i=1;
                        var j=1;var j1=1;var j2=1;
                        while(i<=data)
                            {
                        var firebaseRef1 = firebase.database().ref("Accounts/account-"+i+"/number");
                                firebaseRef1.once("value",function(snapshot){
                                  
                                    suc[j]=snapshot.val();
                                    
                                    sessionStorage.setItem("usrs",suc);
                                    j++;
                                });
                                var firebaseRef1 = firebase.database().ref("Accounts/account-"+i+"/email");
                                firebaseRef1.once("value",function(snapshot){
                                  
                                    suc1[j2]=snapshot.val();
                                    
                                    sessionStorage.setItem("usrs1",suc1);
                                    j2++;
                                });
                                var firebaseRef1 = firebase.database().ref("Accounts/account-"+i+"/password");
                                firebaseRef1.once("value",function(snapshot){
                                  
                                    pso[j1]=snapshot.val();
                                    j1++;
                                });
                               
                                
                                i++;
                            }
                        
                        
                        var yo11231=document.getElementById('yoyo');
               yo11231.className="dsds";                        
                        document.getElementById("yum").style.display="inline-block";
                        
                    });
       function ch()
           {
            
               var un=document.getElementById("user").value;
               un.trim();
                var pass=document.getElementById("ps").value;
               if(un&&pass!="")
                   {
                       var yo=1;
                       var tk=0;
                               while(yo<suc.length){
                               suc[yo]=suc[yo].trim();
                               
                               if(suc[yo]==un){
                                   tk=1;
                                   hha=yo;
                                   break;
                               }
                                   yo++;
                               }
                       if(tk==0)
                           {
                               var yo1=1;
                                var tk1=0;
                               while(yo1<suc1.length){
                               suc1[yo1]=suc1[yo1].trim();
                               
                               if(suc1[yo1]==un){
                                   tk1=1;
                                   hha1=yo1;
                                   break;
                               }
                                   yo1++;
                               }
                               if(tk1==0)
                               {alert("No Account Found"+"\n"+"Create a Account If You Dont Have One");
                               
                               }
                               else{
                                   if(pso[hha1]==pass)
                               {
                                  
                                   usernamefororder=yo1;
                                   sessionStorage.setItem("usrna",usernamefororder);
                                   
                                    window.location = "index.php?l.c!?=" + 1;
                                   
                               }
                           else{
                               alert("Wrong Password"+"\n"+"Recheck Your Password");
                               
                           }
                               }
                               
                           }
                       else{
                           
                           if(pso[hha]==pass)
                               {
                                   
                                   usernamefororder=yo;
                                   sessionStorage.setItem("usrna",usernamefororder);
                                   
                                   window.location = "index.php?l.c!?=" + 1;
                                   
                               }
                           else{
                               alert("Wrong Password"+"\n"+"Recheck Your Password");
                               
                           }
                           
                       }
                       
                   }
               else{
                   alert("fill all the details");
               }
           }
           
       </script>
              <div class="loader" id="yoyo"></div>
  </body>
    
</html>
