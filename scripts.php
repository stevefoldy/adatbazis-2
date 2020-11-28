<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('mp-needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    /* loader */
    var myLoader;

    function mpLoader() {
        myLoader = setTimeout(showPage, 1000);
    }

    function showPage() {
        document.getElementById("ab-loader").style.display = "none";
        document.getElementById("abMain").style.opacity = "1";
        document.getElementsByTagName("BODY")[0].style.height = "auto";
    }

    /* hamburger menu */
    $(document).ready(function(){
        var $mobileHamburgerBtn = $('#ab-mobile-hamburger');
        var $mobileMenuWrap = $('.ab-menu-wrap');

        $mobileHamburgerBtn.on('click',function(){
            $mobileMenuWrap.addClass('show');
            $('html, .ab-mobile-overlay').addClass('js-is-visible');
        });

        $('.ab-menu-wrap-close').on('click',function(){
            $mobileMenuWrap.removeClass('show');
            $('html, .ab-mobile-overlay').removeClass('js-is-visible');
        });
    });
</script>