<!DOCTYPE html>
<html lang="en">     <meta name="viewport" content="width=device-width, initial-scale=1">

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
   <body>
       
       <table align=center cellspacing=5px id="yo">
       
       <tr>
           <td>Email :</td></tr>
           <tr><td><input placeholder="Email Address" id="u"></td></tr>
           <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
           <tr ><td align="center"><button onclick="hi()">SEND OTP</button></td></tr>

       </table>
       <table align=center cellspacing=5px id="yo1" style="display:none">
       
       <tr>
           <td>ENTER OTP :</td></tr>
           <tr><td><input placeholder="OTP" id="u1" maxlength=6></td></tr>
           <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
           <tr ><td align="center"><button onclick="cn()">CONTINUE</button></td></tr>
       </table>
       <table align=center cellspacing=5px id="yo2" style="display:none">
       
       <tr>
           <td>Enter New Password :</td></tr>
           <tr><td><input type=password placeholder="Password" id="u3"></td></tr>
           <tr>
               <td>Enter New Password Again:</td></tr>
           <tr><td><input type=password placeholder="Password" id="u4"></td></tr>
           <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td colspan="2" align="left">
           <input type="checkbox" id="myCheck" onclick="ps()">Show Password
           </td></tr>
           <tr ><td align="center"><button onclick="dn()">RESET</button></td></tr>
       </table>
       
    </body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js">
</script>
    <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-database.js"></script>
           <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-analytics.js"></script>
    <script>
        
        function ps(){
             var checkBox = document.getElementById("myCheck");
           if (checkBox.checked == true){
               document.getElementById("u3").type="text";
               document.getElementById("u4").type="text";
          } else {
              document.getElementById("u3").type="password";
               document.getElementById("u4").type="password";
    }
           }
        var a;var oi;
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
        
    var myArray = sessionStorage.getItem('usrs');var myArray1 = sessionStorage.getItem('usrs1');
        if(myArray==null)
            {
                document.getElementById("yo").style.display="none";
                alert("You Have Messed Up The Query Services\nYou Can Access This Page , Only From The Login Menu");
                
            }
        else{
        var yo=myArray.split(",");var yo1=myArray1.split(",");}
   var userPassword;
    function hi(){
         
        
         
        var uname=document.getElementById("u").value;
        uname.trim();
        var i=1;var chh=0;var chh1=0;var em=0;var oi1;
        while(i<yo1.length)                                           
        {
                if(uname!="")
                    {
                        if(uname==yo1[i])
                            {
                                
                                chh=1;
                                oi=i;
                                break;
                            }
                    }
            else{
                alert("username cannor be empty");
                em=1;
                break;
            }
            i++;
        }
        if(em==0){
        if(chh==1)
            {
                      
                var y= document.getElementById('lo');
                 y.className="loader";
                var firebaseRef1 = firebase.database().ref("Accounts/account-"+oi+"/password");
                firebaseRef1.once("value",function(snapshot){
                      userPassword=snapshot.val();
                    document.getElementById('yo').style.display="none";
                  sendm(uname);
                });
                
    
            }
        else{
             alert("no account found");   
        }
        }
        
    }

        function sendm(uname)
        {
            a=Math.floor(100000 + Math.random() * 900000);
            Email.send({
                Host:"smtp.gmail.com",
                Username: "mangal.deep1590@gmail.com",
                Password:"mangaldeep0951",
                To:uname,
                From:"mangal.deep1590@gmail.com",
                Subject:"DONT SHARE YOUR OTP WITH ANYONE YOU DONT TRUST",
                Body:"YOUR SIX DIGIT OTP IS :- "+a+"<br>"+" If You Dont Wish To Change Your Password "+"<br>"+" We Have Provided Your Password = ' "+userPassword+" '",
            }).then(
                message=>{
                          if(message=='OK')
                              {
                                  rest();
                                  alert("Check Your Email We Have Sent You An OTP")
                              } else{
                                  alert("Enter a Valid Email");
                              }
                    
                }
                
        
            );
    

        }
        function rest()
        {
            var y1= document.getElementById('lo');
                 y1.className="loader1";
            document.getElementById("yo").style.display="none";
            document.getElementById("yo1").style.display="inline-block";
        }
        function cn()
        {
            var k=document.getElementById("u1").value;
            if(k==a)
                {
                    document.getElementById("yo1").style.display="none";
                    document.getElementById("yo2").style.display="inline-block";
                }
            else{
                alert("OTP IS INCORRECT");
            }
        }
        function dn()
        {
                        var k1=document.getElementById("u3").value;
                        var k2=document.getElementById("u4").value;
            if(k1==k2)
                
                {                      document.getElementById('yo2').style.display="none";
 var y3= document.getElementById('lo');
                 y3.className="loader";
                     var database = firebase.database();var firebaseRef1;
                    firebaseRef1 = firebase.database().ref("Accounts/account-"+oi+"/password");
                    firebaseRef1.once("value",function(snapshot){
                        var blue=snapshot.val();
                    blue.trim();
                        k1.trim();
                    if(k1==blue)
                        {
                            alert("New Password Cannot Be Same As Old One");
                        }
                        else{
                    
                    var database = firebase.database();var firebaseRef;
                    firebaseRef = firebase.database().ref("Accounts/account-"+oi+"/password").set(k1, function(error) {
                      if (error) {
                          var y31= document.getElementById('lo');
                 y31.className="loader1";
                        alert("Password could not be Changed." + error);
                          window.location="login.php";
                      } else {
                          var y31= document.getElementById('lo');
                 y31.className="loader1";
                        alert("Password Changed successfully.");
                          window.location="login.php";
                      }});}
                        });
                    
                     
                    
                    
                    
                    //
                    
                    
                }
            else{
                alert('Passwords Dont Match');
            }

        }
        
    </script>
    <div id="lo"></div>
    
</html>