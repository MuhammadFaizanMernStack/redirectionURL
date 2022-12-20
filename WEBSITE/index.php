<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>redirection webpage</title>
</head>

<body>
    <h1>Redirection Webpage</h1>
    <p>Enter your URL so your extension will redirect the browser's</p>
    <div class="container">
        <div class="row col-6" style="margin-left: 300px;">
            <section class="form">
                <form id="RedirectForm" method="POST" action="apis/add.php">
                    <input type="text" id="url" name="url" placeholder="Enter New Redirected URL">
                    <input type="hidden" name="command" value="add">
                    <button type="submit" style="margin-top: 40px;">submit URL</button>
                </form>
            </section>
        </div>
    </div>
</body>

</html>