<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>renter</title>
    <style>
        body{
          
            background-image: url(/collective_new_home_modes/welcome.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        td,tr{
            border: 1px none solid;
            padding:8px;
            
        }
        a{
            text-decoration: none;
            font-size: 40px;
        }
    </style>
</head>
<?php include 'header.php' ?>
<body>
   
    <img src="/collective_new_home_mode/welcome.jpg" alt="wishes new home" width="100%" height="500px"   margin-right= "300px" margin-left= "300px">
    <table style="height: 300px; width: 200px; padding:8px ; background-color: black; color: rgb(236, 236, 99);   margin-right: 300px; margin-left: 300px">
        <tr>
         <td colspan="2"><a href="available2.php">renter for live</a></td>
            <td><a href="available2.php">for activity</a></td>
            <td><a href="available2.php">advanced</a></td>
        </tr>
        <tr>
            <td> properties<br>
                <select name="" id="">
                
                    <option value="">Student Housing</option>
                    <option value="">Shared Housing</option>
                    <option value="">Studio ApartmentsLofts</option>
                    <option value="">for commercial</option>
                    <option value="">for short time</option>
                    <option value="">islams</option>
                </select>
            </td>
            <td>address<br>
                <select name="" id="">
                    <option value="">musanze</option>
                    <option value="">kigali</option>
                    <option value="">rubavu</option>
                    <option value=""><meta>muhanga</option>
                    <option value="">byumba</option>              
                 </select>
            </td>
            <td>
                price range per month<br>
                <select name="" id="">
                    <option value="">15000rwf-40000rwf</option>
                    <option value="">40000rwf-80000rwf</option>
                    <option value="">80000rwf-120000rwf</option>
                    <option value="">120000rwf-200000rwf</option>
                    <option value="">200000rwf-400000rwf</option>
                    <option value="">400000rwf-700000rwf</option>
                    <option value="">700000rwf and above</option>
                </select>
            </td>
            <td>specify location<br>
                <input type="text" value="like nyamirambo">
            </td>
            
        </tr>
        <tr>
            <td>specify properties<br>
                <input type="text" value="example: 1 bathroom and 2 toil inside">

            </td>
            <td></td>
            <td></td>
            <td>
                <input type="search" name="" id="search" value="search">
            </td>
        </tr>
    </table>
    <strong>properties</strong>
    <table style="border: 1px solid black;">
        
        <tr>
            <td><img src="/collective_new_home_mode/trading house.jpg" alt="" width="300px" height="200px">rent for trading shop</td>
            <td><img src="/collective_new_home_mode/show.png" alt="" width="300px" height="200px">in deffent zone we have live house</td>
            <td><img src="/collective_new_home_mode/hotel.jpg" alt="" width="300px" height="200px">room in hotel</td>
            <td><img src="/collective_new_home_mode/inzu.webp" alt="" width="300px" height="200px">family suitable house</td>
        </tr>
        <tr>
            <td><img src="/collective_new_home_mode/isoko.jpeg" alt=""  width="300px" height="200px">small market parts</td>
            <td><img src="/collective_new_home_mode/exist_zone.jpg" alt=""  width="300px" height="200px">islams zone</td>
            <td><img src="/collective_new_home_mode/apartment.png" alt=""  width="300px" height="200px">apartment</td>
            <td><img src="/collective_new_home_mode/nyarugenge.jpg" alt=""  width="300px" height="200px">room in big modern market</td>
        </tr>
    </table>
    <?php include "tail.php" ?>
    
</body>
</html>