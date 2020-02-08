<nav class="navbar navbar-dark bg-dark navbar-expand-lg bg-light">
  <a class="navbar-brand" href="#">Keep things private</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('index.php/welcome/log');?>">Home <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <div class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('index.php/welcome/createnote');?>">Add Note</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="<?php echo base_url('index.php/welcome/logout');?>">logOut</a>
      </li>
    </ul>
    </div>
  </div>
</nav>