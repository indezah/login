<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            font-family: Poppins;
            padding: 0;
            background-color: #E2E2CF;
        }

        .leftpanel {

            background: url('<?= ROOT ?>/assets/images/cashier/Rectangle6.png');
            background-repeat: no-repeat;
            background-size: cover;
            

        }

        .nav {
            position: fixed;
            align-items: center;
            width: 100vw;
            /* padding: 30px; */
            /* margin-top: 30px; */

        }

        .nav img {
            padding-left: 5vw;
            width: 14vw;
        }



        .nav ul {
            list-style: none;
            display: flex;
            justify-content: space-between;
            padding-right: 5vw;
        }

        .nav li {
            padding-left: 3vw;
        }

        .main {
            display: grid;
            /* column-gap: 50px; */
            grid-template-columns: 2fr 5fr;
        }

        .grid-item {
            background-color: red;
            height: 100vh;

        }

        .mainbg {
            background-color: #E2E2CF;
            display: grid;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
        }

        form input {
            margin-bottom: 20px;
            height: 30px;
            width: 30vw;
            border-radius: 5px;
            border: 1px solid #18242279;
        }

        form button {
            font-size: 15px;
            background-color: #182422;
            color: white;
            width: 80px;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
        }

        label {
            color: rgb(59, 59, 59);
        }

        h1 {
            margin-top: 5px;
        }

        .form-textbox {
            padding-left: 10px;
        }
    </style>
</head>

<body>
    <div class="contactbar">
        <nav class="nav" style="display: grid; grid-template-columns:8fr 2fr">
            <img src="<?= ROOT ?>/assets/images/cashier/WOODWORKS.png" alt="">
            <div>
                <ul>
                    <li>Login</li>
                    <li>Register</li>
                    <li>Cart</li>

                </ul>
            </div>
        </nav>
    </div>
    <div class="main">
        <div class="grid-item leftpanel"></div>
        <div class="grid-item mainbg ">
            <div>
                <div style="margin-top:5 0px;display: grid; justify-content:center ;width: 30vw;background-color: white; padding: 40px; border-radius: 10px; box-shadow: 0px 5px 10px rgba(107, 107, 107, 0.753);">
                    <h1>Login</h1>

                    <form method="POST" enctype="multipart/form-data">
                        <label for="emID"> Employee ID</label><br>
                        <input class="form-textbox type=" text" name="EmployeeID" id="empID" value="<?= set_value('EmployeeID')?>"><br>
                        <label for="First Name">First Name</label><br>
                        <input class="form-textbox type=" text" name="Firstname" id="Firstname" value="<?= set_value('Firstname')?>"><br>
                        <label for="Last Name">Last Name</label><br>
                        <input class="form-textbox type=" text" name="Lastname" id="Lastname" value="<?= set_value('Lastname')?>"><br>
                        <label for="email">Email</label><br>
                        <input class="form-textbox type=" email" name="Email" id="email" value="<?= set_value('Email')?>"><br>
                        <label for="password">Password</label><br>
                        <input class="form-textbox" type="password" name="Password" id="password"><br>
 </label>
                        <label for="conpassword"> Confirm Password</label><br>
                        <input class="form-textbox" type="password" name="conpassword" id="conpassword"><br>
                        <label for="role">Role</label>
                        <select name="Role" id="role">
                            <option value="cashier">Cashier</option>
                            <option value="supplier">Supplier</option>
                        </select><br>
                        <label for="Contactno">Contact Number</label>
                        <input class="form-textbox type=" tel" name="Contactno" id="contact"><br>
                        <label for="image">Photo</label>
                        <input style="padding-left:10px ;" type="file" name="Image" id="photo"><br>


                        <br><button type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>