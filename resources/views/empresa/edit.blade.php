@extends('base')

@section('content')
  <div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText">Cadastro da empresa de Clientes</h1>
      <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button>
    </div>
    <div class="app-content-actions">
      <div class="app-content-actions-wrapper">
        <div class="filter-button-wrapper">
          <button class="action-button filter jsFilter">
            <span>Filter</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button>
          <div class="filter-menu">
            <label>Categoria</label>
            <select>
              <option>Todas as Categorias</option>
              <option>Furniture</option>                 
              <option>Decoration</option>
              <option>Kitchen</option>
              <option>Bathroom</option>
            </select>
            <label>Status</label>
            <select>
              <option> Todos</option>
              <option>Ativo</option>
              <option>Inativo</option>
            </select>
            <div class="filter-menu-buttons">
              <button class="filter-button reset">
                Limpar
              </button>
              <button class="filter-button apply">
                Aplicar
              </button>1
            </div>
          </div>
        </div>
        <button class="action-button list active" title="List View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
        </button>
        <button class="action-button grid" title="Grid View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        </button>
      </div>
    </div>
    <div class="products-area-wrapper ">
     



    <form action="{{asset('/empresa/update/')}}/{{$editar_empresa->id}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nome da Empresa </label>
      <input type="text" class="form-control" id="Nome_Empresa" name="Nome_Empresa" value="{{$editar_empresa->Nome_Empresa}}" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">CNPJ</label>
      <input type="text" class="form-control" id="Cnpj" name="Cnpj" value="{{$editar_empresa->Cnpj}}" onkeypress="$(this).mask('00.000.000/0000-00')">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">E-mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" class="form-control" id="Email" name="Email"value="{{$editar_empresa->Email}}"  required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Telefone </label>
      <input type="text" class="form-control" id="Telefone" name="Telefone" value="{{$editar_empresa->Telefone}}" onkeypress="$(this).mask('(00) 00000-00009')">
    </div>

    <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Site </label>
      <input type="text" class="form-control" id="Site" name="Site" value="{{$editar_empresa->Site}}" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Endereço </label>
      <input type="text" class="form-control" id="Endereco" name="Endereco" value="{{$editar_empresa->Endereco}}"  required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Estado </label>
      <select class="form-control" id="Estado" value="{{$editar_empresa->Estado}}" name="Estado">
        <option value="Acre">Acre</option>
        <option value="Alagoas">Alagoas</option>
        <option value="Amapá">Amapá</option>
        <option value="Amazonas">Amazonas</option>
        <option value="Bahia">Bahia</option>
        <option value="Ceará">Ceará</option>
        <option value="Distrito Federal">Distrito Federal</option>
        <option value="Espírito Santo">Espírito Santo</option>
        <option value="Goiás">Goiás</option>
        <option value="Maranhão">Maranhão</option>
        <option value="Mato Grosso">Mato Grosso</option>
        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
        <option value="Minas GeraisG">Minas Gerais</option>
        <option value="Pará">Pará</option>
        <option value="Paraíba">Paraíba</option>
        <option value="Paraná">Paraná</option>
        <option value="Pernambuco">Pernambuco</option>
        <option value="Piauí">Piauí</option>
        <option value="Rio de Janeiro">Rio de Janeiro</option>
        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
        <option value="Rondônia">Rondônia</option>
        <option value="Roraima">Roraima</option>
        <option value="Santa Catarina">Santa Catarina</option>
        <option value="São Paulo">São Paulo</option>
        <option value="Sergipe">Sergipe</option>
        <option value="Tocantins">Tocantins</option>
        <option value="Estrangeiro">Estrangeiro</option>
    </select>   </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Cidade </label>
      <input type="text" class="form-control" id="Cidade" name="Cidade" value="{{$editar_empresa->Cidade}}" required>
    </div>
</div>
  </div>

<div class="upload">
  <input type="file" title="" id="image" name="image"  class="drop-here">
  <div class="text text-drop"><img src="{{asset('/img/empresa/')}}/{{$editar_empresa->image}}" width="250px"></div>
  <div class="text text-upload">Enviando</div>
  <svg class="progress-wrapper" width="300" height="300">
    <circle class="progress" r="115" cx="150" cy="150"></circle>
  </svg>
  <svg class="check-wrapper" width="130" height="130">
    <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
  </svg>
  <div class="shadow"></div>
</div>
  <div class="form-group">
    <div class="form-check">
   

      
    
  </div>
  <button class="btn btn-primary" type="submit">Cadastrar Produto</button>
</form>



      </div>
    </div>
  </div>
</div>
<!-- partial -->
@endsection