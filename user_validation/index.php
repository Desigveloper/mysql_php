<?php

echo <<<_END
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login Form - User Validation</title>
        </head>
        <body><center>
            <form action="user.php" method="POST" name="contactForm">
                <table border="1" >
                    <tr>
                        <td>
                            <label for="username">User Name</label>
                        </td>
                        <td>
                            <input type="text" name="username" id="username">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="userpassword">Password</label>
                        </td>
                        <td>
                            <input type="password" name="userpassword" id="userpassword">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Submit"/>
                        </td>
                        <td>
                            <input type="reset" value="Reset"/>
                        </td>
                    </tr>
                </table>
            </form>
        </center></body>
    </html>
_END;