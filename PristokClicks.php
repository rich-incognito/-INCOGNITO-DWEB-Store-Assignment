<!-- 
 INCOGNITO, Rich Cristoff C.
 WD - 201
 November 29, 2025
-->

<?php
    $Store_Name = "Pristok Clicks"; #Variable

    $Products = [ #Array
        [
            "Type" => "Membrane", 
            "Description" => "Most Affordable, For Basic Use", 
            "In stock" => 20,
            "Brands" => ["A4TECH", "Acer", "InPlay"]
        ],
        [
            "Type" => "Mechanical", 
            "Description" => "Flexible Price, For Enthusiasts", 
            "In stock" => 28,
            "Brands" => ["Redragon", "Razer", "Ducky"]
        ],
        [
            "Type" => "Magnetic", 
            "Description" => "Costly, For High Level Gaming", 
            "In stock" => "7", #Type Juggling
            "Brands" => ["Wooting", "MChose", "Keychron"]
        ],
    ];

    $Total_Products = #Operator
        $Products[0]["In stock"] +
        $Products[1]["In stock"] +
        $Products[2]["In stock"]; #Type Juggling
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $Store_Name; ?></title>
    </head>

    <style>
        body{
            background-image: url('https://res.cloudinary.com/kineticlabs/image/upload/q_auto/c_fit,w_1000/f_auto/v1/api-images/blog/05-10-23-how-does-a-mechanical-keyboard-pcb-work/layouts_gbny9e_tpghl5');
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode: darken;
            background-color: rgba(0,0,0,0.5);
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .header-bar{
            background-color: rgba(0,0,0,0.6);
            width: 100%; 
            padding: 20px 0;
            margin: 0; 
            text-align: center;
        }

        h1, h4 {
            margin: 5px 0;
        }

        .product-table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: rgba(0,0,0,0.5);
        }

        .product-table th, .product-table td {
            border: 1px solid #fff;
            padding: 10px;
            text-align: center;
            vertical-align: top;
        }

        .product-table th {
            background-color: #ff8800;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
            margin: 0;
            text-align: left;
        }

        .product-table td ul li {
            transition: color 0.3s; 
        }

        .product-table td ul li:hover {
            color: #ff8800; 
            cursor: pointer; 
        }
    </style>

    <body>
        <div class="header-bar">
            <h1 style="background: linear-gradient(90deg, #ff8800, #ffdd55); -webkit-background-clip: text; color: transparent;">
                <?=$Store_Name; ?> <!-- Shorthand for echo -->
            </h1>
            <h4 style="background: linear-gradient(90deg, #ff8800, #ffdd55); -webkit-background-clip: text; color: transparent;">
                Your All-in-One Keyboard Hub
            </h4>
        </div>

        <div>

        <div style="width: 80%; margin: 20px auto; text-align: center; font-size: 18px;">
            Total Products Available: <?php echo $Total_Products; ?>
        </div>

        <table class="product-table">
            <tr style="color: black;">
                <!-- Table Heading -->
                <th>Type</th>
                <th>Description</th>
                <th>Brands</th>
                <th>In Stock</th>
            </tr>

            <!-- Row 1 -->
            <tr>
                <td><?php echo $Products[0]['Type']; ?></td>
                <td><?php echo $Products[0]['Description']; ?></td>
                <td>
                    <ul>
                        <li><?php echo $Products[0]['Brands'][0]; ?></li>
                        <li><?php echo $Products[0]['Brands'][1]; ?></li>
                        <li><?php echo $Products[0]['Brands'][2]; ?></li>
                    </ul>
                </td>
                <td><?php echo $Products[0]['In stock']; ?></td>
            </tr>

            <!-- Row 2 -->
            <tr>
                <td><?php echo $Products[1]['Type']; ?></td>
                <td><?php echo $Products[1]['Description']; ?></td>
                <td>
                    <ul>
                        <li><?php echo $Products[1]['Brands'][0]; ?></li>
                        <li><?php echo $Products[1]['Brands'][1]; ?></li>
                        <li><?php echo $Products[1]['Brands'][2]; ?></li>
                    </ul>
                </td>
                <td><?php echo $Products[1]['In stock']; ?></td>
            </tr>

            <!-- Row 3 -->
            <tr>
                <td><?php echo $Products[2]['Type']; ?></td>
                <td><?php echo $Products[2]['Description']; ?></td>
                <td>
                    <ul>
                        <li><?php echo $Products[2]['Brands'][0]; ?></li>
                        <li><?php echo $Products[2]['Brands'][1]; ?></li>
                        <li><?php echo $Products[2]['Brands'][2]; ?></li>
                    </ul>
                </td>
                <td><?php echo $Products[2]['In stock']; ?></td>
            </tr>

        </table>
        </div>
    </body>
</html>
