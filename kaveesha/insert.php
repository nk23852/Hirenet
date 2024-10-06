<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <script src ="js/faq.js"> </script>
 
    <title>FAQ</title>
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="time">
            <!-- Time location  -->
        <h6 id ="Current-time">00:00:00 AM</h6>
    </div>
        <h1 class="header-title">FAQ</h1>
        <p class="header-desc">Frequently Ask Questions</p>
       <br>

       <!-- Button in the dropdown  -->
        <div class="dropdown">
            <button class="dropbtn">QUESTIONS</button>
            <div class="dropdown-content">
                <button class="a" id="bn1" onclick="loadData('bn1')">
                    01-Is your CV packages only valid for a month?
                </button>
                <button class="a" id="bn2" onclick="loadData('bn2')">
                    02-Can you allocate CVs for a position?
                </button>
                <button class="a" id="bn3" onclick="loadData('bn3')">
                    03-Do you send us filtered CVs only?
                </button>
                <button class="a" id="bn4" onclick="loadData('bn4')">
                    04-Can I post adverts by my self?
                </button>
                <button class="a" id="bn5" onclick="loadData('bn5')">
                    05-Can we get access to your CV data base?
                </button>

            </div>

        </div>
        <!-- select -->

    </div>
    <br>
    <!-- Add image  -->
    <div class="bg"></div>
    

    <p class="answer" id ="para">Ask me anything !!!</p>

   <!-- time cal -->
    <script class ="time">
        let time=document.getElementById("Current-time");
        setInterval(()=>{
            let d=new Date();
            time.innerHTML=d.toLocaleTimeString();
        },1000)
     
    </script>

    <!--form--> 

    <br>
    <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <img class="img"src="image/location.png" width="54" height="58" alt="shopping logo" class="Logo">
                    <div class="topic">Address</div>
                    <div class="text-one">Surkhet,NP12</div>
                    <div class="text-two">Birendranagar 06</div>
                
                <div class="phone details"></div>
                <img class="img"src="image/call.png" width="54" height="58" alt="shopping logo" class="Logo">
                    <div class="topic">Phone</div>
                    <div class="text-one">+94771234567</div>
                    <div class="text-two">+940687543</div>
                
                <div class="email details"></div>
                <img class="img"src="image/email.png" width="54" height="70" alt="shopping logo" class="Logo">
                <div class="topic">E-mail</div>
                <div class="text-one">Hirenet@gmail.com</div>
                <div class="text-two">hirenet@gmail.com</div>
            </div>
            </div>
            
            
            <div class="rigth-side">
                <div class="topic-text">SEND US A MESSAGE</div>
                <p>If you any work form me or any type of quire related to my turoial, you can send me message from here. 
                    <br>it's my pleasure to help you</p>
                <br><br>
            
                <form action="./insert.inc.php" method="post">
                <div class="input-box">
                    <input type="text" name="name" placeholder="Enter Your Name">
                </div>
                <br>

                <div class="input-box">
                    <input type="text" name="email" placeholder="Enter Your E-mail">
                </div>
                <br>
                <div class="input-box message-box">
                    <textarea name="userMessage" placeholder="Enter your message"></textarea>
                </div> 
                <br>

                <button class="button" type="submit">Send Now</button>
            </form>
        </div>
    </div>

</body>

</html>