const bgm = document.getElementById('bgm');
const toggleBtn = document.getElementById('toggleMusic');

toggleBtn.addEventListener('click', () => {
  if (bgm.paused) {
    bgm.play();
    toggleBtn.textContent = '🔊 Pause Musik';
  } else {
    bgm.pause();
    toggleBtn.textContent = '🔈 Play Musik';
  }
});
