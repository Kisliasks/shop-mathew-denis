@extends('layouts.admin_lay')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Добавить продукт</h1>
        
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

      <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <input type="text" name="title" class="form-control" placeholder="Наименование">
          @error('title')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <input type="text" name="description" class="form-control" placeholder="Описание">
          @error('description')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <textarea name="content" cols="30" rows="10" class="form-control" placeholder="Контент"></textarea>
          @error('content')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <input type="text" name="price" class="form-control" placeholder="Цена">
          @error('price')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <input type="text" name="count" class="form-control" placeholder="Количество на складе">
          @error('count')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="custom-file">
              <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text">Загрузка</span>
            </div>
          </div>
          @error('preview_image')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">

          <select name="category_id" class="form-control select2" style="width: 100%;">
            <option selected="selected" disabled>Выберите категорию</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
          </select>
          @error('category_id')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">

          <select class="tags" name="tags[]" multiple="multiple" data-placeholder="Выберите тег" style="width: 100%;">
            @foreach($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->title }}</option>
            @endforeach

          </select>
          @error('tags')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group mb-3">

          <select class="colors" name="colors[]" multiple="multiple" data-placeholder="Выберите цвет" style="width: 100%">
            @foreach($colors as $color)
           <?php $color_title = $color->title;  ?>
            
            <option value="{{ $color->id }}"><div style="background-color:#009">{{$color->title}}</div></option>
            @endforeach

          </select>
          @error('colors')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Добавить">
        </div>
      </form>

    </div>
    <!-- row end -->

  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection