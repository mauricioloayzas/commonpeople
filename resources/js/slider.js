const data = [
    {
        title: "Title 1",
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
        order: 1,
        images: [
            {
                folder: "images",
                name: "slider-image-1.jpg",
                order: 1
            },
            {
                folder: "images",
                name: "slider-image-2.jpg",
                order: 2
            },
            {
                folder: "images",
                name: "slider-image-3.jpg",
                order: 3
            },
            {
                folder: "images",
                name: "slider-image-4.jpg",
                order: 4
            }
        ]
    },
    {
        title: "Title 2",
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
        order: 2,
        images: [
            {
                folder: "images",
                name: "slider-image-1.jpg",
                order: 1
            },
            {
                folder: "images",
                name: "slider-image-2.jpg",
                order: 2
            },
            {
                folder: "images",
                name: "slider-image-3.jpg",
                order: 3
            },
            {
                folder: "images",
                name: "slider-image-4.jpg",
                order: 4
            }
        ]
    },
    {
        title: "Title 3",
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
        order: 3,
        images: [
            {
                folder: "images",
                name: "slider-image-1.jpg",
                order: 1
            },
            {
                folder: "images",
                name: "slider-image-2.jpg",
                order: 2
            },
            {
                folder: "images",
                name: "slider-image-3.jpg",
                order: 3
            },
            {
                folder: "images",
                name: "slider-image-4.jpg",
                order: 4
            }
        ]
    },
    {
        title: "Title 4",
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
        order: 4,
        images: [
            {
                folder: "images",
                name: "slider-image-1.jpg",
                order: 1
            },
            {
                folder: "images",
                name: "slider-image-2.jpg",
                order: 2
            },
            {
                folder: "images",
                name: "slider-image-3.jpg",
                order: 3
            },
            {
                folder: "images",
                name: "slider-image-4.jpg",
                order: 4
            }
        ]
    }
];
 $(document).ready(function(){
     $("#slider-title").html(data[0].title);
     $("#slider-description").html(data[0].description);
     $("#current-slider").html(data[0].order);

     data[0].images.forEach(loadImageCarousel);
 });

$("#counter-total").html(data.length);

$("#control-right").click(function (){
    let actual = parseInt($("#current-slider").html()) + 1;
    if(actual <= parseInt($("#counter-total").html())){
        $("#slider-title").html(data[actual - 1].title);
        $("#slider-description").html(data[actual - 1].description);
        $("#current-slider").html(data[actual - 1].order);
        data[actual - 1].images.forEach(loadImageCarousel);
    }else{
        $("#slider-title").html(data[0].title);
        $("#slider-description").html(data[0].description);
        $("#current-slider").html(data[0].order);
        data[0].images.forEach(loadImageCarousel);
    }
});

$("#control-left").click(function (){
    let actual = parseInt($("#current-slider").html()) -1;
    let max = parseInt($("#counter-total").html()) -1;
    if(actual >= 1){
        $("#slider-title").html(data[actual - 1].title);
        $("#slider-description").html(data[actual - 1].description);
        $("#current-slider").html(data[actual - 1].order);
        data[actual - 1].images.forEach(loadImageCarousel);
    }else{
        $("#slider-title").html(data[max].title);
        $("#slider-description").html(data[max].description);
        $("#current-slider").html(data[max].order);
        data[max].images.forEach(loadImageCarousel);
    }
});

function loadImageCarousel(item, index, images){
    $("#slider-image-"+item.order).attr("src", item.folder+"/"+item.name);
    $(".carousel-indicators-button").removeClass("active");
    $(".carousel-item").removeClass("active");
    $("#btn-slider-image-1").addClass("active");
    $("#slider-carousel-item-1").addClass("active");
}
