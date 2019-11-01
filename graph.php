<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Probability</title>
    <link rel="stylesheet" href="./static/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./static/font/ionicons/css/ionicons.min.css" />
    <link rel="stylesheet" href="./static/css/Chart.min.css" />
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
                              Result Page
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <canvas id="myChart"></canvas>
                                </div>
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
    <script src="./static/js/Chart.min.js"></script>
    <script src="./static/js/main.min.js"></script>
    <script>
    var ctx = document.getElementById("myChart").getContext("2d");
    Chart.defaults.global.animation.duration = 3000
    var myChart = new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: ["Probability of Conception (70%)", ""],
            datasets: [{
                label: "# of Votes",
                data: [70, 50],
                backgroundColor: [
                    "rgba(173, 216, 230, 1)",
                    "rgba(255, 255, 255, 0)"
                ],
                borderColor: [
                    "rgba(255, 99, 132, 1)",
                    "rgba(255, 255, 255, 0)"
                ],
                borderWidth: 0
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    },
                    gridLines: {
                        display: false
                    }
                }]
            }
        }
    });
    </script>
</body>

</html>