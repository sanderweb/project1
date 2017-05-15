<!-- Curso Ecommerce PHP MySQL
https://www.youtube.com/watch?v=DVO99vc1YRM&index=1&list=PLB_Wd4-5SGAbYqmJ4OVF24g0lNFnUap-W
-->

<!-- PAREI AQUI 7
https://www.youtube.com/watch?v=s7k7ikaa9D0&index=7&list=PLB_Wd4-5SGAbYqmJ4OVF24g0lNFnUap-W
-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Khan Store</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script type="js/bootstrap.js"></script>
    <scriptsrc="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <scripts src="js/main.js"></script>
  </head>

  <body>
<!-- MENU -->
    <div class="navbar navbar-inverse navabar-fixed-top">

      <div class="container-fluid">

        <div class="navbar-header">
          <a href="#" class="navbar-brand">Khan Store</a>

        </div>
          <ul class="nav navbar-nav">
            <li>
              <a href="#">
                <span class="glyphicon glyphicon-home"></span>Home
              </a>
            </li>

            <li>
              <a href="#">
                <span class="glyphicon glyphicon-modal-window"></span>Product
              </a>
            </li>

            <li style="width:300px; left:10px; top:10px;">
              <input type="text" class="form-control" id="search" name="" value="">
            </li>

            <li style="top:10px; left:20px;">
              <input type="submit" class="btn btn-primary" id="search_btn" name="submit" value="Submit">
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-shopping-cart"></span>
                Cart <span class="badge">0</span>
              </a>

        <!-- DROPDOWN CART   -->
              <div class="dropdown-menu" style="width:400px;">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <div class="row">

                      <div class="col-md-3">Sl.No</div>
                      <div class="col-md-3">Product Image</div>
                      <div class="col-md-3">Product Name</div>
                      <div class="col-md-3">Price in $</div>

                    </div><!-- END ROW                       -->
                  </div><!-- END HEADING -->
                </div><!-- END PAINEL SUCCESS -->
                  <div class="panel-body"></div>
                  <div class="panel-footer"></div>
              </div><!-- END DROPDOWN MENU -->
        <!-- END DROPDOWN CART -->


            </li>
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span>Signin
              </a>
              <ul class="dropdown-menu">
                <!-- <li>Teste</li>
                AQUI VAI O DROPDOWN MENU PARA CADASTRO -->

                <div style="width:300px;">
                  <div class="panel panel-primary">
                    <div class="panel-heading">Login</div>

                      <div class="panel-heading">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="" value="Email" required/>
                        <label for="email">Password</label>
                        <input type="password" class="form-control" id="password" name="" value="Password" required/>
                        <p><br></p>
                          <a href="#" style="color:white; list-sstyle:none;">Forgotten Password</a>
                          <input type="submit" class="btn btn-success" style="float:right;" id="login" name="" value="Login">
                      </div>
                    <div class="panel-footer" id="e_msg"></div>
                  </div>
                </div>

              </ul>
            </li>

            <li>
              <a href="#"><span class="glyphicon glyphicon-user"></span>Signup
              </a>
            </li>

      </div><!-- END container-fluid -->

    </div>
    <!-- END MENU -->

    <p><br/></p>
    <p><br/></p>
    <p><br/></p>
    <!-- SIDE BAR LEFT -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1">

          <div class="col-md-2">
      <!-- Deu erro -> <div class="nav nav-pills nav-stacked"> -->
            <div class="nav nav-pills">
              <li class="active"><a href="#"><h4>Categories</h4></a></li>
              <li><a href="">Categories</a></li>
              <li><a href="">Categories</a></li>
              <li><a href="">Categories</a></li>
              <li><a href="">Categories</a></li>
            </div>

            <div class="nav nav-pills">
              <li class="active"><a href="#"><h4>Brand</h4></a></li>
              <li><a href="">Categories</a></li>
              <li><a href="">Categories</a></li>
              <li><a href="">Categories</a></li>
              <li><a href="">Categories</a></li>
            </div>
          </div>

        </div><!-- END COL-MD-1 -->

        <div class="col-md-8">
          <div class="panel panel-info">
            <div class="panel-heading">Products</div>
              <div class="panel-body">

                <div class="col-md-4">
                  <div class="panel panel-info">
                    <div class="panel-heading">Samsung Galaxy</div>

                    <!-- IMG   -->
                    <div class="panel-body">
                      <img src="product_images/images.jpg" alt="">
                    </div>

                    <!-- PRICE BUTTON -->
                    <div class="panel-heading">$.500,00
                      <button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
                    </div>

                  </div>
                </div><!-- END PRODUCT -->

              </div>
  <div class="panel-footer">&copy; 2017</div>
          </div>
        </div><!-- END COL-MD-8 -->

      </div><!-- END ROW -->
    </div><!-- END CONTAINER FLUID -->
    <!-- END SIDBAR LEFT -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="js/bootstrap.min.js"></script>

  </body>
</html>
