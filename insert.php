<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert Page</title>
        <link rel="stylesheet" href="all4.css">
    </head>
        <body>
        <div>
        <label class="home">
            <a href="http://amirazimi.liara.run/home.php">
        <input type="button" value="" class="button" name="button" id="button1">
            </a>
        <span class="style"></span>
        <span class="style1"></span>
    </label>
    </div>
            <form class="panel" method="post">
				    <label id="header"><strong>ثبت نام دانش آموز جدید</strong></label>
                    <br><br>
                <label>name :</label>
				        <input type="text" name="name" class="box" placeholder="نام دانش آموز را وارد کنید">
			    <br><br>
				    <label>code :</label>
				        <input type="text" name="coden" class="box" placeholder="کد دانش آموزی جدید را وارد کنید">
			    <br><br>
                <label>code2 :</label>
				        <input type="text" name="code2" class="box" placeholder="کد ملی جدید را وارد کنید">
			    <br><br>
				    <label>familly :</label>
				        <input type="text" name="familly2" class="box" placeholder="نام خانوادگی جدید را وارد کنید">
			    <br><br>
                <label>date :</label>
				        <input type="text" name="date2" class="box" placeholder="تاریخ تولد جدید را وارد کنید">
			    <br><br>
                <label class=sub1>
			    	    <input type="submit" value="ارسال"  name="sub" class="sub">
                        <span class="txt">
                        ارسال
                        </span>
                    </label>
		    </form>
            <?php
     function insertdata($name,$familly,$coden,$code2,$date){
        $conn=mysqli_connect("localhost","root","","daneshgha");
        $sql="INSERT INTO student (name,familly,code,code2,date) VALUES('{$name}','{$familly}','{$coden}','{$code2}','{$date}')";
        $res=mysqli_query($conn,$sql);
     }
     if(isset($_POST['sub'])){
     if(!empty($_POST['name']) && !empty($_POST['coden']) && !empty($_POST['code2'])&&!empty($_POST['familly2'])&&!empty($_POST['date2'])){
        insertdata($_POST['name'],$_POST['familly2'],$_POST['coden'],$_POST['code2'],$_POST['date2']);
        echo '<script> window.alert("ثبت نام با موفقیت انجام شد") </script>';
        }
        else
        echo '<script> window.alert("برخی از فیلد ها خالی میباشد") </script>';
        }
     ?>
        </body>
</html>
