<?php
require_once('../controller/area-based-pay_check.php');

$filename = $_COOKIE['Filename'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- css -->
    
    <link rel="stylesheet" href="../asset/css/homepageStyle.css">
    <link rel="stylesheet" href="../asset/css/indexMiddleStyle.css">
</head>

<body>
    <form method="POST">

        <table border="0" cellspacing="0" cellpadding="10" width="100%">
            <tr>
                <td><img src="../asset/img/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" id="mainlink">
                    <a href="delivermanReg.html"> Earn With us</a> |
                    <a href="userRegistration.html"> User Registration</a> |
                    <a href="userLogin.php"> Login</a>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table border="0" cellspacing="0" width="100%" class="navbar1">
                        <td align="center"><a href="index.php">Home</a></td>
                        <td align="center"><a href="./homepage/service.php">Service</a></td>
                        <td align="center"><a href="./career.php">Career</a></td>
                        <td align="center"><a href="./homepage/contactus.php">Contact Us</a></td>
                        <td align="center"><a href="./homepage/areacoverage.php">Area Coverage</a></td>
                        <td align="center"><a href="./homepage/ourclients.php">Our Clients</a></td>
                        <td align="center"><a href="./homepage/aboutus.php">About Us</a></td>
                        <td align="center"><a href="./homepage/more.php">More..</a></td>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2" height="250px">
                    <form method="POST" action="../controller/area-based-pay_check.php" >
                        <table align="center" border="0" cellspacing="0" cellpadding="15">
                            <tr>
                                <td colspan="2" align="center">
                                    <label for="" align="center">Fare Estimation : </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">PARCEL TYPE:</label>
                                    <Select name="Typer" id="">
                                        <option <?php if (isset($_POST['Typer']) && $_POST['Typer'] == 'Small')
                                            echo "selected = 'selected'"; ?>>Small</option>
                                        <option <?php if (isset($_POST['Typer']) && $_POST['Typer'] == 'Medium')
                                            echo "selected = 'selected'"; ?>>Medium</option>
                                        <option <?php if (isset($_POST['Typer']) && $_POST['Typer'] == 'Large')
                                            echo "selected = 'selected'"; ?>>Large</option>
                                    </Select>
                                    <label for="">FROM:</label>
                                    <Select name="Former" id="">
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'DHAKA')
                                            echo "selected = 'selected'"; ?>>DHAKA</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'CHITTAGONG')
                                            echo "selected = 'selected'"; ?>>CHITTAGONG</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'RAJSHAHI')
                                            echo "selected = 'selected'"; ?>>RAJSHAHI</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'KHULNA')
                                            echo "selected = 'selected'"; ?>>KHULNA</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'BARISHAL')
                                            echo "selected = 'selected'"; ?>>BARISHAL</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'SYLHET')
                                            echo "selected = 'selected'"; ?>>SYLHET</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'RANGPUR')
                                            echo "selected = 'selected'"; ?>>RANGPUR</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'MYMANSINGH')
                                            echo "selected = 'selected'"; ?>>MYMANSINGH</option>
                                    </Select>
                                </td>
                                <td>

                                    <label for="">TO:</label>
                                    <Select name="Toto" id="">
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'DHAKA')
                                            echo "selected = 'selected'"; ?>>DHAKA</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'CHITTAGONG')
                                            echo "selected = 'selected'"; ?>>CHITTAGONG</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'RAJSHAHI')
                                            echo "selected = 'selected'"; ?>>RAJSHAHI</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'KHULNA')
                                            echo "selected = 'selected'"; ?>>KHULNA</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'BARISHAL')
                                            echo "selected = 'selected'"; ?>>BARISHAL</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'SYLHET')
                                            echo "selected = 'selected'"; ?>>SYLHET</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'RANGPUR')
                                            echo "selected = 'selected'"; ?>>RANGPUR</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'MYMANSINGH')
                                            echo "selected = 'selected'"; ?>>MYMANSINGH</option>
                                    </Select>
                                    <input type="submit" name="Fare" value="Generate Fare">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <label for="">Estimated Fare:</label>
                                    <input type="text" name="Total" value="<?php echo $FareCollector; ?> " id=""
                                        readonly size="1">
                                    <input type="submit" name="Reset" value="Reset">
                                    <span>
                                        <p style="Color: Red;">
                                            <?php echo "Please Press Reset after Getting The estimate Fare"; ?>
                                        </p>
                                    </span>

                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <div class="container"> 
                    <h1 align="center" id="title">
                        Welcome to: " All in One Parcel Management System "
                    </h1>
                    <p align="center" id="p1">
                        <h2 align="center">
                        Streamlining Logistics, Redefining Efficiency
                        </h2>
                    </p>

                    <p id="p2">
                        At All in One Parcel Management System,<br> we're your solution to seamless, reliable, and
                        innovative
                        parcel logistics in Bangladesh.
                    </p>
                    <p id="p3">
                        Efficiency in Every Delivery

                        Experience a new era in parcel management. <br> Our cutting-edge technology ensures every delivery is
                        precise, timely, and handled with care.
                    </p>

                    <p id="p4">
                        Tailored for Your Needs

                        Whether you're a business seeking streamlined supply chain solutions or an individual needing
                        secure
                        parcel deliveries, <br> our services are customized to meet your unique requirements.

                    </p>
                    <p id="p5">
                        Reliability at Every Step

                        Count on us for dependable, on-time deliveries. <br> Our customer-centric approach ensures your
                        parcels
                        reach their destination safely and promptly.
                    </p>

                    <p id="p6">
                        <h3>
                        Join the Evolution
                        </h3>

                        We're revolutionizing logistics, one parcel at a time. <br> Embracing sustainability and innovation,
                        we're creating a future where logistics are no longer a worry.
                    </p>
                    <p id="p7">

                        <h3> <i>
                        Ready to Simplify Your Parcels?
                        </i></h3>

                        Explore our comprehensive parcel management services and experience a new standard in logistics.
                    </p>
                    <p id="p8">
                        <h2>
                        Join us in redefining how parcels are managed and delivered across Bangladesh.
                        </h2>
                    </p>

                    <p id="p9">
                    <h1>
                        Your parcels, our priority.
                    </h1>
                    </p>
                </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p align="center">
                        <img src="../asset/clogo.png" alt="" height="75px"><br>
                        Company Name <br>
                        Corporate Address <br>
                        Available Pick up address. <br>
                        FAQ <br>
                    </p>

                </td>
                <td>
                <a download="<?php echo $filename; ?>" href="../upfiles/<?php echo $filename; ?>">Company Terms And Conditions</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>