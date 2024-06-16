<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body
    style="font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <div style="width: 100%;">
        <form id="login-form" style="width: 100%;">
            <h2 style="text-align: center; margin-bottom: 20px;">Login</h2>
            <div style="margin-bottom: 15px;">
                <label for="login-username" style="display: block; margin-bottom: 5px;">Username</label>
                <input type="text" id="login-username" required
                    style="width: 100%; padding: 10px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="login-password" style="display: block; margin-bottom: 5px;">Password</label>
                <input type="password" id="login-password" required
                    style="width: 100%; padding: 10px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <button type="submit"
                style="width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer;">Login</button>
            <p style="text-align: center; margin-top: 15px;">Don't have an account? <a href="#" id="show-signup"
                    style="color: #007bff; text-decoration: none;">Sign Up</a></p>
        </form>
    </div>
</body>

</html>