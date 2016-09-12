<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="css/style.css">
    <title>Search</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <form action="botpost.php" method="post" class="form">
                    <h2>Search</h2>
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control input-lg" name="query" required />
                            <span class="input-group-btn">
    <input type="submit" class="btn btn-info btn-lg" />
    </span>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <span>Loose</span>
                        <input class="slider" type="range" name="points" id="points" value="60" min="0" max="100" style="width:80%; display:inline-block; text-decoration:none;"> <span>Exact</span>

                </form>
                <hr/>
                <small  style="margin-left:40px;margin-right:0;"> You can adjust how precisely the search matches what you typed by moving the slider.</small>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
    </script>
</body>
</html>