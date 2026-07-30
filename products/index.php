<?php
// products.php
$products = [
    [
        'id' => 1,
        'name' => 'Digital Blood Pressure Monitor',
        'price' => '₹ 1400',
        'image' => '../assets/images/products/Digital Blood Pressure Monitor.webp',
        'whatsapp_number' => '+919776001963',
        'description' => 'Brand - Dr Morepen',
        'slug' => 'digital-blood-pressure-monitor'
    ],
    [
        'id' => 2,
        'name' => 'Premium Pulse Oximeter',
        'price' => '₹ 1345',
        'image' => '../assets/images/products/Premium Pulse Oximeter.webp',
        'whatsapp_number' => '+919776001963',
        'description' => '-',
        'slug' => 'premium-pulse-oximeter'
    ],
    [
        'id' => 3,
        'name' => 'Infrared Thermometer',
        'price' => '₹ 1995',
        'image' => '../assets/images/products/Infrared Thermometer.webp',
        'whatsapp_number' => '+919776001963',
        'description' => 'Brand- AccuSure',
        'slug' => 'infrared-thermometer'
    ],
    [
        'id' => 4,
        'name' => 'Nebulizer Machine',
        'price' => '₹ 1790',
        'image' => '../assets/images/products/Nebulizer Machine.webp',
        'whatsapp_number' => '+919776001963',
        'description' => 'Brand- Samson',
        'slug' => 'nebulizer-machine'
    ],
    [
        'id' => 5,
        'name' => 'Glucose One Machine',
        'price' => '₹ 665',
        'image' => '../assets/images/products/Glucose Monitoring System.webp',
        'whatsapp_number' => '+919776001963',
        'description' => 'Brand - Dr Morepen',
        'slug' => 'glucose-one-machine'
    ],
    [
        'id' => 6,
        'name' => 'Wheelchair',
        'price' => '₹ 10800',
        'image' => '../assets/images/products/Wheelchair.webp',
        'whatsapp_number' => '+919776001963',
        'description' => 'Brand - Adini',
        'slug' => 'wheelchair'
    ],
    [
        'id' => 7,
        'name' => 'Digital Thermometer',
        'price' => '₹ 198',
        'image' => '../assets/images/products/Digital Thermometer.webp',
        'whatsapp_number' => '+919776001963',
        'description' => '-',
        'slug' => 'digital-thermometer'
    ],
    [
        'id' => 8,
        'name' => 'Oval Thermometer',
        'price' => '₹ 199',
        'image' => '../assets/images/products/Oval Thermometer.webp',
        'whatsapp_number' => '+919776001963',
        'description' => '-',
        'slug' => 'oval-thermometer'
    ],
    [
        'id' => 9,
        'name' => 'Professional Stethoscope',
        'price' => '₹ 665',
        'image' => '../assets/images/products/Professional Stethoscope.webp',
        'whatsapp_number' => '+919776001963',
        'description' => 'Brand - Dr Morepen',
        'slug' => 'professional-stethoscope'
    ],
    [
        'id' => 10,
        'name' => 'Air Mattress',
        'price' => '₹ 5990',
        'image' => '../assets/images/products/Air Mattress.webp',
        'whatsapp_number' => '+919776001963',
        'description' => 'Brand- Samson',
        'slug' => 'air-mattress'
    ],
    [
        'id' => 11,
        'name' => 'BP Monitor',
        'price' => '₹ 1400',
        'image' => '../assets/images/products/ECG Machine.webp',
        'whatsapp_number' => '+919776001963',
        'description' => '-',
        'slug' => 'bp-monitor'
    ]

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Equipment Catalog</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <?php include '../header-links.php';?>
<style>
    body {
        background-color: #f8f9fa;
        color: #2d3436;
    }

    .header {
        margin-bottom: 2rem;
        border-bottom: 1px solid #e9ecef;
        padding-bottom: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-content {
        max-width: 600px;
    }

    h1 {
        font-size: 1.8rem;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 0.5rem;
    }

    .header-subtitle {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.5;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.25rem;
    }

    .product-card {
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 6px;
        overflow: hidden;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        position: relative;
    }

    .product-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .product-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .product-link:hover .product-name {
        color: #468dcd;
    }

    .product-image {
        width: 100%;
        height: auto;
        aspect-ratio: 1 / 1; /* Maintain square ratio */
        object-fit: cover;
        border-bottom: 1px solid #e9ecef;
        background-color: #f8f9fa;
        display: block;
    }

    .product-info {
        padding: 1rem;
    }

    .product-name {
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 0.5rem;
        color: #2d3436;
        line-height: 1.3;
        transition: color 0.2s;
    }

    .product-description {
        font-size: 0.85rem;
        color: #666;
        margin-bottom: 0.75rem;
        line-height: 1.4;
    }

    .product-price {
        color: #2d3436;
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 0.75rem;
    }

    .actions {
        display: flex;
        gap: 0.5rem;
        margin-top: 0.5rem;
    }

    .whatsapp-button {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        background-color: #25D366;
        color: white;
        padding: 0.6rem 1rem;
        border-radius: 4px;
        text-decoration: none;
        font-weight: 500;
        font-size: 0.9rem;
        transition: background-color 0.2s ease;
        width: 100%;
    }

    .whatsapp-button:hover {
        background-color: #22c55e;
        color: white;
    }

    .whatsapp-button i {
        font-size: 1.1rem;
    }

    .badge {
        position: absolute;
        top: 0.75rem;
        right: 0.75rem;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 0.25rem 0.5rem;
        border-radius: 3px;
        font-size: 0.75rem;
        font-weight: 500;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .products-grid {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }

        .product-image {
            height: auto; /* Let the image adapt to the width */
        }

        h1 {
            font-size: 1.5rem;
        }

        .header-subtitle {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 480px) {
        .container{
            padding-top: 50px;
        }
        .products-grid {
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
        }

        .product-image {
            height: auto; /* Let the image adapt to the width */
        }

        .product-info {
            padding: 0.75rem;
        }

        .product-name {
            font-size: 0.9rem;
        }

        .product-description {
            font-size: 0.8rem;
        }

        .whatsapp-button {
            padding: 0.5rem 0.75rem;
            font-size: 0.8rem;
        }
    }
</style>

</head>
<body>
        <?php include '../header.php';?>
    <div class="container mt-5 mb-5">
        <div class="header">
            <div class="header-content">
                <h1>Medical Equipment Store</h1>
                <p class="header-subtitle">High-quality healthcare equipment for hospitals, clinics, and home care. Contact us via WhatsApp for quotes and availability.</p>
            </div>
        </div>
        <div class="products-grid">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <a href="/products/<?php echo $product['slug']; ?>/" class="product-link">
                        <img 
                            src="<?php echo htmlspecialchars($product['image']); ?>" 
                            alt="<?php echo htmlspecialchars($product['name']); ?>"
                            class="product-image"
                            onerror="this.src='https://via.placeholder.com/300x200?text=Product+Image'"
                        >
                        <div class="product-info">
                            <h2 class="product-name"><?php echo htmlspecialchars($product['name']); ?></h2>
                            <p class="product-description"><?php echo htmlspecialchars($product['description']); ?></p>
                            <div class="product-price"><?php echo htmlspecialchars($product['price']); ?></div>
                        </div>
                    </a>
                    <div class="product-info" style="padding-top: 0;">
                        <div class="actions">
                            <a 
                                href="https://wa.me/<?php echo $product['whatsapp_number']; ?>?text=Hi, I'm interested in the <?php echo urlencode($product['name']); ?>. Is it available? Please provide more details about price and specifications." 
                                class="whatsapp-button" 
                                target="_blank"
                            >
                                <i class="fab fa-whatsapp"></i>
                                Get Quote
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
        <?php include '../footer.php';?>
</body>
</html>