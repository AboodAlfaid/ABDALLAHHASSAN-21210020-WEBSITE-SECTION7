<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>signup</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>


<body class="text-start m-auto" >
    <?php  include "templates/headerTemplate.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div style="">
                    <div class="table-responsive table">
                        <table class="">
                            <thead>
                                <tr>
                                    <th class="fs-3" style="font-family: initial;">
                                        <h1><strong>Sign up</strong></h1>
                                    </th>
                                </tr>
                            </thead>
                            <form action="includes/signup.php" method="POST">
                            <tbody>
                                <tr>
                                    <td><label class="form-label">UserName:</label></td>
                                    <td><input class="border rounded-0 border-3" name= "Username"type="text" style="margin-left: 49px;"required></td>
                                </tr>
                                <tr>
                                    <td><label class="form-label">Subscription:</label></td>
                                    <td><input class="border rounded-0 border-3"  name= "Subscription" type="text" style="margin-left: 49px;"required></td>
                                </tr>
                                <tr>
                                    <td><label class="form-label">Password:<br></label></td>
                                    <td><input class="border rounded-0 border-3" name= "Password" type="text" style="margin-left: 49px;"required></td>
                                </tr>
                                
                            </tbody>
                            <button type="submit">Sign up</button>
                        </form>
                        
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <?php include "templates/footer.html";?>
</body>


</html>