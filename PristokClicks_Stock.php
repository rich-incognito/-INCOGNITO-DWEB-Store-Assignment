<?php
declare(strict_types=1); // #1

$Store_Name = "Pristok Clicks";


$Products = [ // #2
    "Membrane" => ["price" => 450.00, "stock" => 20],
    "Mechanical" => ["price" => 1200.00, "stock" => 28],
    "Magnetic" => ["price" => 3600.00, "stock" => 7],
    "Split" => ["price" => 7500, "stock" => 0],
    "Wireless" => ["price" => 1500.00, "stock" => 5],
    "Keypad" => ["price" => 900.00, "stock" => 0],
    "Custom Build" => ["price" => 10000.00, "stock" => 0]
];

 // #3
$tax_rate = 12; 


function get_reorder_message(int $stock): string { // #4
    return $stock < 10 ? "Yes" : "No"; // #5
}


function get_total_value(float $price, int $quantity): float { // $6 
    return $price * $quantity; // #7
}


function get_tax_due(float $price, int $quantity, int $tax = 0): float { // #8 
    return ($price * $quantity) * ($tax / 100); // #9 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $Store_Name ?> - Stock Monitor</title>
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
        table { 
            width:80%; 
            margin:20px auto; 
            border-collapse:collapse; 
        }
        th, td { 
            border:1px solid #fff; 
            padding:10px; 
            text-align:center; 
        }
        th { 
            background:#ff8800; 
            color:black; 
        }
        .tooltip { 
            position:relative; 
            cursor:pointer; 
        }
        .tooltip span { 
            visibility: hidden; 
            width: 120px; 
            background: black; 
            color: #fff; 
            text-align: center; 
            padding: 5px; 
            border-radius: 5px; 
            position: absolute; 
            z-index: 1; 
            bottom: 125%; 
            left: 50%; 
            transform: translateX(-50%);
            opacity: 0; 
            transition: 0.3s; 
        }
        .tooltip:hover span { 
            visibility: visible; 
            opacity: 1; 
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

        .footer {
            background-color: #ff8800; 
            color: black;
            text-align: center;
            padding: 15px 0;
            font-weight: bold;
        }

        .main-content{
            flex: 1;
        }
    </style>
</head>
<body>

    <h1 style="text-align:center; color:#ff8800;"><?= $Store_Name ?> - Stocks Monitor</h1>

    <div class="main-content">
    <table>
        <tr>
            <th>Product</th>
            <th>Price (Php)</th>
            <th>Stock Level</th>
            <th>Reorder?</th>
            <th>Total Value (Php)</th>
            <th>Tax Due (12%)</th>
        </tr>

        <?php foreach($Products as $product_name => $data) { ?> <!-- #10 -->
        <tr>
            <td><?= $product_name ?></td> <!-- #11 -->
            <td><?="₱" . number_format($data['price'], 2) ?></td>
            <td class="tooltip">
                <?= $data['stock'] ?> <!-- #12 -->
                <span><?= $data['stock'] > 0 ? "In Stock: ".$data['stock'] : "Out of Stock!" ?></span>
            </td>
            <td><?= get_reorder_message($data['stock']) ?></td> <!-- #13 -->
            <td><?="₱" . number_format(get_total_value($data['price'], $data['stock']), 2) ?></td> <!-- #14 -->
            <td><?="₱" . number_format(get_tax_due($data['price'], $data['stock'], $tax_rate), 2) ?></td> <!-- #15 -->
        </tr>
        <?php } ?> <!-- #16 -->

    </table>
    <div style="text-align:center; margin-top: 30px;">
    <a href="PristokClicks.php" class="redirect-btn">Back to Main Page</a>
    </div>
        </div>

<?php include "footer.php"; ?>

</body>
</html>
