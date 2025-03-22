<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
        }
        
        .content {
            padding: 40px;
            flex-grow: 1;
        }
        
        h1 {
            font-size: 48px;
            margin-bottom: 60px;
            font-weight: bold;
            margin-top: 80px;
        }
        
        .form-group {
            margin-bottom: 30px;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
        }
        
        input {
            width: 100%;
            max-width: 520px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        
        .login-button {
            background-color: #f05545;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Inloggen</h1>
        
        <form>
            <div class="form-group">
                <label for="username">Gebruikersnaam:</label>
                <input type="text" id="username" name="username">
            </div>
            
            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password">
            </div>
            
            <button type="submit" class="login-button">Log in</button>
        </form>
    </div>
</body>
</html>