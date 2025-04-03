<?php

class User
{
    public static function login($username, $password)
    {
        Session::start();
        $conn = Database::getConnect();
        
        $sql = "SELECT `id`, `password` FROM `auth` WHERE `username` = '$username' OR `email` = '$username'";
        $res = $conn->query($sql);
        if ($res->num_rows === 1)
        {
            $row = $res->fetch_assoc();
            if ($password === $row['password'])
            {
                Session::regenerate();
                Session::set('login_user', $username);
                header("Location: welcome.php");
                exit;
            }
        }

        return "Invalid Username and Password";
    }

    // public static function setCategory($cate)
    // {
    //     $conn = Database::getConnect();
        
    //     // Insert data into database
    //     $sql = "INSERT INTO `cate` (`category`, `created_at`)
    //             VALUES ('$cate', NOW())";

    //     if ($conn->query($sql)) {
    //         header("Location: viewCate.php");
    //         exit;
    //     } else {
    //         return "Error occurred while saving data: " . $conn->error;
    //     }
    // }
    // public static function updateCategory($getID, $cate, $conn)
    // {
    //     // Update database without changing the image
    //     $sql = "UPDATE `cate` SET `category` = '$cate', `created_at` = NOW() WHERE `id` = '$getID'";

    //     if ($conn->query($sql)) {
    //         header("Location: viewCate.php");
    //         exit;
    //     } else {
    //         return "Error occurred while saving data: " . $conn->error;
    //     }
    // }

    public static function setProducts($title, $img, $price, $sub, $cate)
    {
        $conn = Database::getConnect();
        if ($cate === 'ie') {
            $targetDir = "../uploads/Products/ie/"; // Define your upload directory
        } else {
            $targetDir = "../uploads/Products/"; // Define your upload directory
        }
        
        if (!is_dir($targetDir)) {
            // Create directory with proper permissions
            mkdir($targetDir, 0777, true);
        }

        $allowImageTypes = ['jpg', 'png', 'jpeg', 'gif'];

        // Required file uploads
        $requiredFiles = [
            'img' => $_FILES["img"]
        ];

        foreach ($requiredFiles as $key => $file) {
            $fileName = basename($file["name"]);
            $filePath = $targetDir . $fileName;
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            
            if (!in_array($fileType, $allowImageTypes) || !move_uploaded_file($file["tmp_name"], $filePath)) {
                return "Error uploading required file: $key.";
            }
            $$key = $filePath; // Dynamically assign variable with directory
        }

        // Insert data into database
        $sql = "INSERT INTO `products` (`img`, `title`, `price`, `subprice`, `category`, `created_at`) 
                VALUES ('$filePath', '$title', '$price', '$sub', '$cate', NOW())";

        if ($conn->query($sql)) {
            header("Location: viewIE.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $conn->error;
        }
    }
    public static function updateProducts($title, $img, $price, $sub, $cate, $getID, $conn)
    {
        if ($cate === 'ie') {
            $targetDir = "../uploads/Products/ie/"; // Define your upload directory
        } else {
            $targetDir = "../uploads/Products/"; // Define your upload directory
        }
        
        if (!is_dir($targetDir)) {
            // Create directory with proper permissions
            mkdir($targetDir, 0777, true);
        }

        $qry = $conn->query("SELECT * FROM `products` WHERE `id` = '$getID'")->fetch_array();

        $allowImageTypes = ['jpg', 'png', 'jpeg', 'gif'];

        // Check if a file was uploaded
        if (!empty($_FILES["img"]["name"])) {
            $fileName = basename($_FILES["img"]["name"]);
            $filePath = $targetDir . $fileName;
            $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            // Validate file type
            if (!in_array($fileType, $allowImageTypes)) {
                return "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
            }

            // Validate file size (e.g., 5MB max)
            if ($_FILES["img"]["size"] > 5 * 1024 * 1024) {
                return "Error: File size exceeds the maximum limit of 5MB.";
            }

            // Move uploaded file to target directory
            if (!move_uploaded_file($_FILES["img"]["tmp_name"], $filePath)) {
                return "Error: Failed to upload file.";
            }

            // Delete old image if it exists
            if (!empty($qry['img']) && file_exists($qry['img'])) {
                unlink($qry['img']);
            }

            // Update database with new image path
            $sql = "UPDATE `products` SET `img` = ?, `title` = ?, `price` = ?, `subprice` = ?, `category` = ?, `created_at` = NOW() WHERE `id` = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssi", $filePath, $title, $price, $sub, $cate, $getID);
        } else {
            // Update database without changing the image
            $sql = "UPDATE `products` SET `title` = ?, `price` = ?, `subprice` = ?, `category` = ?, `created_at` = NOW() WHERE `id` = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssi", $title, $price, $sub, $cate, $getID);
        }

        // Execute the statement
        if ($stmt->execute()) {
            header("Location: viewIE.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }

}

?>