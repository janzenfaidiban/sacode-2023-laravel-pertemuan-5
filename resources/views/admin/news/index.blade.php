<div>
    <a href="{{ url('admin/') }}">Back to Dashboard</a>
</div>

<div>
    <h2>News</h2>
    <p>On this page you can manage: create, update, delete.</p>
</div>

<div>
    <a href="{{ url('admin/news/create') }}">Create</a>
</div>

<div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Status</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>News Title One</td>
                <td>Publish</td>
                <td>
                    <a href="{{ url('admin/news/show') }}">Show</a>
                    <a href="{{ url('admin/news/edit') }}">Edit</a>
                    <a href="{{ url('admin/news/delete') }}">Delete</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>News Title Two</td>
                <td>Publish</td>
                <td>
                    <a href="{{ url('admin/news/show') }}">Show</a>
                    <a href="{{ url('admin/news/edit') }}">Edit</a>
                    <a href="{{ url('admin/news/delete') }}">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>

</div>