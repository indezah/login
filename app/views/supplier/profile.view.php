<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial;
            display: grid;
            grid-template-columns: 1fr 3fr;
            margin: 0;
        }

        .accountinfo {
            position: fixed;
            top: 0;
            display: flex;
            width: 100vw;
            padding-top: 30px;
            justify-content: flex-end;
        }

        .logo {
            width: 14vw;
            padding-left: 5vw;
            margin-bottom: 30px;
        }

        .sec1 nav {
            padding-top: 50px;
        }

        .sec1 {
            background-color: #203330;
            position: sticky;
            top: 0;
            height: 100vh;
        }

        .sec2 {
            background-color: #E2E2CF;
        }



        .profilename {
            background-color: white;
            height: 50px;
            width: 170px;
            margin-right: 30px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            box-shadow: 0px 2.9481px 22.8478px rgba(0, 0, 0, 0.25);
        }



        .profilename img {
            margin-left: 15px;
            margin-right: 15px;

            width: 30px;
        }

        .notification {
            height: 50px;
            width: 50px;
            background-color: white;
            margin-right: 30px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 2.9481px 22.8478px rgba(0, 0, 0, 0.25);


        }

        .sec1 nav ul {
            display: flex;
            align-items: center;
            list-style: none;
            padding-left: 0;
            flex-direction: column;

        }

        a {
            text-decoration: none;
            color: white;
        }

        .sec1 nav div {
            box-sizing: border-box;

            display: flex;
            align-items: center;
            justify-content: center;
            height: 80px;
            width: 288px;
            background-color: #455452;
            margin: 10px;
            border-radius: 12px;

        }

        .sec1 nav div:hover {
            background-color: #1b5b51;
        }

        .sec1 nav div:active {
            background-color: #00f4d0;
        }

        .sec2 {
            width: 100%;
            display: grid;
            grid-template-columns: 1fr;
            justify-items: right;

        }

        .data {



            margin-top: 130px;
            background-color: white;
            ;
            width: 90%;
            margin-right: 30px;
            border-radius: 12px;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            box-shadow: 0px 4px 31px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            padding: 10px;
            padding-top: 30px;







            border-radius: 10px;
            box-shadow: 0px 5px 10px rgba(107, 107, 107, 0.753);

        }

        hr {
            width: 100%;
            border: 0.5px solid #ededed;
        }

        .sec2 {
            width: 100%;

            display: grid;
            grid-template-columns: 1fr;
            justify-items: right;

        }

        .navbutton {
            border-left: 5px solid white;
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
            width: 100%;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
            grid-column-start: 1;
            grid-column-end: 3;
        }

        form {
            margin-left: 30px;
        }

        /* 
        .data {
            padding-left: 10px;
            padding-right: 10px;
        } */

        label {
            font-size: small;
            font-weight: 600;
            color: rgb(59, 59, 59);
        }

        .form-textbox {
            padding-left: 10px;
        }

        .col1 {
            grid-column: 1;
            grid-column-start: 1;
            grid-column-end: 3;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 10px;
            width: 100%;
            justify-items: center;
            align-items: center;
        }

        .Image {
            width: 200px;
            height: 200px;
            border-radius: 180px;
            object-fit: cover;

        }
    </style>
</head>

