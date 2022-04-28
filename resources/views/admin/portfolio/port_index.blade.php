@extends('admin.layouts.master')

@section('content')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Portfolio</h1>
   </div>
   <div class="page-content">
      <div class="panel">
         <div class="panel-body container-fluid">
            <div class="col-lg-12">
               <!-- Example Bordered Table -->
               <div class="example-wrap">
                  <a href="{{ route('content.create') }}" id="addToTable" class="btn btn-outline btn-primary"><i class="icon wb-plus" aria-hidden="true"></i>Əlavə Et</a>
                  <a href="{{ route('admin.portcontent.trashed') }}" class="btn btn-warning btn-sm float-right"><i class="fa fa-trash"></i></a>
                  <div class="example table-responsive">
                     @if ($errors->any())
                     <div class="alert alert-danger">
                        <ul>
                           @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                     </div>
                     @endif
                     <table class="table table-bordered">
                        <thead>
                           <tr align="center">
                              <th>Sıra</th>
                              <th>Şekil</th>
                              <th>Başlıq</th>
                              <th>Url</th>
                              <th>Status</th>
                              <th class="text-nowrap">Əməliyyatlar</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($portfolio as $port)
                           <tr align="center">
                              <td>{{$port->sort}}</td>
                              <td><img src="{{asset($port->image)}}" alt="{{$port->title}}" width="75"></td>
                              <td>{{$port->title}}</td>
                              <td>{{$port->url}}</td>
                              <td><input class="status" data-id="{{$port->id}}" type="checkbox" data-on="Aktiv" data-off="Passiv" 
                                 data-onstyle="success" data-offstyle="danger" @if($port->status==1) checked @endif 
                                 data-toggle="toggle">
                              </td>
                              <td>
                                 <a href="{{ route('content.edit', $port->id) }}" class="btn btn-outline-primary edit-click"><i class="fa fa-edit"></i></a>
                                 <a data-id="{{$port->id}}" class="btn btn-outline-danger delete-click"><i class="fa fa-trash dan"></i></a>
                              </td>
                           </tr>
                           @endforeach 
                        </tbody>
                     </table>
                  </div>        
                  <div class="float-right">
                  {{ $portfolio->links('pagination::bootstrap-4') }}
                  </div>
               </div>
            </div>
         </div>
         <!-- End Example Bordered Table -->
      </div>
   </div>
</div>

<script>
   $(function() {
   
 
      $('.status').change(function() {
         id = $(this)[0].getAttribute('data-id');
         status = $(this).prop('checked');
         $.get("{{route('admin.portcontent.status')}}",{id:id,status:status}, function(data, status){
         console.log(data);
         });
      });
   
   
      $('.delete-click').click(function() {
         id = $(this)[0].getAttribute('data-id');
         $("#deleteForm").attr({action: '/admin/porfolio/content/'+id});
         $('#deleteExampleFormModal').modal();
      });
   
   })
</script>
<!-- Sil Modal -->
<div class="modal fade modal-danger" id="deleteExampleFormModal" aria-hidden="true" aria-labelledby="exampleModalDanger" role="dialog" tabindex="-1">
   <div class="modal-dialog">
      <form method="POST" id="deleteForm" class="modal-content" enctype="multipart/form-data">
         @csrf
         @method('DELETE')
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
               <h4 class="modal-title">Portfolionun Silinməsinə Əminsinizmi?</h4>
            </div>
            <div class="modal-body">
               <p></p>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Bağla</button>
               <button type="submit" class="btn btn-primary">Sil</button>
            </div>
         </div>
      </form>
   </div>
</div>
<!-- End Modal -->
@endsection