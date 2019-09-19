$(window).scroll(function() {
    var hT = $('#section-about').offset().top,
        wS = $(this).scrollTop();
    if (wS > (hT - 50)) {
        $('.navbar').css('background-color', '#263238')
    } else {
        $('.navbar').css({'background-color': 'transparent', 'opacity': '0.7'});
    }
 });

 $(".gallery-image").click(function() {
    var url = this.src
    console.log(url)
    document.getElementById("modal-image").src = url
    $("#exampleModal").modal()
    console.log("tale")
 });