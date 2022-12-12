<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        @font-face {
            font-family: Rubik;
            src: url(<?= ROOT ?>/assets/fonts/Rubik/Rubik-Regular.ttf);
        }


        body {
            margin: 0;
            font-family: Rubik;
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
            margin-top: 30px;

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

        }

        div {
            box-sizing: border-box;
        }

        form input {
            box-sizing: border-box;
            height: 35px;
            width: 100%;
            border-radius: 5px;
            margin-top: 5px;
            border: 1px solid #18242279;
        }

        select {
            height: 35px;
            width: 100%;
            border-radius: 5px;
            margin-top: 5px;
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
            font-size: small;
            font-weight: 600;
            color: rgb(59, 59, 59);
        }

        h1 {
            margin-top: 5px;
        }

        .form-textbox {
            padding-left: 10px;
        }

        .form-error {
            /* display: none; */
            color: red;
        }
    </style>
</head>

<body>
    <div class="contactbar">
        <nav class="nav">




            <a style="height: auto;" href="#"><img style="color:white; width:20px;" src="<?= ROOT ?>/assets/images/cashier/arrow-left-solid.svg" alt=""></a>
            <img src="<?= ROOT ?>/assets/images/cashier/WOODWORKS.svg" alt="">


            <!-- <div>
                <ul>
                    <li>Login</li>
                    <li>Register</li>
                    <li>Cart</li>

                </ul>
            </div> -->
        </nav>
    </div>
    <div class="main">
        <div class="grid-item leftpanel"></div>
        <div class="grid-item mainbg ">
            <div>
                <div style="display: block; justify-content:center ;width: auto;background-color: white; padding: 30px; border-radius: 10px; box-shadow: 0px 5px 10px rgba(107, 107, 107, 0.753); transition:all 1s;">
                    <!-- <h1>Register</h1> -->

                    <form method="POST">
                        <div class="name-form" style="display: grid; grid-template-columns: 1fr 1fr; grid-column-gap:10px; grid-row-gap:15px">

                            <div>
                                <label for="First Name">First Name</label>
                                <input class="form-textbox type=" text" name="Firstname" value="<?= set_value(("Firstname")) ?>" id="Firstname"><br>
                                <?php if (!empty($errors['Firstname'])) : ?>
                                    <small class="form-error"><?= $errors["Firstname"] ?></small>
                                <?php endif; ?>
                            </div>
                            <div>
                                <label for="Last Name">Last Name</label>
                                <input class="form-textbox type=" text" name="Lastname" value="<?= set_value(("Lastname")) ?>" id="Lastname"><br>
                                <?php if (!empty($errors['Lastname'])) : ?>
                                    <small class="form-error"><?= $errors["Lastname"] ?></small>
                                <?php endif; ?>
                            </div>

                            <div>

                                <label for="emID"> Supplier ID</label><br>
                                <input class="form-textbox type=" text" name="SupplierID" value="<?= set_value(("SupplierID")) ?>" id="empID"><br>
                                <?php if (!empty($errors['SupplierID'])) : ?>
                                    <small class="form-error"><?= $errors["SupplierID"] ?></small>
                                <?php endif; ?>


                            </div>
                            <div>
                                <label for="email">Email</label><br>
                                <input class="form-textbox type=" email" name="Email" value="<?= set_value(("Email")) ?>" id="email"><br>
                                <?php if (!empty($errors['Email'])) : ?>
                                    <small class="form-error"><?= $errors["Email"] ?></small>
                                <?php endif; ?>
                            </div>





                            <div style="grid-column-start:1; grid-column-end:3">
                                <label for="password">Password</label><br>
                                <input style="width: 100%;" class="form-textbox" type="password" name="Password" id="password"><br>
                            </div>
                            <div style="grid-column-start:1; grid-column-end:3">
                                <label for="conpassword"> Confirm Password</label><br>
                                <input style="width: 100%;" class="form-textbox" type="password" name="conpassword" id="conpassword"><br>
                                <?php if (!empty($errors['Password'])) : ?>
                                    <small class="form-error"><?= $errors["Password"] ?></small>
                                <?php endif; ?>
                            </div>

                            <!-- <div>
                                <label for="role">Role</label><br>
                                <select name="Role" id="role">
                                    <option value="cashier">Cashier</option>
                                    <option value="supplier">Supplier</option>
                                </select><br>
                                <?php if (!empty($errors['Role'])) : ?>
                                    <small class="form-error"><?= $errors["Role"] ?></small>
                                <?php endif; ?>
                            </div> -->

                            <div>
                                <label for="Contactno">Contact Number</label>
                                <input class="form-textbox type=" tel" name="Contactno" value="<?= set_value(("Contactno")) ?>" id="contact"><br>
                                <?php if (!empty($errors['Contactno'])) : ?>
                                    <small class="form-error"><?= $errors["Contactno"] ?></small>
                                <?php endif; ?>
                            </div>
                            <div>
                                <label for="Contactno">Company Name</label>
                                <input class="form-textbox type=" tel" name="Company_name" value="<?= set_value(("Company_name")) ?>" id="contact"><br>
                                <?php if (!empty($errors['Company_name'])) : ?>
                                    <small class="form-error"><?= $errors["Company_name"] ?></small>
                                <?php endif; ?>
                            </div>

                            <div style="grid-column-start:1 ; grid-column-end:3">

                                <button type="submit">Sign Up</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>