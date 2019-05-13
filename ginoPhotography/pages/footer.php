<footer class="mt-4 bg-dark text-center text-white">
    <div class="py-2">Website developed by <u>Gabriel Muscat Mills</u> - All rights reserved</div>
</footer>

<?php
    $pagename = basename($_SERVER['PHP_SELF']);

    // If ihe page is 'index.php'
    if ($pagename == "index.php") { ?>

<!-- Optional JavaScript -->
<script src="js/main.js"></script>

<?php } else { ?>
    <!-- Optional JavaScript -->
    <script src="../js/main.js"></script>
<?php } ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</body>
</html>