<?php
// submit-membership.php

// Formun POST metoduyla gönderilip gönderilmediğini kontrol eder
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Formdan gelen bazı verileri değişkenlere alıyoruz
    $first_name = htmlspecialchars($_POST['first_name'] ?? '');
    $surname = htmlspecialchars($_POST['surname'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    
    /* 
       NOT: Gerçek bir projede bu noktada verileri veritabanınıza (MySQL vb.) 
       kaydetmeniz veya kendinize bir e-posta olarak göndermeniz gerekecektir.
    */
    
    // Kullanıcıya basit bir başarılı sonuç mesajı gösteriyoruz:
    echo "<div style='font-family: sans-serif; text-align: center; margin-top: 50px;'>";
    echo "<h2 style='color: #2c3e50;'>Tebrikler, $first_name $surname!</h2>";
    echo "<p>Üyelik formunuz başarıyla bize ulaşmıştır.</p>";
    echo "<a href='index.html' style='color: #0056b3; text-decoration: none;'>Geri Dön</a>";
    echo "</div>";

} else {
    // Dosyaya direkt tıklanarak gelinmişse hata verir
    echo "Hata: Sayfaya doğrudan erişim izni yok.";
}
?>