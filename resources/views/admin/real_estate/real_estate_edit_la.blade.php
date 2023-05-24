@extends('admin.admin_master')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @if (Auth::user()->can('property.edit'))
        <div class="page-content">
            <div class="container post-container">
                <form method="post" action="{{ route('update.lao.realestate') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="realestateId" value="{{ $realestate->id }}">
                    <div class="row">

                        <!-- Translation Input-->
                        <div class="col-lg-12 right-container" style="border-radius:6px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="card-header pb-3 pt-3">
                                            @lang('backend.edit_post_in_english')
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-3" style="display: flex; flex-direction:column">
                                                <label for="example-text-input"
                                                    class="col-sm-12 col-form-label">@lang('backend.realestate_title')
                                                    &nbsp; <span class="fi fi-us"></span>&nbsp; (EN)</label>
                                                <div class="col-sm-12">
                                                    <input type="hidden" name="en_id" value="{{ $en_realestate->id }}">
                                                    <input class="form-control" name="en_title" type="text"
                                                        value="{{ $en_realestate->title }}" id="example-text-input"
                                                        placeholder=" @lang('backend.realestate_title_placeholder') ">
                                                    <span class="text-danger">
                                                        @error('en_title')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row mb-3" style="display: flex; flex-direction:column">
                                                <label for="example-text-input"
                                                    class="col-sm-12 col-form-label">@lang('backend.realestate_address')
                                                    &nbsp; <span class="fi fi-us"></span>&nbsp; (EN)</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" name="en_address" type="text"
                                                        value="{{ $en_realestate->address }}" id="example-text-input"
                                                        placeholder=" @lang('backend.realestate_address_placeholder') ">
                                                    <span class="text-danger">
                                                        @error('en_address')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row mb-3" style="display: flex; flex-direction:column">
                                                <label for="example-text-input" class="col-sm-6 col-form-label">
                                                    @lang('backend.description') &nbsp; <span class="fi fi-us"></span>&nbsp;
                                                    (EN)</label>
                                                <div class="col-sm-12">
                                                    <textarea id="elm1" name="en_description" placeholder="@lang('backend.realestate_desc_placeholder')"
                                                        style="border: 1px solid red; font-family:'Noto Sans Lao', Courier, monospace">{{ $en_realestate->description }}</textarea>
                                                </div>
                                                <span class="text-danger">
                                                    @error('en_description')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tranlation Input -->
                                    <div class="col-12 col-sm-6">
                                        {{-- <div class="card-header pt-2.5 pb-3">
                                            <select class="custom-select" name="language" value="{{ old('language') }}"
                                                style="width:100%; border-radius:10px">
                                                <option value="">@lang('backend.choose_language_for_translation')</option>
                                                <option value="la">&nbsp; <span class="fi fi-la"></span>&nbsp;</span> Lao</option>
                                                <option value="ch">&nbsp; <span class="fi fi-ch"></span>&nbsp; Chinese</option>
                                            </select>
                                        </div> --}}
                                        <div class="card-header pb-3 pt-3">
                                            @lang('backend.translate_into_lao')
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-3" style="display: flex; flex-direction:column">
                                                <label for="example-text-input"
                                                    class="col-sm-12 col-form-label">@lang('backend.realestate_title')
                                                    &nbsp; <span class="fi fi-la"></span>&nbsp; (LA)</label>
                                                <div class="col-sm-12">
                                                    <input type="hidden" name="la_id" value="{{ $la_realestate->id }}">
                                                    <input class="form-control" name="title" type="text"
                                                        value="{{ $la_realestate->title }}" id="example-text-input"
                                                        placeholder=" @lang('backend.realestate_title_placeholder') ">
                                                    <span class="text-danger">
                                                        @error('title')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row mb-3" style="display: flex; flex-direction:column">
                                                <label for="example-text-input"
                                                    class="col-sm-12 col-form-label">@lang('backend.realestate_address')
                                                    &nbsp; <span class="fi fi-la"></span>&nbsp; (LA)</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" name="address" type="text"
                                                        value="{{ $la_realestate->address }}" id="example-text-input"
                                                        placeholder=" @lang('backend.realestate_address_placeholder') ">
                                                    <span class="text-danger">
                                                        @error('address')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row mb-3" style="display: flex; flex-direction:column">
                                                <label for="example-text-input" class="col-sm-6 col-form-label">
                                                    @lang('backend.description') &nbsp; <span class="fi fi-la"></span>&nbsp;
                                                    (LA)</label>
                                                <div class="col-sm-12">
                                                    <textarea id="elm2" name="description" placeholder="@lang('backend.realestate_desc_placeholder')" style="border: 1px solid red">{{ $la_realestate->description }}</textarea>
                                                </div>
                                                <span class="text-danger">
                                                    @error('description')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Translation Input -->

                            <!-- price, area, location,images -->
                            <div class="col-lg-12 right-container" style="border-radius:6px;">
                                <div class="container">
                                    <div class="card-body">
                                        <div class="feature-image">
                                            <div class="row mb-3">
                                                <div class="col-6">
                                                    <label for="example-text-input"
                                                        class="col-sm-12 col-form-label">@lang('backend.realestate_price')
                                                    </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="price" type="number"
                                                            value="{{ $realestate->price }}" step="0.00000000001"
                                                            id="example-text-input" placeholder=" @lang('backend.realestate_price_placeholder') ">
                                                        <span class="text-danger">
                                                            @error('price')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="example-text-input"
                                                        class="col-sm-12 col-form-label">@lang('backend.realestate_area')
                                                    </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="area" type="number"
                                                            value="{{ $realestate->area }}" step="0.00000000001"
                                                            id="example-text-input" placeholder=" @lang('backend.realestate_area_placeholder') ">
                                                        <span class="text-danger">
                                                            @error('area')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-6">
                                                    <label for="example-text-input"
                                                        class="col-sm-12 col-form-label">@lang('backend.latitude')
                                                    </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="latitude" type="number"
                                                            value="{{ $realestate->latitude }}" step="0.00000000001"
                                                            id="example-text-input" placeholder=" @lang('backend.latitude_placeholder') ">
                                                        <span class="text-danger">
                                                            @error('latitude')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <label for="example-text-input"
                                                        class="col-sm-12 col-form-label">@lang('backend.longitude')
                                                    </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="longitude" type="number"
                                                            value="{{ $realestate->longitude }}" step="0.00000000001"
                                                            id="example-text-input" placeholder=" @lang('backend.longitude_placeholder') ">
                                                        <span class="text-danger">
                                                            @error('longitude')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <label for="example-text-input"
                                                        class="col-sm-12 col-form-label">@lang('backend.map')
                                                    </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="map" type="text"
                                                            value="{{ $realestate->map }}" id="example-text-input"
                                                            placeholder=" @lang('backend.map_placeholder') ">
                                                        <span class="text-danger">
                                                            @error('map')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 mul_img_upload">
                                                <div style="width: 20%">
                                                    <label for="realestate_images"
                                                        class="col-sm-2 col-form-label upload_label">
                                                        <i class="fas fa-upload"></i>
                                                        <p>@lang('backend.add_multiple_images')</p></span>&nbsp;&nbsp;<span>(
                                                            @lang('backend.max_size'):
                                                            2MB)</span>
                                                    </label>
                                                    <input class="form-control" multiple name="realestate_images[]"
                                                        type="file" id="realestate_images"
                                                        style="display: none; visibility:none">
                                                </div>
                                                <div class="preview_images">
                                                    <div class="images-preview-div">
                                                        @foreach ($realestate_images as $mul_image)
                                                            <a href="{{ route('delete.realestate.single.image', $mul_image->id) }}"
                                                                class="delete_image" id="delete"><i
                                                                    class="fas fa-trash"
                                                                    style="color: rgb(255, 0, 0)"></i></a>
                                                            <img src="{{ asset($mul_image->image) }}" alt="">
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-danger">
                                                @error('realestate_images')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End price, area, location,images -->

                            <!-- Select category and Image -->
                            <div class="col-lg-12 right-container" style="border-radius:6px;">
                                <div class="container">
                                    <div class="card-body">
                                        <div class="feature-image">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="fea-img-header">
                                                        <span>@lang('backend.select_category')</span>&nbsp;&nbsp;
                                                        <a href="{{ route('category') }}" type="button"
                                                            class="btn btn-success btn-sm"><i
                                                                class="fas fa-plus"></i>&nbsp;@lang('backend.create_button')</a>
                                                    </div>
                                                    <div class="mt-3"
                                                        style="display: flex; align-items:center; justify-content:space-between">
                                                        <select class="custom-select" name="category"
                                                            value="{{ old('category') }}"
                                                            style="width:100%; padding:10px; border-radius:5px">
                                                            @foreach ($categories as $item)
                                                                <option value="{{ $item->id }}"
                                                                    {{ $item->id == $realestate->category_id ? 'selected' : '' }}>
                                                                    {{ $item->name }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <span class="text-danger">
                                                        @error('category')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="col-6">
                                                    <div class="fea-img-header mt-2">
                                                        <span>@lang('backend.public_post')</span>
                                                    </div>
                                                    <div class="mt-3 publish-status">
                                                        <span>Publish</span>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="status" id=""
                                                                {{ $realestate->publish == 1 ? 'checked' : '' }}
                                                                @if (!is_null('checked')) value="1" @endif>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="fea-img-header mt-2">
                                                        <span>Hot properties</span>
                                                    </div>
                                                    <div class="mt-3 publish-status">
                                                        <span>Hot properties</span>
                                                        <div class="">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hot_property" id=""
                                                                {{ $realestate->hot_property == 1 ? 'checked' : '' }}
                                                                @if (!is_null('checked')) value="1" @endif>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="fea-img-header mt-2">
                                                        <span>Recommended Properties</span>
                                                    </div>
                                                    <div class="mt-3 publish-status">
                                                        <span>Recommended Properties</span>
                                                        <div class="">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="recommended_property" id=""
                                                                {{ $realestate->recommended_property == 1 ? 'checked' : '' }}
                                                                @if (!is_null('checked')) value="1" @endif>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-5">
                                                <div class="col-6">
                                                    <div class="fea-img-header">
                                                        <span>@lang('backend.select_tags')</span>&nbsp;&nbsp;<a
                                                            href="{{ route('tag') }}" type="button"
                                                            class="btn btn-success btn-sm"><i
                                                                class="fas fa-plus"></i>&nbsp;@lang('backend.create_button')</a>
                                                    </div>
                                                    <select class="select mt-3 tag-selector" name="tags[]" multiple
                                                        style="width:100%">
                                                        @foreach ($tags as $item)
                                                            <option value="{{ $item->id }}"
                                                                style="font-family:Noto Sans Lao" data-toggle="tooltip"
                                                                data-placement="top" title="Multiple select: Ctrl + click"
                                                                @if (!is_null($realestate_tag)) @foreach ($realestate_tag as $tag_id)
                                                            {{ $item->id == $tag_id->tag_id ? 'selected' : '' }}
                                                            @endforeach @endif>
                                                                #{{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <div class="fea-img-header">
                                                        <span>@lang('backend.image')</span>&nbsp;&nbsp;</span>&nbsp;&nbsp;<span>(@lang('backend.max_size')
                                                            2MB)</span>
                                                    </div>
                                                    <div class="fea-img-upload">
                                                        <label for="feature-img">
                                                            <div class="col-sm-10 img">
                                                                <i class="fas fa-upload"></i>
                                                                <p>@lang('backend.choose_image')</p>
                                                            </div>
                                                        </label>
                                                        <input type="file" id="feature-img" name="image"
                                                            style="display: none; visibility:none">
                                                        <div class="row mb-3"
                                                            style="display: flex; align-items:center; justify-content:start">
                                                            <div class="col-sm-10">
                                                                <img id="showImage" style="width: 90px; height:100%"
                                                                    class="rounded avatar-lg"
                                                                    src="{{ !empty($realestate->feature_image) && file_exists($realestate->feature_image)
                                                                        ? url($realestate->feature_image)
                                                                        : url('upload/no_image.jpg') }}"
                                                                    alt="Card image cap" style="width:10%">
                                                            </div>
                                                        </div>
                                                        <span class="text-danger">
                                                            @error('image')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-5 w-5"><i
                                                class="fas fa-save"></i>&nbsp;&nbsp;@lang('backend.save_button')</button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Select category and Image -->

                        </div>
                </form>
            </div>
        </div>
    @endif

    <script type="text/javascript">
        $(document).ready(function() {
            $('#feature-img').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(function() {
            var previewImages = function(input, imgPreviewPlaceholder) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                imgPreviewPlaceholder);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#realestate_images').on('change', function() {
                previewImages(this, 'div.images-preview-div');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var max_fields = 10;
            var wrapper = $(".input_fields_wrap");
            var add_button = $(".add_field_button");

            var x = 1;

            $(add_button).click(function(e) {
                e.preventDefault();
                if (x < max_fields) {
                    $(wrapper).append(
                        '<div style="width:98%;margin-top:10px; display:flex; align-items:center; justify-content:space-between"> <input class="form-control" name="mytext[]" type="text" style="width:75%"><a type="button" href="#" class="btn btn-danger remove_field" style="margin-right:6%"><i class="fas fa-minus"></i></a></div>'
                    );
                    x++;
                }
            });

            $(wrapper).on("click", ".remove_field", function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        })
    </script>

    {{-- Select 2 script  --}}
    <script>
        $(document).ready(function() {
            $('.tags').select2({
                placeholder: "select",
                allowClear: true,
            });

            $("#tags").select2({
                ajax: {
                    url: "{{ route('get-tags') }}",
                    type: "post",
                    delay: 250,
                    dataType: 'json',
                    data: function(params) {
                        return {
                            name: params.term,
                            "_token": "{{ csrf_token() }}",
                        };
                    },

                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    id: item.realestate_id,
                                    text: item.name
                                }
                            })
                        };
                    },
                },
            });
        });
    </script>

@endsection
