<div class="container m-5">
    <ul class="list-group">
    @forelse ($tasks as $task)
        <li class="list-group-item">
            {{$task->title}}
            <a href="{{route('tasks.edit', $task)}}" class="btn btn-outline-dark btn-sm">Modifica</a>
            <a wire:click="destroy{{$task}}" class="btn btn-outline-danger btn-sm">Elimina</a>

        </li>
    @empty
        Nessuna cosa da fare
    @endforelse
</ul>
</div>
 