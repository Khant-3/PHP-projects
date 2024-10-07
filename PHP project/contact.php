<?php include('header.php'); ?>
<style>
    body {
        background-image: url(img/fb-bg.jpg);
        }
    form {
        background-color: orange;
        padding: 20px;
        max-width: 400px;
        margin: 0 auto;
        border-radius: 15px;
    }
    h3 {
        text-align:center;
        margin-top: 0;
    }

    label {
        display: block;
        margin-top: 10px;
    }
    input, textarea {
        width: 100%;
        padding: 5px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
        border-radius: 10px;
    }
    textarea {
        resize: vertical;
    }
    input[type="submit"] {
        background-color: black;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        color:orange;
    }

    p {
        text-align: center;
    }
</style>
<?php
error_reporting(1);
include("dbconnection.php");
if($_POST['sub'])
{ 
$name=$_POST['c1'];
$email=$_POST['c2'];
$phone=$_POST['c3'];
$mesg=$_POST['c4'];
if(mysql_query("insert into feedback(username,email,phone,messages) values('$name','$email','$phone','$mesg')"))
{$scc="Message sent successfully"; }
}
?>
            </br><form method="post">
            <h3><i><b>Send us a message!</b></i></h3>

            <p><?php echo $scc;?></p>

            <label><i><b>Name:</b></i></label>
            <input type="text" name="c1" required /></br></br>
                        
            <label><i><b>Email:</b></i></label>
            <input type="email" name="c2" required /></br></br>
                        
            <label><i><b>Phone:</b></i></label>
            <input type="number" name="c3" required /></br></br>
                        
            <label><i><b>Message:</b></i></label> 
            <textarea name="c4" rows="4" placeholder="Write a message" required>
            </textarea></br></br>
                        
            <input type="submit" name="sub" value="Send"/>
        </form></br>    
<?php
include('footer.php');
?>       
