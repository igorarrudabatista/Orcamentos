@extends('base')

@section('content')
  <div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText">Editar Produto</h1>
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
     



    <form action="{{asset('/produtos/update/')}}/{{$editar_produto->id}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nome do Produto </label>
      <input type="text" class="form-control" id="Nome_Produto" name="Nome_Produto" value="{{$editar_produto->Nome_Produto}}" required >
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Categoria do Produto</label>
      <input type="text" class="form-control" id="Categoria_Produto" name="Categoria_Produto" value="{{$editar_produto->Categoria_Produto}}" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Preço do Produto</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">R$</span>
        </div>
        <input type="text" class="form-control" id="Preco_Produto" value="{{$editar_produto->Preco_Produto}}" name="Preco_Produto" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Quantidade </label>
      <input type="text" class="form-control" id="Quantidade_Produto" value="{{$editar_produto->Quantidade_Produto}}" name="Quantidade_Produto"  required>
    </div>
    <div class="col-md-3 mb-4">
      <label for="validationDefault04"> Produto em Estoque? </label>
      <select name="Estoque_Produto" id="Estoque_Produto" value="{{$editar_produto->Estoque_Produto}}" class="form-control">
        <option value="Não"> Não</option>
        <option value="Sim" {{$editar_produto-> private==1 ? "selected='selected'" : "" }} > Sim </option>
      </select>    
    </div> 

    <div class="col-md-3 mb-4">
      <label for="Status_Produto"> Status do Produto </label>
      <select  id="Status_Produto" name="Status_Produto" value="{{$editar_produto->Status_Produto}}" class="form-control">
        <option value="0"> Desativado </option>
        <option value="1" {{$editar_produto-> private==1 ? "selected='selected'" : "" }}  > Ativo </option>
      </select>    
    </div> </div>


        <div class="col-md-3 mb-4">
        
        </div>
         <div class="col-md-3 mb-4">

            <div class="upload">
              <input type="file" title="" id="image" name="image"  class="drop-here">
              <div class="text text-drop"> <img src="/img/produtos/{{$editar_produto->image}}" width="200px"  /> </div>
              
              <div class="text text-upload">Enviando</div>
              <svg class="progress-wrapper" width="300" height="300">
                <circle class="progress" r="115" cx="150" cy="150"></circle>
              </svg>
              <svg class="check-wrapper" width="130" height="130">
                <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
              </svg>
              <div class="shadow"></div>

     
    
      
    
  </div>
  <button class="btn btn-primary" type="submit">Cadastrar Produto</button>
</form>



<!-- partial -->
@endsection