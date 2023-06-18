<div class="container m-5">
    <ul class="list-group">
    @forelse ($tasks as $task)
        <li class="list-group-item">
            {{$task->title}}
            <a href="{{route('tasks.edit', $task)}}" class="btn btn-outline-dark btn-sm">Modifica</a>
        </li>
    @empty
        Nessuna cosa da fare
    @endforelse
</ul>
</div>
 