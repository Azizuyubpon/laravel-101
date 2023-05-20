    <h>Hello employee</h>
  
        <form action="{{route('employee.store')}}" method="POST">
            @csrf
            <input type="text" name="first_name" placeholder="first name"/>
            <input type="text" name="middle_name" placeholder="middle name"/>
            <input type="text" name="last_name" placeholder="last name"/>
            <button type="submit">Submit</button>
        </form>
    

        
<h1>{{$greetings}}</h1>
@foreach($employees as $employee)
    <p><a href="{{route('employee.show', $employee->id)}}">{{$employee->first_name}} - {{$employee->middle_name}} - {{$employee->last_name}}</a></p>
@endforeach
