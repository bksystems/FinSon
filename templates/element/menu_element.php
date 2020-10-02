<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Socios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?= $this->Html->link('Socios de negocio', ['controller' => 'bps_business_partners', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Telefonos de socios', ['controller' => 'structures_states', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Direcciones de socios', ['controller' => 'structures_municipalities', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Documentos de socios', ['controller' => 'structures_municipalities', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Roles de socios', ['controller' => 'structures_municipalities', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Config. Estructura
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?= $this->Html->link('Paises', ['controller' => 'structures_countries', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Estados', ['controller' => 'structures_states', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Municipios', ['controller' => 'structures_municipalities', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Colonias', ['controller' => 'structures_colonies', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
        </div>
      </li>
    </ul>
  </div>
</nav>