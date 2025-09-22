{{-- Requiere en head:
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITEKEY') }}"></script>
--}}
<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
<div id="mensaje"></div>
<script>
    const form = document.getElementById('form-contacto');
    const mensajeDiv = document.getElementById('mensaje');

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        mensajeDiv.textContent = "Enviando...";
        mensajeDiv.className = "alert alert-secondary";

        grecaptcha.ready(function () {
            grecaptcha.execute("{{ env('RECAPTCHA_SITEKEY') }}", {action: 'formulario'}).then(function (token) {
            const formData = new FormData(form);
            formData.set('g-recaptcha-response', token);

            fetch('{{ route('contacto.send') }}', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                mensajeDiv.textContent = data.message;
                mensajeDiv.className = "alert alert-success";
                form.reset();
                } else {
                mensajeDiv.textContent = data.message;
                mensajeDiv.className = "alert alert-error";
                }
            })
            .catch(errors => {
                mensajeDiv.textContent = "Ocurrió un error inesperado: " + (errors instanceof Error ? errors.message : JSON.stringify(errors));
                mensajeDiv.className = "alert alert-error";
            });
            });
        });
    });
</script>
