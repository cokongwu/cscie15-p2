<!DOCTYPE html>
<html>
<head>
    <title>XKCD Generator</title>
    <meta charset="utf-8" >
    <link rel="stylesheet" href="./css/mycss.css">
    <?php require "pw_logic.php" ?>
</head>
<body>
<div>
    <h1>XKCD Password Generator</h1>
    <div class="result">
        <p>
	    <?= $result ?>
	</p>
    </div>
    <form action="xkcd_gen.php" method="POST">
	<select name="amount" id="amount">
	    <option value="1">1</option>
	    <option value="2">2</option>
	    <option value="3">3</option>
	    <option value="4">4</option>
	    <option value="5">5</option>
	    <option value="6">6</option>
	    <option value="7">7</option>
	    <option value="8">8</option>
	    <option value="9">9</option>
	</select>
	<label for="amount">Enter amount of words</label><br>
	<input type="checkbox" name="number" id="number">
	<label for="number">Add a number</label><br>
	<input type="checkbox" name="symbol" id="symbol">
        <label for="symbol">Add a symbol</label><br>
	<br>
	<input type="submit" value="generate" id="generate">
    </form>
</div>
</body>
</html>
