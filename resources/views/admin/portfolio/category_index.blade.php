@extends('admin.layouts.master')

@section('content')
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Kateqoriyalar</h1>
        </div>
        <div class="page-content">
            <div class="panel">
                <div class="panel-body container-fluid">
                    <div class="col-lg-12">
                        <!-- Example Bordered Table -->
                        <div class="example-wrap">
                            <button id="addToTable" data-target="#exampleFormModal" data-toggle="modal"
                                class="btn btn-outline btn-primary">
                                <i class="icon wb-plus" aria-hidden="true"></i>Əlavə Et</button>
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
                                <table class="table table-bordered" id="datatable-buttons">
                                    <thead>
                                        <tr align="center">
                                            <th>Sıra</th>
                                            <th>Başlıq</th>
                                            <th>Slug</th>
                                            <th>status</th>
                                            <th class="text-nowrap">Əməliyyatlar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr align="center">
                                                <td>{{ $category->sort }}</td>
                                                <td>{{ $category->title }}</td>
                                                <td>{{ $category->slug }}</td>
                                                <td><input class="status" data-id="{{ $category->id }}"
                                                        type="checkbox" data-on="Aktiv" data-off="Passiv"
                                                        data-onstyle="success" data-offstyle="danger"
                                                        @if ($category->status == 1) checked @endif
                                                        data-toggle="toggle">
                                                </td>
                                                <td>
                                                    <a data-id="{{ $category->id }}"
                                                        class="btn btn-outline-primary edit-click"><i
                                                            class="fa fa-edit pri"></i></a>
                                                    <a data-id="{{ $category->id }}"
                                                        class="btn btn-outline-danger delete-click"><i
                                                            class="fa fa-trash dan"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                            <div class="float-right">
                            </div>
                        </div>
                    </div>
                </div>


                <!-- End Example Bordered Table -->
            </div>
        </div>
    </div>
    <!-- End Page -->
    <script>
        $(function() {

            $('.edit-click').click(function() {
                id = $(this)[0].getAttribute('data-id');
                $.ajax({
                    type: 'GET',
                    url: '/admin/porfolio/category/' + id + '/edit',
                    success: function(data) {
                        console.log(data);
                        $("#editForm").attr({
                            action: '/admin/porfolio/category/' + id
                        });
                        $('#lang').val(data.lang);
                        $('#title').val(data.title);
                        $('#sort').val(data.sort);
                        $('#editexampleFormModal').modal();
                    }
                });
            });

            $('.status').change(function() {
                id = $(this)[0].getAttribute('data-id');
                status = $(this).prop('checked');
                $.get("{{ route('admin.portcategory.status') }}", {
                    id: id,
                    status: status
                }, function(data, status) {
                    console.log(data);
                });
            });

            $('.delete-click').click(function() {
                id = $(this)[0].getAttribute('data-id');
                $("#deleteForm").attr({
                    action: '/admin/porfolio/category/' + id
                });
                $('#deleteExampleFormModal').modal();
            });

        })
    </script>
    <!-- Sil Modal -->
    <div class="modal fade modal-danger" id="deleteExampleFormModal" aria-hidden="true" aria-labelledby="exampleModalDanger"
        role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <form method="POST" id="deleteForm" class="modal-content" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title">Kateqoriyanın Silinməsinə Əminsinizmi?</h4>
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

    <!--Redakte Et Modal -->
    <div class="modal fade" id="editexampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
        role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple">
            <form method="POST" id="editForm" class="modal-content" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <input type="hidden" name="cat_type" value="0">
                <input type="hidden" name="lang" value="0">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="exampleFormModalLabel">Kateqoriya Redaktə Etmə Paneli</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12 form-group">
                            <input type="text" class="form-control" name="title" id="title" placeholder="Başlıq Əlavə Et"
                                required />
                        </div>
                        <div class="col-xl-12 form-group">
                            <input type="number" class="form-control" name="sort" id="sort" placeholder="Sıra Əlavə Et"
                                required="required" />
                        </div>
                        <div class="col-md-12 float-right">
                            <button type="submit" class="btn btn-outline-info btn-block">Redaktə Et</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End -->

    <!--Elave Et Modal -->
    <div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
        role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple">
            <form method="POST" action="{{ route('category.store') }}" class="modal-content"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="cat_type" value="0">
                <input type="hidden" name="lang" id="lang" value="{{ app()->getLocale() }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="exampleFormModalLabel">Kateqoriya Əlavə Etmə Paneli</h4>
                </div>
                <div class="modal-body">
                    <div class="lang mb-4 d-flex">
                        <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">AZ</a>
                        <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">EN</a>
                        <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">RU</a>
                    </div>
                    <div class="row">
                        <div class="translatable-content" style="width: 100%">
                            <div class="col-xl-12 form-group">
                                <input type="hidden" name="title_lang" value='{"az":"","ru":"","en":""}'>
                                <input type="text" class="form-control" name="title" id="title"
                                    value="{{ old('title') }}" placeholder="Başlıq Əlavə Et" required="required" />
                            </div>
                        </div>
                        <div class="col-xl-12 form-group">
                            <input type="number" class="form-control" name="sort" id="sort" value="{{ old('sort') }}"
                                placeholder="Sıra Əlavə Et" required="required" />
                        </div>
                        <div class="col-md-12 float-right">
                            <button type="submit" class="btn btn-outline-info btn-block">Əlavə Et</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End -->

    <script>
        $('.translatable-content input').on('keyup', function(e) {
            let lang = $('#lang').val();
            let value = $(this).val();
            let name = $(this).attr('name');
            let lang_val = JSON.parse($(this).prev().val());
            lang_val[lang] = value;
            $(this).prev().val(JSON.stringify(lang_val));
        });

        $('.lang a').on('click', function(e) {
            let title_lang = JSON.parse($('[name="title_lang"]').val());
            e.preventDefault();
            $('.lang').find('a').removeClass('active');
            $(this).addClass('active');
            let lang = $(this).attr('href');
            $('#lang').val(lang);
            $('[name="title"]').val(title_lang[lang]);
        })
    </script>
@endsection
