<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Properties</title>
    
    <style>
        tr, td {
            border: 1px none solid;
            padding: 10px;
        }
        .conent {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .house-container {
            display: flex;
            gap: 4px;
        }
        .house-container img {
            width: 300px;
            height: 160px;
        }
        form {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        input[type="search"] {
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include 'header.php' ?>
<?php include 'connection.php';

if (isset($_POST['search'])) {
    $searchTerm = $_POST['searchTerm'];
    $sql = "SELECT * FROM landlord 
        WHERE (location LIKE '%$searchTerm%' 
        OR price LIKE '%$searchTerm%' 
        OR propert LIKE '%$searchTerm%') 
        AND status = 1";
} else {
    $sql = "SELECT * FROM landlord WHERE status = 1";
}
$result = $conn->query($sql);

?>

<body style="background-color: rgb(245, 236, 236); color: blueviolet; overflow-x: hidden;">
    <center>
        <p>Display Properties</p>
        <form method="post" action="">
            <input type="search" placeholder="Search place" name="searchTerm" id="searchBox">
            <button type="submit" name="search"><i class="fa fa-search"></i></button>
        </form>
    </center>

    <div class="conent">
        <?php
        while ($row = $result->fetch_assoc()) {
            $articleID = $row['landid'];
            $imagePath = $row['file'];
            $title = $row['location'];
            $price = $row['price'];

            echo '<div class="house-container">';
            echo '<a href="details.php?id=' . $articleID . '">';
            echo '<img src="' . $imagePath . '" alt="Your Image" width="300" height="auto">';
            echo '<h2>' . $title . '</h2>';
            echo '<p>' . 'Price: ' . $price . '</p>';
            echo '</a>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>



            
<!-- <strong>nyarutarama aprtment</strong>
            <strong>for rent {5000000rwf}/month</strong>
        </td>
        <td>
           
        <img src="<?php echo $imagePath; ?>" alt="Your Image" width="300" height="auto">

            
<strong>nyabugogo curier(naruveje)</strong>
            <strong>for rent {200000-150000}/month</strong>
        </td>
        <td>
            
<img src="/collective_new_home_mode/exist_zone.jpg" alt="" width="300px" height="200px">
            
<strong>Gitega for rent</strong>
            <strong>{60000-35000}</strong>
        </td>
        <td  class="conent">
            
<img src="/collective_new_home_mode/show.png" alt="" width="300px" height="200px">
            
<strong>nyamirambo ville kuranyuma</strong>
            <strong>for rent {2500000-150000} for family</strong>
        
</td>
    </tr>
    <tr>
        <td colspan="4">RENT FOR COMMERCIAL</td>
        
    </tr>
    <tr>
        <td>
            
<img src="/collective_new_home_mode/mordenmarket.jpeg" alt="" width="300px" height="200px">
            
<strong>nyarunge mordenmarket</strong>
            <strong>{800000-400000rwf}/month</strong>
        </td>
        <td>
            
<img src="/collective_new_home_mode/trading house.jpg" alt="" width="300px" height="200px">
            
<strong>kicukiro center suitable shop</strong>
            <strong>for rent {300000-200000}</strong>
        </td>
        <td>
            
<img src="/collective_new_home_mode/nyarugenge.jpg" alt="" width="300px" height="200px">
            
<strong>nyarugenge room in mordenmarket</strong>
            <strong>for rent {1000000-400000}/month</strong>
        </td>
        <td  class="conent">
            
<img src="/collective_new_home_mode/isoko.jpeg" alt="" width="300px" height="200px">
            
<strong>nyanza kigali bus packer</strong>
            <strong>rent {200000-100000}rwf /month</strong>
        </td>
    </tr>
    <tr>
        <td></td>
       
 <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4">live for family</td>
        
    </tr>
    <tr>
        <td>
            
<img src="/collective_new_home_mode/inzu.webp" alt="" width="300px" height="200px">
           
 <strong>jali house</strong>
            <strong>for rent (2000000-2500000} /month</strong>
        </td>
        <td>
           
 <img src="/collective_new_home_mode/gutura_mukizung.webp" alt="" width="300px" height="200px">
            
<strong>mukizungu musanze</strong>
            <strong>for rent{300000-200000}rwf/ month</strong>
        
        </td>
        <td>
            
<img src="/collective_new_home_mode/gutura_bugesera.jpeg" alt="" width="300px" height="200px">
            
<STROng>Bugesera zone</STROng>
            
<strong>rent {2500000-200000}/month</strong>
        </td>
        <td  class="conent">
            
<img src="/collective_new_home_mode/homeforrich.jpg" alt="" width="300px" height="200px">
            
<strong>kiyovu live family house</strong>
            <strong>rent{900000-7500000}/month</strong>
        </td>
    </tr>
    <tr>
        
<td colspan="4"><strong>slams zone for rent</strong></td>
        
    </tr>
    <tr>
        <td> 
            
<img src="/collective_new_home_mode/gitega_slams_zone.jpeg" alt="" width="300px" height="200px">
            
<strong>gitega_slams_zone</strong>
            <strong>rent {50000-30000}/month</strong>
        </td>
        <td>
            
<img src="/collective_new_home_mode/kimihurura_slam_zone.jpg" alt="" width="300px" height="200px">
            
<strong>kimihurura_slam_zone</strong>
            <strong>{60000-35000}/month</strong>
        </td>
        <td>
            
<img src="/collective_new_home_mode/nyabisundu_slam_zone.webp" alt="" width="300px" height="200px">
            
<strong>nyabisundu_slam_zone</strong>
            <strong>rent {120000-500000}</strong>
        </td>
        <td  class="conent">
            
<img src="/collective_new_home_mode/gitega_zone.jpg" alt="" width="300px" height="200px">
            
<strong>dobandi_zone</strong>
            <strong>rent {50000-20000}/month</strong>
        </td>
    </tr>
    <tr>
        
<td colspan="4"><strong>hotel</strong></td>
    </tr>
    <tr>
        <td>
            
<img src="/collective_new_home_mode/umubano_hotel.jpeg" alt="" width="300px" height="200px">
            
<strong>umubano_hotel</strong>
            <strong>{100000-400000}/day</strong>
        </td>
        <td>
            
<img src="/collective_new_home_mode/gakenke-kivuruga.jpg" alt="" width="300px" height="200px">
           
 <strong>kiyovu_hotel</strong>
            <strong>{200000-400000}/day</strong>
        </td>
        <td>
            
<img src="/collective_new_home_mode/hotel.jpg" alt="" width="300px" height="200px">
            
<strong>kigali M hotel</strong>
            <strong>{2500000-400000}/day</strong>
        </td>
        <td  class="conent"> 
<img src="/collective_new_home_mode/muhanga_hotel.jpg" alt="" width="300px" height="200px">
         
<strong>muhanga_sprandind_hotel</strong>
         <strong>{100000-2500000}/day</strong>
        </td> -->
    </tr>
 </table>
 <?php include "tail.php" ?>

</body>
</html>
<script>
    alert('hello world!')
</script>