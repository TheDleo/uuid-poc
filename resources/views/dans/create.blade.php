@section('main')

<h1>Create Dan</h1>

<form action="/dans/store" method="post">
    <input type="text" name="id" />
    <input type="text" name="name" />
    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Submit">
</form>
