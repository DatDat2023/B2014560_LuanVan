<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .contact-header {
            text-align: center;
            padding: 30px 20px;
            background-color: #CED8F6;
        }

        .contact-header h1 {
            font-size: 2.5em;
            color: #0B243B;
        }

        .contact-container {
            max-width: 1100px;
            margin: 20px auto;
            padding: 20px;
        }

        .contact-info, .contact-form {
            margin-bottom: 30px;
        }

        .contact-info h2, .contact-form h2 {
            font-size: 1.8em;
            margin-bottom: 15px;
            color: #0B243B;
        }

        .contact-info ul {
            list-style: none;
            padding: 0;
        }

        .contact-info ul li {
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        .contact-info ul li a {
            color: #0B243B;
            text-decoration: none;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
        }

        .contact-form input, .contact-form textarea {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            background-color: #0B243B;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #073763;
        }

        .contact-map iframe {
            width: 100%;
            height: 350px;
            border: none;
        }
    </style>
</head>
<body>

    <header class="contact-header">
        <h1>Liên Hệ Với Chúng Tôi</h1>
    </header>

    <main>
        <div class="contact-container">
            <!-- Thông tin liên hệ -->
            <div class="contact-info">
                <h2>Thông Tin Liên Hệ</h2>
                <ul>
                    <li><strong>Địa chỉ:</strong> Khu II, Đ. 3 Tháng 2, Xuân Khánh, Ninh Kiều, Cần Thơ</li>
                    <li><strong>Email:</strong> <a href="mailto:info@tdbook.com">tdbook2024@gmail.com</a></li>
                    <li><strong>Điện thoại:</strong> <a href="tel:+84123456789">+84 123 456 789</a></li>
                    <li><strong>Facebook:</strong> <a href="https://facebook.com/tdbook" target="_blank">facebook.com/tdbook</a></li>
                </ul>
            </div>

            <!-- Form liên hệ -->
            <div class="contact-form">
                <h2>Gửi Thông Điệp Cho Chúng Tôi</h2>
                <form action="process_contact.php" method="POST">
                    <input type="text" name="name" placeholder="Tên của bạn" required>
                    <input type="email" name="email" placeholder="Email của bạn" required>
                    <textarea name="message" rows="5" placeholder="Nội dung tin nhắn" required></textarea>
                    <button type="submit">Gửi Thông Điệp</button>
                </form>
            </div>
    </main>
    
</body>
        

        