<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Veiw page</title>
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
            <!-- <form class="panel" method="post">
				    <label id="header"><strong>نمایش نمرات دانش آموزان</strong></label>
			    <br><br>
				   
				    <label>code :</label>
				        <input type="number" name="code" class="box" placeholder="کد دانش آموزی را وارد کنید">
			    <br><br>
			    	    <input type="submit" value="ارسال"  name="sub">
		    </form> -->
            <header class="tb"> 
            <h1>اطلاعات کاربران</h1></header>
            <div class="tb">
               
          <table border="3" class="table">
        <tr>
            <th>نام</th>
            <th>نام خانوادگی</th>
            <th>کد دانش آموزی</th>
            <th>کد ملی</th>
            <th>تاریخ تولد</th>
        </tr>
          
            <?php
                // $code=$_POST['code'];
                $conn=mysqli_connect("localhost","root","","daneshgha");
                $sql="SELECT * FROM student ";
                $res=mysqli_query($conn,$sql);
                $row=mysqli_fetch_all($res);
    
                ?><?php
                foreach($row as $t){ ?>
     
            <tr>
                <td><?php echo $t[0]; ?></td>
                <td><?php echo $t[1]; ?></td>
                <td><?php echo $t[2]; ?></td>
                <td><?php echo $t[3]; ?></td>
                <td><?php echo $t[4]; ?></td>
            </tr>
     <?php }?></table>
    </div>
     
        </body>
</html>