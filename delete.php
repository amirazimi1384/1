<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Page</title>
        <link rel="stylesheet" href="all4.css">
    </head>
        <body>
        <div>
        <label class="home">
            <a href="http://localhost/projects/soheil/home.php">
        <input type="button" value="" class="button" name="button" id="button1">
            </a>
        <span class="style"></span>
        <span class="style1"></span>
    </label>
    </div>
            <form class="panel" method="post">
				    <label id="header"><strong>حذف دانش جو</strong></label>
			    <br><br>
				   
				    <label>code :</label>
				        <input type="number" name="code" class="box" placeholder="کد دانش آموزی را وارد کنید">
			    <br><br>
			    	    <input type="submit" value="ارسال"  name="sub">
		    </form>
            <?php
            // function selectdata($code){
            //     $conn=mysqli_connect("localhost","root","","school2");
            //     $sql="SELECT * FROM student WHERE code=$code";
            //     $res=mysqli_query($conn,$sql);
            //     $row=mysqli_fetch_all($res);
            //     if($row!=null){
            //         echo "y";
            //     }else
            //         echo "n";
                
                
            // }
     function deletedata($code){
        $conn=mysqli_connect("localhost","root","","daneshgha");
        $sql="SELECT * FROM student WHERE code=$code";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_all($res);
        if($row!=null){
        $conn=mysqli_connect("localhost","root","","daneshgha");
        $sql="DELETE FROM student WHERE code=$code";
        $res=mysqli_query($conn,$sql);
        echo '<script> window.alert("حذف با موفقیت انجام شد ") </script>';
        }
       else {
        echo '<script> window.alert("کد دانش آموزی در سیستم موجود نمیباشد") </script>';}
     }
     if(isset($_POST['sub'])){
        deletedata($_POST['code']);
    }
     ?>
        </body>
</html>