</main>
<script src="../js/script.js"></script>

<script src="../js/myplaylist.js"></script>

<script src="../js/search.js"></script>

<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>

<!-- cdn slick -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" ></script>

<script>
    $('.slider-holder').slick({
        infinite: true,
        slidesToShow: 1, 
        slidesToScroll: 1,
        dots: false,
        centerPadding: '10px',
        responsive: [
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1350,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 6,
                }
            },
            {
                breakpoint: 2000,
                settings: {
                    slidesToShow: 7,
                }
            },
            {
                breakpoint: 3000,
                settings: {
                    slidesToShow: 8,
                }
            }
        ]
    });
</script>

</body>

</html>