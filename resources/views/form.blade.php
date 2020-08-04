<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/welcome2">
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>

    <label for="First">First Name:</label><br>
    <br><input type="text" name="FirstName" id="First"><br>

    <br><label for="Last">Last Name:</label><br>
    <br><input type="text" name="LastName" id="Last"><br>

    <br><label>Gender:</label>
    <br><input type="radio" name="gender" value="0" checked> Laki Laki
    <br><input type="radio" name="gender" value="1"> Perempuan<br>

    <br><label>Nationality:</label>
    <select>
        <option>Indonesian</option>
        <option>Singapuran</option>
        <option>Malaysian</option>
        <option>Australian</option>
    </select><br>

    <br><label>Language Spoken:</label>
    <br><input type="checkbox"name="bahasa" value="0">Bahasa Indonesia
    <br><input type="checkbox"name="bahasa" value="1">English
    <br><input type="checkbox" name="bahasa" value="2">Other<br>

    <br>Bio:<br>
    <textarea cols="20" rows="8"></textarea><br>
    <input type="submit" name="Sign Up" value="Submit">
</form>
</body>
</html> 