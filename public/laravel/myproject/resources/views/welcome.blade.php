<x-layout>
    <h1>Hello Contact Page</h1>
<h3>Age: {{ $age }}</h3>
    @if($age >= 18)
        <p>Adult</p>
    @elseif($age >= 13)
        <p>Teen</p>
    @else
        <p>Child</p>
    @endif
<ul>
@foreach($names as $name)
    <li>{{ $name }}</li>
@endforeach
</ul>

@forelse($names as $name)
    <p>{{ $name }}</p>
@empty
    <p>No names available</p>
@endforelse
</x-layout>
