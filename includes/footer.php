<script src="<?php echo $js; ?>jquery-3.5.1.min.js"></script>
<script src="<?php echo $js; ?>bootstrap.min.js"></script>
<script src="<?php echo $js; ?>sweetalert2@10.js"></script>
<script>
    $(document).ready(function() {
        /* - - - - - - - - - - - - - - - - - - - */
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })



        <?php if (isset($_SESSION['message'])) : ?>
            Toast.fire({
                icon: 'success',
                title: 'Registro completo'
            })
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
        /* - - - - - - - - - - - - - - - - - - - */
        <?php if (isset($_SESSION['error'])) : ?>
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Something is not right!',
                text: '<?php echo $_SESSION['error']; ?>',
                showConfirmButton: false,
                timer: 5000
            });
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>
        /* - - - - - - - - - - - - - - - - - - - */
    });
</script>

</body>

</html>