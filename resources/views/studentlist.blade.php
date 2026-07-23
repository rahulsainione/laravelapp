<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <h1>Students List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
