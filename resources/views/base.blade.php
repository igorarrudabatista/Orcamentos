
<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Sistema I/O</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
<link rel="stylesheet" href="{{asset('/css/upload-style.css')}}">
<link rel="stylesheet" href="{{asset('/css/dash-style.css')}}">



</head>
<body>
<!-- partial:index.partial.html -->
<div class="app-container">
  <div class="sidebar">
    <div class="sidebar-header">
      <div class="app-icon">
  <img src="https://webmonkey.com.br/wp-content/uploads/2022/03/Group-4-1.png" width="60px">
   <b>  Web Monkey </b>
   </div>
    </div>
    <ul class="sidebar-list">
      <li class="sidebar-list-item">
        <a href="{{asset('/dashboard')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          <span>Home</span>
        </a>
      </li>

      <li class="dropdown sidebar-list-item active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart">
              <path d="M21.21 15.89A10 10 0 1 1 8 2.83"/>
              <path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
 <span class="nav-label"> Empresa</span>
 <span class="caret"> </span> </a>
            <ul class="dropdown-menu sidebar-list">
                {{-- <li class="sidebar-list-item"> <a href="{{asset('/cadastrar_empresa')}}">Cadastrar a Minha Empresa</a></li> --}}
                <li class="sidebar-list-item"> <a href="{{asset('/minha_empresa/form_empresa')}}">Minha Empresa</a></li>

            </ul>
      </li>

      <li class="dropdown sidebar-list-item">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 22 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart">

              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" /></svg>
               <span class="nav-label"> Clientes</span>
 <span class="caret"> </span> </a>
            <ul class="dropdown-menu sidebar-list">
                {{-- <li class="sidebar-list-item"> <a href="{{asset('/cadastrar_empresa')}}">Cadastrar a Minha Empresa</a></li> --}}
                <li class="sidebar-list-item"> <a href="{{asset('/empresa/form_empresa_cliente')}}"> Cadastrar Clientes </a></li>
                <li class="sidebar-list-item"> <a href="{{asset('/empresa/show_clientes')}}"> Ver Clientes </a></li>

            </ul>
      </li>
      <li class="sidebar-list-item">
        <a href="{{asset('/usuarios')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 20 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart">
           
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
            <circle cx="9" cy="7" r="4" />
          </svg>
          <span>Usuários</span>
        </a>
      </li>
  
     

      <li class="dropdown sidebar-list-item ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
              <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
              <line x1="3" y1="6" x2="21" y2="6"/>
              <path d="M16 10a4 4 0 0 1-8 0"/></svg>
 <span class="nav-label"> Produtos</span>
 <span class="caret"> </span> </a>
            <ul class="dropdown-menu sidebar-list">
                <li class="sidebar-list-item"> <a href="{{asset('/produtos/create')}}">Criar Produto</a></li>
                <li class="sidebar-list-item"> <a href="{{asset('/produtos/produtos')}}">Ver Produtos</a></li>
            </ul>
      </li>

    
      <li class="dropdown sidebar-list-item ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/>
              <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
 <span class="nav-label"> Orçamentos</span>
 <span class="caret"> </span> </a>
            <ul class="dropdown-menu sidebar-list">
                <li class="sidebar-list-item"> <a href="{{asset('/orcamento/create_orcamento')}}">Criar Orçamento</a></li>
                <li class="sidebar-list-item"> <a href="{{asset('/orcamento/show_orcamento')}}">Ver Orçamentos</a></li>
            </ul>
      </li>
      <li class="sidebar-list-item">
        <a href="{{asset('/informacoes')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
          <span>Informações</span>
        </a>
      </li>
    </ul>
    <div class="account-info">
      <div class="account-info-picture">
 <img src="{{Auth::user()->profile_photo_url}}" alt="Account">  
      </div>
    <div class="account-info-name"> {{ Auth::user()->name }}</div> 
    

      <a href="#" class="account-info-more" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
      </a>
      <ul class="dropdown-menu sidebar-list">
          <li class="sidebar-list-item"> <a href="{{ route('profile.show') }}">Meu Perfil</a></li>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit(); " role="button">
                    <i class="fas fa-sign-out-alt"></i>
    
                    <li class="sidebar-list-item"> {{ __('Sair') }}
                    </a></li>
                </a>
            </div>
        </form>
      </ul>

      {{-- <button class="account-info-more">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
      
      </button> --}}
      
    </div>
  </div>



@yield('content')



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jqusery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="{{asset('/js/script.js')}}"></script>
<script src="{{asset('/js/upload-script.js')}}"></script>
<script src="{{asset('/js/form-empresa-script.js')}}"></script>
  

   <script> 
       $('#product').ddslick({
        width:"100%",
     
     });

</script> 




<script>

//Duplicar linha de Produto e Quantidade em Criar Orçamento
     
  $(document).ready(function(){
    let row_number = 1;
    $("#add_row").click(function(e){
      e.preventDefault();
      let new_row_number = row_number - 1;
      $('#product' + row_number).html($('#product' + new_row_number).html()).find('td:first-child');
      $('#products_table').append('<tr id="product' + (row_number + 1) + '"></tr>');
      row_number++;
    });
    $("#delete_row").click(function(e){
      e.preventDefault();
      if(row_number > 1){
        $("#product" + (row_number - 1)).html('');
        row_number--;
      }
    });
  });
  
  </script>


  <script>
    // Script do capiroto que funciona só para o 1o item. Os demais itens não são modificados.
   function custom_template1(obj){
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if(data && data['img_src']){
              img_src =data['img_src'];
              template = $("<div><br><br><img src=\"" + img_src + "\" style=\"background-color:#0000;width:100px;border-radius:8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);\"/> <br><br>  <p style=\"font-weight:600;font-size:14px;text-align:left;\">" + text + "</p> <br> </div>");
              return template;
            }
          }
   function custom_template2(obj){
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if(data && data['img_src']){
              img_src = data['img_src'];
              template = $("<img src=\"" + img_src + "\" style=\"width:50px;display:block;float:left;border-radius:8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);\"/><p style=\"font-weight:600;font-size:10px;text-align:center;\">" + text + "</p> <br> </div>");
              return template;
            }
          }
    var options = {
      'templateSelection': custom_template1,
      'templateResult':    custom_template2,
    }
    $('.id_select2_example').select2(options)({
      placeholder: "What???????", //placeholder

    });


  
  
  </script>

@include('sweetalert::alert')


</body>
</html>
