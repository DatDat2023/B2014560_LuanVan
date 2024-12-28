<?php
// Kết nối cơ sở dữ liệu
$host = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'tdbook';

$conn = new mysqli($host, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy ID sản phẩm từ URL
if (isset($_GET['id'])) {
    $productId = intval($_GET['id']); // Chuyển thành số nguyên để an toàn
    $sql = "SELECT products.ID, products.Name, products.Price, products.Image, products.IDCategory, 
                   category.Name AS CategoryName 
            FROM products
            LEFT JOIN category ON products.IDCategory = category.ID
            WHERE products.ID = ? AND products.IsDelete = 0 AND products.IsShow = 0";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();

    // Kiểm tra sản phẩm
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        die("Sản phẩm không tồn tại hoặc đã bị xóa.");
    }
} else {
    die("Không tìm thấy sản phẩm.");
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Chi tiết sản phẩm - <?php echo htmlspecialchars($product['Name']); ?>">
    <meta name="keywords" content="sách, chi tiết sản phẩm, <?php echo htmlspecialchars($product['Name']); ?>">
    <title>Chi Tiết Sản Phẩm - <?php echo htmlspecialchars($product['Name']); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            background: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product-detail {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-image {
            flex: 1;
            text-align: center;
        }
        .product-image img {
            max-width: 100%;
            border-radius: 10px;
        }
        .product-info {
            flex: 2;
        }
        .product-info h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .product-info .price {
            font-size: 1.5rem;
            color: #e63946;
            margin-bottom: 15px;
        }
        .product-info .description {
            font-size: 1rem;
            color: #555;
            margin-bottom: 20px;
        }
        .product-info .category {
            font-size: 1rem;
            color: #777;
            margin-bottom: 20px;
        }
        .add-to-cart {
            display: inline-block;
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            transition: background 0.3s;
        }
        .add-to-cart:hover {
            background: #0056b3;
        }
        .back-to-home {
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            background: #ccc;
            padding: 10px 15px;
            border-radius: 5px;
            color: #333;
            font-size: 0.9rem;
        }
        .back-to-home:hover {
            background: #bbb;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product-detail">
            <!-- Hình ảnh sản phẩm -->
            <div class="product-image">
                <img src="<?php echo htmlspecialchars($product['Image']); ?>" alt="<?php echo htmlspecialchars($product['Name']); ?>">
            </div>

            <!-- Thông tin sản phẩm -->
            <div class="product-info">
                <h1><?php echo htmlspecialchars($product['Name']); ?></h1>
                <p class="price"><?php echo number_format($product['Price'], 0, ',', '.'); ?> VND</p>
                <p class="description">Mô tả sản phẩm: Đây là mô tả mẫu cho sản phẩm. Bạn có thể thêm chi tiết vào bảng sản phẩm.</p>
                <p class="category"><strong>Danh mục:</strong> <?php echo htmlspecialchars($product['CategoryName']); ?></p>
                <form action="cart.php" method="POST">
                    
                    <input type="hidden" name="product_id" value="<?php echo $product['ID']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $product['Name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $product['Price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $product['Image']; ?>">
        
                </form>
                <a href="index.php" class="back-to-home">Quay lại trang chủ</a>
            </div>
        </div>
    </div>
</body>
</html>
