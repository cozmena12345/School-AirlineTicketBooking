<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); 
require 'helpers/init_conn_db.php';                      
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Ticket Booking System - About</title>

    
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #bdc3c7;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            margin: 0;
            padding: 0;
        }

        .title {
            font-size: 40px;
            font-weight: bold;
            margin-top: 30px;
            color: white;
        }

        .container {
            width: 100%;
            max-width: 1300px;
            margin: 100px auto; /* Centering */
            padding: 5px;
            background: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .description {
            font-size: 14px; /* Reduced from 18px */
            line-height: 1.5;
            text-align: left;
        }
        .discription img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .container h1 {
            font-size: 15px; /* Adjusted size */
            font-weight: bold;
            margin: 10px 0;
        }

        .print-link {
            font-size: 50px; /* Adjust this value */
            font-weight: bold; /* Makes it stand out */
            color: white; /* Keeps the hyperlink color */
            text-decoration: none; /* Removes underline */
        }
        .print-link:hover {
            color: gold; /* Changes to gold on hover */
        }
.profile-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 40px;
    margin: 0 50px;
    margin-top: 80px;
    
}

/* Individual Profile Box */
.profile-box {
    flex: 1;
    min-width: 150px;
    max-width: 300px;
    background: #ffffff;
    border: 1px solid #ddd;
    padding: 15px;
    text-align: center;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
    border-radius: 10px;
}

.profile-box img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.profile-info h3 {
    margin: 5px 0;
    font-size: 16px;
}

.profile-info p {
    font-size: 14px;
    margin: 2px 0;
}

    </style>
</head>
<body>

     <!-- Hyperlink to Print PDF -->
    <a href="download.php" target="_blank" class="print-link"><img src="Airline Logo nobg.png" 
				height="105px" width="105px" alt="">Airline Booking System</a>

      <!-- Developer Profiles Container -->

        <div class="profile-container">
            <!-- Profile Box 1 -->
            <div class="profile-box">
                <img src="quiraps.jpg" alt="Developer 1">
                <div class="profile-info">
                    <h3><strong>Quirap, Kurt Lawrenze B.</strong></h3>
                    <p>BSCS2A - San Bartolome</p>
                    <p>quirap.kurtlawrenze.borja
                        @gmail.com</p>
                </div>
            </div>

            <!-- Profile Box 2 -->
            <div class="profile-box">
                <img src="pelegs.jpg" alt="Developer 2">
                <div class="profile-info">
                    <h3><strong>Pelegrino, Gerimel M.</strong></h3>
                    <p>BSCS2A - San Bartolome</p>
                    <p>pelegrino.gerimel.mateo@gmail.com</p>
                </div>
            </div>

            <!-- Profile Box 3 -->
            <div class="profile-box">
                <img src="jerald.jpg" alt="Developer 3">
                <div class="profile-info">
                    <h3><strong>Seña, Jerald U.</strong></h3>
                    <p>BSCS2A - San Bartolome</p>
                    <p>sena.jerald.uriarte@gmail.com</p>
                </div>
            </div>

            <!-- Profile Box 4 -->
            <div class="profile-box">
                <img src="siday.jpg" alt="Developer 4">
                <div class="profile-info">
                    <h3><strong>Sid-ay, Mark John Pacutan</strong></h3>
                    <p>BSCS2A - San Bartolome</p>
                    <p>siday.markjohn.pacutan@gmail.com</p>
                </div>
            </div>

            <!-- Profile Box 5 -->
            <div class="profile-box">
                <img src="adrian.jpg" alt="Developer 5">
                <div class="profile-info">
                    <h3><strong>Padilla, Adrian Buena-agua</strong></h3>
                    <p>BSCS2A - San Bartolome</p>
                    <p>padilla.adrian.buenaagua@gmail.com</p>
                </div>
            </div>
        </div>
    <div class="container">
        <p class="description">
            <h1>In partial fulfillment of the requirements in IM101 and PL101 courses.</h1>
            <h1>(Advanced Database Design and Programming Languages)</h1>
            <h1>Submitted to:</h1> 
            <img src="sir fpj.jpg" alt="Professor"> 
            <h1><strong>Dr. Manuel Luis C. Delos Santos</strong></h1> 
            <h1><strong>Professor</strong></h1>
        </p>
    </div>

    <footer class="mt-5">
        <em>
            <h5 class="text-light text-center p-0 brand mt-2">
                <img src="Airline Logo nobg.png" 
					height="70px" width="70px" alt="">				
			Airline Booking System</h5></em>
        <div class="text-light text-center">&copy; <?php echo date('Y')?> - Developed By Group 7<br><br></div>
    </footer>

</body>
</html>
