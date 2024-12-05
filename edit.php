<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Page</title>
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
				    <label id="header"><strong>ویرایش اطلاعات دانش آموز</strong></label>
			    <br><br>
				   
				    <label>code :</label>
				        <input type="number" name="code" class="box" placeholder="کد دانش آموزی را وارد کنید">
			    <br><br>
                <label>name :</label>
				        <input type="text" name="name" class="box" placeholder="نام دانش آموز را وارد کنید">
			    <br><br>
				    <label>code :</label>
				        <input type="number" name="coden" class="box" placeholder="کد دانش آموزی جدید را وارد کنید">
			    <br><br>
                <label>code2 :</label>
				        <input type="number" name="code2" class="box" placeholder="کد ملی جدید را وارد کنید">
			    <br><br>
				    <label>familly :</label>
				        <input type="text" name="familly2" class="box" placeholder="نام خانوادگی جدید را وارد کنید">
			    <br><br>
                <label>date :</label>
				        <input type="text" name="date2" class="box" placeholder="تاریخ تولد جدید را وارد کنید">
			    <br><br>
			    	    <input type="submit" value="ارسال"  name="sub">
		     </form>
             <?php
             function edits($name2,$coden,$code2,$familly2,$date2,$code){
                $conn=mysqli_connect("localhost","root","","daneshgha");
                $sql="UPDATE student SET code=$coden , code2=$code2 , name='{$name2}' , familly='{$familly2}',date=$date2 WHERE code=$code";
                $res=mysqli_query($conn,$sql);
             }
             function editdata($code){
        $conn=mysqli_connect("localhost","root","","daneshgha");
        $sql="SELECT * FROM student WHERE code=$code";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_all($res);
        if($row!=null){
            edits($_POST['name'],$_POST['coden'],$_POST['code2'],$_POST['familly2'],$_POST['date2'],$_POST['code']);
            echo '<script> window.alert("ویرایش با موفقیت انجام شد") </script>';
        }
        else
        echo '<script> window.alert("کد دانش آموزی در سیستم موجود نمیباشد") </script>';
        }
        if(isset($_POST['sub'])){
            editdata($_POST['code']);
        }
        ?>
    </body>
</html>