<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="w-full whitespace-no-wrap-full whitespace-no-wrap">
   <thead>
       <tr class="text-center font-bold">
           <th class="border py-4">Name</th>
           <th class="border py-4">Description</th>
           <th class="border py-4"></th>
           <th class="border py-4"></th>
       </tr>
   </thead>
   <tbody>
   @foreach($sultan as $section)
       <tr>
           <td class="border py-2">{{$section->name}}</td>
           <td class="border py-2">{{$section->description}}</td>
           <td class="border py-2"><a href="{{ route('sections.edit', $section->id) }}">Edit section</a> </td>
           <td class="border py-2"><a href="{{ route('sections.destroy', $section->id) }}">Delete section</a>ete</td>
       </tr>
   @endforeach
   </tbody>
</table>
  <div style="border: 3px solid black;"> 
     <h2>Register</h2>
     <form action="/register" method="POST">
      @csrf
        <input name="name"type="text" placeholder="name">
        <input name="email"type="text" placeholder="email">
        <input name="password"type-="password"placeholder="password">
        <button type="submit">Register</button>
     </form>
  </div>
</body>
</html> 