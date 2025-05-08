const prevBtn = [];
const nextBtn = [];
const carousel = [];

for (let i = 0; i < 6; i++) {
  prevBtn[i] = document.getElementById(`prev${i}`);
  nextBtn[i] = document.getElementById(`next${i}`);
  carousel[i] = document.getElementById(`carousel${i}`);

  // Scroll by card width
  const scrollAmount = 300 + 32; // Card width + gap

  prevBtn[i].addEventListener("click", () => {
    carousel[i].scrollBy({ left: -scrollAmount, behavior: "smooth" });
  });

  nextBtn[i].addEventListener("click", () => {
    carousel[i].scrollBy({ left: scrollAmount, behavior: "smooth" });
  });
}
