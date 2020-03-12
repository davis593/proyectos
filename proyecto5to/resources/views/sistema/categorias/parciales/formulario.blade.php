@if(session()->has('errors'))
 @foreach($errors->all() as $error)

 <label>{{$error}}</label>
 @endforeach
 @endif


<div class="form-group md-12">
    <strong>
{{Form::label('categoria','Categoria',['class'=>''])}}
    </strong>
{{Form::text('categoria',null,
['class'=>'form-control','required','minlength=2', 'maxlength=20','placeholder'=>'Ingrese una Categoria..'])}}
</div>

{{Form::label('descripcion','Descripcion',['class'=>''])}}
    </strong>
{{Form::text('descripcion',null,
['class'=>'form-control','required','minlength=2', 'maxlength=20','placeholder'=>'Ingrese una Descripcion..'])}}
</div>
{{Form::submit('Guardar',['class'=>'btn btn-info'])}}
