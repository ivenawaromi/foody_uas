<div class="d-flex">
    <a href="{{ route('resev.show', $reservation->order_id) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
    <a href="{{ route('resev.edit', $reservation->order_id) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
    <div>
        <form action="{{ route('resev.destroy', $reservation->order_id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
