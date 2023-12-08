<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="styl1.css">
</head>
<body>
    <article class="compsoul-background-container">
    <?php
// Przykładowa obsługa formularza logowania
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Tutaj dodaj logikę weryfikacji użytkownika (np. w bazie danych)
    // Poniżej znajdziesz przykładową logikę weryfikacji, która nie jest bezpieczna do użycia w środowisku produkcyjnym.

    if ($username === "123" && $password === "sex") {
        
        header("Location: loading logowanie.html");
    } else {
        echo '<div class="ompsoul-background">';
        echo '</div>';
    }
} else {
?>


<?php
}
?>
        
        <div aria-hidden="true" class="compsoul-background">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Hasło:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Zaloguj się">
    </form>
<p class="error"></p>
        </div>
            <span class="shape-waves"></span>
          <span class="shape-square"></span>
          <span class="shape-triangle"></span>
          <span class="shape-parallelogram"></span>
          <span class="shape-rectangle"></span>
          <span class="shape-circle"></span>
          <span class="shape-trapezoid"></span>
        </div>
      </article>
</body>
</html>