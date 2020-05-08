<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <title>Список городов</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
    <div class="formAdd">
   <h3 class="formtitle">Форма добавления города</h3>

   {{ Form::open(['url' => route('addtown'), 'id' => 'form']) }}
   <table>
   <tr>
   <td>{{ Form::label('title', 'Название', ['class' => 'awesome']) }}</td>
   <td>{{ Form::text('title')}}</td>
   </tr>
   <tr>
   <td>{{ Form::label('lat', 'Широта', ['class' => 'awesome']) }}</td>
   <td>{{ Form::text('lat')}}</td>
   </tr>
   <tr>
   <td>{{ Form::label('lon', 'Долгота', ['class' => 'awesome']) }}</td>
   <td>{{ Form::text('lon')}}</td>
   </tr>
   <tr>
   <td>{{ Form::label('numpop', 'Количество населения', ['class' => 'awesome']) }}</td>
   <td>{{ Form::number('numpop')}} </td>
   </tr>
   <tr><td>{{Form::button('Добавить',['id' => 'addTown', 'class' => 'addButton'])}}</td></tr>
  </table>

	{{ Form::close() }}
	</div>
<br>
<h3>Список добавленных городов.</h3>

 <div id="listTowns">
	@include('listAjax', ['towns' => $towns])
 </div>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="/js/script.js"></script>

   </body>
</html>