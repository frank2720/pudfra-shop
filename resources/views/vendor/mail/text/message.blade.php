<x-mail::layout>
    {{-- Header --}}
    <x-slot:header>
        <x-mail::header :url="config('app.url')">
            {{ config('app.name') }}
        </x-mail::header>
    </x-slot:header>


    {{-- Body --}}
    {{ $slot }}

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
                <td align="center" bgcolor="#ffffff" ">
                    <p style="margin: 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size:14px;color:#202020; padding-left:20px; padding-right:20px; text-align:justify;">You are receiving this email because we received a password reset request for your account.</p>
                    <p style="font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size:14px; color:#202020; padding-left:20px; padding-right:20px; text-align:justify;">Click the button below to reset your password, the reset password link is only valid for 1 hour.</p>
                </td>
                </tr>
                <!-- end copy -->

                <!-- start button -->
                <tr>
                <td align="left" bgcolor="#ffffff">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td align="center" bgcolor="#ffffff" style="padding: 12px;">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                            <td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
                                <a href="https://www.blogdesire.com" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">Do Something Sweet</a>
                            </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td>
                </tr>
                <!-- end button -->

                <!-- start copy -->
                <tr>
                <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 24px;">
                    <p style="margin: 0;">If the above button doesn't work, you can reset your password by copy and paste the URL below into your web browser:</p><p style="margin: 0;"><a href="https://blogdesire.com" target="_blank">https://blogdesire.com/xxx-xxx-xxxx</a></p>
                </td>
                </tr>
                <!-- end copy -->

                <!-- start copy -->
                <tr>
                <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 24px; border-bottom: 3px solid #d4dadf">
                    <p style="margin: 0;">Regards,
                        <br> Maanar
                    </p>
                </td>
                </tr>
                <!-- end copy -->

            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
    </tr>
    <!-- end copy block -->

    {{-- Subcopy --}}
    @isset($subcopy)
        <x-slot:subcopy>
            <x-mail::subcopy>
                {{ $subcopy }}
            </x-mail::subcopy>
        </x-slot:subcopy>
    @endisset

    {{-- Footer --}}
    <x-slot:footer>
        <x-mail::footer>
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        </x-mail::footer>
    </x-slot:footer>
</x-mail::layout>
