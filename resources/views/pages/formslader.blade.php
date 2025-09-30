<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('btn-registrar').addEventListener('click', function () {
        const correoNL = document.getElementById('correo-input').value;

        if (!correoNL || !/^\S+@\S+\.\S+$/.test(correoNL)) {
            Swal.fire({
                title: '¡Atención!',
                text: 'Correo inválido',
                timer: 3000,
                showConfirmButton: false,
                customClass: {
                    popup: 'my-swal-popup',
                    icon: 'my-swal-icon',
                    title: 'my-swal-title',
                    htmlContainer: 'my-swal-text',
                }
            });
            return;
        }

        fetch("{{ route('guardar.correo') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ correo: correoNL })
        })
            .then(res => res.json())
            .then(response => {
                if (response.estatus == 200) {
                    Swal.fire({
                        title: '¡Éxito!',
                        text: 'Correo guardado correctamente',
                        timer: 3000,
                        showConfirmButton: false,
                        customClass: {
                            popup: 'my-swal-popup',
                            title: 'my-swal-title',
                            confirmButton: 'my-swal-btn'
                        }
                    });
                } else {
                    Swal.fire({
                        title: '¡Atención!',
                        text: response.error || 'Error al registrar',
                        timer: 3000,
                        showConfirmButton: false,
                        customClass: {
                            popup: 'my-swal-popup',
                            icon: 'my-swal-icon',
                            title: 'my-swal-title',
                            htmlContainer: 'my-swal-text',
                        }
                    });
                }
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
