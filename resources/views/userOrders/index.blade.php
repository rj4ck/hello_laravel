@extends('layout.app')


@section('content')

  <div class="container-fluid">
    <div class="fade-in">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <!--<div class="card-header"><i class="fa fa-align-justify"></i> Simple Table</div>-->
            <div class="card-body">
              <table class="table table-responsive-sm table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th width="280px">Action</th>
                  </tr>
                </thead>

               <tbody>
                 @foreach ($userOrders->sortBy('orderID') as $book)
                   <tr>
                     <td>{{ str_pad($book->orderID, 5, '0', STR_PAD_LEFT) }}</td>
                     <td>{{ $book->status }}</td>
                     <td>{{ $book->name }}</td>
                     <td>{{ $book->detail }}</td>
                   </tr>
                 @endforeach
               </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2>Orden de Compra</h2>
      </div>
      <div class="pull-right">
        <a class="btn btn-success" href="#"> Crear orden</a>
      </div>
    </div>
  </div>


  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif




@endsection
