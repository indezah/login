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

            transition: all 0.5s ease;
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
            align-items: center;
        }

        .data {
            margin-top: 130px;
            background-color: white;
            height: 100vh;
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
        }
        hr{
            width: 100%;
            border: 0.5px solid #ededed;
        }
        .navbutton{
            border-left: 5px solid white;
        }
    </style>
</head>

<body>
    <nav class="accountinfo">
        <div class="profilename">
            <img src="<?=ROOT?>/assets/images/supplier/DP.svg" alt="">
            <p><?php echo(Auth::getFirstname() . " " . Auth::getLastname() )  ?></p>
        </div>
        <div class="notification">X</div>
    </nav>
    <div class="sec1">
        <nav>
            <img class="logo" src="<?=ROOT?>/assets/images/supplier/WOODWORKS.svg" alt="">
            <ul>
                <li>
                    <a href="#">
                        <div class="navbutton">
                            View Orders
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?=ROOT?>/supplier">
                        <div>
                            Accepted Orders
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?=ROOT?>/supplier/profile">
                        <div>
                            View Profile
                        </div>
                    </a>
                </li>

            </ul>

        </nav>
    </div>
    <div class="sec2">
        <div class="data">
            <hr>
            <h3 style="font-weight:500; margin-left:30px;">Orders</h3>

        </div>
    </div>
</body>

</html>