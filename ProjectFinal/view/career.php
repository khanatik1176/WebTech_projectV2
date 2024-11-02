<?php
require_once('../model/CareerPanelModel.php');
$career = getAllCarrer();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/homepageStyle.css">
    <link rel="stylesheet" href="../asset/css/careerStyle.css">
    <title>Carer</title>
</head>

<body>
    <form method="post"
        style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
        <table border="0" cellspacing="0" cellpadding="10" width="100%">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" id="mainlink">
                    <a href="./delivermanReg.php"> Earn With us</a> |
                    <a href="./userRegistration.php"> User Registration</a> |
                    <a href="./userLogin.php"> Login</a>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table border="0" cellspacing="0" width="100%" class="navbar1">
                        <td align="center"><a href="./index.php">Home</a></td>
                        <td align="center"><a href="./homepage/service.php">Service</a></td>
                        <td align="center"><a href="./homepage/career.php">Career</a></td>
                        <td align="center"><a href="./homepage/contactus.php">Contact Us</a></td>
                        <td align="center"><a href="./homepage/areacoverage.php">Area Coverage</a></td>
                        <td align="center"><a href="./homepage/ourclients.php">Our Clients</a></td>
                        <td align="center"><a href="./homepage/aboutus.php">About Us</a></td>
                        <td align="center"><a href="./homepage/more.php">More..</a></td>
                    </table>
                </td>
            </tr>
        </table>
        <table border="1" cellspacing="0" align="center" width="100%" cellpadding="10" id="jobtable">
            <tr>
                <td colspan="5" align="center">
                    WE ARE HIRING. SEE BELOW JOBS FOR YOUR EXPECTED CAREER.
                </td>
            </tr>
            <tr>
                <td align="center">CAREER ID</td>
                <td align="center">JOB TITTLE</td>
                <td align="center">JOB DESCRIPTION</td>
                <td align="center">JOB POSTING DATE</td>
                <td align="center">ENDING CV SUBMIT DATE</td>
                <?php for ($i = 0; $i < count($career); $i++) { ?>
                <tr>

                    <td align="center">
                        <?= $career[$i]['careerID'] ?>
                    </td>
                    <td align="center">
                        <?= $career[$i]['jobTittle'] ?>
                    </td>
                    <td align="center">
                        <?= $career[$i]['jobDescription'] ?>
                    </td>
                    <td align="center">
                        <?= $career[$i]['postingDate'] ?>
                    </td>
                    <td align="center">
                        <?= $career[$i]['endingDate'] ?>
                    </td>
                </tr>


            <?php } ?>
            </td>
            </tr>
        </table>

        <table border="1" cellspacing="0" cellpadding="8" width="100%" id="container">
            <tr>
                <td align="center">
                    <h3>
                        Become a Delivery Professional with All in One Parcel Management System
                    </h3>
                    <p class="content">
                        Are you passionate about being on the move, ensuring timely and secure deliveries?
                        Join our team
                        as
                        a Delivery Professional and be an integral part of our mission to redefine parcel
                        logistics.
                    </p>
                    <p class="content">
                    <h3>
                        Why Choose Us for Your Delivery Career?
                    </h3>
                    </p>

                    <p class="content">
                        Cutting-Edge Technology
                        We equip our delivery professionals with state-of-the-art tools and technology,
                        ensuring
                        efficiency,
                        accuracy, and ease in your day-to-day operations.
                    </p>

                    <p class="content">
                        Flexibility & Support
                        We understand the importance of work-life balance. Our delivery roles offer
                        flexibility and the
                        support you need to excel in your role.
                    </p>

                    <p class="content">
                        Competitive Compensation
                        We value the hard work of our delivery team. Enjoy competitive pay and opportunities
                        for bonuses
                        based on performance.
                    </p>

                    <p class="content">
                        Growth Opportunities
                        We believe in nurturing talent from within. There are opportunities for career
                        growth and
                        advancement within our expanding company.
                    </p>

                    <p class="content">
                    <h2>
                        What We're Looking For:
                    </h2>
                    </p>

                    <p class="content">
                        Reliable and Responsible Individuals
                        We seek individuals who are punctual, reliable, and committed to ensuring timely and
                        secure
                        deliveries.
                    </p>
                    <p class="content">
                        Strong Work Ethic
                        A strong work ethic and dedication to providing excellent service are fundamental to
                        success in
                        our
                        delivery team.
                    </p>

                    <p class="content">
                        Customer-Focused Approach
                        Delivering parcels isn’t just about packages; it's about delivering exceptional
                        service. We
                        value a
                        customer-centric approach in every delivery.
                    </p>

                    <p class="content">
                        Driving Requirements
                        A valid driver’s license and a clean driving record are essential for our delivery
                        positions.
                    </p>
                    <p class="content">
                        How to Apply

                        Are you ready to be part of our dynamic team? Send your application to [insert
                        contact email or
                        link
                        to career page] to join us as a Delivery Professional. Feel free to include your
                        resume or any
                        relevant experience you have in the delivery or logistics field.
                    </p>

                    <p class="content">
                        Start a rewarding career in parcel delivery with us and be an essential part of our
                        commitment
                        to
                        efficient and reliable logistics!
                    </p>
                </td>
            </tr>
        </table>
        <table border="1" cellspacing="0" width="100%">
            <tr>
                <td>
                    <p align="center">
                        <img src="../../asset/clogo.png" alt="" height="75px"><br>
                        Company Name <br>
                        Corporate Address <br>
                        Available Pick up address. <br>
                        FAQ <br>
                    </p>

                </td>
                <td align="center">
                    <a href="">Terms And Condition</a> ||
                    <a href="">Company Policy</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>