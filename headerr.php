<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Video Player</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    *{margin:0;padding:0;box-sizing:border-box;} .video-player{position:relative;width:100%;max-width:1100px;background:#000;border-radius:8px;overflow:hidden;margin:20px auto;} video{width:100%;height:auto;cursor:pointer;} .controls{position:absolute;bottom:0;width:100%;background:rgba(0,0,0,.7);padding:10px;display:flex;align-items:center;justify-content:space-between;opacity:0;visibility:hidden;transition:.3s;} .video-player:hover .controls{opacity:1;visibility:visible;} .controls button{background:none;border:none;color:#fff;font-size:18px;cursor:pointer;margin-right:10px;transition:.2s;} .controls button:hover{transform:scale(1.2);} .progress-bar{flex-grow:1;margin:0 10px;position:relative;cursor:pointer;} .progress-slider{width:100%;height:5px;appearance:none;background:linear-gradient(to right,#e20613 0%,#e20613 0%,#444 0%,#444 100%);border-radius:5px;outline:none;cursor:pointer;} .progress-slider::-webkit-slider-thumb{appearance:none;width:10px;height:10px;background:#fff;border-radius:50%;cursor:pointer;} .volume-slider{width:100px;height:5px;appearance:none;background:#444;border-radius:5px;outline:none;cursor:pointer;} .volume-slider::-webkit-slider-thumb{appearance:none;width:10px;height:10px;background:#e20613;border-radius:50%;cursor:pointer;} .play-icon,.pause-icon{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%) scale(0);font-size:60px;color:#fff;opacity:.8;z-index:10;pointer-events:none;transition:.3s;} .show-play-icon,.show-pause-icon{transform:translate(-50%,-50%) scale(1.2);opacity:1;} .hidden{transform:translate(-50%,-50%) scale(0);opacity:0;} .unmute-overlay{position:absolute;top:0;right:0;width:100%;height:100%;background:rgba(0,0,0,.4);display:flex;justify-content:center;align-items:center;color:#fff;font-size:16px;z-index:15;pointer-events:auto;} @media(max-width:768px){.controls{flex-wrap:nowrap;justify-content:space-between;} .progress-bar{order:1;flex-basis:100%;margin:10px 0;} .volume-controls{order:2;margin:10px 0;} .time,.fullscreen{display:none;} .volume-slider{width:80px;}} @media(max-width:480px){.controls button{font-size:14px;margin-right:5px;} .progress-slider{height:4px;} .volume-slider{width:60px;height:4px;} .play-icon,.pause-icon{font-size:40px;}}
  </style>
</head>
<body>
  <div class="video-player">
    <video id="video" preload="auto" src="assets/video/accounting.mp4" muted autoplay></video>
    <div id="unmute-overlay" class="unmute-overlay">Click to Unmute</div>
    <div class="play-icon hidden" id="play-icon"><i class="fas fa-play-circle"></i></div>
    <div class="pause-icon hidden" id="pause-icon"><i class="fas fa-pause-circle"></i></div>
    <div class="controls">
      <button id="play-pause"><i class="fas fa-pause"></i></button>
      <div class="progress-bar"><input type="range" id="progress-slider" min="0" max="100" step="0.1" value="0" class="progress-slider" /></div>
      <div class="time" id="time">0:00 / 0:00</div>
      <div class="volume-controls"><button id="volume-toggle"><i class="fas fa-volume-mute"></i></button><input type="range" id="volume-slider" class="volume-slider" min="0" max="1" step="0.1" value="0.5"></div>
      <button class="fullscreen" id="fullscreen"><i class="fas fa-expand"></i></button>
    </div>
  </div>
  <script>
    const v=document.getElementById("video"),p=document.getElementById("play-pause"),pi=document.getElementById("play-icon"),ps=document.getElementById("pause-icon"),s=document.getElementById("progress-slider"),t=document.getElementById("time"),fs=document.getElementById("fullscreen"),vt=document.getElementById("volume-toggle"),vl=document.getElementById("volume-slider"),u=document.getElementById("unmute-overlay");window.addEventListener("load",()=>{v.volume=1,vl.value=1,vl.style.background=`linear-gradient(to right, #e20613 ${v.volume*100}%, #444 ${v.volume*100}%)`,showIcon(ps)});p.addEventListener("click",togglePlayPause),v.addEventListener("click",togglePlayPause);function togglePlayPause(){v.paused?(v.play(),p.innerHTML='<i class="fas fa-pause"></i>',showIcon(ps)):(v.pause(),p.innerHTML='<i class="fas fa-play"></i>',showIcon(pi))}function showIcon(e){pi.classList.add("hidden"),ps.classList.add("hidden"),e.classList.remove("hidden"),e.classList.add(e===pi?"show-play-icon":"show-pause-icon"),setTimeout(()=>{e.classList.remove("show-play-icon","show-pause-icon"),e.classList.add("hidden")},600)}v.addEventListener("timeupdate",()=>{const e=v.currentTime/v.duration*100;s.value=e;const n=Math.floor(v.currentTime/60),o=Math.floor(v.currentTime%60),i=Math.floor(v.duration/60),l=Math.floor(v.duration%60);s.style.background=`linear-gradient(to right, #e20613 ${e}%, #444 ${e}%)`,t.textContent=`${n}:${o.toString().padStart(2,"0")} / ${i}:${l.toString().padStart(2,"0")}`}),s.addEventListener("input",e=>{v.currentTime=e.target.value/100*v.duration,s.style.background=`linear-gradient(to right, #e20613 ${s.value}%, #444 ${s.value}%)`}),vt.addEventListener("click",()=>{v.muted=!v.muted,vt.innerHTML=v.muted?'<i class="fas fa-volume-mute"></i>':'<i class="fas fa-volume-up"></i>'}),vl.addEventListener("input",e=>{v.volume=e.target.value,v.muted=0===v.volume,vt.innerHTML=v.muted?'<i class="fas fa-volume-mute"></i>':'<i class="fas fa-volume-up"></i>',vl.style.background=`linear-gradient(to right, #e20613 ${v.volume*100}%, #444 ${v.volume*100}%)`}),u.addEventListener("click",()=>{v.muted=!1,u.style.display="none",vt.innerHTML='<i class="fas fa-volume-up"></i>'}),fs.addEventListener("click",()=>{document.fullscreenElement?document.exitFullscreen():v.parentElement.requestFullscreen()});
  </script>
</body>
</html>
