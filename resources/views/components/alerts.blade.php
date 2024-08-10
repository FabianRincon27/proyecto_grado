@if(Session::has('message'))
    <div class="alert {{ Session::get('type-alert') }} alert-dismissible fade show animate__animated animate__fadeIn" role="alert" id="alertMessage">
        <i class="mdi {{ Session::get('icon') }} me-2"></i>
        {{ Session::get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            alertMessage.addEventListener('animationend', function(event) {
                if (event.animationName === 'fadeOut') {
                    alertMessage.style.display = 'none';
                }
            });
            setTimeout(function() {
                alertMessage.classList.remove('animate__fadeIn');
                alertMessage.classList.add('animate__fadeOut');
            }, 3000);
    });
    </script>
@endif