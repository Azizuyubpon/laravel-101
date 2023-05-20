<h1>LTO</h1>
<form action="{{route('car.store')}}" method="POST">
    @csrf
    <input type="text" name='registration' placeholder="registration"/>
    <input type="text" name='official_receipt' placeholder="official receipt"/>
    <input type="text" name='color' placeholder="color"/>
    <button type="submit">submit</button>
</form>

<h1>{{$hello}}</h1>
<h2>{{$hi}}</h2>
<h3>{{$faidz}}</h3>
@foreach($ajee as $car)
<p><a href="{{route('car.show', $car->id)}}">{{$car->registration}} - {{$car->official_receipt}} - {{$car->color}}</a></p>
@endforeach
