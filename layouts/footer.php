<footer>
    <div class="d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center">

            <ul class="list-inline footer-list">
                <li>
                    <a href="https://www.facebook.com/bumbellbeelimited"><i class="fab fa-facebook-f footer-list-icon"></i></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/bumbellbee-ltd-1b76511b5/"><i class="fab fa-linkedin-in footer-list-icon"></i></a>
                </li>
                    </ul>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script defer src="./dist/js/all.js"></script>
<script type="text/javascript" src="./dist/datatables.min.js"></script>

<script type="text/javascript" src="./dist/js/bootstrap.js"></script>

<script>
    $(document).on('click', '.package-btn', function(event) {
        event.preventDefault();

        $("#example").dataTable().fnDestroy();
        var source = $(this).data('source');

        $('#example').DataTable({
            "ajax": source
        });



        $('html,body').animate({
                scrollTop: $(".pap-s_back-container").offset().top
            },
            'slow');
    });

    $(document).ready(function() {
        $('#example').DataTable({
            "ajax": "data/BasePack.json",
            columns: [{
                title: "Channel Name"
            },
                {
                    title: "SID"
                },
                {
                    title: "Category"
                }
            ]
        });
    });
</script>


</body>
</html>