<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="slide-nav">
    <div class="container">
     <div class="navbar-header">
      <a class="navbar-toggle"> 
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
       </a>
      <a class="navbar-brand" href="#">Wsnippets.com</a>
     </div>
     <div id="slidemenu">
            <form class="navbar-form navbar-right" role="form">
              <div class="form-group">
                <input type="search" placeholder="search" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
 
      <ul class="nav navbar-nav">
       <li class="active"><a href="#">Home</a></li>
       <li><a href="#about">About</a></li>
       <li><a href="#contact">Contact</a></li>
       @include('shop.shop_layouts.mega-menu')
      </ul>          
     </div>
    </div>
  </div>