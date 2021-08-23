<!DOCTYPE HTML>
<html>
<body>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #myHeader{
            text-align: center;
        }
        #bt{
            position:absolute;
            bottom: 100px;
            right: 150px;
            background-color: red;
            width: 100px;
            height: 40px;
            font-weight: bold;
            color: white;
            cursor: pointer;
            transition: background 0.5s;
            display: none;
        }
        #bt:hover{
            background: #563434;
        }
        #yo
        {
             position:absolute;
            bottom: 60px;
            left:20px;
                        display: none;

        }
        #bt1{
            position:absolute;
            bottom: 100px;
            left:45px;
            background-color: red;
            width: 300px;
            height: 40px;
            font-weight: bold;
            color: white;
            cursor: pointer;
            word-spacing: 3px;
            transition: background 0.5s;
            display: none;
        }
        #bt1:hover{
            background: #563434;
        }
        @media(max-width:650px)
        {
            #bt
            {
                width: 75px;
                right:20px;
            }
            #bt1{
                width: 175px;
                left: 20px;
            }
        }
        @media(max-width:325px)
        {
            #bt
            {
               width: 55px;
                right:10px; 
            }
            #bt1{
                width: 155px;
                left: 10px;
            }
        }
    </style>
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
          var n=sessionStorage.getItem("usrna");
        if(n==null)
            {
                alert("You Cannot Access This Page Before Logging In");
                window.location="login.php";
            }
        else{
          var data;
          var database = firebase.database();
          var firebaseRef = firebase.database().ref("Accounts/account-"+n+"/name");
          firebaseRef.once("value",function(snapshot){
              var bantai=snapshot.val();
              bantai=bantai.toUpperCase();
          var firebaseRef1 = firebase.database().ref("Accounts/account-"+n+"/Orders");
              firebaseRef1.once("value",function(snapshot){
                  var cnt=snapshot.numChildren();
              
                   var firebaseRef2 = firebase.database().ref("Accounts/account-"+n+"/email");
              firebaseRef2.once("value",function(snapshot){
                  var cnt1=snapshot.val();
                  
                  var firebaseRef2 = firebase.database().ref("Accounts/account-"+n+"/number");
              firebaseRef2.once("value",function(snapshot){
                  var cnt2=snapshot.val();
                  
          var x = document.createElement("HEADER");
          x.setAttribute("id", "myHeader");
          document.body.appendChild(x);

          var y = document.createElement("H1"); 
          var t = document.createTextNode("WELCOME - "+bantai);
              
          y.appendChild(t);
                  const para = document.createElement("p");
                  document.body.appendChild(para);
                 var node = document.createTextNode("Total Orders Placed Till Date = "+cnt);
                 para.appendChild(node);
                  var br = document.createElement("br");
                  para.appendChild(br);
                  var br = document.createElement("br");
                  para.appendChild(br);
                 node = document.createTextNode("Email Linked = "+cnt1);
                 para.appendChild(node);
                   var br = document.createElement("br");
                  para.appendChild(br);
                  var br = document.createElement("br");
                  para.appendChild(br);
                 node = document.createTextNode("Phone Number = "+cnt2);
                 para.appendChild(node);
                var p = document.createElement('p');
                 p.innerHTML = '<a href="chpas.php">Change Password</a>.';
                  para.appendChild(p);
                   var p = document.createElement('p');
                 p.innerHTML = '<a href="em.php">Change Email / Number</a>.';
                  para.appendChild(p);
                   
 
          document.getElementById("myHeader").appendChild(y);
              document.getElementById("bt").style.display="block";
              document.getElementById("bt1").style.display="block";
                                document.getElementById("yo").style.display="block";
            });  });
                  });
        });
        function logout(){
            
            sessionStorage.removeItem("usrna");
                                    sessionStorage.removeItem("logdet");

            window.location="index.php";
        }
        function tl(){
            window.location="ttl_ord.php";
        }
        }
    </script>
    <button onclick="logout()"id="bt">LOG OUT</button>
    <button onclick="tl()" id="bt1">CHECK ALL YOUR ORDER DETAILS</button>
</body>
</html>