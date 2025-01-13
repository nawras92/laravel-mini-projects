<form action="/quotes/{{ $quote->id }}" method="POST"
    onsubmit="return confirm('Are you sure you want to delete this quote?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
