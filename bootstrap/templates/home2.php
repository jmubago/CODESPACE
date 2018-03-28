     <!-- Barra de navegación --> 
    <nav class="navbar navbar-light bg-light   navbar-expand-lg">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>    
    <!-- Fin Barra de navegación -->
    
    <!-- Carrusel -->
    <div id="micarrusel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#micarrusel" data-slide-to="0" class="active"></li>
            <li data-target="#micarrusel" data-slide-to="1"></li>
            <li data-target="#micarrusel" data-slide-to="2"></li>
          </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://picsum.photos/1200/400/?gravity=east" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-uppercase"> Sed placerat interdum suscipit</h2>
                    <p>Fusce luctus in leo et pretium. Nulla egestas eget sem a maximus. p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://picsum.photos/1200/400/?random" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://picsum.photos/1200/400/" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#micarrusel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#micarrusel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
    <!-- Fin Carrusel -->
    


<div class="container">
    
    <div class="row mt-5 mb-5">
        <div class="col-12 text-center">
            <p class="w-75 m-auto">Vivamus congue sem in mollis tincidunt. In non ipsum non arcu mollis aliquet pellentesque id erat. Aliquam nec neque neque. Sed non leo blandit, laoreet velit a, facilisis risus. Aliquam ullamcorper posuere ligula sit amet dapibus. Vestibulum sodales id leo vel lacinia. Vivamus tristique laoreet semper. Aliquam molestie vestibulum augue non sodales. Aliquam molestie augue eget nibh rutrum porta. Sed scelerisque, ante sagittis consequat pretium, lacus tellus porttitor odio, sed sollicitudin tellus sem ac enim. Ut facilisis metus sit amet efficitur bibendum. Nullam lectus arcu, sollicitudin at malesuada ac, rhoncus at tortor. Morbi fringilla bibendum fermentum. Sed ac interdum velit. Quisque sit amet dolor eros. Etiam vel vestibulum diam.</p>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-4 ">
            <img class="d-block w-100" src="https://picsum.photos/300/200/" alt="Imagen 1">
           
        </div>
        <div class="col-4  ">
            <img class="d-block w-100" src="https://picsum.photos/300/200/?random" alt="Imagen 2">
           
        </div>
        <div class="col-4">
            
             <img class="d-block w-100" src="https://picsum.photos/300/200/?gravity=east" alt="Imagen 3">
        </div>
    </div>
</div>