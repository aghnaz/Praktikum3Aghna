<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <style>
        body, html, div{
            height: 100%;
            line-height: 1.8em;
            margin: 0;
            padding: 0px;
            overflow: hidden;
            background-image: url(backg3.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
        .semua{
            width: 30%;
            height: 70%;
            position: absolute;
            z-index: 9;
            top: 2%;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            margin-bottom: 15%;
            padding: 5%;
            border-radius: 10px;
            /* border-bottom: 10px; */
        }
        table input{
            border-left: none;
            border-right: none;
            border-top: none;
            height: 200%;
            width: 100%;
            border-radius: 5px;
            padding: 2px 5px;
            overflow: hidden;
            font-size: 23pt;
            color: dimgrey;
            border-left: none;
            border-right: none;
            border-top: none;
            margin: 1% 3% 1% 3%;
            position: center;
        } 
        table input:hover{
            border-left: none;
            border-right: none;
            border-top: none;
            border-bottom: 4px solid red;
            transition: 0.5s;
        }
        table img{
            height: 30px;
            padding: 2px 5px;
            margin-bottom: -23px;
            overflow: hidden;
        }
        table button{
            text-align: center;
            border: 2px solid red;
            background-color:  red;
            height: 200%;
            width: 100%;
            border-radius: 5px;
            padding: 2%;
            /* margin-top: 5%;
            margin-left: 2%; */
            color: white;
            font-style: bold;
            font-size: 25pt;
            margin: 6% 3% 1% 4.4%;
        }
        button:hover{
            font-size: 28pt;
            transition: 0.3s;
        }
        #headeruser{
            width: 100%;
            padding: 20% 0 0 0;
        }
        form{
            padding: 3% 0 3% 0;
            /* border-bottom: 5px solid white; */
            background-color: rgba(0,0,0,0.5) !important;
        }
        .semua{
            border-bottom: 5px solid white;
            padding: 0 0 0 0;
            display: block;
        }
    </style>

</head>
<body>

<div class="semua">
    <img src="headeruser4.png" alt="" id="headeruser">
    <div id=formnya> 
    <form action="php-login.php" method = "post" class="form">
    <table class="form">
    <tr>
        <td>
            <input type="text" name="username" class="form-input" place placeholder="Username" id="username"></td>
    </tr>
    <tr>
        <td>
            <input type="password" name="password" class="form-input" placeholder="Password" id="password"></td>
    </tr>
    <tr> 
        <td>
            <button action="php-login.php">LOGIN</button> 
        </td>
    </tr>
    </form>
    </table>
    </div>
</div>

</body>
</html>