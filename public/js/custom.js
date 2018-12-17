
jQuery(document).ready(function () {

var arr=[];
    var myPlaylist = new jPlayerPlaylist({
        jPlayer: "#jquery_jplayer_1",
        cssSelectorAncestor: "#jp_container_1"
    }, [], {
        swfPath: "/public/player/dist/jplayer",

        supplied: "oga, mp3",
        wmode: "window",
        useStateClassSkin: true,
        autoBlur: false,
        smoothPlayBar: true,
        keyEnabled: true
    });
    $('.play_my_music').each(function(){
        arr.push({
            title: $(this).data('music_name'),
            artist:$(this).data('art_name'),
            mp3: "/public/musice/" +  $(this).data('music_name'),
            oga: "/public/musice/" +  $(this).data('music_name'),
            poster: $(this).data('track_image')
        });
    })
    myPlaylist.setPlaylist(arr);


$('.jp-next').click(function () {
    myPlaylist.next();
});
    $('.prev-music').click(function () {
        myPlaylist.previous();
});
    $('.jp-shuffles').click(function () {
        myPlaylist.shuffle();
});
    $('.m-repeat').click(function () {
        myPlaylist.shuffle();
});
    $(function(){
        $('#Container').mixItUp();
    });
    
    $('.audio').prop("volume", 0);
    var acc = document.getElementsByClassName("accordion");
    var i;
    $('.btn-play_play').on('click', function () {
        $('.audio').prop("play");
    });
    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function () {
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }
    function hideall() {
        $('.tags-one-part').hide();
        $('.lyrics-part').hide();
        $('.settings-part').hide();
        $('.tags-two-part').hide();
        $('.setting-two-part').hide();
        $('.artwork-part').hide();
    }

    $('#jp-volume-bar').mousedown(function() {
        var parentOffset = $(".jp-volume-bar-width").offset(),
            width = $(".jp-volume-bar-width").width();
        $(window).mousemove(function(e) {
            var x = e.pageX - parentOffset.left,
                volume = x/width;
            if (volume > 1) {
                $("#jquery_jplayer_1").jPlayer("volume", 1);
            } else if (volume <= 0) {
                $("#jquery_jplayer_1").jPlayer("mute");
            } else {
                $("#jquery_jplayer_1").jPlayer("volume", volume);
                $("#jquery_jplayer_1").jPlayer("unmute");
            }
        });
        $(window).mouseup(function() {
            $(window).unbind();
        });
        return false;
    })
    $('#jp-progress-bar').mousedown(function() {
        var width = $(".jp-progress-bar-width").width();
        $(window).mousemove(function(e) {
            var parentOffset = $("#jp-progress-bar").offset();

            var x = e.pageX - parentOffset.left,

                volume = x; console.log(volume);
            // if (volume > 752) {
            //     $("#jquery_jplayer_1").jPlayer("stop");
            // }
            // else if (volume <= 0) {
            //     $("#jquery_jplayer_1").jPlayer("stop");
            // } else {
            // $("#jquery_jplayer_1").jPlayer("pause");
            $("#jquery_jplayer_1").jPlayer("play", volume);
            // $("#jquery_jplayer_1").jPlayer("currentTime");
            // }
        });
        $(window).mouseup(function() {
            $(window).unbind();
        });
        return false;
    })

    hideall();
    $('.jp-playlist-item').on('click', function () {
       $('.op-mod').trigger('click');
    });
    	// $('.resized-alb-part').on('click',function() {
	// 	var track_id=$(this).attr('id');
	// 	$.ajax({
	// 		type: "POST",
	// 		url: 'index.php/welcome/getmusicfromalbum',
     //        data: {track_id:track_id},
	// 		dataType: 'JSON',
	// 		success: function (data) {
     //            // var k = parseJSON(data);
     //            $.each( data, function( key, value ) {
     //            var tbody=
	// 			'<tbody class="hover-table">'+
     //            '<tr>'+
     //            '<td class="table_icons"><i class="glyphicon glyphicon-heart-empty"></i> <i class="glyphicon glyphicon-share"></i></td>'+
     //            '<td>'+value['name']+'</td>'+
     //            '<td>asd</td>'+
     //            '<td>ONLEC</td>'+
     //            '<td class="download">' +
     //                '<div  class="col-lg-12 downdiv">'+
     //            '<a class="btn_download" href="../../public/musice/Тимати%20feat.%20Егор%20Крид%20-%20Где%20ты,%20где%20я%20(премьера%20клипа,%202016).mp3" download="file.mp3">download</a>' +
     //                '</div>'+
     //                '<div class="col-lg-12 progressing_dwn display-none">'+
     //            '<div class="col-lg-6">' +
     //            '<div class="progress">'+
     //            '<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">'+
     //                    '50% Complete'+
     //                    '</div>'+
     //                    '</div>' +
     //            '</div>' +
     //                '<div class="col-lg-4">' +
     //                '<a href="#">'+
     //            '<img class="canceldownbtn" src="../../public/icons/canceldownload.png">' +
     //                '</a>'+
     //            '</div>'+
     //                '</div>'+
     //            ' </td>'+
     //                '</tr>';
     //        $('.playlist-table').prepend(tbody);
     //            });
	// 		},
	// 	});
    //
	// });
    $('.left-album-menu li').on('click',function () {
        if($(this).hasClass('albums-list')) {
        $('.left-album-menu li').removeClass('active-artist');
            $(this).addClass('active-artist');
        }
    });
    $('.albums-list').on('click',function () {
        var countalb='';
        $('.exp-part').html('');
        $('.profile').html('');
        $('.similer-part').html('');
        $('.mus-explorer').html('');
        var selected_art=$(this).attr('id');
        var selectrel=$(this).attr('relation');



        $.ajax({
            type: "POST",
            url: 'index.php/welcome/getalbfromart',
            data: {selected_art:selected_art},
            dataType: 'JSON',
            success: function (data) {

                if(data != '') {
                    countalb=data.length;
                    $.each(data, function (key, value) {
                        console.log(value);
                        var alblist =
                            '<div class="col-lg-2 resized-alb-part">' +
                            '<img src="../../public/img/' + value['img'] + '" width="126px" height="121px">' +
                            '<h6 class="text-center _first" style="width: 126px">' + value["name"] + '</h6>' +
                            '<h6 class="text-center" style="width: 126px">'+value['']+'</h6>' +
                            '</div>';

                        $('.exp-part').append(alblist);
                    });
                }
                else {
                    var alblist= '<h2 class="text-center">Empty Album </h2>'
                    $('.exp-part').append(alblist);
                }

            },

        });
        $.ajax({
            type: "POST",
            url: 'index.php/welcome/getartwikipedia',
            data: {selected_art:selected_art},
            dataType: 'JSON',
            success: function (data) {
                $.each(data, function (key, value) {
                    var albInfo =  '<div class="col-lg-4" style="padding-left: 0">'+
                        '<img style=" padding: 20px 0;" src="../../public/img/l-'+value['img']+'" class="img-info">'+
                        '</div>'+
                    '<div class="col-lg-7 infos">'+
                        '<h3 class="name-artin-profile">'+value['name']+'</h3>'+
                        '<span class="profile-sing-art">Singer and Artist</span>'+
                    '<p class="profile-wikiped"><text>'+value['description']+'</text></p>'+
                        '<button class="btn btn-info"> Read More</button>'+
                    '<div class="download pull-right">'+
                        '</div>'+
                        '</div>';
                $('.profile').append(albInfo);



                    var     leftab =
                    '<div class="col-lg-5 mus_exp_leftab">'+
                    '<div class="col-lg-4">'+
                    '<img src="../../public/img/'+value['img']+'" class="img-circle" height="106px" width="105px">'+
                    '</div>'+
                    '<div class="col-lg-6 mus-exp-left-part">'+
                    '<h2 class="mus-exp-name-artist">'+value['name']+'</h2>'+
                    '<span class="mus-exp-infoToalb">Singer and Artist</span>'+
                    '</div>'+
                    '</div>'+
                    '<div class="col-lg-3 mus-exp-center-part">'+
                        '<h5 class="mus-exp-center-desc">TOP PACKS</h5>'+
                    '<span class="mus-exp-total-album">Total albums</span><span>'+ countalb +'</span>'+
                    '</div>'+
                    '<div class="col-lg-3 text-center mus-exp-right-part" style="height: 67px;">'+
                        '<h5><i class="glyphicon glyphicon-music " style="right: 5px"></i>NOW PLAYING</h5>'+
                    '<span class="exp-current-mus">Total albums</span><span>25</span>'+
                    '</div>';
                    $('.mus-explorer').append(leftab);

            })
            },

        });
        $.ajax({
            type: "POST",
            url: 'index.php/welcome/getsimilerart',
            data: {selectrel:selectrel},
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
                $.each(data, function (key, value) {
                    var albInfo =
                        '<div id="1" class="col-lg-2 resized-alb-part select-albums">'+
                        '<img src="../../public/img/'+value['img']+'" width="126px" height="121px">'+
                        '<h6 class="text-center _first">'+value['name']+'</h6>'+
                    '<h6 class="text-center">Eoster the People</h6>'+
                    '</div>';
                    $('.similer-part').append(albInfo);

                });
            },

        });
    });
    

//		$('playlist-now-table').height($('body .container-fluid').height());
    $('playlist-now-table').css('height', $('body .container-fluid').height());
    $("#input-21f").rating({
        starCaptions: function(val) {
            if (val < 3) {
                return val;
            } else {
                return 'high';
            }
        },
        starCaptionClasses: function(val) {
            if (val < 3) {
                return 'label label-danger';
            } else {
                return 'label label-success';
            }
        },
        hoverOnClear: false
    });

    $('#rating-input').rating({
        min: 0,
        max: 5,
        step: 1,
        size: 'lg',
        showClear: false
    });

    $('#btn-rating-input').on('click', function() {
        $('#rating-input').rating('refresh', {
            showClear:true,
            disabled: !$('#rating-input').attr('disabled')
        });
    });


    $('.btn-danger').on('click', function() {
        $("#kartik").rating('destroy');
    });

    $('.btn-success').on('click', function() {
        $("#kartik").rating('create');
    });

    $('#rating-input').on('rating.change', function() {
        alert($('#rating-input').val());
    });


    $('.rb-rating').rating({'showCaption':true, 'stars':'3', 'min':'0', 'max':'3', 'step':'1', 'size':'xs', 'starCaptions': {0:'status:nix', 1:'status:wackelt', 2:'status:geht', 3:'status:laeuft'}});
    $('.mus-table-profile').addClass('display-none');
    $('.profile').addClass('display-none');
    $('.album_state a').addClass('active');

$('.navbar-nav li').click(function () {
    $('.active').removeClass('active');
    $(this).addClass('active');
});

function myFunction() {
    setInterval(function(){ $('.player-point-end').css('left',$('.music-progress-bar').width()-10); }, 1);
    setInterval(function(){ $('.volume-pointer').css('left',$('.jp-volume-bar-value').width()+15); }, 1);
}
myFunction();
$('#playlist').on('click',function () {
    $('.mus-table').removeClass('display-none');
    $('.explorer-table').addClass('display-none');
    $('.playlist-now-table').addClass('display-none');
    $('.album-part').removeClass('display-none');
    $('.left-album-menu').addClass('display-none');
    $('.left-album-menu-two').removeClass('display-none');
    $('.musics-table').addClass('display-none');
    $('.mus-tbl-right').removeClass('display-none');
    $('.mus-table .mus-exp-nav-h6').removeClass('display-none');
    $('.sidebar-brand').removeClass('disp-none-imp');
    $('.tr-info').hide();
    var path='albums';


});
$('#mus_expolore').on('click',function () {
    $('.mus-table').addClass('display-none');
    $('.playlist-now-table').addClass('display-none');
    $('.explorer-table').removeClass('display-none');
    $('.album-part').removeClass('display-none');
    $('li').removeClass('mus-exp-nav-active');
    $('#album_state').addClass('mus-exp-nav-active');
    $('.left-album-menu').removeClass('display-none');
    $('.left-album-menu-two').addClass('display-none');
    $('.tr-info').show();
    $('.musics-table').addClass('display-none');
    $('.mus-tbl-right').removeClass('display-none');
    $('.info-left-tr').hide();


});
$('#all-musics-part').on('click',function () {
    $('.playlist-now-table').addClass('display-none');
    $('.mus-table').addClass('display-none');
    $('.mus-tbl-right').addClass('display-none');
    $('.explorer-table').addClass('display-none');
    $('.left-album-menu-two').addClass('display-none');
    $('.left-album-menu ').removeClass('display-none');
//		$('.left_bar').hide();
    $('.musics-table').removeClass('display-none');
    $('.album-part').removeClass('display-none');
    $('.info-left-tr').show();

});
$('#album_state').click(function () {
    $('.mus-exp-nav-h6').removeClass('display-none');
    $('.mus-table-profile').addClass('display-none');
    $('.profile').addClass('display-none')
    $('.similer-part').addClass('display-none');
});
    $('#similar-artists').on('click',function () {
        $('.mus-exp-nav-h6').addClass('display-none');
        $('.mus-table-profile').addClass('display-none');
        $('.profile').addClass('display-none');
        $('.similer-part').removeClass('display-none');

    });
$('#profile').click(function () {
    $('.mus-table-profile').removeClass('display-none');
    $('.profile').removeClass('display-none');
    $('.mus-exp-nav-h6.exp-part').removeClass('display-none');
    $('.similer-part').addClass('display-none');
});
$('body').on('click','#playing_now',function () {
    $('.mus-table').addClass('display-none');
    $('.explorer-table').addClass('display-none');
    $('.album-part').addClass('display-none');
    $('.playlist-now-table').removeClass('display-none');
    $('.mus-tbl-right').removeClass('display-none');
    $('.tr-info').hide();
    $('.musics-table').addClass('display-none');
    $('.sidebar-brand').addClass('disp-none-imp');

});
    $('body').on('click','.left-album-menu-two .album-two',function () {
        $('.left-album-menu-two .album-two').removeClass('left-album-menu-two-active');
        $('.left-album-menu-two .album-two-albums').removeClass('left-album-menu-two-active');
        $(this).addClass('left-album-menu-two-active');
        $('.mus-exp-nav-top-row').addClass('display-none');
        $('.mus-tbl-right').addClass('display-none');

        console.log($(this).data('post_item'));
        var dataPostItem = $(this).data('post_item');
        $.ajax({
            type: "POST",
            url: 'index.php/welcome/getwithplaylisttab',
            data: {dataPostItem: dataPostItem},
            dataType: 'JSON',
            success: function (data) {
                // var k = parseJSON(data);
                console.log(data);
                $('.hover-table-tbody').html('');
                $.each(data, function (key, value) {
                    var tbody =
                        '<tr>' +
                        '<td class="table_icons"><i class="glyphicon glyphicon-heart-empty pull-left"></i>'+
                            '<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="box_count" data-size="small" data-mobile-iframe="true">' +
                            '<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">'+
                            '<i class="glyphicon glyphicon-share share-onfb"></i>'+
                            '</a>'+
                            '</div>'+
                        '</td>' +
                        '<td>' + value["name"] + '</td>' +
                        '<td>asd</td>' +
                        '<td>ONLEC</td>' +
                        '<td class="download">' +
                        '<div  class="col-lg-12 downdiv">' +
                        '<a class="btn_download" href="../../public/musice/Тимати%20feat.%20Егор%20Крид%20-%20Где%20ты,%20где%20я%20(премьера%20клипа,%202016).mp3" download="file.mp3">download</a>' +
                        '</div>' +
                        '<div class="col-lg-12 progressing_dwn display-none">' +
                        '<div class="col-lg-6">' +
                        '<div class="progress">' +
                        '<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">' +
                        '50% Complete' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-lg-4">' +
                        '<a href="#" class="canceldownbtn-btn">' +
                        '<img class="canceldownbtn" src="../../public/icons/canceldownload.png">' +
                        '</a>' +
                        '</div>' +
                        '</div>' +
                        ' </td>' +
                        '</tr>';
                    $('.hover-table-tbody').append(tbody);
                });
            },

            });
$('.mus-exp-nav-h6').addClass('display-none');
$('.playlist-table').removeClass('display-none');

    });
    // $('body').on('click','.btn_download',function () {
    //     $(this).parent().next().removeClass('display-none');
    //     $(this).addClass('display-none');
    // });
    $('body').on('click','.nav-musics-table ul li',function () {
        $('.nav-musics-table ul li a').removeClass('nav-m-t-active');
        $(this).removeClass('active');
        $(this).children().addClass('nav-m-t-active');
    });
    $('#all-musics-part').on('click',function () {
        $('.nav-musics-table ul li a').removeClass('nav-m-t-active');
        $('.music-nav-albums').addClass('nav-m-t-active');

    });
$('#tags-one-a').on('click', function () {
    hideall();
    $('.tags-one-part').show();
});
$('#tags-two-a').on('click', function () {
    hideall();
    $('.tags-two-part').show();
});
$('#propert').on('click', function () {
    hideall();
    $('.settings-part').show();
});
$('#lyrics').on('click', function () {
    hideall();
    $('.lyrics-part').show();
});
$('#settings').on('click', function () {
    hideall();
    $('.setting-two-part').show();
});
$('.op-mod').on('click',function () {
    $('.modal-body-part').hide();
    $('.modal-body li').removeClass('modal-nav-active');
    $('.modal-body li').removeClass('active');
    $('.settings-part').show();
    $('#propert').addClass('active');
});
$('#artwork').on('click',function () {
    hideall();
    $('.artwork-part').show();
});
$('.modal-body ul li').click(function () {
    $('.modal-body ul li').removeClass('modal-nav-active');
    $(this).addClass('modal-nav-active');
});
$('.nav-head li').click(function () {
    if( $(this).hasClass('my_menus')) {
    $('.nav-head li').removeClass('actived-body-nav');
        $(this).addClass('actived-body-nav');
    }
        $(this).removeClass('active');
});
$('.mus-exp-nav ul li').click(function () {
    $('.mus-exp-nav ul li').removeClass('mus-exp-nav-active');
    $(this).addClass('mus-exp-nav-active');
});

$('.btn-next').on('click',function () {
    $( ".modal-nav-active" ).next().addClass('modal-nav-active');
    $( ".modal-body .active" ).next().addClass('modal-nav-active');
    $( ".modal-nav-active" ).prev().removeClass('modal-nav-active');
    $( ".modal-nav-active" ).prev().removeClass('active');
    $( ".modal-nav-active a" ).trigger('click');

});
$('.btn-prev').on('click',function () {
    $( ".modal-nav-active" ).prev().addClass('modal-nav-active');
    $( ".modal-nav-active" ).next().removeClass('modal-nav-active');
    $( ".modal-nav-active" ).next().removeClass('active');
    $( ".modal-nav-active a" ).trigger('click');
});
$('.btn-play_play').on('click',function () {
    $('.jp-play').trigger('click');
});
$('.btn-play_play').on('click',function () {
    $(this).hide();
    $('.pausing').show();

});
$('.pausing').on('click',function () {
    $(this).hide();
    $('.playing').show();

});
var defaultRange=1;
var changePixel=20;


var defaultSizeimg=$('.mus-exp-nav-h6 img').width();
$('.range-txt').on('change',function () {
    if($('.range-txt').val()<defaultRange){
        $('.mus-exp-nav-h6 .col-lg-3').addClass('col-lg-2');
        $('.mus-exp-nav-h6 .col-lg-4').addClass('col-lg-2');
        $('.mus-exp-nav-h6 .col-lg-3').removeClass('col-lg-3');
        $('.mus-exp-nav-h6 .col-lg-4').removeClass('col-lg-3');
        // $('.mus-exp-nav-h6 img').width(defaultSizeimg - changePixel);

    }
    else if($('.range-txt').val()>defaultRange) {
        $('.mus-exp-nav-h6 .col-lg-3').addClass('col-lg-4');
        $('.mus-exp-nav-h6 .col-lg-2').addClass('col-lg-4');
        $('.mus-exp-nav-h6 .col-lg-3').removeClass('col-lg-3');
        $('.mus-exp-nav-h6 .col-lg-2').removeClass('col-lg-2');
        // $('.mus-exp-nav-h6 img').width(defaultSizeimg + changePixel);
    }
    else {
        $('.mus-exp-nav-h6 .col-lg-4').addClass('col-lg-3');
        $('.mus-exp-nav-h6 .col-lg-2').addClass('col-lg-3');
        $('.mus-exp-nav-h6 .col-lg-4').removeClass('col-lg-4');
        $('.mus-exp-nav-h6 .col-lg-2').removeClass('col-lg-2');
        // $('.mus-exp-nav-h6 img').width(defaultSizeimg);
    }
});
    function saveFile(url) {
        // Get file name from url.
        var filename = url.substring(url.lastIndexOf("/") + 1).split("?")[0];
        var xhr = new XMLHttpRequest();
        xhr.responseType = 'blob';
        xhr.onload = function() {
            var a = document.createElement('a');
            a.href = window.URL.createObjectURL(xhr.response); // xhr.response is a blob
            a.download = filename; // Set the file name.
            a.style.display = 'none';
            document.body.appendChild(a);
            a.click();
            delete a;
        };
        xhr.open('GET', url);
        xhr.send();
    }
    // $('.left-album-menu li').first().trigger('click');
    // $('.left-album-menu li').first().addClass('active-artist');
// $('.select-albums').on('click',function () {
// //		$(this).attr('id');
//     //ajax_
//     console.log($(this).attr('id'));
//     $('.select-albums').addClass('display-none');
//     $('.playlist-table').removeClass('display-none');
// });
$('.m-repeat').on('click',function () {
    $('.mus-repeat').trigger('click')
});
$('.btn-mus').on('click',function () {
    $('.track-name').text('');
    $('.track-name').append($('.jp-playlist-current').text());

    $('.mus-time-part').append($('.mus-time'));


});
$('.music-range').change(function () {
   if($('.music-range').val()==2){
       $('.grid-to-list').addClass('width-img-max');
       $('.grid-to-list').removeClass('width-img-min');
       $('.play_my_music h6').removeClass('width-img-min-txt');
       $('.onmoushover_in_album').removeClass('onmoushover_in_album-min');
   }
    else if($('.music-range').val()==1) {
       $('.grid-to-list').removeClass('width-img-max');
       $('.grid-to-list').removeClass('width-img-min');
       $('.play_my_music h6').removeClass('width-img-min-txt');
       $('.onmoushover_in_album').removeClass('onmoushover_in_album-min');
   }
   else if($('.music-range').val()==0) {
       $('.grid-to-list').addClass('width-img-min');
       $('.grid-to-list').removeClass('width-img-max');
       $('.play_my_music h6').addClass('width-img-min-txt');
       $('.onmoushover_in_album').addClass('onmoushover_in_album-min');
   }


});
    $('body').on('mouseover','.element-item',function (){
    if($('.select-check').hasClass('display-none')==true) {
        $(this).find($('.onmoushover_in_album')).removeClass('display-none');
    }
    });
    $('body').on('mouseout','.element-item',function (){
        if($('.select-check').hasClass('display-none')==true) {
            $(this).find($('.onmoushover_in_album')).addClass('display-none');
        }
    });
    $('body').on('click','.element-item',function (){
        $(this).find($('.onmoushover_in_album')).addClass('display-none');
    });

        var playing=1;
    $('.trackIsPlayin a span ').each(function(i,v){
        playing =  $(this).text();

    });
    $('.select-2-download').on('click',function () {
        if($('.select-check').hasClass('display-none')){

        $('.select-check').removeClass('display-none');
        }
        else{
            $('.select-check').addClass('display-none');
        }
    });
    var selectedmusic=[];
    $('.select-check').on('click',function () {

    if($(this).is(':checked')) {

        selectedmusic.push($(this).val());
    }
        else {
        var removeItem=$(this).val();
        selectedmusic = jQuery.grep(selectedmusic, function(value) {
            return value != removeItem;
        });
        console.log(selectedmusic);
    }

    });

    selectedmusic=jQuery.unique( selectedmusic );
    $('.sl-for-dwn').on('click',function () {

        // console.log(selectedmusic[0]);
       var i = 0;
            while(selectedmusic.length !=i){

                saveFile('../../public/musice/'+selectedmusic[i]);
                i++;
            }

    });
    

   // console.log($('body .trackIsPlayin').attr('data-trackIsPlayin'));
    // $.ajax({
    //     type: "POST",
    //     url: 'index.php/welcome/getplayingtracks',
    //     data: {playing:playing},
    //     dataType: 'JSON',
    //     success: function (data) {
    //         // var k = parseJSON(data);
    //         console.log(data);
    //         // $.each( data, function( key, value ) {
    //         //
    //         // });
    //     },
    // });

    $('body').on('click','.play_my_music',function(){

       var track_id=$(this).data('track_id');
        if($('.select-check').hasClass('display-none')==true) {

            // myPlaylist.setPlaylist([
            //     {
            //         title: $(this).data('music_name'),
            //         mp3: "/public/musice/" + $(this).data('music_name'),
            //         oga: "/public/musice/" + $(this).data('music_name'),
            //         poster: $(this).data('track_image')
            //     }
            // ]);



            // $(this).trigger('click');
            $('.album_img_two').attr('src', $(this).data('track_image'));
            $('.animate_container').removeClass('display-none')
            $('#image').attr('src', $(this).data('track_image'));
            $('#assemble').click();
            $('.album_img').attr('src', $(this).data('track_image'));
            if($(this).data('track_image')!=''){
                $('.player-artist-img').attr('src', $(this).data('track_image'));
            }
            else {
                $('.player-artist-img').attr('src', '../img/unknown.jpg');
            }
            $('.album_img_two').removeClass('display-none');
            $('.left-part-now-playing').removeClass('display-none')

            $('.playlist-now-table').css('background-image', 'url(../../'+$(this).data('track_image')+')');
            $('.track-name').text($(this).data('music_name'));
            $('.exp-current-mus').text('');
            $('.exp-current-mus').text($('.jp-playlist-current').text());
            $('.art_name').text($(this).data('art_name'));
            var ic='<span style="position: absolute" class="_icon display-none1">|</span>';
            $('._icon').html('|');
            $('.mus-exp-nowplaying-name').text($(this).data('music_name'));
            $('.mus-exp-timer').text($('.jp-duration ').text());
            $('.pausing').show();
            $('.playing').hide();
            myPlaylist.play($(this).data('track_pos'));
            console.log(888);
            console.log(myPlaylist);

            $.ajax({
                type: "POST",
                url: 'index.php/welcome/setrecentlyplaying',
                data: {track_id:track_id},
                dataType: 'JSON',
                success: function (data) {
                        console.log(data);
                }
            })

        }

    });


    $('body').on('click','.albums-list',function () {
        // $('.play_my_music').hide();
       // if($('.play_my_music').hasClass("artist_id_"+$(this).attr('id'))){
       //     $('.artist_id_'+$(this).attr('id')).show();
       //
       // }


        $('.grid').html('');

       var track_id=$(this).attr('id');
        $.ajax({
            type: "POST",
            url: 'index.php/welcome/getmusicfromalbumsel',
            data: {track_id:track_id},
            dataType: 'JSON',
            success: function (data) {
                    $.each( data, function( key, value ) {
                var list=
                        '<div data-track_id="'+value['track_id']+'" data-track_image='+"/public/img/"+value['track_image']+' data-music_name="'+value["trname"]+'"data-art_name="'+value['artname']+'" class="play_my_music element-item transition metal col-lg-2" data-category="transition">'+
                        '<input type="checkbox" value="'+value["trname"]+'" class="select-check display-none">'+
                        '<img class="weight grid-to-list" src="../../public/img/'+value["track_image"]+'" width="159px" height="159px">'+
                        '<img class="onmoushover_in_album display-none" src="../../public/icons/opacplay.png">'+
                        '<h6 class="text-center _firsttwo name" style="width: 159px">'+value["trname"]+'</h6>'+
                        '<h6 class="text-center _firsttwo-bottom" style="width: 159px">'+value["artname"]+'</h6>'+
                        '<p class="number display-none">2</p>' +
                        '<p class="symbol display-none">po</p>' +
                        '</div>';
                        $('.grid').append(list);
                    });
                return
            }
        })
    });
    $('.albums-list-all').click(function () {
        $('.albums-list').removeClass('active-artist');
        $(this).addClass('active-artist');


        $('.grid').html('');

        var track_id=1;
        $.ajax({
            type: "POST",
            url: 'index.php/welcome/getalbums',
            data: {track_id:track_id},
            dataType: 'JSON',
            success: function (data) {
                var arr=[];
                $.each( data, function( key, value ) {
                    var list=
                        '<div data-track_pos="'+key+'" data-track_id="'+value['track_id']+'" data-track_image='+"/public/img/"+value['track_image']+' data-music_name="'+value["trname"]+'" class="jp-playlist play_my_music element-item transition metal col-lg-2 artist_id_'+value['artist_id']+'" data-category="transition">'+
                        '<input type="checkbox" value="'+value["trname"]+'" class="select-check display-none">'+
                        '<img class="weight grid-to-list" src="../../public/img/'+value["track_image"]+'" width="159px" height="159px">'+
                        '<img class="onmoushover_in_album display-none" src="../../public/icons/opacplay.png">'+
                        '<h6 class="text-center _firsttwo name" style="width: 159px">'+value["trname"]+'</h6>'+
                        '<h6 class="text-center _firsttwo-bottom" style="width: 159px">'+value["artname"]+'</h6>'+
                        '<p class="number display-none">2</p>' +
                        '<p class="symbol display-none">po</p>' +
                        '</div>';
                    $('.grid').append(list);
                    arr.push({
                        title: value["trname"],
                        mp3: "/public/musice/" + value["trname"],
                        oga: "/public/musice/" + value["trname"],
                        poster: "/public/img/eminemaalb2.jpg"
                    });

                })
                myPlaylist.setPlaylist(arr);
                console.log(myPlaylist);
                return
            }
        })
    });
    $('body').on('click','.album-two-albums',function () {
        $('.mus-exp-nav-h6').removeClass('display-none');
        $('.mus-tbl-right').removeClass('display-none');
        $('.mus-exp-nav-top-row').removeClass('display-none');
        $('.mus-tbl-right').removeClass('display-none');
        $('.playlist-table').addClass('display-none');
        // $('#jp_container_1').addClass('display-none');
        $(this).addClass('left-album-menu-two-active');
        $('.album-two').removeClass('left-album-menu-two-active');
    });

    $('body').on('click','.canceldownbtn-btn',function () {
            $('.btn_download').removeClass('display-none');
        $('.progressing_dwn').addClass('display-none');
    });
            var a=0;
    var artistsarr=[];
    var arr = jQuery.makeArray( $('.jp-artist') );
    $('body').on('click','.my_menus',function () {
        if(a==0){
            $('.jp-playlist-item span').removeClass('jp-artist');

            $('.jp-playlist-ul.lol li').each(function(index) {
                    $(this).append(arr[index]);
            });
        }
        if($('#playing-now-tab').hasClass('actived-body-nav')){
            $('.jp-playlist-ul.lol').removeClass('right-part-lis-with_expl')
        }
        else{
            $('.jp-playlist-ul.lol ').addClass('right-part-lis-with_expl')
        }

    });
    $('.nav-search-tab').keyup(function () {
        if($('.nav-search-tab').val().length>=2){
            // $('.my_menus').first().click();
            var searctext=$('.nav-search-tab').val();
            $.ajax({
                type: "POST",
                url: 'index.php/welcome/searchmusic',
                data: {searctext: searctext},
                dataType: 'JSON',
                success: function (data) {
                    // console.log(data);
                    $('.grid').html('');

                    $.each(data, function (key, value) {
                        console.log(value['name'])
                        var list =
                            '<div data-track_pos="' + key + '" data-track_id="' + value['track_id'] + '" data-track_image=' + "/public/img/" + value['track_image'] + ' data-music_name="' + value["name"] + '" class="jp-playlist play_my_music element-item transition metal col-lg-2 artist_id_' + value['artist_id'] + '" data-category="transition">' +
                            '<input type="checkbox" value="' + value["name"] + '" class="select-check display-none">' +
                            '<img class="weight grid-to-list" src="../../public/img/' + value["track_image"] + '" width="159px" height="159px">' +
                            '<img class="onmoushover_in_album display-none" src="../../public/icons/opacplay.png">' +
                            '<h6 class="text-center _firsttwo name" style="width: 159px">' + value["trname"] + '</h6>' +
                            '<h6 class="text-center _firsttwo-bottom" style="width: 159px">' + value["artname"] + '</h6>' +
                            '<p class="number display-none">2</p>' +
                            '<p class="symbol display-none">po</p>' +
                            '</div>';
                        $('.grid').append(list);
                    })
                }
            })
        }
    })
});
