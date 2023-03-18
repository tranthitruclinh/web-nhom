<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
</head>
<style>
   /*  * {
  box-sizing: border-box;
}*/

body {
  margin: 0;
}

.header {
  background:url('img/cit.jpg');
  color: chartreuse;
  padding: 100px;
  text-align: center;
  background-size: cover;
}

.topnav {
  overflow: hidden;
  background-color:#3399FF;
}


.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
}

*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
} 
section{
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
}



section .nd{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 63%;
    height: 60%;
}
section .nd .form{
	margin-left: 55%;
    width: 70%;
}
section .nd .form h2{
    color: #607d8b;
    font-weight: 500;
    font-size: 1.5em;
    text-transform: uppercase;
    margin-bottom: 20px;
    border-bottom: 4px solid #607db8;
    display: inline-block;
    letter-spacing: 1px;
}
section .nd .form .input-form{
    margin-bottom: 20px;
}
section .nd .form .input-form span{
    font-size: 16px;
    margin-bottom: 5px;
    display: inline-block;
    color: #607db8;
    letter-spacing: 1px;
     }
section .nd .form .input-form input{
    width: 100%;
    padding: 10px 20px;
    outline: none;
    border: 1px solid #607d8b;
    font-size: 16px;
    letter-spacing: 1px;
    color: #607d8b;
    background: transparent;
    border-radius: 30px;
    }
    
section .nd .form .input-form input[type="submit"]{
    background: #607db8;
    color: #fff;
    outline: none;
    border: none;
    font-weight: 500;
    cursor: pointer;
    box-shadow: 0 1px 1px rgba(0,0,0,0.12),
               0 2px 2px rgba(0,0,0,0.12),
               0 4px 4px rgba(0,0,0,0.12),
              0 8px 8px rgba(0,0,0,0.12),
              0 16px 16px rgba(0,0,0,0.12);
}
section .nd .form .input-form input[type="submit"]:hover{
    background: #607db8;
}
section .nd .form .nho-dang-nhap{
    margin-bottom: 10px;
    color: #607d8b;
    font-size: 14px;
}
section .nd .form .input-form p{
    color: #607d8b;
}
section .nd .form .input-form p a{
    color: #607db8;
}
</style>
<body>
<div class="header">
</div>

<main>
        <section>
          
            <!--Kết Thúc Phần Hình Ảnh-->
<!--Bắt Đầu Phần Nội Dung-->
            <div class="nd">
                <div class="form">
                    <h2>Đăng Nhập</h2>
                        <div class="input-form">
                            <span class= "username" >Tên tài khoản hoặc địa chỉ email</span>
                            
                            <input type="text" name="" required>
                            
                    

                        </div>
                        <div class="input-form">
                            <span >Mật Khẩu</span>
                            <input type="password" name="">
                        </div>
                        <div class="nho-dang-nhap">
                            <label><input type="checkbox" name=""> Nhớ Đăng Nhập</label>
                        </div>
                        <div class="input-form">
                            <input type="submit" value="Đăng Nhập" >
                           
                        </div>
                        <div> 
                        <a href="Homepage.php"> </a>
                        </div>
                  

                        
                    </form>


                </div>
            </div>
            <!--Kết Thúc Phần Nội Dung-->
        </section>

    </main>
</body>
</html>



