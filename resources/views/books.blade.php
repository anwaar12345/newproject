<!DOCTYPE html>
<html>
<head>
	<title>books</title>
</head>
<body>
@foreach($books as $book)
{{$book->name}}
{{$book->description}}
@endforeach

<form action="{{route('books.store')}}" method="post">
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="text" name="name" >
	<input type="text" name="description">
	<input type="submit" name="btns" value="submit">
</form>


</body>
</html>