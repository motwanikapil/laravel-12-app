<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    <h1>User data</h1>
    {{print_r($data)}}
    <ul>
        <li>
            {{$data->id}}
        </li>
        <li>
            {{$data->name}}
        </li>
        <li>
            {{$data->email}}
        </li>
        <li>
            {{
                $data->address->street;
            }}
        </li>
    </ul>
</div>
