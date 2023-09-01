
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <title>Futura Business Informatique GROUPE - Conseil en ingénierie</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
  </head>

  <body>
    <div class="container-fluid">      
      <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <a class="navbar-brand" href="/index.php">
      <img src="/img/logo.png" alt="Logo" height="100">
    </a>
  </div>
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li> <a href="/index.php">Home</a> </li>
          </ul>
    
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/signup.php">Don't have an Account ?</a></li>
            <li><a href="/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
          </div>
</nav>

    <div class="row" style="height: 50px;">
    </div>
      </div>

    <div class="container">
      <div class="row"> 
        <div class="col-md-12">
          
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Users</h3>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-condensed">
                <thead>
                  <tr>
                    <th class="text-center">Username</th>
                    <th class="text-center">Firstname</th>
                    <th class="text-center">Lastname</th>
                    <th class="text-center">Email address</th>
                    <th class="text-center">Role</th>
                    <th class="text-center">Last Connection</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                                  
                      <tr>
                      <td>rmasson</td><td>Rodrigue</td><td>Masson</td><td>rmasson@futuraBI.fr</td><td>Administrator</td><td>2023-08-25 23:41:27</td>                        <td class="text-center">
                          <form action="/admin/admin.php" method="GET">
                          <input type="hidden" name="id" value="14" /><button type="submit" class="btn btn-success btn-xs" name="status" value="inactive">Active</button>                          </form>            
                        </td>
                        <td class="text-center">
                          <form action="/admin/admin.php" method="POST">
                                                      </form>
                        </td>
                      </tr>
                                  
                      <tr>
                      <td>vhoffmann</td><td>Victorine</td><td>Hoffmann</td><td>vhoffmann@futuraBI.fr</td><td>Collaborateur</td><td>2019-12-03 17:08:09</td>                        <td class="text-center">
                          <form action="/admin/admin.php" method="GET">
                          <input type="hidden" name="id" value="13" /><button type="submit" class="btn btn-success btn-xs" name="status" value="inactive">Active</button>                          </form>            
                        </td>
                        <td class="text-center">
                          <form action="/admin/admin.php" method="POST">
                                                      </form>
                        </td>
                      </tr>
                                  
                      <tr>
                      <td>brenaud</td><td>Bernadette</td><td>Renaud</td><td>brenaud@lrtechnologies.fr</td><td>Collaborator</td><td>2019-12-03 17:08:09</td>                        <td class="text-center">
                          <form action="/admin/admin.php" method="GET">
                          <input type="hidden" name="id" value="10" /><button type="submit" class="btn btn-success btn-xs" name="status" value="inactive">Active</button>                          </form>            
                        </td>
                        <td class="text-center">
                          <form action="/admin/admin.php" method="POST">
                                                      </form>
                        </td>
                      </tr>
                                  
                      <tr>
                      <td>broy</td><td>Baudouin</td><td>Roy</td><td>broy@futuraBI.fr</td><td>Collaborator</td><td>2019-12-03 17:08:09</td>                        <td class="text-center">
                          <form action="/admin/admin.php" method="GET">
                          <input type="hidden" name="id" value="9" /><button type="submit" class="btn btn-success btn-xs" name="status" value="inactive">Active</button>                          </form>            
                        </td>
                        <td class="text-center">
                          <form action="/admin/admin.php" method="POST">
                                                      </form>
                        </td>
                      </tr>
                                  
                      <tr>
                      <td>nthomas</td><td>Ninette</td><td>Thomas</td><td>nthomas@futuraBI.fr</td><td>Collaborator</td><td>2023-08-25 23:40:59</td>                        <td class="text-center">
                          <form action="/admin/admin.php" method="GET">
                          <input type="hidden" name="id" value="12" /><button type="submit" class="btn btn-success btn-xs" name="status" value="inactive">Active</button>                          </form>            
                        </td>
                        <td class="text-center">
                          <form action="/admin/admin.php" method="POST">
                                                      </form>
                        </td>
                      </tr>
                                  
                      <tr>
                      <td>pgervais</td><td>Placide</td><td>Gervais</td><td>pgervais@futuraBI.fr</td><td>Collaborator</td><td>2023-08-25 23:41:00</td>                        <td class="text-center">
                          <form action="/admin/admin.php" method="GET">
                          <input type="hidden" name="id" value="6" /><button type="submit" class="btn btn-success btn-xs" name="status" value="inactive">Active</button>                          </form>            
                        </td>
                        <td class="text-center">
                          <form action="/admin/admin.php" method="POST">
                                                      </form>
                        </td>
                      </tr>
                                  
                      <tr>
                      <td>placombe</td><td>Philibert</td><td>Lacombe</td><td>placombe@futuraBI.fr</td><td>Collaborator</td><td>2019-12-03 17:08:09</td>                        <td class="text-center">
                          <form action="/admin/admin.php" method="GET">
                          <input type="hidden" name="id" value="7" /><button type="submit" class="btn btn-success btn-xs" name="status" value="inactive">Active</button>                          </form>            
                        </td>
                        <td class="text-center">
                          <form action="/admin/admin.php" method="POST">
                                                      </form>
                        </td>
                      </tr>
                                  
                      <tr>
                      <td>slamotte</td><td>Samuel</td><td>Lamotte</td><td>slamotte@futuraBI.fr</td><td>Collaborator</td><td>2019-12-03 17:08:09</td>                        <td class="text-center">
                          <form action="/admin/admin.php" method="GET">
                          <input type="hidden" name="id" value="11" /><button type="submit" class="btn btn-danger btn-xs" name="status" value="inactive">Active</button>                          </form>            
                        </td>
                        <td class="text-center">
                          <form action="/admin/admin.php" method="POST">
                                                      </form>
                        </td>
                      </tr>
                                  
                      <tr>
                      <td>triou</td><td>Thierry</td><td>Riou</td><td>triou@futuraBI.fr</td><td>Collaborator</td><td>2019-12-03 17:08:09</td>                        <td class="text-center">
                          <form action="/admin/admin.php" method="GET">
                          <input type="hidden" name="id" value="8" /><button type="submit" class="btn btn-success btn-xs" name="status" value="inactive">Active</button>                          </form>            
                        </td>
                        <td class="text-center">
                          <form action="/admin/admin.php" method="POST">
                                                      </form>
                        </td>
                      </tr>
                                  
                      <tr>
                      <td>afoulon</td><td>Aristide</td><td>Foulon</td><td>afoulon@futuraBI.fr</td><td>Financial approver</td><td>2019-12-03 17:08:09</td>                        <td class="text-center">
                          <form action="/admin/admin.php" method="GET">
                          <input type="hidden" name="id" value="1" /><button type="submit" class="btn btn-success btn-xs" name="status" value="inactive">Active</button>                          </form>            
                        </td>
                        <td class="text-center">
                          <form action="/admin/admin.php" method="POST">
                                                      </form>
                        </td>
                      </tr>
                                  
                      <tr>
                      <td>pbaudouin</td><td>Paul</td><td>Baudouin</td><td>pbaudouin@futuraBI.fr</td><td>Financial approver</td><td>2019-12-03 17:08:09</td>                        <td class="text-center">
                          <form action="/admin/admin.php" method="GET">
                          <input type="hidden" name="id" value="2" /><button type="submit" class="btn btn-success btn-xs" name="status" value="inactive">Active</button>                          </form>            
                        </td>
                        <td class="text-center">
                          <form action="/admin/admin.php" method="POST">
                                                      </form>
                        </td>
                      </tr>
                                  
                      <tr>
                      <td>mnguyen</td><td>Maximilien</td><td>Nguyen</td><td>mnguyen@futuraBI.fr</td><td>Manager</td><td>2019-12-03 17:08:09</td>                        <td class="text-center">
                          <form action="/admin/admin.php" method="GET">
                          <input type="hidden" name="id" value="5" /><button type="submit" class="btn btn-success btn-xs" name="status" value="inactive">Active</button>                          </form>            
                        </td>
                        <td class="text-center">
                          <form action="/admin/admin.php" method="POST">
                                                      </form>
                        </td>
                      </tr>
                                  
                      <tr>
                      <td>mriviere</td><td>Manon</td><td>Riviere</td><td>mriviere@futuraBI.fr</td><td>Manager</td><td>2023-08-25 23:41:14</td>                        <td class="text-center">
                          <form action="/admin/admin.php" method="GET">
                          <input type="hidden" name="id" value="4" /><button type="submit" class="btn btn-success btn-xs" name="status" value="inactive">Active</button>                          </form>            
                        </td>
                        <td class="text-center">
                          <form action="/admin/admin.php" method="POST">
                                                      </form>
                        </td>
                      </tr>
                                  
                      <tr>
                      <td>rlefrancois</td><td>Reynaud</td><td>Lefrancois</td><td>rlefrancois@futuraBI.fr</td><td>Manager</td><td>2019-12-03 17:08:09</td>                        <td class="text-center">
                          <form action="/admin/admin.php" method="GET">
                          <input type="hidden" name="id" value="3" /><button type="submit" class="btn btn-success btn-xs" name="status" value="inactive">Active</button>                          </form>            
                        </td>
                        <td class="text-center">
                          <form action="/admin/admin.php" method="POST">
                                                      </form>
                        </td>
                      </tr>
                      
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>   
  </body>
</html>
