<?php
if (isset($_POST['calculate'])) {
    $dob = $_POST['dob'];
    $dobObject = new DateTime($dob); 
    $today = new DateTime();

    $ageInterval = $today->diff($dobObject); 

    $age = [
        'years' => $ageInterval->y,
        'months' => $ageInterval->m,
        'days' => $ageInterval->d
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Age Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #6a11cb 0%, #2575fc 100%);
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 450px;
            background: #fff;
            padding: 30px;
            margin: 80px auto;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            text-align: center;
        }
        h2 {
            color: #2575fc;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
        input[type="date"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            width: 100%;
            margin-bottom: 20px;
            font-size: 16px;
        }
        button {
            background: #2575fc;
            color: white;
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #1e5ed8;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background: #f4f6ff;
            border-left: 5px solid #2575fc;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHP Age Calculator</h2>
        <form method="post">
            <label>Enter Date of Birth:</label>
            <input type="date" name="dob" required>
            <button type="submit" name="calculate">Calculate Age</button>
        </form>

        <?php if (isset($age)) { ?>
            <div class="result">
                <h3>Your Age is:</h3>
                <p><strong><?php echo $age['years']; ?></strong> Years, 
                   <strong><?php echo $age['months']; ?></strong> Months, 
                   <strong><?php echo $age['days']; ?></strong> Days</p>
            </div>
        <?php } ?>
    </div>
</body>
</html>
