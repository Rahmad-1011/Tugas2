@inject('timeservices', 'App\Services\TimeServices')

@extends ('template.base')

@section('content')


<div class="jam" style="float: right;">
	<b>Jam : {{$timeservices->showTimeNow()}}</b>
</div>
<h3> 
	Selamat Datang 
</h3>
<br>

<h1>
	{{request()-> user()-> nama}}
</h1>


@endsection