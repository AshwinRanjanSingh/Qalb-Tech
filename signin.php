<?php
// 🔹 Sabse pehle PHP code page ke upar likho
$status = $_GET['status'] ?? null;
$msg = $_GET['msg'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!-- ✅ Alert Section -->
  <?php if ($status): ?>
    <script>
      <?php if ($status === 'success'): ?>
        alert("✅ Message sent successfully!");
      <?php elseif ($status === 'error'): ?>
        alert("❌ Message could not be sent:");
      <?php endif; ?>
    </script>
  <?php endif; ?>
  
    <div style="display:flex; margin:auto; margin-top: 250px;  width: 200px;">
        <form action="pass.php" style="display:flex; flex-direction: column; gap:10px;">
            <input type="password" name="newpassword" id="" placeholder="New Password">
            <input type="password" name="confirmpassword" id="" placeholder="Confirm Password">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>