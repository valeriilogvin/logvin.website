// $('.sect4__slider').slick({
//     infinite: true,
//     // slidesToShow: 3,
//     rows:2,
//     slidesPerRow: 3,
//     // slidesToScroll: 6
// });
$('.sect4__slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    rows:2,
    slidesPerRow: 3,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                rows:2,
                slidesPerRow: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 1000,
            settings: {
                rows:1,
                slidesPerRow: 1,
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: false,
                dots: false
            }
        },
        {
            breakpoint: 768,
            settings: {
                rows:1,
                slidesPerRow: 1,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                rows:1,
                slidesPerRow: 1,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});