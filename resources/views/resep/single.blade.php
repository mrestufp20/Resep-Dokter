@extends('layouts.template')

@section('content')
    <aside class="main-sidebar">
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../../images/user-icon1.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->username }}</p>
            <p>{{ Auth::user()->role }}</p>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN MENU</li>
          <li class="active">
            <a href="/anggota">
              <img class="logo-menu" src="../../images/anggota.png">
              <span>Anggota Koperasi</span>
            </a>
          </li>
          <li>
            <a href="/pinjaman">
              <img class="logo-menu" src="../../images/borrow.png">
              <span>Pinjaman</span>
            </a>
          </li>
          <li>
            <a href="/angsuran">
              <img class="logo-menu" src="../../images/calendar.png">
              <span>Angsuran</span>
            </a>
          </li>
          <li>
            <a href="/simpanan">
              <img class="logo-menu" src="../../images/simpanan.png">
              <span>Simpanan</span>
            </a>
          </li>
          <li>
            <a href="/petugas_koperasi">
                <img class="logo-menu" src="../../images/admin-icon.png">
                <span>Petugas Koperasi</span>
            </a>
          </li>
             @if(Auth::user()->role == 'admin')
            <li>
            <a href="/register">
              <i class="fa fa-address-book-o" aria-hidden="true" style="font-size: 20px; color: #fff;">
                <span style="margin-left: 10px; color: #b8c7ce">Register</span>
              </i>
            </a>
          </li>
                @endif
            
          <li>
            <a href="/logout">
              <i class="fa fa-power-off" aria-hidden="true" style="font-size: 20px; color: #fff;">
                <span style="margin-left: 10px; color: #b8c7ce">Logout</span>
              </i>
            </a>
          </li>
        </ul>
      </section>
    </aside>

    <div class="content-wrapper">
      <div class="container">
        <section class="content-header">
          <h1>
            <b>Detail Anggota</b>
          </h1>
        </section>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-12 table-responsive">                
              <table class="table table-hover z-depth-3"> 
                <tr>
                  <th>ID Anggota</th>
                  <td>{{ $anggota->id_anggota }}</td>
                </tr>
                <tr>
                  <th>Nama Anggota</th>
                  <td>{{ $anggota->nama }}</td>
                </tr>
                <tr>
                  <th>Alamat Anggota</th>
                  <td>{{ $anggota->alamat }}</td>
                </tr> 
                <tr>
                  <th>Tgl Lahir</th>
                  <td>{{ $anggota->tgl_lhr }}</td>
                </tr>
                <tr>
                  <th>Tempat Lahir</th>
                  <td>{{ $anggota->tmp_lhr }}</td>
                </tr> 
                <tr>
                  <th>Jenis Kelamin</th>
                  <td>{{ $anggota->j_kel }}</td>
                </tr> 
                <tr>
                  <th>Status</th>
                  <td>{{ $anggota->status }}</td>
                </tr> 
                <tr>
                  <th>No Tlp</th>
                  <td>{{ $anggota->no_tlp }}</td>
                </tr> 
                <tr>
                  <th>Ket</th>
                  <td>{{ $anggota->ket }}</td>
                </tr>  
              </table>
              <a href="/anggota" class="btn btn-sm btn-primary">Back</a>           
            </div>     
          </div>
        </div>
      </section>
@endsection
