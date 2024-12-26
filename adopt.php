<?php
// Include the database connection file
include('connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and escape form data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $city = $conn->real_escape_string($_POST['city']);
    $message = $conn->real_escape_string($_POST['message']);

    // File upload handling
    $target_dir = "uploads/"; // Ensure this directory exists and is writable
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true); // Create directory if it doesn't exist
    }
    
    $file_name = basename($_FILES["document"]["name"]);
    $target_file = $target_dir . uniqid() . "_" . $file_name; // Avoid duplicate file names
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validate file type
    if (in_array($file_type, ['jpg', 'jpeg', 'png', 'pdf'])) {
        if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
            // Insert into the database
            $sql = "INSERT INTO adopt (name, email, phone, city, message, document_path) 
                    VALUES ('$name', '$email', '$phone', '$city', '$message', '$target_file')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Your form has been submitted successfully!');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<script>alert('Failed to upload file. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Invalid file type. Only JPG, JPEG, PNG, and PDF files are allowed.');</script>";
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" class="sm">
  <title>VEDA</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="logo.jpg" type="image/icon type">
  <body id="about" class="sm">
  <header class="l-header">
      <nav class="nav bd-grid">
          <div>
              <a href="index.html" class="nav__logo">VEDA</a>
          </div>

          <div class="nav__menu" id="nav-menu">
              <ul class="nav__list">
                  <li class="nav__item"><a href="index.html" class="nav__link">Home</a></li>
                  <li class="nav__item"><a href="about.html" class="nav__link ">About</a></li>
                  <li class="nav__item"><a href="adopt.php" class="nav__link active-link">Adopt</a></li>
                  <li class="nav__item"><a href="contact.php" class="nav__link">Contact</a></li>
                  <li class="nav__item"><a href="https://cara.wcd.gov.in/" class="nav__link">CARA</a></li>
              </ul>
          </div>

          <div class="nav__toggle" id="nav-toggle">
              <i class='bx bx-menu'></i>
          </div>
      </nav>
  </header>
  <div class="paragraphD">
  <div class="center">
        <h2>Fill the below form carefully and we will reach out to you!</h2>
        <h3>Please make sure that you carry the documents mentioned at the end of the form.</h3>
    </div>
    <form action="adopt.php" method="post" enctype="multipart/form-data" class="adopt__form">
            <input class="contact__input" type="text"  name="name" placeholder="Enter your name" required>
            <input class="contact__input" type="email"  name="email" placeholder="Enter your email" required>
            <input class="contact__input" type="tel"  name="phone" placeholder="Enter your phone number">
            <input class="contact__input" type="text"  name="city" placeholder="Enter your City">
            <textarea class="contact__input" id="message" name="message" rows="4" placeholder="Write your message here" required></textarea>
            <ol>
                <li class="additional">Identification and Personal Documents
                <ul>
                    <li>Government-issued ID (e.g., passport, driving license, or national ID card).</li>
                    <li>Birth certificates of prospective adoptive parents.</li>
                    <li>Marriage certificate (if married).</li>
                    <li>Divorce decree or spouse death certificate (if applicable).</li>
                </ul>
            </li>
            <br>
            <li class="additional">Proof of Financial Stability
                <ul>
                    <li>Income proof (e.g., salary slips, tax returns, or income tax assessments for the last 2-3 years).</li>
                    <li>Bank statements (last 6 months or more).</li>
                    <li>Property ownership documents (if applicable).</li>
                    <li>Proof of employment (e.g., employment letter).</li>
                </ul>
            </li>
            <br>
            <li class="additional">Medical Reports
                <ul>
                    <li>Recent medical fitness certificate for both prospective parents issued by a certified doctor.</li>
                    <li>Mental health evaluation (if required).</li>
                    <li>Immunization records (depending on country requirements).</li>
                </ul>
            </li>
            <br>
            <li class="additional">Residential Proof
                <ul>
                    <li>Proof of residence (e.g., utility bills, rent agreement, or property tax receipts).</li>
                    <li>Certificate of residence issued by a local authority (optional in some regions).</li>
                </ul>
            </li>
            <br>
            <li class="additional">Character Certificates
                <ul>
                    <li>Police clearance certificate or background verification.</li>
                    <li>Character references or recommendation letters from non-family members.</li>
                </ul>
            </li>
            <br>
            <li class="additional">Adoption-Specific Documentation
                <ul>
                    <li>Adoption application form provided by the adoption agency or central authority.</li>
                    <li>Home study report conducted by an authorized social worker or agency.</li>
                    <li>Consent form from biological parents (if applicable, such as in open adoption scenarios).</li>
                    <li>Foster care records (if adopting a foster child).</li>
                </ul>
            </li>
            <br>
            <li class="additional">Photographs
                <ul>
                    <li>Recent passport-size photographs of the adoptive parents.</li>
                    <li>Family photographs (optional but often requested during home study evaluations).</li>
                </ul>
            </li>
            <br>
            <li class="additional">Other Legal Documents
                <ul>
                    <li>Affidavit of willingness to adopt.</li>
                    <li>No-objection certificate (NOC) from the relevant adoption authority (if applicable).</li>
                    <li>Any court order documents required during the legal adoption process.</li>
                </ul>
            </li>
            <br> 
            <li class="additional">
                Additional Notes:
                <ul>
                    <li>International adoption may require additional documents like visa applications, Hague Convention compliance certificates, and translation of certain documents.</li>
                    <li>Always verify the exact requirements with your adoption agency or legal representative, as regulations differ by region.</li>
                    <li>For India-specific guidelines, you can refer to the Central Adoption Resource Authority (CARA)</li>
            </li>
            <br>
        </ol>
        <input class="contact__input" type="file" name="document" accept=".pdf,images/*" required>

        <button class="contact__button" type="submit">Submit</button>
        </form>
  </div>
  <script src="https://unpkg.com/scrollreveal"></script>
  </body>
  <script src="script.js"></script>
  </html>