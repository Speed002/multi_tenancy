<x-layouts.app>
    <div class="row py-4 mb-3">
        <div class="col-sm-8">
        <span class="slate">Two factor authentication</span>
        @if (session('status') == 'two-factor-authentication-enabled')
            <p class="text-primary-emphasis">Two factor authentication has been enabled. Scan the QR code with your authenticator app.</p>
            <span>
            {!! auth()->user()->twoFactorQrCodeSvg() !!}
            </span>
        @else
            @if (auth()->user()->two_factor_secret)
            <p class="text-primary-emphasis">Two factor authentication has been enabled.</p>
                <form action="{{route('two-factor.disable')}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-light btn-sm slate-light" type="submit">Disable 2-factor authentication</button>
                </form>
            @else
                <form action="{{route('two-factor.enable')}}" method="post">
                    @csrf
                    <button class="btn btn-light btn-sm slate-light mt-3" type="submit">Enable 2-factor authentication</button>
                </form>
            @endif
        @endif
        </div>
        {{-- Empty space --}}
        <div class="col-sm-4">

        </div>
    </div>
</x-layouts.app>
