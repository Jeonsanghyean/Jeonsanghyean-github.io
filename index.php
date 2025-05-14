<?php
$total = 0;
$selected_tickets = [];

if (isset($_POST['submit'])) {
    $customer_name = htmlspecialchars($_POST['customer_name']);
    
    // Ticket quantities
    $admission_child = (int)$_POST['admission_child'];
    $admission_adult = (int)$_POST['admission_adult'];
    $big3_child = (int)$_POST['big3_child'];
    $big3_adult = (int)$_POST['big3_adult'];
    $free_pass_child = (int)$_POST['free_pass_child'];
    $free_pass_adult = (int)$_POST['free_pass_adult'];
    $annual_pass_child = (int)$_POST['annual_pass_child'];
    $annual_pass_adult = (int)$_POST['annual_pass_adult'];

    // Calculate total
    $total = ($admission_child * 7000) + ($admission_adult * 10000) +
             ($big3_child * 12000) + ($big3_adult * 16000) +
             ($free_pass_child * 21000) + ($free_pass_adult * 26000) +
             ($annual_pass_child * 70000) + ($annual_pass_adult * 90000);

    // Collect selected tickets (1 or more)
    if ($admission_child > 0) $selected_tickets[] = "입장권(어린이): $admission_child";
    if ($admission_adult > 0) $selected_tickets[] = "입장권(어른): $admission_adult";
    if ($big3_child > 0) $selected_tickets[] = "BIG3(어린이): $big3_child";
    if ($big3_adult > 0) $selected_tickets[] = "BIG3(어른): $big3_adult";
    if ($free_pass_child > 0) $selected_tickets[] = "자유이용권(어린이): $free_pass_child";
    if ($free_pass_adult > 0) $selected_tickets[] = "자유이용권(어른): $free_pass_adult";
    if ($annual_pass_child > 0) $selected_tickets[] = "연간이용권(어린이): $annual_pass_child";
    if ($annual_pass_adult > 0) $selected_tickets[] = "연간이용권(어른): $annual_pass_adult";
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20221243-전상현</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, h2 {
            text-align: center;
        }
        table {
            width: 100%;
            max-width: 700px;
            margin: 20px auto;
            border-collapse: collapse;
        }
        td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
            font-size: 16px;
        }
        .result {
            text-align: center;
        }
<?php
$total = 0;
$selected_tickets = [];

if (isset($_POST['submit'])) {
    $customer_name = htmlspecialchars($_POST['customer_name']);
    
    // Ticket quantities
    $admission_child = (int)$_POST['admission_child'];
    $admission_adult = (int)$_POST['admission_adult'];
    $big3_child = (int)$_POST['big3_child'];
    $big3_adult = (int)$_POST['big3_adult'];
    $free_pass_child = (int)$_POST['free_pass_child'];
    $free_pass_adult = (int)$_POST['free_pass_adult'];
    $annual_pass_child = (int)$_POST['annual_pass_child'];
    $annual_pass_adult = (int)$_POST['annual_pass_adult'];

    // Calculate total
    $total = ($admission_child * 7000) + ($admission_adult * 10000) +
             ($big3_child * 12000) + ($big3_adult * 16000) +
             ($free_pass_child * 21000) + ($free_pass_adult * 26000) +
             ($annual_pass_child * 70000) + ($annual_pass_adult * 90000);

    // Collect selected tickets (1 or more)
    if ($admission_child > 0) $selected_tickets[] = "입장권(어린이): $admission_child";
    if ($admission_adult > 0) $selected_tickets[] = "입장권(어른): $admission_adult";
    if ($big3_child > 0) $selected_tickets[] = "BIG3(어린이): $big3_child";
    if ($big3_adult > 0) $selected_tickets[] = "BIG3(어른): $big3_adult";
    if ($free_pass_child > 0) $selected_tickets[] = "자유이용권(어린이): $free_pass_child";
    if ($free_pass_adult > 0) $selected_tickets[] = "자유이용권(어른): $free_pass_adult";
    if ($annual_pass_child > 0) $selected_tickets[] = "연간이용권(어린이): $annual_pass_child";
    if ($annual_pass_adult > 0) $selected_tickets[] = "연간이용권(어른): $annual_pass_adult";
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20221243-전상현</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, h2 {
            text-align: center;
        }
        table {
            width: 100%;
            max-width: 700px;
            margin: 20px auto;
            border-collapse: collapse;
        }
        td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
            font-size: 16px;
        }
        .result {
            text-align: center;
            margin: 20px;
            font-size: 18px;
        }
        .form-container {
            text-align: center;
            margin: 20px;
        }
    </style>
</head>
<body>
    <form method="POST" class="form-container">
        <h2>
            고객성명: <input type="text" name="customer_name" placeholder="이름" required>
            <input type="submit" name="submit" value="합계">
        </h2>

        <table>
            <tr>
                <td>No</td><td>구분</td><td>어린이</td><td></td><td>어른</td><td></td><td>비고</td>
            </tr>
            <tr>
                <td>1</td><td>입장권</td><td>7,000</td>
                <td><select name="admission_child">
                    <?php for ($i = 0; $i <= 3; $i++) echo "<option value='$i'>$i</option>"; ?>
                </select></td>
                <td>10,000</td>
                <td><select name="admission_adult">
                    <?php for ($i = 0; $i <= 3; $i++) echo "<option value='$i'>$i</option>"; ?>
                </select></td>
                <td>입장</td>
            </tr>
            <tr>
                <td>2</td><td>BIG3</td><td>12,000</td>
                <td><select name="big3_child">
                    <?php for ($i = 0; $i <= 3; $i++) echo "<option value='$i'>$i</option>"; ?>
                </select></td>
                <td>16,000</td>
                <td><select name="big3_adult">
                    <?php for ($i = 0; $i <= 3; $i++) echo "<option value='$i'>$i</option>"; ?>
                </select></td>
                <td>입장+놀이3종</td>
            </tr>
            <tr>
                <td>3</td><td>자유이용권</td><td>21,000</td>
                <td><select name="free_pass_child">
                    <?php for ($i = 0; $i <= 3; $i++) echo "<option value='$i'>$i</option>"; ?>
                </select></td>
                <td>26,000</td>
                <td><select name="free_pass_adult">
                    <?php for ($i = 0; $i <= 3; $i++) echo "<option value='$i'>$i</option>"; ?>
                </select></td>
                <td>입장+놀이자유</td>
            </tr>
            <tr>
                <td>4</td><td>연간이용권</td><td>70,000</td>
                <td><select name="annual_pass_child">
                    <?php for ($i = 0; $i <= 3; $i++) echo "<option value='$i'>$i</option>"; ?>
                </select></td>
                <td>90,000</td>
                <td><select name="annual_pass_adult">
                    <?php for ($i = 0; $i <= 3; $i++) echo "<option value='$i'>$i</option>"; ?>
                </select></td>
                <td>입장+놀이자유</td>
            </tr>
        </table>
    </form>

    <?php if (isset($_POST['submit']) && !empty($selected_tickets)): ?>
        <div class="result">
            <h3>(<?php echo date('Y년 m월 d일 H:i분'); ?>)</h3>
            <p><?php echo htmlspecialchars($customer_name); ?>고객님 감사합니다.</p>
            <ul>
                <?php foreach ($selected_tickets as $ticket): ?>
                    <li><?php echo $ticket; ?>장</li>
                <?php endforeach; ?>
            </ul>
            <p><strong>합계 <?php echo number_format($total); ?>입니다.</strong></p>
        </div>
    <?php endif; ?>
</body>
</html>