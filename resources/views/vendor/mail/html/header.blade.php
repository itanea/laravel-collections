<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel Collections')
            <img src="{{ asset('images/happytodev_150x150.png') }}" class="logo" alt="Happy To Dev">
            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>
