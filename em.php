<!DOCTYPE HTML>
<html>
<body><meta name="viewport" content="width=device-width, initial-scale=1"><style>.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
               margin-left: 50%;
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
    </style>
    <table align=center cellspacing=5px id="yo">
       
       <tr>
           <td>Enter Your Password :</td></tr>
           <tr><td><input placeholder="Password" id="u" type="password"></td></tr>
        <tr><td colspan="2" align="left">
           <input type="checkbox" id="myCheck" onclick="ps()">Show Password
               </td></tr>
           <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
           <tr ><td align="center"><button onclick="hi()">Done</button></td></tr>

       </table>
    <table id=yo2 style="display:none"><tr><td>What Do You Want To Change</td></tr><tr><td><input type=checkbox id=e onclick="hi12()">Email</td></tr><tr><td><input type=checkbox id=no onclick=hi12()>Number</td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr ><td align="center"><button onclick="hi112()">Continue</button></td></tr></table>
    <table align=center cellspacing=5px id="yo1" style="display:none">
       
       <tr id=jo>
           <td>Enter Your New Email :</td></tr>
           <tr id=jo1><td><input placeholder="Email" id="u1"></td></tr>
         <tr id=ko>
           <td>Enter Your New Number :</td></tr>
           <tr id=ko1><td><input placeholder="Number" id="u2" maxlength=10></td></tr>
           <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
           <tr ><td align="center"><button onclick="hi1()">Change</button></td></tr>

       </table>
    <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-database.js"></script>
           <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-analytics.js"></script><script>
    var ce=0;var cn=0;var chknu; var chkem;
    function hi12()
    {
        
        var ec=document.getElementById("e");
        var nc=document.getElementById("no");
        if(ec.checked==true)
            {
                ce=1;
           
            }
        else{
            ce=0;
        }
        if(nc.checked==true)
            {
                cn=1;
            }
        else{
            cn=0;
        }
        
        
    }
    function hi112()
    {
        if(cn==0&&ce==0)
            {
                alert("please select a option");
            }
        else{
            document.getElementById("yo2").style.display="none";
            document.getElementById("yo1").style.display="block";
            if(cn==1&&ce==1)
                {
                   chkem=1;chknu=1;
                }
            else if(ce==1)
                {
                    document.getElementById("ko").style.display="none";
                    document.getElementById("ko1").style.display="none";
                    chkem=1;
                    chknu=0;
                    
                }
            else if(cn==1)
                {
                    document.getElementById("jo").style.display="none";
                    document.getElementById("jo1").style.display="none";
                    chknu=1;
                    chkem=0;
                }
        }
    }
  function ps(){
             var checkBox = document.getElementById("myCheck");
           if (checkBox.checked == true){
               document.getElementById("u").type="text";
               
          } else {
              document.getElementById("u").type="password";
               
    }
           }
    var email=null;var number=null;
    var noob=sessionStorage.getItem("usrna");
    if(noob==null)
        {
            alert("you have messed up the query services !!#@#@$#$%$#%#$%34!!");
            window.location="index.php";
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
        
        var database = firebase.database();var firebaseRefa1;
        firebaseRefa = firebase.database().ref("Accounts");
        firebaseRefa.on("value",function(snapshot){
            var cccnt=snapshot.numChildren();
      
        var abcd=1;
        while(abcd<=cccnt)
            {
        var database = firebase.database();var firebaseRefa1;
        firebaseRefa1 = firebase.database().ref("Accounts/account-"+abcd+"/email");
        firebaseRefa1.once("value",function(snapshot){
            email=email+","+snapshot.val();
            
        }); var database = firebase.database();var firebaseRefa1;
        firebaseRefa1 = firebase.database().ref("Accounts/account-"+abcd+"/number");
        firebaseRefa1.once("value",function(snapshot){
            number=number+","+snapshot.val();
        
        });
            abcd++;}          });
        
        function hi(){
         var database = firebase.database();var firebaseRef;
                                document.getElementById("yo").style.display="none";

             var y3= document.getElementById('lo');
                 y3.className="loader";
                    firebaseRef = firebase.database().ref("Accounts/account-"+noob+"/password");
        firebaseRef.once("value",function(snapshot){
            var my=snapshot.val();
            var you=document.getElementById("u").value;
            var y3= document.getElementById('lo');
                y3.className="loader1";
            if(you!==null)
                {
                    my.trim();you.trim();
            if(my==you)
                {
                    document.getElementById("yo").style.display="none";
                                        document.getElementById("yo2").style.display="block";

                }
            else{
                alert("wrong password");
                                    document.getElementById("yo").style.display="inline-block";

            }
                }
            else{
                alert("enter password");
            }
        });
        }
    }
        function hi1()
    {
        
        var a;var b;var emailCh=0;var noCh=0;
        if(chkem==1&&chknu==1)
            {
             a=document.getElementById("u1").value;
            b=document.getElementById("u2").value;
            }
        else if(chkem==1)
                {
                 a=document.getElementById("u1").value;
                }
        else if(chknu==1)
            {
             b=document.getElementById("u2").value;
            }
        
        
        if(a!=null&&b!=null)
            
            { 
                var emailArray=email.split(",");
                var numberArray=number.split(",");
                var z=0;
                while(z<emailArray.length)
                    {
                        if(a==emailArray[z])
                            {
                                emailCh=1;
                                break;
                            }
                        else{
                            emailCh=0;
                        }
                        z++;
                    }
                
                var z1=0;
                while(z1<numberArray.length)
                    {
                        if(b==numberArray[z1])
                            {
                                noCh=1;
                                break;
                            }
                        else{
                            noCh=0;
                        }
                        z1++;
                    }
                
                if(emailCh!=1 && noCh!=1)
                    {
                var y3= document.getElementById('lo');
                 y3.className="loader";
             document.getElementById("yo1").style.display="none";
                var database = firebase.database();var firebaseRef;
                    firebaseRef = firebase.database().ref("Accounts/account-"+noob+"/email").set(a, function(error) {
                      if (error) {
                          alert("Failed Try Again ");
                          window.location="em.php";
                      }else{
                          
                      
                 var database = firebase.database();var firebaseRef1;
                    firebaseRef1 = firebase.database().ref("Accounts/account-"+noob+"/number").set(b, function(error) {
                      if (error) {
                          alert("Failed Try Again ");
                          window.location="em.php";
                      }else{
                          var y3= document.getElementById('lo');
                 y3.className="loader1";
                          document.getElementById("fdn").innerHTML="CHANGED EMAIL AND NUMBER SUCCESSFULLY"+"<br>"+"<a href='ac_de.php'>CONTINUE</a>";
                          
                      }});
                }});
                
                    }
                else if(emailCh==1)
                    {
                        alert("Email Is Already Taken");
                    }
                else if(noCh==1)
                    {
                        alert("Number Is Already Taken");
                    }
                    
                
                
                
            }
        else if(a!=null){
            var emailArray=email.split(",");
                var numberArray=number.split(",");
                var z=0;
                while(z<emailArray.length)
                    {
                        if(a==emailArray[z])
                            {
                                emailCh=1;
                                break;
                            }
                        else{
                            emailCh=0;
                        }
                        z++;
                    }
                
              
            if(emailCh!=1){
                
            document.getElementById("yo1").style.display="none";
            var y3= document.getElementById('lo');
                 y3.className="loader";
             var database = firebase.database();var firebaseRef;
                    firebaseRef = firebase.database().ref("Accounts/account-"+noob+"/email").set(a, function(error) {
                      if (error) {
                          alert("Failed Try Again ");
                          window.location="em.php";
                      }else{
                          var y3= document.getElementById('lo');
                 y3.className="loader1";
                          document.getElementById("fdn").innerHTML="CHANGED EMAIL SUCCESSFULLY"+"<br>"+"<a href='ac_de.php'>CONTINUE</a>";
                      }});
            }
            else{
                alert("Email Is Already Taken");
            }
            
        }
        else if(b!=null)
            { 
                var numberArray=number.split(",");
                
                
                var z1=0;
                while(z1<numberArray.length)
                    {
                        if(b==numberArray[z1])
                            {
                                noCh=1;
                                break;
                            }
                        else{
                            noCh=0;
                        }
                        z1++;
                    }
                if(noCh!=1)
                    {
                document.getElementById("yo1").style.display="none";
                var y3= document.getElementById('lo');
                 y3.className="loader";
                 var database = firebase.database();var firebaseRef;
                    firebaseRef = firebase.database().ref("Accounts/account-"+noob+"/number").set(b, function(error) {
                      if (error) {
                          alert("Failed Try Again ");
                          window.location="em.php";
                      }else{
                          var y3= document.getElementById('lo');
                 y3.className="loader1";
                          document.getElementById("fdn").innerHTML="CHANGED NUMBER SUCCESSFULLY"+"<br>"+"<a href='ac_de.php'>CONTINUE</a>";
                      }});
                    }
                else{
                alert("Number Is Already Taken");
            }
                }
            
            }
        
    
    </script>
            <div id="lo"></div>
    <div id=fdn></div>

    </body>

</html>