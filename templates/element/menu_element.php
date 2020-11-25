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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Créditos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?= $this->Html->link('Simulador', ['controller' => 'bps_business_partners', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Generador', ['controller' => 'SalesCredits', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Socios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?= $this->Html->link('Socios de negocio', ['controller' => 'bps_business_partners', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Telefonos de socios', ['controller' => 'bps_business_partners_phones', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Direcciones de socios', ['controller' => 'bps_business_partners_addresses', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Documentos de socios', ['controller' => 'bps_business_partners_documents', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Roles de socios', ['controller' => 'bps_business_partners_rols', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Finanzas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?= $this->Html->link('Socios de negocio', ['controller' => 'bps_business_partners', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Telefonos de socios', ['controller' => 'bps_business_partners_phones', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Direcciones de socios', ['controller' => 'bps_business_partners_addresses', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Documentos de socios', ['controller' => 'bps_business_partners_documents', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Roles de socios', ['controller' => 'bps_business_partners_rols', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Config. Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?= $this->Html->link('Productos', ['controller' => 'sales_products', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Frecuencias de pago', ['controller' => 'sales_types_payments', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Tipos estatus crédito', ['controller' => 'sales_products_types_states', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Roles de socios', ['controller' => 'bps_types_rols', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Genero-Sexo', ['controller' => 'bps_genders', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cat. Sys
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?= $this->Html->link('Tipos telefonos', ['controller' => 'bps_types_phones', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Tipos direcciones', ['controller' => 'bps_types_addresses', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Tipos documentos', ['controller' => 'bps_types_documents', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Roles de socios', ['controller' => 'bps_types_rols', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Genero-Sexo', ['controller' => 'bps_genders', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
        </div>
      </li>
    </ul>
  </div>
</nav>