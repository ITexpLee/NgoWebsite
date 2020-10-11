$(document).ready(function(){

// Play and Pause Button for video/audio

    $('#play').click(function(){
        var vid = document.getElementById('videobg');
        vid.muted = false;
        console.log('Sound ON');
    });

    $('#pause').click(function(){
        var vid = document.getElementById('videobg');
        vid.muted = true;
        console.log('Sound OFF');
    });
});
