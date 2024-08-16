<x-mail::message>
@isset($actionText)
<!-- start hero -->
<tr>
    <td align="center" bgcolor="#e9ecef">
    <!--[if (gte mso 9)|(IE)]>
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
    <tr>
    <td align="center" valign="top" width="600">
    <![endif]-->
    <table width="90%" border="0" cellpadding="0" cellspacing="0" align="center">
        <tr>
            <td align="center" bgcolor="#ffffff" style="border-top: 3px solid #d4dadf;">
                <h1 style="font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 25px; font-weight:bold; padding-left:20px; padding-right:20px;">{{$actionText}}</h1>
            </td>
        </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </td>
</tr>
<!-- end hero -->
@endisset

{{-- Intro Lines --}}

<!-- start copy block -->
<tr>
    <td align="center" bgcolor="#e9ecef">
    <!--[if (gte mso 9)|(IE)]>
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
    <tr>
    <td align="center" valign="top" width="600">
    <![endif]-->
    <table width="90%" border="0" cellpadding="0" cellspacing="0" align="center">

        <!-- start copy -->
        <tr>
            <td align="center" bgcolor="#ffffff">
                {{-- Intro Lines --}}
                @foreach ($introLines as $line)
                    <p style="margin: 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size:14px;color:#202020; padding-left:20px; padding-right:20px; text-align:justify;">{{ $line }}</p>
                @endforeach

                {{-- Outro Lines --}}
                @foreach ($outroLines as $line)
                <p style="margin: 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size:14px;color:#202020; padding-left:20px; padding-right:20px; text-align:justify;">{{ $line }}</p>
                @endforeach
            </td>
        </tr>
        <!-- end copy -->

        <!-- start button -->
        <tr>
        <td align="left" bgcolor="#ffffff">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td align="center" bgcolor="#ffffff" style="padding: 12px;">
                    {{-- Action Button --}}
                    @isset($actionText)
                    <x-mail::button :url="$actionUrl">
                    {{ $actionText }}
                    </x-mail::button>
                    @endisset
                </td>
            </tr>
            </table>
        </td>
        </tr>
        <!-- end button -->

        {{-- Subcopy --}}
        @isset($actionText)
        <x-slot:subcopy>
            <p style="margin: 0;">If the above button doesn't work, you can reset your password by copy and paste the URL below into your web browser:</p>
        <span class="break-all"><a href="{{ $actionUrl }}" target="_blank">[{{ $displayableActionUrl }}]({{ $actionUrl }})</a></span>
        </x-slot:subcopy>
        @endisset

        {{-- Salutation --}}
        @if (! empty($salutation))
        {{ $salutation }}
        @else
        <!-- start copy -->
        <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 24px; border-bottom: 3px solid #d4dadf">
                <p style="margin: 0;">Regards,
                    <br> {{ __('Admin, '.config('app.name')) }}
                </p>
            </td>
        </tr>
        <!-- end copy -->
        @endif

    </table>
    <!--[if (gte mso 9)|(IE)]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </td>
</tr>
<!-- end copy block -->

</x-mail::message>
