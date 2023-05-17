<h1>Registration Form</h1>
<form action="{{route('register.store')}}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="name"/>
    <input type="password" name="password" id="password" placeholder="password"/>
    <input type="email" name="email" id="email" placeholder="email"/>
    <button type="submit">Submit</button>
</form>

<h1>{{$greetings}}</h1>
@foreach($registrants as $user)
    <p><a href="{{route('register.show', $user->id)}}">{{$user->name}} - {{$user->email}}</a></p>
@endforeach


