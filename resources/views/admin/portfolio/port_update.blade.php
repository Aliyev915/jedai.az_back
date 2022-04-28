@extends('admin.layouts.master')

@section('content')
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">Portfolio Redaktə Etmə Paneli</h1>
   </div>
   <div class="page-content">
      <!-- Panel Form Elements -->
      <div class="panel">
         <div class="panel-body container-fluid">
            <div class="row row-lg">
               <div class="col-md-12 col-lg-12">
                  @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
                  @endif
                  <!-- Example Rounded Input -->
                  <form method="POST" action="{{ route('content.update', $portfolio->id) }}" enctype="multipart/form-data">
                     @csrf
                     @method('PATCH')
                     <input type="hidden" name="lang" value="0">
                     <div class="example-wrap">
                        <h4 class="example-title">Başlıq</h4>
                        <input type="text" class="form-control" name="title" value="{{$portfolio->title}}" required />
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Kateqoriyalar</h4>
                        <select name="categories[]" class="form-control js-example-basic-multiple" multiple="multiple" required>
                           @foreach ($categories as $category)
                              <option value="{{ $category->id }}" @foreach($cat_id as $cat) {{($category->id == $cat) ? 'selected' : ''}} @endforeach>{{ $category->title }}</option>
                           @endforeach 
                        </select>
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Layihə adı</h4>
                        <input type="text" class="form-control" name="project_name" value="{{$portfolio->project_name}}" required/>
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Url</h4>
                        <input type="text" class="form-control" name="url" value="{{$portfolio->url}}" required />
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Açıqlama</h4>
                        <input type="text" class="form-control" name="description" value="{{$portfolio->description}}" required />
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Hover rəng kodu</h4>
                        <input type="text" class="form-control" name="color_code" value="{{$portfolio->color_code}}" required/>
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Sıra</h4>
                        <input type="number" class="form-control" name="sort" value="{{$portfolio->sort}}" required/>
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Cari Şəkil</h4>
                        <img width="150" src="{{asset($portfolio->image)}}" />         
                     </div>
                     <div class="example-wrap">
                        <h4 class="example-title">Şəkil</h4>
                        <input type="file" class="filestyle" name="image"  data-buttonname="btn-secondary"/> 
                    </div>
                    <div class="example-wrap">
                     <h4 class="example-title">Cari Şəkil (Mobil)</h4>
                     <img width="150" src="{{asset($portfolio->image_mob)}}" />         
                  </div>
                  <div class="example-wrap">
                     <h4 class="example-title">Şəkil (Mobil)</h4>
                     <input type="file" class="filestyle" name="image_mob"  data-buttonname="btn-secondary"/> 
                 </div>
                     <button type="submit" class="btn btn-animate btn-animate-side btn-success float-right" id="uploadBtn">
                     <span><i class="icon wb-edit" aria-hidden="true"></i>Redaktə Et</span>
                     </button>
               </form>
                  <!-- End Exampleed Input -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Page -->
@endsection

@push('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
   $(function() {
      $('.js-example-basic-multiple').select2();
    });
</script>
<script type="text/javascript" src="/back/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="/back/tinymce.js"></script>
@endpush
