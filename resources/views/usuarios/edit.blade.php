@extends('base')

@section('content')
<style>
    body {
  background-color: #eff3f6;
}

.navbar {
  margin-bottom: 0px !important;
}

/* Breadcrumbs */
.breadcrumb {
  background-color: #1397fb;
}

.breadcrumb ol {
  margin-top: 5px;
  margin-bottom: 5px;
}

.breadcrumb li {
  display: inline;
text-align: -webkit-match-parent;
}

.breadcrumb li a {
  color: #ffffff;
}

/* Table Content */
table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0px 8px;
}

th {
    text-align: left;
    padding: 5px;
    text-transform: uppercase;
    font-weight: 100;
    font-size: 11px;
    color: #aab3bb;
}

tr {
  box-shadow: 1px 1px 1px rgba(228, 228, 228, 0.25);
}

tr thead {
  background: transparent !important;
  border-color: transparent !important;
}

tr td {
  background-color: #ffffff;
  border-bottom: 1px solid #e7e7e7;
  font-size: 12px;
  font-weight: bold;
}

td {
  padding: 13px;
}

img {
  height: 30px;
}

/* Icons */
.fa {
    padding: 0px 9px;
    color: #c1c4c9;
    font-size: 1.1em;
}

.arrow-right {
  font-size: 1.9em;
  float: right;
}


/* Circle */
.large {
  background: #20c73a;
  width: 18px;
  height: 18px;
}

.medium {
  margin-top: 2px;
  background: #ffffff;
  width: 14px;
  height: 14px;
}

.small {
  margin-top: 2px;
  background: #20c73a;
  width: 10px;
  height: 10px;
}

.circle {
  display: inline-block;
  text-align: center;
  border-radius:50%;
}</style>


<div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText">Cadastro de usuários</h1>
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
          <button class="action-button filter jsFilter"><span>Filter</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button>
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

 
 </div>
 
 
 <x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Profile') }}
      </h2>
  </x-slot>

  <div>
      <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
          @if (Laravel\Fortify\Features::canUpdateProfileInformation())
              @livewire('profile.update-profile-information-form')

              <x-jet-section-border />
          @endif

          @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
              <div class="mt-10 sm:mt-0">
                  @livewire('profile.update-password-form')
              </div>

              <x-jet-section-border />
          @endif

          @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
              <div class="mt-10 sm:mt-0">
                  @livewire('profile.two-factor-authentication-form')
              </div>

              <x-jet-section-border />
          @endif

          <div class="mt-10 sm:mt-0">
              @livewire('profile.logout-other-browser-sessions-form')
          </div>

          @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
              <x-jet-section-border />

              <div class="mt-10 sm:mt-0">
                  @livewire('profile.delete-user-form')
              </div>
          @endif
      </div>
  </div>
</x-app-layout>



{{-- <div class="container">
  <div class="form-group" x-data="{ fileName: '' }">
    <div class="input-group shadow">
      <span class="input-group-text px-3 text-muted"><i class="fas fa-image fa-lg"></i></span>
      <input type="file" x-ref="file" @change="fileName = $refs.file.files[0].name" name="img[]" class="d-none">
      <input type="text" class="form-control form-control-lg" placeholder="Upload Image" x-model="fileName">
      <button class="browse btn btn-primary px-4" type="button" x-on:click.prevent="$refs.file.click()"><i class="fas fa-image"></i> Browse</button>
    </div>
  </div>
</div>
--}}

{{-- <div class="upload">
  <input type="file" title="" id="image" name="image"  class="drop-here">
  <div class="text text-drop">Foto</div>
  <div class="text text-upload">Enviando</div>
  <svg class="progress-wrapper" width="300" height="300">
    <circle class="progress" r="115" cx="150" cy="150"></circle>
  </svg>
  <svg class="check-wrapper" width="130" height="130">
          <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
        </svg>
        <div class="shadow"></div>
      </div>
    </div>
    
  </div> --}}
  
@endsection 