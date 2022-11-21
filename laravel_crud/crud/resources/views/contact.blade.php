<h2>Contact Page</h2>
<form action="{{url('/contact')}}" method="post">
    @csrf
    <input type="text" name="name">
    <button>Submit</button>
</form>