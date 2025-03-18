<?php
// Enable error reporting for debugging (Remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$host = "db.gbcnpdiikkhyyyjqhfkw.supabase.co"; // Supabase Host
$port = "5432"; 
$dbname = "postgres"; 
$user = "postgres"; 
$password = "9860546619@Ss"; // Replace with your actual password

try {
    // Connect to PostgreSQL
    $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve values from POST request
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $subject = trim($_POST['subject'] ?? '');
        $country = trim($_POST['country'] ?? '');
        $interested_product = trim($_POST['interested_product'] ?? '');
        $message = trim($_POST['message'] ?? '');

        // Validate required fields
        if (empty($name) || empty($email) || empty($country) || empty($interested_product) || empty($message)) {
            echo "<script>alert('Error: All required fields must be filled.'); window.history.back();</script>";
            exit();
        }

        // Prepare SQL statement
        $sql = "INSERT INTO contact_messages (name, email, subject, country, interested_product, message)
                VALUES (:name, :email, :subject, :country, :interested_product, :message)";

        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':interested_product', $interested_product);
        $stmt->bindParam(':message', $message);

        // Execute query
        $stmt->execute();

        // Show success alert and redirect back to form
        echo "<script>alert('Form submitted successfully! Our company will reach out soon.'); window.location.href = 'p.php';</script>";
        exit();
    } else {
        echo "<script>alert('Form not submitted properly. Please try again.'); window.history.back();</script>";
        exit();
    }
} catch (PDOException $e) {
    echo "<script>alert('Database error: " . addslashes($e->getMessage()) . "'); window.history.back();</script>";
    exit();
}
?>
