@if (Session('error'))
    <div class="alert show bg-orange-300">
        <i class="fas fa-exclamation-triangle"></i>
        <span class="msg text-orange-700">Warning: {{ Session('error') }}</span>
        <span class="close-btn bg-orange-500">
            <i class="fas fa-times"></i>
        </span>
    </div>
@endif

@if (Session('success'))
    <div class="alert show bg-green-400">
        <i class="fas fa-exclamation-triangle"></i>
        <span class="msg text-white">Success: {{ Session('success') }}</span>
        <span class="close-btn bg-green-500">
            <i class="fas fa-times"></i>
        </span>
    </div>
@endif
