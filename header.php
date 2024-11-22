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
    }

    .controls button:hover {
      color: #e20613;
    }

    .progress-bar {
      flex-grow: 1;
      height: 5px;
      background: white;
      border-radius: 5px;
      margin: 0 10px;
      position: relative;
      cursor: pointer;
    }

    .progress-bar span {
      display: block;
      height: 100%;
      width: 0;
      background: #e20613;
      border-radius: 5px;
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

    /* Play and Pause Icon */
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
  </style>
</head>
<body>
  <div class="video-player">
    <video id="video" src="assets/video/eaccounting.mp4" muted autoplay></video>
    <div class="play-icon hidden" id="play-icon"><i class="fas fa-play-circle"></i></div>
    <div class="pause-icon hidden" id="pause-icon"><i class="fas fa-pause-circle"></i></div>
    <div class="controls">
      <button id="play-pause"><i class="fas fa-pause"></i></button>
      <div class="progress-bar" id="progress-bar">
        <span></span>
      </div>
      <div class="time" id="time">0:00 / 0:00 </div>&nbsp;
      <div class="volume-controls">
        <button id="volume-toggle"><i class="fas fa-volume-mute"></i></button>
        <input type="range" id="volume-slider" class="volume-slider" min="0" max="1" step="0.1" value="0.5">
      </div>
      <button class="fullscreen" id="fullscreen"><i class="fas fa-expand"></i></button>
    </div>
  </div>

  <script>
    const video = document.getElementById("video");
    const playPauseBtn = document.getElementById("play-pause");
    const playIcon = document.getElementById("play-icon");
    const pauseIcon = document.getElementById("pause-icon");
    const progressBar = document.getElementById("progress-bar");
    const progress = progressBar.querySelector("span");
    const timeDisplay = document.getElementById("time");
    const fullscreenBtn = document.getElementById("fullscreen");
    const volumeToggle = document.getElementById("volume-toggle");
    const volumeSlider = document.getElementById("volume-slider");

    // Show initial pause icon
    window.addEventListener("load", () => {
      showIcon(pauseIcon);
    });

    // Play/Pause functionality
    playPauseBtn.addEventListener("click", togglePlayPause);
    video.addEventListener("click", togglePlayPause);

    // Toggle play/pause function
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

    // Show and hide play/pause icon
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

    // Update progress bar and time
    video.addEventListener("timeupdate", () => {
      const percent = (video.currentTime / video.duration) * 100;
      progress.style.width = percent + "%";

      const currentMinutes = Math.floor(video.currentTime / 60);
      const currentSeconds = Math.floor(video.currentTime % 60);
      const durationMinutes = Math.floor(video.duration / 60);
      const durationSeconds = Math.floor(video.duration % 60);

      timeDisplay.textContent = `${currentMinutes}:${currentSeconds
        .toString()
        .padStart(2, "0")} / ${durationMinutes}:${durationSeconds
        .toString()
        .padStart(2, "0")}`;
    });

    // Seek functionality
    progressBar.addEventListener("click", (e) => {
      const rect = progressBar.getBoundingClientRect();
      const clickX = e.clientX - rect.left;
      const width = rect.width;
      video.currentTime = (clickX / width) * video.duration;
    });

    // Volume toggle (mute/unmute)
    volumeToggle.addEventListener("click", () => {
      video.muted = !video.muted;
      volumeToggle.innerHTML = video.muted ? '<i class="fas fa-volume-mute"></i>' : '<i class="fas fa-volume-up"></i>';
    });

    // Volume slider
    volumeSlider.addEventListener("input", (e) => {
      video.volume = e.target.value;
      video.muted = video.volume === 0;
      volumeToggle.innerHTML = video.muted ? '<i class="fas fa-volume-mute"></i>' : '<i class="fas fa-volume-up"></i>';
    });

    // Fullscreen toggle
    fullscreenBtn.addEventListener("click", () => {
      if (!document.fullscreenElement) {
        video.parentElement.requestFullscreen();
      } else {
        document.exitFullscreen();
      }
    });
  </script>
</body>
</html>
