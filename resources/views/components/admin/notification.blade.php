@if (Session('error'))
    <div class="alert show">
        <i class="fas fa-exclamation-triangle"></i>
        <span class="msg">Warning: {{ Session('error') }}</span>
        <span class="close-btn">
            <i class="fas fa-times"></i>
        </span>
    </div>
@endif
