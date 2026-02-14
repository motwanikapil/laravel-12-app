@include('common.header')

<h1>Home page</h1>
<h3>{{rand()}}</h3>
@if($name=='kapil')
<h2>this is kapil</h2>
@elseif($name=='coder')
<h2>this is coder</h2>
@else
<h2>this is other user</h2>
@endif
<div>
	@foreach($users as $user)
	<h5>{{$user}}</h5>
	@endforeach
</div>
 
<h3>{{$users[0]}}</h3>

<h2>{{$name}}</h2>
<div>
	@for($i=0; $i < 10 ; $i++)
	<h3>{{$i}}</h3>
	@endfor
</div>

@include('common.inner', ['page'=>'this is home page'])