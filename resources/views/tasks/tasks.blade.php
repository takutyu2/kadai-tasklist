<h1>タスク一覧</h1>

<table class="table table-striped">
    <thead>
        <th>id</th>
        <th>ステータス</th>
        <th>内容</th>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->content }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{!! link_to_route('tasks.create', '新規追加', null, ['class' => 'btn btn-primary']) !!}