@extends('layouts.app')


@section('content')


<div class="container">
    <h1 class="text-center">Контакты</h1>
    <hr>
    
    <div class="row">        
        <div class="contacts col-sm-4">            
            <p><span class="glyphicon glyphicon-map-marker"></span> Адрес: <strong>Москва, Россия<br>Космодамианская набережная 52/2</strong></p>
            <p><span class="glyphicon glyphicon-phone"></span> Телефон: <strong>+7 (222) 222 22 222</strong></p>
            <p><span class="glyphicon glyphicon-envelope"></span> Электронная почта: <a href="">mike.wazovzky@yandex.ru</a></p>
        </div>
        
        <div class="contacts col-sm-8">	
            <iframe width="480" height="300" frameborder="0" style="border:0; display: block;  margin: 0 auto;" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJgQtiNeBKtUYR2tvvcHt7ZE4&key=AIzaSyCk1tk4ulh8FQpW91l9vCn7c2ze5isgOd0" allowfullscreen></iframe>
        </div>
    </div>
        
	<hr>
    
	<div class="message">	
        <h3 class="text-center">Отправить сообщение</h3>
	
        <form class="form-horizontal" method="POST" action="/contacts">
			 
             {{ csrf_field() }} 
             
			<div class="form-group">
				<label for="name"  class="control-label col-sm-2 col-sm-offset-2">Имя:</label>
				<div class="col-sm-6">
					<input type="text" name="name" class="form-control" placeholder="Введите имя"/>
				</div>	
			</div>
		
			<div class="form-group">
				<label for="email" class="control-label col-sm-2 col-sm-offset-2">Электронная почта:</label>
				<div class="col-sm-6">
					<input type="email" name="email" class="form-control" placeholder="Введите адрес электронной почты"/>
				</div>
			</div>
		
			<div class="form-group">
				<label for="subj" class="control-label col-sm-2 col-sm-offset-2">Тема сообщения:</label>
				<div class="col-sm-6">          
					<input type="text" name="subj" class="form-control" placeholder="Введите тему сообщения"/>
				</div>
			</div>

			<div class="form-group">
				<label for="body" class="control-label col-sm-2 col-sm-offset-2">Сообщение:</label>
                <div class="col-sm-6"> 
					<textarea name="body" class="form-control" rows="5">Сообщение</textarea>
				</div>
			</div>
		
			<div class="form-group">        
				<div class="col-sm-offset-4 col-sm-6">
					<input type="submit" value="Отправить" class="btn btn-default"/>
				</div>
			</div>

		</form>
        
        @include('errors.list')
        
	</div>
</div>
    
@stop