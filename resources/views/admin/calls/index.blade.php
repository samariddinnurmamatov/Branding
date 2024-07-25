<x-layouts.admin>
    <div class="container">
        <h1>Murojat qoldirgan mijozlar ro'yxati</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Description</th>
                <th>Phone Number</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($calls as $call)
                <tr>
                    <td>{{ $call->id }}</td>
                    <td>{{ $call->full_name }}</td>
                    <td>{{ $call->description }}</td>
                    <td>{{ $call->phone_number }}</td>
                    <td>
                        <form action="{{ route('calls.destroy', $call->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.admin>