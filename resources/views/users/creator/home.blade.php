@extends('users.creator.main')

@section('info')
    <div class="col-3 border-end">
        <div class="col-12 border-bottom p-3">
            <p class="text-center fw-bold text-secondary"><i class="fa-solid fa-clipboard-check me-1"></i> Recent tasks</p>
        </div>
        <div class="col-12 p-3">
            @foreach($tasks as $task)
                <div class="col-12 d-flex align-items-center gap-3">
                    <p class="text-{{ $task->statusColor() }}"><i class="fa-solid fa-circle-check"></i></p>
                    <div style="height: 50px" class="text-truncate">
                        <p>{{ $task->name }}</p>
                        <p style="font-size: 10px" class="text-truncate text-secondary">{{ $task->description }}</p>
                    </div>
                    <p class="ms-auto text-nowrap">{{ date('d-m', strtotime($task->end)) }}</p>
                </div>
            @endforeach
        </div>
    </div>

@endsection
