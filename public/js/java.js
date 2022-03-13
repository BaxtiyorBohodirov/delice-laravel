$('.section-two-menu-item a').on('click', function(ev){
    alert('Ishlayabti');
    $.ajax({
        type:'get',
        url:'/getProducts/'+$(this).attr('id'),
    }).done(function(data1){
        $('.catalog-menu-item a.active').removeClass('active');
        $(ev.target).addClass('active');
        var s="";
        for(let item of data1.model)
        {
            s+="<div class='section-two-block-item col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12'>"+
            "<div class='section-two-block-item-img'>"+
                "<img src='"+item.image+"' alt=''>"+
                "<div class='section-two-block-item-img-button-div'>"+
                    "<button type='type' class='section-two-block-item-img-button'>Подробнее</button>"+
                "</div></div>"+
            "<h6 class='section-two-block-item-title'>"+item.title_uz+"</h6>"+
            "<p class='section-two-block-item-text'>"+item.sub_content_uz+"</p>"+
            "<p class='section-two-block-item-sum'><span>"+item.price+"</span>сум</p>"+
        "</div>";
        }
        $('.section-two-block.row .row').html(s);
   }).fail(function(){
        console.log("Xatolik sodir bo'ldi")
    });
    return false;
});
$('#contactForm').submit(function(){
    $.ajax({
        type:'POST',
        data:$(this).serializeArray(),
        url:'contact-form',
    }).done(function(data){
       console.log(data);
    });
    return false;
});
$('.card-about-menu-link').on('click',function(ev){
    $.ajax({
        type:'GET',
        url:'get-product-detail/'+$(this).attr('id'),
    }).done(function(data){
        $('.card-about-text p').html(data.detail.content_uz);
        $('.card-about-menu-link.active').removeClass('active');
        $(ev.target).addClass('active');
    });
    return false;
});
$('.catalog-menu-item a').on('click', function(ev){
    alert('Ishlayabti');
    $.ajax({
        type:'get',
        url:'/getProducts/'+$(this).attr('id'),
    }).done(function(data1){
        $('.catalog-menu-item a.active').removeClass('active');
        $(ev.target).addClass('active');
        var s="";
        for(let item of data1.model)
        {
            s+="<div class='section-two-block-item col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>"+
            "<div class='section-two-block-item-img'>"+
                "<img src='"+item.image+"' alt=''>"+
                "<div class='section-two-block-item-img-button-div'>"+
                    "<button type='type' class='section-two-block-item-img-button'>Подробнее</button>"+
                "</div></div>"+
            "<h6 class='section-two-block-item-title'>"+item.title_uz+"</h6>"+
            "<p class='section-two-block-item-text'>"+item.sub_content_uz+"</p>"+
            "<p class='section-two-block-item-sum'><span>"+item.price+"</span>сум</p>"+
        "</div>";
        }
        $('.section-two-block.row').html(s);
   }).fail(function(){
        console.log("Xatolik sodir bo'ldi")
    });
    return false;
});