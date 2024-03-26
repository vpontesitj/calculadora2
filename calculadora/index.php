<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
    <style>
        .calculator {
            width: 250px;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 0 auto;
            text-align: center;
        }
        input[type="text"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            font-size: 18px;
        }
        .button-row {
            margin-bottom: 5px;
            display: flex;
            justify-content: space-between;
        }
        .button-row input[type="button"] {
            flex: 1;
            height: 50px;
            margin: 0 5px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="display" id="display" placeholder="0" readonly><br>
            <div class="button-row">
                <input type="button" value="7" onclick="addToDisplay('7')">
                <input type="button" value="8" onclick="addToDisplay('8')">
                <input type="button" value="9" onclick="addToDisplay('9')">
                <input type="button" value="+" onclick="addToDisplay('+')">
            </div>
            <div class="button-row">
                <input type="button" value="4" onclick="addToDisplay('4')">
                <input type="button" value="5" onclick="addToDisplay('5')">
                <input type="button" value="6" onclick="addToDisplay('6')">
                <input type="button" value="-" onclick="addToDisplay('-')">
            </div>
            <div class="button-row">
                <input type="button" value="1" onclick="addToDisplay('1')">
                <input type="button" value="2" onclick="addToDisplay('2')">
                <input type="button" value="3" onclick="addToDisplay('3')">
                <input type="button" value="*" onclick="addToDisplay('*')">
            </div>
            <div class="button-row">
                <input type="button" value="0" onclick="addToDisplay('0')">
                <input type="button" value="C" onclick="clearDisplay()">
                <input type="submit" name="operation" value="=">
                <input type="button" value="/" onclick="addToDisplay('/')">
            </div>
        </form>
        <?php
        if(isset($_POST['operation'])){
            $expression = $_POST['display'];
            $result = eval("return $expression;");
            echo "<h3>Resultado: $result</h3>";
        }
        ?>
    </div>
 
    <script>
        function addToDisplay(value) {
            document.getElementById('display').value += value;
        }
 
        function clearDisplay() {
            document.getElementById('display').value = '';
        }
    </script>
</body>
</html>