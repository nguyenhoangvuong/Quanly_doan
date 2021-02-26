$(function() {
    if($('.home').click){
        $('.home').click(function(e) {
            e.preventDefault();
            $('.center-parent').show();
            $('.center-parent1').hide();
            $('.center-parent7').hide();
        });
    }
    if($('.home1').click){
        $('.home1').click(function(e) {
            e.preventDefault();
            $('.center-parent1').show();
            $('.center-parent').hide();
            $('.center-parent7').hide();
        });
    }
    if($('.home7').click){
        $('.home7').click(function(e) {
            e.preventDefault();
            $('.center-parent1').hide();
            $('.center-parent').hide();
            $('.center-parent7').show();
        });
    }
});