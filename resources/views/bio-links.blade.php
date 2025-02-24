<x-layout.app>
    <div>
        <img src="/storage/{{ $user->photo }}" alt="Profile picture">
        <h2>User {{ $user->name }} :: {{ $user->id }}</h2>
        <h3>{{ $user->description }}</h3>
        <ul>
            @foreach ($user->links as $link)
                <li style="display:flex">
                    <a href="{{ $link->link }}" target="_blank">
                        {{ $link->id }}. {{ $link->name }}
                    </a>
            @endforeach
            </li>
        </ul>
    </div>

</x-layout.app>
