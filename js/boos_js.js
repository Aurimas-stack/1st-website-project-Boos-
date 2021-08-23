//Site header mobile menu
function displayMobileNav() {
    let x = document.getElementById("mobMenu");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
//Search bar display
function displaySearchBar() {
    let x = document.getElementById("search-bar");
    if (x.style.display === "block") {
        x.style.display = "none"
    } else {
        x.style.display = "block";
    }
}


$(document).ready(function() {
    //Scroll for different sections below
    $(".About").click(function() {
        $('html, body').animate({
            scrollTop: $("#About").offset().top
        }, 1000);
    });
    $(".Services").click(function() {
        $('html, body').animate({
            scrollTop: $("#Services").offset().top
        }, 700);
    });
    $('.Top').bind("click", function () {
        $('html, body').animate({ scrollTop: 0 }, 1200);
        return false;
    });
    //Opens News section read more text below
    function AddReadMore() {
        //This limit you can set after how much characters you want to show Read More.
        var carLmt = 160;
        // Text to show when text is collapsed
        var readMoreTxt = " ...Read More";
        // Text to show when text is expanded
        var readLessTxt = " Read Less";
    
        //Traverse all selectors with this class and manupulate HTML part to show Read More
        $(".addReadMore").each(function() {
            if ($(this).find(".firstSec").length)
                return;
    
            var allstr = $(this).text();
            if (allstr.length > carLmt) {
                var firstSet = allstr.substring(0, carLmt);
                var secdHalf = allstr.substring(carLmt, allstr.length);
                var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
                $(this).html(strtoadd);
            }
    
        });
        //Read More and Read Less Click Event binding
        $(document).on("click", ".readMore,.readLess", function() {
            $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
        });
    }
    $(function() {
        //Calling function after Page Load
        AddReadMore();
    });
    

});
//Footer vertical/mobile menus
function displayVerticalMenu() {
    let x = document.getElementById("mobVM");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
//Reviews tiny slider below
let slider = tns({
    container: '.my-slider',
    items: 2,
    rewind: true,
    swipeAngle: false,
    speed: 250
  });
  // Changes tiny slider button sizes on click
$('.tns-nav > button').click(function() {
    if ($('.tns-nav > button').css({'width': '22px'})) {
        $(this).css({'width': '35px'})
    } else {
        $(this).css({'width': '22px'});
    }
});
//Display comments in NEWS.PHP
function displayComments() {
    let x = document.getElementById("comments");
    if (x.style.display === "block") {
        x.style.display = "none"
    } else {
        x.style.display = "block";
    }
}