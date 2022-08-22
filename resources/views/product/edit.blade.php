@extends('layouts.admin_lay')

@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактировать продукт</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item active">Главная</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('patch')

          <div class="form-group">
          <input type="text" name="title" value="{{ $product->title ?? old('title') }}" class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="description" value="{{ $product->description ?? old('description') }}" class="form-control">
        </div>
        <div class="form-group">
          <textarea name="content" cols="30" rows="10" class="form-control">{{ $product->content ?? old('content') }}</textarea>

        </div>

        <div class="form-group">
          <input type="text" value="{{ $product->price ?? old('price') }}" name="price" class="form-control">
        </div>

        <div class="form-group">
          <input type="text" value="{{ $product->count ?? old('count') }}" name="count" class="form-control">
        </div>

        <div class="form-group w-100">

              <div class="form-group">
                  <img src="{{ asset('storage/' . $product->preview_image) }}" alt="preview_image" class="w-50">
              </div>

          <div class="input-group">
            <div class="custom-file">
              <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text">Загрузка</span>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="custom-file">
              <input name="product_images[]" type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text">Загрузка</span>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="custom-file">
              <input name="product_images[]" type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text">Загрузка</span>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="custom-file">
              <input name="product_images[]" type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text">Загрузка</span>
            </div>
          </div>
        </div>

        <div class="form-group">
            <label>Выберите категорию</label>
          <select name="category_id" class="form-control select2" style="width: 100%;">
              @foreach($categories as $category)
                   
            <option value="{{ $category->id }}"
            @isset ($product->category_id)
               
                @if($category->id == $product->category_id)
                    selected=''
                  @endif                                 
            @endisset
                >{{ $category->title}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
            <label>Выберите группу</label>
          <select name="group_id" class="form-control select2" style="width: 100%;">
              @foreach($groups as $group)
                   
            <option value="{{ $group->id }}"
            @isset ($product->group_id)
               
                @if($group->id == $product->group_id)
                    selected=''
                  @endif                                 
            @endisset
                >{{ $group->title}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">

          <select class="tags" name="tags[]" multiple="multiple" data-placeholder="Выберите тег" style="width: 100%;">
            @foreach($tags as $tag)
            <option value="{{ $tag->id }}" 
            @isset ($product->product_tags)
                @foreach($product->product_tags as $product_tag)
                @if($tag->id == $product_tag->id)
                    selected=''
                  @endif
                  @endforeach
                                    
            @endisset
            >{{ $tag->title }}</option>
            @endforeach

          </select>
        </div>

        <div class="form-group">

          <select class="colors" name="colors[]" multiple="multiple" data-placeholder="Выберите цвет" style="width: 100%;">
          @foreach($colors as $color)
            <option value="{{ $color->id }}" 
            @isset ($product->product_colors)
                @foreach($product->product_colors as $product_color)
                @if($color->id == $product_color->id)
                    selected=''
                  @endif
                  @endforeach
                                    
            @endisset
            >{{ $color->title }}</option>
            @endforeach
          </select>
        </div>


            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Редактировать">
            </div>
        </form>
          
        </div>
        <!-- row end -->
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection