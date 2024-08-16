@props(['url'])
<tr>
    <td width="100%" align="center">
        @if (trim($slot) === 'Maanar')
            <a href="{{ $url }}" target="_blank" style="display: inline-block;">
                <img width="200" src="https://maanar-shop.xyz/build/assets/pudfra-0cc62e87.jpg" alt="Logo" border="0" width="48" style="display: block; width: 48px; max-width: 48px; min-width: 48px; border-top-left-radius: 50% 50%; border-top-right-radius: 50% 50%; border-bottom-right-radius: 50% 50%; border-bottom-left-radius: 50% 50%;">
            </a>
        @else
            {{ $slot }}
        @endif
    </td>
</tr>