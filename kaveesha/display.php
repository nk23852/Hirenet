<!DOCTYPE html>
<html lang="en">

<head>

<!-- Link css -->

    <link rel="stylesheet" href="./css/updatemsg.css">

 
    <title>display</title>
</head>

<body>
<div class="bg">
<?php include 'display.inc.php'; ?>

<!-- form  -->
<form action="./update.inc.php" method="post">
            <div class="input-box">
                <h3 >User : <?php echo  $name; ?> </h3> <!-- form  -->
                    
            </div>
                <br>

                <div class="input-box">
                <h3>Email : <?php echo $email; ?> </h3>
                    
                </div>
                <br>
                <div class="input-box message-box">

                <h3>Privius Inquiry : </h>
                </div> 
                <div class="msg">
                <h5><?php echo $message; ?> </h5></div> 
                <br>

               
                <textarea class="msg" name="msg" placeholder="Update New Message"></textarea>
               
                
                <br> <br> 

                <button class="button" type="submit">Update</button>

                <button class="delete" type="delete" ><a href="delete.php">Delete</a></button>

                <button class="save" type="submit"><a href="../user/homenew.php">Save and Home</a></button>

            </form>
<div>
</body>

</html>




