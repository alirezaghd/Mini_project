<footer class="footer fixed-bottom  mt-auto">
    <hr class="text-dark" ">


    <p class="text-dark text-capitalize  text-lg-center text-md-center text-sm-center text-center">copyright &copy; <?php echo date("Y");?> </p>

<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<!--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>-->
<!--    <script src="view/js/bootstrap.bundle.js"></script>-->
<!--    <script src="view/js/bootstrap.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="view/dist/mds.bs.datetimepicker.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {

                language: {
                    // The UI will be English.
                    ui: 'en',

                    // But the content will be edited in Arabic.
                    content: 'ar'
                }

            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );

    </script>
</footer>



<script>
    const dtp1Instance = new mds.MdsPersianDateTimePicker(document.getElementById('dtp1'), {
        targetTextSelector: '[data-name="dtp1-text"]',
        targetDateSelector: '[data-name="dtp1-date"]',
    });
</script>

<script>
    function sender() {
        document.forms["form_service"].submit();
        document.forms["form_time"].submit();
        return true;
    }

</body>

</html>

