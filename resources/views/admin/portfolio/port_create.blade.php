@extends('admin.layouts.master')

@section('content')
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Portfolio Əlavə Etmə Paneli</h1>
            <div class="lang mb-4 d-flex">
                <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">AZ</a>
                <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">EN</a>
                <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">RU</a>
            </div>
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
                            <form method="POST" action="{{ route('content.store') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="lang" id="lang" value="{{ app()->getLocale() }}">
                                <div class="translatable-content mb-4" style="width: 100%">
                                    <div class="example-wrap">
                                        <h4 class="example-title">Başlıq</h4>
                                        <input type="hidden" name="title_lang" value='{"az":"","ru":"","en":""}'>
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                                            required />
                                    </div>
                                    <div class="example-wrap">
                                        <h4 class="example-title">Açıqlama</h4>
                                        <input type="hidden" name="description_lang" value='{"az":"","ru":"","en":""}'>
                                        <input type="text" class="form-control" name="description"
                                            value="{{ old('description') }}" required />
                                    </div>
                                </div>
                                <div class="example-wrap">
                                    <h4 class="example-title">Kateqoriyalar</h4>
                                    <select name="categories[]" class="form-control js-example-basic-multiple"
                                        multiple="multiple">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="example-wrap">
                                    <h4 class="example-title">Layihə adı</h4>
                                    <input type="text" class="form-control" name="project_name"
                                        value="{{ old('project_name') }}" required />
                                </div>
                                <div class="example-wrap">
                                    <h4 class="example-title">Url</h4>
                                    <input type="url" class="form-control" name="url" value="{{ old('url') }}"
                                        required />
                                </div>

                                <div class="example-wrap">
                                    <h4 class="example-title">Hover rəng kodu</h4>
                                    <input type="text" class="form-control" name="color_code"
                                        value="{{ old('color_code') }}" required />
                                </div>
                                <div class="example-wrap">
                                    <h4 class="example-title">Sıra</h4>
                                    <input type="number" class="form-control" name="sort" value="{{ old('sort') }}"
                                        required />
                                </div>
                                <div class="example-wrap">
                                    <h4 class="example-title">Şəkil</h4>
                                    <input type="file" class="filestyle" name="image" data-buttonname="btn-secondary"
                                        required />
                                </div>
                                <div class="example-wrap">
                                    <h4 class="example-title">Şəkil (Mobil)</h4>
                                    <input type="file" class="filestyle" name="image_mob"
                                        data-buttonname="btn-secondary" required />
                                </div>
                                <button type="submit" class="btn btn-animate btn-animate-side btn-success float-right"
                                    id="uploadBtn">
                                    <span><i class="icon wb-edit" aria-hidden="true"></i>Əlavə Et</span>
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
            let description_lang = JSON.parse($('[name="description_lang"]').val());
            e.preventDefault();
            $('.lang').find('a').removeClass('active');
            $(this).addClass('active');
            let lang = $(this).attr('href');
            $('#lang').val(lang);
            $('[name="title"]').val(title_lang[lang]);
            $('[name="description"]').val(description_lang[lang]);
        })
    </script>
    <script type="text/javascript" src="/back/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="/back/tinymce.js"></script>
@endpush
