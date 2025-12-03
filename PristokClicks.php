<!-- 
 INCOGNITO, Rich Cristoff C.
 WD - 201
 December 3, 2025
-->

<?php
    $Store_Name = "Pristok Clicks"; #Variable (Assign1)

    $Products = [ #Array (Assign1)
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
            "In stock" => "7", #Type Juggling (Assign1)
            "Brands" => ["Wooting", "MChose", "Keychron"]
        ], 
        [
            "Type" => "Split", 
            "Description" => "Focused on Comfort and Ergonomics", 
            "In stock" => 0, 
            "Brands" => ["Coming Soon..."]
        ],
        [ //Add 3-5 more products in your table (Assign3)
            "Type" => "Wireless", 
            "Description" => "For the Cleanest Workstation Look", 
            "In stock" => 5, 
            "Brands" => ["Logitech", "ASUS", "Apple"]
        ],
        [
            "Type" => "Keypad", 
            "Description" => "Additional Keys", 
            "In stock" => 0, 
            "Brands" => ["Zeus", "Rapoo", "Keychron"]
        ],
        [
            "Type" => "Custom Build", 
            "Description" => "A Personalized Keyboard Just for You", 
            "In stock" => 0, 
            "Brands" => ["EPOMAKER", "ZUOYA", "KBDFans"] 
        ]
    ];

    $Total_Products = 0;
    foreach ($Products as $product){
        $Total_Products += $product["In stock"]; #Operators (Assign1)
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title><?php echo $Store_Name; ?></title> <!-- Normal Echo Method -->
    <style>
        body{
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: url('https://wallpapers.com/images/hd/cute-keyboard-background-i6t1wjla9tr6qal0.jpg');
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
            text-align: center;
        }

        h1, h4 {
            margin: 5px 0;
        }

        .main-content {
            flex: 1;
        }

        .product-table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: rgba(0,0,0,0.5);
            border-radius: 15px;
            overflow: hidden;
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

        .footer {
            background-color: #ff8800; 
            color: black;
            text-align: center;
            padding: 15px 0;
            font-weight: bold;
        }

        h3 {
            text-align: center;
            margin-top: 30px;
        }
        .redirect-btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #ff8800;
            color: black;
            font-weight: bold;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .redirect-btn:hover {
            background-color: #ffdd55;
            transform: scale(1.05);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="header-bar">
        <h1 style="background: linear-gradient(90deg, #ff8800, #ffdd55); -webkit-background-clip: text; color: transparent;"><?=$Store_Name; ?></h1> <!-- Shorthand Echo Method (Assign1) -->
        <h4 style="background: linear-gradient(90deg, #ff8800, #ffdd55); -webkit-background-clip: text; color: transparent;">Your All-in-One Keyboard Hub</h4>
    </div>

    <div class="main-content">
        <!-- Available Products -->
        <h3>Available Products</h3>
        <div style="width: 80%; margin: 20px auto; text-align: center; font-size: 18px;">
            Total Products Available: <?php echo $Total_Products; ?>
        </div>
        <table class="product-table">
            <tr style="color: black;">
                <th>Type</th>
                <th>Description</th>
                <th>Brands</th>
                <th>In Stock</th>
            </tr>
            <?php
                foreach($Products as $product) { #FOREACH Loop (Assign2)
                    if($product['In stock'] > 0) { #IF Conditional Statement (Assign2)
                        echo "<tr>";
                        echo "<td>" . $product['Type'] . "</td>";
                        echo "<td>" . $product['Description'] . "</td>";
                        echo "<td><ul>";
                        foreach($product['Brands'] as $brand) {
                            echo "<li>" . $brand . "</li>";
                        }
                        echo "</ul></td>";
                        echo "<td>" . $product['In stock'] . "</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>

        <!-- Out of Stock -->
        <h3>Out of Stock Items</h3>
        <table class="product-table">
            <tr style="color: black;">
                <th>Type</th>
                <th>Description</th>
                <th>Brands</th>
                <th>In Stock</th>
            </tr>
            <?php
                foreach($Products as $product) { #FOREACH Loop (Assign2)
                    if($product['In stock'] == 0) { #IF Conditional Statement (Assign2)
                        echo "<tr>";
                        echo "<td>" . $product['Type'] . "</td>";
                        echo "<td>" . $product['Description'] . "</td>";
                        echo "<td><ul>";
                        foreach($product['Brands'] as $brand) {
                            echo "<li>" . $brand . "</li>";
                        }
                        echo "</ul></td>";
                        echo "<td>" . $product['In stock'] . "</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </div>

    <div style="text-align: center; margin: 30px 0;">
        <a href="PristokClicks_Stock.php" class="redirect-btn">Go to Stock Monitor</a>
    </div>

    <?php include "footer.php"; ?> <!-- include (Assign2) -->
</body>
</html>
