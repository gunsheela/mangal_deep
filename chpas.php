<!DOCTYPE HTML>
<html><body>    <link rel="stylesheet" href="style1.css">     <meta name="viewport" content="width=device-width, initial-scale=1">
 <style>.loader {
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
<table align=center cellspacing=10px border="0" id="yum">
       <tr>
           <td align=left colspan="2">Old Password :</td>
           </tr><tr><td colspan="2">
           <input size=40 type=password placeholder="Old Password" id="user">
           </td></tr>
           <tr align=left><td colspan="2">
           New Password :
           </td></tr><tr><td colspan="2">
           <input type=password size=40 placeholder="New Password" id="ps">
           </td></tr>
    <tr>
           <td align=left colspan="2">Re-Enter New Password :</td>
           </tr><tr><td colspan="2">
           <input size=40 type=password placeholder="New Password" id="rps">
           </td></tr>
           <tr><td align=left><a href="reset.php">Forgot Password ?</a></td></tr>
           <tr><td colspan="2" align="left">
           <input type="checkbox" id="myCheck" onclick="ps()">Show Password
               </td></tr>
           <tr><td colspan=50 align="center"><button id=login class=btn onclick="ch()">Change Password</button></td></tr>
           
       </table></body>    <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-database.js"></script>
           <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-analytics.js"></script><script>
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
     function ps(){
             var checkBox = document.getElementById("myCheck");
           if (checkBox.checked == true){
               document.getElementById("user").type="text";
               document.getElementById("ps").type="text";
               document.getElementById("rps").type="text";
          } else {
              document.getElementById("user").type="password";
               document.getElementById("ps").type="password";
              document.getElementById("rps").type="password";
    }
           }
    function ch()
    {
        var dop=document.getElementById("user").value;
            var dop1=document.getElementById("ps").value;
            var dop2=document.getElementById("rps").value;
        if(dop&&dop1&&dop2!=="")
           {
           
           
        document.getElementById('yum').style.display="none";
 var y3= document.getElementById('lo');
                 y3.className="loader";
         var database = firebase.database();var firebaseRef;
                    firebaseRef = firebase.database().ref("Accounts/account-"+noob+"/password");
        firebaseRef.once("value",function(snapshot){
            var op=document.getElementById("user").value;
            var op1=document.getElementById("ps").value;
            var op2=document.getElementById("rps").value;

            var ssp=snapshot.val();
            op.trim();
            ssp.trim();
            op1.trim();
            op2.trim();
            if(op==ssp)
                {
                    if(op1==op2)
                        {
                            if(op1==ssp)
                                {
                                    document.getElementById('yum').style.display="block";
                                     var y3= document.getElementById('lo');
                                     y3.className="loader1";
                                    alert("New Password Cannot Be Same As Old One");
                                }
                            else{
                            var database = firebase.database();var firebaseRef1;
                            firebaseRef1 = firebase.database().ref("Accounts/account-"+noob+"/password").set(op1,function(error) {
                      if (error) {
                          document.getElementById('yum').style.display="block";
                                     var y3= document.getElementById('lo');
                                     y3.className="loader1";
                          alert("Password Could Not Be Changed "+error);
                      }else{
                                     var y3= document.getElementById('lo');
                                     y3.className="loader1";
                          alert("Password Was Changed");
                          window.location="login.php";
                      }
                            
                            });
                            }
                        }
                    else{
                                                  document.getElementById('yum').style.display="block";

                        var y3= document.getElementById('lo');
                                     y3.className="loader1";
                        alert("Passwords Dont Match !");
                    }
                }
            else{
                                          document.getElementById('yum').style.display="block";

                var y3= document.getElementById('lo');
                                     y3.className="loader1";
                alert("Old Password Is Wrong !");
            }
            
        });}
        else{
            alert("Fill All The Details");
        }
    }
    }
    </script>
    <div id="lo"></div>
</html>