<body>
    <nav class="accountinfo">
        <div class="profilename">
            <img src="<?= ROOT ?>/assets/images/supplier/DP.svg" alt="">
            <p><?php echo (Auth::getFirstname() . " " . Auth::getLastname())  ?></p>
        </div>
        <div class="notification">X</div>
    </nav>
    <div class="sec1">
        <nav>
            <img class="logo" src="<?= ROOT ?>/assets/images/supplier/WOODWORKS.svg" alt="">
            <ul>
                <li>
                    <a href="<?= ROOT ?>/supplier">
                        <div>
                            View Orders
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div>
                            Accepted Orders
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?= ROOT ?>/supplier/profile">
                        <div class="navbutton">
                            View Profile
                        </div>
                    </a>
                </li>

            </ul>

        </nav>
    </div>
    <div class="sec2" style="display: grid;">


        <div class="data">

            <hr>
            <h3 style="font-weight:500; margin-left:30px;">Profile</h3>
            <div class="grid">

                <div class="fields">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="name-form" style="display: grid; grid-template-columns: 1fr 1fr; grid-column-gap:10px; grid-row-gap:15px">

                            <div>
                                <label for="First Name">First Name</label>
                                <input class="form-textbox type=" text" name="Firstname" value="<?= set_value("Firstname", $row->Firstname) ?>" id="Firstname"><br>
                                <?php if (!empty($errors['Firstname'])) : ?>
                                    <small class="form-error"><?= $errors["Firstname"] ?></small>
                                <?php endif; ?>
                            </div>
                            <div>
                                <label for="Last Name">Last Name</label>
                                <input class="form-textbox type=" text" name="Lastname" value="<?= set_value("Lastname", $row->Lastname) ?>" id="Lastname"><br>
                                <?php if (!empty($errors['Lastname'])) : ?>
                                    <small class="form-error"><?= $errors["Lastname"] ?></small>
                                <?php endif; ?>
                            </div>

                            <!-- <div class="col1">

                            <label for="emID"> Employee ID</label><br>
                            <input class="form-textbox type=" text" name="SupplierID" value="<?= set_value(("SupplierID")) ?>" id="empID"><br>
                            <?php if (!empty($errors['SupplierID'])) : ?>
                                <small class="form-error"><?= $errors["SupplierID"] ?></small>
                            <?php endif; ?>


                        </div> -->
                            <div class="col1">
                                <label for="email">Email</label><br>
                                <input class="form-textbox type=" email" name="Email" value="<?= set_value("Email", $row->Email) ?>" id="email"><br>
                                <?php if (!empty($errors['Email'])) : ?>
                                    <small class="form-error"><?= $errors["Email"] ?></small>
                                <?php endif; ?>
                            </div>





                            <!-- <div style="grid-column-start:1; grid-column-end:3">
                            <label for="password">Password</label><br>
                            <input style="width: 100%;" class="form-textbox" type="password" name="Password" id="password"><br>
                        </div>
                        <div style="grid-column-start:1; grid-column-end:3">
                            <label for="conpassword"> Confirm Password</label><br>
                            <input style="width: 100%;" class="form-textbox" type="password" name="conpassword" id="conpassword"><br>
                            <?php if (!empty($errors['Password'])) : ?>
                                <small class="form-error"><?= $errors["Password"] ?></small>
                            <?php endif; ?>
                        </div> -->

                            <!-- <div class="col1">
                            <label for="role">Role</label><br>
                            <select name="Role" id="role">
                                <option value="cashier">Cashier</option>
                                <option value="supplier">Supplier</option>
                            </select><br>
                            <?php if (!empty($errors['Role'])) : ?>
                                <small class="form-error"><?= $errors["Role"] ?></small>
                            <?php endif; ?>
                        </div> -->

                            <div class="col1">
                                <label for="Contactno">Contact Number</label>
                                <input class="form-textbox type=" tel" name="Contactno" value="<?= set_value("Contactno", $row->Contactno) ?>" id="contact"><br>
                                <?php if (!empty($errors['Contactno'])) : ?>
                                    <small class="form-error"><?= $errors["Contactno"] ?></small>
                                <?php endif; ?>
                            </div>
                            <!-- <div style="grid-column-start:1; grid-column-end:3">
                            <label for="image">Photo</label><br>
                            <input style="padding:10px ;" type="file" name="Image" value="<?= set_value(("Image")) ?>" id="photo">


                        </div> -->

                            <div style="grid-column-start:1 ; grid-column-end:3">

                                <button type="submit">Submit</button>

                            </div>


                        </div>
                   
                </div>
                <div style="display:grid; grid-template-rows:auto auto auto; justify-items:center; ">
                    <!-- <img class="Image" src="<?= ROOT ?>.'/'.<?=($row->Image)?>" alt=""> -->
                    <div class="imagename">Selected File: None</div>

                    <div>
                        <label style="display: inline-block; height:17px; width:100px; background-color:blue; color:white; text-align:center; border-radius:5px; padding:10px; margin-top:10px" title="Upload">
                            <i>Upload</i>
                            <input onchange="load_image(this.files[0])" type="file" name="image" style="display: none;">
                        </label>
                        <label style="display: inline-block; height:17px; width:100px; background-color:red; border-radius:5px; padding:10px; margin-top:10px; text-align:center; " title="Upload">
                            <i>Delete</i>
                            
                        </label>

                    </div>

                </div> </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

<script>
    function load_image(file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.querySelector(".Image").src = e.target.result;
            document.querySelector(".imagename").innerHTML = "Selected File: " + file.name;
        }
        reader.readAsDataURL(file);
    }
</script>