@extends('main')

@section('title','Data Barang')

@section('breadcrumbs')



<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Barang</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
    

@section('content')
<div class="row m-2">
    <!-- /# column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <span class="text-primary"></span> 

                    <a href="" class="btn btn-outline-info mb-2 mr-2 fa fa-plus" data-toggle="modal" data-target="#exampleModal"> Tambah Barang</a>
                   
                   </div> 
               
                <div class="table-responsive">
                    <table class="table table-hover" id="datatable">
                        <thead>
                            <tr>
                                <th>Aksi</th>
                                <th>Foto</th>
                                <th>Nama Barang</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>  
                                <th>Stok</th>  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                            <tr>
                                <td>
                                <a href="" class="text-primary lead tabedit" data-toggle="modal" data-target="#contohModal" title="Edit Data Detail"><i class="fa fa-edit"> | </i></a> 
                             
                                <form action="{{ url('databarang/'.$data->id) }}" method="post" class="d-inline" onsubmit="return confirm('Data Akan Dihapus?')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                                <td>
                                <a href="{{ asset('/img/'. $data->foto) }}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a>
                                </td>
                                <td>{{$data->nama_barang}}</td>
                                <td>{{$data->harga_beli}}</td>
                                <td>{{$data->harga_jual}}</td>
                                <td>{{$data->stok}}</td>        
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>        
                </div>
            </div>
        </div>

    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            
            <form action="{{route ('simpan-barang') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('databarang.create-barang')
            
            <div class="modal-footer">
        
            <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
        </div>
    </form>
    </div>


        <!-- Modal -->
        <div class="modal fade" id="contohModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                
                <form action="{{route ('simpan-barang') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @include('databarang.edit-barang')
                
                <div class="modal-footer">
            
                <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
            </div>
        </form>
        </div>
   
<script type="text/javascript">
$(document).ready( function () {
        $('#datatable').DataTable();
    } );
    </script>

@endsection

