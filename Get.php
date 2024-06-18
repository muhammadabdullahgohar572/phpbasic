<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
</head>

<body
    style="font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h2 style="text-align: center;">Signup</h2>
        <form method="get" action="GetData.php">
            <div style="margin-bottom: 15px;">
                <label for="username" style="display: block; margin-bottom: 5px;">Username</label>
                <input type="text" id="username" name="username"
                    style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="address" style="display: block; margin-bottom: 5px;">Address</label>
                <input type="text" id="address" name="address"
                    style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="email" style="display: block; margin-bottom: 5px;">Email</label>
                <input type="email" id="email" name="email" style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="password" style="display: block; margin-bottom: 5px;">Password</label>
                <input type="password" id="password" name="password"
                    style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="postalcode" style="display: block; margin-bottom: 5px;">Postal Code</label>
                <input type="text" id="postalcode" name="postalcode"
                    style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
            <button type="submit"
                style="width: 100%; padding: 10px; background-color: #5cb85c; color: white; border: none; border-radius: 5px; cursor: pointer;">Sign
                Up</button>
        </form>
    </div>
</body>

</html>