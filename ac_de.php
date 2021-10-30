<!DOCTYPE HTML>
<html>
<body><title>Account Details</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .chckbtn{
    font-size: 30px;
    cursor: pointer;
}.loader {
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
           .navbar{
     display: flex;
     align-items: center;
     padding: 20px;
}
nav{
	flex: 8;
	text-align: left;
}
nav ul{
	display: inline-block;
	list-style-type:none;
}

nav ul ti{
	display: inline-block;
}
a{
    text-decoration: none;
    color: darkblue;
    cursor: pointer;
}
            ul{
                background: #2c3e50;
                position: fixed;
                width: 100%;
                height: 100vh;
                top: 250px;
                left: -150%;
                text-align: center;
                word-spacing: 3px;
                transition: all 1.0s;
            
                }
            nav ul ti{
                display: inline-block;
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
            }#home{
            display: inline-block;
        }
        #home1{
            display: none;
        }
        #check{
            display: none;
        }
        #hi1ttl{
            cursor: pointer;
        }
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
        }#home{
            display: inline-block;
        }
        #home1{
            display: none;
        }
    </style>

    <nav>
    <input type="checkbox" id="check">
    <label for="check" class="chckbtn">
    <i class="fas fa-bars">☰</i>
        
    </label>
           <ul>
               <ti><a class="active"></a></ti>
              <ti><a onclick="hi()" id="hi1ttl">TOTAL ORDERS&nbsp;&nbsp;&nbsp;</a></ti>
              <ti><a href="reviee.php">CONTACT US&nbsp;&nbsp;&nbsp;</a></ti> 
              <ti><a href="abt%20us.php">ABOUT US&nbsp;&nbsp;&nbsp;</a></ti>
               <div id="home">
               <ti><a href="index.php">HOME</a></ti>
               </div>
               <div id="home1">
               <ti><a href="ac_de.php">ACCOUNT</a></ti>
               </div>
              
           </ul>
               
        </nav>          <div id=lo></div>
   
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-analytics.js"></script>
    
    <script>
        var y11112222= document.getElementById('lo');
               y11112222.className="loader";
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
                  var y11112222= document.getElementById('lo');
               y11112222.className="loader1";
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
        function hi()
             {
                    if(sessionStorage.getItem("usrna")!=null)
                                {
                
            
                                
                                    window.location="ttl_ord.php";
                                }
                        
                    else{
                        alert("You Need To Login Into 'YOUR ACCOUNT' \nBefore You Access This Page");
                       window.location="login.php";
                    }
             }
    </script>
    
    <button onclick="logout()"id="bt">LOG OUT</button>
    <button onclick="tl()" id="bt1">CHECK ALL YOUR ORDER DETAILS</button>
</body>
</html>