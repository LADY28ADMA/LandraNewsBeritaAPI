<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tubes API NEWS</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway';
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        .table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #f2f2f2;
            color: black;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Landra News Berita API Doc
            </div>
            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://github.com/codecasts/laravel">GitHub</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Endpoint</th>
                        <th>Method</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>https://demo.amoratours.id/api/newss/alfeeds</td>
                        <td>GET</td>
                        <td>Get all news feeds</td>
                    </tr>
                    <tr>
                        <td>https://demo.amoratours.id/api/newss/up/{id}</td>
                        <td>POST</td>
                        <td>Post news (user ID)</td>
                    </tr>
                    <tr>
                        <td>https://demo.amoratours.id/api/newss/update/{id}</td>
                        <td>POST</td>
                        <td>Update news (news ID)</td>
                    </tr>
                    <tr>
                        <td>https://demo.amoratours.id/api/newss/del/{id}</td>
                        <td>POST</td>
                        <td>Delete news (news ID)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
