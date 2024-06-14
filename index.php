<!-- index.php -->
<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
    </head>
    <h1>Calculate values here: </h1>
    <body>
        <form action="functions.php" method="get">
            <input type="text" name="num01" placeholder="Number 1">
            <select name="oper">
                <label>Choose operation!</label>
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
            </select>
            <input type="text" name="num02" placeholder="Number 2">
            <button type="submit">Calculate</button>
        </form>

    </body>
</html>
