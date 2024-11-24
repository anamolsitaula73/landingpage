<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Video Player</title>
  <!-- Link to Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .video-player {
      position: relative;
      width: 1100px;
      max-width: 100%;
      background: #000;
      border-radius: 8px;
      overflow: hidden;
      margin: 20px auto;
    }

    video {
      width: 100%;
      height: auto;
      cursor: pointer;
    }

    .controls {
      position: absolute;
      bottom: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.7);
      padding: 10px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .video-player:hover .controls {
      opacity: 1;
      visibility: visible;
    }

    .controls button {
      background: none;
      border: none;
      color: white;
      font-size: 18px;
      cursor: pointer;
      margin-right: 10px;
      transition: transform 0.2s ease, color 0.2s ease;
    }

    .controls button:hover {
      transform: scale(1.2); 
      color: white;
    }

    .progress-bar {
      flex-grow: 1;
      margin: 0 10px;
      position: relative;
      cursor: pointer;
    }

    .progress-slider {
    width: 100%;
    height: 5px;
    appearance: none;
    background: linear-gradient(to right, #e20613 0%, #e20613 0%, #444 0%, #444 100%);
    border-radius: 5px;
    outline: none;
    cursor: pointer;
  }

  .progress-slider::-webkit-slider-thumb {
    appearance: none;
    width: 10px;
    height: 10px;
    background: white;
    border-radius: 50%;
    cursor: pointer;
  }

  .progress-slider::-moz-range-thumb {
    width: 10px;
    height: 10px;
    background: #e20613;
    border-radius: 50%;
    cursor: pointer;
  }

    .time {
      color: white;
      font-size: 14px;
    }

    .fullscreen {
      font-size: 20px;
    }

    .volume-controls {
      display: flex;
      align-items: center;
    }

    .volume-slider {
      width: 100px;
      height: 5px;
      margin-left: 5px;
      appearance: none;
      background: #444;
      border-radius: 5px;
      outline: none;
      cursor: pointer;
    }

    .volume-slider::-webkit-slider-thumb {
      appearance: none;
      width: 10px;
      height: 10px;
      background: #e20613;
      border-radius: 50%;
      cursor: pointer;
    }

    .play-icon,
    .pause-icon {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0);
      font-size: 60px;
      color: white;
      opacity: 0.8;
      z-index: 10;
      pointer-events: none;
      transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .show-play-icon,
    .show-pause-icon {
      transform: translate(-50%, -50%) scale(1.2);
      opacity: 1;
    }

    .hidden {
      transform: translate(-50%, -50%) scale(0);
      opacity: 0;
    }

    .unmute-overlay {
      position: absolute;
      top: 0;
      right: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-size: 16px;
      z-index: 15;
      pointer-events: auto;
    }
  </style>
</head>
<body>
  <div class="video-player">
    <video id="video" src="assets/video/accounting.mp4" muted autoplay></video>
    <div id="unmute-overlay" class="unmute-overlay">Click to Unmute</div>
    <div class="play-icon hidden" id="play-icon"><i class="fas fa-play-circle"></i></div>
    <div class="pause-icon hidden" id="pause-icon"><i class="fas fa-pause-circle"></i></div>
    <div class="controls">
      <button id="play-pause"><i class="fas fa-pause"></i></button>
      <div class="progress-bar">
        <input
          type="range"
          id="progress-slider"
          min="0"
          max="100"
          step="0.1"
          value="0"
          class="progress-slider"
        />
      </div>
      <div class="time" id="time">0:00 / 0:00</div>&nbsp;&nbsp;
      <div class="volume-controls">
        <button id="volume-toggle"><i class="fas fa-volume-mute"></i></button>
        <input type="range" id="volume-slider" class="volume-slider" min="0" max="1" step="0.1" value="0.5">
      </div>&nbsp;&nbsp;
      <button class="fullscreen" id="fullscreen"><i class="fas fa-expand"></i></button>
    </div>
  </div>

  <script>
    const video = document.getElementById("video");
    const playPauseBtn = document.getElementById("play-pause");
    const playIcon = document.getElementById("play-icon");
    const pauseIcon = document.getElementById("pause-icon");
    const progressSlider = document.getElementById("progress-slider");
    const timeDisplay = document.getElementById("time");
    const fullscreenBtn = document.getElementById("fullscreen");
    const volumeToggle = document.getElementById("volume-toggle");
    const volumeSlider = document.getElementById("volume-slider");
    const unmuteOverlay = document.getElementById("unmute-overlay");

    window.addEventListener("load", () => {
      showIcon(pauseIcon);
    });

    playPauseBtn.addEventListener("click", togglePlayPause);
    video.addEventListener("click", togglePlayPause);

    function togglePlayPause() {
      if (video.paused) {
        video.play();
        playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
        showIcon(pauseIcon);
      } else {
        video.pause();
        playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
        showIcon(playIcon);
      }
    }

    function showIcon(icon) {
      playIcon.classList.add("hidden");
      pauseIcon.classList.add("hidden");
      icon.classList.remove("hidden");
      icon.classList.add(icon === playIcon ? "show-play-icon" : "show-pause-icon");
      setTimeout(() => {
        icon.classList.remove("show-play-icon", "show-pause-icon");
        icon.classList.add("hidden");
      }, 600);
    }

    video.addEventListener("timeupdate", () => {
      const percent = (video.currentTime / video.duration) * 100;
      progressSlider.value = percent;

      const currentMinutes = Math.floor(video.currentTime / 60);
      const currentSeconds = Math.floor(video.currentTime % 60);
      const durationMinutes = Math.floor(video.duration / 60);
      const durationSeconds = Math.floor(video.duration % 60);
      progressSlider.style.background = `linear-gradient(to right, #e20613 ${percent}%, #444 ${percent}%)`;

      timeDisplay.textContent = `${currentMinutes}:${currentSeconds
        .toString()
        .padStart(2, "0")} / ${durationMinutes}:${durationSeconds
        .toString()
        .padStart(2, "0")}`;
    });

    progressSlider.addEventListener("input", (e) => {
      const newTime = (e.target.value / 100) * video.duration;
      video.currentTime = newTime;
      const percent = (progressSlider.value / 100) * 100;
    progressSlider.style.background = `linear-gradient(to right, #e20613 ${percent}%, #444 ${percent}%)`;
    });

    volumeToggle.addEventListener("click", () => {
      video.muted = !video.muted;
      volumeToggle.innerHTML = video.muted ? '<i class="fas fa-volume-mute"></i>' : '<i class="fas fa-volume-up"></i>';
    });

    volumeSlider.addEventListener("input", (e) => {
      video.volume = e.target.value;
      video.muted = video.volume === 0;
      volumeToggle.innerHTML = video.muted ? '<i class="fas fa-volume-mute"></i>' : '<i class="fas fa-volume-up"></i>';
    });

    unmuteOverlay.addEventListener("click", () => {
      video.muted = false;
      unmuteOverlay.style.display = "none";
      volumeToggle.innerHTML = '<i class="fas fa-volume-up"></i>';
    });

    fullscreenBtn.addEventListener("click", () => {
      if (document.fullscreenElement) {
        document.exitFullscreen();
      } else {
        video.parentElement.requestFullscreen();
      }
    });
  </script>
</body>
</html>
