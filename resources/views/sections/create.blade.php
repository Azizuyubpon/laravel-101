<h1>SECTION</h1>

<form action="{{route('section.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name"/>
    <input type="email" name="email" placeholder="email"/>
    <input type="password" name="password" placeholder="password"/>
    <button type="submit">Submit</button>
</form>


<h2>{{$gusion}}</h2>
@foreach($sections as $section)
<p><a href="{{route('section.show', $section->id)}}">{{$section->name}} - {{$section->email}} - {{$section->password}}</a></p>
@endforeach