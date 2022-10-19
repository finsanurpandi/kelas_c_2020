<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Hello, world!</h1>

        <div class="row">
            <div class="col-6 col-md-3" style="background:green">
                Col-4
            </div>
            <div class="col-6 col-md-3" style="background:blue">
                Col-4
            </div>
            <div class="col-6 col-md-3" style="background:yellow">
                Col-4
            </div>
            <div class="col-6 col-md-3" style="background:cyan">
                Col-4
            </div>
        </div>

        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Kolom</th>
                    <th>Kolom</th>
                    <th>Kolom</th>
                    <th>Kolom</th>
                    <th>Kolom</th>
                    <th>Kolom</th>
                    <th>Kolom</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                </tr>
                <tr>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                </tr>
                <tr>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                    <td>Contoh Kolom</td>
                </tr>
            </tbody>
        </table>
    </div>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
        </form>
        <form class="row">
            <div class="col-auto">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-auto">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
        </form>
        <form class="form-horizontal">
            <div class="mb-3 row">
                <label for="exampleInputEmail1" class="form-label col-md-2">Email address</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="exampleInputPassword1" class="form-label col-md-2">Password</label>
                <div class="col-md-10">
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
        </form>

        <select class='form-control'>
            <option>One</option>
            <option>Two</option>
            <option>three</option>
        </select>
        <textarea class="form-control" rows="3"></textarea>
    </div>
    <br/><br/>
    <br/><br/>
    <br/><br/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>