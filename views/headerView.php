<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/locales-all.js"></script>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="page">
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo-container">
                    <div class="logo-container">
                        <h2>CodersTeam</h2>
                    </div>
                </div>
            </div>
            <div class="sidebar-body">
            <ul class="navigation-list">
                <li class="navigation-list-item">
                    <a class="navigation-link" href="">
                        <div class="row">
                            <div class="col-2">
                                <i class="icon ion-md-apps"></i>                                
                            </div>
                            <div class="col-10">MENU</div>
                        </div>
                    </a>
                </li>
                <li class="navigation-list-item">
                    <a class="navigation-link" href="">
                        <div class="row">
                            <div class="col-2">
                                <i class="icon ion-md-apps"></i>                                
                            </div>
                            <div class="col-10">MENU1</div>
                        </div>
                    </a>
                </li>
                <li class="navigation-list-item">
                    <a class="navigation-link" href="">
                        <div class="row">
                            <div class="col-2">
                                <i class="icon ion-md-apps"></i>                                
                            </div>
                            <div class="col-10">MENU2</div>
                        </div>
                    </a>
                </li>
            </ul>
            <hr style="margin-top: 30px;color:white;">
            <div class="teams-title-container">
                <p class="teams-title">TEAMS</p>
            </div>
            <ul class="teams-list">
                <li class="teams-list-item">                    
                        <div class="row">
                            <div class="col-1">
                                <i class="fas fa-circle" style="color:purple;""></i>                                
                            </div>
                            <div class="col-10">Asignatura1</div>
                        </div>             
                </li>
                <li class="teams-list-item">                    
                        <div class="row">
                            <div class="col-1">
                                <i class="fas fa-circle" style="color:blue;"></i>                                
                            </div>
                            <div class="col-10">Asignatura2</div>
                        </div>             
                </li>
                <li class="teams-list-item">                    
                        <div class="row">
                            <div class="col-1">
                                <i class="fas fa-circle" style="color:white;"></i>                                
                            </div>
                            <div class="col-10">Asignatura3</div>
                        </div>             
                </li>
            </ul>
        </div>
        </div>

        <div class="content">
            <div class="navigationBar">
            <div class="codersTeam">
                    <div class="codersTeam">
                        <h2>CodersTeam</h2>
                    </div>
                </div>
           
                <button id="sidebarToggle" class="btn sidebarToggle">
                    <i class="icon ion-md-menu" name="menu"> </i>
                </button>
                <div class="container-fluid">
                  <form class="d-flex justify-content-end">
                    <input class="form-control my-2 my-sm-0 me-sm-3  " type="text" placeholder="Search">
                      <button class="btn btn-secondary my-2 my-sm-0 me-sm-2  " type="submit">Buscar</button>
                      <a href="../controllers/loginController.php">
                        <button class="btn btn-secondary " type="button">Cerrar sesión</button>
                      </a>
                  </form>

                </div>
            </div>
        </div>
        <div class="interior">
          

        </div>
    </div>

