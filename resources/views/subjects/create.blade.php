<h1>SUBJECT</h1>
<form action="/subject" method="POST">
    @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="description" placeholder="description">
        <input type="text" name="units" placeholder="units">
    <button type="submit">submit</button>
</form>

<h2>{{$alpha}}</h2>
@foreach($subjects as $subject)
<p><a href="{{route('subject.show', $subject->id)}}">{{$subject->name}} - {{$subject->description}} - {{$subject->units}}</a></p>
@endforeach