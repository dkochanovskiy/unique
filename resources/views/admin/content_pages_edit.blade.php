<div class="wrapper container-fluid">
    {!! Form::open(['url'=>route('pagesEdit',array('page'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    {!! Form::hidden('id',$data['id']) !!}
    <div class="form-group">
        {!! Form::label('name','Название',['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-8">
            {!! Form::text('name',$data['name'],['class'=>'form-control','placeholder'=>'Введите название страницы']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('alias','Псевдоним',['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-8">
            {!! Form::text('alias',$data['alias'],['class'=>'form-control','placeholder'=>'Введите псевдоним страницы']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('text','Текст',['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-8">
            {!! Form::textarea('text',$data['text'],['id'=>'editor','class'=>'form-control','placeholder'=>'']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('old_images','Изображение',['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-offset-2 col-md-8">
            {!! Html::image('assets/img/'.$data['images'],'',['class'=>'img-circle img-responsive','width'=>'150px']) !!}
            {!! Form::hidden('old_images',$data['images']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('images','Изображение',['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-8">
            <input type="file" name="images" id="images" class="filestyle" data-buttonText="Выберите изображение" data-buttonName="btn btn-primary" data-placeholder="Файл отсутствует">
            {{--            {!! Form::file('images',['class'=>'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>'btn-primary','data-placeholder'=>'Файл отсутствует']) !!}--}}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-8">
            {!! Form::button('Сохранить',['class'=>'btn btn-primary','type'=>'submit','data-buttonName'=>'btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}
    <script>
        CKEDITOR.replace('editor');
    </script>
</div>