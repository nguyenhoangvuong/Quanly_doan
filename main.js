$(function() {
    if($('.home').click){
        $('.home').click(function(e) {
            e.preventDefault();
            $('.center-parent').show();$('.center-parent1').hide();$('.center-parent2').hide()
            ;$('.center-parent3').hide();$('.center-parent4').hide();$('.center-parent5').hide();
            $('.center-parent6').hide();$('.center-parent7').hide();
        });
    }
    if($('.home1').click){
        $('.home1').click(function(e) {
            e.preventDefault();
            $('.center-parent').hide();$('.center-parent1').show();$('.center-parent2').hide();
            $('.center-parent3').hide();$('.center-parent4').hide();$('.center-parent5').hide();
            $('.center-parent6').hide();$('.center-parent7').hide();
        });
    }
    if($('.home2').click){
        $('.home2').click(function(e) {
            e.preventDefault();
            $('.center-parent').hide();$('.center-parent1').hide();$('.center-parent2').show();
            $('.center-parent3').hide();$('.center-parent4').hide();$('.center-parent5').hide();
            $('.center-parent6').hide();$('.center-parent7').hide();
        });
    }
    if($('.home3').click){
        $('.home3').click(function(e) {
            e.preventDefault();
            $('.center-parent').hide(); $('.center-parent1').hide(); $('.center-parent2').hide();
            $('.center-parent3').show();$('.center-parent4').hide();$('.center-parent5').hide();
            $('.center-parent6').hide();$('.center-parent7').hide();
        });
    }
    if($('.home4').click){
        $('.home4').click(function(e) {
            e.preventDefault();
            $('.center-parent').hide();$('.center-parent1').hide();$('.center-parent2').hide();
            $('.center-parent3').hide();$('.center-parent4').show();$('.center-parent5').hide();
            $('.center-parent6').hide();$('.center-parent7').hide();
        });
    }
    if($('.home5').click){
        $('.home5').click(function(e) {
            e.preventDefault();
            $('.center-parent').hide(); $('.center-parent1').hide(); $('.center-parent2').hide();
            $('.center-parent3').hide();$('.center-parent4').hide();$('.center-parent5').show();
            $('.center-parent6').hide();$('.center-parent7').hide();
        });
    }
    if($('.home6').click){
        $('.home6').click(function(e) {
            e.preventDefault();
            $('.center-parent').hide();$('.center-parent1').hide(); $('.center-parent2').hide();
            $('.center-parent3').hide();$('.center-parent4').hide();$('.center-parent5').hide();
            $('.center-parent6').show();$('.center-parent7').hide();
        });
    }
    if($('.home7').click){
        $('.home7').click(function(e) {
            e.preventDefault();
            $('.center-parent').hide(); $('.center-parent1').hide(); $('.center-parent2').hide();
            $('.center-parent3').hide(); $('.center-parent4').hide();$('.center-parent5').hide(); 
            $('.center-parent6').hide();$('.center-parent7').show();$('.tittle').show();
        });
    }
});
// 
$('.close').click(function(e) {
    e.preventDefault();
    $('.tittle').hide();
});
