<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Probability</title>
    <link rel="stylesheet" href="./static/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./static/font/ionicons/css/ionicons.min.css" />
    <link rel="stylesheet" href="./static/css/main.min.css" />
</head>

<body>
    <div class="wrapper container-fluid px-1">
        <div class="container-fluid">
            <main class="main-content">
                <div class="row">
                    <div class="col-12 col-lg-9 m-auto">
                        <div class="card border-0 shadow">
                            <div class="card-header text-center bg-dark text-white text-uppercase">
                                Data Input
                            </div>
                            <div class="card-body custom-form">
                                <form method="post" action="graph.php" class="form-horizontal">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="text" class="sr-only"></label>
                                                <input id="text" class="form-control" type="text" placeholder="Heigth(m)" />
                                            </div>
                                            <div class="form-group">
                                                <label for="text" class="sr-only"></label>
                                                <input id="text" class="form-control" type="text" placeholder="Weigth(kg)" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="text" class="sr-only"></label>
                                                <input id="text" class="form-control" type="number" placeholder="Age" />
                                            </div>
                                          </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="death" id="death" value="death" class="custom-control-input" />
                                                    <label for="death" class="custom-control-label pointer">I take Alcohol</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="life" id="life" value="life" class="custom-control-input" />
                                                    <label for="life" class="custom-control-label pointer">I smoke cigarrete</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button id="country" class="btn btn-dark f3">
                                            OK
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <footer class="footer">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-2 shadow-inset">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <a href="/" class="btn bg-transparent border-0 p-0 mx-2 text-muted f5 d-flex align-items-center">
                        <i class="ion-ios-home px-2"></i>
                    </a>
                </div>
            </nav>
        </footer>
    </div>
    <script src="./static/js/jquery-3.3.1.min.js"></script>
    <script src="./static/js/bootstrap.bundle.min.js"></script>
    <script src="./static/ckeditor/ckeditor.js"></script>
    <script src="./static/js/main.min.js"></script>
</body>

</html>