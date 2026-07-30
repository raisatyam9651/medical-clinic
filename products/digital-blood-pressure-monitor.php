<?php
$productName = "Digital Blood Pressure Monitor";
$productPrice = "₹ 1400";
$productImage = "../assets/images/products/Digital Blood Pressure Monitor.webp";
$productDesc = "Brand - Dr Morepen";
$whatsappNumber = "+919776001963";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $productName; ?> - Bharat Medical Hall</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php include '../header-links.php';?>
    <style>
        body {
            background-color: #f8f9fa;
            color: #2d3436;
        }
        .product-details-container {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 0 45px -5px rgba(39, 71, 125, .14);
            padding: 40px;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .product-image-wrapper {
            border: 1px solid #e9ecef;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            background: #f8f9fa;
        }
        .product-image-wrapper img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .product-title {
            font-size: 32px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 15px;
        }
        .product-price {
            font-size: 28px;
            font-weight: 700;
            color: #468dcd;
            margin-bottom: 20px;
        }
        .product-description {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 30px;
            padding-bottom: 30px;
            border-bottom: 1px solid #e9ecef;
        }
        .whatsapp-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background-color: #25D366;
            color: white;
            padding: 15px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
            transition: all 0.3s ease;
        }
        .whatsapp-btn:hover {
            background-color: #22c55e;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(37, 211, 102, 0.2);
        }
        .whatsapp-btn i {
            font-size: 24px;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #468dcd;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }
        .back-link:hover {
            color: #357abd;
        }
        .back-link i {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <?php include '../header.php';?>
    
    <div class="container">
        <div class="product-details-container">
            <a href="/products.php" class="back-link"><i class="fas fa-arrow-left"></i> Back to Products</a>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="product-image-wrapper">
                        <img src="<?php echo htmlspecialchars($productImage); ?>" alt="<?php echo htmlspecialchars($productName); ?>" onerror="this.src='https://via.placeholder.com/600x600?text=Product+Image'">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h1 class="product-title"><?php echo htmlspecialchars($productName); ?></h1>
                    <div class="product-price"><?php echo htmlspecialchars($productPrice); ?></div>
                    <div class="product-description">
                        <?php if($productDesc != '-') echo "<p>" . htmlspecialchars($productDesc) . "</p>"; ?>
                        <p>High-quality medical equipment available at Bharat Medical Hall. For bulk orders or specific technical details, please contact our support team.</p>
                    </div>
                    <a href="https://wa.me/<?php echo $whatsappNumber; ?>?text=Hi, I'm interested in the <?php echo urlencode($productName); ?>. Is it available? Please provide more details about price and specifications." class="whatsapp-btn" target="_blank">
                        <i class="fab fa-whatsapp"></i> Order on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <?php include '../footer.php';?>
</body>
</html>
