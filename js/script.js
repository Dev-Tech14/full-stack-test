$(document).ready(function () {
  function loadCategory(category) {
    $.ajax({
      url: 'read.php',
      method: 'GET',
      data: { category: category },
      success: function (response) {
        const data = JSON.parse(response);
        let textSlides = '', imageSlides = '', indicators = '';

        data.forEach((item, index) => {
          let active = index === 0 ? 'active' : '';
        


            textSlides += `
  <div class="carousel-item ${active}">
    <div class="slider-text">
      <h6>${item.subtitle ?? ''}</h6>
      <h3>${item.title}</h3>
      <a href="${item.link_url}" class="btn btn-link text-white mt-3 d-inline-block" target="_blank">
        Learn More <span>&rarr;</span>
      </a>
    </div>
  </div>`;


          imageSlides += `
            <div class="carousel-item ${active}">
              <img src="${item.image_url}" class="d-block w-100">
            </div>`;

          indicators += `
            <li data-target="#contentSlider" data-slide-to="${index}" class="${active}"></li>`;
        });

        $('#text-content').html(textSlides);
        $('#image-content').html(imageSlides);
        $('#content-indicators').html(indicators);
        $('#contentSlider').carousel(0);
        $('#imageSlider').carousel(0);
      }
    });
  }

  $('#tabMenu .nav-link').click(function (e) {
    e.preventDefault();
    $('#tabMenu .nav-link').removeClass('active');
    $(this).addClass('active');
    loadCategory($(this).data('category'));
  });

  $('#contentSlider').on('slide.bs.carousel', function (e) {
    $('#imageSlider').carousel(e.to);
  });

  loadCategory('Learning');
});






function loadMobileCategory(category) {
  $.ajax({
    url: 'read.php',
    method: 'GET',
    data: { category: category },
    success: function (response) {
        
      const data = JSON.parse(response);
      console.log('Fetched data:', data);
      let slides = '', indicators = '';



      data.forEach((item, index) => {
        const active = index === 0 ? 'active' : '';
        slides += `
          <div class="carousel-item ${active}">
            <div class="mobile-slide" style="background-image: url('${item.image_url}')">
              <div class="slider-text">
                <h6>${item.subtitle ?? ''}</h6>
                <h3>${item.title}</h3>
              
                <a href="${item.link_url ?? '#'}" target="_blank">Learn More →</a>
              </div>
            </div>
          </div>
        `;
        indicators += `<li data-target="#mobileSlider${category}" data-slide-to="${index}" class="${active}"></li>`;
      });

      $(`#mobile-${category.toLowerCase()}-content`).html(slides);
      $(`#mobile-${category.toLowerCase()}-indicators`).html(indicators);
      $(`#mobileSlider${category}`).carousel(0);
    }
  });
}

// Load default (Learning) for mobile on load
loadMobileCategory('Learning');

// Load respective category when mobile accordion opens
$('#mobileAccordion .collapse').on('show.bs.collapse', function () {
  const collapseId = $(this).attr('id'); // e.g., collapseLearning
  const category = collapseId.replace('collapse', ''); // -> Learning
  loadMobileCategory(category);
});





$('#mobileAccordion .collapse').on('shown.bs.collapse', function () {
  // Reset all toggle icons to plus
  $('#mobileAccordion .card .btn .toggle-icon').attr('src', 'images/plus-01.svg');

  // Set current one to minus
  $(this).prev('.card-header').find('.toggle-icon').attr('src', 'images/minus-01.svg');

  const category = this.id.replace('collapse', '');
  loadMobileCategory(category);
});

$('#mobileAccordion .collapse').on('hidden.bs.collapse', function () {
  $(this).prev('.card-header').find('.toggle-icon').attr('src', 'images/plus-01.svg');
});
