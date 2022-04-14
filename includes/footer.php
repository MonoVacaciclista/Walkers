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
                title: '<?php echo $_SESSION['message']?>'
            })
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
        /* - - - - - - - - - - - - - - - - - - - */
        <?php if (isset($_SESSION['error'])) : ?>
            Toast.fire({
                icon: 'error',
                title: '<?php echo $_SESSION['error']?>'
            })
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>
        /* - - - - - - - - - - - - - - - - - - - */
    });
</script>

</body>

</html>