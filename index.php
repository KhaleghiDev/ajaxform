<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax form</title>
    <link rel="stylesheet" href="/asset/css/style.css">
</head>
<body>
    <div class="continer">
    <form action="/page/ajax_states.php" method="POST" id="ajax_states">
    <input
            type="text"
            class="form-control"
            id="name"
            name="state"
            placeholder="نام استان را وارد کنید "
          />
          <button type="submit" class="btn btn-success">
          ارسال
        </button>
        <div id="resulte-tag"></div>
        
    </form>
    </div>


    <script src="/asset/js/jquery-3.7.1.min.js"></script>
    <script src="/asset/js/main.js"></script>
</body>
</html>