<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>User</title>
</head>
<body>
    {{-- Main Navigation --}}
    
    <nav class="navbar navbar-expand-lg " style="background-color: #A1C298">
        <div class="container-fluid">
          <h5>IPT Midterm Project</h5>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div> 
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=url('/')?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=url('/users')?>">Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=url('/accounts')?>">Accounts</a>
              </li>
            </ul>
          </div>
    </nav>
    
    <div class="container" style="margin-top: 25px">
        <div class="col-md-12">
            <h1>Users</h1>

            <table class="table table-striped" style="margin-right:5%">
              <thead style="background-color:#C6EBC5">
                <tr>
                  <th>User ID</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Address</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($users as $u):?>
                  <tr>
                    <td><?= $u->id ?></td>
                    <td><?= $u->lname ?></td>
                    <td><?= $u->fname ?></td>
                    <td><?= $u->address ?></td>
                  </tr>
                <?php endforeach;?>
              </tbody>
            </table>
        </div>
    </div>

</body>
</html>