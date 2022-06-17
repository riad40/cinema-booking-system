<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background: rgb(204,204,204); 
    }
    page {
        background: white;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
    }
    page[size="A4"] {  
        width: 21cm;
        height: 29.7cm; 
    }
    @media print {
        body, page {
            margin: 0;
            box-shadow: 0;
    }
    }
</style>
</head>
<body>
<page size="A4">
    <h1>test</h1>
    <?php 
        var_dump($data);
    ?>
</page>
</body>
</html>

