<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Video Player</title>
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
      font-size: 50px;
      color: white;
      opacity: 0.8;
      z-index: 10;
      pointer-events: none;
      transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .show-play-icon {
      transform: translate(-50%, -50%) scale(1.2);
      opacity: 1;
    }

    .show-pause-icon {
      transform: translate(-50%, -50%) scale(1.2);
      opacity: 1;
    }
  </style>
</head>
<body>
  <div class="video-player">
    <video id="video" src="assets/video/eaccounting.mp4" muted autoplay></video>
    <div class="play-icon" id="play-icon">▶</div>
    <div class="pause-icon" id="pause-icon">⏸</div>
    <div class="controls">
      <button id="play-pause">▶</button>
      <div class="progress-bar" id="progress-bar">
        <span></span>
      </div>
      <div class="time" id="time">0:00 / 0:00</div>
      <div class="volume-controls">
        <button id="volume-toggle">🔇</button>
        <input type="range" id="volume-slider" class="volume-slider" min="0" max="1" step="0.1" value="0.5">
      </div>
      <button class="fullscreen" id="fullscreen">⛶</button>
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
      pauseIcon.textContent = "⏸";
      pauseIcon.classList.add("show-pause-icon");
      setTimeout(() => {
        pauseIcon.classList.remove("show-pause-icon");
      }, 600);
    });

    // Play/Pause functionality
    playPauseBtn.addEventListener("click", togglePlayPause);

    video.addEventListener("click", () => {
      togglePlayPause();

      // Show pause icon
      if (video.paused) {
        pauseIcon.textContent = "⏸";
        pauseIcon.classList.add("show-pause-icon");
        playIcon.classList.remove("show-play-icon");
        setTimeout(() => {
          pauseIcon.classList.remove("show-pause-icon");
        }, 600);
      }
    });

    // Double-click for seeking
    video.addEventListener("dblclick", (e) => {
      const rect = video.getBoundingClientRect();
      const clickX = e.clientX - rect.left;

      if (clickX > rect.width / 2) {
        video.currentTime += 10; // Seek forward
      } else {
        video.currentTime -= 10; // Seek backward
      }
    });

    // Toggle play/pause function
    function togglePlayPause() {
      if (video.paused) {
        video.play();
        playPauseBtn.textContent = "⏸";
        playIcon.classList.remove("show-play-icon");
        pauseIcon.classList.add("show-pause-icon");
      } else {
        video.pause();
        playPauseBtn.textContent = "▶";
        pauseIcon.classList.remove("show-pause-icon");
        playIcon.classList.add("show-play-icon");
      }
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
      const newTime = (clickX / width) * video.duration;
      video.currentTime = newTime;
    });

    // Volume toggle (mute/unmute)
    volumeToggle.addEventListener("click", () => {
      video.muted = !video.muted;
      volumeToggle.textContent = video.muted ? "🔇" : "🔊";
    });

    // Volume slider
    volumeSlider.addEventListener("input", (e) => {
      video.volume = e.target.value;
      video.muted = video.volume === 0;
      volumeToggle.textContent = video.muted ? "🔇" : "🔊";
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
