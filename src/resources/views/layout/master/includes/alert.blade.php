{{-- Alerts --}}
@foreach (['success', 'warning', 'danger', 'info'] as $msg)

    @if (Session::has('alert-' . $msg))

        <div class="alert alert-{{ $msg }}">

            @if ($msg == 'success')

                <i class="icon fas fa-check-circle"></i>

            @elseif ($msg == 'warning')

                <i class="icon fas fa-exclamation-triangle"></i>

            @elseif ($msg == 'danger')

                <i class="icon fas fa-exclamation-circle"></i>

            @elseif ($msg == 'info')

                <i class="icon fas fa-info-circle"></i>

            @endif

            <span class="message">{{ Session::get('alert-' . $msg) }}</span>
            <i class="close-icon fas fa-times"></i>
        </div>

    @endif

@endforeach
