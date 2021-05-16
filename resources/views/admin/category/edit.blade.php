@extends('layouts\admin_layuot')

@section('title', 'Редактирование категории')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Редактирование категории: {{ $category['title'] }}</h1>
        </div><!-- /.col -->
        
      </div><!-- /.row -->
      @if(session('success'))
        <div class="alert alert-success" role="alert" >
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
          <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
        
        </div>

      @endif
    </div><!-- /.container-fluid -->
  
</div>
  <!-- /.content-header -->

  <!-- Main content -->
  
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
    
               
               
                  
                    <div class="card card-primary">
                       
                    
                    
                            <form  action="{{ route('category.update', $category['id']) }}" method="POST">
                              @csrf
                              @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                         <label for="exampleInputEmail1">Название</label>
                                         <input type="text" value="{{ $category['title'] }}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Добавить название категории" required>
                                     </div>
                                   
                                    </div>
                                   
                                </div>
                  
    
                                <div class="card-footer">
                                     <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </form>
                    </div>
              
               
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
    
@endsection
    
