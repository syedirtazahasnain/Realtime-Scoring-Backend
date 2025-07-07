@if (session('success'))
    <div id="alert-success" class="alert alert-success fixed top-4 right-4 p-3 rounded shadow z-50">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div id="alert-error" class="alert alert-danger fixed top-4 right-4 p-3 rounded shadow z-50">
        {{ $errors->first() }}
    </div>
@endif

<script>
    setTimeout(() => {
        const success = document.getElementById('alert-success');
        const error = document.getElementById('alert-error');
        if (success) success.remove();
        if (error) error.remove();
    }, 5000);
</script>
