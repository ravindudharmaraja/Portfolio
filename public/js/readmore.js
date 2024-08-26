 // JavaScript to toggle the "Read more" content
 document.getElementById('read-more-button').addEventListener('click', function (e) {
    e.preventDefault();
    var readMoreContent = document.getElementById('read-more-content');
    var readMoreButton = document.getElementById('read-more-button');

    if (readMoreContent.style.display === 'none' || readMoreContent.style.display === '') {
      readMoreContent.style.display = 'block';
      readMoreButton.textContent = 'Read less';
    } else {
      readMoreContent.style.display = 'none';
      readMoreButton.textContent = 'Read more';
    }
  });

  // JavaScript to toggle the "Read more" content for UI/UX Design
  document.getElementById('read-more-uiux-button').addEventListener('click', function (e) {
    e.preventDefault();
    var uiuxDescription = document.getElementById('uiux-description');
    var readMoreUIUXContent = document.getElementById('read-more-uiux-content');
    var readMoreUIUXButton = document.getElementById('read-more-uiux-button');

    if (readMoreUIUXContent.style.display === 'none' || readMoreUIUXContent.style.display === '') {
      readMoreUIUXContent.style.display = 'block';
      readMoreUIUXButton.textContent = 'Read less';
      uiuxDescription.style.display = 'none'; // Hide the initial description
    } else {
      readMoreUIUXContent.style.display = 'none';
      readMoreUIUXButton.textContent = 'Read more';
      uiuxDescription.style.display = 'block'; // Show the initial description
    }
  });

    // JavaScript to toggle the "Read more" content for Graphic Design
    document.getElementById('read-more-graphic-button').addEventListener('click', function (e) {
        e.preventDefault();
        var graphicDescription = document.getElementById('graphic-description');
        var readMoreGraphicContent = document.getElementById('read-more-graphic-content');
        var readMoreGraphicButton = document.getElementById('read-more-graphic-button');
    
        if (readMoreGraphicContent.style.display === 'none' || readMoreGraphicContent.style.display === '') {
          readMoreGraphicContent.style.display = 'block';
          readMoreGraphicButton.textContent = 'Read less';
          graphicDescription.style.display = 'none'; // Hide the initial description
        } else {
          readMoreGraphicContent.style.display = 'none';
          readMoreGraphicButton.textContent = 'Read more';
          graphicDescription.style.display = 'block'; // Show the initial description
        }
      });

      // JavaScript to toggle the "Read more" content for Mobile App Design
  document.getElementById('read-more-mobile-app-button').addEventListener('click', function (e) {
    e.preventDefault();
    var mobileAppDescription = document.getElementById('mobile-app-description');
    var readMoreMobileAppContent = document.getElementById('read-more-mobile-app-content');
    var readMoreMobileAppButton = document.getElementById('read-more-mobile-app-button');

    if (readMoreMobileAppContent.style.display === 'none' || readMoreMobileAppContent.style.display === '') {
      readMoreMobileAppContent.style.display = 'block';
      readMoreMobileAppButton.textContent = 'Read less';
      mobileAppDescription.style.display = 'none'; // Hide the initial description
    } else {
      readMoreMobileAppContent.style.display = 'none';
      readMoreMobileAppButton.textContent = 'Read more';
      mobileAppDescription.style.display = 'block'; // Show the initial description
    }
  });

  // JavaScript to toggle the "Read more" content for Advertising
  document.getElementById('read-more-advertising-button').addEventListener('click', function (e) {
    e.preventDefault();
    var advertisingDescription = document.getElementById('advertising-description');
    var readMoreAdvertisingContent = document.getElementById('read-more-advertising-content');
    var readMoreAdvertisingButton = document.getElementById('read-more-advertising-button');

    if (readMoreAdvertisingContent.style.display === 'none' || readMoreAdvertisingContent.style.display === '') {
      readMoreAdvertisingContent.style.display = 'block';
      readMoreAdvertisingButton.textContent = 'Read less';
      advertisingDescription.style.display = 'none'; // Hide the initial description
    } else {
      readMoreAdvertisingContent.style.display = 'none';
      readMoreAdvertisingButton.textContent = 'Read more';
      advertisingDescription.style.display = 'block'; // Show the initial description
    }
  });