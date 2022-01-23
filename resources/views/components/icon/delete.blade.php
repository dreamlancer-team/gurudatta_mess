<a href="" class="btn btn-icon btn-light-danger btn-sm me-1" onclick="event.preventDefault(); document.getElementById('item-{{ $slug }}').submit();">
    <i class="fas fa-trash"></i>
</a>
<form id="item-{{ $slug }}" method="post"
    action="{{ route($route . '.destroy', $slug) }}"
    style="display: none">
    @csrf
    {{ method_field('DELETE') }}
</form>

