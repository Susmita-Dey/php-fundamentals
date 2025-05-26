<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload and Display Image</title>
</head>
<body>
    <h1>Upload and Display Image</h1>
    <!-- HTML Form for file upload -->
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="file">Choose an image to upload:</label>
        <input type="file" name="image" id="file" accept="image/*" required>
        <button type="submit" name="submit">Upload</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Check if the file was uploaded without errors
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $uploadDir = "uploads/"; // Directory to store uploaded files
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true); // Create directory if it doesn't exist
            }

            $fileName = basename($_FILES['image']['name']);
            $uploadFile = $uploadDir . $fileName;

            // Move the uploaded file to the uploads directory
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                echo "<p>Image uploaded successfully!</p>";
                echo "<img src='$uploadFile' alt='Uploaded Image' style='max-width: 300px; margin-top: 20px;'>";
            } else {
                echo "<p>Failed to upload image. Please try again.</p>";
            }
        } else {
            echo "<p>Error in file upload. Code: " . $_FILES['image']['error'] . "</p>";
        }
    }
    ?>
</body>
</html>
