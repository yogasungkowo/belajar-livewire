@if (flash()->message)
    <div class="alert alert-{{ flash()->class ?? 'success' }} d-flex align-items-center" role="alert">
        @if (flash()->class === 'success')
            <i class="bi bi-check-circle-fill me-2"></i>
        @elseif (flash()->class === 'warning')
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
        @elseif (flash()->class === 'danger')
            <i class="bi bi-x-circle-fill me-2"></i>
        @else
            <i class="bi bi-info-circle-fill me-2"></i>
        @endif
        <div>
            {{ flash()->message }}
        </div>
    </div>
@endif
