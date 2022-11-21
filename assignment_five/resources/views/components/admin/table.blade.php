<!--table widget-->

<table id="{{$id}}" class="table">
    <thead>
    <tr>
        @foreach($headers as $header)
        <th scope="col">{{$header}}</th>
        @endforeach

    </tr>
    </thead>
    <tbody>
    @foreach($rows as $row)
    <tr>
        @foreach($rows as $col)
            <td>{{ $col }}</td>
        @endforeach
    </tr>
    @endforeach

    </tbody>
</table>

