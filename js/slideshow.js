// Lấy danh sách các slide
var slides = document.querySelectorAll('.slide');
var currentSlide = 0;

// Chạy slide show tự động
function startSlideshow() {
  setInterval(function() {
    // Ẩn slide hiện tại
    slides[currentSlide].style.display = 'none';
    
    // Tăng chỉ số slide
    currentSlide = (currentSlide + 1) % slides.length;
    
    // Hiển thị slide tiếp theo
    slides[currentSlide].style.display = 'block';
  }, 2000); // Thời gian chờ giữa các slide (đơn vị: milliseconds)
}

// Bắt đầu slide show khi trang được tải
window.onload = startSlideshow;
