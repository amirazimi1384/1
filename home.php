<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="all4.css">
<script>
    var $=document;
    const menubergur=$.querySelector('.check');
    const list=$.querySelector('.list');
    var bool=true;
    menubergur.addEventListener("click" , () => {
        if(bool==true){
           
            list.style.top=0%;
            bool=false;
        }else{
            
            list.style.top=-14%;
            bool=true;
        }
    });
</script>
</head>
<body>
    <div class="a1">
    <label class="menu">
        <input type="checkbox" name="check" id="check1" class="check">
        <span class="checkmark"></span>
    </label>
    <ul class="list" >
        <a href="http://localhost/projects/soheil/insert.php"  class="a">
            <button class="button" >
                <li>
         ثبت دانش آموز جدید
                </li>
            </button>
        </a>
        <a href="http://localhost/projects/soheil/delete.php"  class="a">
            <button class="button">
                <li>
           حذف دانش آموز
                </li>
            </button>
        </a>
        <a href="http://localhost/projects/soheil/edit.php"  class="a">
            <button class="button">
                <li>
        ویرایش دانش آموز
                </li>
            </button>
        </a>
        <a href="http://localhost/projects/soheil/veiw.php"  class="a">
            <button class="button">
                <li>
      نمایش اطلاعات کاربران
                </li>
            </button>
        </a>
    </ul>
    <div class="h1">
    <h1>سامانه مدیریت اعضا دانشگاه</h1></div>
    </div>
    
</body>
</html>
   
