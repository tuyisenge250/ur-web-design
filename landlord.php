<!-- your-form-page.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landlord</title>
    <!-- Your styles and linked CSS file -->
    <style>
         .media{
        @media(min-width:800px){
            body{
            padding:0%;
            background-color:rgb(75, 75, 78); 
        }
        .h1{
            color:brown;
            margin-right:20%;
            margin-left:20%;
        }
        p{
            "font-size:20px;
            margin-right:20%;
            margin-left:20%;
        }
        div{
            background-color: rgb(29, 20, 9); color:aqua;margin-right:20%;margin-left:20%;
        }
        h{
            width: 100%;
        }
        .paragraph-container {
            padding: 0%;
            background-color: white;
            color: black;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0; /* Remove default table margin */
        }
        table, th, td {
            border: 1px solid #ddd;
        }
       
            
        }
        @media(max-width:700px){
            body{
                background-color: rgb(10, 57, 41);
                padding: none;
            }
            p{
                padding: none;
            }
            h1{
                padding: none;
            }
            div{
                background-color: black;
                color:white;
            }
        }
    }  
    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="overflow-x:hidden">
    <div class="container">
        <div class="top"><?php include 'header.php'?></div>
        <div class="bottom">
            <div class="left">
                
            </div><div class="header"><strong>MY Dashboard</strong></div>
        <div class="photo"><border style="border-radius: 1px;background-origin: padding-box;border-spacing: 10px;"><img src="/collective_new_home_mode/benjaminuser.jpeg" alt="user" width="100px" height="100px" ></border></div>
        <div class="names">hello</div>
        <div class="age"></div>
        <div class="numberyouattended"></div>
            <div class="right">
                <h1>Welcome! This is the home of business with us</h1>
                <p >we are very happy to be with you on this is site. to built maybe is difficult for anyone<br>
        and publishing your business and finding client it's more difficult but nowaday you have in <br>
        your hands solution.<strong> as new_home fill under form promise your information keep secure on this site.</strong><br>
    </p>
    
        <p>fill the following form</p>
                <form style="font-size:18px" action="landlord.php" method="post"  enctype="multipart/form-data">
                <label for="name">fill your full name</label><br>
            <input type="text" id="name" name="name" placeholder="your name is" required><br>
            <label for="address">location</label><br>
            <input type="text" id="address" name="address" placeholder="location" required><br>
            <label for="kind">choses house you want share</label><br>
            <input type="radio"  value="apartment" name="kind">
            <label>apartment</label><br>
            <input type="radio"  name="kind" value="single-family" id="ap">
            <label for="ap">life for family</label><br>
            <input type="radio"  name="kind" value="townhouse" id="si">
            <label for="si">hotel</label><br>
            <input type="radio"  name="kind" value="condo">
            <label>rent_commerical</label><br>
            <input type="radio"  name="kind" value="multiplex">
            <label>slams zone</label><br>
            <label for="pricing">price:</label><br>
            <input type="number" name="price" required><br>
            <label>one who need to be your renter</label><br>
            <select name="propert" required>
                <option>select properties of renter</option>
                <option>one person</option>
                <option>two person</option>
                <option>over 2 or family</option>
                <option>for office</option>
                <option>for  trading</option>
                <option>for short time</option>
                <option>for live long time over one month</option>
            </select><br>
            <label>enter owner use email</label><br>
            <input type="email" placeholder="example@gmail.com" name="email" required><br>
            <label>enter your contact</label><br>
            <input type="tel" placeholder="phone" placeholder="123-456-678-345"  name="phone" required><br>
            <label>upload some picture</label><br>
            <input type="file" value="picture" name="picture" accept="image/*" required><br>
            <label for="description"><strong>Description:</strong></label><br>
        <textarea id="description" rows="6" cols="50" name="character"></textarea><br>
        <label for="description"><strong>more about contract:</strong></label><br>
        <textarea id="displayArea" rows="9" cols="50" name="contract" ></textarea><br>
                    <label for="agreement">
                        <a href="agreement.php" target="_blank">Read Terms and Conditions</a>
                    </label>
                    <input type="checkbox" name="agree" required>
                    <br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <?php include "tail.php" ?>
</body>
</html>
