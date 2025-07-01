<footer class="text-light pt-5" style="background: linear-gradient(to right, #04849e, #08245b);">
  <div class="container">
    <div class="row gy-4">

      <!-- About Us -->
      <div class="col-md-4">
        <h4 class="footer-title"><i class="bi bi-geo-alt-fill me-2"></i> Head Office</h4>
        <p class="mb-1 small">Sai Samruddhi, Chinchwade Nagar,</p>
        <p class="mb-1 small">Swapnshilp Colony, Pimpri-Chinchwad,</p>
        <p class="mb-1 small">Maharashtra 411035</p>
        <p class="mb-0 mt-2 text-light"><i class="bi bi-envelope-fill me-2"></i>info@xyz.com</p>
      </div>

      <!-- Job Oriented Courses -->
      <div class="col-md-5">
        <h4 class="footer-title border1 pb-2 mb-3">Job Oriented Courses</h4>
        <div class="row">
          <div class="col-6 small">
            <p class="mb-2">Full Stack Development</p>
            <p class="mb-2">Cloud Computing Training</p>
            <p class="mb-2">Digital Marketing Training</p>
          </div>
          <div class="col-6 small">
            <p class="mb-2">Azure Certification </p>
            <p class="mb-2">Web Development</p>
            <p class="mb-2">UI/UX</p>
          </div>
        </div>
      </div>

      <!-- Contact & Social -->
      <div class="col-md-2 ms-n3">
        <h4 class="footer-title mb-3">Follow Us On:</h4>
        <div class="d-flex gap-3 mb-3">
          <a href="#" class="text-white fs-5"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white fs-5"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-white fs-5"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white fs-5"><i class="bi bi-youtube"></i></a>
        </div>

      </div>
    </div>
    <div class="row ">
      <div class="col-md-4">

      </div>
      <div class="col-md-8  mt-2">
       <hr>
        <div class="d-flex flex-wrap gap-4 text-white ">
          <p class="mb-1 mt-3"><i class="bi bi-telephone-fill me-2"></i>+91 99706 00000 / 98706 00000</p>
          <!-- <p class="mb-0"><i class="bi bi-question-circle me-2"></i>+91 99706 11896</p> -->
          <p class="mb-1 mt-3"><i class="bi bi-geo-alt me-2"></i>Pune | Nagpur | Solapur</p>
        </div>
      </div>
    </div>
    <hr>
    <!-- Footer Bottom -->
    <div class="text-center border1 p-4 mt-4 text-light  ">
      &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
    </div>
  </div>

  <!-- AOS Animation Script -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>

  <?php wp_footer(); ?>
</footer>
</body>

</html>
